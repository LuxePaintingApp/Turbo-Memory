<?php
/**
 * Gnome World landing page.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Charming cement gnomes designed to bring a wink of joy to every corner of your garden.', 'solid-cement' ); ?></p>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Featured Gnome Collections', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Meet the Crew', 'solid-cement' ); ?></h2>
        <div class="featured-grid">
            <?php
            $gnome_collections = new WP_Query(
                [
                    'post_type'      => 'solidcement_collection',
                    'posts_per_page' => 9,
                    'tax_query'      => [
                        [
                            'taxonomy' => 'collection_category',
                            'field'    => 'slug',
                            'terms'    => [ 'gnome-world' ],
                        ],
                    ],
                ]
            );
            if ( $gnome_collections->have_posts() ) :
                while ( $gnome_collections->have_posts() ) : $gnome_collections->the_post();
                    ?>
                    <article class="feature-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large' ); ?>
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Request Quote', 'solid-cement' ); ?></a>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__( 'Assign the "gnome-world" collection category to showcase your characters here.', 'solid-cement' ) . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Design Your Own', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Custom Gnomes', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Pick a hat, choose a pose, and we will sculpt a gnome that mirrors your personality.', 'solid-cement' ); ?></p>
            <p><?php esc_html_e( 'Add inspiration photos and notes so our artisans can bring your concept to life.', 'solid-cement' ); ?></p>
        </div>
        <div>
            <?php get_template_part( 'template-parts/forms/quote' ); ?>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Testimonials', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Fans of the Gnome World', 'solid-cement' ); ?></h2>
        <?php solidcement_render_gallery( 'gnome-world' ); ?>
    </div>
</section>
<?php
get_footer();
