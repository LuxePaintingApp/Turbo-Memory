<?php
/**
 * Main template file.
 *
 * @package SEO_Turbo_Boost
 */

if ( is_home() ) {
    require get_template_directory() . '/home.php';
    return;
}

get_header();
?>
<section class="swg-section">
    <div class="swg-container">
        <?php seo_turbo_boost_maybe_render_breadcrumbs(); ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'swg-card' ); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
                </article>
            <?php endwhile; ?>
            <div class="swg-pagination">
                <?php
                the_posts_pagination(
                    [
                        'prev_text' => __( 'Previous', 'seo-turbo-boost' ),
                        'next_text' => __( 'Next', 'seo-turbo-boost' ),
                    ]
                );
                ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'No content available.', 'seo-turbo-boost' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
