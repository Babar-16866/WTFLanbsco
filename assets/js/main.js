// Theme toggle
const themeToggle = document.getElementById('themeToggle');
const root = document.documentElement;

function getTheme() {
  return root.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
}

function setTheme(theme) {
  if (theme === 'dark') {
    root.setAttribute('data-theme', 'dark');
    themeToggle?.setAttribute('aria-label', 'Switch to light theme');
    themeToggle?.setAttribute('title', 'Switch to light theme');
  } else {
    root.removeAttribute('data-theme');
    themeToggle?.setAttribute('aria-label', 'Switch to dark theme');
    themeToggle?.setAttribute('title', 'Switch to dark theme');
  }
  localStorage.setItem('theme', theme);
}

themeToggle?.addEventListener('click', () => {
  setTheme(getTheme() === 'dark' ? 'light' : 'dark');
});

setTheme(localStorage.getItem('theme') === 'dark' ? 'dark' : 'light');

// Cookie
const cookieBanner = document.getElementById('cookieBanner');
if (localStorage.getItem('cookiesAccepted')) cookieBanner?.classList.add('hidden');
document.getElementById('allowCookies')?.addEventListener('click', () => {
  localStorage.setItem('cookiesAccepted', 'true');
  cookieBanner?.classList.add('hidden');
});
document.getElementById('rejectCookies')?.addEventListener('click', () => {
  localStorage.setItem('cookiesAccepted', 'false');
  cookieBanner?.classList.add('hidden');
});

// Scroll progress
const scrollProgress = document.getElementById('scrollProgress');
window.addEventListener('scroll', () => {
  const docH = document.documentElement.scrollHeight - window.innerHeight;
  const pct = docH > 0 ? (window.scrollY / docH) * 100 : 0;
  if (scrollProgress) scrollProgress.style.height = `${pct}%`;
}, { passive: true });

// Header hide on scroll down
const siteHeader = document.querySelector('.site-header');
let lastY = 0;
window.addEventListener('scroll', () => {
  const y = window.scrollY;
  if (siteHeader) {
    siteHeader.style.transform = y > 120 && y > lastY ? 'translateY(-120%)' : 'translateY(0)';
  }
  lastY = y;
}, { passive: true });

// Reveal on scroll
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
revealEls.forEach((el) => revealObserver.observe(el));

// Hero reveal on load
window.addEventListener('load', () => {
  document.querySelectorAll('.hero-grid .reveal').forEach((el) => {
    setTimeout(() => el.classList.add('visible'), 100);
  });
});

// Hero parallax
const heroCanvas = document.getElementById('heroCanvas');
const heroBox = document.querySelector('.hero-box');
if (heroCanvas && heroBox) {
  heroBox.addEventListener('mousemove', (e) => {
    const rect = heroBox.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width - 0.5;
    const y = (e.clientY - rect.top) / rect.height - 0.5;

    heroCanvas.querySelectorAll('[data-depth]').forEach((el) => {
      const depth = parseFloat(el.dataset.depth) || 0.03;
      el.style.transform = `translate(${x * depth * 400}px, ${y * depth * 400}px)`;
    });
  });

  heroBox.addEventListener('mouseleave', () => {
    heroCanvas.querySelectorAll('[data-depth]').forEach((el) => {
      el.style.transform = '';
    });
  });
}

// Stats counter animation
function animateCounter(el) {
  const target = parseFloat(el.dataset.count);
  const suffix = el.dataset.suffix || '';
  const isDecimal = target % 1 !== 0;
  const duration = 1800;
  const start = performance.now();

  function tick(now) {
    const progress = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    const val = target * eased;
    el.textContent = isDecimal ? val.toFixed(1) : Math.floor(val) + suffix;
    if (progress < 1) requestAnimationFrame(tick);
    else el.textContent = (isDecimal ? target.toFixed(1) : target) + suffix;
  }
  requestAnimationFrame(tick);
}

const statObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.stat-num').forEach(animateCounter);
      statObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.3 });

document.querySelectorAll('.stats-grid').forEach((grid) => statObserver.observe(grid));

