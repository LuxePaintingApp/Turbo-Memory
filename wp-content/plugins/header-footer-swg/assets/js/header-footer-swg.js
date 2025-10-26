(function () {
    const toggle = document.querySelector('.swg-nav__toggle');
    const nav = document.getElementById('swg-header-nav');

    if (!toggle || !nav) {
        return;
    }

    toggle.addEventListener('click', function () {
        const isOpen = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });
})();
