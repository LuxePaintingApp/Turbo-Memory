<?php
/**
 * Plugin Name: Header & Footer SWG
 * Description: Provides a sticky header and footer navigation with customizable colors, button styles, and call-to-action link.
 * Version: 1.0.0
 * Author: SmartWebsiteGenius
 * Text Domain: header-footer-swg
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Header_Footer_SWG {
    const OPTION_KEY = 'swg_header_footer_options';
    const OPTION_GROUP = 'swg_header_footer_settings';

    private static $defaults = [
        'header_background_color' => '#ff7a00',
        'footer_background_color' => '#ff7a00',
        'text_color'              => '#ffffff',
        'button_background_color' => '#ffffff',
        'button_text_color'       => '#ff7a00',
        'button_shape'            => 'curvy',
        'button_link'             => 'tel:+1234567890',
        'logo_text'               => 'SmartWebsiteGenius',
    ];

    public function __construct() {
        add_action( 'admin_init', [ $this, 'register_settings' ] );
        add_action( 'admin_menu', [ $this, 'add_settings_page' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );
        add_action( 'wp_body_open', [ $this, 'render_header' ] );
        add_action( 'wp_footer', [ $this, 'render_footer' ], 5 );
    }

    public function register_settings() {
        register_setting( self::OPTION_GROUP, self::OPTION_KEY, [
            'type'              => 'array',
            'sanitize_callback' => [ $this, 'sanitize_options' ],
            'default'           => self::$defaults,
        ] );

        add_settings_section(
            'swg_header_footer_section',
            __( 'Header & Footer Appearance', 'header-footer-swg' ),
            '__return_false',
            self::OPTION_GROUP
        );

        $fields = [
            'logo_text' => __( 'Logo Text', 'header-footer-swg' ),
            'header_background_color' => __( 'Header Background Color', 'header-footer-swg' ),
            'footer_background_color' => __( 'Footer Background Color', 'header-footer-swg' ),
            'text_color' => __( 'Text Color', 'header-footer-swg' ),
            'button_background_color' => __( 'Button Background Color', 'header-footer-swg' ),
            'button_text_color' => __( 'Button Text Color', 'header-footer-swg' ),
            'button_shape' => __( 'Button Shape', 'header-footer-swg' ),
            'button_link' => __( 'Call Now Button Link', 'header-footer-swg' ),
        ];

        foreach ( $fields as $field => $label ) {
            add_settings_field(
                $field,
                $label,
                [ $this, 'render_field' ],
                self::OPTION_GROUP,
                'swg_header_footer_section',
                [ 'field' => $field ]
            );
        }
    }

    public function add_settings_page() {
        add_options_page(
            __( 'Header & Footer SWG', 'header-footer-swg' ),
            __( 'Header & Footer SWG', 'header-footer-swg' ),
            'manage_options',
            'header-footer-swg',
            [ $this, 'render_settings_page' ]
        );
    }

    public function render_settings_page() {
        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        ?>
        <div class="wrap">
            <h1><?php esc_html_e( 'Header & Footer SWG Settings', 'header-footer-swg' ); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields( self::OPTION_GROUP );
                do_settings_sections( self::OPTION_GROUP );
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    public function render_field( $args ) {
        $options = $this->get_options();
        $field   = $args['field'];
        $value   = isset( $options[ $field ] ) ? $options[ $field ] : self::$defaults[ $field ];

        switch ( $field ) {
            case 'button_shape':
                ?>
                <select name="<?php echo esc_attr( self::OPTION_KEY . "[$field]" ); ?>">
                    <option value="curvy" <?php selected( $value, 'curvy' ); ?>><?php esc_html_e( 'Curvy', 'header-footer-swg' ); ?></option>
                    <option value="square" <?php selected( $value, 'square' ); ?>><?php esc_html_e( 'Square', 'header-footer-swg' ); ?></option>
                </select>
                <p class="description"><?php esc_html_e( 'Choose between a pill-shaped or square Call Now button.', 'header-footer-swg' ); ?></p>
                <?php
                break;
            case 'button_link':
                ?>
                <input type="text" class="regular-text" name="<?php echo esc_attr( self::OPTION_KEY . "[$field]" ); ?>" value="<?php echo esc_attr( $value ); ?>" />
                <p class="description"><?php esc_html_e( 'Add a URL or phone number (e.g., tel:+1234567890) for the Call Now button.', 'header-footer-swg' ); ?></p>
                <?php
                break;
            case 'logo_text':
                ?>
                <input type="text" class="regular-text" name="<?php echo esc_attr( self::OPTION_KEY . "[$field]" ); ?>" value="<?php echo esc_attr( $value ); ?>" />
                <p class="description"><?php esc_html_e( 'Text displayed as the logo on the left side of the header.', 'header-footer-swg' ); ?></p>
                <?php
                break;
            default:
                ?>
                <input type="text" class="regular-text" name="<?php echo esc_attr( self::OPTION_KEY . "[$field]" ); ?>" value="<?php echo esc_attr( $value ); ?>" />
                <?php
                break;
        }
    }

    public function sanitize_options( $input ) {
        $options = $this->get_options();

        foreach ( self::$defaults as $key => $default ) {
            if ( ! isset( $input[ $key ] ) ) {
                continue;
            }

            switch ( $key ) {
                case 'header_background_color':
                case 'footer_background_color':
                case 'text_color':
                case 'button_background_color':
                case 'button_text_color':
                    $options[ $key ] = sanitize_hex_color( $input[ $key ] );
                    if ( empty( $options[ $key ] ) ) {
                        $options[ $key ] = $default;
                    }
                    break;
                case 'button_link':
                    $sanitized = esc_url_raw( $input[ $key ], [ 'http', 'https', 'tel', 'mailto' ] );
                    $options[ $key ] = $sanitized ? $sanitized : $default;
                    break;
                case 'button_shape':
                    $options[ $key ] = in_array( $input[ $key ], [ 'curvy', 'square' ], true ) ? $input[ $key ] : $default;
                    break;
                case 'logo_text':
                    $options[ $key ] = sanitize_text_field( $input[ $key ] );
                    break;
                default:
                    $options[ $key ] = sanitize_text_field( $input[ $key ] );
            }
        }

        return $options;
    }

    public function enqueue_assets() {
        $plugin_url = plugin_dir_url( __FILE__ );

        wp_enqueue_style( 'header-footer-swg', $plugin_url . 'assets/css/header-footer-swg.css', [], '1.0.0' );

        $options = $this->get_options();
        $button_radius = 'curvy' === $options['button_shape'] ? '999px' : '4px';

        $custom_css = sprintf(
            ':root { --swg-header-bg: %1$s; --swg-footer-bg: %2$s; --swg-text-color: %3$s; --swg-button-bg: %4$s; --swg-button-color: %5$s; --swg-button-radius: %6$s; }',
            esc_html( $options['header_background_color'] ),
            esc_html( $options['footer_background_color'] ),
            esc_html( $options['text_color'] ),
            esc_html( $options['button_background_color'] ),
            esc_html( $options['button_text_color'] ),
            esc_html( $button_radius )
        );

        wp_add_inline_style( 'header-footer-swg', $custom_css );

        wp_enqueue_script( 'header-footer-swg', $plugin_url . 'assets/js/header-footer-swg.js', [], '1.0.0', true );
    }

    public function render_header() {
        $options = $this->get_options();
        ?>
        <header class="swg-header" role="banner">
            <div class="swg-header__inner">
                <div class="swg-logo" aria-label="<?php echo esc_attr( $options['logo_text'] ); ?>">
                    <?php echo esc_html( $options['logo_text'] ); ?>
                </div>
                <button class="swg-nav__toggle" aria-expanded="false" aria-controls="swg-header-nav">
                    <span class="swg-nav__toggle-line"></span>
                    <span class="swg-nav__toggle-line"></span>
                    <span class="swg-nav__toggle-line"></span>
                    <span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'header-footer-swg' ); ?></span>
                </button>
                <nav id="swg-header-nav" class="swg-nav" aria-label="Primary Navigation">
                    <ul class="swg-nav__list">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'header-footer-swg' ); ?></a></li>
                        <li class="swg-nav__cta"><a class="swg-button" href="<?php echo esc_url( $options['button_link'] ); ?>"><?php esc_html_e( 'Call Now', 'header-footer-swg' ); ?></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <?php
    }

    public function render_footer() {
        $options = $this->get_options();
        ?>
        <footer class="swg-footer" role="contentinfo">
            <div class="swg-footer__inner">
                <nav class="swg-footer-nav" aria-label="Footer Navigation">
                    <ul class="swg-footer-nav__list">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'header-footer-swg' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'header-footer-swg' ); ?></a></li>
                    </ul>
                </nav>
                <a class="swg-footer__cta swg-button" href="<?php echo esc_url( $options['button_link'] ); ?>"><?php esc_html_e( 'Call Now', 'header-footer-swg' ); ?></a>
            </div>
        </footer>
        <?php
    }

    private function get_options() {
        $options = get_option( self::OPTION_KEY, [] );
        return wp_parse_args( $options, self::$defaults );
    }

    public static function activate() {
        $options = get_option( self::OPTION_KEY, [] );

        if ( empty( $options ) ) {
            update_option( self::OPTION_KEY, self::$defaults );
        }
    }
}

new Header_Footer_SWG();

register_activation_hook( __FILE__, [ 'Header_Footer_SWG', 'activate' ] );