// Stat cards stagger animation
document.querySelectorAll('.stat-card').forEach((card, i) => {
  card.style.opacity = '0';
  card.style.transform = 'translateY(24px)';
  card.style.transition = `opacity 0.6s ease ${i * 0.1}s, transform 0.6s ease ${i * 0.1}s`;
});

const statCardObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, { threshold: 0.2 });
document.querySelectorAll('.stat-card').forEach((c) => statCardObserver.observe(c));

// FAQ accordion — scoped per list
document.querySelectorAll('.faq-list').forEach((list) => {
  const items = list.querySelectorAll('.faq-item');
  items.forEach((item) => {
    item.querySelector('.faq-trigger')?.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');
      items.forEach((other) => {
        const trigger = other.querySelector('.faq-trigger');
        other.classList.toggle('is-open', false);
        trigger?.setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('is-open');
        item.querySelector('.faq-trigger')?.setAttribute('aria-expanded', 'true');
      }
    });
  });
});

// Contact / promo forms — native POST to send-mail.php → thank-you.php
document.querySelectorAll('form.contact-form').forEach((form) => {
  form.addEventListener('submit', () => {
    const btn = form.querySelector('[type="submit"]');
    if (btn) {
      btn.disabled = true;
      btn.textContent = 'Sending…';
    }
    if (form.id === 'promoPopupForm') {
      localStorage.setItem('wtfPromoPopupDismissed', '1');
    }
  });
});

// Mobile nav
document.querySelector('.nav-burger')?.addEventListener('click', () => {
  document.querySelector('.nav-links')?.classList.toggle('mobile-open');
});

// Smooth brand card tilt on hover
document.querySelectorAll('.brand-card').forEach((card) => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width - 0.5;
    const y = (e.clientY - rect.top) / rect.height - 0.5;
    card.style.transform = `perspective(800px) rotateY(${x * 4}deg) rotateX(${-y * 4}deg) translateY(-6px)`;
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
  });
});

// Fan buttons - expand on click for mobile
const fanGroup = document.getElementById('fanButtons');
fanGroup?.addEventListener('click', (e) => {
  if (window.innerWidth <= 768) {
    fanGroup.classList.toggle('expanded');
  }
});

// What we excel at — horizontal carousel
const excelTrack = document.getElementById('excelTrack');
const excelPrev = document.getElementById('excelPrev');
const excelNext = document.getElementById('excelNext');

function updateExcelNav() {
  if (!excelTrack) return;
  const maxScroll = excelTrack.scrollWidth - excelTrack.clientWidth;
  const atStart = excelTrack.scrollLeft <= 8;
  const atEnd = excelTrack.scrollLeft >= maxScroll - 8;
  if (excelPrev) excelPrev.disabled = atStart;
  if (excelNext) excelNext.disabled = atEnd;
}

function scrollExcel(dir) {
  if (!excelTrack) return;
  const amount = Math.min(380, excelTrack.clientWidth * 0.7);
  excelTrack.scrollBy({ left: dir * amount, behavior: 'smooth' });
}

excelPrev?.addEventListener('click', () => scrollExcel(-1));
excelNext?.addEventListener('click', () => scrollExcel(1));
excelTrack?.addEventListener('scroll', updateExcelNav, { passive: true });
window.addEventListener('resize', updateExcelNav);
updateExcelNav();

