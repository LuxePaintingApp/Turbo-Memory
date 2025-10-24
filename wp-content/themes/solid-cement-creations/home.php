<?php
/**
 * Blog index template.
 *
 * @package SolidCement
 */

global $wp_query;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Solid Cement Journal', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Gardening tips, restoration insights, and behind-the-scenes stories.', 'solid-cement' ); ?></p>
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
                        <p class="post-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></p>
                        <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 32 ) ); ?></p>
                        <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'solid-cement' ); ?></a>
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
            <p><?php esc_html_e( 'No blog posts yet. Start publishing to engage your audience.', 'solid-cement' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Subscribe', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Join Our Garden Lovers’ Newsletter', 'solid-cement' ); ?></h2>
        <form class="contact-card" method="post" action="#">
            <div class="form-control">
                <label for="subscribe-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                <input type="email" id="subscribe-email" name="subscribe_email" required />
            </div>
            <button type="submit" class="btn"><?php esc_html_e( 'Subscribe', 'solid-cement' ); ?></button>
        </form>
    </div>
</section>
<?php
get_footer();
