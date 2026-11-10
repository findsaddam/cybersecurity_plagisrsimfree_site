(() => {
  const body = document.body;
  const header = document.getElementById('siteHeader');
  const dropdown = document.querySelector('[data-dropdown]');
  const dropdownToggle = document.querySelector('[data-dropdown-toggle]');
  const mobileMenu = document.querySelector('[data-mobile-menu]');
  const mobileOverlay = document.querySelector('[data-mobile-overlay]');
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const menuClose = document.querySelector('[data-menu-close]');
  const mobileSubjects = document.querySelector('[data-mobile-subjects]');
  const mobileSubjectsPanel = document.querySelector('[data-mobile-subjects-panel]');

  const setDropdown = (open) => {
    if (!dropdown || !dropdownToggle) return;
    dropdown.classList.toggle('is-open', open);
    dropdownToggle.setAttribute('aria-expanded', String(open));
  };

  dropdownToggle?.addEventListener('click', (event) => {
    event.stopPropagation();
    setDropdown(!dropdown.classList.contains('is-open'));
  });

  document.addEventListener('click', (event) => {
    if (dropdown && !dropdown.contains(event.target)) setDropdown(false);
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      setDropdown(false);
      closeMobileMenu();
    }
  });

  function openMobileMenu() {
    mobileMenu?.classList.add('is-open');
    mobileOverlay?.classList.add('is-open');
    body.classList.add('menu-open');
    menuToggle?.setAttribute('aria-expanded', 'true');
    mobileMenu?.setAttribute('aria-hidden', 'false');
  }

  function closeMobileMenu() {
    mobileMenu?.classList.remove('is-open');
    mobileOverlay?.classList.remove('is-open');
    body.classList.remove('menu-open');
    menuToggle?.setAttribute('aria-expanded', 'false');
    mobileMenu?.setAttribute('aria-hidden', 'true');
  }

  menuToggle?.addEventListener('click', openMobileMenu);
  menuClose?.addEventListener('click', closeMobileMenu);
  mobileOverlay?.addEventListener('click', closeMobileMenu);
  mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMobileMenu));

  mobileSubjects?.addEventListener('click', () => {
    const open = !mobileSubjectsPanel?.classList.contains('is-open');
    mobileSubjectsPanel?.classList.toggle('is-open', open);
    mobileSubjects.setAttribute('aria-expanded', String(open));
    const indicator = mobileSubjects.querySelector('span');
    if (indicator) indicator.textContent = open ? '−' : '+';
  });

  document.querySelectorAll('.faq-item button').forEach((button) => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-item');
      const open = !item.classList.contains('is-open');
      item.parentElement.querySelectorAll('.faq-item.is-open').forEach((other) => {
        if (other !== item) {
          other.classList.remove('is-open');
          other.querySelector('button')?.setAttribute('aria-expanded', 'false');
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
  window.addEventListener('scroll', handleScroll, { passive: true });
})();
