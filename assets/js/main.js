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
      const anchor = item.querySelector('.faq-trigger');
      const anchorTop = anchor.getBoundingClientRect().top;
      const holdUntil = performance.now() + 650;
      (function hold() {
        const shift = anchor.getBoundingClientRect().top - anchorTop;
        if (Math.abs(shift) > 0.5) window.scrollTo({ top: window.scrollY + shift, behavior: 'instant' });
        if (performance.now() < holdUntil) requestAnimationFrame(hold);
      })();
      items.forEach((other) => {
        const trigger = other.querySelector('.faq-trigger');
        other.classList.toggle('is-open', false);
        trigger?.setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('is-open');
        item.querySelector('.faq-trigger')?.setAttribute('aria-expanded', 'true');
      }
      if (!isOpen) {
        setTimeout(() => {
          const header = document.querySelector('.site-header');
          const top = (header ? header.getBoundingClientRect().bottom : 0) + 16;
          const r = item.getBoundingClientRect();
          const bottom = window.innerHeight - 20;
          let delta = 0;
          if (r.top < top) delta = r.top - top;
          else if (r.bottom > bottom) delta = Math.min(r.bottom - bottom, r.top - top);
          if (Math.abs(delta) > 2) window.scrollBy({ top: delta, behavior: 'smooth' });
        }, 660);
      }
    });
  });
});

