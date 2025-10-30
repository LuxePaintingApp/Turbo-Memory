(function () {
    const navToggle = document.querySelector('.swg-nav-toggle');
    const navMenu = document.querySelector('.swg-nav-menu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            const isOpen = navMenu.getAttribute('data-open') === 'true';
            navMenu.setAttribute('data-open', !isOpen);
            navToggle.setAttribute('aria-expanded', String(!isOpen));
        });
    }

    const carousels = document.querySelectorAll('[data-swg-carousel]');
    carousels.forEach((carousel) => {
        const track = carousel.querySelector('.swg-carousel-track');
        const items = carousel.querySelectorAll('.swg-carousel-item');
        const dots = carousel.querySelectorAll('.swg-carousel-dot');
        let index = 0;
        const total = items.length;
        let autoplayInterval = null;

        const move = (nextIndex) => {
            index = (nextIndex + total) % total;
            track.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, dotIndex) => {
                dot.setAttribute('aria-current', dotIndex === index);
            });
        };

        dots.forEach((dot, dotIndex) => {
            dot.addEventListener('click', () => {
                move(dotIndex);
                if (autoplayInterval) {
                    clearInterval(autoplayInterval);
                }
            });
        });

        if (seoTurboBoost.carouselAutoPlay && total > 1) {
            autoplayInterval = setInterval(() => move(index + 1), 6000);
        }
    });

    const toast = document.querySelector('.swg-toast');
    if (toast && toast.getAttribute('data-visible') === 'pending') {
        setTimeout(() => {
            toast.setAttribute('data-visible', 'true');
            setTimeout(() => toast.setAttribute('data-visible', 'false'), 7000);
        }, 1600);
    }

    const tablists = document.querySelectorAll('[role="tablist"]');
    tablists.forEach((tablist) => {
        const buttons = tablist.querySelectorAll('[role="tab"]');
        const panels = document.querySelectorAll(`#${tablist.getAttribute('aria-controls')} [role="tabpanel"]`);

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                const target = document.getElementById(button.getAttribute('aria-controls'));
                buttons.forEach((btn) => btn.setAttribute('aria-selected', 'false'));
                button.setAttribute('aria-selected', 'true');
                panels.forEach((panel) => panel.hidden = true);
                if (target) {
                    target.hidden = false;
                }
            });
        });
    });
})();