// Desktop mouse / pointer drag on excel slider
if (excelTrack) {
  let excelDragging = false;
  let excelDragMoved = false;
  let excelStartX = 0;
  let excelStartScroll = 0;
  let excelPointerId = null;

  excelTrack.addEventListener('pointerdown', (e) => {
    if (e.pointerType === 'touch') return;
    if (e.button !== 0) return;
    excelDragging = true;
    excelDragMoved = false;
    excelStartX = e.clientX;
    excelStartScroll = excelTrack.scrollLeft;
    excelPointerId = e.pointerId;
    excelTrack.setPointerCapture?.(e.pointerId);
    excelTrack.classList.add('is-dragging');
  });

  excelTrack.addEventListener('pointermove', (e) => {
    if (!excelDragging) return;
    if (excelPointerId !== null && e.pointerId !== excelPointerId) return;
    const dx = e.clientX - excelStartX;
    if (Math.abs(dx) > 4) excelDragMoved = true;
    excelTrack.scrollLeft = excelStartScroll - dx;
  });

  function endExcelDrag(e) {
    if (!excelDragging) return;
    if (excelPointerId !== null && e.pointerId !== excelPointerId) return;
    excelDragging = false;
    excelPointerId = null;
    excelTrack.classList.remove('is-dragging');
    updateExcelNav();
  }

  excelTrack.addEventListener('pointerup', endExcelDrag);
  excelTrack.addEventListener('pointercancel', endExcelDrag);

  excelTrack.addEventListener('click', (e) => {
    if (!excelDragMoved) return;
    e.preventDefault();
    e.stopPropagation();
    excelDragMoved = false;
  }, true);
}

// Word on the street — 2 opposite marquees + drag
(function initStreetRows() {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const DURATION_MS = 45000;

  document.querySelectorAll('.street-row').forEach((row) => {
    const track = row.querySelector('.street-row-track');
    if (!track || track.dataset.streetReady) return;
    track.dataset.streetReady = '1';
    track.innerHTML += track.innerHTML;

    // JS drives motion so drag can take over cleanly
    track.style.animation = 'none';

    const dir = row.getAttribute('data-dir') === 'right' ? 1 : -1;
    let half = 0;
    let x = 0;
    let dragging = false;
    let dragMoved = false;
    let paused = false;
    let startClientX = 0;
    let startX = 0;
    let pointerId = null;
    let lastTs = performance.now();

    function measure() {
      half = track.scrollWidth / 2;
      if (half <= 0) return;
      while (x > 0) x -= half;
      while (x < -half) x += half;
    }

    function apply() {
      track.style.transform = `translate3d(${x}px, 0, 0)`;
    }

    function wrap() {
      if (half <= 0) return;
      if (x <= -half) x += half;
      if (x > 0) x -= half;
    }

    measure();
    x = dir === 1 ? -half : 0;
    apply();

    function tick(now) {
      const dt = Math.min(40, now - lastTs);
      lastTs = now;
      if (!dragging && !paused && !reduceMotion && half > 0) {
        x += dir * (half / DURATION_MS) * dt;
        wrap();
        apply();
      }
      requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);

    window.addEventListener('resize', () => {
      measure();
      apply();
    });

    row.addEventListener('mouseenter', () => {
      paused = true;
    });
    row.addEventListener('mouseleave', () => {
      if (!dragging) paused = false;
    });

    track.addEventListener('pointerdown', (e) => {
      if (e.pointerType === 'mouse' && e.button !== 0) return;
      dragging = true;
      dragMoved = false;
      paused = true;
      startClientX = e.clientX;
      startX = x;
      pointerId = e.pointerId;
      track.setPointerCapture?.(e.pointerId);
      row.classList.add('is-dragging');
      track.classList.add('is-dragging');
    });

    track.addEventListener('pointermove', (e) => {
      if (!dragging) return;
      if (pointerId !== null && e.pointerId !== pointerId) return;
      const dx = e.clientX - startClientX;
      if (Math.abs(dx) > 4) dragMoved = true;
      x = startX + dx;
      wrap();
      apply();
    });

    function endDrag(e) {
      if (!dragging) return;
      if (pointerId !== null && e.pointerId !== pointerId) return;
      dragging = false;
      pointerId = null;
      row.classList.remove('is-dragging');
      track.classList.remove('is-dragging');
      if (!row.matches(':hover')) paused = false;
    }

    track.addEventListener('pointerup', endDrag);
    track.addEventListener('pointercancel', endDrag);
    track.addEventListener('lostpointercapture', endDrag);

    track.addEventListener('click', (e) => {
      if (!dragMoved) return;
      e.preventDefault();
      e.stopPropagation();
      dragMoved = false;
    }, true);
  });
})();
// Promo popup
const promoPopup = document.getElementById('promoPopup');
const promoForm = document.getElementById('promoPopupForm');
const promoOk = document.getElementById('promoPopupOk');
const POPUP_KEY = 'wtfPromoPopupDismissed';
let exitIntentArmed = true;

