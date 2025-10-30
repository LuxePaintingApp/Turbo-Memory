<?php
/**
 * The header for our theme.
 *
 * @package SEO_Turbo_Boost
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="swg-navbar" role="banner">
    <div class="swg-container">
        <div class="swg-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="swg-brand" rel="home">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    bloginfo( 'name' );
                }
                ?>
            </a>
            <small><?php bloginfo( 'description' ); ?></small>
        </div>
        <nav class="swg-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'seo-turbo-boost' ); ?>">
            <button class="swg-nav-toggle" aria-expanded="false" aria-controls="primary-menu">&#9776;</button>
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'swg-nav-menu',
                    'fallback_cb'    => 'wp_page_menu',
                ]
            );
            ?>
        </nav>
    </div>
</header>
<main id="content" class="swg-main" role="main">
