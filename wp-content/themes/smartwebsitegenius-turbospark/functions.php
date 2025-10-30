<?php
/**
 * Theme functions and definitions
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

define( 'SWG_TURBOSPARK_VERSION', '1.0.0' );

define( 'SWG_TURBOSPARK_DIR', trailingslashit( get_template_directory() ) );
define( 'SWG_TURBOSPARK_URI', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'smartwebsitegenius_turbospark_setup' ) ) {
    /**
     * Setup theme defaults.
     */
    function smartwebsitegenius_turbospark_setup() {
        load_theme_textdomain( 'smartwebsitegenius-turbospark', SWG_TURBOSPARK_DIR . 'languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo', [
            'height'      => 80,
            'width'       => 80,
            'flex-width'  => true,
            'flex-height' => true,
        ] );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_editor_style( 'editor-style.css' );
        add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );

        register_nav_menus(
            [
                'primary' => __( 'Primary Menu', 'smartwebsitegenius-turbospark' ),
                'footer'  => __( 'Footer Menu', 'smartwebsitegenius-turbospark' ),
            ]
        );
    }
}
add_action( 'after_setup_theme', 'smartwebsitegenius_turbospark_setup' );

if ( ! function_exists( 'smartwebsitegenius_turbospark_enqueue_assets' ) ) {
    /**
     * Enqueue scripts and styles.
     */
    function smartwebsitegenius_turbospark_enqueue_assets() {
        wp_enqueue_style( 'smartwebsitegenius-turbospark-style', get_stylesheet_uri(), [], SWG_TURBOSPARK_VERSION );

        wp_enqueue_script( 'smartwebsitegenius-navigation', SWG_TURBOSPARK_URI . 'assets/js/navigation.js', [], SWG_TURBOSPARK_VERSION, true );
    }
}
add_action( 'wp_enqueue_scripts', 'smartwebsitegenius_turbospark_enqueue_assets' );

/**
 * Output inline script for removing no-js class.
 */
function smartwebsitegenius_turbospark_nojs_script() {
    echo '<script>document.documentElement.classList.remove("no-js");</script>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'smartwebsitegenius_turbospark_nojs_script', 0 );

/**
 * Register widget area.
 */
function smartwebsitegenius_turbospark_widgets_init() {
    register_sidebar(
        [
            'name'          => __( 'Footer Widgets', 'smartwebsitegenius-turbospark' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets added here appear in the footer area.', 'smartwebsitegenius-turbospark' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
}
add_action( 'widgets_init', 'smartwebsitegenius_turbospark_widgets_init' );

/**
 * Require theme files.
 */
require_once SWG_TURBOSPARK_DIR . 'inc/seo-settings.php';
require_once SWG_TURBOSPARK_DIR . 'inc/customizer.php';
