<?php
/**
 * Fairy Garden page template.
 *
 * @package SolidCement
 */

global $post;
get_header();

$inspiration_tips = [
    __( 'Layer pathways with crushed quartz, miniature pavers, and moss to create depth. Integrate fibre-optic lighting under translucent stepping stones for nighttime sparkle.', 'solid-cement' ),
    __( 'Mix heights by pairing low-lying succulents with trailing vines and upright dwarf conifers. Cement toadstools and lanterns anchor the scene while plants soften edges.', 'solid-cement' ),
    __( 'Introduce water with micro bubblers or hidden reservoirs. The gentle sound enhances the immersive fairy tale ambience while keeping bird visitors refreshed.', 'solid-cement' ),
];
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
        <p class="section-lede"><?php esc_html_e( 'Explore the transformation of blank courtyards into enchanted retreats. Slide through before-and-after galleries that spotlight lighting, planting, and handcrafted fairy garden sculptures.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'fairy-garden' ); ?>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Inspiration', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Ideas for Outdoor Storytelling', 'solid-cement' ); ?></h2>
        <div class="idea-tabs">
            <div class="tabs" role="tablist">
                <button class="tab-button is-active" role="tab" id="idea-luxury" aria-controls="panel-luxury" aria-selected="true" data-tab-target="panel-luxury"><?php esc_html_e( 'Luxury Retreat', 'solid-cement' ); ?></button>
                <button class="tab-button" role="tab" id="idea-family" aria-controls="panel-family" aria-selected="false" data-tab-target="panel-family"><?php esc_html_e( 'Family Adventure', 'solid-cement' ); ?></button>
                <button class="tab-button" role="tab" id="idea-wellness" aria-controls="panel-wellness" aria-selected="false" data-tab-target="panel-wellness"><?php esc_html_e( 'Wellness Oasis', 'solid-cement' ); ?></button>
            </div>
            <div class="tab-panels">
                <section id="panel-luxury" class="tab-panel is-active" role="tabpanel" aria-labelledby="idea-luxury">
                    <p><?php esc_html_e( 'Imagine a moonlit entertaining area lined with illuminated fairy houses, reflective pools, and limestone seating. Gold-leaf fairy statues guard an elegant bar cart while soft pink uplights highlight trailing jasmine.', 'solid-cement' ); ?></p>
                    <p><?php esc_html_e( 'We integrate discrete audio for ambient forest sounds, polished cement countertops for serving platters, and custom planters overflowing with blush roses and silvery foliage.', 'solid-cement' ); ?></p>
                </section>
                <section id="panel-family" class="tab-panel" role="tabpanel" aria-labelledby="idea-family">
                    <p><?php esc_html_e( 'Transform your backyard into a magical playland with interactive scavenger hunts, storytelling circles, and glow-in-the-dark stepping stones. Kids adore the hidden doors carved into tree trunks and miniature bridges over pebble creeks.', 'solid-cement' ); ?></p>
                    <p><?php esc_html_e( 'Durable cement figurines withstand imaginative play, while soft turf and tactile sensory stations keep little adventurers engaged for hours.', 'solid-cement' ); ?></p>
                </section>
                <section id="panel-wellness" class="tab-panel" role="tabpanel" aria-labelledby="idea-wellness">
                    <p><?php esc_html_e( 'Curate a meditative sanctuary with gentle water bowls, aromatherapy planters, and seating nooks wrapped in climbing jasmine. Sculpted fairy guardians encourage mindfulness and provide gentle illumination for evening journaling.', 'solid-cement' ); ?></p>
                    <p><?php esc_html_e( 'Add yoga decks with integrated lighting, stone labyrinths for mindful walking, and cushioned benches with waterproof fabrics for year-round serenity.', 'solid-cement' ); ?></p>
                </section>
            </div>
        </div>
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
<section class="page-section">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Fairy Garden Playbook', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Create Your Enchanted Scene', 'solid-cement' ); ?></h2>
            <ul class="icon-list">
                <?php foreach ( $inspiration_tips as $tip ) : ?>
                    <li><?php echo esc_html( $tip ); ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="care-accordion" data-accordion>
                <article class="accordion-item">
                    <button class="accordion-toggle" aria-expanded="false">
                        <span><?php esc_html_e( 'Seasonal Planting Guide', 'solid-cement' ); ?></span>
                        <span class="accordion-icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content" hidden>
                        <p><?php esc_html_e( 'Spring focuses on pastel blooms and pollinator-friendly herbs. In autumn, we incorporate coloured foliage and weatherproof lanterns to maintain warmth.', 'solid-cement' ); ?></p>
                    </div>
                </article>
                <article class="accordion-item">
                    <button class="accordion-toggle" aria-expanded="false">
                        <span><?php esc_html_e( 'Lighting Blueprint', 'solid-cement' ); ?></span>
                        <span class="accordion-icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content" hidden>
                        <p><?php esc_html_e( 'We map layered lighting including path markers, canopy twinkles, and hidden uplights that accent sculptures and botanical textures.', 'solid-cement' ); ?></p>
                    </div>
                </article>
            </div>
        </div>
        <div class="fairy-checklist">
            <h3><?php esc_html_e( 'Project Checklist', 'solid-cement' ); ?></h3>
            <ol>
                <li><?php esc_html_e( 'Site consultation and measurements.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Mood board presentation with planting plan.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Custom cement fairy garden statue production.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Installation day styling and lighting calibration.', 'solid-cement' ); ?></li>
            </ol>
            <div class="progress-list">
                <div>
                    <label for="progress-fairy"><?php esc_html_e( 'Fairy Garden Bookings Filled', 'solid-cement' ); ?></label>
                    <progress id="progress-fairy" max="100" value="72">72%</progress>
                </div>
                <div>
                    <label for="progress-workshops"><?php esc_html_e( 'Workshops Remaining This Season', 'solid-cement' ); ?></label>
                    <progress id="progress-workshops" max="100" value="40">40%</progress>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section page-section--alt" id="booking">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Bring the Magic of Fairy Garden to Your Home', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'We create bespoke layouts that balance botanicals, lighting, and weatherproof cement garden decor built to sparkle after every rain.', 'solid-cement' ); ?></p>
            <p><?php esc_html_e( 'Choose a design tier that suits your vision. Our team guides you from concept sketches through to final styling, ensuring every detail feels enchanting.', 'solid-cement' ); ?></p>
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
        'copy'        => [
            __( 'Tell us about the space you are styling and we will propose a layout with lighting, pathways, and whimsical sculptures.', 'solid-cement' ),
            __( 'Expect a detailed proposal with planting palettes, accessory recommendations, and maintenance scheduling.', 'solid-cement' ),
        ],
        'extra_class' => 'page-section--alt',
    ]
);
?>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Client Spotlights', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Fairy Garden Success Stories', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Hear from clients who transformed their outdoor spaces with immersive fairy garden designs featuring handcrafted cement statues, ambient lighting, and botanical storytelling.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'fairy-garden' ); ?>
    </div>
</section>
<?php
get_footer();