// Contact / promo forms — native POST to send-mail.php → thank-you.php
document.querySelectorAll('form.contact-form').forEach((form) => {
  form.addEventListener('submit', (e) => {
    const btn = e.submitter || form.querySelector('[type="submit"]');
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
document.querySelector('.nav-burger')?.addEventListener('click', (e) => {
  const open = document.querySelector('.nav-links')?.classList.toggle('mobile-open');
  e.currentTarget.classList.toggle('is-open', !!open);
  e.currentTarget.setAttribute('aria-expanded', open ? 'true' : 'false');
  document.body.classList.toggle('nav-open', !!open);
});

// Mobile nav dropdowns - one open at a time
document.querySelectorAll('.nav-dropdown-btn').forEach((btn) => {
  btn.addEventListener('click', (e) => {
    if (!window.matchMedia('(max-width: 980px)').matches) return;
    if (!e.target.closest('.nav-dropdown-btn > span')) return;
    e.preventDefault();
    const item = btn.closest('.nav-dropdown');
    const willOpen = !item.classList.contains('is-open');
    document.querySelectorAll('.nav-dropdown.is-open').forEach((el) => el.classList.remove('is-open'));
    item.classList.toggle('is-open', willOpen);
  });
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
  const reduceMotion = false;
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

    const hoverPointer = window.matchMedia('(hover: hover) and (pointer: fine)');
    row.addEventListener('mouseenter', () => {
      if (hoverPointer.matches) paused = true;
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
      if (e.pointerType !== 'mouse' || !hoverPointer.matches || !row.matches(':hover')) paused = false;
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
  const reduceMotion = { matches: false };
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
/*
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
*/

// Works / Services / Industries two-tier category filters
(function initCategoryFilters() {
  const SUBS = {
    /*
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
      { id: 'all', label: 'All' },
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
    */
  };

  function hasToken(list, token) {
    if (!list || !token) return false;
    if (token === 'web-development' && (' ' + list + ' ').indexOf(' web-design ') !== -1) return true;
    return (' ' + list + ' ').indexOf(' ' + token + ' ') !== -1;
  }

  function bindFilterPair(filtersId, subfiltersId, gridId, cardSelector, industriesId) {
    const filters = document.getElementById(filtersId);
    const subfilters = document.getElementById(subfiltersId);
    const grid = document.getElementById(gridId);
    if (!filters || !subfilters || !grid) return;
    const industries = industriesId ? document.getElementById(industriesId) : null;

    let activeCategory = 'all';
    let activeSub = 'all';
    let activeIndustry = 'all';

    // Sub tabs written in the page markup (Industries) are reused as-is
    const staticSubs = subfilters.querySelector('[data-sub]') !== null;

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

        if (show && industries && activeIndustry !== 'all' && card.hasAttribute('data-industries')) {
          show = hasToken(card.getAttribute('data-industries') || '', activeIndustry);
        }

        if (show && level === '' && activeCategory === 'all' && activeIndustry === 'all' && grid.querySelector('[data-featured]')) {
          show = card.hasAttribute('data-featured');
        }

        card.hidden = !show;
      });

      const empty = document.getElementById(gridId + 'Empty');
      if (empty) empty.hidden = !!grid.querySelector(cardSelector + ':not([hidden])');
      grid.dispatchEvent(new CustomEvent('works:filtered'));
    }

    // Smooth
    function smoothFilter() {
      if (!grid.hasAttribute('data-smooth')) {
        applyFilter();
        return;
      }
      const from = grid.offsetHeight;
      const before = new Set(Array.from(grid.querySelectorAll(cardSelector)).filter((card) => !card.hidden));
      applyFilter();
      grid.querySelectorAll(cardSelector).forEach((card) => {
        if (card.hidden || before.has(card)) return;
        card.classList.remove('is-entering');
        void card.offsetWidth;
        card.classList.add('is-entering');
      });
      const to = grid.offsetHeight;
      if (from === to) return;
      grid.style.height = from + 'px';
      grid.style.overflow = 'hidden';
      void grid.offsetHeight;
      grid.style.transition = 'height 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
      grid.style.height = to + 'px';
      const done = () => {
        grid.style.height = '';
        grid.style.overflow = '';
        grid.style.transition = '';
        grid.removeEventListener('transitionend', done);
      };
      grid.addEventListener('transitionend', done);
      setTimeout(done, 650);
    }

    function renderSubs(category, label) {
      if (staticSubs) {
        activeSub = 'all';
        subfilters.querySelectorAll('[data-sub]').forEach((el) => {
          const isAll = el.getAttribute('data-sub') === 'all';
          el.classList.toggle('is-active', isAll);
          el.setAttribute('aria-selected', isAll ? 'true' : 'false');
          if (isAll) el.textContent = 'All ' + label;
        });
        subfilters.hidden = category === 'all';
        subfilters.classList.toggle('is-open', category !== 'all');
        return;
      }

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
      renderSubs(activeCategory, btn.textContent.replace(/\s+/g, ' ').trim());
      smoothFilter();
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
      smoothFilter();
    });

    industries?.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-industry]');
      if (!btn || !industries.contains(btn)) return;
      e.preventDefault();
      industries.querySelectorAll('[data-industry]').forEach((el) => {
        el.classList.remove('is-active');
        el.setAttribute('aria-selected', 'false');
      });
      btn.classList.add('is-active');
      btn.setAttribute('aria-selected', 'true');
      activeIndustry = btn.getAttribute('data-industry') || 'all';
      activeCategory = 'all';
      filters.querySelectorAll('[data-filter]').forEach((el) => {
        const value = el.getAttribute('data-filter');
        const isAll = value === 'all';
        el.classList.toggle('is-active', isAll);
        el.setAttribute('aria-selected', isAll ? 'true' : 'false');
      });
      if (filters.closest('#homeWorksServiceRow')) filters.closest('#homeWorksServiceRow').hidden = activeIndustry === 'all';
      renderSubs('all', '');
      smoothFilter();
    });

    // Ensure initial visibility matches active tab (All / category)
    applyFilter();
  }

  bindFilterPair('worksFilters', 'worksSubfilters', 'worksGrid', '.work-card', 'worksIndustries');
  bindFilterPair('servicesFilters', 'servicesSubfilters', 'servicesGrid', '.service-detail-card', 'servicesIndustries');
  bindFilterPair('industriesFilters', 'industriesSubfilters', 'industriesGrid', '.service-detail-card');

  // Industry navs
  const industryNav = document.querySelector('[data-industry-nav]');
  const indIndustries = document.getElementById('indIndustries');
  const indServices = document.getElementById('indServices');
  const indSubs = document.getElementById('indSubs');
  const indGrid = document.getElementById('industriesGrid');
  let indIndustry = industryNav && industryNav.dataset.current ? industryNav.dataset.current : 'all';
  let indService = 'all';
  let indSub = 'all';

  function setActive(group, attr, value) {
    group.querySelectorAll('[' + attr + ']').forEach((el) => {
      const on = el.getAttribute(attr) === value;
      el.classList.toggle('is-active', on);
      el.setAttribute('aria-selected', on ? 'true' : 'false');
    });
  }

  function renderIndSubs() {
    indSubs.innerHTML = '';
    indSub = 'all';
    const list = SUBS[indService];
    indSubs.hidden = !list;
    indSubs.classList.toggle('is-open', !!list);
    if (!list) return;
    list.forEach((item, index) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'works-filter works-subfilter' + (index === 0 ? ' is-active' : '');
      btn.setAttribute('data-sub', item.id);
      btn.setAttribute('role', 'tab');
      btn.setAttribute('aria-selected', index === 0 ? 'true' : 'false');
      btn.textContent = item.label;
      indSubs.appendChild(btn);
    });
  }

  function applyIndustryFilter() {
    if (!indGrid) return;
    const industryBtn = indIndustries.querySelector('[data-industry="' + indIndustry + '"]');
    const industryName = indIndustry !== 'all' && industryBtn ? industryBtn.textContent.replace(/\s+/g, ' ').trim() : '';
    indGrid.querySelectorAll('.service-detail-card').forEach((card) => {
      const level = card.getAttribute('data-level');
      let show;
      if (level === 'svc') {
        const svc = card.getAttribute('data-service');
        show = indService !== 'all' && (svc === indService || (indService === 'web-development' && svc === 'web-design'));
        if (show && indSub !== 'all') show = hasToken(card.getAttribute('data-subs') || '', indSub);
        const kicker = card.querySelector('.service-detail-kicker');
        if (kicker) {
          if (!kicker.dataset.base) kicker.dataset.base = kicker.textContent;
          kicker.textContent = industryName ? industryName + ' · ' + kicker.dataset.base : kicker.dataset.base;
        }
      } else if (indService !== 'all') {
        show = false;
      } else if (indIndustry === 'all') {
        show = level === 'overview';
      } else {
        show = level === 'sub' && hasToken(card.getAttribute('data-tags') || '', indIndustry);
      }
      card.hidden = !show;
    });    indGrid.dispatchEvent(new CustomEvent('industries:filtered'));
  }


  function goToIndustries() {
    const parts = [indIndustry, indService, indSub].map(encodeURIComponent);
    window.location.href = '/industries.php#' + parts.join('/');
  }

  if (industryNav && indIndustries && indServices && indSubs) {
    indIndustries.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-industry]');
      if (!btn) return;
      indIndustry = btn.getAttribute('data-industry');
      setActive(indIndustries, 'data-industry', indIndustry);
      if (!indGrid) { goToIndustries(); return; }
      applyIndustryFilter();
    });
    indServices.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-filter]');
      if (!btn) return;
      indService = btn.getAttribute('data-filter');
      setActive(indServices, 'data-filter', indService);
      renderIndSubs();
      if (indGrid) applyIndustryFilter();
    });
    indSubs.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-sub]');
      if (!btn) return;
      indSub = btn.getAttribute('data-sub');
      setActive(indSubs, 'data-sub', indSub);
      if (!indGrid) { goToIndustries(); return; }
      applyIndustryFilter();
    });

    if (indGrid && window.location.hash) {
      const [ind, svc, sub] = decodeURIComponent(window.location.hash.slice(1)).split('/');
      if (ind && indIndustries.querySelector('[data-industry="' + CSS.escape(ind) + '"]')) indIndustries.querySelector('[data-industry="' + CSS.escape(ind) + '"]').click();
      if (svc && indServices.querySelector('[data-filter="' + CSS.escape(svc) + '"]')) indServices.querySelector('[data-filter="' + CSS.escape(svc) + '"]').click();
      if (sub && indSubs.querySelector('[data-sub="' + CSS.escape(sub) + '"]')) indSubs.querySelector('[data-sub="' + CSS.escape(sub) + '"]').click();
      history.replaceState(null, '', window.location.pathname + window.location.search);
    }
    applyIndustryFilter();
  }

  // Filter from link
  function selectFromHash() {
    const id = decodeURIComponent(window.location.hash.slice(1));
    if (!id) return;
    const section = document.getElementById(id);
    if (section && section.classList.contains('svc-showcase')) {
      const jump = () => window.scrollTo({ top: section.getBoundingClientRect().top + window.scrollY - 110, behavior: 'instant' });
      jump();
      window.addEventListener('load', jump, { once: true });
      return;
    }
    const showcase = document.querySelector('.svc-showcase');
    if (showcase && document.querySelector('#servicesFilters [data-filter="' + CSS.escape(id) + '"]')) showcase.hidden = true;
    ['servicesFilters', 'industriesFilters', 'worksFilters'].forEach((filtersId) => {
      const btn = document.querySelector('#' + filtersId + ' [data-filter="' + CSS.escape(id) + '"]');
      if (!btn) return;
      btn.click();
      const bar = btn.parentElement;
      bar.scrollLeft = btn.offsetLeft - (bar.clientWidth - btn.offsetWidth) / 2;
    });
    history.replaceState(null, '', window.location.pathname + window.location.search);
  }
  selectFromHash();
  window.addEventListener('hashchange', selectFromHash);
  bindFilterPair('homeWorksFilters', 'homeWorksSubfilters', 'homeWorksGrid', '.work-card', 'homeWorksIndustries');
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

// Typewriter
(function initTypewriter() {
  const reduceMotion = false;
  document.querySelectorAll('[data-typewriter]').forEach((el) => {
    const words = el.getAttribute('data-typewriter').split('|').map((w) => w.trim()).filter(Boolean);
    if (!words.length) return;
    if (reduceMotion) {
      el.textContent = words[0];
      return;
    }
    const heading = el.closest('h1, h2, h3') || el.parentElement;
    function reserve() {
      const current = el.textContent;
      heading.style.minHeight = '';
      let tallest = 0;
      words.forEach((word) => {
        el.textContent = word;
        tallest = Math.max(tallest, heading.offsetHeight);
      });
      el.textContent = current;
      heading.style.minHeight = tallest + 'px';
    }
    reserve();
    window.addEventListener('resize', reserve);
    if (document.fonts && document.fonts.ready) document.fonts.ready.then(reserve);

    let wordIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function step() {
      const word = words[wordIndex];
      if (!deleting) {
        charIndex += 1;
        el.textContent = word.slice(0, charIndex);
        if (charIndex >= word.length) {
          deleting = true;
          setTimeout(step, 1400);
          return;
        }
        setTimeout(step, 90);
        return;
      }
      charIndex -= 1;
      el.textContent = word.slice(0, charIndex);
      if (charIndex <= 0) {
        deleting = false;
        wordIndex = (wordIndex + 1) % words.length;
        setTimeout(step, 350);
        return;
      }
      setTimeout(step, 45);
    }
    step();
  });
})();

