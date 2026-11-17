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
    const target = step.querySelector('.cq-input, .cq-option.is-selected, .cq-option, .cq-day');
    if (target) setTimeout(() => target.focus({ preventScroll: true }), 320);
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
    prevBtn.disabled = current === 0;
    forwardBtn.disabled = current >= maxReached;
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
      const phone = step.querySelector('input[name="phone"]').value.trim();
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return 'Please enter a valid email address.';
      if (phone.replace(/\D/g, '').length < 7) return 'Please enter a valid phone number.';
      answers.email = email;
      answers.phone = phone;
    }
    if (type === 'choice' && !answers[step.dataset.key]) return 'Please select an option.';
    if (type === 'slot' && !answers.call_time) return 'Please pick a time slot.';
    return '';
  };

  const next = () => {
    const step = steps[current];
    const error = validate(step);
    showError(step, error);
    if (error) return;
    show(current + 1);
  };

  const choose = (button) => {
    if (busy) return;
    const step = button.closest('.cq-step');
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
    busy = true;
    button.classList.add('is-blink');
    setTimeout(() => {
      button.classList.remove('is-blink');
      busy = false;
      show(current + 1);
    }, 600);
  };

  form.addEventListener('click', (e) => {
    const option = e.target.closest('.cq-option');
    if (option) {
      e.preventDefault();
      choose(option);
      return;
    }
    const day = e.target.closest('.cq-day');
    if (day) {
      activeDay = Number(day.dataset.index);
      renderSlots();
      return;
    }
    if (e.target.closest('[data-next]')) next();
  });

  form.addEventListener('keydown', (e) => {
    const step = steps[current];
    if (e.key === 'Enter' && !e.shiftKey && e.target.matches('input.cq-input')) {
      e.preventDefault();
      next();
    }
    if (step.dataset.type === 'choice' && !e.target.matches('input, textarea') && /^[a-z]$/i.test(e.key)) {
      const options = step.querySelectorAll('.cq-option');
      const option = options[e.key.toUpperCase().charCodeAt(0) - 65];
      if (option) choose(option);
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.target.closest && e.target.closest('.cq-form')) return;
    const step = steps[current];
    if (step.dataset.type === 'choice' && /^[a-z]$/i.test(e.key)) {
      const option = step.querySelectorAll('.cq-option')[e.key.toUpperCase().charCodeAt(0) - 65];
      if (option) choose(option);
    }
  });

  prevBtn.addEventListener('click', () => show(current - 1, true));
  forwardBtn.addEventListener('click', () => {
    if (current < maxReached) next();
  });

  const slotStep = steps.find((s) => s.dataset.type === 'slot');
  const daysBox = slotStep.querySelector('[data-days]');
  const slotsBox = slotStep.querySelector('[data-slots]');
  const slotError = slotStep.querySelector('[data-slot-error]');

  const renderSlots = () => {
    daysBox.innerHTML = '';
    slotsBox.innerHTML = '';
    if (!slotDays.length) {
      slotsBox.innerHTML = '<p class="cq-loading">No open times right now. Please check back shortly.</p>';
      return;
    }
    slotDays.forEach((day, i) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'cq-day' + (i === activeDay ? ' is-active' : '');
      btn.dataset.index = String(i);
      btn.textContent = day.label;
      daysBox.appendChild(btn);
    });
    const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    slotDays[activeDay].slots.forEach((slot, k) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'cq-option' + (answers.call_time === slot.id ? ' is-selected' : '');
      btn.setAttribute('role', 'radio');
      btn.setAttribute('aria-checked', answers.call_time === slot.id ? 'true' : 'false');
      btn.dataset.value = slot.id;
      btn.dataset.label = slotDays[activeDay].label + ', ' + slot.label + ' (Central Time)';
      btn.innerHTML = '<span class="cq-key"></span><span class="cq-option-text"></span>';
      btn.querySelector('.cq-key').textContent = letters[k] || '';
      btn.querySelector('.cq-option-text').textContent = slot.label;
      slotsBox.appendChild(btn);
    });
  };

  const loadSlots = () => {
    slotsBox.innerHTML = '<p class="cq-loading">Loading available times...</p>';
    return fetch('/booking.php', { headers: { Accept: 'application/json' }, cache: 'no-store' })
      .then((r) => r.json())
      .then((data) => {
        slotDays = Array.isArray(data.days) ? data.days : [];
        const selectedDay = slotDays.findIndex((d) => d.slots.some((s) => s.id === answers.call_time));
        activeDay = selectedDay >= 0 ? selectedDay : Math.min(activeDay, Math.max(0, slotDays.length - 1));
        if (selectedDay < 0) {
          delete answers.call_time;
          delete answers.call_time_label;
        }
        renderSlots();
      })
      .catch(() => {
        slotsBox.innerHTML = '<p class="cq-loading">We could not load the calendar. Please refresh the page.</p>';
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

    fetch('/booking.php', { method: 'POST', body: reserve })
      .then((r) => r.json().then((data) => ({ status: r.status, data })))
      .then(({ status, data }) => {
        if (status !== 200 || !data.ok) {
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
        return fetch(form.action, { method: 'POST', body: payload });
      })
      .then(() => {
        setProgress();
        fill.style.setProperty('--cq-p', '100%');
        window.location.href = '/thank-you';
      })
      .catch((err) => {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Submit';
        if (err && err.message === 'taken') return;
        submitError.textContent = 'Something went wrong. Please try again.';
        submitError.hidden = false;
      });
  });

  const params = new URLSearchParams(window.location.search);
  const first = params.get('a1');
  if (first !== null) {
    const option = steps[0].querySelectorAll('.cq-option')[Number(first)];
    if (option) {
      option.classList.add('is-selected');
      option.setAttribute('aria-checked', 'true');
      answers[steps[0].dataset.key] = option.dataset.value;
      maxReached = 1;
      show(1);
      return;
    }
  }
  show(0);
})();
