(function () {
    const navToggle = document.querySelector('[data-nav-toggle]');
    const primaryNav = document.querySelector('[data-primary-nav]');
    const navOverlay = document.querySelector('[data-nav-overlay]');
    const breakpoint = window.matchMedia('(min-width: 900px)');

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

    syncNavAccessibility(false);

    if (navToggle) {
        navToggle.setAttribute('aria-expanded', 'false');
    }

    const handleBreakpointChange = () => {
        if (breakpoint.matches) {
            setNavState(false);
        } else {
            syncNavAccessibility(document.body.classList.contains('nav-open'));
        }
    };

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

    document.querySelectorAll('a[href="#quote"]').forEach((link) => {
        link.addEventListener('click', () => setNavState(false));
    });

    const slider = document.querySelector('[data-testimonial-slider]');
    if (slider) {
        const slides = slider.querySelectorAll('[data-testimonial-slide]');
        const navButtons = slider.querySelectorAll('[data-testimonial-nav] button');
        let active = 0;
        const activate = (index) => {
            slides.forEach((slide, i) => {
                slide.hidden = i !== index;
            });
            navButtons.forEach((btn, i) => {
                btn.classList.toggle('is-active', i === index);
            });
            active = index;
        };
        navButtons.forEach((btn, i) => {
            btn.addEventListener('click', () => activate(i));
        });
        if (slides.length > 0) {
            activate(0);
            if (slides.length > 1) {
                setInterval(() => {
                    const next = (active + 1) % slides.length;
                    activate(next);
                }, 6000);
            }
        }
    }

    const heroTrack = document.querySelector('[data-hero-slider]');
    if (heroTrack) {
        let offset = 0;
        const slides = heroTrack.querySelectorAll('.hero-slide');
        if (slides.length > 1) {
            setInterval(() => {
                offset = (offset + 1) % slides.length;
                heroTrack.style.transform = `translateX(-${offset * 100}%)`;
            }, 5000);
        }
    }

    document.querySelectorAll('[data-before-after]').forEach((component) => {
        const range = component.querySelector('[data-before-after-range]');
        const setPosition = (value) => {
            component.style.setProperty('--position', `${value}%`);
        };

        if (range) {
            setPosition(range.value);
            range.addEventListener('input', (event) => {
                setPosition(event.target.value);
            });
        }
    });

    document.querySelectorAll('[data-accordion]').forEach((accordion) => {
        accordion.querySelectorAll('.accordion-item').forEach((item) => {
            const toggle = item.querySelector('.accordion-toggle');
            const content = item.querySelector('.accordion-content');
            if (!toggle || !content) {
                return;
            }

            content.hidden = !item.classList.contains('is-active');
            toggle.addEventListener('click', () => {
                const expanded = toggle.getAttribute('aria-expanded') === 'true';
                toggle.setAttribute('aria-expanded', String(!expanded));
                content.hidden = expanded;
            });
        });
    });

    document.querySelectorAll('.tabs').forEach((tabList) => {
        const container = tabList.closest('[data-tabs]') || tabList.parentElement;
        const buttons = tabList.querySelectorAll('.tab-button');
        const panels = container ? container.querySelectorAll('.tab-panel') : document.querySelectorAll(`#${tabList.id} ~ .tab-panel`);

        panels.forEach((panel) => {
            panel.hidden = !panel.classList.contains('is-active');
        });

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-tab-target');

                buttons.forEach((btn) => {
                    const isActive = btn === button;
                    btn.classList.toggle('is-active', isActive);
                    btn.setAttribute('aria-selected', String(isActive));
                });

                panels.forEach((panel) => {
                    const isActive = panel.id === targetId;
                    panel.classList.toggle('is-active', isActive);
                    panel.hidden = !isActive;
                });
            });
        });
    });
})();