// Rail
(function initRails() {
  const reduceMotion = { matches: false };
  document.querySelectorAll('[data-rail]').forEach((section) => {
    const sticky = section.querySelector('.rail-sticky');
    const track = section.querySelector('.rail-track');
    if (!sticky || !track) return;
    const cards = Array.from(track.children);
    let distance = 0;
    let stickTop = 0;
    let isStatic = false;
    let hold = 0;
    let lastWidth = 0;

    function setActive(index) {
      cards.forEach((card, i) => card.classList.toggle('is-active', i === index));
    }

    function update() {
      if (isStatic) return;
      const total = section.offsetHeight - sticky.offsetHeight - hold * 2;
      const progress = total > 0 ? Math.min(1, Math.max(0, (stickTop - section.getBoundingClientRect().top - hold) / total)) : 0;
      track.style.transform = `translate3d(${-progress * distance}px, 0, 0)`;
      setActive(Math.round(progress * (cards.length - 1)));
    }

    function measure() {
      section.classList.remove('is-static');
      section.style.height = '';
      sticky.style.top = '';
      track.style.transform = '';
      const last = cards[cards.length - 1];
      const padRight = parseFloat(getComputedStyle(track).paddingRight) || 0;
      const viewport = document.documentElement.clientWidth;
      distance = last ? Math.max(0, last.offsetLeft + last.offsetWidth + padRight - viewport) : 0;
      isStatic = reduceMotion.matches || distance <= 0 || window.matchMedia('(max-width: 768px)').matches;
      section.classList.toggle('is-static', isStatic);
      if (isStatic) {
        cards.forEach((card) => card.classList.add('is-active'));
        return;
      }
      lastWidth = viewport;
      hold = Math.round(window.innerHeight * 0.2);
      stickTop = Math.min(0, window.innerHeight - sticky.offsetHeight);
      sticky.style.top = stickTop + 'px';
      section.style.height = (sticky.offsetHeight + distance + hold * 2) + 'px';
      update();
    }

    let current = 0;
    let busyUntil = 0;
    let touchY = null;
    let touchMoved = false;

    function bounds() {
      const total = section.offsetHeight - sticky.offsetHeight - hold * 2;
      const start = section.getBoundingClientRect().top + window.scrollY - stickTop + hold;
      return { start, end: start + total, total };
    }

    function cardY(i) {
      const b = bounds();
      return b.start + (cards.length > 1 ? i / (cards.length - 1) : 0) * b.total;
    }

    function inZone(dir) {
      if (isStatic) return false;
      const b = bounds();
      const y = window.scrollY;
      if (dir > 0) return y >= b.start - 2 && y < b.end - 2;
      return y > b.start + 2 && y <= b.end + 2;
    }

    function nearestIndex() {
      const b = bounds();
      const p = b.total > 0 ? (window.scrollY - b.start) / b.total : 0;
      return Math.min(cards.length - 1, Math.max(0, Math.round(p * (cards.length - 1))));
    }

    function go(dir) {
      const now = performance.now();
      if (now < busyUntil) return true;
      current = nearestIndex();
      const next = current + dir;
      if (next < 0 || next > cards.length - 1) return false;
      current = next;
      busyUntil = now + 420;
      section.classList.add('is-stepping');
      window.scrollTo({ top: Math.round(cardY(current)), behavior: 'instant' });
      update();
      setTimeout(() => section.classList.remove('is-stepping'), 650);
      return true;
    }

    let lastWheel = 0;
    let lastAbs = 0;
    let stepAt = 0;
    let queued = 0;
    let queueTimer = 0;
    function runQueued() {
      queueTimer = 0;
      if (!queued) return;
      const dir = queued;
      queued = 0;
      if (inZone(dir) && go(dir)) stepAt = performance.now();
    }
    window.addEventListener('wheel', (e) => {
      if (document.documentElement.dataset.autoScroll) return;
      if (e.defaultPrevented || isStatic || Math.abs(e.deltaY) < Math.abs(e.deltaX)) return;
      const now = performance.now();
      const dir = e.deltaY > 0 ? 1 : -1;
      const abs = Math.abs(e.deltaY);
      const fresh = now - lastWheel > 80 || abs > lastAbs * 1.05 || (abs === lastAbs && abs >= 40);
      lastWheel = now;
      lastAbs = abs;
      const b = bounds();
      const y = window.scrollY;
      const reach = Math.max(abs, 100) * 1.5 + 260;
      const crossIn = (dir > 0 && y < b.start - 2 && b.start - y <= reach) || (dir < 0 && y > b.end + 2 && y - b.end <= reach);
      if (crossIn) {
        e.preventDefault();
        if (now < busyUntil) return;
        busyUntil = now + 380;
        stepAt = now;
        current = dir > 0 ? 0 : cards.length - 1;
        window.scrollTo({ top: Math.round(dir > 0 ? b.start : b.end), behavior: 'instant' });
        update();
        return;
      }
      if (!inZone(dir)) {
        if (!fresh && now - stepAt < 1200 && y >= b.start - 2 && y <= b.end + 2) e.preventDefault();
        return;
      }
      e.preventDefault();
      if (!fresh) return;
      if (now < busyUntil) {
        if (now - stepAt > 120) {
          queued = dir;
          clearTimeout(queueTimer);
          queueTimer = setTimeout(runQueued, busyUntil - now + 10);
        }
        return;
      }
      if (go(dir)) stepAt = now;
    }, { passive: false });

    let lastY = window.scrollY;
    window.addEventListener('scroll', () => {
      const y = window.scrollY;
      const prev = lastY;
      lastY = y;
      if (isStatic || touchY !== null || performance.now() < busyUntil || document.documentElement.dataset.autoScroll) return;
      const b = bounds();
      if (y <= b.start + 2 || y >= b.end - 2) return;
      let index = nearestIndex();
      if (prev <= b.start + 2) index = 0;
      else if (prev >= b.end - 2) index = cards.length - 1;
      const target = Math.round(cardY(index));
      if (Math.abs(target - y) < 3) return;
      current = index;
      busyUntil = performance.now() + 500;
      section.classList.add('is-stepping');
      window.scrollTo({ top: target, behavior: 'instant' });
      lastY = window.scrollY;
      update();
      setTimeout(() => section.classList.remove('is-stepping'), 650);
    }, { passive: true });

    window.addEventListener('touchstart', (e) => {
      touchY = e.touches.length === 1 ? e.touches[0].clientY : null;
      touchMoved = false;
    }, { passive: true });

    window.addEventListener('touchmove', (e) => {
      if (e.defaultPrevented || touchY === null || isStatic) return;
      const dy = touchY - e.touches[0].clientY;
      const dir = dy > 0 ? 1 : -1;
      const b = bounds();
      const y = window.scrollY;
      if ((dir > 0 && y < b.start - 2 && y + Math.abs(dy) * 1.2 > b.start) || (dir < 0 && y > b.end + 2 && y - Math.abs(dy) * 1.2 < b.end)) {
        e.preventDefault();
        if (!touchMoved) {
          touchMoved = true;
          current = dir > 0 ? 0 : cards.length - 1;
          busyUntil = performance.now() + 700;
          window.scrollTo({ top: Math.round(dir > 0 ? b.start : b.end), behavior: 'instant' });
          lastY = window.scrollY;
          update();
        }
        return;
      }
      if (!inZone(dir)) return;
      const edge = (dir < 0 && nearestIndex() === 0) || (dir > 0 && nearestIndex() === cards.length - 1);
      if (edge) return;
      e.preventDefault();
      if (!touchMoved && Math.abs(dy) > 24) {
        touchMoved = true;
        go(dir);
      }
    }, { passive: false });

    window.addEventListener('touchend', () => {
      touchY = null;
      lastY = window.scrollY;
    }, { passive: true });

    window.addEventListener('keydown', (e) => {
      const map = { ArrowDown: 1, PageDown: 1, ' ': 1, ArrowUp: -1, PageUp: -1 };
      const dir = map[e.key];
      if (e.defaultPrevented || !dir || e.target.closest('input, textarea, select, [contenteditable]')) return;
      if (!inZone(dir)) return;
      if (go(dir) || performance.now() < busyUntil) e.preventDefault();
    });

    measure();
    window.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', () => {
      if (document.documentElement.clientWidth === lastWidth) {
        update();
        return;
      }
      measure();
    });
    window.addEventListener('load', measure);
  });
})();

