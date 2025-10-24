<?php
/**
 * Fairy Garden page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Fairy Garden Experiences', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Whimsical landscapes designed with layered textures, lighting, and weatherproof cement garden decor.', 'solid-cement' ); ?></p>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Gallery Carousel', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Before & After Moments', 'solid-cement' ); ?></h2>
        <?php solidcement_render_gallery( 'fairy-garden' ); ?>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Inspiration', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Ideas for Outdoor Storytelling', 'solid-cement' ); ?></h2>
        <div class="blog-preview__grid">
            <?php
            $inspiration = new WP_Query(
                [
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'tax_query'      => [
                        [
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => [ 'inspiration' ],
                        ],
                    ],
                ]
            );
            if ( $inspiration->have_posts() ) :
                while ( $inspiration->have_posts() ) : $inspiration->the_post();
                    ?>
                    <article class="blog-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                        <?php endif; ?>
                        <div class="blog-card__content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__( 'Tag your posts with the "inspiration" category to feature them here.', 'solid-cement' ) . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<section class="page-section" id="booking">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Bring the Magic of Fairy Garden to Your Home', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'We create bespoke layouts that balance botanicals, lighting, and weatherproof cement garden decor built to sparkle after every rain.', 'solid-cement' ); ?></p>
        </div>
        <div>
            <?php get_template_part( 'template-parts/forms/booking' ); ?>
        </div>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Custom Fairy Garden Quote', 'solid-cement' ),
        'title'       => __( 'Design an Enchanted Retreat', 'solid-cement' ),
        'copy'        => __( 'Tell us about the space you are styling and we will propose a layout with lighting, pathways, and whimsical sculptures.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
