<?php
/**
 * Footer template.
 *
 * @package SEO_Turbo_Boost
 */
?>
</main>
<footer class="swg-footer" role="contentinfo">
    <div class="swg-container">
        <div>
            <h3><?php esc_html_e( 'SmartWebsiteGenius', 'seo-turbo-boost' ); ?></h3>
            <p><?php esc_html_e( 'SEO Turbo Boost is crafted for lightning-fast load times, clean markup, and unstoppable SERP visibility.', 'seo-turbo-boost' ); ?></p>
            <div class="swg-chip-group">
                <span class="swg-chip">Core Web Vitals Ready</span>
                <span class="swg-chip">Elementor Friendly</span>
                <span class="swg-chip">Schema Enhanced</span>
            </div>
        </div>
        <div>
            <h4><?php esc_html_e( 'Quick Links', 'seo-turbo-boost' ); ?></h4>
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'footer',
                    'menu_class'     => 'swg-footer-menu',
                    'container'      => false,
                ]
            );
            ?>
        </div>
        <div>
            <h4><?php esc_html_e( 'Stay in the Loop', 'seo-turbo-boost' ); ?></h4>
            <form class="swg-form" action="#" method="post">
                <label>
                    <?php esc_html_e( 'Email Address', 'seo-turbo-boost' ); ?>
                    <input type="email" name="newsletter-email" placeholder="hello@smartwebsitegenius.com" required />
                </label>
                <button type="submit" class="swg-btn"><?php esc_html_e( 'Join the Velocity List', 'seo-turbo-boost' ); ?></button>
            </form>
        </div>
    </div>
    <div class="swg-container swg-footer-bottom">
        <span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> SmartWebsiteGenius. <?php esc_html_e( 'All rights reserved.', 'seo-turbo-boost' ); ?></span>
        <span><?php esc_html_e( 'C SmartWebsiteGenius With ChatGPT-5 Plus', 'seo-turbo-boost' ); ?></span>
        <div class="swg-footer-social">
            <a href="https://www.linkedin.com" aria-label="LinkedIn">LinkedIn</a>
            <a href="https://twitter.com" aria-label="X">X</a>
            <a href="https://www.youtube.com" aria-label="YouTube">YouTube</a>
        </div>
    </div>
</footer>
<?php $toast_visible = isset( $_GET['seo-turbo-confirm'] ); ?>
<div class="swg-toast" role="status" aria-live="polite" data-visible="<?php echo $toast_visible ? 'pending' : 'false'; ?>">
    <span aria-hidden="true">🚀</span>
    <span><?php esc_html_e( 'SEO Turbo Boost activated. Ready for top rankings!', 'seo-turbo-boost' ); ?></span>
</div>
<?php wp_footer(); ?>
</body>
</html>
