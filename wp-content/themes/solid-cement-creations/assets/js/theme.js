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

    const activateToast = (toast, duration = 3600) => {
        if (!toast) {
            return;
        }
        toast.classList.add('is-visible');
        setTimeout(() => {
            toast.classList.remove('is-visible');
        }, duration);
    };

    document.querySelectorAll('form[data-toast-target]').forEach((form) => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const toastId = form.getAttribute('data-toast-target');
            const toast = document.getElementById(toastId);
            activateToast(toast);
        });
    });

    const modals = new Map();
    document.querySelectorAll('.modal').forEach((modal) => {
        modals.set(modal.id, modal);
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.remove('is-open');
            }
        });
    });

    document.querySelectorAll('[data-modal-open]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const targetId = trigger.getAttribute('data-modal-open');
            const modal = modals.get(targetId);
            if (modal) {
                modal.classList.add('is-open');
                const focusable = modal.querySelector('button, a, input, textarea, select');
                if (focusable) {
                    focusable.focus();
                }
            }
        });
    });

    document.querySelectorAll('[data-modal-close]').forEach((button) => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal');
            if (modal) {
                modal.classList.remove('is-open');
            }
        });
    });

    const drawers = new Map();
    document.querySelectorAll('[data-drawer]').forEach((drawer, index) => {
        const id = drawer.id || `drawer-${index}`;
        if (!drawer.id) {
            drawer.id = id;
        }
        drawers.set(id, drawer);
    });

    const closeDrawer = (drawer) => {
        if (drawer) {
            drawer.classList.remove('is-open');
        }
    };

    const openDrawer = (drawer) => {
        if (drawer) {
            drawer.classList.add('is-open');
        }
    };

    document.querySelectorAll('[data-drawer-open]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-drawer-open');
            const drawer = targetId ? drawers.get(targetId) : drawers.values().next().value;
            openDrawer(drawer);
        });
    });

    document.querySelectorAll('[data-drawer-close]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const drawer = btn.closest('[data-drawer]');
            if (drawer) {
                closeDrawer(drawer);
            } else {
                const targetId = btn.getAttribute('data-drawer-close');
                const targetDrawer = targetId ? drawers.get(targetId) : null;
                closeDrawer(targetDrawer);
            }
        });
    });

    document.addEventListener('keyup', (event) => {
        if (event.key === 'Escape') {
            drawers.forEach((drawer) => closeDrawer(drawer));
        }
    });

    document.querySelectorAll('[data-popover-toggle]').forEach((toggle) => {
        toggle.addEventListener('click', () => {
            const targetId = toggle.getAttribute('data-popover-toggle');
            const popover = document.getElementById(targetId);
            if (popover) {
                popover.classList.toggle('is-active');
            }
        });
    });

    document.addEventListener('click', (event) => {
        document.querySelectorAll('.popover.is-active').forEach((popover) => {
            if (!popover.contains(event.target) && !event.target.closest(`[data-popover-toggle="${popover.id}"]`)) {
                popover.classList.remove('is-active');
            }
        });
    });

    document.querySelectorAll('[data-accordion]').forEach((accordion) => {
        accordion.querySelectorAll('.accordion__trigger').forEach((trigger) => {
            trigger.addEventListener('click', () => {
                const item = trigger.closest('.accordion__item');
                const expanded = trigger.getAttribute('aria-expanded') === 'true';
                accordion.querySelectorAll('.accordion__item').forEach((entry) => {
                    entry.classList.remove('is-open');
                    const btn = entry.querySelector('.accordion__trigger');
                    if (btn) {
                        btn.setAttribute('aria-expanded', 'false');
                    }
                });
                if (!expanded) {
                    item.classList.add('is-open');
                    trigger.setAttribute('aria-expanded', 'true');
                }
            });
        });
    });

    document.querySelectorAll('[data-tabs]').forEach((tabs) => {
        const buttons = tabs.querySelectorAll('.tabs__button');
        const panels = tabs.querySelectorAll('.tabs__panel');
        const activate = (index) => {
            buttons.forEach((button, i) => {
                button.classList.toggle('is-active', i === index);
                button.setAttribute('aria-selected', i === index ? 'true' : 'false');
            });
            panels.forEach((panel, i) => {
                panel.classList.toggle('is-active', i === index);
                panel.hidden = i !== index;
            });
        };
        buttons.forEach((button, index) => {
            button.addEventListener('click', () => activate(index));
        });
        if (buttons.length) {
            activate(0);
        }
    });

    document.querySelectorAll('[data-range-output]').forEach((wrapper) => {
        const range = wrapper.querySelector('input[type="range"]');
        const output = wrapper.querySelector('[data-output-value]');
        if (range && output) {
            const update = () => {
                output.textContent = range.value;
            };
            update();
            range.addEventListener('input', update);
        }
    });

    const observer = 'IntersectionObserver' in window ? new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const bar = entry.target.querySelector('.progress-track__bar');
                if (bar) {
                    const target = entry.target.getAttribute('data-progress');
                    bar.style.width = target ? `${target}%` : '100%';
                }
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 }) : null;

    document.querySelectorAll('[data-progress]').forEach((section) => {
        if (observer) {
            observer.observe(section);
        } else {
            const bar = section.querySelector('.progress-track__bar');
            if (bar) {
                const target = section.getAttribute('data-progress');
                bar.style.width = target ? `${target}%` : '100%';
            }
        }
    });

    document.querySelectorAll('[data-carousel]').forEach((carousel) => {
        const track = carousel.querySelector('.carousel__track');
        const items = carousel.querySelectorAll('.carousel__item');
        const prev = carousel.querySelector('[data-carousel-prev]');
        const next = carousel.querySelector('[data-carousel-next]');
        let index = 0;
        const update = () => {
            if (!track) {
                return;
            }
            track.style.transform = `translateX(-${index * 100}%)`;
        };
        if (prev) {
            prev.addEventListener('click', () => {
                index = index === 0 ? Math.max(items.length - 1, 0) : index - 1;
                update();
            });
        }
        if (next) {
            next.addEventListener('click', () => {
                index = items.length === 0 ? 0 : (index + 1) % items.length;
                update();
            });
        }
        if (items.length > 1) {
            setInterval(() => {
                index = items.length === 0 ? 0 : (index + 1) % items.length;
                update();
            }, 7000);
        }
        update();
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
})();
