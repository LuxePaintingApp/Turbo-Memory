<?php
/**
 * Blog home template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $wp_query;

get_header();
?>
<section class="hero">
    <p class="hero__eyebrow"><?php esc_html_e( 'SmartWebsiteGenius Blog', 'smartwebsitegenius-turbospark' ); ?></p>
    <h1 class="hero__title"><?php esc_html_e( 'Insights that keep you ahead of 2025 SEO trends.', 'smartwebsitegenius-turbospark' ); ?></h1>
    <p class="hero__subtitle"><?php esc_html_e( 'Discover fast-loading strategies, Elementor workflows, and optimization checklists from TurboSpark experts.', 'smartwebsitegenius-turbospark' ); ?></p>
</section>
<section class="post-list">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'excerpt' ); ?>
        <?php endwhile; ?>

        <?php the_posts_pagination( [
            'prev_text' => __( 'Prev', 'smartwebsitegenius-turbospark' ),
            'next_text' => __( 'Next', 'smartwebsitegenius-turbospark' ),
        ] ); ?>
    <?php else : ?>
        <article class="post-card">
            <h2 class="post-card__title"><?php esc_html_e( 'No posts yet', 'smartwebsitegenius-turbospark' ); ?></h2>
            <p><?php esc_html_e( 'Publish your first article to see it here.', 'smartwebsitegenius-turbospark' ); ?></p>
        </article>
    <?php endif; ?>
</section>
<?php
get_footer();
