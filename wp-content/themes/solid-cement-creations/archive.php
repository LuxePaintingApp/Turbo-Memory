<?php
/**
 * Archive template.
 *
 * @package SolidCement
 */

global $wp_query;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <p><?php the_archive_description(); ?></p>
    </div>
</section>
<section class="page-section">
    <div class="container blog-preview__grid">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'blog-card' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                    <?php endif; ?>
                    <div class="blog-card__content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( get_post_type() === 'post' ) : ?>
                            <p class="post-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></p>
                        <?php endif; ?>
                        <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
                        <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'View Details', 'solid-cement' ); ?></a>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="pagination">
                <?php
                echo paginate_links(
                    [
                        'prev_text' => __( '&laquo; Previous', 'solid-cement' ),
                        'next_text' => __( 'Next &raquo;', 'solid-cement' ),
                    ]
                );
                ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'No items found. Add content in the dashboard.', 'solid-cement' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
