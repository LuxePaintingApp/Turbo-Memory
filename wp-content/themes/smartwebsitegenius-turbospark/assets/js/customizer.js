(function () {
    if (typeof wp === 'undefined' || !wp.customize) {
        return;
    }

    const fields = [
        'swg_turbospark_hero_eyebrow',
        'swg_turbospark_hero_title',
        'swg_turbospark_hero_subtitle',
        'swg_turbospark_hero_cta_label',
        'swg_turbospark_feature_one',
        'swg_turbospark_feature_two',
        'swg_turbospark_feature_three'
    ];

    function updateText(selector, value) {
        const el = document.querySelector(selector);
        if (el) {
            el.textContent = value;
        }
    }

    wp.customize('swg_turbospark_hero_cta_url', function (value) {
        value.bind(function (to) {
            const button = document.querySelector('.hero__cta');
            if (button) {
                button.setAttribute('href', to);
            }
        });
    });

    const map = {
        swg_turbospark_hero_eyebrow: '.hero__eyebrow',
        swg_turbospark_hero_title: '.hero__title',
        swg_turbospark_hero_subtitle: '.hero__subtitle',
        swg_turbospark_hero_cta_label: '.hero__cta',
        swg_turbospark_feature_one: '.section__grid .card:nth-child(1) p',
        swg_turbospark_feature_two: '.section__grid .card:nth-child(2) p',
        swg_turbospark_feature_three: '.section__grid .card:nth-child(3) p'
    };

    fields.forEach(function (setting) {
        wp.customize(setting, function (value) {
            value.bind(function (to) {
                updateText(map[setting], to);
            });
        });
    });
})();
