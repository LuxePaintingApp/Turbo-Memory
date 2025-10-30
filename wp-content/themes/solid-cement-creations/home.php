<?php
/**
 * Blog index template with storytelling features and enhanced layouts.
 *
 * @package SolidCement
 */

global $wp_query;
$paged        = max( 1, get_query_var( 'paged' ) );
$has_featured = have_posts() && 1 === $paged;

get_header();
?>
<section class="page-hero blog-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Solid Cement Journal', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Gardening tips, restoration insights, and behind-the-scenes stories about handmade cement garden statues. Explore long-form tutorials optimised for keywords like “luxury garden design Australia” and “fairy garden maintenance tips”.', 'solid-cement' ); ?></p>
        <form class="hero-search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <label class="screen-reader-text" for="blog-search-field"><?php esc_html_e( 'Search the blog', 'solid-cement' ); ?></label>
            <input type="search" id="blog-search-field" name="s" placeholder="<?php esc_attr_e( 'Search journal posts…', 'solid-cement' ); ?>" />
            <button class="btn" type="submit"><?php esc_html_e( 'Search', 'solid-cement' ); ?></button>
        </form>
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
<section class="page-section blog-filters">
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
        <div class="chip-row" role="list">
            <span class="chip" role="listitem"><?php esc_html_e( 'luxury garden decor tips', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'cement statue care guide', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'fairy garden inspiration', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section class="page-section blog-listing">
    <div class="container">
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
<section class="page-section blog-pillars">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Content Pillars', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'What We Cover', 'solid-cement' ); ?></h2>
        <div class="package-cards">
            <article class="card">
                <h3><?php esc_html_e( 'Garden Design Strategy', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Explore layout blueprints, plant selections, and cement sculpture placements that elevate residential and commercial spaces. Keywords include “luxury garden layout” and “Elementor design tips”.', 'solid-cement' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Restoration Mastery', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Learn how to repair chips, revive colour, and shield statues from harsh climates. Follow along with supply lists and maintenance calendars.', 'solid-cement' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Fairy Garden Stories', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Dive into magical narratives, seasonal styling guides, and playful DIY activities that families adore.', 'solid-cement' ); ?></p>
            </article>
        </div>
        <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
    </div>
</section>
<section class="page-section page-section--alt blog-subscribe">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Subscribe', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Join Our Garden Lovers’ Newsletter', 'solid-cement' ); ?></h2>
        <form class="contact-card" method="post" action="#">
            <div class="form-control">
                <label for="subscribe-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                <input type="email" id="subscribe-email" name="subscribe_email" required />
            </div>
            <div class="form-control">
                <label for="subscribe-preferences"><?php esc_html_e( 'Preferred Topics', 'solid-cement' ); ?></label>
                <select id="subscribe-preferences" name="subscribe_preferences" multiple>
                    <option value="design"><?php esc_html_e( 'Garden Design', 'solid-cement' ); ?></option>
                    <option value="restoration"><?php esc_html_e( 'Restoration', 'solid-cement' ); ?></option>
                    <option value="fairy"><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></option>
                </select>
            </div>
            <button type="submit" class="btn"><?php esc_html_e( 'Subscribe', 'solid-cement' ); ?></button>
        </form>
    </div>
</section>
<section class="faq-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'FAQs', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'About the Journal', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'How often do you publish new posts?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We release fresh content every fortnight, alternating between design insights, restoration tutorials, and fairy garden inspiration.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Can I submit a guest post?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Yes! Email us your proposal including audience takeaways and SEO keyword suggestions. We prioritise topics aligned with luxurious garden design and artisan craftsmanship.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Do you provide downloadable resources?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Subscribers gain access to planners, checklists, and Elementor section templates that complement each article.', 'solid-cement' ); ?></p>
            </details>
        </div>
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
?>
<?php
get_footer();
