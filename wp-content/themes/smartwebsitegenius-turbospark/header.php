<?php
/**
 * Theme header template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#site-content"><?php esc_html_e( 'Skip to content', 'smartwebsitegenius-turbospark' ); ?></a>
<header class="site-header">
    <div class="site-header__inner site-container">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
            endif;

            $smartwebsitegenius_turbospark_description = get_bloginfo( 'description', 'display' );
            if ( $smartwebsitegenius_turbospark_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo esc_html( $smartwebsitegenius_turbospark_description ); ?></p>
            <?php endif; ?>
        </div>
        <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
            <span class="menu-toggle__label"><?php esc_html_e( 'Menu', 'smartwebsitegenius-turbospark' ); ?></span>
        </button>
        <nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'smartwebsitegenius-turbospark' ); ?>">
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                ]
            );
            ?>
        </nav>
    </div>
</header>
<main id="site-content" class="site-content">
