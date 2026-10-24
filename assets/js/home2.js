(function () {
  const hero = document.querySelector('[data-hx-hero]');
  if (!hero) return;
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const deck = hero.querySelector('[data-hx-deck]');
  const record = deck.querySelector('.hx-record');
  const shots = Array.from(deck.querySelectorAll('.hx-shot'));
  if (reduce) return;

  let angle = 0;
  let last = performance.now();
  let boost = 0;
  let lastY = window.scrollY;
  let visible = true;

  new IntersectionObserver((entries) => {
    visible = entries[0].isIntersecting;
    if (visible) {
      last = performance.now();
      requestAnimationFrame(tick);
    }
  }).observe(hero);

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    boost = Math.min(40, boost + Math.abs(y - lastY) * 0.35);
    lastY = y;
    const p = Math.min(1, Math.max(0, y / hero.offsetHeight));
    shots.forEach((s, i) => s.style.setProperty('--sy', (p * (i ? -60 : 40)).toFixed(1) + 'px'));
  }, { passive: true });

  function tick(now) {
    if (!visible) return;
    const dt = Math.min(64, now - last);
    last = now;
    angle = (angle + dt * (0.012 + boost * 0.004)) % 360;
    boost *= 0.92;
    record.style.setProperty('--spin', angle.toFixed(2) + 'deg');
    requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);
})();
