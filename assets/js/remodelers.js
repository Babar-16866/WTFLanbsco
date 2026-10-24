(function () {
  const root = document.querySelector('.rx');
  if (!root) return;

  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  const wide = () => window.innerWidth >= 1025;
  const zoom = () => parseFloat(getComputedStyle(document.documentElement).zoom) || 1;
  const clamp = (v, a, b) => Math.min(b, Math.max(a, v));
  const tasks = [];
  const layouts = [];

  const probe = document.createElement('div');
  probe.style.cssText = 'position:fixed;top:0;left:0;width:0;height:100%;visibility:hidden;pointer-events:none';
  root.appendChild(probe);
  const viewH = () => probe.getBoundingClientRect().height || window.innerHeight;

  const revealIO = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-in');
      revealIO.unobserve(entry.target);
    });
  }, { threshold: 0.15 });
  document.querySelectorAll('[data-rx-reveal]').forEach((el) => revealIO.observe(el));

  if (fine && !reduce) {
    document.querySelectorAll('[data-rx-tilt]').forEach((el) => {
      const target = el.querySelector('.rx-hero-phones') || el;
      el.addEventListener('mousemove', (e) => {
        const r = el.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width - 0.5;
        const y = (e.clientY - r.top) / r.height - 0.5;
        target.style.setProperty('--ty', (x * 12).toFixed(2) + 'deg');
        target.style.setProperty('--tx', (-y * 9).toFixed(2) + 'deg');
      });
      el.addEventListener('mouseleave', () => {
        target.style.setProperty('--ty', '0deg');
        target.style.setProperty('--tx', '0deg');
      });
    });
  }

  const hero = root.querySelector('[data-rx-hero]');
  if (hero && !reduce) {
    const phones = hero.querySelector('.rx-hero-phones');
    tasks.push(() => {
      const r = hero.getBoundingClientRect();
      phones.style.setProperty('--hp', clamp(-r.top / r.height, 0, 1).toFixed(3));
    });
  }

  const exp = root.querySelector('[data-rx-hscroll]');
  if (exp) {
    const pin = exp.querySelector('.rx-exp-pin');
    const view = exp.querySelector('.rx-exp-view');
    const track = exp.querySelector('.rx-exp-track');
    const cards = Array.from(exp.querySelectorAll('.rx-exp-card'));
    let dist = 0;
    let endAt = 0;
    let atEnd = false;
    const endY = () => window.scrollY + exp.getBoundingClientRect().bottom - pin.getBoundingClientRect().height;
    const locked = () => {
      if (!exp.classList.contains('is-pin') || performance.now() - endAt >= 2000) return false;
      return Math.abs(window.scrollY - endY()) <= 2;
    };
    window.addEventListener('wheel', (e) => {
      if (!exp.classList.contains('is-pin') || e.deltaY <= 0) return;
      const y = window.scrollY;
      const ey = endY();
      const delta = e.deltaMode === 1 ? e.deltaY * 40 : e.deltaMode === 2 ? e.deltaY * window.innerHeight : e.deltaY;
      if (y < ey - 2 && y + delta > ey + 2) {
        e.preventDefault();
        window.scrollTo({ top: ey, behavior: 'instant' });
        endAt = performance.now();
        atEnd = true;
        return;
      }
      if (locked()) e.preventDefault();
    }, { passive: false });
    window.addEventListener('keydown', (e) => {
      if (!['ArrowDown', 'PageDown', ' '].includes(e.key) || e.target.closest('input, textarea, select, [contenteditable]')) return;
      if (locked()) e.preventDefault();
    });
    layouts.push(() => {
      const on = wide() && !reduce;
      exp.classList.toggle('is-pin', on);
      if (!on) {
        exp.style.height = '';
        track.style.removeProperty('--hx');
        cards.forEach((c) => {
          c.style.removeProperty('--cr');
          c.style.removeProperty('--px');
        });
        return;
      }
      dist = Math.max(0, track.scrollWidth - view.clientWidth);
      exp.style.height = 'calc(var(--rx-vh) + ' + dist + 'px)';
    });
    tasks.push(() => {
      if (!exp.classList.contains('is-pin')) return;
      const r = exp.getBoundingClientRect();
      const span = r.height - pin.getBoundingClientRect().height;
      const p = span > 0 ? clamp(-r.top / span, 0, 1) : 0;
      const isEnd = p >= 0.999;
      if (isEnd && !atEnd) endAt = performance.now();
      atEnd = isEnd;
      track.style.setProperty('--hx', (p * dist).toFixed(1));
      const vr = view.getBoundingClientRect();
      const cx = vr.left + vr.width / 2;
      cards.forEach((c) => {
        const cr = c.getBoundingClientRect();
        const d = (cr.left + cr.width / 2 - cx) / vr.width;
        c.style.setProperty('--cr', clamp(d * -24, -18, 18).toFixed(2) + 'deg');
        c.style.setProperty('--px', clamp(d * -8, -7, 7).toFixed(2) + '%');
      });
    });
  }

  const ba = root.querySelector('[data-rx-ba]');
  if (ba) {
    const pin = ba.querySelector('.rx-ba-pin');
    const stage = ba.querySelector('[data-rx-ba-stage]');
    const items = Array.from(ba.querySelectorAll('.rx-ben-item'));
    const setP = (v) => stage.style.setProperty('--p', clamp(v, 0, 1).toFixed(4));
    let drag = false;
    layouts.push(() => ba.classList.toggle('is-pin', wide() && !reduce));
    tasks.push(() => {
      if (!ba.classList.contains('is-pin')) return;
      const r = ba.getBoundingClientRect();
      const span = r.height - pin.getBoundingClientRect().height;
      const p = span > 0 ? clamp(-r.top / span, 0, 1) : 0;
      setP((p - 0.04) / 0.9);
      const idx = Math.min(items.length - 1, Math.floor(p * items.length));
      items.forEach((it, i) => it.classList.toggle('is-active', i === idx));
    });
    const fromEvent = (e) => {
      const r = stage.getBoundingClientRect();
      const v = clamp((e.clientX - r.left) / r.width, 0, 1);
      if (!ba.classList.contains('is-pin')) {
        setP(v);
        return;
      }
      const br = ba.getBoundingClientRect();
      const span = br.height - pin.getBoundingClientRect().height;
      if (span <= 0) return;
      const p = clamp(v * 0.9 + 0.04, 0, 1);
      window.scrollTo({ top: Math.round(window.scrollY + br.top + p * span), behavior: 'instant' });
    };
    stage.addEventListener('pointerdown', (e) => {
      const onHandle = e.target.closest('.rx-ba-handle span');
      if (ba.classList.contains('is-pin') && !onHandle) return;
      if (onHandle) e.preventDefault();
      drag = true;
      stage.setPointerCapture(e.pointerId);
      fromEvent(e);
    });
    stage.addEventListener('pointermove', (e) => {
      if (drag) fromEvent(e);
    });
    const end = () => {
      drag = false;
    };
    stage.addEventListener('pointerup', end);
    stage.addEventListener('pointercancel', end);
    if (!reduce) {
      const intro = new IntersectionObserver((entries) => {
        if (!entries[0].isIntersecting || ba.classList.contains('is-pin')) return;
        intro.disconnect();
        const t0 = performance.now();
        const run = (t) => {
          if (drag) return;
          const k = clamp((t - t0) / 1600, 0, 1);
          const ease = 1 - Math.pow(1 - k, 3);
          setP(0.08 + ease * 0.5);
          if (k < 1) requestAnimationFrame(run);
        };
        setP(0.08);
        requestAnimationFrame(run);
      }, { threshold: 0.4 });
      intro.observe(stage);
    }
  }

  const ask = root.querySelector('[data-rx-ask]');
  if (ask) {
    const words = Array.from(ask.querySelectorAll('.rx-w'));
    const q = ask.querySelector('.rx-ask-q');
    let lit = 0;
    let want = 0;
    let stepTimer = 0;
    const step = () => {
      stepTimer = 0;
      if (lit === want) return;
      lit += lit < want ? 1 : -1;
      words.forEach((w, i) => w.classList.toggle('is-on', i < lit));
      stepTimer = setTimeout(step, 110);
    };
    tasks.push(() => {
      const r = q.getBoundingClientRect();
      const vh = viewH();
      const p = reduce ? 1 : clamp((vh * 0.9 - r.top) / (vh * 0.55), 0, 1);
      want = Math.round(p * words.length);
      if (!stepTimer) step();
    });
  }

  const niches = root.querySelector('[data-rx-niches]');
  if (niches && fine) {
    const float = niches.querySelector('.rx-niche-float');
    const fimg = float.querySelector('img');
    const rows = Array.from(niches.querySelectorAll('.rx-niche'));
    let lastX = 0;
    let hoverRow = null;
    const place = (e) => {
      const z = zoom();
      const x = e.clientX / z;
      const y = e.clientY / z;
      const v = clamp((x - lastX) * 0.6, -10, 10);
      lastX = x;
      float.style.setProperty('--fx', (x + 28).toFixed(1) + 'px');
      float.style.setProperty('--fy', (y - 110).toFixed(1) + 'px');
      float.style.setProperty('--fr', v.toFixed(2) + 'deg');
    };
    const preload = new IntersectionObserver((entries) => {
      if (!entries[0].isIntersecting) return;
      preload.disconnect();
      rows.forEach((row) => {
        const im = new Image();
        im.src = row.getAttribute('data-img');
      });
    }, { rootMargin: '600px 0px' });
    preload.observe(niches);
    rows.forEach((row) => {
      row.addEventListener('pointerenter', (e) => {
        if (!wide()) return;
        hoverRow = row;
        if (!float.classList.contains('is-on')) {
          lastX = e.clientX / zoom();
          float.style.transition = 'none';
          place(e);
          void float.offsetWidth;
          float.style.transition = '';
        }
        const show = () => {
          if (hoverRow === row) float.classList.add('is-on');
        };
        const src = row.getAttribute('data-img');
        if (fimg.getAttribute('src') !== src) {
          fimg.setAttribute('src', src);
          if (fimg.complete && fimg.naturalWidth) show();
          else fimg.addEventListener('load', show, { once: true });
        } else {
          show();
        }
      });
    });
    niches.querySelector('.rx-niche-list').addEventListener('pointerleave', () => {
      hoverRow = null;
      float.classList.remove('is-on');
    });
    niches.addEventListener('pointermove', place);
    window.addEventListener('scroll', () => float.classList.remove('is-on'), { passive: true });
  }

  const tabsSec = root.querySelector('[data-rx-tabs]');
  if (tabsSec) {
    const DELAY = 7000;
    const list = tabsSec.querySelector('.rx-tabs');
    const tabs = Array.from(tabsSec.querySelectorAll('[data-rx-tab]'));
    const panes = Array.from(tabsSec.querySelectorAll('.rx-feats'));
    const screens = Array.from(tabsSec.querySelectorAll('.rx-screen'));
    let cur = 0;
    let timer = 0;
    let visible = false;
    let outTimer = 0;
    const schedule = () => {
      clearTimeout(timer);
      if (!visible || reduce) return;
      timer = setTimeout(() => show((cur + 1) % tabs.length), DELAY);
    };
    const show = (i) => {
      const prev = cur;
      cur = i;
      tabs.forEach((t) => t.classList.remove('is-active'));
      void list.offsetWidth;
      tabs.forEach((t, k) => {
        t.classList.toggle('is-active', k === i);
        t.setAttribute('aria-selected', k === i ? 'true' : 'false');
        t.tabIndex = k === i ? 0 : -1;
      });
      panes.forEach((p) => p.classList.toggle('is-active', +p.getAttribute('data-rx-pane') === i));
      clearTimeout(outTimer);
      screens.forEach((s, k) => {
        s.classList.toggle('is-active', k === i);
        s.classList.toggle('is-out', k === prev && k !== i);
      });
      outTimer = setTimeout(() => screens.forEach((s) => s.classList.remove('is-out')), 900);
      schedule();
    };
    tabs.forEach((t, k) => {
      t.tabIndex = k === 0 ? 0 : -1;
      t.addEventListener('click', () => show(k));
      t.addEventListener('keydown', (e) => {
        if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
        e.preventDefault();
        const n = (cur + (e.key === 'ArrowRight' ? 1 : tabs.length - 1)) % tabs.length;
        show(n);
        tabs[n].focus();
      });
    });
    new IntersectionObserver((entries) => {
      visible = entries[0].isIntersecting;
      if (visible) show(cur);
      else clearTimeout(timer);
    }, { threshold: 0.35 }).observe(tabsSec.querySelector('.rx-stage'));
  }

  let ticking = false;
  const frame = () => {
    ticking = false;
    tasks.forEach((t) => t());
  };
  const request = () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(frame);
  };
  const relayout = () => {
    layouts.forEach((l) => l());
    request();
  };
  window.addEventListener('scroll', request, { passive: true });
  window.addEventListener('resize', relayout);
  window.addEventListener('load', relayout);
  relayout();
})();
