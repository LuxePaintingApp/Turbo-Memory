(function () {
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
})();
