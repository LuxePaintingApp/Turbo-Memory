(function () {
    const header = document.querySelector('.site-header');
    const navToggle = document.querySelector('[data-nav-toggle]');
    const primaryNav = document.querySelector('[data-primary-nav]');
    const navOverlay = document.querySelector('[data-nav-overlay]');
    const breakpoint = window.matchMedia('(min-width: 768px)');

    const toggleHeaderState = () => {
        if (!header) {
            return;
        }
        if (window.scrollY > 24) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    };

    const syncNavAccessibility = (isOpen) => {
        if (primaryNav) {
            const hidden = breakpoint.matches ? 'false' : String(!isOpen);
            primaryNav.setAttribute('aria-hidden', hidden);
        }
        if (navOverlay) {
            navOverlay.setAttribute('aria-hidden', String(!isOpen));
        }
    };

    const setNavState = (isOpen) => {
        document.body.classList.toggle('nav-open', isOpen);
        if (navToggle) {
            navToggle.setAttribute('aria-expanded', String(isOpen));
        }
        syncNavAccessibility(isOpen);
    };

    const handleBreakpointChange = () => {
        if (breakpoint.matches) {
            setNavState(false);
        } else {
            syncNavAccessibility(document.body.classList.contains('nav-open'));
        }
    };

    syncNavAccessibility(false);
    toggleHeaderState();

    window.addEventListener('scroll', toggleHeaderState, { passive: true });

    if (typeof breakpoint.addEventListener === 'function') {
        breakpoint.addEventListener('change', handleBreakpointChange);
    } else if (typeof breakpoint.addListener === 'function') {
        breakpoint.addListener(handleBreakpointChange);
    }

    if (navToggle && primaryNav) {
        navToggle.addEventListener('click', () => {
            const isOpen = !document.body.classList.contains('nav-open');
            setNavState(isOpen);
        });

        primaryNav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => setNavState(false));
        });

        document.addEventListener('keyup', (event) => {
            if (event.key === 'Escape') {
                setNavState(false);
            }
        });
    }

    if (navOverlay) {
        navOverlay.addEventListener('click', () => setNavState(false));
    }

    document.querySelectorAll('[data-before-after]').forEach((component) => {
        const range = component.querySelector('[data-before-after-range]');
        const panes = component.querySelectorAll('.before-after__pane');
        const setPosition = (value) => {
            component.style.setProperty('--position', `${value}%`);
            if (panes.length === 2) {
                panes[0].style.clipPath = `inset(0 ${100 - value}% 0 0)`;
                panes[1].style.clipPath = `inset(0 0 0 ${value}%)`;
            }
        };
        if (range) {
            setPosition(range.value);
            range.addEventListener('input', (event) => {
                setPosition(event.target.value);
            });
        }
    });

})();
