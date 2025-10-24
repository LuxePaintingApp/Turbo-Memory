<?php
/**
 * Blog index template.
 *
 * @package SolidCement
 */

global $wp_query;
$paged         = max( 1, get_query_var( 'paged' ) );
$has_featured  = have_posts() && 1 === $paged;

get_header();
?>
<section class="page-hero blog-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Solid Cement Journal', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Gardening tips, restoration insights, and behind-the-scenes stories about handmade cement garden statues.', 'solid-cement' ); ?></p>
    </div>
</section>
<?php if ( $has_featured ) : ?>
    <?php the_post(); ?>
    <section class="blog-featured">
        <div class="container">
            <article <?php post_class( 'blog-featured__card' ); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <a class="blog-featured__image" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </a>
                <?php endif; ?>
                <div class="blog-featured__content">
                    <span class="blog-featured__label"><?php esc_html_e( 'Featured Post', 'solid-cement' ); ?></span>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="post-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></p>
                    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></p>
                    <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read Article', 'solid-cement' ); ?></a>
                </div>
            </article>
        </div>
    </section>
<?php elseif ( 1 === $paged ) : ?>
    <section class="blog-featured">
        <div class="container">
            <div class="blog-featured__empty">
                <p><?php esc_html_e( 'Publish your first post to feature it here.', 'solid-cement' ); ?></p>
            </div>
        </div>
    </section>
<?php endif; ?>
<section class="page-section blog-listing">
    <div class="container">
        <div class="category-filter" role="navigation" aria-label="<?php esc_attr_e( 'Filter posts by category', 'solid-cement' ); ?>">
            <?php
            $highlight_categories = [
                'inspiration' => __( 'Inspiration', 'solid-cement' ),
                'restoration' => __( 'Restoration', 'solid-cement' ),
                'design-tips' => __( 'Design Tips', 'solid-cement' ),
            ];
            foreach ( $highlight_categories as $slug => $label ) {
                $category = get_category_by_slug( $slug );
                if ( $category ) {
                    echo '<a class="category-filter__link" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $label ) . '</a>';
                } else {
                    echo '<span class="category-filter__link category-filter__link--disabled" aria-disabled="true">' . esc_html( $label ) . '</span>';
                }
            }
            ?>
        </div>
        <h2 class="section-title section-title--left"><?php esc_html_e( 'Latest Articles', 'solid-cement' ); ?></h2>
        <div class="blog-preview__grid">
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
            <?php else : ?>
                <p><?php esc_html_e( 'No blog posts yet. Start publishing to engage your audience.', 'solid-cement' ); ?></p>
            <?php endif; ?>
        </div>
        <?php if ( $wp_query->max_num_pages > 1 ) : ?>
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
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Plan Your Next Project', 'solid-cement' ),
        'title'       => __( 'Request a Quote from Our Team', 'solid-cement' ),
        'copy'        => __( 'Tell us about your garden goals and we will provide tailored recommendations and pricing.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
get_footer();
