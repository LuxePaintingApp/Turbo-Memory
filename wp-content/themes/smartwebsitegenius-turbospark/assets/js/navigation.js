(function () {
    const nav = document.querySelector('.primary-navigation');
    const toggle = document.querySelector('.menu-toggle');

    if (!nav || !toggle) {
        return;
    }

    toggle.addEventListener('click', () => {
        nav.classList.toggle('is-open');
        const isOpen = nav.classList.contains('is-open');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });
})();