function openPromoPopup(force) {
  if (!promoPopup) return;
  if (!force && localStorage.getItem(POPUP_KEY)) return;
  if (!promoPopup.hidden) return;
  promoPopup.hidden = false;
  document.body.classList.add('promo-popup-open');
}

function closePromoPopup(persist) {
  if (!promoPopup) return;
  promoPopup.hidden = true;
  document.body.classList.remove('promo-popup-open');
  if (persist) localStorage.setItem(POPUP_KEY, '1');
  // Re-arm exit intent after close so tab hover can show it again
  setTimeout(() => {
    exitIntentArmed = true;
  }, 800);
}

promoPopup?.querySelectorAll('[data-popup-close]').forEach((el) => {
  el.addEventListener('click', () => {
    closePromoPopup(true);
  });
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && promoPopup && !promoPopup.hidden) {
    closePromoPopup(true);
  }
});

// Auto popup (exit intent / on load): only ONCE per visit, across all pages.
// Shows again only after the visitor refreshes the page.
const AUTO_POPUP_KEY = 'wtfAutoPopupShown';
(function resetAutoPopupOnReload() {
  try {
    const nav = performance.getEntriesByType && performance.getEntriesByType('navigation')[0];
    if (nav && nav.type === 'reload') sessionStorage.removeItem(AUTO_POPUP_KEY);
  } catch (err) { /* storage blocked - ignore */ }
})();

function autoPopupAllowed() {
  try { return !sessionStorage.getItem(AUTO_POPUP_KEY); } catch (err) { return true; }
}

function markAutoPopupShown() {
  try { sessionStorage.setItem(AUTO_POPUP_KEY, '1'); } catch (err) { /* ignore */ }
}

// Exit intent: mouse toward browser tabs / top edge
document.addEventListener('mouseout', (e) => {
  if (!exitIntentArmed) return;
  if (!autoPopupAllowed()) return;
  if (!promoPopup || !promoPopup.hidden) return;
  if (e.relatedTarget || e.toElement) return;
  if (typeof e.clientY !== 'number' || e.clientY > 8) return;
  exitIntentArmed = false;
  markAutoPopupShown();
  openPromoPopup(true);
});

// Open popup only from explicit quote CTAs / #contact anchors (not Contact nav/footer links)
function isContactCta(el) {
  if (!el) return false;
  if (el.closest('a[href^="tel:"], a[href^="mailto:"], a[href*="wa.me"]')) return false;
  if (el.matches('a[href*="privacy-policy"], a[href*="terms-and-conditions"], a[href*="refund-policy"]')) return false;
  // Header/footer Contact must navigate to the contact page
  if (el.closest('.nav-links, .site-footer') && (el.getAttribute('href') || '').includes('contact.php')) {
    return false;
  }
  if (el.hasAttribute('data-open-popup')) return true;
  const href = (el.getAttribute('href') || '').trim();
  if (!href) return false;
  if (href === '#contact' || href === '/index.php#contact' || href.endsWith('#contact')) return true;
  return false;
}

document.addEventListener('click', (e) => {
  const trigger = e.target.closest('a[href], button, [data-open-popup]');
  if (!trigger || !isContactCta(trigger)) return;
  e.preventDefault();
  openPromoPopup(true);
});

window.addEventListener('load', () => {
  setTimeout(() => {
    if (!autoPopupAllowed()) return;
    if (localStorage.getItem(POPUP_KEY)) return;
    markAutoPopupShown();
    openPromoPopup(false);
  }, 2200);
});

