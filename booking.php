<?php
/**
 * Consultation call slots.
 * GET  /booking.php            -> available 30-minute slots (US Central time)
 * POST /booking.php slot=<id>  -> reserves the slot if it is still free
 */
declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex');

const BOOKING_TZ = 'America/Chicago';
const BOOKING_FILE = __DIR__ . '/data/bookings.json';
const BOOKING_WINDOW_DAYS = 60;

$tz = new DateTimeZone(BOOKING_TZ);
$now = new DateTimeImmutable('now', $tz);

function booking_load($handle): array
{
  rewind($handle);
  $raw = stream_get_contents($handle);
  $data = json_decode((string)$raw, true);
  return is_array($data) ? $data : [];
}

function booking_open()
{
  $dir = dirname(BOOKING_FILE);
  if (!is_dir($dir)) {
    @mkdir($dir, 0755, true);
  }
  $handle = @fopen(BOOKING_FILE, 'c+');
  if (!$handle) {
    return null;
  }
  flock($handle, LOCK_EX);
  return $handle;
}

function booking_close($handle): void
{
  flock($handle, LOCK_UN);
  fclose($handle);
}

/**
 * Deterministic pseudo-random sequence seeded by a string, so the same date always
 * produces the same slot selection. Mirrored in assets/js/consultation.js.
 */
function booking_seed(string $text): int
{
  $h = 0;
  $len = strlen($text);
  for ($i = 0; $i < $len; $i++) {
    $h = ($h * 31 + ord($text[$i])) % 2147483647;
  }
  return $h > 0 ? $h : 1;
}

function booking_next(int &$state): int
{
  $state = ($state * 48271) % 2147483647;
  return $state;
}

function booking_pick(array $minutes, int $count, string $seed): array
{
  $state = booking_seed($seed);
  for ($i = count($minutes) - 1; $i > 0; $i--) {
    $j = booking_next($state) % ($i + 1);
    [$minutes[$i], $minutes[$j]] = [$minutes[$j], $minutes[$i]];
  }
  $picked = array_slice($minutes, 0, $count);
  sort($picked);
  return $picked;
}

/**
 * Same day: one slot an hour from now, one afternoon slot (morning visitors only)
 * and 4:30 PM; after 2 PM only 4:30 PM. Next business day: six slots. Every business
 * day after that, up to BOOKING_WINDOW_DAYS ahead: the full 9:00-5:00 schedule.
 * Every day lists all slots; only the open ones can be booked.
 */
function booking_slots(DateTimeImmutable $now, array $booked): array
{
  $all = [];
  for ($m = 9 * 60; $m <= 16 * 60 + 30; $m += 30) {
    $all[] = $m;
  }
  $evening = 16 * 60 + 30;
  $isWeekday = static fn(DateTimeImmutable $d): bool => (int)$d->format('N') <= 5;
  $nowMin = (int)$now->format('G') * 60 + (int)$now->format('i');
  $today = $now->setTime(0, 0);
  $days = [];

  if ($isWeekday($today)) {
    $open = [$evening];
    if ($nowMin < 14 * 60) {
      $first = max(9 * 60, (int)(ceil(($nowMin + 60) / 30) * 30));
      $open[] = $first;
      if ($nowMin < 12 * 60) {
        $afternoon = array_values(array_filter($all, static fn(int $m): bool => $m >= 12 * 60 && $m < $evening && $m > $first));
        if ($afternoon) {
          $open = array_merge($open, booking_pick($afternoon, 1, $today->format('Y-m-d') . 'pm'));
        }
      }
    }
    $open = array_filter(array_unique($open), static fn(int $m): bool => $m >= 9 * 60 && $m <= $evening);
    $days[] = [$today, array_values($open)];
  }

  $cursor = $today;
  $last = $today->modify('+' . BOOKING_WINDOW_DAYS . ' days');
  $n = 0;
  while (true) {
    do {
      $cursor = $cursor->modify('+1 day');
    } while (!$isWeekday($cursor));
    if ($cursor > $last) {
      break;
    }
    $days[] = [$cursor, $n === 0 ? booking_pick($all, 6, $cursor->format('Y-m-d')) : $all];
    $n++;
  }

  $out = [];
  foreach ($days as [$day, $open]) {
    $slots = [];
    $available = 0;
    foreach ($all as $m) {
      $start = $day->setTime(intdiv($m, 60), $m % 60);
      $id = $start->format('Y-m-d\TH:i');
      $end = $start->modify('+30 minutes');
      $free = in_array($m, $open, true) && $start > $now->modify('+30 minutes') && !isset($booked[$id]);
      $available += $free ? 1 : 0;
      $slots[] = [
        'id' => $id,
        'label' => $start->format('g:i A') . ' - ' . $end->format('g:i A'),
        'available' => $free,
      ];
    }
    if ($available) {
      $out[] = [
        'date' => $day->format('Y-m-d'),
        'weekday' => $day->format('l'),
        'label' => $day->format('D, M j'),
        'slots' => $slots,
      ];
    }
  }
  return $out;
}

$handle = booking_open();
if (!$handle) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'error' => 'storage']);
  exit;
}
$booked = booking_load($handle);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $slot = (string)($_POST['slot'] ?? '');
  $valid = [];
  foreach (booking_slots($now, $booked) as $day) {
    foreach ($day['slots'] as $s) {
      if ($s['available']) {
        $valid[$s['id']] = $s;
      }
    }
  }
  if (!isset($valid[$slot])) {
    booking_close($handle);
    http_response_code(409);
    echo json_encode(['ok' => false, 'error' => 'taken', 'days' => booking_slots($now, $booked)]);
    exit;
  }
  $booked[$slot] = [
    'name' => mb_substr(trim(strip_tags((string)($_POST['name'] ?? ''))), 0, 120),
    'email' => mb_substr(trim(strip_tags((string)($_POST['email'] ?? ''))), 0, 160),
    'booked_at' => $now->format(DATE_ATOM),
  ];
  ftruncate($handle, 0);
  rewind($handle);
  fwrite($handle, (string)json_encode($booked, JSON_PRETTY_PRINT));
  fflush($handle);
  booking_close($handle);
  $start = new DateTimeImmutable($slot, $tz);
  echo json_encode(['ok' => true, 'label' => $start->format('l, F j') . ' at ' . $start->format('g:i A') . ' (Central Time)']);
  exit;
}

booking_close($handle);
echo json_encode(['ok' => true, 'timezone' => 'Central Time', 'days' => booking_slots($now, $booked)]);
