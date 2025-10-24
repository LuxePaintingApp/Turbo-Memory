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
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="site-title"><?php bloginfo( 'name' ); ?></span>
            </a>
        </div>
        <nav class="primary-navigation" aria-label="Primary Navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => '__return_false',
                'menu_class'     => 'menu-items',
            ]);
            ?>
        </nav>
        <a class="btn sticky-book-btn" href="#booking">Book a Quote</a>
    </div>
</header>
<main id="primary">