// WorkModal
(function initWorkModal() {
  const modal = document.getElementById('workModal');
  const grid = document.getElementById('homeWorksGrid');
  if (!modal || !grid) return;
  const img = document.getElementById('workModalImg');
  const eyebrow = document.getElementById('workModalEyebrow');
  const title = document.getElementById('workModalTitle');
  const meta = document.getElementById('workModalMeta');
  const text = document.getElementById('workModalText');
  const tags = document.getElementById('workModalTags');
  const scroller = modal.querySelector('.work-modal-scroll');
  const closeBtn = modal.querySelector('.work-modal-close');
  let lastFocus = null;

  grid.querySelectorAll('.work-card').forEach((card) => {
    card.setAttribute('tabindex', '0');
    card.setAttribute('role', 'button');
  });

  function openModal(card) {
    const cardImg = card.querySelector('.work-card-media img');
    const cardTags = Array.from(card.querySelectorAll('.work-card-tags a'));
    img.src = cardImg ? cardImg.getAttribute('src') : '';
    img.alt = cardImg ? cardImg.getAttribute('alt') : '';
    eyebrow.textContent = cardTags.map((a) => a.textContent.trim()).join(' · ');
    title.textContent = card.querySelector('h2')?.textContent.trim() || '';
    meta.innerHTML = '';
    card.querySelectorAll('.work-card-meta span').forEach((span) => meta.appendChild(span.cloneNode(true)));
    text.textContent = card.querySelector('.work-card-body > p')?.textContent.trim() || '';
    tags.innerHTML = '';
    cardTags.forEach((a) => tags.appendChild(a.cloneNode(true)));
    lastFocus = card;
    modal.hidden = false;
    document.body.classList.add('work-modal-open');
    if (scroller) scroller.scrollTop = 0;
    closeBtn?.focus();
  }

  function closeModal() {
    if (modal.hidden) return;
    modal.hidden = true;
    document.body.classList.remove('work-modal-open');
    lastFocus?.focus();
  }

  const live = document.getElementById('liveModal');
  const liveFrame = document.getElementById('liveModalFrame');

  const warmed = new Set();
  let warmTimer = 0;
  let liveLoaded = false;
  let revealTimer = 0;

  function markLoaded() {
    clearTimeout(revealTimer);
    if (!liveFrame.dataset.url) return;
    liveLoaded = true;
    live.classList.add('is-loaded');
  }

  function loadLive(url) {
    if (liveFrame.dataset.url === url) return;
    liveLoaded = false;
    live.classList.remove('is-loaded');
    liveFrame.dataset.url = url;
    liveFrame.src = url;
    clearTimeout(revealTimer);
    revealTimer = setTimeout(markLoaded, 1200);
  }

  function warmLive(card) {
    if (!live || !liveFrame || !live.hidden) return;
    const url = card.getAttribute('data-live');
    let origin = '';
    try { origin = new URL(url).origin; } catch (e) { return; }
    if (!warmed.has(origin)) {
      warmed.add(origin);
      const link = document.createElement('link');
      link.rel = 'preconnect';
      link.href = origin;
      document.head.appendChild(link);
    }
    loadLive(url);
  }

  grid.addEventListener('pointerover', (e) => {
    const card = e.target.closest('.work-card[data-live]:not([data-live-tab])');
    if (!card) return;
    clearTimeout(warmTimer);
    warmTimer = setTimeout(() => warmLive(card), e.pointerType === 'mouse' ? 120 : 0);
  });
  grid.addEventListener('focusin', (e) => {
    const card = e.target.closest('.work-card[data-live]:not([data-live-tab])');
    if (card) warmLive(card);
  });

  function openLive(card) {
    if (!live || !liveFrame) return;
    lastFocus = card;
    clearTimeout(warmTimer);
    loadLive(card.getAttribute('data-live'));
    live.classList.toggle('is-loaded', liveLoaded);
    live.hidden = false;
    document.body.classList.add('work-modal-open');
    live.querySelector('.live-modal-close')?.focus();
  }

  function closeLive() {
    if (!live || live.hidden) return;
    live.hidden = true;
    clearTimeout(revealTimer);
    liveFrame.dataset.url = '';
    liveFrame.src = 'about:blank';
    document.body.classList.remove('work-modal-open');
    lastFocus?.focus();
  }

  liveFrame?.addEventListener('load', markLoaded);
  const liveProgress = live ? live.querySelector('.live-modal-progress') : null;
  liveFrame?.addEventListener('load', () => {
    if (!liveProgress) return;
    liveProgress.style.height = '0';
    let win = null;
    try {
      win = liveFrame.contentWindow;
      void win.document.documentElement;
    } catch (e) {
      win = null;
    }
    liveProgress.hidden = !win;
    if (!win) return;
    const sync = () => {
      const doc = win.document.documentElement;
      const max = doc.scrollHeight - win.innerHeight;
      liveProgress.style.height = (max > 0 ? (win.scrollY / max) * 100 : 0) + '%';
    };
    win.addEventListener('scroll', sync, { passive: true });
    sync();
  });
  live?.querySelectorAll('[data-live-close]').forEach((el) => el.addEventListener('click', closeLive));

  function openCard(card) {
    if (card.hasAttribute('data-live-tab')) window.open(card.getAttribute('data-live'), '_blank', 'noopener');
    else if (card.hasAttribute('data-live')) openLive(card);
    else openModal(card);
  }

  grid.addEventListener('click', (e) => {
    const card = e.target.closest('.work-card');
    if (!card || !grid.contains(card)) return;
    e.preventDefault();
    openCard(card);
  });

  grid.addEventListener('keydown', (e) => {
    if (e.key !== 'Enter' && e.key !== ' ') return;
    const card = e.target.closest('.work-card');
    if (!card || card !== e.target) return;
    e.preventDefault();
    openCard(card);
  });

  modal.querySelectorAll('[data-work-close]').forEach((el) => el.addEventListener('click', closeModal));
  modal.querySelectorAll('[data-open-popup]').forEach((el) => el.addEventListener('click', closeModal));

  document.addEventListener('keydown', (e) => {
    if (e.key !== 'Escape') return;
    closeModal();
    closeLive();
  });
})();

