<?php
/**
 * Search results template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $wp_query;

get_header();
?>
<section class="hero">
    <p class="hero__eyebrow"><?php esc_html_e( 'Search', 'smartwebsitegenius-turbospark' ); ?></p>
    <h1 class="hero__title"><?php printf( esc_html__( 'Results for "%s"', 'smartwebsitegenius-turbospark' ), get_search_query() ); ?></h1>
    <p class="hero__subtitle"><?php esc_html_e( 'We surface the most relevant TurboSpark insights in milliseconds.', 'smartwebsitegenius-turbospark' ); ?></p>
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
            <h2 class="post-card__title"><?php esc_html_e( 'No results found.', 'smartwebsitegenius-turbospark' ); ?></h2>
            <p><?php esc_html_e( 'Try a different keyword or explore our latest posts.', 'smartwebsitegenius-turbospark' ); ?></p>
        </article>
    <?php endif; ?>
</section>
<?php
get_footer();
