<?php
/**
 * Template Name: Services
 * Description: High-converting services page for TurboSpark.
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $post;

get_header();
?>
<section class="hero">
    <p class="hero__eyebrow"><?php esc_html_e( 'Services', 'smartwebsitegenius-turbospark' ); ?></p>
    <h1 class="hero__title"><?php the_title(); ?></h1>
    <p class="hero__subtitle"><?php esc_html_e( "Select the growth program that fits your roadmap. Every engagement is powered by TurboSpark's blazing performance.", 'smartwebsitegenius-turbospark' ); ?></p>
</section>
<section class="section section--alt">
    <div class="site-container">
        <div class="section__grid section__grid--three">
            <article class="card">
                <h2><?php esc_html_e( 'Launch Package', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'Get a bespoke TurboSpark install, brand-tuned palette, and Elementor starter layouts that ship in under 2 weeks.', 'smartwebsitegenius-turbospark' ); ?></p>
            </article>
            <article class="card">
                <h2><?php esc_html_e( 'SEO Command Center', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'Advanced schema automation, lightning blog templates, and analytics dashboards connected to your KPIs.', 'smartwebsitegenius-turbospark' ); ?></p>
            </article>
            <article class="card">
                <h2><?php esc_html_e( 'Performance Sprints', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'We audit, optimize, and tune your stack to secure sub-second loads across desktop and mobile.', 'smartwebsitegenius-turbospark' ); ?></p>
            </article>
        </div>
    </div>
</section>
<section class="section">
    <div class="site-container">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();
