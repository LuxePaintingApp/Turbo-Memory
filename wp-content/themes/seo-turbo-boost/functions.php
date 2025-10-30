<?php
/**
 * SEO Turbo Boost theme functions and definitions.
 *
 * @package SEO_Turbo_Boost
 */

if ( ! defined( 'SEO_TURBO_BOOST_VERSION' ) ) {
    define( 'SEO_TURBO_BOOST_VERSION', '1.0.0' );
}

if ( ! function_exists( 'seo_turbo_boost_setup' ) ) {
    function seo_turbo_boost_setup() {
        load_theme_textdomain( 'seo-turbo-boost', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo', [
            'height'      => 100,
            'width'       => 300,
            'flex-height' => true,
            'flex-width'  => true,
        ] );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ] );
        add_theme_support( 'align-wide' );
        add_theme_support( 'custom-spacing' );
        add_theme_support( 'custom-line-height' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'editor-styles' );
        add_editor_style( 'style.css' );
        register_nav_menus(
            [
                'primary' => __( 'Primary Menu', 'seo-turbo-boost' ),
                'footer'  => __( 'Footer Menu', 'seo-turbo-boost' ),
            ]
        );
    }
}
add_action( 'after_setup_theme', 'seo_turbo_boost_setup' );

function seo_turbo_boost_assets() {
    wp_enqueue_style( 'seo-turbo-boost', get_stylesheet_uri(), [], SEO_TURBO_BOOST_VERSION );
    wp_enqueue_script( 'seo-turbo-boost', get_template_directory_uri() . '/assets/js/theme.js', [], SEO_TURBO_BOOST_VERSION, true );
    wp_localize_script(
        'seo-turbo-boost',
        'seoTurboBoost',
        [
            'carouselAutoPlay' => apply_filters( 'seo_turbo_boost_carousel_autoplay', true ),
            'toastMessage'     => __( 'SEO Turbo Boost is activated – blazing speed engaged!', 'seo-turbo-boost' ),
        ]
    );
}
add_action( 'wp_enqueue_scripts', 'seo_turbo_boost_assets' );

function seo_turbo_boost_widgets_init() {
    register_sidebar(
        [
            'name'          => __( 'Sidebar', 'seo-turbo-boost' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets for blog sidebar.', 'seo-turbo-boost' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ]
    );
}
add_action( 'widgets_init', 'seo_turbo_boost_widgets_init' );

require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/inc/options.php';

function seo_turbo_boost_handle_form_submission( $redirect = null ) {
    $redirect = $redirect ? $redirect : wp_get_referer();
    if ( ! $redirect ) {
        $redirect = home_url( '/' );
    }

    wp_safe_redirect( add_query_arg( 'seo-turbo-confirm', '1', $redirect ) );
    exit;
}

function seo_turbo_boost_register_form_handlers() {
    $actions = [
        'seo_turbo_lead',
        'seo_turbo_services_lead',
        'seo_turbo_contact',
    ];

    foreach ( $actions as $action ) {
        add_action( 'admin_post_' . $action, 'seo_turbo_boost_handle_form_submission' );
        add_action( 'admin_post_nopriv_' . $action, 'seo_turbo_boost_handle_form_submission' );
    }
}
add_action( 'init', 'seo_turbo_boost_register_form_handlers' );
