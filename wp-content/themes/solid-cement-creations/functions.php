<?php
/**
 * Theme bootstrap file.
 *
 * @package SolidCement
 */

define( 'SOLIDCEMENT_VERSION', '2.0.0' );

require_once __DIR__ . '/inc/custom-post-types.php';
require_once __DIR__ . '/inc/template-tags.php';
require_once __DIR__ . '/inc/elementor-widgets.php';

if ( ! function_exists( 'solidcement_setup' ) ) {
    /**
     * Setup theme defaults.
     */
    function solidcement_setup() {
        load_theme_textdomain( 'solid-cement', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_editor_style( 'assets/css/theme.css' );

        register_nav_menus(
            [
                'primary' => __( 'Primary Menu', 'solid-cement' ),
                'footer'  => __( 'Footer Menu', 'solid-cement' ),
            ]
        );
    }
}
add_action( 'after_setup_theme', 'solidcement_setup' );

/**
 * Enqueue styles and scripts.
 */
function solidcement_scripts() {
    wp_enqueue_style( 'solidcement-style', get_stylesheet_uri(), [], SOLIDCEMENT_VERSION );
    wp_enqueue_style( 'solidcement-theme', get_template_directory_uri() . '/assets/css/theme.css', [], SOLIDCEMENT_VERSION );
    wp_enqueue_script( 'solidcement-theme', get_template_directory_uri() . '/assets/js/theme.js', [], SOLIDCEMENT_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'solidcement_scripts' );

/**
 * Register Elementor locations.
 */
function solidcement_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'solidcement_register_elementor_locations' );

/**
 * Register Elementor category.
 */
function solidcement_register_elementor_category( $elements_manager ) {
    $elements_manager->add_category(
        'solidcement',
        [
            'title' => __( 'Solid Cement Creations', 'solid-cement' ),
            'icon'  => 'fa fa-diamond',
        ]
    );
}
add_action( 'elementor/elements/categories_registered', 'solidcement_register_elementor_category' );

/**
 * Register Elementor widgets.
 */
function solidcement_register_elementor_widgets( $widgets_manager ) {
    if ( class_exists( '\\SolidCement\\Elementor_CTA_Widget' ) ) {
        $widgets_manager->register( new \SolidCement\Elementor_CTA_Widget() );
    }
}
add_action( 'elementor/widgets/register', 'solidcement_register_elementor_widgets' );

/**
 * Register widget area for footer feedback if needed.
 */
function solidcement_widgets_init() {
    register_sidebar(
        [
            'name'          => __( 'Footer Feedback', 'solid-cement' ),
            'id'            => 'footer-feedback',
            'description'   => __( 'Widgets added here appear in the footer feedback area.', 'solid-cement' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
}
add_action( 'widgets_init', 'solidcement_widgets_init' );
