<?php
/**
 * Template Name: About TurboSpark
 * Description: Purpose-built About page template for SmartWebsiteGenius TurboSpark.
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $post;

get_header();
?>
<section class="hero">
    <p class="hero__eyebrow"><?php esc_html_e( 'About SmartWebsiteGenius', 'smartwebsitegenius-turbospark' ); ?></p>
    <h1 class="hero__title"><?php the_title(); ?></h1>
    <p class="hero__subtitle"><?php esc_html_e( 'We are the team behind TurboSpark — crafting 2025-ready, SEO-forward experiences for ambitious brands.', 'smartwebsitegenius-turbospark' ); ?></p>
</section>
<section class="section">
    <div class="site-container">
        <div class="section__grid section__grid--three">
            <article class="card">
                <h2><?php esc_html_e( 'SEO Scientists', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'Our strategists reverse engineer SERP wins, building schema-rich, Core Web Vitals-friendly foundations.', 'smartwebsitegenius-turbospark' ); ?></p>
            </article>
            <article class="card">
                <h2><?php esc_html_e( 'Designers of Delight', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'We pair bold color theory with interaction design to keep users immersed and engaged.', 'smartwebsitegenius-turbospark' ); ?></p>
            </article>
            <article class="card">
                <h2><?php esc_html_e( 'Performance Engineers', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'TurboSpark is engineered to load in milliseconds, using modern PHP best practices and zero render-blocking assets.', 'smartwebsitegenius-turbospark' ); ?></p>
            </article>
        </div>
    </div>
</section>
<section class="section section--alt">
    <div class="site-container">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();
