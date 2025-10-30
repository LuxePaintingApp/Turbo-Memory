<?php
/**
 * Blog home template.
 *
 * @package SEO_Turbo_Boost
 */

get_header();
?>
<section class="swg-section swg-blog-hero">
    <div class="swg-container">
        <?php seo_turbo_boost_maybe_render_breadcrumbs(); ?>
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'SEO Turbo Boost Blog', 'seo-turbo-boost' ); ?></span>
            <h1><?php esc_html_e( 'Insights, strategies, and experiments powering smarter rankings', 'seo-turbo-boost' ); ?></h1>
        </div>
        <form class="swg-form swg-blog-filter" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="swg-form-row">
                <label>
                    <?php esc_html_e( 'Search articles', 'seo-turbo-boost' ); ?>
                    <input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Keyword or topic…', 'seo-turbo-boost' ); ?>" />
                </label>
                <label>
                    <?php esc_html_e( 'Filter by category', 'seo-turbo-boost' ); ?>
                    <?php
                    wp_dropdown_categories(
                        [
                            'show_option_all' => __( 'All categories', 'seo-turbo-boost' ),
                            'name'            => 'cat',
                            'taxonomy'        => 'category',
                            'hide_empty'      => false,
                            'selected'        => get_query_var( 'cat' ),
                        ]
                    );
                    ?>
                </label>
            </div>
            <div class="swg-hero-cta">
                <button type="submit" class="swg-btn"><?php esc_html_e( 'Filter results', 'seo-turbo-boost' ); ?></button>
                <a class="swg-link" href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'See services', 'seo-turbo-boost' ); ?></a>
            </div>
        </form>
    </div>
</section>

<section class="swg-section swg-blog-content">
    <div class="swg-container" style="display:grid;gap:2rem;grid-template-columns:3fr 1fr;align-items:start;">
        <div>
            <?php if ( have_posts() ) : ?>
                <?php
                $featured = get_posts(
                    [
                        'posts_per_page'      => 1,
                        'ignore_sticky_posts' => false,
                    ]
                );
                if ( $featured ) :
                    $post = $featured[0];
                    setup_postdata( $post );
                    ?>
                    <article <?php post_class( 'swg-card swg-featured-post' ); ?>>
                        <div class="swg-badge"><?php echo esc_html__( 'Featured', 'seo-turbo-boost' ); ?></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 35 ) ); ?></p>
                        <a class="swg-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'seo-turbo-boost' ); ?></a>
                    </article>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <div class="swg-post-list">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article <?php post_class( 'swg-card swg-post-card' ); ?>>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
                            <footer>
                                <a class="swg-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Keep reading', 'seo-turbo-boost' ); ?></a>
                                <a class="swg-link" href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About SmartWebsiteGenius', 'seo-turbo-boost' ); ?></a>
                            </footer>
                        </article>
                    <?php endwhile; ?>
                </div>
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
                <p><?php esc_html_e( 'No posts found. Try different keywords or categories.', 'seo-turbo-boost' ); ?></p>
            <?php endif; ?>
        </div>
        <aside class="swg-sidebar" role="complementary">
            <h2><?php esc_html_e( 'Scale faster with SEO Turbo Boost', 'seo-turbo-boost' ); ?></h2>
            <p><?php esc_html_e( 'Download our free on-page SEO checklist to ship optimized content in minutes.', 'seo-turbo-boost' ); ?></p>
            <button class="swg-btn" type="button" data-tooltip="<?php esc_attr_e( 'Checklist delivered instantly', 'seo-turbo-boost' ); ?>"><?php esc_html_e( 'Download Free Guide', 'seo-turbo-boost' ); ?></button>
            <div class="swg-accordion" style="margin-top:1.5rem;">
                <details>
                    <summary><?php esc_html_e( 'Popular topics', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                    <p><a href="<?php echo esc_url( get_category_link( get_cat_ID( 'SEO Strategy' ) ) ); ?>"><?php esc_html_e( 'SEO Strategy', 'seo-turbo-boost' ); ?></a></p>
                    <p><a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Performance' ) ) ); ?>"><?php esc_html_e( 'Performance', 'seo-turbo-boost' ); ?></a></p>
                </details>
                <details>
                    <summary><?php esc_html_e( 'Stay in the loop', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                    <p><?php esc_html_e( 'Subscribe for weekly experiments and templates.', 'seo-turbo-boost' ); ?></p>
                </details>
            </div>
        </aside>
    </div>
</section>
<?php
get_footer();