// StickyCTA
(function initStickyWorkCta() {
  const cta = document.getElementById('stickyWorkCta');
  if (!cta) return;
  if (/^\/works(\.php)?\/?$/.test(window.location.pathname)) {
    cta.remove();
    return;
  }
  const footer = document.querySelector('.site-footer');
  const banner = document.getElementById('cookieBanner');
  const hero = document.querySelector('.hero-section, .page-hero, main > section, section');
  let ready = !hero;
  let footerVisible = false;
  let contactVisible = false;
  let workVisible = false;
  const contact = document.getElementById('contact');
  const workSection = document.querySelector('.home-work-section');

  function sync() {
    const show = ready && !footerVisible && !contactVisible && !workVisible && !document.body.classList.contains('street-join-active');
    cta.classList.toggle('is-visible', show);
    cta.setAttribute('aria-hidden', show ? 'false' : 'true');
    cta.tabIndex = show ? 0 : -1;
    const bannerOpen = banner && !banner.classList.contains('hidden') && banner.offsetParent !== null;
    cta.style.setProperty('--sticky-offset', bannerOpen ? (banner.offsetHeight + 12) + 'px' : '0px');
  }

  if (hero) {
    new IntersectionObserver((entries) => {
      ready = !entries[0].isIntersecting;
      sync();
    }).observe(hero);
  }

  if (footer) {
    new IntersectionObserver((entries) => {
      footerVisible = entries[0].isIntersecting;
      sync();
    }).observe(footer);
  }

  if (contact) {
    new IntersectionObserver((entries) => {
      contactVisible = entries[0].isIntersecting;
      sync();
    }, { rootMargin: '0px 0px -25% 0px' }).observe(contact);
  }

  if (workSection) {
    new IntersectionObserver((entries) => {
      workVisible = entries[0].isIntersecting;
      sync();
    }, { rootMargin: '0px 0px -90px 0px' }).observe(workSection);
  }

  ['allowCookies', 'rejectCookies'].forEach((id) => {
    document.getElementById(id)?.addEventListener('click', () => setTimeout(sync, 0));
  });
  window.addEventListener('resize', sync);
})();

// Testimonial videos
(function initStreetVideos() {
  const section = document.querySelector('.street-section');
  if (!section || !section.querySelector('.street-card--video')) return;

  const finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  const reduceMotion = false;
  let current = null;

  section.querySelectorAll('.street-card--video').forEach((card) => {
    const logo = card.querySelector('.street-logo');
    card.setAttribute('role', 'button');
    card.tabIndex = 0;
    card.setAttribute('aria-label', 'Play video review' + (logo ? ' from ' + logo.textContent.trim() : ''));
  });

  // Hover preview
  function playCard(card) {
    const video = card.querySelector('.street-video');
    if (!video) return;
    if (!video.dataset.fallback) {
      video.dataset.fallback = '1';
      video.addEventListener('error', () => {
        if (card.dataset.video && video.getAttribute('src') !== card.dataset.video) {
          video.src = card.dataset.video;
          if (current === card) video.play().catch(() => {});
        }
      });
    }
    video.muted = true;
    const p = video.play();
    if (p && p.catch) p.catch(() => {});
  }

  function stopAll() {
    section.querySelectorAll('.street-card--video .street-video').forEach((video) => {
      if (!video.paused) video.pause();
    });
  }

  // Play icon
  let cursor = null;
  let cx = 0, cy = 0, tx = 0, ty = 0, rafId = null, inside = false;
  if (finePointer) {
    cursor = document.createElement('div');
    cursor.className = 'street-play-cursor';
    cursor.setAttribute('aria-hidden', 'true');
    cursor.innerHTML =
      '<svg class="street-play-ring" viewBox="0 0 120 120"><defs><path id="streetPlayPath" d="M60 60m-46 0a46 46 0 1 1 92 0a46 46 0 1 1-92 0"/></defs>' +
      '<text textLength="286" lengthAdjust="spacing"><textPath href="#streetPlayPath">PLAY REVIEW \u2022 PLAY REVIEW \u2022 </textPath></text></svg>' +
      '<span class="street-play-core"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M7 4.5v15a1 1 0 0 0 1.5.86l12.5-7.5a1 1 0 0 0 0-1.72L8.5 3.64A1 1 0 0 0 7 4.5z"/></svg></span>';
    document.body.appendChild(cursor);
    document.documentElement.classList.add('has-video-cursor');
  }

  function enter(card) {
    current = card;
    playCard(card);
    if (cursor) {
      cursor.classList.add('is-visible');
      document.documentElement.classList.add('is-over-video');
    }
  }

  function leave() {
    current = null;
    stopAll();
    if (cursor) {
      cursor.classList.remove('is-visible');
      document.documentElement.classList.remove('is-over-video');
    }
  }

  // Follow
  function tick() {
    const k = reduceMotion ? 1 : 0.2;
    cx += (tx - cx) * k;
    cy += (ty - cy) * k;
    cursor.style.transform = `translate3d(${cx}px, ${cy}px, 0)`;
    if (inside && !modalOpen()) {
      const hit = document.elementFromPoint(tx, ty);
      const card = hit && hit.closest('.street-card--video');
      const over = card && section.contains(card) ? card : null;
      if (over !== current) {
        if (current) leave();
        if (over) enter(over);
      }
    }
    const moving = Math.abs(tx - cx) > 0.3 || Math.abs(ty - cy) > 0.3;
    rafId = inside || moving ? requestAnimationFrame(tick) : null;
  }

  if (finePointer) {
    section.addEventListener('pointerenter', (e) => {
      if (e.pointerType !== 'mouse') return;
      inside = true;
      tx = cx = e.clientX;
      ty = cy = e.clientY;
      if (!rafId) rafId = requestAnimationFrame(tick);
    });

    section.addEventListener('pointermove', (e) => {
      if (e.pointerType !== 'mouse') return;
      inside = true;
      tx = e.clientX;
      ty = e.clientY;
      if (!rafId) rafId = requestAnimationFrame(tick);
    });

    section.addEventListener('pointerleave', () => {
      inside = false;
      if (current) leave();
    });
  }

  // Video popup
  const modal = document.createElement('div');
  modal.className = 'street-video-modal';
  modal.hidden = true;
  modal.setAttribute('role', 'dialog');
  modal.setAttribute('aria-modal', 'true');
  modal.setAttribute('aria-label', 'Video review');
  modal.innerHTML =
    '<div class="street-video-modal-backdrop" data-close></div>' +
    '<div class="street-video-modal-box">' +
      '<button type="button" class="street-video-modal-close" aria-label="Close video" data-close>' +
        '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M4 4l10 10M14 4L4 14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>' +
      '</button>' +
      '<video class="street-video-modal-player" controls playsinline preload="auto"></video>' +
    '</div>';
  document.body.appendChild(modal);

  const box = modal.querySelector('.street-video-modal-box');
  const player = modal.querySelector('.street-video-modal-player');
  const closeBtn = modal.querySelector('.street-video-modal-close');
  let lastFocus = null;

  function setRatio(w, h) {
    if (w > 0 && h > 0) box.style.setProperty('--ratio', (w / h).toFixed(4));
  }
  player.addEventListener('loadedmetadata', () => setRatio(player.videoWidth, player.videoHeight));

  function modalOpen() {
    return !modal.hidden;
  }

  function openModal(card) {
    const src = card.dataset.video;
    if (!src) return;
    const preview = card.querySelector('.street-video');
    leave();
    lastFocus = document.activeElement;
    box.style.removeProperty('--ratio');
    if (preview) setRatio(preview.videoWidth, preview.videoHeight);
    player.src = src;
    player.currentTime = 0;
    player.muted = false;
    modal.hidden = false;
    document.body.classList.add('street-modal-open');
    closeBtn.focus();
    const p = player.play();
    if (p && p.catch) {
      // Muted fallback
      p.catch(() => {
        player.muted = true;
        player.play().catch(() => {});
      });
    }
  }

  function closeModal() {
    if (!modalOpen()) return;
    player.pause();
    player.removeAttribute('src');
    player.load();
    modal.hidden = true;
    document.body.classList.remove('street-modal-open');
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }

  // Marquee drag
  let pressedCard = null;
  section.addEventListener('pointerdown', (e) => {
    pressedCard = e.target.closest('.street-card--video');
  }, true);

  section.addEventListener('click', (e) => {
    const card = e.target.closest('.street-card--video') || pressedCard;
    pressedCard = null;
    if (card) openModal(card);
  });

  section.addEventListener('keydown', (e) => {
    const card = e.target.closest('.street-card--video');
    if (!card || (e.key !== 'Enter' && e.key !== ' ')) return;
    e.preventDefault();
    openModal(card);
  });

  modal.addEventListener('click', (e) => {
    if (e.target.closest('[data-close]')) closeModal();
  });

  document.addEventListener('keydown', (e) => {
    if (!modalOpen()) return;
    if (e.key === 'Escape') {
      e.preventDefault();
      closeModal();
    } else if (e.key === 'Tab') {
      // Focus trap
      e.preventDefault();
      if (document.activeElement === closeBtn) player.focus();
      else closeBtn.focus();
    }
  });

  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      leave();
      if (modalOpen()) player.pause();
    }
  });
})();

