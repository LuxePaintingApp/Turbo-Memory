<?php
/**
 * Front page layout.
 *
 * @package SolidCement
 */

global $post;
get_header();

$current_id = isset( $post ) ? $post->ID : 0;

if ( solidcement_can_use_elementor( $current_id ) ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
    get_footer();
    return;
}

$hero_query = new WP_Query(
    [
        'post_type'      => 'solidcement_collection',
        'posts_per_page' => 3,
    ]
);
?>
<section class="hero">
    <div class="container">
        <div class="hero-slider-wrapper">
            <div class="hero-slider" data-hero-slider>
                <?php if ( $hero_query->have_posts() ) : ?>
                    <?php while ( $hero_query->have_posts() ) : $hero_query->the_post(); ?>
                        <article class="hero-slide">
                            <figure>
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'large' );
                                } else {
                                    echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ) . '" alt="" loading="lazy" />';
                                }
                                ?>
                            </figure>
                            <div class="slide-overlay">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <article class="hero-slide">
                        <figure>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="" />
                        </figure>
                        <div class="slide-overlay">
                            <h3><?php esc_html_e( 'Showcase your collections by adding posts to the Collection post type.', 'solid-cement' ); ?></h3>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
        </div>
        <div class="hero-content">
            <h1><?php esc_html_e( 'Handcrafted Luxury for Your Garden', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'From whimsical gnomes to immersive fairy gardens, our concrete garden ornaments elevate every outdoor space with artisanal finishes.', 'solid-cement' ); ?></p>
            <div class="hero-cta">
                <a class="btn" href="#signature-creations"><?php esc_html_e( 'Explore Collections', 'solid-cement' ); ?></a>
                <a class="btn btn--outline" href="#quote"><?php esc_html_e( 'Get a Quote', 'solid-cement' ); ?></a>
            </div>
        </div>
    </div>
</section>

<section id="signature-creations" class="signature-creations">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Our Signature Creations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Sculpted to Delight', 'solid-cement' ); ?></h2>
        <?php solidcement_render_signature_creations(); ?>
    </div>
</section>

<section class="why-choose">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Why Choose Us', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Elegance in Every Detail', 'solid-cement' ); ?></h2>
        <div class="why-choose__grid">
            <article class="why-card">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L3 5v6c0 5.25 3.438 10.063 9 11 5.563-.938 9-5.75 9-11V5l-9-3zm0 2.18L18.5 6.5v4.5c0 4.344-2.938 8.438-6.5 9.219-3.563-.781-6.5-4.875-6.5-9.219V6.5L12 4.18zM11 8v5h2V8h-2zm0 6v2h2v-2h-2z"/></svg>
                <h3><?php esc_html_e( 'Luxurious Finishes', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'Every piece is sealed with premium coatings for a satin sheen built to withstand Australian summers and keep your concrete garden ornaments glowing.', 'solid-cement' ); ?></p>
            </article>
            <article class="why-card">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l2.09 6.26H21l-5.17 3.76 1.98 6.12L12 15.77l-5.81 3.37 1.98-6.12L3 9.26h6.91z"/></svg>
                <h3><?php esc_html_e( 'Custom Designs', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Collaborate directly with our artisans to dream up heirloom-worthy statement pieces.', 'solid-cement' ); ?></p>
            </article>
            <article class="why-card">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
                <h3><?php esc_html_e( 'Australian Made', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Handcrafted in Brisbane with locally sourced materials and sustainable practices.', 'solid-cement' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="customer-gallery">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Gallery', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Magic in Real Gardens', 'solid-cement' ); ?></h2>
        <?php solidcement_render_gallery( 'customer-gallery' ); ?>
    </div>
</section>

<section id="booking" class="booking-teaser">
    <div class="container">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Transform Your Garden — Book a Custom Quote Today', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share your ideas and we will design a tailored concept, timeline, and investment guide.', 'solid-cement' ); ?></p>
        </div>
        <?php get_template_part( 'template-parts/forms/booking' ); ?>
    </div>
</section>

<?php get_template_part( 'template-parts/components/testimonial-slider' ); ?>

<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Detailed Quote', 'solid-cement' ),
        'title'       => __( 'Plan Your Custom Creation', 'solid-cement' ),
        'copy'        => __( 'Tell us about your garden, the finishes you love, and the pieces that caught your eye. Our team will reply with a personalised concept and pricing guide.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>

<section class="blog-preview">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'From the Journal', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Latest Stories', 'solid-cement' ); ?></h2>
        <div class="blog-preview__grid">
            <?php
            $posts_query = new WP_Query(
                [
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                ]
            );
            if ( $posts_query->have_posts() ) :
                while ( $posts_query->have_posts() ) : $posts_query->the_post();
                    ?>
                    <article class="blog-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="blog-card__content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
                            <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read Article', 'solid-cement' ); ?></a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__( 'Publish posts to showcase your expertise and gardening tips.', 'solid-cement' ) . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
