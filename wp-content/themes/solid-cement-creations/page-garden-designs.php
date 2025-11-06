<?php
/**
 * Garden Designs page template.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Garden Designs', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Landscapes Reimagined', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'Transform entire estates with immersive garden concepts, sculpted pathways, and purposeful lighting.', 'solid-cement' ); ?></p>
        </div>
        <figure class="hero-media">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Panoramic garden design.', 'solid-cement' ); ?>" />
            <figcaption><?php esc_html_e( 'Luxury Estate Garden Plan', 'solid-cement' ); ?></figcaption>
        </figure>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Portfolio', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Curated Garden Galleries', 'solid-cement' ); ?></h2>
        </div>
        <div class="gallery-grid">
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Garden water feature at dusk.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Layered planting beds.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Outdoor entertaining area.', 'solid-cement' ); ?>" />
            </figure>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Design Process', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Consult, Design, Create, Install', 'solid-cement' ); ?></h2>
        </div>
        <div class="process-steps">
            <article class="process-step">
                <div class="process-step__index">1</div>
                <div>
                    <h3><?php esc_html_e( 'Consult', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'We uncover your desired ambience, maintenance expectations, and architectural cues.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">2</div>
                <div>
                    <h3><?php esc_html_e( 'Design', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Concept drawings, planting schemes, and structural blueprints crafted to scale.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">3</div>
                <div>
                    <h3><?php esc_html_e( 'Create', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Our artisans fabricate custom cement features and collaborate with horticulturists.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">4</div>
                <div>
                    <h3><?php esc_html_e( 'Install', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Seamless project delivery including lighting, irrigation, and finishing flourishes.', 'solid-cement' ); ?></p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Client Success Stories', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Hear from Luxury Property Owners', 'solid-cement' ); ?></h2>
        </div>
        <div class="testimonial-grid">
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'Solid Cement Creations delivered a cohesive design that increased our property value instantly.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'Olivia & Theo', 'solid-cement' ); ?></strong>
            </article>
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'The install team managed every detail, from lighting to seating, with perfection.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'Lara, Hospitality Director', 'solid-cement' ); ?></strong>
            </article>
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'Our guests are captivated by the seamless flow and premium finishes throughout the garden.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'Richard, Estate Owner', 'solid-cement' ); ?></strong>
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
