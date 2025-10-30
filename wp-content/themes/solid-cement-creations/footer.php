<?php
/**
 * Theme footer.
 *
 * @package SolidCement
 */
?>
</main>
<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) : ?>
    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="site-footer__grid">
                <div>
                    <h4><?php esc_html_e( 'Visit Us', 'solid-cement' ); ?></h4>
                    <p>
                        Solid Cement Creations<br />
                        12 Artisan Way<br />
                        Brisbane, QLD 4000
                    </p>
                    <p><strong><?php esc_html_e( 'Hours', 'solid-cement' ); ?></strong><br />
                        <?php esc_html_e( 'Mon – Fri: 8am – 5pm', 'solid-cement' ); ?><br />
                        <?php esc_html_e( 'Sat: 9am – 2pm', 'solid-cement' ); ?><br />
                        <?php esc_html_e( 'Sun: By appointment', 'solid-cement' ); ?>
                    </p>
                </div>
                <div>
                    <h4><?php esc_html_e( 'Stay Connected', 'solid-cement' ); ?></h4>
                    <ul class="footer-socials">
                        <li><a href="https://instagram.com" target="_blank" rel="noopener">Instagram</a></li>
                        <li><a href="https://facebook.com" target="_blank" rel="noopener">Facebook</a></li>
                        <li><a href="https://pinterest.com" target="_blank" rel="noopener">Pinterest</a></li>
                        <li><a href="https://www.youtube.com" target="_blank" rel="noopener">YouTube</a></li>
                    </ul>
                </div>
                <div>
                    <h4><?php esc_html_e( 'Feedback', 'solid-cement' ); ?></h4>
                    <form class="feedback-form" method="post" action="#">
                        <div class="form-control">
                            <label for="footer-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                            <input type="text" id="footer-name" name="footer_name" required />
                        </div>
                        <div class="form-control">
                            <label for="footer-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                            <input type="email" id="footer-email" name="footer_email" />
                        </div>
                        <div class="form-control">
                            <label for="footer-message"><?php esc_html_e( 'Share Your Thoughts', 'solid-cement' ); ?></label>
                            <textarea id="footer-message" name="footer_message" required></textarea>
                        </div>
                        <div class="form-control form-control--inline">
                            <label class="toggle">
                                <input type="checkbox" name="footer_updates" value="1" />
                                <span><?php esc_html_e( 'Email me seasonal garden statue inspiration.', 'solid-cement' ); ?></span>
                            </label>
                        </div>
                        <button type="submit" class="btn"><?php esc_html_e( 'Send Feedback', 'solid-cement' ); ?></button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo esc_html( current_time( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'solid-cement' ); ?></p>
                <p class="footer-author">Copyright SmartWebsiteGenius With ChatGPT-5 Plus All Rights Reserved</p>
            </div>
        </div>
    </footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
