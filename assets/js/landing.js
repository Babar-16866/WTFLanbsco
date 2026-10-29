(function () {
  const root = document.querySelector('.lp');
  if (!root) return;
  document.documentElement.classList.add('lp-js');

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

  const player = root.querySelector('[data-lp-player]');
  if (player) {
    const video = player.querySelector('video');
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
    player.querySelector('.lp-skip--back').addEventListener('click', () => seek(-5));
    player.querySelector('.lp-skip--fwd').addEventListener('click', () => seek(5));
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

  const feed = document.querySelector('.lp-feed');
  if (feed) {
    const people = [
      ['Mike R.', 'Katy, TX'], ['Sarah L.', 'Austin, TX'], ['Daniel P.', 'Houston, TX'], ['Jessica M.', 'Tampa, FL'],
      ['Chris B.', 'Dallas, TX'], ['Amanda K.', 'Phoenix, AZ'], ['Ryan T.', 'Orlando, FL'], ['Laura G.', 'Denver, CO'],
      ['Kevin H.', 'Atlanta, GA'], ['Megan S.', 'Charlotte, NC'],
    ];
    const agents = ['Bilal', 'Noman', 'Sara'];
    const events = [];
    people.forEach(([n, c], i) => {
      events.push({ ico: n[0], title: n + ' requested a free plan', sub: c + ' · just now', call: false });
      events.push({ ico: '☎', title: agents[i % agents.length] + ' is on a call with ' + n, sub: 'Planning their new website', call: true });
    });
    let k = 0;
    const show = () => {
      const ev = events[k % events.length];
      k += 1;
      const el = document.createElement('div');
      el.className = 'lp-note' + (ev.call ? ' is-call' : '');
      el.innerHTML = '<i></i><span><strong></strong><small></small></span>';
      el.querySelector('i').textContent = ev.ico;
      el.querySelector('strong').textContent = ev.title;
      el.querySelector('small').textContent = ev.sub;
      feed.replaceChildren(el);
      requestAnimationFrame(() => requestAnimationFrame(() => el.classList.add('is-on')));
      setTimeout(() => el.classList.remove('is-on'), 4200);
    };
    setTimeout(() => {
      show();
      setInterval(show, 7000);
    }, 3000);
  }

  const thanks = document.getElementById('lpThanks');
  const openThanks = () => {
    const popup = document.getElementById('stepPopup');
    if (popup && !popup.hidden) {
      popup.hidden = true;
      document.body.classList.remove('step-popup-open', 'popup-open');
    }
    thanks.querySelector('[data-lp-queue]').textContent = '#' + (7 + Math.floor(Math.random() * 4));
    thanks.hidden = false;
  };
  if (thanks) {
    thanks.querySelectorAll('[data-lp-thanks-close]').forEach((el) => el.addEventListener('click', () => {
      thanks.hidden = true;
    }));
    const send = (form, extra) => {
      const data = new FormData(form);
      Object.keys(extra || {}).forEach((key) => data.set(key, extra[key]));
      fetch(form.action, { method: 'POST', body: data, keepalive: true }).catch(() => {});
      form.reset();
      openThanks();
    };
    document.querySelectorAll('form.contact-form--home').forEach((form) => {
      form.addEventListener('submit', (e) => {
        if (e.defaultPrevented) return;
        e.preventDefault();
        const btn = e.submitter;
        send(form, btn && btn.name ? { [btn.name]: btn.value } : null);
      });
      const notBtn = form.querySelector('[data-not-committed]');
      if (notBtn) {
        notBtn.addEventListener('click', (e) => {
          e.stopImmediatePropagation();
          send(form, { commitment: 'Not committed' });
        }, true);
      }
    });
  }
})();
