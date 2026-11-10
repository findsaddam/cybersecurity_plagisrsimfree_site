(() => {
  const body = document.body;
  const header = document.getElementById('siteHeader');
  const dropdowns = [...document.querySelectorAll('[data-dropdown]')];
  const mobileMenu = document.querySelector('[data-mobile-menu]');
  const mobileOverlay = document.querySelector('[data-mobile-overlay]');
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const menuClose = document.querySelector('[data-menu-close]');

  const closeDropdowns = (except = null) => {
    dropdowns.forEach((dropdown) => {
      if (dropdown === except) return;
      dropdown.classList.remove('is-open');
      dropdown.querySelector('[data-dropdown-toggle]')?.setAttribute('aria-expanded','false');
    });
  };

  dropdowns.forEach((dropdown) => {
    const toggle = dropdown.querySelector('[data-dropdown-toggle]');
    toggle?.addEventListener('click', (event) => {
      event.stopPropagation();
      const open = !dropdown.classList.contains('is-open');
      closeDropdowns(dropdown);
      dropdown.classList.toggle('is-open', open);
      toggle.setAttribute('aria-expanded', String(open));
    });
  });

  document.addEventListener('click', (event) => {
    if (!dropdowns.some((dropdown) => dropdown.contains(event.target))) closeDropdowns();
  });

  function openMobileMenu() {
    mobileMenu?.classList.add('is-open');
    mobileOverlay?.classList.add('is-open');
    body.classList.add('menu-open');
    menuToggle?.setAttribute('aria-expanded','true');
    mobileMenu?.setAttribute('aria-hidden','false');
  }
  function closeMobileMenu() {
    mobileMenu?.classList.remove('is-open');
    mobileOverlay?.classList.remove('is-open');
    body.classList.remove('menu-open');
    menuToggle?.setAttribute('aria-expanded','false');
    mobileMenu?.setAttribute('aria-hidden','true');
  }

  menuToggle?.addEventListener('click', openMobileMenu);
  menuClose?.addEventListener('click', closeMobileMenu);
  mobileOverlay?.addEventListener('click', closeMobileMenu);
  mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMobileMenu));

  mobileMenu?.querySelectorAll('[data-mobile-accordion]').forEach((button) => {
    const panel = button.nextElementSibling;
    button.addEventListener('click', () => {
      const open = !panel?.classList.contains('is-open');
      mobileMenu.querySelectorAll('[data-mobile-panel].is-open').forEach((other) => {
        if (other !== panel) {
          other.classList.remove('is-open');
          const prev = other.previousElementSibling;
          prev?.setAttribute('aria-expanded','false');
          const indicator = prev?.querySelector('span');
          if (indicator) indicator.textContent = '+';
        }
      });
      panel?.classList.toggle('is-open', open);
      button.setAttribute('aria-expanded', String(open));
      const indicator = button.querySelector('span');
      if (indicator) indicator.textContent = open ? '−' : '+';
    });
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') { closeDropdowns(); closeMobileMenu(); }
  });

  document.querySelectorAll('.faq-item button').forEach((button) => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-item');
      const open = !item.classList.contains('is-open');
      item.parentElement.querySelectorAll('.faq-item.is-open').forEach((other) => {
        if (other !== item) {
          other.classList.remove('is-open');
          other.querySelector('button')?.setAttribute('aria-expanded','false');
        }
      });
      item.classList.toggle('is-open', open);
      button.setAttribute('aria-expanded', String(open));
    });
  });

  const revealItems = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
    revealItems.forEach((item) => observer.observe(item));
  } else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
  }

  const handleScroll = () => header?.classList.toggle('is-scrolled', window.scrollY > 8);
  handleScroll();
  window.addEventListener('scroll', handleScroll, { passive:true });
})();
