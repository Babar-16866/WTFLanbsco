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
 * Business days start from the day after the visit. The first two days show three
 * slots each; every business day after that, up to BOOKING_WINDOW_DAYS ahead, shows
 * the full 9:00-5:00 schedule. Same-day visitors before noon may also take 4:30 PM.
 */
function booking_slots(DateTimeImmutable $now, array $booked): array
{
  $all = [];
  for ($m = 9 * 60; $m <= 16 * 60 + 30; $m += 30) {
    $all[] = $m;
  }
  $plans = [
    [9 * 60, 12 * 60, 16 * 60 + 30],
    [10 * 60, 14 * 60, 16 * 60],
  ];

  $days = [];
  $isWeekday = static fn(DateTimeImmutable $d): bool => (int)$d->format('N') <= 5;

  if ($isWeekday($now) && (int)$now->format('G') < 12) {
    $days[] = [$now->setTime(0, 0), [16 * 60 + 30]];
  }

  $cursor = $now->setTime(0, 0);
  $last = $now->setTime(0, 0)->modify('+' . BOOKING_WINDOW_DAYS . ' days');
  $n = 0;
  while (true) {
    do {
      $cursor = $cursor->modify('+1 day');
    } while (!$isWeekday($cursor));
    if ($cursor > $last) {
      break;
    }
    $days[] = [$cursor, $plans[$n] ?? $all];
    $n++;
  }

  $out = [];
  foreach ($days as [$day, $minutes]) {
    $slots = [];
    foreach ($minutes as $m) {
      $start = $day->setTime(intdiv($m, 60), $m % 60);
      if ($start <= $now->modify('+30 minutes')) {
        continue;
      }
      $id = $start->format('Y-m-d\TH:i');
      if (isset($booked[$id])) {
        continue;
      }
      $end = $start->modify('+30 minutes');
      $slots[] = [
        'id' => $id,
        'label' => $start->format('g:i A') . ' - ' . $end->format('g:i A'),
      ];
    }
    if ($slots) {
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
      $valid[$s['id']] = $s;
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
