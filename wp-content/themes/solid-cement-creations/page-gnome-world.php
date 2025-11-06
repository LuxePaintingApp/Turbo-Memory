<?php
/**
 * Gnome World page template.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Whimsy and Craft in Every Detail', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'Explore bespoke gnome collections that bring laughter, lore, and luxury into curated outdoor spaces.', 'solid-cement' ); ?></p>
        </div>
        <figure class="hero-media">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Hero gnome sculpture', 'solid-cement' ); ?>" />
            <figcaption><?php esc_html_e( 'Limited Edition Gnome Guardians', 'solid-cement' ); ?></figcaption>
        </figure>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Featured Collections', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Stories Sculpted in Stone', 'solid-cement' ); ?></h2>
        </div>
        <div class="gallery-grid">
            <?php
            $collections = [
                [ 'title' => __( 'Celestial Navigators', 'solid-cement' ), 'image' => 'placeholder-gnome-world.svg' ],
                [ 'title' => __( 'Garden Guardians', 'solid-cement' ), 'image' => 'placeholder-garden-designs.svg' ],
                [ 'title' => __( 'Heritage Folk', 'solid-cement' ), 'image' => 'placeholder-fairy-garden.svg' ],
            ];
            foreach ( $collections as $collection ) :
                ?>
                <figure class="card-style-b">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $collection['image'] ); ?>" alt="<?php echo esc_attr( $collection['title'] ); ?>" />
                    <figcaption>
                        <h3><?php echo esc_html( $collection['title'] ); ?></h3>
                        <a class="btn btn--ghost" href="#contact"><?php esc_html_e( 'Request Quote', 'solid-cement' ); ?></a>
                    </figcaption>
                </figure>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Custom Gnomes', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Design Your Own Legend', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Collaborate with our artisans to bring a beloved character or family story to life.', 'solid-cement' ); ?></p>
        </div>
        <div class="card-style-a">
            <p><?php esc_html_e( 'Choose from heritage-inspired attire, vibrant finishes, and storytelling props. Our team sketches concepts, sculpts prototypes, and perfects the final glaze to capture your vision.', 'solid-cement' ); ?></p>
            <a class="btn btn--light" href="#quote"><?php esc_html_e( 'Design Your Own Gnome', 'solid-cement' ); ?></a>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Testimonials', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Collectors Share Their Stories', 'solid-cement' ); ?></h2>
        </div>
        <div class="testimonial-grid">
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'The Celestial Navigators collection became the centrepiece of our boutique garden store.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'Harper, Curator', 'solid-cement' ); ?></strong>
            </article>
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'Our custom family gnome captures generations of stories and welcomes every guest.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'The Singh Family', 'solid-cement' ); ?></strong>
            </article>
        </div>
    </div>
</section>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        if ( trim( get_the_content() ) ) :
            ?>
            <section class="page-section page-section--content">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
            <?php
        endif;
    endwhile;
endif;
get_footer();
