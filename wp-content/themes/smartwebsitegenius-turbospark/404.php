<?php
/**
 * 404 template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $wp_query;

get_header();
?>
<section class="hero">
    <p class="hero__eyebrow"><?php esc_html_e( '404', 'smartwebsitegenius-turbospark' ); ?></p>
    <h1 class="hero__title"><?php esc_html_e( 'We could not find that spark.', 'smartwebsitegenius-turbospark' ); ?></h1>
    <p class="hero__subtitle"><?php esc_html_e( 'The page you are looking for may have been moved or renamed. Try searching below.', 'smartwebsitegenius-turbospark' ); ?></p>
</section>
<section class="section">
    <div class="site-container">
        <?php get_search_form(); ?>
        <p><a class="hero__cta" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to homepage', 'smartwebsitegenius-turbospark' ); ?></a></p>
    </div>
</section>
<?php
get_footer();
