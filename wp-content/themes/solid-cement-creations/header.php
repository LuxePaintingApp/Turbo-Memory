<?php
/**
 * Theme header.
 *
 * @package SolidCement
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'solid-cement' ); ?></a>
<header class="site-header">
    <div class="container">
        <div class="site-header__inner">
            <a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="logo-mark" aria-hidden="true">SG</span>
                <span class="site-title"><?php bloginfo( 'name' ); ?></span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" data-nav-toggle>
                <span class="nav-toggle__icon" aria-hidden="true"></span>
                <span><?php esc_html_e( 'Menu', 'solid-cement' ); ?></span>
            </button>
            <nav class="primary-navigation" id="primary-menu" aria-label="<?php esc_attr_e( 'Primary Navigation', 'solid-cement' ); ?>" data-primary-nav>
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'primary',
                        'container'      => false,
                        'fallback_cb'    => '__return_false',
                        'menu_class'     => 'menu-items',
                    ]
                );
                ?>
            </nav>
        </div>
        <div class="site-header__cta">
            <a class="btn" href="#quote"><?php esc_html_e( 'Start a Project', 'solid-cement' ); ?></a>
            <a class="btn btn--light" href="#contact"><?php esc_html_e( 'View Services', 'solid-cement' ); ?></a>
        </div>
    </div>
    <div class="site-header__overlay" data-nav-overlay aria-hidden="true"></div>
</header>
<main id="primary">
