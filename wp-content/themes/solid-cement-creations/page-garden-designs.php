<?php
/**
 * Garden Designs page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Garden Design Services', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Elegant outdoor concepts that balance structure, planting, and custom cement garden statues.', 'solid-cement' ); ?></p>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Portfolio', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Signature Spaces', 'solid-cement' ); ?></h2>
        <?php solidcement_render_gallery( 'garden-design' ); ?>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Process', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From Idea to Installation', 'solid-cement' ); ?></h2>
        <div class="process-steps">
            <article class="process-step">
                <h3><?php esc_html_e( 'Consult', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'We walk your space, listen to your wishlist, and capture measurements.', 'solid-cement' ); ?></p>
            </article>
            <article class="process-step">
                <h3><?php esc_html_e( 'Design', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Concept sketches, mood boards, and 3D previews bring your garden to life.', 'solid-cement' ); ?></p>
            </article>
            <article class="process-step">
                <h3><?php esc_html_e( 'Create', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Our artisans pour, sculpt, and finish every cement detail with precision, from paving to custom cement garden statues.', 'solid-cement' ); ?></p>
            </article>
            <article class="process-step">
                <h3><?php esc_html_e( 'Install', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'We handle delivery, placement, and styling for a photo-ready reveal.', 'solid-cement' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Client Success Stories', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From Vision to Reality', 'solid-cement' ); ?></h2>
        <div class="testimonial-slider__wrapper">
            <?php
            $design_testimonials = new WP_Query([
                'post_type'      => 'solidcement_testimonial',
                'posts_per_page' => 3,
            ]);
            if ( $design_testimonials->have_posts() ) :
                while ( $design_testimonials->have_posts() ) : $design_testimonials->the_post();
                    ?>
                    <article class="testimonial">
                        <div class="testimonial__content"><?php the_content(); ?></div>
                        <cite>&mdash; <?php the_title(); ?></cite>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__( 'Add testimonials to spotlight completed garden design projects.', 'solid-cement' ) . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Book a Design Consultation', 'solid-cement' ),
        'title'       => __( 'Schedule Your Garden Masterplan', 'solid-cement' ),
        'copy'        => __( 'Outline your dream landscape, and we will prepare mood boards, layouts, and investment options tailored to your space.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
