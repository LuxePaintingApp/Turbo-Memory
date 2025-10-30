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
<a class="screen-reader-text" href="#primary">Skip to content</a>
<header class="site-header">
    <div class="container">
        <div class="site-header__inner">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="site-title"><?php bloginfo( 'name' ); ?></span>
                </a>
            </div>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" data-nav-toggle>
                <span class="nav-toggle__icon" aria-hidden="true"></span>
                <span class="nav-toggle__label"><?php esc_html_e( 'Menu', 'solid-cement' ); ?></span>
            </button>
            <nav class="primary-navigation" id="primary-menu" aria-label="Primary Navigation" data-primary-nav>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => 'solidcement_default_menu',
                    'menu_class'     => 'menu-items',
                ]);
                ?>
            </nav>
        </div>
        <a class="btn sticky-book-btn" href="#quote"><?php esc_html_e( 'Book a Quote', 'solid-cement' ); ?></a>
    </div>
    <div class="site-header__overlay" data-nav-overlay></div>
</header>
<main id="primary">