// Custom theme cursor (desktop only)
(function initCustomCursor() {
  const finePointer = window.matchMedia('(hover: hover) and (pointer: fine)');
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (!finePointer.matches || reduceMotion.matches) return;

  const root = document.createElement('div');
  root.className = 'custom-cursor';
  root.setAttribute('aria-hidden', 'true');
  root.innerHTML = '<span class="custom-cursor-ring"></span><span class="custom-cursor-dot"></span>';
  document.body.appendChild(root);
  document.documentElement.classList.add('has-custom-cursor');

  const ring = root.querySelector('.custom-cursor-ring');
  let x = window.innerWidth / 2;
  let y = window.innerHeight / 2;
  let rx = x;
  let ry = y;
  let visible = false;

  const move = (e) => {
    x = e.clientX;
    y = e.clientY;
    if (!visible) {
      visible = true;
      root.classList.add('is-visible');
      rx = x;
      ry = y;
    }
  };

  document.addEventListener('mousemove', move, { passive: true });
  document.addEventListener('mouseleave', () => {
    visible = false;
    root.classList.remove('is-visible');
  });

  document.addEventListener('mousedown', () => root.classList.add('is-down'));
  document.addEventListener('mouseup', () => root.classList.remove('is-down'));

  document.addEventListener('mouseover', (e) => {
    const hit = e.target.closest('a, button, [role="button"], input, textarea, select, label, .excel-track');
    root.classList.toggle('is-hover', !!hit);
  });

  function tick() {
    rx += (x - rx) * 0.22;
    ry += (y - ry) * 0.22;
    root.style.transform = `translate3d(${x}px, ${y}px, 0)`;
    if (ring) ring.style.transform = `translate3d(${rx - x}px, ${ry - y}px, 0)`;
    requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);
})();


// Content protection — right-click modal + block copy
(function initContentProtect() {
  const popup = document.getElementById('protectPopup');
  if (!popup) return;

  function isEditable(el) {
    if (!el || !(el instanceof Element)) return false;
    return !!el.closest('input, textarea, select, [contenteditable="true"]');
  }

  function openProtect() {
    popup.hidden = false;
    document.body.classList.add('protect-popup-open');
  }

  function closeProtect() {
    popup.hidden = true;
    document.body.classList.remove('protect-popup-open');
  }

  popup.querySelectorAll('[data-protect-close]').forEach((el) => {
    el.addEventListener('click', closeProtect);
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !popup.hidden) closeProtect();
  });

  document.addEventListener('contextmenu', (e) => {
    if (isEditable(e.target)) return;
    e.preventDefault();
    openProtect();
  });

  document.addEventListener('copy', (e) => {
    if (isEditable(e.target)) return;
    e.preventDefault();
    openProtect();
  });

  document.addEventListener('cut', (e) => {
    if (isEditable(e.target)) return;
    e.preventDefault();
    openProtect();
  });

  document.addEventListener('dragstart', (e) => {
    if (isEditable(e.target)) return;
    if (e.target instanceof HTMLImageElement || (e.target instanceof Element && e.target.closest('img'))) {
      e.preventDefault();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (isEditable(e.target)) return;
    const key = e.key.toLowerCase();
    const block =
      (e.ctrlKey || e.metaKey) &&
      (key === 'c' || key === 'x' || key === 'u' || key === 's' || key === 'a' || key === 'p');
    if (block) {
      e.preventDefault();
      openProtect();
    }
  });
})();

