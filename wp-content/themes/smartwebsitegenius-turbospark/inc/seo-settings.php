<?php
/**
 * SEO settings for TurboSpark.
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

/**
 * Register settings page.
 */
function swg_turbospark_register_seo_menu() {
    add_theme_page(
        __( 'TurboSpark SEO', 'smartwebsitegenius-turbospark' ),
        __( 'TurboSpark SEO', 'smartwebsitegenius-turbospark' ),
        'manage_options',
        'swg-turbospark-seo',
        'swg_turbospark_render_seo_page'
    );
}
add_action( 'admin_menu', 'swg_turbospark_register_seo_menu' );

/**
 * Register settings fields.
 */
function swg_turbospark_register_seo_settings() {
    register_setting( 'swg_turbospark_seo', 'swg_turbospark_seo_options', 'swg_turbospark_sanitize_seo_options' );

    add_settings_section(
        'swg_turbospark_seo_section',
        __( 'Global SEO Defaults', 'smartwebsitegenius-turbospark' ),
        '__return_false',
        'swg-turbospark-seo'
    );

    $fields = [
        'meta_description' => [
            'label' => __( 'Meta Description', 'smartwebsitegenius-turbospark' ),
            'type'  => 'textarea',
        ],
        'meta_keywords'    => [
            'label' => __( 'Meta Keywords', 'smartwebsitegenius-turbospark' ),
            'type'  => 'text',
        ],
        'meta_author'      => [
            'label' => __( 'Default Author', 'smartwebsitegenius-turbospark' ),
            'type'  => 'text',
        ],
        'canonical_url'    => [
            'label' => __( 'Canonical Base URL', 'smartwebsitegenius-turbospark' ),
            'type'  => 'url',
        ],
        'open_graph_image' => [
            'label' => __( 'Open Graph Image URL', 'smartwebsitegenius-turbospark' ),
            'type'  => 'url',
        ],
        'twitter_handle'   => [
            'label' => __( 'Twitter Handle', 'smartwebsitegenius-turbospark' ),
            'type'  => 'text',
        ],
        'enable_schema'    => [
            'label' => __( 'Enable Organization Schema', 'smartwebsitegenius-turbospark' ),
            'type'  => 'checkbox',
        ],
        'organization_name' => [
            'label' => __( 'Organization Name', 'smartwebsitegenius-turbospark' ),
            'type'  => 'text',
        ],
        'organization_url' => [
            'label' => __( 'Organization URL', 'smartwebsitegenius-turbospark' ),
            'type'  => 'url',
        ],
    ];

    foreach ( $fields as $field_id => $field ) {
        add_settings_field(
            $field_id,
            $field['label'],
            'swg_turbospark_render_field',
            'swg-turbospark-seo',
            'swg_turbospark_seo_section',
            [
                'id'    => $field_id,
                'type'  => $field['type'],
                'label' => $field['label'],
            ]
        );
    }
}
add_action( 'admin_init', 'swg_turbospark_register_seo_settings' );

/**
 * Sanitize options.
 *
 * @param array $input Raw input.
 * @return array
 */
function swg_turbospark_sanitize_seo_options( $input ) {
    $output = [];

    $output['meta_description'] = isset( $input['meta_description'] ) ? sanitize_textarea_field( $input['meta_description'] ) : '';
    $output['meta_keywords']    = isset( $input['meta_keywords'] ) ? sanitize_text_field( $input['meta_keywords'] ) : '';
    $output['meta_author']      = isset( $input['meta_author'] ) ? sanitize_text_field( $input['meta_author'] ) : '';
    $output['canonical_url']    = isset( $input['canonical_url'] ) ? esc_url_raw( $input['canonical_url'] ) : '';
    $output['open_graph_image'] = isset( $input['open_graph_image'] ) ? esc_url_raw( $input['open_graph_image'] ) : '';
    $output['twitter_handle']   = isset( $input['twitter_handle'] ) ? sanitize_text_field( $input['twitter_handle'] ) : '';
    $output['enable_schema']    = isset( $input['enable_schema'] ) ? (bool) $input['enable_schema'] : false;
    $output['organization_name'] = isset( $input['organization_name'] ) ? sanitize_text_field( $input['organization_name'] ) : '';
    $output['organization_url'] = isset( $input['organization_url'] ) ? esc_url_raw( $input['organization_url'] ) : '';

    return $output;
}

/**
 * Render field callback.
 *
 * @param array $args Field args.
 */
