<?php
/**
 * Fallback template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $wp_query;

get_header();
?>
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
            <h2 class="post-card__title"><?php esc_html_e( 'No content found', 'smartwebsitegenius-turbospark' ); ?></h2>
            <p><?php esc_html_e( 'Publish your first post to see it appear here.', 'smartwebsitegenius-turbospark' ); ?></p>
        </article>
    <?php endif; ?>
</section>
<?php
get_footer();
