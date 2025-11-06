<?php
/**
 * Theme footer.
 *
 * @package SolidCement
 */
?>
</main>
<footer class="site-footer" id="contact">
    <div class="container">
        <div>
            <h2><?php esc_html_e( 'Let’s create something magical.', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Handcrafted gnomes, fairy gardens, and bespoke cement artistry for luxurious outdoor spaces.', 'solid-cement' ); ?></p>
        </div>
        <div class="footer-nav">
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => '__return_false',
                    'menu_class'     => 'menu-items',
                ]
            );
            ?>
        </div>
        <div class="footer-meta">
            <p>&copy; <?php echo esc_html( current_time( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> · <a href="mailto:studio@solidcementcreations.com">studio@solidcementcreations.com</a></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
