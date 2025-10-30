<?php
/**
 * Customizer additions for TurboSpark.
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

/**
 * Register customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Manager instance.
 */
function swg_turbospark_customize_register( $wp_customize ) {
    $wp_customize->add_section(
        'swg_turbospark_home_hero',
        [
            'title'       => __( 'TurboSpark Hero', 'smartwebsitegenius-turbospark' ),
            'description' => __( 'Control the hero headline and CTA for the homepage.', 'smartwebsitegenius-turbospark' ),
            'priority'    => 25,
        ]
    );

    $fields = [
        'swg_turbospark_hero_eyebrow' => [
            'default' => __( 'SmartWebsiteGenius Presents', 'smartwebsitegenius-turbospark' ),
            'label'   => __( 'Eyebrow', 'smartwebsitegenius-turbospark' ),
        ],
        'swg_turbospark_hero_title'   => [
            'default' => __( 'Launch blazing-fast experiences that search engines love.', 'smartwebsitegenius-turbospark' ),
            'label'   => __( 'Title', 'smartwebsitegenius-turbospark' ),
        ],
        'swg_turbospark_hero_subtitle' => [
            'default' => __( 'TurboSpark by SmartWebsiteGenius is the 2025-ready WordPress theme that keeps Core Web Vitals sparkling, pages ultra-responsive, and every section Elementor friendly.', 'smartwebsitegenius-turbospark' ),
            'label'   => __( 'Subtitle', 'smartwebsitegenius-turbospark' ),
            'type'    => 'textarea',
        ],
        'swg_turbospark_hero_cta_label' => [
            'default' => __( 'Build with TurboSpark', 'smartwebsitegenius-turbospark' ),
            'label'   => __( 'CTA Label', 'smartwebsitegenius-turbospark' ),
        ],
        'swg_turbospark_hero_cta_url' => [
            'default' => '#services',
            'label'   => __( 'CTA URL', 'smartwebsitegenius-turbospark' ),
        ],
        'swg_turbospark_feature_one' => [
            'default' => __( 'SEO-rich controls including schema, open graph, and instant indexing helpers.', 'smartwebsitegenius-turbospark' ),
            'label'   => __( 'Feature #1', 'smartwebsitegenius-turbospark' ),
        ],
        'swg_turbospark_feature_two' => [
            'default' => __( 'Featherweight CSS and zero jQuery for peak performance.', 'smartwebsitegenius-turbospark' ),
            'label'   => __( 'Feature #2', 'smartwebsitegenius-turbospark' ),
        ],
        'swg_turbospark_feature_three' => [
            'default' => __( 'Elementor, child-theme, and Website Skins compatible by design.', 'smartwebsitegenius-turbospark' ),
            'label'   => __( 'Feature #3', 'smartwebsitegenius-turbospark' ),
        ],
    ];

    foreach ( $fields as $setting_id => $field ) {
        $wp_customize->add_setting(
            $setting_id,
            [
                'default'           => $field['default'],
                'sanitize_callback' => 'wp_kses_post',
                'transport'         => 'postMessage',
            ]
        );

        $control_args = [
            'label'    => $field['label'],
            'section'  => 'swg_turbospark_home_hero',
            'settings' => $setting_id,
        ];

        if ( isset( $field['type'] ) && 'textarea' === $field['type'] ) {
            $control_args['type'] = 'textarea';
        }

        $wp_customize->add_control( $setting_id, $control_args );
    }
}
add_action( 'customize_register', 'swg_turbospark_customize_register' );

/**
 * Enqueue customizer preview script.
 */
function swg_turbospark_customize_preview_js() {
    wp_enqueue_script( 'swg-turbospark-customizer', SWG_TURBOSPARK_URI . 'assets/js/customizer.js', [ 'customize-preview' ], SWG_TURBOSPARK_VERSION, true );
}
add_action( 'customize_preview_init', 'swg_turbospark_customize_preview_js' );
