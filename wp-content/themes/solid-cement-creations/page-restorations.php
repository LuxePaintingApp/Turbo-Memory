<?php
/**
 * Restorations page template.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Restorations', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Renew and Restore', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'Preserve heritage sculptures, refresh weathered finishes, and revive beloved garden icons.', 'solid-cement' ); ?></p>
        </div>
        <div class="before-after" data-before-after>
            <div class="before-after__pane before">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Before restoration image', 'solid-cement' ); ?>" />
                <span class="before-after__label"><?php esc_html_e( 'Before', 'solid-cement' ); ?></span>
            </div>
            <div class="before-after__pane after">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'After restoration image', 'solid-cement' ); ?>" />
                <span class="before-after__label"><?php esc_html_e( 'After', 'solid-cement' ); ?></span>
            </div>
            <input type="range" min="0" max="100" value="50" class="before-after__slider" data-before-after-range aria-label="<?php esc_attr_e( 'Adjust before and after comparison', 'solid-cement' ); ?>" />
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Common Restorations', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'From Hairline Cracks to Full Refinishes', 'solid-cement' ); ?></h2>
        </div>
        <div class="process-steps">
            <article class="process-step">
                <div class="process-step__index">1</div>
                <div>
                    <h3><?php esc_html_e( 'Surface Repairs', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Crack filling, chip repair, and re-texturing for flawless finishes.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">2</div>
                <div>
                    <h3><?php esc_html_e( 'Colour Revival', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Custom pigment matching and sealing for lasting vibrancy.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">3</div>
                <div>
                    <h3><?php esc_html_e( 'Structural Reinforcement', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Internal supports and stabilisation to extend the life of beloved pieces.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">4</div>
                <div>
                    <h3><?php esc_html_e( 'Protective Coatings', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'UV, salt air, and frost resistant coatings for every climate.', 'solid-cement' ); ?></p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'FAQs', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Restoration Questions Answered', 'solid-cement' ); ?></h2>
        </div>
        <div class="faq-accordion">
            <?php
            $faqs = [
                [
                    'q' => __( 'How long does a restoration take?', 'solid-cement' ),
                    'a' => __( 'Most projects are completed within three weeks, depending on curing times and detail work.', 'solid-cement' ),
                ],
                [
                    'q' => __( 'Can you colour match aged finishes?', 'solid-cement' ),
                    'a' => __( 'Yes. We create custom pigment blends and test swatches before applying to the final piece.', 'solid-cement' ),
                ],
                [
                    'q' => __( 'Do you repair on-site or off-site?', 'solid-cement' ),
                    'a' => __( 'Smaller pieces are restored in our studio, while large installations are completed on-site with weather-safe protection.', 'solid-cement' ),
                ],
            ];
            foreach ( $faqs as $faq ) :
                ?>
                <details>
                    <summary><?php echo esc_html( $faq['q'] ); ?></summary>
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </details>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Recent Projects', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Showcase of Renewed Works', 'solid-cement' ); ?></h2>
        </div>
        <div class="gallery-grid">
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Restored gnome sculpture.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Renewed fairy fountain.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Refinished bird bath.', 'solid-cement' ); ?>" />
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