// Services panels
(function initServicePanels() {
  const wrap = document.getElementById('svcPanels');
  if (!wrap) return;
  const panels = Array.from(wrap.querySelectorAll('.svc-panel'));
  const canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  function activate(panel) {
    panels.forEach((p) => p.classList.toggle('is-active', p === panel));
  }

  // Selected service
  const filters = document.getElementById('servicesFilters');
  function syncWithFilter() {
    const btn = filters && filters.querySelector('.is-active');
    const id = btn ? btn.getAttribute('data-filter') : 'all';
    const match = panels.find((p) => (p.getAttribute('href') || '').endsWith('#' + id));
    if (match) activate(match);
  }
  filters?.addEventListener('click', () => setTimeout(syncWithFilter, 0));
  syncWithFilter();

  panels.forEach((panel) => {
    panel.addEventListener('mouseenter', () => {
      if (canHover) activate(panel);
    });
    panel.addEventListener('focus', () => {
      if (panel.matches(':focus-visible')) activate(panel);
    });
    panel.addEventListener('click', (e) => {
      if (panel.classList.contains('is-active')) return;
      e.preventDefault();
      activate(panel);
    });
  });
})();

// Filter labels
[['homeWorksIndustries', 'homeWorksFilters', 'homeWorksSubfilters'], ['servicesIndustries', 'servicesFilters', 'servicesSubfilters'], ['worksIndustries', 'worksFilters', 'worksSubfilters'], ['indIndustries', 'indServices', 'indSubs']].forEach(([industriesId, servicesId, subsId]) => {
  const industries = document.getElementById(industriesId);
  const services = document.getElementById(servicesId);
  const subs = document.getElementById(subsId);
  if (!industries || !services || !subs) return;
  const industryRow = industries.closest('.home-filter-row');
  const serviceRow = services.closest('.home-filter-row');

  industries.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-industry]');
    if (!btn) return;
    industryRow.classList.toggle('is-done', btn.getAttribute('data-industry') !== 'all');
    serviceRow.classList.remove('is-done');
  });

  services.addEventListener('click', (e) => {
    if (e.target.closest('[data-filter]')) serviceRow.classList.remove('is-done');
  });

  subs.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-sub]');
    if (!btn) return;
    serviceRow.classList.toggle('is-done', btn.getAttribute('data-sub') !== 'all');
  });
});

// Hero rotate
(function initHeroRotate() {
  document.querySelectorAll('[data-rotate]').forEach((box) => {
    const items = Array.from(box.querySelectorAll('.hero-rotate-item'));
    if (items.length < 2) return;
    let index = 0;
    setInterval(() => {
      items[index].classList.remove('is-active');
      index = (index + 1) % items.length;
      items[index].classList.add('is-active');
    }, 4500);
  });
})();


