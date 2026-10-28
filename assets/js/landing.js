(function () {
  const root = document.querySelector('.lp');
  if (!root) return;
  document.documentElement.classList.add('lp-js');
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const zoom = () => parseFloat(getComputedStyle(document.documentElement).zoom) || 1;

  const hero = root.querySelector('.lp-hero');
  requestAnimationFrame(() => hero && hero.classList.add('is-in'));

  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-in');
      io.unobserve(entry.target);
    });
  }, { threshold: 0.15 });
  document.querySelectorAll('[data-lp-in]').forEach((el) => io.observe(el));

  const toasts = Array.from(root.querySelectorAll('.lp-toast'));
  if (toasts.length) {
    let t = 0;
    const cycle = () => {
      toasts.forEach((el, i) => el.classList.toggle('is-on', i === t % toasts.length || i === (t + 1) % toasts.length));
      t += 1;
    };
    setTimeout(cycle, 900);
    if (!reduce) setInterval(cycle, 2600);
  }

  const wall = root.querySelector('.lp-wall-tilt');
  const ind = root.querySelector('.lp-ind');
  const track = ind && ind.querySelector('.lp-ind-track');

  let lockUntil = 0;
  let lockedOnce = false;
  let lastY = window.scrollY;
  let lockY = 0;
  const locked = () => performance.now() < lockUntil;
  window.addEventListener('scroll', () => {
    if (locked() && Math.abs(window.scrollY - lockY) > 1) window.scrollTo({ top: lockY, behavior: 'instant' });
  }, { passive: true });
  const block = (e) => {
    if (locked()) e.preventDefault();
  };
  window.addEventListener('wheel', block, { passive: false });
  window.addEventListener('touchmove', block, { passive: false });
  window.addEventListener('keydown', (e) => {
    if (locked() && ['ArrowDown', 'PageDown', ' ', 'End'].includes(e.key)) e.preventDefault();
  });

  let ticking = false;
  const frame = () => {
    ticking = false;
    if (wall && !reduce) {
      const r = hero.getBoundingClientRect();
      wall.style.setProperty('--lp-p', Math.min(1, Math.max(0, -r.top / r.height)).toFixed(3));
    }
    if (track && window.innerWidth > 800) {
      const r = ind.getBoundingClientRect();
      const total = r.height - window.innerHeight;
      const p = total > 0 ? Math.min(1, Math.max(0, -r.top / total)) : 0;
      const max = Math.max(0, track.scrollWidth - track.parentElement.clientWidth);
      track.style.setProperty('--lp-x', (p * max).toFixed(1));
      const y = window.scrollY;
      if (p >= 0.985 && !lockedOnce && y > lastY) {
        lockedOnce = true;
        lockY = Math.round(r.top + total + y);
        lockUntil = performance.now() + 1000;
        window.scrollTo({ top: lockY, behavior: 'instant' });
      }
      if (p < 0.9) lockedOnce = false;
      lastY = window.scrollY;
    }
  };
  const request = () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(frame);
  };
  window.addEventListener('scroll', request, { passive: true });
  window.addEventListener('resize', request);
  frame();

  const player = root.querySelector('[data-lp-player]');
  if (player) {
    const video = player.querySelector('video');
    const back = player.querySelector('.lp-skip--back');
    const fwd = player.querySelector('.lp-skip--fwd');
    let hideTimer = 0;
    const toggle = () => {
      if (video.paused) video.play();
      else video.pause();
    };
    const showSkips = () => {
      player.classList.add('is-active');
      clearTimeout(hideTimer);
      hideTimer = setTimeout(() => player.classList.remove('is-active'), 1000);
    };
    const seek = (by) => {
      const d = isFinite(video.duration) ? video.duration : Infinity;
      video.currentTime = Math.min(d, Math.max(0, video.currentTime + by));
      showSkips();
    };
    video.addEventListener('play', () => player.classList.add('is-playing'));
    video.addEventListener('pause', () => player.classList.remove('is-playing'));
    video.addEventListener('ended', () => player.classList.remove('is-playing'));
    player.addEventListener('click', (e) => {
      if (e.target.closest('.lp-skip')) return;
      toggle();
    });
    back.addEventListener('click', () => seek(-5));
    fwd.addEventListener('click', () => seek(5));
    player.addEventListener('mousemove', showSkips);
    player.addEventListener('mouseenter', showSkips);
    player.addEventListener('mouseleave', () => {
      clearTimeout(hideTimer);
      player.classList.remove('is-active');
    });
    player.addEventListener('touchstart', showSkips, { passive: true });
    player.addEventListener('keydown', (e) => {
      if (e.key === ' ' || e.key === 'Enter') {
        e.preventDefault();
        toggle();
      } else if (e.key === 'ArrowRight') {
        seek(5);
      } else if (e.key === 'ArrowLeft') {
        seek(-5);
      }
    });
  }
})();
