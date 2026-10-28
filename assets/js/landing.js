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

  const statement = root.querySelector('[data-lp-words]');
  const words = [];
  if (statement) {
    const gold = (statement.dataset.gold || '').split('|');
    const text = statement.textContent.trim();
    statement.textContent = '';
    text.split(/\s+/).forEach((w, i) => {
      const s = document.createElement('span');
      s.className = 'lp-w' + (gold.includes(w.replace(/[.,]/g, '')) ? ' lp-w--gold' : '');
      s.textContent = w;
      statement.appendChild(s);
      statement.appendChild(document.createTextNode(' '));
      words.push(s);
    });
  }

  const art = root.querySelector('.lp-hero-art img');
  const player = root.querySelector('[data-lp-player]');

  let ticking = false;
  const frame = () => {
    ticking = false;
    const vh = window.innerHeight / zoom();
    if (words.length) {
      const r = statement.getBoundingClientRect();
      const p = Math.min(1, Math.max(0, (vh * 0.85 - r.top) / (r.height + vh * 0.35)));
      const on = Math.round(p * words.length);
      words.forEach((w, i) => w.classList.toggle('is-on', i < on));
    }
    if (art && !reduce) {
      const r = hero.getBoundingClientRect();
      art.style.setProperty('--lp-p', Math.min(1, Math.max(0, -r.top / r.height)).toFixed(3));
    }
    if (player && !reduce && window.innerWidth > 800) {
      const r = player.getBoundingClientRect();
      const p = Math.min(1, Math.max(0, (vh - r.top) / (vh * 0.9)));
      player.style.setProperty('--lp-v', p.toFixed(3));
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

  const list = root.querySelector('.lp-ind-list');
  const float = root.querySelector('.lp-ind-float');
  const fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  if (list && float && fine) {
    const fimg = float.querySelector('img');
    let lastX = 0;
    const place = (e) => {
      const z = zoom();
      const x = e.clientX / z;
      const y = e.clientY / z;
      float.style.setProperty('--fx', (x + 30).toFixed(1) + 'px');
      float.style.setProperty('--fy', (y - 110).toFixed(1) + 'px');
      float.style.setProperty('--fr', Math.max(-8, Math.min(8, (x - lastX) * 0.6)).toFixed(2) + 'deg');
      lastX = x;
    };
    list.querySelectorAll('[data-img]').forEach((row) => {
      const pre = new Image();
      pre.src = row.dataset.img;
      row.addEventListener('pointerenter', (e) => {
        fimg.src = row.dataset.img;
        if (!float.classList.contains('is-on')) {
          float.style.transition = 'none';
          place(e);
          void float.offsetWidth;
          float.style.transition = '';
        }
        float.classList.add('is-on');
      });
    });
    list.addEventListener('pointermove', place);
    list.addEventListener('pointerleave', () => float.classList.remove('is-on'));
    window.addEventListener('scroll', () => float.classList.remove('is-on'), { passive: true });
  }
})();