// Form steps
(function initFormSteps() {
  document.querySelectorAll('form[data-steps]').forEach((form) => {
    const panels = Array.from(form.querySelectorAll('.form-step'));
    if (!panels.length) return;
    const wrap = form.closest('.contact-form-wrap');
    const dots = wrap ? Array.from(wrap.querySelectorAll('[data-step-dot]')) : [];
    const lines = wrap ? Array.from(wrap.querySelectorAll('.form-step-line')) : [];
    const stepInput = form.querySelector('input[name="step"]');
    const leadInput = form.querySelector('input[name="lead_id"]');
    const sent = {};
    let current = 1;

    if (leadInput && !leadInput.value) {
      leadInput.value = Date.now().toString(36).toUpperCase() + '-' + Math.random().toString(36).slice(2, 6).toUpperCase();
    }

    function show(n) {
      current = n;
      panels.forEach((panel) => { panel.hidden = Number(panel.dataset.step) !== n; });
      if (stepInput) stepInput.value = String(n);
      dots.forEach((dot) => {
        const i = Number(dot.dataset.stepDot);
        dot.classList.toggle('is-active', i === n);
        dot.classList.toggle('is-done', i < n);
        if (i === n) dot.setAttribute('aria-current', 'step');
        else dot.removeAttribute('aria-current');
      });
      lines.forEach((line, i) => line.classList.toggle('is-done', i + 1 < n));
    }

    function valid(panel) {
      for (const field of panel.querySelectorAll('input, select, textarea')) {
        if (field.closest('[hidden]') && field.closest('[hidden]') !== panel) continue;
        if (!field.checkValidity()) {
          const trigger = field.tagName === 'SELECT' ? field.closest('.wtf-select')?.querySelector('.wtf-select-trigger') : null;
          if (trigger) {
            trigger.classList.add('is-invalid');
            trigger.focus();
            setTimeout(() => trigger.classList.remove('is-invalid'), 1600);
          }
          field.reportValidity();
          return false;
        }
      }
      return true;
    }

    function syncName() {
      const full = form.querySelector('input[name="name"]');
      if (full && form.elements.first_name) full.value = [fieldText('first_name'), fieldText('last_name')].filter(Boolean).join(' ');
    }

    function sendStep(n) {
      syncName();
      const data = new FormData(form);
      data.set('step', String(n));
      const key = JSON.stringify(Array.from(data.entries()));
      if (sent[n] === key) return;
      sent[n] = key;
      fetch(form.action, { method: 'POST', body: data, keepalive: true }).catch(() => {
        delete sent[n];
      });
    }

    const note = form.querySelector('.form-step-note');
    let noteBusy = false;

    function escapeText(value) {
      const d = document.createElement('div');
      d.textContent = value;
      return d.innerHTML;
    }

    function fieldText(name) {
      const el = form.elements[name];
      if (!el) return '';
      if (el.tagName === 'SELECT') {
        const o = el.options[el.selectedIndex];
        return o && !o.disabled ? o.textContent.trim() : '';
      }
      return String(el.value || '').trim();
    }

    function summaryHtml() {
      const industry = fieldText('industry') === 'Other' ? fieldText('industry_other') : fieldText('industry');
      const rows = [
        ['Industry', industry],
        ['Service', fieldText('help')],
        ['Investment', fieldText('budget')],
        ['Heard about us', fieldText('heard_about')]
      ].filter((r) => r[1]);
      return '<p class="form-step-note-title">Here is what we have so far</p><ul class="form-step-note-list">' +
        rows.map((r) => '<li><span>' + r[0] + '</span><strong>' + escapeText(r[1]) + '</strong></li>').join('') + '</ul>';
    }

    function flash(html, ms, then) {
      if (!note) {
        then();
        return;
      }
      noteBusy = true;
      panels.forEach((panel) => { panel.hidden = true; });
      note.innerHTML = html;
      note.hidden = false;
      note.classList.remove('is-in');
      void note.offsetWidth;
      note.classList.add('is-in');
      setTimeout(() => {
        note.hidden = true;
        note.classList.remove('is-in');
        noteBusy = false;
        then();
      }, ms);
    }

    form.querySelectorAll('[data-step-next]').forEach((btn) => {
      btn.addEventListener('click', () => {
        if (noteBusy) return;
        const panel = btn.closest('.form-step');
        if (!valid(panel)) return;
        const from = current;
        sendStep(from);
        const go = () => {
          show(from + 1);
          const top = (wrap || form).getBoundingClientRect().top;
          if (top < 80) window.scrollBy({ top: top - 100, behavior: 'smooth' });
        };
        if (from === 1) {
          const first = fieldText('first_name') || fieldText('name').split(/\s+/)[0];
          flash('<p class="form-step-note-title">Great! Nice to meet you ' + escapeText(first) + ' \u{1F60A}</p>', 2200, go);
        } else if (from === 2) {
          flash(summaryHtml(), 3500, go);
        } else {
          go();
        }
      });
    });

    form.addEventListener('keydown', (e) => {
      if (e.key !== 'Enter' || e.target.tagName === 'TEXTAREA' || e.target.closest('.wtf-select')) return;
      const next = panels[current - 1]?.querySelector('[data-step-next]');
      if (!next) return;
      e.preventDefault();
      next.click();
    });

    form.addEventListener('submit', (e) => {
      syncName();
      if (stepInput) stepInput.value = String(panels.length);
      if (!form.querySelector('input[name="name"]').value) {
        e.preventDefault();
        show(1);
      }
    });

    const otherSelect = form.querySelector('[data-other-select]');
    const otherField = form.querySelector('.form-other-field');
    if (otherSelect && otherField) {
      const otherInput = otherField.querySelector('input');
      const syncOther = () => {
        const isOther = otherSelect.value === 'Other';
        otherField.hidden = !isOther;
        otherInput.required = isOther;
        if (!isOther) otherInput.value = '';
      };
      otherSelect.addEventListener('change', syncOther);
      syncOther();
    }

    const notBtn = form.querySelector('[data-not-committed]');
    if (notBtn) {
      notBtn.addEventListener('click', () => {
        syncName();
        const data = new FormData(form);
        data.set('step', String(panels.length));
        data.set('commitment', 'Not committed');
        fetch(form.action, { method: 'POST', body: data, keepalive: true }).catch(() => {});
      });
    }

    const runaway = form.querySelector('.form-commit-runaway');
    const commit = form.querySelector('.form-commit');
    const catcher = form.querySelector('.form-catch');
    if (runaway && commit) {
      let atTop = false;
      let lockUntil = 0;
      let catchTimer = 0;

      function showCatch() {
        if (!catcher) return;
        catcher.classList.remove('is-visible');
        void catcher.offsetWidth;
        catcher.classList.add('is-visible');
        clearTimeout(catchTimer);
        catchTimer = setTimeout(() => catcher.classList.remove('is-visible'), 2600);
      }

      function rearrange() {
        const now = performance.now();
        if (now < lockUntil) return;
        lockUntil = now + 650;
        const btns = Array.from(commit.querySelectorAll('.btn'));
        const before = new Map(btns.map((b) => [b, b.getBoundingClientRect()]));
        atTop = !atTop;
        commit.classList.toggle('is-swapped', atTop);
        btns.forEach((b) => {
          const r0 = before.get(b);
          const r1 = b.getBoundingClientRect();
          const dy = r0.top - r1.top;
          if (!dy) return;
          b.animate([{ transform: 'translateY(' + dy + 'px)' }, { transform: 'translateY(0)' }], { duration: 420, easing: 'cubic-bezier(0.22, 1, 0.36, 1)' });
        });
        showCatch();
      }

      form.addEventListener('pointermove', (e) => {
        if (runaway.closest('[hidden]') || e.pointerType === 'touch') return;
        const r = runaway.getBoundingClientRect();
        const near = e.clientX > r.left - 24 && e.clientX < r.right + 24 && e.clientY > r.top - 18 && e.clientY < r.bottom + 18;
        if (near) rearrange();
      });
      ['pointerdown', 'click', 'focus'].forEach((type) => {
        runaway.addEventListener(type, (e) => {
          e.preventDefault();
          e.stopPropagation();
          runaway.blur();
          if (type === 'pointerdown') rearrange();
        });
      });
    }

    show(1);
  });
})();

// Filter scroll
document.addEventListener('click', (e) => {
  const btn = e.target.closest('.works-filters [data-industry], .works-filters [data-filter], .works-subfilters [data-sub]');
  if (!btn) return;
  const bar = btn.closest('.works-filters, .works-subfilters');
  if (!bar || bar.scrollWidth <= bar.clientWidth + 1) return;
  const pad = parseFloat(getComputedStyle(bar).paddingLeft) || 0;
  const left = bar.scrollLeft + btn.getBoundingClientRect().left - bar.getBoundingClientRect().left - pad;
  bar.scrollTo({ left: Math.max(0, Math.min(left, bar.scrollWidth - bar.clientWidth)), behavior: 'smooth' });
});

