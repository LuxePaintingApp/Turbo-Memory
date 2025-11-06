<?php
/**
 * About Us page template.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Our Story in Stone', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Carving Luxury into Every Garden', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'From a small Perth studio to Australia’s most coveted garden artisans, we shape premium cement into whimsical treasures.', 'solid-cement' ); ?></p>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container split-grid">
        <div>
            <div class="card-style-b">
                <h2><?php esc_html_e( 'Brand Story', 'solid-cement' ); ?></h2>
                <p><?php esc_html_e( 'Solid Cement Creations began with a promise: elevate backyard moments into gallery-worthy experiences. Each gnome, fairy arch, and bird bath is hand-poured, sculpted, and finished to withstand the Australian climate while radiating charm.', 'solid-cement' ); ?></p>
            </div>
        </div>
        <div>
            <figure class="hero-media">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Founders shaping garden sculptures.', 'solid-cement' ); ?>" />
                <figcaption><?php esc_html_e( 'Studio Origins — 2008', 'solid-cement' ); ?></figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container split-grid">
        <div>
            <figure class="hero-media">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Lead artisan sculpting a fairy statue.', 'solid-cement' ); ?>" />
                <figcaption><?php esc_html_e( 'Lead Artisan — Sofia Greene', 'solid-cement' ); ?></figcaption>
            </figure>
        </div>
        <div class="card-style-b">
            <h2><?php esc_html_e( 'Meet the Maker', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Sofia Greene blends fine art training with industrial precision. Her process focuses on storytelling through texture, light, and form, ensuring every piece feels at home in luxury landscapes.', 'solid-cement' ); ?></p>
            <div class="tag-pills">
                <span class="tag-pill"><?php esc_html_e( 'Sculptor', 'solid-cement' ); ?></span>
                <span class="tag-pill"><?php esc_html_e( 'Designer', 'solid-cement' ); ?></span>
                <span class="tag-pill"><?php esc_html_e( 'Strategist', 'solid-cement' ); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Behind the Scenes', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Where Craftsmanship Meets Imagination', 'solid-cement' ); ?></h2>
        </div>
        <div class="gallery-grid">
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Pouring cement into moulds.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Polishing a gnome.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Curating a fairy garden set.', 'solid-cement' ); ?>" />
            </figure>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Mission & Values', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'We Honour Craft, Sustainability, and Joy', 'solid-cement' ); ?></h2>
        </div>
        <div class="process-steps">
            <article class="process-step">
                <div class="process-step__index">1</div>
                <div>
                    <h3><?php esc_html_e( 'Artisan Excellence', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Every piece passes through eight quality touchpoints to guarantee perfect finishes.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">2</div>
                <div>
                    <h3><?php esc_html_e( 'Sustainable Choices', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'We use recycled aggregates and water-conscious finishing for lasting impact.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">3</div>
                <div>
                    <h3><?php esc_html_e( 'Community Magic', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Collaborations with local artists and gardeners keep every installation uniquely alive.', 'solid-cement' ); ?></p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Customer Highlights', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Celebrating Inspired Landscapes', 'solid-cement' ); ?></h2>
        </div>
        <div class="gallery-grid">
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Luxury garden installation with custom sculptures.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Fairy garden water feature.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Gnome village display.', 'solid-cement' ); ?>" />
            </figure>
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
