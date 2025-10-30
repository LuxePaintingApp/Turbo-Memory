<?php
/**
 * Archive template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $wp_query;

get_header();
?>
<section class="hero">
    <p class="hero__eyebrow"><?php esc_html_e( 'Archive', 'smartwebsitegenius-turbospark' ); ?></p>
    <h1 class="hero__title"><?php the_archive_title(); ?></h1>
    <?php $archive_description = get_the_archive_description(); ?>
    <?php if ( $archive_description ) : ?>
        <p class="hero__subtitle"><?php echo wp_kses_post( $archive_description ); ?></p>
    <?php endif; ?>
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
            <h2 class="post-card__title"><?php esc_html_e( 'Nothing here yet.', 'smartwebsitegenius-turbospark' ); ?></h2>
        </article>
    <?php endif; ?>
</section>
<?php
get_footer();
