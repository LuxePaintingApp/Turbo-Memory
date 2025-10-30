<?php
/**
 * Theme footer template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */
?>
    </main>
    <footer class="site-footer">
        <div class="site-container">
            <div class="footer__widgets">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php else : ?>
                    <section class="widget">
                        <h2 class="widget-title"><?php esc_html_e( 'About TurboSpark', 'smartwebsitegenius-turbospark' ); ?></h2>
                        <p><?php esc_html_e( 'TurboSpark keeps your WordPress site lightweight, lightning-fast, and fully optimized for search engines out of the box.', 'smartwebsitegenius-turbospark' ); ?></p>
                    </section>
                    <section class="widget">
                        <h2 class="widget-title"><?php esc_html_e( 'Contact', 'smartwebsitegenius-turbospark' ); ?></h2>
                        <p><a href="mailto:hello@smartwebsitegenius.com">hello@smartwebsitegenius.com</a></p>
                    </section>
                    <section class="widget">
                        <h2 class="widget-title"><?php esc_html_e( 'Quick Links', 'smartwebsitegenius-turbospark' ); ?></h2>
                        <?php
                        wp_nav_menu(
                            [
                                'theme_location' => 'footer',
                                'container'      => false,
                                'menu_class'     => 'footer-menu',
                                'fallback_cb'    => false,
                            ]
                        );
                        ?>
                    </section>
                <?php endif; ?>
            </div>
            <div class="footer__bottom">
                <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> · <?php esc_html_e( 'All rights reserved.', 'smartwebsitegenius-turbospark' ); ?></p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
