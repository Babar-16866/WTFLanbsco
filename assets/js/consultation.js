(function () {
  const form = document.getElementById('cqForm');
  if (!form) return;

  const steps = Array.from(form.querySelectorAll('.cq-step'));
  const fill = document.querySelector('.cq-progress-fill');
  const prevBtn = document.querySelector('[data-prev]');
  const forwardBtn = document.querySelector('[data-forward]');
  const answers = {};
  let current = 0;
  let maxReached = 0;
  let busy = false;
  let slotDays = [];
  let activeDay = 0;

  const goalWords = {
    'I need help with creating a new website': 'New Website',
    'I want to redesign my current website': 'redesigned website',
    'Right now, I need great marketing': 'marketing',
    'I need it all! Website and marketing both.': 'website and marketing',
  };

  const questionText = (step) => step.querySelector('.cq-q-text').textContent.replace(/\s+/g, ' ').trim();

  const setProgress = () => {
    fill.style.setProperty('--cq-p', ((current / steps.length) * 100).toFixed(2) + '%');
  };

  const syncNames = () => {
    const name = answers.first_name || '';
    document.querySelectorAll('[data-name]').forEach((el) => {
      el.textContent = name;
    });
    const goal = document.querySelector('[data-goal-target]');
    if (goal && answers.help) goal.textContent = goalWords[answers.help] || 'website';
  };

  const focusStep = (step) => {
    const other = step.querySelector('.cq-other.is-selected .cq-other-input');
    const target = other || step.querySelector('.cq-input, .cq-option.is-selected, .cq-option, .cq-cal-day.is-active');
    if (target) {
      setTimeout(() => {
        if (!step.contains(document.activeElement)) target.focus({ preventScroll: true });
      }, 320);
    }
  };

  const show = (index, back) => {
    if (index < 0 || index >= steps.length) return;
    steps[current].hidden = true;
    current = index;
    maxReached = Math.max(maxReached, current);
    const step = steps[current];
    step.classList.toggle('is-back', !!back);
    step.hidden = false;
    syncNames();
    setProgress();
    if (prevBtn) prevBtn.disabled = current === 0;
    if (forwardBtn) forwardBtn.disabled = current >= maxReached;
    window.scrollTo(0, 0);
    if (step.dataset.type === 'slot') loadSlots();
    focusStep(step);
  };

  const showError = (step, text) => {
    const el = step.querySelector('[data-field-error]');
    if (!el) return;
    el.textContent = text;
    el.hidden = !text;
  };

  const validate = (step) => {
    const type = step.dataset.type;
    if (type === 'name') {
      const value = step.querySelector('input').value.trim();
      if (value.length < 2) return 'Please type your first name.';
      answers.first_name = value;
    }
    if (type === 'contact') {
      const email = step.querySelector('input[name="email"]').value.trim();
      const phone = phoneInput.value.replace(/\D/g, '');
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return 'Please enter a valid email address.';
      if (country.dial === '1' ? phone.length !== 10 : phone.length < 6 || phone.length > 14) return 'Please enter a valid phone number.';
      answers.email = email;
      answers.phone = '+' + country.dial + ' ' + phone;
    }
    if (type === 'choice') {
      const other = step.querySelector('.cq-other.is-selected');
      if (other) {
        const text = other.querySelector('.cq-other-input').value.trim();
        if (!text) return 'Please type your answer.';
        answers[step.dataset.key] = text;
      }
      if (!answers[step.dataset.key]) return 'Please select an option.';
    }
    if (type === 'slot' && !answers.call_time) return 'Please pick a time slot.';
    return '';
  };

  const next = () => {
    const step = steps[current];
    const error = validate(step);
    showError(step, error);
    if (error) return;
    if (step.dataset.type === 'contact' && otpConfig) {
      verifyPhone(step);
      return;
    }
    show(current + 1);
  };

  const selectOther = (other) => {
    const step = other.closest('.cq-step');
    step.querySelectorAll('.cq-option').forEach((opt) => {
      opt.classList.toggle('is-selected', opt === other);
      opt.setAttribute('aria-checked', opt === other ? 'true' : 'false');
    });
    delete answers[step.dataset.key];
    const input = other.querySelector('.cq-other-input');
    input.hidden = false;
    other.querySelector('.cq-option-text').hidden = true;
    showError(step, '');
    input.focus({ preventScroll: true });
  };

  const resetOther = (step) => {
    const other = step.querySelector('.cq-other');
    if (!other) return;
    other.querySelector('.cq-other-input').hidden = true;
    other.querySelector('.cq-option-text').hidden = false;
  };

  const choose = (button) => {
    if (busy) return;
    if (button.matches('[data-other]')) {
      selectOther(button);
      return;
    }
    const step = button.closest('.cq-step');
    resetOther(step);
    step.querySelectorAll('.cq-option').forEach((opt) => {
      opt.classList.toggle('is-selected', opt === button);
      opt.setAttribute('aria-checked', opt === button ? 'true' : 'false');
    });
    answers[step.dataset.key] = button.dataset.value;
    if (step.dataset.type === 'slot') {
      answers.call_time = button.dataset.value;
      answers.call_time_label = button.dataset.label;
    }
    showError(step, '');
    button.classList.remove('is-blink');
    void button.offsetWidth;
    button.classList.add('is-blink');
    setTimeout(() => button.classList.remove('is-blink'), 600);
  };

  form.addEventListener('click', (e) => {
    const option = e.target.closest('.cq-option');
    if (option) {
      if (option.matches('[data-other].is-selected')) return;
      e.preventDefault();
      if (option.disabled) return;
      choose(option);
      return;
    }
    const day = e.target.closest('.cq-cal-day.is-open');
    if (day) {
      activeDay = Number(day.dataset.index);
      renderSlots();
      return;
    }
    if (e.target.closest('[data-next]')) next();
  });

  const otherActive = (step) => !!step.querySelector('.cq-other.is-selected');

  form.addEventListener('keydown', (e) => {
    const step = steps[current];
    if (e.key === 'Enter' && !e.shiftKey && e.target.matches('input.cq-input, input.cq-other-input')) {
      e.preventDefault();
      next();
      return;
    }
    if (e.key === 'Enter' && otherActive(step)) {
      e.preventDefault();
      next();
      return;
    }
    if ((e.key === 'Enter' || e.key === ' ') && e.target.matches('[data-other]:not(.is-selected)')) {
      e.preventDefault();
      choose(e.target);
      return;
    }
    if (step.dataset.type === 'choice' && !otherActive(step) && !e.target.matches('input, textarea') && /^[a-z]$/i.test(e.key)) {
      const options = step.querySelectorAll('.cq-option');
      const option = options[e.key.toUpperCase().charCodeAt(0) - 65];
      if (option) choose(option);
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.target.closest && e.target.closest('.cq-form')) return;
    const step = steps[current];
    if (!step || step.hidden) return;
    if (step.dataset.type === 'choice' && otherActive(step) && e.key === 'Enter') {
      e.preventDefault();
      next();
      return;
    }
    if (step.dataset.type === 'choice' && !otherActive(step) && /^[a-z]$/i.test(e.key)) {
      const option = step.querySelectorAll('.cq-option')[e.key.toUpperCase().charCodeAt(0) - 65];
      if (option) choose(option);
    }
  });

  if (prevBtn) prevBtn.addEventListener('click', () => show(current - 1, true));
  if (forwardBtn) {
    forwardBtn.addEventListener('click', () => {
      if (current < maxReached) next();
    });
  }

  const contactStep = steps.find((s) => s.dataset.type === 'contact');
  const phoneInput = contactStep.querySelector('input[name="phone"]');
  const contactNext = contactStep.querySelector('[data-next]');
  const countries = [
    ['us', 'United States', '1'], ['ca', 'Canada', '1'], ['gb', 'United Kingdom', '44'], ['au', 'Australia', '61'],
    ['nz', 'New Zealand', '64'], ['ie', 'Ireland', '353'], ['mx', 'Mexico', '52'], ['pr', 'Puerto Rico', '1'],
    ['jm', 'Jamaica', '1'], ['do', 'Dominican Republic', '1'], ['tt', 'Trinidad and Tobago', '1'], ['br', 'Brazil', '55'],
    ['ar', 'Argentina', '54'], ['co', 'Colombia', '57'], ['cl', 'Chile', '56'], ['pe', 'Peru', '51'],
    ['de', 'Germany', '49'], ['fr', 'France', '33'], ['es', 'Spain', '34'], ['it', 'Italy', '39'],
    ['nl', 'Netherlands', '31'], ['be', 'Belgium', '32'], ['ch', 'Switzerland', '41'], ['at', 'Austria', '43'],
    ['se', 'Sweden', '46'], ['no', 'Norway', '47'], ['dk', 'Denmark', '45'], ['fi', 'Finland', '358'],
    ['pl', 'Poland', '48'], ['pt', 'Portugal', '351'], ['gr', 'Greece', '30'], ['tr', 'Turkey', '90'],
    ['il', 'Israel', '972'], ['ae', 'United Arab Emirates', '971'], ['sa', 'Saudi Arabia', '966'], ['qa', 'Qatar', '974'],
    ['kw', 'Kuwait', '965'], ['bh', 'Bahrain', '973'], ['om', 'Oman', '968'], ['eg', 'Egypt', '20'],
    ['za', 'South Africa', '27'], ['ng', 'Nigeria', '234'], ['ke', 'Kenya', '254'], ['in', 'India', '91'],
    ['pk', 'Pakistan', '92'], ['bd', 'Bangladesh', '880'], ['lk', 'Sri Lanka', '94'], ['np', 'Nepal', '977'],
    ['ph', 'Philippines', '63'], ['sg', 'Singapore', '65'], ['my', 'Malaysia', '60'], ['id', 'Indonesia', '62'],
    ['th', 'Thailand', '66'], ['vn', 'Vietnam', '84'], ['jp', 'Japan', '81'], ['kr', 'South Korea', '82'],
    ['cn', 'China', '86'], ['hk', 'Hong Kong', '852'],
  ].map(([iso, name, dial]) => ({ iso, name, dial }));
  let country = countries[0];

  const cc = contactStep.querySelector('[data-cc]');
  const ccToggle = cc.querySelector('[data-cc-toggle]');
  const ccMenu = cc.querySelector('[data-cc-menu]');
  const ccSearch = cc.querySelector('[data-cc-search]');
  const ccList = cc.querySelector('[data-cc-list]');
  const flagUrl = (iso) => 'https://flagcdn.com/w40/' + iso + '.png';

  const renderCountries = () => {
    const term = ccSearch.value.trim().toLowerCase().replace(/^\+/, '');
    ccList.innerHTML = '';
    countries
      .filter((c) => !term || c.name.toLowerCase().includes(term) || c.dial.startsWith(term))
      .forEach((c) => {
        const item = document.createElement('li');
        item.className = 'cq-cc-item' + (c === country ? ' is-active' : '');
        item.setAttribute('role', 'option');
        item.setAttribute('aria-selected', c === country ? 'true' : 'false');
        item.dataset.iso = c.iso;
        item.innerHTML = '<img src="' + flagUrl(c.iso) + '" alt="" width="22" height="16" loading="lazy"><span class="cq-cc-name"></span><span class="cq-cc-code">+' + c.dial + '</span>';
        item.querySelector('.cq-cc-name').textContent = c.name;
        ccList.appendChild(item);
      });
  };

  const closeCountries = () => {
    ccMenu.hidden = true;
    ccToggle.setAttribute('aria-expanded', 'false');
  };

  ccToggle.addEventListener('click', () => {
    if (!ccMenu.hidden) {
      closeCountries();
      return;
    }
    ccSearch.value = '';
    renderCountries();
    ccMenu.hidden = false;
    ccToggle.setAttribute('aria-expanded', 'true');
    ccSearch.focus({ preventScroll: true });
  });
  ccSearch.addEventListener('input', renderCountries);
  ccSearch.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
      e.preventDefault();
      e.stopPropagation();
      const first = ccList.querySelector('.cq-cc-item');
      if (first) first.click();
    }
  });
  ccList.addEventListener('click', (e) => {
    const item = e.target.closest('.cq-cc-item');
    if (!item) return;
    country = countries.find((c) => c.iso === item.dataset.iso) || country;
    cc.querySelector('[data-cc-flag]').src = flagUrl(country.iso);
    cc.querySelector('[data-cc-dial]').textContent = '+' + country.dial;
    closeCountries();
    syncOtp();
    phoneInput.focus({ preventScroll: true });
  });
  document.addEventListener('click', (e) => {
    if (!ccMenu.hidden && !cc.contains(e.target)) closeCountries();
  });
  cc.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !ccMenu.hidden) {
      e.stopPropagation();
      closeCountries();
      ccToggle.focus();
    }
  });

  phoneInput.addEventListener('input', () => {
    const digits = phoneInput.value.replace(/\D/g, '').slice(0, 15);
    if (phoneInput.value !== digits) phoneInput.value = digits;
    syncOtp();
  });

  const otpConfig = form.hasAttribute('data-otp-on');
  const otpBox = contactStep.querySelector('[data-otp]');
  const otpInput = otpBox.querySelector('input');
  const otpNote = otpBox.querySelector('[data-otp-note]');
  const otp = { sentTo: '', verified: '' };

  const phoneE164 = () => '+' + country.dial + phoneInput.value.replace(/\D/g, '');
  const setContactButton = (text, disabled) => {
    contactNext.textContent = text;
    contactNext.disabled = !!disabled;
  };

  function syncOtp() {
    if (!otpConfig) return;
    const number = phoneE164();
    const pending = otp.sentTo === number && otp.verified !== number;
    otpBox.hidden = !pending;
    setContactButton(pending ? 'Verify' : 'Next', false);
  }

  otpInput.addEventListener('input', () => {
    const digits = otpInput.value.replace(/\D/g, '').slice(0, 6);
    if (otpInput.value !== digits) otpInput.value = digits;
  });

  const otpCall = (fields) => {
    const body = new FormData();
    Object.keys(fields).forEach((key) => body.set(key, fields[key]));
    return fetch('/otp.php', { method: 'POST', body })
      .then((r) => r.json())
      .catch(() => ({ ok: false, error: 'network' }));
  };

  const otpMessages = {
    phone: 'Please enter a valid phone number.',
    wait: 'Please wait a few seconds before requesting another code.',
    limit: 'Too many attempts. Please try again later.',
    captcha: 'Your session has expired. Please refresh the page and try again.',
    code: 'That code is not correct or has expired. Please try again or request a new code.',
    expired: 'This code has expired. Please request a new one.',
  };

  const sendCode = (step) => {
    const number = phoneE164();
    setContactButton('Sending code...', true);
    otpCall({ action: 'send', phone: number }).then((data) => {
      if (!data.ok) {
        setContactButton(otp.sentTo === number ? 'Verify' : 'Next', false);
        showError(step, otpMessages[data.error] || 'We could not send the code. Please check the number and try again.');
        return;
      }
      otp.sentTo = number;
      otpNote.textContent = 'Enter the 6-digit code we sent to +' + country.dial + ' ' + phoneInput.value.replace(/\D/g, '') + '.';
      otpInput.value = '';
      otpBox.hidden = false;
      setContactButton('Verify', false);
      otpInput.focus({ preventScroll: true });
    });
  };

  const verifyPhone = (step) => {
    const number = phoneE164();
    if (otp.verified === number) {
      show(current + 1);
      return;
    }
    if (otp.sentTo !== number) {
      sendCode(step);
      return;
    }
    const code = otpInput.value.replace(/\D/g, '');
    if (code.length !== 6) {
      showError(step, 'Please enter the 6-digit code.');
      return;
    }
    setContactButton('Verifying...', true);
    otpCall({ action: 'verify', code }).then((data) => {
      if (!data.ok) {
        setContactButton('Verify', false);
        showError(step, otpMessages[data.error] || 'We could not verify the code. Please try again.');
        return;
      }
      otp.verified = number;
      otpBox.hidden = true;
      setContactButton('Next', false);
      show(current + 1);
    });
  };

  otpBox.querySelector('[data-otp-resend]').addEventListener('click', () => {
    showError(contactStep, '');
    otp.sentTo = '';
    sendCode(contactStep);
  });

  const slotStep = steps.find((s) => s.dataset.type === 'slot');
  const daysBox = slotStep.querySelector('[data-days]');
  const slotsBox = slotStep.querySelector('[data-slots]');
  const slotError = slotStep.querySelector('[data-slot-error]');

  const monthTitle = slotStep.querySelector('[data-month-title]');
  const dayTitle = slotStep.querySelector('[data-day-title]');
  const prevMonth = slotStep.querySelector('[data-month-prev]');
  const nextMonth = slotStep.querySelector('[data-month-next]');
  let viewMonth = null;

  const parseDate = (iso) => {
    const [y, m, d] = iso.split('-').map(Number);
    return new Date(Date.UTC(y, m - 1, d));
  };
  const monthKey = (d) => d.getUTCFullYear() * 12 + d.getUTCMonth();

  const renderSlots = () => {
    daysBox.innerHTML = '';
    slotsBox.innerHTML = '';
    if (!slotDays.length) {
      monthTitle.textContent = '';
      dayTitle.textContent = '';
      slotsBox.innerHTML = '<p class="cq-loading">Loading available times...</p>';
      return;
    }
    const months = [...new Set(slotDays.map((d) => monthKey(parseDate(d.date))))];
    const active = parseDate(slotDays[activeDay].date);
    if (viewMonth === null || !months.includes(viewMonth)) viewMonth = monthKey(active);
    const year = Math.floor(viewMonth / 12);
    const month = viewMonth % 12;
    monthTitle.textContent = new Date(Date.UTC(year, month, 1)).toLocaleDateString('en-US', { month: 'long', year: 'numeric', timeZone: 'UTC' });
    prevMonth.disabled = viewMonth <= months[0];
    nextMonth.disabled = viewMonth >= months[months.length - 1];

    const firstDow = new Date(Date.UTC(year, month, 1)).getUTCDay();
    const daysInMonth = new Date(Date.UTC(year, month + 1, 0)).getUTCDate();
    for (let i = 0; i < firstDow; i++) {
      const blank = document.createElement('span');
      blank.className = 'cq-cal-blank';
      daysBox.appendChild(blank);
    }
    for (let d = 1; d <= daysInMonth; d++) {
      const iso = year + '-' + String(month + 1).padStart(2, '0') + '-' + String(d).padStart(2, '0');
      const index = slotDays.findIndex((x) => x.date === iso);
      const cell = document.createElement('button');
      cell.type = 'button';
      cell.className = 'cq-cal-day';
      cell.textContent = String(d);
      if (index < 0) {
        cell.disabled = true;
      } else {
        cell.classList.add('is-open');
        cell.dataset.index = String(index);
        cell.setAttribute('aria-label', parseDate(iso).toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric', timeZone: 'UTC' }));
        if (index === activeDay) {
          cell.classList.add('is-active');
          cell.setAttribute('aria-pressed', 'true');
        }
      }
      daysBox.appendChild(cell);
    }

    dayTitle.textContent = active.toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric', timeZone: 'UTC' });
    slotDays[activeDay].slots.forEach((slot) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'cq-option cq-time' + (answers.call_time === slot.id ? ' is-selected' : '');
      btn.setAttribute('role', 'radio');
      if (slot.available === false) {
        btn.disabled = true;
        btn.classList.add('is-off');
      }
      btn.setAttribute('aria-checked', answers.call_time === slot.id ? 'true' : 'false');
      btn.dataset.value = slot.id;
      btn.dataset.label = dayTitle.textContent + ', ' + slot.label + ' (Central Time)';
      btn.textContent = slot.label;
      slotsBox.appendChild(btn);
    });
  };

  prevMonth.addEventListener('click', () => {
    viewMonth -= 1;
    renderSlots();
  });
  nextMonth.addEventListener('click', () => {
    viewMonth += 1;
    renderSlots();
  });

  const centralNow = () => {
    const parts = {};
    new Intl.DateTimeFormat('en-US', { timeZone: 'America/Chicago', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', hourCycle: 'h23' })
      .formatToParts(new Date())
      .forEach((p) => { parts[p.type] = p.value; });
    return { y: +parts.year, m: +parts.month, d: +parts.day, min: +parts.hour * 60 + +parts.minute };
  };

  const seed = (text) => {
    let h = 0;
    for (let i = 0; i < text.length; i++) h = (h * 31 + text.charCodeAt(i)) % 2147483647;
    return h > 0 ? h : 1;
  };

  const pick = (list, count, key) => {
    const items = list.slice();
    let state = seed(key);
    for (let i = items.length - 1; i > 0; i--) {
      state = (state * 48271) % 2147483647;
      const j = state % (i + 1);
      [items[i], items[j]] = [items[j], items[i]];
    }
    return items.slice(0, count).sort((x, y) => x - y);
  };

  const buildSlots = () => {
    const now = centralNow();
    const pad = (n) => String(n).padStart(2, '0');
    const fmt = (m) => {
      const h = Math.floor(m / 60);
      return (h % 12 || 12) + ':' + pad(m % 60) + ' ' + (h < 12 ? 'AM' : 'PM');
    };
    const iso = (d) => d.getUTCFullYear() + '-' + pad(d.getUTCMonth() + 1) + '-' + pad(d.getUTCDate());
    const all = [];
    for (let m = 540; m <= 990; m += 30) all.push(m);
    const evening = 990;
    const days = [];
    const base = new Date(Date.UTC(now.y, now.m - 1, now.d));
    const weekday = (d) => d.getUTCDay() >= 1 && d.getUTCDay() <= 5;
    if (weekday(base)) {
      let open = [evening];
      if (now.min < 840) {
        const first = Math.max(540, Math.ceil((now.min + 60) / 30) * 30);
        open.push(first);
        if (now.min < 720) {
          const afternoon = all.filter((m) => m >= 720 && m < evening && m > first);
          if (afternoon.length) open = open.concat(pick(afternoon, 1, iso(base) + 'pm'));
        }
      }
      days.push([new Date(base), [...new Set(open)].filter((m) => m >= 540 && m <= evening), true]);
    }
    const cursor = new Date(base);
    const last = new Date(base);
    last.setUTCDate(last.getUTCDate() + 60);
    for (let n = 0; ; n++) {
      do { cursor.setUTCDate(cursor.getUTCDate() + 1); } while (!weekday(cursor));
      if (cursor > last) break;
      days.push([new Date(cursor), n === 0 ? pick(all, 6, iso(cursor)) : all, false]);
    }
    return days.map(([d, open, today]) => {
      const date = iso(d);
      const slots = all.map((m) => ({
        id: date + 'T' + pad(Math.floor(m / 60)) + ':' + pad(m % 60),
        label: fmt(m) + ' - ' + fmt(m + 30),
        available: open.includes(m) && (!today || m > now.min + 30),
      }));
      return {
        date,
        label: d.toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: 'numeric', timeZone: 'UTC' }),
        slots,
      };
    }).filter((day) => day.slots.some((slot) => slot.available));
  };

  const loadSlots = () => {
    slotsBox.innerHTML = '<p class="cq-loading">Loading available times...</p>';
    return fetch('/booking', { headers: { Accept: 'application/json' }, cache: 'no-store' })
      .then((r) => r.json())
      .catch(() => ({}))
      .then((data) => {
        slotDays = Array.isArray(data.days) && data.days.length ? data.days : buildSlots();
        const selectedDay = slotDays.findIndex((d) => d.slots.some((s) => s.id === answers.call_time && s.available !== false));
        activeDay = selectedDay >= 0 ? selectedDay : Math.min(activeDay, Math.max(0, slotDays.length - 1));
        if (selectedDay < 0) {
          delete answers.call_time;
          delete answers.call_time_label;
        }
        renderSlots();
      });
  };

  const submitError = form.querySelector('[data-submit-error]');
  const submitBtn = form.querySelector('.cq-submit');

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (submitBtn.disabled) return;
    answers.message = form.querySelector('textarea[name="message"]').value.trim();
    submitError.hidden = true;
    submitBtn.disabled = true;
    submitBtn.textContent = 'Submitting...';

    const reserve = new FormData();
    reserve.set('slot', answers.call_time || '');
    reserve.set('name', answers.first_name || '');
    reserve.set('email', answers.email || '');

    fetch('/booking', { method: 'POST', body: reserve })
      .then((r) => r.json().then((data) => ({ status: r.status, data })))
      .catch(() => ({ status: 0, data: {} }))
      .then(({ status, data }) => {
        if (status === 409) {
          slotDays = Array.isArray(data.days) ? data.days : [];
          delete answers.call_time;
          delete answers.call_time_label;
          activeDay = 0;
          renderSlots();
          slotError.textContent = 'Sorry, that time was just booked. Please choose another time.';
          slotError.hidden = false;
          maxReached = steps.indexOf(slotStep);
          show(maxReached, true);
          throw new Error('taken');
        }
        answers.call_time_label = data.label || answers.call_time_label;
        const payload = new FormData();
        const labels = [];
        payload.set('website', form.querySelector('input[name="website"]').value);
        payload.set('source', 'consultation');
        payload.set('step', '3');
        payload.set('name', answers.first_name || '');
        payload.set('email', answers.email || '');
        payload.set('phone', answers.phone || '');
        steps.forEach((step) => {
          const key = step.dataset.key;
          const text = questionText(step);
          if (step.dataset.type === 'contact') {
            payload.set('email', answers.email || '');
            payload.set('phone', answers.phone || '');
            labels.push(['email', text + ' (Email)']);
            labels.push(['phone', text + ' (Phone)']);
            return;
          }
          if (step.dataset.type === 'slot') {
            payload.set('call_time', answers.call_time_label || '');
            labels.push(['call_time', text]);
            return;
          }
          if (step.dataset.type === 'extras') {
            payload.set('message', answers.message || '');
            labels.push(['message', text]);
            return;
          }
          payload.set(key, answers[key] || '');
          labels.push([key, text]);
        });
        payload.set('_labels', JSON.stringify(labels));
        return fetch(form.action, { method: 'POST', body: payload, headers: { Accept: 'application/json' } })
          .then((r) => r.json().catch(() => ({ ok: r.ok })))
          .then((result) => {
            if (result && result.ok) return;
            if (result && result.error === 'phone') {
              otp.verified = '';
              otp.sentTo = '';
              syncOtp();
              maxReached = steps.indexOf(contactStep);
              show(maxReached, true);
              showError(contactStep, 'Please verify your phone number again.');
              throw new Error('phone');
            }
            throw new Error(result && result.error === 'captcha' ? 'captcha' : 'failed');
          });
      })
      .then(() => {
        setProgress();
        fill.style.setProperty('--cq-p', '100%');
        window.location.href = '/thank-you';
      })
      .catch((err) => {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Submit';
        if (err && (err.message === 'taken' || err.message === 'phone')) return;
        submitError.textContent = err && err.message === 'captcha'
          ? 'Your session has expired. Please refresh the page and try again.'
          : 'Something went wrong. Please try again.';
        submitError.hidden = false;
      });
  });

  const start = () => {
    const params = new URLSearchParams(window.location.search);
    const first = params.get('a1');
    if (first !== null) {
      const option = steps[0].querySelectorAll('.cq-option:not([data-other])')[Number(first)];
      if (option) {
        option.classList.add('is-selected');
        option.setAttribute('aria-checked', 'true');
        answers[steps[0].dataset.key] = option.dataset.value;
        show(0);
        return;
      }
    }
    show(0);
  };

  const gate = document.querySelector('[data-gate]');
  if (!gate) {
    start();
    return;
  }
  window.cqHumanVerified = (token) => {
    const body = new FormData();
    body.set('g-recaptcha-response', token);
    fetch('/human-check.php', { method: 'POST', body })
      .then((r) => r.json())
      .catch(() => ({ ok: false }))
      .then((data) => {
        if (data && data.ok) {
          gate.remove();
          form.hidden = false;
          start();
          return;
        }
        const error = gate.querySelector('[data-gate-error]');
        error.textContent = 'Verification failed. Please try again.';
        error.hidden = false;
        if (window.grecaptcha) window.grecaptcha.reset();
      });
  };
})();
