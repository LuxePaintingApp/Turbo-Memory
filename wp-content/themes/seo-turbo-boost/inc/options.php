<?php
/**
 * Theme options for SEO Turbo Boost.
 *
 * @package SEO_Turbo_Boost
 */

function seo_turbo_boost_register_settings() {
    register_setting( 'seo_turbo_boost_options_group', 'seo_turbo_boost_options', 'seo_turbo_boost_sanitize_options' );

    add_settings_section(
        'seo_turbo_boost_general',
        __( 'SEO Enhancements', 'seo-turbo-boost' ),
        'seo_turbo_boost_section_description',
        'seo_turbo_boost_options'
    );

    add_settings_field(
        'enable_schema',
        __( 'Structured data schema', 'seo-turbo-boost' ),
        'seo_turbo_boost_render_checkbox',
        'seo_turbo_boost_options',
        'seo_turbo_boost_general',
        [
            'label_for'   => 'enable_schema',
            'description' => __( 'Output JSON-LD organization schema for stronger SERP visibility.', 'seo-turbo-boost' ),
        ]
    );

    add_settings_field(
        'enable_breadcrumbs',
        __( 'Breadcrumb navigation', 'seo-turbo-boost' ),
        'seo_turbo_boost_render_toggle',
        'seo_turbo_boost_options',
        'seo_turbo_boost_general',
        [
            'label_for'   => 'enable_breadcrumbs',
            'description' => __( 'Display accessible breadcrumbs below hero areas for enhanced UX.', 'seo-turbo-boost' ),
        ]
    );

    add_settings_field(
        'default_meta_description',
        __( 'Default meta description', 'seo-turbo-boost' ),
        'seo_turbo_boost_render_textarea',
        'seo_turbo_boost_options',
        'seo_turbo_boost_general',
        [
            'label_for'   => 'default_meta_description',
            'description' => __( 'Used when no SEO plugin overrides a description on singular pages.', 'seo-turbo-boost' ),
        ]
    );

    add_settings_field(
        'enable_preload',
        __( 'Performance preloading', 'seo-turbo-boost' ),
        'seo_turbo_boost_render_toggle',
        'seo_turbo_boost_options',
        'seo_turbo_boost_general',
        [
            'label_for'   => 'enable_preload',
            'description' => __( 'Preload theme styles and preconnect to Google Fonts for faster paint.', 'seo-turbo-boost' ),
        ]
    );

    add_settings_field(
        'schema_sameas',
        __( 'Schema sameAs profiles', 'seo-turbo-boost' ),
        'seo_turbo_boost_render_textarea',
        'seo_turbo_boost_options',
        'seo_turbo_boost_general',
        [
            'label_for'   => 'schema_sameas',
            'description' => __( 'Add one URL per line to boost brand entity SEO (e.g., LinkedIn, Crunchbase).', 'seo-turbo-boost' ),
        ]
    );
}
add_action( 'admin_init', 'seo_turbo_boost_register_settings' );

function seo_turbo_boost_section_description() {
    echo '<p>' . esc_html__( 'Tweak SEO Turbo Boost signature enhancements directly in WordPress without needing heavy plugins.', 'seo-turbo-boost' ) . '</p>';
}

function seo_turbo_boost_render_checkbox( $args ) {
    $options = get_option( 'seo_turbo_boost_options', [] );
    $checked = isset( $options[ $args['label_for'] ] ) ? (bool) $options[ $args['label_for'] ] : true;
    printf(
        '<label class="swg-checkbox"><input type="checkbox" id="%1$s" name="seo_turbo_boost_options[%1$s]" value="1" %2$s /> %3$s</label>',
        esc_attr( $args['label_for'] ),
        checked( $checked, true, false ),
        esc_html__( 'Enable', 'seo-turbo-boost' )
    );
    if ( ! empty( $args['description'] ) ) {
        printf( '<p class="description">%s</p>', esc_html( $args['description'] ) );
    }
}

function seo_turbo_boost_render_toggle( $args ) {
    $options = get_option( 'seo_turbo_boost_options', [] );
    $checked = isset( $options[ $args['label_for'] ] ) ? (bool) $options[ $args['label_for'] ] : true;
    printf(
        '<label class="swg-toggle"><input type="checkbox" id="%1$s" name="seo_turbo_boost_options[%1$s]" value="1" %2$s /><span class="swg-toggle-slider" aria-hidden="true"></span></label>',
        esc_attr( $args['label_for'] ),
        checked( $checked, true, false )
    );
    if ( ! empty( $args['description'] ) ) {
        printf( '<p class="description">%s</p>', esc_html( $args['description'] ) );
    }
}

function seo_turbo_boost_render_textarea( $args ) {
    $options = get_option( 'seo_turbo_boost_options', [] );
    $value   = isset( $options[ $args['label_for'] ] ) ? $options[ $args['label_for'] ] : '';
    printf(
        '<textarea id="%1$s" name="seo_turbo_boost_options[%1$s]" rows="3" class="large-text">%2$s</textarea>',
        esc_attr( $args['label_for'] ),
        esc_textarea( $value )
    );
    if ( ! empty( $args['description'] ) ) {
        printf( '<p class="description">%s</p>', esc_html( $args['description'] ) );
    }
}

function seo_turbo_boost_add_admin_menu() {
    add_theme_page(
        __( 'SEO Turbo Boost Settings', 'seo-turbo-boost' ),
        __( 'SEO Turbo Boost', 'seo-turbo-boost' ),
        'manage_options',
        'seo_turbo_boost_options',
        'seo_turbo_boost_render_options_page'
    );
}
add_action( 'admin_menu', 'seo_turbo_boost_add_admin_menu' );

function seo_turbo_boost_render_options_page() {
    echo '<div class="wrap swg-options">';
    echo '<style>.swg-toggle{position:relative;display:inline-flex;width:52px;height:28px;margin-right:8px}.swg-toggle input{opacity:0;width:0;height:0}.swg-toggle-slider{position:absolute;inset:0;border-radius:999px;background:rgba(15,37,64,0.26);transition:background .2s}.swg-toggle-slider:before{content:"";position:absolute;height:20px;width:20px;left:4px;top:4px;border-radius:50%;background:#fff;box-shadow:0 6px 16px rgba(15,37,64,0.18);transition:transform .2s}.swg-toggle input:checked+.swg-toggle-slider{background:linear-gradient(135deg,#ff6b1a,#ffc929)}.swg-toggle input:checked+.swg-toggle-slider:before{transform:translateX(24px)}</style>';
    echo '<h1>' . esc_html__( 'SEO Turbo Boost Settings', 'seo-turbo-boost' ) . '</h1>';
    echo '<form action="options.php" method="post">';
    settings_fields( 'seo_turbo_boost_options_group' );
    do_settings_sections( 'seo_turbo_boost_options' );
    submit_button();
    echo '</form>';
    echo '</div>';
}

function seo_turbo_boost_sanitize_options( $input ) {
    $output = [];
    $fields = [ 'enable_schema', 'enable_breadcrumbs', 'default_meta_description', 'enable_preload', 'schema_sameas' ];

    foreach ( $fields as $field ) {
        switch ( $field ) {
            case 'default_meta_description':
            case 'schema_sameas':
                $output[ $field ] = isset( $input[ $field ] ) ? wp_kses_post( $input[ $field ] ) : '';
                break;
            default:
                $output[ $field ] = isset( $input[ $field ] ) ? (int) (bool) $input[ $field ] : 0;
                break;
        }
    }

    return $output;
}
