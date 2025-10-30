<?php
/**
 * Helper functions for SEO Turbo Boost theme.
 *
 * @package SEO_Turbo_Boost
 */

function seo_turbo_boost_breadcrumbs() {
    if ( is_front_page() ) {
        return;
    }

    $crumbs = [
        sprintf( '<a href="%1$s">%2$s</a>', esc_url( home_url( '/' ) ), esc_html__( 'Home', 'seo-turbo-boost' ) ),
    ];

    if ( is_home() && ! is_front_page() ) {
        $crumbs[] = esc_html__( 'Blog', 'seo-turbo-boost' );
    } elseif ( is_singular() ) {
        $post_type = get_post_type_object( get_post_type() );
        if ( $post_type && 'page' !== $post_type->name ) {
            $crumbs[] = esc_html( $post_type->labels->singular_name );
        }
        $crumbs[] = esc_html( get_the_title() );
    } elseif ( is_category() ) {
        $crumbs[] = esc_html( single_cat_title( '', false ) );
    } elseif ( is_search() ) {
        $crumbs[] = sprintf( esc_html__( 'Search results for "%s"', 'seo-turbo-boost' ), esc_html( get_search_query() ) );
    }

    echo '<nav class="swg-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumbs', 'seo-turbo-boost' ) . '">';
    foreach ( $crumbs as $crumb ) {
        echo '<span>' . wp_kses_post( $crumb ) . '</span>';
    }
    echo '</nav>';
}

function seo_turbo_boost_maybe_render_breadcrumbs() {
    $options = get_option( 'seo_turbo_boost_options', [] );
    $enabled = isset( $options['enable_breadcrumbs'] ) ? (bool) $options['enable_breadcrumbs'] : true;

    if ( $enabled ) {
        seo_turbo_boost_breadcrumbs();
    }
}

function seo_turbo_boost_render_schema() {
    $options = get_option( 'seo_turbo_boost_options', [] );
    $schema  = isset( $options['enable_schema'] ) ? (bool) $options['enable_schema'] : true;

    if ( ! $schema ) {
        return;
    }

    $organization = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        'name'        => get_bloginfo( 'name' ),
        'url'         => home_url( '/' ),
        'logo'        => get_theme_mod( 'custom_logo' ) ? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) : '',
        'description' => wp_strip_all_tags( get_bloginfo( 'description' ) ),
    ];

    if ( ! empty( $options['schema_sameas'] ) ) {
        $organization['sameAs'] = array_map( 'esc_url_raw', array_map( 'trim', explode( PHP_EOL, $options['schema_sameas'] ) ) );
    }

    echo '<script type="application/ld+json">' . wp_json_encode( $organization, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>';
}
add_action( 'wp_head', 'seo_turbo_boost_render_schema', 30 );

function seo_turbo_boost_meta_description() {
    $options = get_option( 'seo_turbo_boost_options', [] );
    if ( empty( $options['default_meta_description'] ) || ! is_singular() ) {
        return;
    }

    if ( ! has_filter( 'wpseo_metadesc' ) ) {
        printf( '<meta name="description" content="%s" />', esc_attr( $options['default_meta_description'] ) );
    }
}
add_action( 'wp_head', 'seo_turbo_boost_meta_description', 18 );

function seo_turbo_boost_body_classes( $classes ) {
    $options   = get_option( 'seo_turbo_boost_options', [] );
    $preload   = isset( $options['enable_preload'] ) ? (bool) $options['enable_preload'] : true;
    $classes[] = 'seo-turbo-boost';

    if ( $preload ) {
        $classes[] = 'seo-turbo-boost-preload';
    }

    return $classes;
}
add_filter( 'body_class', 'seo_turbo_boost_body_classes' );

function seo_turbo_boost_add_preloads() {
    $options = get_option( 'seo_turbo_boost_options', [] );
    if ( empty( $options['enable_preload'] ) ) {
        return;
    }

    printf( '<link rel="preconnect" href="%s" crossorigin>', esc_url( 'https://fonts.gstatic.com' ) );
    printf( '<link rel="preload" href="%s" as="style">', esc_url( get_stylesheet_uri() ) );
}
add_action( 'wp_head', 'seo_turbo_boost_add_preloads', 8 );

function seo_turbo_boost_register_rest_fields() {
    register_rest_field(
        'post',
        'seo_turbo_summary',
        [
            'get_callback' => function( $object ) {
                $content = get_post_field( 'post_content', $object['id'] );
                $content = wp_strip_all_tags( $content );
                return wp_trim_words( $content, 30 );
            },
            'schema'       => null,
        ]
    );
}
add_action( 'rest_api_init', 'seo_turbo_boost_register_rest_fields' );
