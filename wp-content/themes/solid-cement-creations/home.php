<?php
/**
 * Blog index template.
 *
 * @package SolidCement
 */

global $wp_query;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Stories from the Studio', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Journal & Insights', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'Explore inspiration, restoration wins, and design tips from our artisan team.', 'solid-cement' ); ?></p>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : ?>
    <?php the_post(); ?>
    <section class="page-section">
        <div class="container">
            <article <?php post_class( 'card-style-b' ); ?>>
                <span class="kicker"><?php esc_html_e( 'Featured Post', 'solid-cement' ); ?></span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></p>
                <a class="btn btn--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read Article', 'solid-cement' ); ?></a>
            </article>
        </div>
    </section>
<?php endif; ?>
<?php rewind_posts(); ?>

<section class="page-section">
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
                    echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $label ) . '</a>';
                } else {
                    echo '<span>' . esc_html( $label ) . '</span>';
                }
            }
            ?>
        </div>
        <div class="posts-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="post-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Publish your first article to share artisan stories and expertise.', 'solid-cement' ); ?></p>
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
    <div class="container card-style-a">
        <h2><?php esc_html_e( 'Subscribe for Artisan Insights', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Receive behind-the-scenes updates, design inspiration, and exclusive offers.', 'solid-cement' ); ?></p>
        <form class="form-card" method="post" action="#">
            <div class="form-control">
                <label for="subscribe-email"><?php esc_html_e( 'Email Address', 'solid-cement' ); ?></label>
                <input type="email" id="subscribe-email" name="subscribe_email" required />
            </div>
            <button type="submit" class="btn btn--light"><?php esc_html_e( 'Subscribe', 'solid-cement' ); ?></button>
        </form>
    </div>
</section>
<?php
get_footer();
