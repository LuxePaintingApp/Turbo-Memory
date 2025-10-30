<?php
/**
 * Template Name: Contact
 * Description: Conversion-focused contact page template.
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $post;

get_header();
?>
<section class="hero">
    <p class="hero__eyebrow"><?php esc_html_e( 'Contact', 'smartwebsitegenius-turbospark' ); ?></p>
    <h1 class="hero__title"><?php the_title(); ?></h1>
    <p class="hero__subtitle"><?php esc_html_e( 'Ready to ignite your next build? Reach out and we will map your TurboSpark launch plan.', 'smartwebsitegenius-turbospark' ); ?></p>
</section>
<section class="section">
    <div class="site-container">
        <div class="section__grid section__grid--three">
            <article class="card">
                <h2><?php esc_html_e( 'Collaborate', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><a href="mailto:hello@smartwebsitegenius.com">hello@smartwebsitegenius.com</a></p>
            </article>
            <article class="card">
                <h2><?php esc_html_e( 'Call', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><a href="tel:+12345678900">+1 (234) 567-8900</a></p>
            </article>
            <article class="card">
                <h2><?php esc_html_e( 'Visit', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'Virtual studio available worldwide — book a strategy session to get started.', 'smartwebsitegenius-turbospark' ); ?></p>
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
