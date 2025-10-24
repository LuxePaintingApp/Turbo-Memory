<?php
/**
 * Fallback template.
 *
 * @package SolidCement
 */

global $wp_query;
get_header();
?>
<section class="page-section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                    <header>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-meta"><?php echo esc_html( get_the_date() ); ?> &mdash; <?php the_author(); ?></p>
                    </header>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <footer>
                        <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue Reading', 'solid-cement' ); ?></a>
                    </footer>
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
            <p><?php esc_html_e( 'No content found. Create posts or pages to see them here.', 'solid-cement' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