// Works / Services / Industries two-tier category filters
(function initCategoryFilters() {
  const SUBS = {
    'graphic-design': [
      { id: 'all', label: 'All Graphic Design' },
      { id: 'logo-design', label: 'Logo Design' },
      { id: 'brand-collaterals', label: 'Brand Collaterals' },
      { id: 't-shirt', label: 'T-shirt' },
      { id: 'business-card', label: 'Business Card' },
      { id: 'social-media-post', label: 'Social Media Post' }
    ],
    'web-design': [
      { id: 'all', label: 'All Web Design' },
      { id: 'landing-pages', label: 'Landing Pages' },
      { id: 'corporate-sites', label: 'Corporate Sites' },
      { id: 'product-sites', label: 'Product Sites' },
      { id: 'redesigns', label: 'Redesigns' }
    ],
    'web-development': [
      { id: 'all', label: 'All Web Development' },
      { id: 'wordpress', label: 'WordPress' },
      { id: 'wix', label: 'Wix' },
      { id: 'squarespace', label: 'Squarespace' },
      { id: 'shopify', label: 'Shopify' },
      { id: 'web-app', label: 'Web App' },
      { id: 'custom-web', label: 'Custom Web' }
    ],
    seo: [
      { id: 'all', label: 'All SEO' },
      { id: 'technical-seo', label: 'Technical SEO' },
      { id: 'on-page', label: 'On-Page' },
      { id: 'content-seo', label: 'Content SEO' },
      { id: 'local-seo', label: 'Local SEO' }
    ],
    'social-media-advertising': [
      { id: 'all', label: 'All Social Ads' },
      { id: 'meta-ads', label: 'Meta Ads' },
      { id: 'linkedin-ads', label: 'LinkedIn Ads' },
      { id: 'tiktok-ads', label: 'TikTok Ads' },
      { id: 'creative-testing', label: 'Creative Testing' }
    ],
    'google-ads': [
      { id: 'all', label: 'All Google Ads' },
      { id: 'search-ads', label: 'Search Ads' },
      { id: 'display-ads', label: 'Display Ads' },
      { id: 'performance-max', label: 'Performance Max' },
      { id: 'remarketing', label: 'Remarketing' }
    ],
    'digital-marketing': [
      { id: 'all', label: 'All Digital Marketing' },
      { id: 'strategy', label: 'Strategy' },
      { id: 'content-marketing', label: 'Content Marketing' },
      { id: 'email-marketing', label: 'Email Marketing' },
      { id: 'funnel-design', label: 'Funnel Design' }
    ]
  };

  // Industries - every industry shares the same service tabs
  const INDUSTRIES = {
    remodelers: 'Remodelers',
    hvac: 'HVAC',
    plumbing: 'Plumbing',
    roofing: 'Roofing',
    'pest-control': 'Pest Control',
    'pool-services': 'Pool Services',
    landscaping: 'Landscaping',
    handyman: 'Handyman',
    'power-washing': 'Power Washing'
  };
  const INDUSTRY_SUBS = [
    { id: 'websites', label: 'Websites' },
    { id: 'local-seo', label: 'Local SEO' },
    { id: 'google-ads', label: 'Google Ads' },
    { id: 'social-ads', label: 'Social Ads' }
  ];
  Object.keys(INDUSTRIES).forEach((id) => {
    SUBS[id] = [{ id: 'all', label: 'All ' + INDUSTRIES[id] }].concat(INDUSTRY_SUBS);
  });

  function hasToken(list, token) {
    if (!list || !token) return false;
    return (' ' + list + ' ').indexOf(' ' + token + ' ') !== -1;
  }

  function bindFilterPair(filtersId, subfiltersId, gridId, cardSelector) {
    const filters = document.getElementById(filtersId);
    const subfilters = document.getElementById(subfiltersId);
    const grid = document.getElementById(gridId);
    if (!filters || !subfilters || !grid) return;

    let activeCategory = 'all';
    let activeSub = 'all';

    function applyFilter() {
      grid.querySelectorAll(cardSelector).forEach((card) => {
        const tags = card.getAttribute('data-tags') || '';
        const subs = card.getAttribute('data-subs') || '';
        const level = card.getAttribute('data-level') || '';
        let show = true;

        if (level === 'overview' || level === 'sub') {
          // Services page: All → overview cards; category → matching sub cards
          if (activeCategory === 'all') {
            show = level === 'overview';
          } else {
            show = level === 'sub' && hasToken(tags, activeCategory);
            if (show && activeSub !== 'all') {
              show = hasToken(subs, activeSub);
            }
          }
        } else if (activeCategory !== 'all') {
          show = hasToken(tags, activeCategory);
          if (show && activeSub !== 'all') {
            show = hasToken(subs, activeSub);
          }
        }

        card.hidden = !show;
      });
    }

    function renderSubs(category) {
      subfilters.innerHTML = '';
      subfilters.classList.remove('is-open');
      subfilters.hidden = true;
      activeSub = 'all';
      if (category === 'all' || !SUBS[category]) return;

      SUBS[category].forEach((item, index) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'works-filter works-subfilter' + (index === 0 ? ' is-active' : '');
        btn.setAttribute('data-sub', item.id);
        btn.setAttribute('role', 'tab');
        btn.setAttribute('aria-selected', index === 0 ? 'true' : 'false');
        btn.textContent = item.label;
        subfilters.appendChild(btn);
      });
      subfilters.hidden = false;
      subfilters.classList.add('is-open');
    }

    filters.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-filter]');
      if (!btn || !filters.contains(btn)) return;
      e.preventDefault();
      filters.querySelectorAll('[data-filter]').forEach((el) => {
        el.classList.remove('is-active');
        el.setAttribute('aria-selected', 'false');
      });
      btn.classList.add('is-active');
      btn.setAttribute('aria-selected', 'true');
      activeCategory = btn.getAttribute('data-filter') || 'all';
      renderSubs(activeCategory);
      applyFilter();
    });

    subfilters.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-sub]');
      if (!btn || !subfilters.contains(btn)) return;
      e.preventDefault();
      subfilters.querySelectorAll('[data-sub]').forEach((el) => {
        el.classList.remove('is-active');
        el.setAttribute('aria-selected', 'false');
      });
      btn.classList.add('is-active');
      btn.setAttribute('aria-selected', 'true');
      activeSub = btn.getAttribute('data-sub') || 'all';
      applyFilter();
    });

    // Ensure initial visibility matches active tab (All / category)
    applyFilter();
  }

  bindFilterPair('worksFilters', 'worksSubfilters', 'worksGrid', '.work-card');
  bindFilterPair('servicesFilters', 'servicesSubfilters', 'servicesGrid', '.service-detail-card');
  bindFilterPair('industriesFilters', 'industriesSubfilters', 'industriesGrid', '.service-detail-card');
})();

