<?php
/**
 * Testimonial slider component.
 *
 * @package SolidCement
 */

$testimonials = new WP_Query([
    'post_type'      => 'solidcement_testimonial',
    'posts_per_page' => 5,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
]);
?>
<section class="testimonial-slider" aria-label="Client testimonials">
    <div class="container" data-testimonial-slider>
        <span class="section-subtitle">Love Notes</span>
        <h2 class="section-title">What Our Clients Are Saying</h2>
        <div class="testimonial-slider__wrapper">
            <?php if ( $testimonials->have_posts() ) : ?>
                <?php $index = 0; ?>
                <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                    <article class="testimonial" data-testimonial-slide <?php echo 0 === $index ? '' : 'hidden'; ?>>
                        <div class="testimonial__content">
                            <?php the_content(); ?>
                        </div>
                        <cite>&mdash; <?php the_title(); ?></cite>
                        <?php if ( $position = get_post_meta( get_the_ID(), 'solidcement_testimonial_position', true ) ) : ?>
                            <p class="testimonial__position"><?php echo esc_html( $position ); ?></p>
                        <?php endif; ?>
                    </article>
                    <?php $index++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>No testimonials yet. Add a few "Solid Cement Testimonial" entries in the dashboard to see them here.</p>
            <?php endif; ?>
        </div>
        <?php if ( $testimonials->post_count > 1 ) : ?>
            <div class="testimonial-nav" data-testimonial-nav>
                <?php for ( $i = 0; $i < $testimonials->post_count; $i++ ) : ?>
                    <button type="button" aria-label="Show testimonial <?php echo esc_attr( $i + 1 ); ?>" <?php echo 0 === $i ? 'class="is-active"' : ''; ?>></button>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