function swg_turbospark_render_field( $args ) {
    $options = get_option( 'swg_turbospark_seo_options', [] );
    $value   = isset( $options[ $args['id'] ] ) ? $options[ $args['id'] ] : '';

    switch ( $args['type'] ) {
        case 'textarea':
            printf( '<textarea name="swg_turbospark_seo_options[%1$s]" rows="4" cols="50" class="large-text">%2$s</textarea>', esc_attr( $args['id'] ), esc_textarea( $value ) );
            break;
        case 'checkbox':
            printf( '<label><input type="checkbox" name="swg_turbospark_seo_options[%1$s]" value="1" %2$s /> %3$s</label>', esc_attr( $args['id'] ), checked( $value, true, false ), esc_html__( 'Enable', 'smartwebsitegenius-turbospark' ) );
            break;
        default:
            printf( '<input type="%1$s" name="swg_turbospark_seo_options[%2$s]" value="%3$s" class="regular-text" />', esc_attr( $args['type'] ), esc_attr( $args['id'] ), esc_attr( $value ) );
            break;
    }
}

/**
 * Render settings page markup.
 */
function swg_turbospark_render_seo_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'TurboSpark SEO Controls', 'smartwebsitegenius-turbospark' ); ?></h1>
        <p><?php esc_html_e( 'Set default metadata, open graph, and schema markup that keeps your site optimized even before plugins load.', 'smartwebsitegenius-turbospark' ); ?></p>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'swg_turbospark_seo' );
            do_settings_sections( 'swg-turbospark-seo' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/**
 * Inject metadata into <head>.
 */
function swg_turbospark_output_meta_tags() {
    if ( is_admin() ) {
        return;
    }

    $options = get_option( 'swg_turbospark_seo_options', [] );
    $description = ! empty( $options['meta_description'] ) ? $options['meta_description'] : get_bloginfo( 'description' );
    $keywords    = isset( $options['meta_keywords'] ) ? $options['meta_keywords'] : '';
    $author      = isset( $options['meta_author'] ) ? $options['meta_author'] : '';
    $canonical   = isset( $options['canonical_url'] ) ? trailingslashit( $options['canonical_url'] ) : '';
    $og_image    = isset( $options['open_graph_image'] ) ? $options['open_graph_image'] : '';
    $twitter     = isset( $options['twitter_handle'] ) ? $options['twitter_handle'] : '';

    if ( $description ) {
        echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n"; // phpcs:ignore
    }

    if ( $keywords ) {
        echo '<meta name="keywords" content="' . esc_attr( $keywords ) . '" />' . "\n"; // phpcs:ignore
    }

    if ( $author ) {
        echo '<meta name="author" content="' . esc_attr( $author ) . '" />' . "\n"; // phpcs:ignore
    }

    $current_url = '';
    if ( is_singular() ) {
        $current_url = get_permalink();
    } else {
        global $wp;
        $path        = isset( $wp->request ) ? $wp->request : '';
        $current_url = home_url( $path ? '/' . ltrim( $path, '/' ) : '/' );
    }

    if ( $canonical ) {
        $canonical_url = $canonical . ltrim( wp_parse_url( $current_url, PHP_URL_PATH ), '/' );
        echo '<link rel="canonical" href="' . esc_url( $canonical_url ) . '" />' . "\n"; // phpcs:ignore
    } elseif ( $current_url ) {
        echo '<link rel="canonical" href="' . esc_url( $current_url ) . '" />' . "\n"; // phpcs:ignore
    }

    echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n"; // phpcs:ignore
    if ( $description ) {
        echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n"; // phpcs:ignore
    }
    echo '<meta property="og:title" content="' . esc_attr( wp_get_document_title() ) . '" />' . "\n"; // phpcs:ignore
    echo '<meta property="og:url" content="' . esc_url( home_url( add_query_arg( [], $GLOBALS['wp']->request ) ) ) . '" />' . "\n"; // phpcs:ignore

    if ( $og_image ) {
        echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />' . "\n"; // phpcs:ignore
    }

    if ( $twitter ) {
        echo '<meta name="twitter:card" content="summary_large_image" />' . "\n"; // phpcs:ignore
        echo '<meta name="twitter:site" content="' . esc_attr( $twitter ) . '" />' . "\n"; // phpcs:ignore
    }

    if ( ! empty( $options['enable_schema'] ) && ! empty( $options['organization_name'] ) ) {
        $schema = [
            '@context'    => 'https://schema.org',
            '@type'       => 'Organization',
            'name'        => $options['organization_name'],
            'url'         => ! empty( $options['organization_url'] ) ? $options['organization_url'] : home_url(),
            'logo'        => get_theme_mod( 'custom_logo' ) ? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) : '',
            'sameAs'      => array_filter( [ $twitter ] ),
        ];

        echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n"; // phpcs:ignore
    }
}
add_action( 'wp_head', 'swg_turbospark_output_meta_tags', 5 );