// FAQs page — service-specific FAQ tabs (stay on page)
(function initFaqServiceTabs() {
  const tabs = document.getElementById('faqServiceTabs');
  const panels = document.getElementById('faqServicePanels');
  if (!tabs || !panels) return;

  tabs.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-faq-service]');
    if (!btn || !tabs.contains(btn)) return;

    const key = btn.getAttribute('data-faq-service');
    tabs.querySelectorAll('[data-faq-service]').forEach((el) => {
      el.classList.toggle('is-active', el === btn);
      el.setAttribute('aria-selected', el === btn ? 'true' : 'false');
    });

    panels.querySelectorAll('[data-faq-panel]').forEach((panel) => {
      const active = panel.getAttribute('data-faq-panel') === key;
      panel.classList.toggle('is-active', active);
      panel.hidden = !active;
    });
  });
})();

// Themed dropdown for form selects (keeps the real <select> for submit + validation)
(function initThemedSelects() {
  const selects = document.querySelectorAll('form.contact-form select');
  if (!selects.length) return;
  const wraps = [];
  let uid = 0;

  selects.forEach((select) => {
    if (select.dataset.themed) return;
    select.dataset.themed = '1';
    uid += 1;
    const listId = 'wtfSelectList' + uid;

    const wrap = document.createElement('div');
    wrap.className = 'wtf-select';
    select.parentNode.insertBefore(wrap, select);
    wrap.appendChild(select);
    select.classList.add('wtf-select-native');
    select.tabIndex = -1;
    select.setAttribute('aria-hidden', 'true');

    const trigger = document.createElement('button');
    trigger.type = 'button';
    trigger.className = 'wtf-select-trigger';
    trigger.setAttribute('aria-haspopup', 'listbox');
    trigger.setAttribute('aria-expanded', 'false');
    trigger.setAttribute('aria-controls', listId);
    trigger.innerHTML =
      '<span class="wtf-select-value" id="' + listId + 'Value"></span>' +
      '<svg class="wtf-select-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    const valueEl = trigger.querySelector('.wtf-select-value');

    const list = document.createElement('ul');
    list.className = 'wtf-select-list';
    list.id = listId;
    list.setAttribute('role', 'listbox');
    list.hidden = true;

    const field = select.closest('.field');
    const label = (select.id && document.querySelector('label[for="' + select.id + '"]')) ||
      (field && field.querySelector(':scope > label'));
    if (label) {
      if (!label.id) label.id = listId + 'Label';
      trigger.setAttribute('aria-labelledby', label.id + ' ' + listId + 'Value');
      list.setAttribute('aria-labelledby', label.id);
      label.addEventListener('click', (e) => {
        e.preventDefault();
        trigger.focus();
      });
    }

    const items = [];
    Array.from(select.options).forEach((opt, i) => {
      if (opt.disabled) return;
      const li = document.createElement('li');
      li.className = 'wtf-select-option';
      li.id = listId + '-' + i;
      li.setAttribute('role', 'option');
      li.dataset.index = String(i);
      li.textContent = opt.textContent;
      list.appendChild(li);
      items.push(li);
    });

    wrap.appendChild(trigger);
    wrap.appendChild(list);

    let active = -1;

    function sync() {
      const opt = select.options[select.selectedIndex];
      const hasValue = !!opt && !opt.disabled && select.value !== '';
      valueEl.textContent = opt ? opt.textContent : '';
      trigger.classList.toggle('is-placeholder', !hasValue);
      items.forEach((li) => {
        const sel = hasValue && Number(li.dataset.index) === select.selectedIndex;
        li.classList.toggle('is-selected', sel);
        li.setAttribute('aria-selected', sel ? 'true' : 'false');
      });
    }

    function setActive(n) {
      if (!items.length) return;
      active = Math.max(0, Math.min(items.length - 1, n));
      items.forEach((li, k) => li.classList.toggle('is-active', k === active));
      trigger.setAttribute('aria-activedescendant', items[active].id);
      items[active].scrollIntoView({ block: 'nearest' });
    }

    function open() {
      if (!list.hidden) return;
      wraps.forEach((w) => w.close());
      list.hidden = false;
      wrap.classList.add('is-open');
      trigger.setAttribute('aria-expanded', 'true');
      const cur = items.findIndex((li) => li.classList.contains('is-selected'));
      setActive(cur >= 0 ? cur : 0);
    }

    function close() {
      if (list.hidden) return;
      list.hidden = true;
      wrap.classList.remove('is-open');
      trigger.setAttribute('aria-expanded', 'false');
      trigger.removeAttribute('aria-activedescendant');
      items.forEach((li) => li.classList.remove('is-active'));
    }

    function choose(k) {
      const li = items[k];
      if (!li) return;
      select.selectedIndex = Number(li.dataset.index);
      select.dispatchEvent(new Event('change', { bubbles: true }));
      wrap.classList.remove('is-invalid');
      sync();
      close();
      trigger.focus();
    }

    trigger.addEventListener('click', () => (list.hidden ? open() : close()));

    trigger.addEventListener('keydown', (e) => {
      switch (e.key) {
        case 'ArrowDown':
          e.preventDefault();
          if (list.hidden) open(); else setActive(active + 1);
          break;
        case 'ArrowUp':
          e.preventDefault();
          if (list.hidden) open(); else setActive(active - 1);
          break;
        case 'Home':
          if (!list.hidden) { e.preventDefault(); setActive(0); }
          break;
        case 'End':
          if (!list.hidden) { e.preventDefault(); setActive(items.length - 1); }
          break;
        case 'Enter':
        case ' ':
          if (!list.hidden) { e.preventDefault(); choose(active); }
          break;
        case 'Escape':
          if (!list.hidden) { e.preventDefault(); close(); }
          break;
        case 'Tab':
          close();
          break;
        default:
          break;
      }
    });

    list.addEventListener('mousedown', (e) => e.preventDefault());
    list.addEventListener('mousemove', (e) => {
      const li = e.target.closest('.wtf-select-option');
      if (li) setActive(items.indexOf(li));
    });
    list.addEventListener('click', (e) => {
      const li = e.target.closest('.wtf-select-option');
      if (li) choose(items.indexOf(li));
    });

    select.addEventListener('invalid', () => wrap.classList.add('is-invalid'));
    select.addEventListener('change', sync);

    wraps.push({ el: wrap, close });
    sync();
  });

  document.addEventListener('click', (e) => {
    wraps.forEach((w) => {
      if (!w.el.contains(e.target)) w.close();
    });
  });
})();