// Sticky contrast
(function initStickyContrast() {
  const cta = document.getElementById('stickyWorkCta');
  if (!cta) return;
  let ticking = false;
  function isDark(el) {
    const c = getComputedStyle(el);
    const m = c.backgroundColor.match(/[\d.]+/g);
    if (!m) return false;
    const alpha = m.length > 3 ? parseFloat(m[3]) : 1;
    if (alpha < 0.5) return false;
    const k = c.backgroundColor.startsWith('color(') ? 255 : 1;
    const [r, g, b] = m.map((v) => Number(v) * k);
    return g > r && g >= b && (0.2126 * r + 0.7152 * g + 0.0722 * b) / 255 < 0.4;
  }
  function darkAt(x, y) {
    let el = document.elementsFromPoint(x, y).find((n) => n !== cta && !cta.contains(n));
    while (el && el !== document.body && el !== document.documentElement) {
      if (isDark(el)) return true;
      el = el.parentElement;
    }
    return false;
  }
  function check() {
    ticking = false;
    if (!cta.classList.contains('is-visible')) return;
    const r = cta.getBoundingClientRect();
    cta.classList.toggle('is-on-dark', darkAt(r.left + r.width / 2, r.top + r.height / 2));
  }
  function queue() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(check);
  }
  window.addEventListener('scroll', queue, { passive: true });
  window.addEventListener('resize', queue);
  new MutationObserver(() => {
    queue();
    setTimeout(queue, 500);
  }).observe(cta, { attributes: true, attributeFilter: ['class'] });
  queue();
})();

// Show more
(function initShowMore() {
  const LIMIT = 3;
  document.querySelectorAll('#homeWorksGrid').forEach((grid) => {
    const cta = grid.closest('.container')?.querySelector('.home-work-cta');
    if (!cta) return;
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'btn btn-lime btn-lg works-show-more';
    btn.textContent = 'Show More';
    btn.hidden = true;
    cta.appendChild(btn);
    let expanded = false;

    function apply() {
      const visible = Array.from(grid.querySelectorAll('.work-card')).filter((card) => !card.hidden);
      visible.forEach((card, i) => card.classList.toggle('is-over-limit', !expanded && i >= LIMIT));
      grid.querySelectorAll('.work-card[hidden]').forEach((card) => card.classList.remove('is-over-limit'));
      btn.hidden = visible.length <= LIMIT;
      btn.textContent = expanded ? 'Show Less' : 'Show More';
    }

    const RANK = ['Prime Construction', 'Beyond Wow Plumbing', 'Tanous HVAC', 'Teamwork Home Designs', 'United Elite Group', 'Alexander\u2019s Heating & AC', 'Davis Air Conditioning & Heating', 'Edwards Plumbing', 'Economy Plumbing Services', 'Tadlock Roofing', 'Yuras Roofing', 'Janney Home Services', 'Nozzle Nolen', 'Alta Pest Control', 'Akela Pest Control', 'ASA Pools & Hot Tubs', 'Summit Pool & Spa', 'South Texas Pool Tile Cleaning', 'Texan Landscape Group', '2 Gals Landscaping', 'Evergreen Outdoor', 'KW Handyman', 'TRI Miami Handyman Services', 'I\u2019m That Guy Handyman', 'ATX Clean Pro Wash', 'Southern Shine', 'Austin Pressure Washing & Roof Cleaning'];
    const rankOf = (card) => {
      const i = RANK.indexOf((card.querySelector('h2')?.textContent || '').trim());
      return i < 0 ? RANK.length : i;
    };
    const ordered = Array.from(grid.querySelectorAll('.work-card')).map((card, i) => [card, i]).sort((x, y) => rankOf(x[0]) - rankOf(y[0]) || x[1] - y[1]);
    ordered.forEach(([card]) => grid.appendChild(card));

    grid.addEventListener('works:filtered', () => {
      expanded = false;
      apply();
    });
    btn.addEventListener('click', () => {
      expanded = !expanded;
      apply();
      if (!expanded) grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    apply();
  });
})();

// Back to top
(function initBackToTop() {
  const btn = document.getElementById('backToTop');
  if (!btn) return;
  const contact = document.getElementById('contact');
  const footer = document.querySelector('.site-footer');
  let trigger = document.querySelector('.final-cta-section');
  if (!trigger) {
    const last = contact || footer;
    let prev = last ? last.previousElementSibling : null;
    while (prev && (prev.tagName !== 'SECTION' || prev.offsetHeight === 0)) prev = prev.previousElementSibling;
    trigger = prev || last;
  }
  if (!trigger) return;
  btn.hidden = false;
  let ticking = false;
  function sync() {
    ticking = false;
    const show = trigger.getBoundingClientRect().top < window.innerHeight * 0.85;
    btn.classList.toggle('is-visible', show);
    btn.tabIndex = show ? 0 : -1;
  }
  window.addEventListener('scroll', () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(sync);
  }, { passive: true });
  window.addEventListener('resize', sync);
  btn.addEventListener('click', () => {
    const root = document.documentElement;
    root.dataset.autoScroll = '1';
    const started = performance.now();
    window.scrollTo({ top: 0, behavior: 'smooth' });
    (function watch() {
      if (window.scrollY <= 1 || performance.now() - started > 4000) {
        if (window.scrollY > 1) window.scrollTo({ top: 0, behavior: 'instant' });
        delete root.dataset.autoScroll;
        return;
      }
      requestAnimationFrame(watch);
    })();
  });
  sync();
})();

// Join handoff
(function initJoinHandoff() {
  const section = document.querySelector('.street-section');
  const real = section ? section.querySelector('.street-cta .btn:not(.street-join-float)') : null;
  const float = section ? section.querySelector('.street-join-float') : null;
  if (!real || !float) return;
  document.body.appendChild(float);
  let active = false;
  let ticking = false;
  function sync() {
    ticking = false;
    const s = section.getBoundingClientRect();
    const r = real.getBoundingClientRect();
    const f = float.getBoundingClientRect();
    const dockTop = f.top - (float.classList.contains('is-visible') ? 0 : f.height * 1.4);
    const vh = document.documentElement.getBoundingClientRect().height ? window.innerHeight : window.innerHeight;
    const started = s.top < vh * 0.75 && s.bottom > 0;
    const next = started && r.top > dockTop + 1;
    if (next !== active) {
      active = next;
      if (!active) {
        float.style.transition = 'none';
        requestAnimationFrame(() => requestAnimationFrame(() => { float.style.transition = ''; }));
      }
      document.body.classList.toggle('street-join-active', active);
      real.classList.toggle('is-handed-off', active);
      float.classList.toggle('is-visible', active);
      window.dispatchEvent(new Event('resize'));
    }
  }
  window.addEventListener('scroll', () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(sync);
  }, { passive: true });
  sync();
})();

// Industries show more
(function initIndustriesShowMore() {
  const LIMIT = 4;
  const grid = document.getElementById('industriesGrid');
  const btn = document.getElementById('industriesShowMore');
  if (!grid || !btn) return;
  let expanded = false;
  function apply() {
    const visible = Array.from(grid.querySelectorAll('.service-detail-card')).filter((card) => !card.hidden);
    grid.querySelectorAll('.service-detail-card').forEach((card) => card.classList.remove('is-over-limit'));
    visible.forEach((card, i) => card.classList.toggle('is-over-limit', !expanded && i >= LIMIT));
    btn.hidden = visible.length <= LIMIT;
    btn.textContent = expanded ? 'Show Less' : 'Show More';
  }
  grid.addEventListener('industries:filtered', () => {
    expanded = false;
    apply();
  });
  btn.addEventListener('click', () => {
    expanded = !expanded;
    apply();
    if (!expanded) grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
  apply();
})();
