<?php
/**
 * Front page layout.
 *
 * @package SolidCement
 */

global $post;
get_header();

$hero_query = new WP_Query(
    [
        'post_type'      => 'solidcement_collection',
        'posts_per_page' => 3,
    ]
);

$experience_tabs = [
    'collections' => [
        'label' => __( 'Curated Collections', 'solid-cement' ),
        'copy'  => [
            __( 'Discover themed assortments of luxury garden gnomes, bespoke bird baths, and heirloom-quality planters meticulously paired to create a cohesive story in your garden. Each collection is hand-finished in our Brisbane studio and sealed with weather-defying coatings to ensure vibrant colour and silky texture for years to come.', 'solid-cement' ),
            __( 'Every curated edit features sculptural cement garden statues, limited-edition fairy garden accessories, and lush planting suggestions so you can recreate the look with ease. Whether you desire a rosy English garden, a coastal sanctuary, or a twilight fairy nook, our stylists offer downloadable mood boards and planting guides to accompany your purchase.', 'solid-cement' ),
            __( 'Collections are refreshed seasonally to include trending shades, botanical pairings, and accessories sourced from sustainable Australian makers. Pre-order windows allow you to secure pieces before they launch, and our concierge team can customise colours, patinas, and inscriptions to mirror your personal style.', 'solid-cement' ),
        ],
    ],
    'services'    => [
        'label' => __( 'Signature Services', 'solid-cement' ),
        'copy'  => [
            __( 'From master-planned garden designs to express styling sessions, Solid Cement Creations delivers concierge-level service. Our artisans specialise in sculpting cement fairy garden villages, statement fountains, and modernist bird baths that anchor your outdoor rooms.', 'solid-cement' ),
            __( 'Consultations include site analysis, lighting recommendations, and planting palettes to ensure every handcrafted garden statue feels at home. We integrate irrigation considerations, acoustics for water features, and pathways that guide guests through immersive storytelling moments.', 'solid-cement' ),
            __( 'After the design presentation, clients receive an interactive schedule with milestone trackers, product swatches, and 3D previews. We coordinate installation with trusted horticultural partners to deliver turnkey luxury — your only task is to enjoy a sparkling, ready-to-entertain garden.', 'solid-cement' ),
        ],
    ],
    'aftercare'   => [
        'label' => __( 'Aftercare & Maintenance', 'solid-cement' ),
        'copy'  => [
            __( 'Keep your investment radiant with our bespoke aftercare plans. Each plan includes quarterly inspections, colour-refresh treatments for cement garden gnomes, and protective sealing for water features and fairy garden pathways.', 'solid-cement' ),
            __( 'Clients receive a personalised maintenance dashboard that outlines watering schedules, cleaning rituals, and styling refresh ideas. Our technicians can repair chips, colour-match sun-kissed finishes, and resurface bird baths so they remain centrepieces of your landscape.', 'solid-cement' ),
            __( 'For busy households, opt into our Concierge Care subscription which includes seasonal styling swaps, festive decor installation, and urgent restoration support following storms. Luxury is in the details, and we ensure your outdoor oasis always looks first-showroom ready.', 'solid-cement' ),
        ],
    ],
];
?>
<section class="toast-banner" role="status" aria-live="polite">
    <div class="container">
        <span class="badge badge--glow"><?php esc_html_e( 'Now Booking', 'solid-cement' ); ?></span>
        <p><?php esc_html_e( 'Secure your summer installation window and receive a complimentary styling session featuring our most-loved fairy garden lighting kits.', 'solid-cement' ); ?></p>
        <a class="link-arrow" href="#quote"><?php esc_html_e( 'Reserve your spot', 'solid-cement' ); ?></a>
    </div>
</section>
<section class="hero">
    <div class="container">
        <nav class="breadcrumbs" aria-label="Primary">
            <ol>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'solid-cement' ); ?></a></li>
                <li aria-current="page"><?php esc_html_e( 'Luxury Garden Artistry', 'solid-cement' ); ?></li>
            </ol>
        </nav>
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
            <p><?php esc_html_e( 'Solid Cement Creations elevates Australian outdoor spaces with bespoke cement garden statues, imaginative fairy garden designs, and couture landscaping details. Each piece is sculpted by hand, air-brushed with luminous pigments, and sealed for decades of alfresco joy.', 'solid-cement' ); ?></p>
            <p><?php esc_html_e( 'Our studio collaborates with horticulturalists, lighting designers, and metal artisans to shape immersive garden storytelling. From whimsical gnome villages to serene Zen courtyards, your sanctuary will feel luxurious, personal, and utterly unforgettable.', 'solid-cement' ); ?></p>
            <div class="hero-cta">
                <a class="btn" href="#signature-creations"><?php esc_html_e( 'Explore Collections', 'solid-cement' ); ?></a>
                <a class="btn btn--outline" href="#quote"><?php esc_html_e( 'Get a Quote', 'solid-cement' ); ?></a>
            </div>
            <div class="hero-metrics">
                <div>
                    <span class="metric-number">950+</span>
                    <p><?php esc_html_e( 'Garden gnomes lovingly reimagined, hand painted, and delivered across Australia.', 'solid-cement' ); ?></p>
                </div>
                <div>
                    <span class="metric-number">320</span>
                    <p><?php esc_html_e( 'Bespoke fairy garden installations featuring lighting, water, and sculpted pathways.', 'solid-cement' ); ?></p>
                </div>
                <div>
                    <span class="metric-number">48</span>
                    <p><?php esc_html_e( 'Regional awards celebrating our luxurious large cement garden ornaments and designs.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="signature-creations" class="signature-creations">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Our Signature Creations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Sculpted to Delight', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Each collection celebrates lavish texture, luminous colour, and time-honoured craftsmanship. Discover sculpted centrepieces, charming cement gnomes, and artful accessories that instantly deliver a magazine-worthy garden.', 'solid-cement' ); ?></p>
        <?php solidcement_render_signature_creations(); ?>
        <div class="assurance-chips">
            <span class="chip chip--soft"><?php esc_html_e( 'Luxury Cement Mixes', 'solid-cement' ); ?></span>
            <span class="chip chip--soft"><?php esc_html_e( 'UV Stable Pigments', 'solid-cement' ); ?></span>
            <span class="chip chip--soft"><?php esc_html_e( 'Lifetime Support', 'solid-cement' ); ?></span>
            <span class="chip chip--soft"><?php esc_html_e( 'Elementor Friendly Templates', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section class="experience-tabs" aria-labelledby="experience-tabs-title">
    <div class="container">
        <span class="section-subtitle" id="experience-tabs-title"><?php esc_html_e( 'How We Work', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Immerse Yourself in the Solid Cement Experience', 'solid-cement' ); ?></h2>
        <div class="tabs" role="tablist">
            <?php $tab_index = 0; ?>
            <?php foreach ( $experience_tabs as $slug => $tab ) : ?>
                <button
                    class="tab-button <?php echo 0 === $tab_index ? 'is-active' : ''; ?>"
                    role="tab"
                    id="tab-<?php echo esc_attr( $slug ); ?>"
                    aria-controls="panel-<?php echo esc_attr( $slug ); ?>"
                    aria-selected="<?php echo 0 === $tab_index ? 'true' : 'false'; ?>"
                    data-tab-target="panel-<?php echo esc_attr( $slug ); ?>"
                >
                    <?php echo esc_html( $tab['label'] ); ?>
                </button>
                <?php $tab_index++; ?>
            <?php endforeach; ?>
        </div>
        <div class="tab-panels">
            <?php $tab_index = 0; ?>
            <?php foreach ( $experience_tabs as $slug => $tab ) : ?>
                <section
                    id="panel-<?php echo esc_attr( $slug ); ?>"
                    class="tab-panel <?php echo 0 === $tab_index ? 'is-active' : ''; ?>"
                    role="tabpanel"
                    aria-labelledby="tab-<?php echo esc_attr( $slug ); ?>"
                >
                    <?php foreach ( $tab['copy'] as $paragraph ) : ?>
                        <p><?php echo esc_html( $paragraph ); ?></p>
                    <?php endforeach; ?>
                    <div class="panel-cta">
                        <a class="btn" href="#quote"><?php esc_html_e( 'Book a Design Call', 'solid-cement' ); ?></a>
                        <a class="btn btn--ghost" href="#booking"><?php esc_html_e( 'Start with Quick Quote', 'solid-cement' ); ?></a>
                    </div>
                </section>
                <?php $tab_index++; ?>
            <?php endforeach; ?>
        </div>
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
                <p><?php esc_html_e( 'Our artisans layer mineral washes, mica powders, and gold-leaf touches to achieve remarkable depth. The result is a gallery-quality finish that resists fading, chalking, and moisture intrusion.', 'solid-cement' ); ?></p>
            </article>
            <article class="why-card">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l2.09 6.26H21l-5.17 3.76 1.98 6.12L12 15.77l-5.81 3.37 1.98-6.12L3 9.26h6.91z"/></svg>
                <h3><?php esc_html_e( 'Custom Designs', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Collaborate directly with our artisans to dream up heirloom-worthy statement pieces.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'From whimsical garden gnomes that resemble your family to graceful nymph sculptures that anchor a lily pond, we render detailed proofs and iterate until every contour is perfect.', 'solid-cement' ); ?></p>
            </article>
            <article class="why-card">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
                <h3><?php esc_html_e( 'Australian Made', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Handcrafted in Brisbane with locally sourced materials and sustainable practices.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'We partner with regional quarries, use recycled aggregates, and donate surplus mixes to community garden projects so that every commission supports local craftsmanship.', 'solid-cement' ); ?></p>
            </article>
        </div>
        <div class="assurance-progress">
            <div>
                <label for="progress-design"><?php esc_html_e( 'Design Slots Remaining for Spring', 'solid-cement' ); ?></label>
                <progress id="progress-design" max="100" value="28">28%</progress>
            </div>
            <div>
                <label for="progress-restoration"><?php esc_html_e( 'Restoration Schedule Availability', 'solid-cement' ); ?></label>
                <progress id="progress-restoration" max="100" value="45">45%</progress>
            </div>
        </div>
    </div>
</section>
<section class="customer-gallery">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Gallery', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Magic in Real Gardens', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Take a visual stroll through enchanting fairy garden scenes, sculptural courtyards, and resort-inspired patios featuring our handcrafted cement designs. Each project demonstrates how texture, lighting, and planting harmonise to create immersive outdoor stories.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'customer-gallery' ); ?>
    </div>
</section>
<section id="booking" class="booking-teaser">
    <div class="container">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Transform Your Garden — Book a Custom Quote Today', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share your ideas and we will design a tailored concept, timeline, and investment guide. Our consultants respond within two business days with curated inspiration, mood boards, and next steps.', 'solid-cement' ); ?></p>
            <ul class="booking-highlights">
                <li><?php esc_html_e( 'Choose from in-person walkthroughs or video consultations for convenience.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Receive a personalised PDF roadmap detailing materials, finishes, and horticultural pairings.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Upgrade to VIP Concierge for styling swaps aligned with seasonal garden parties.', 'solid-cement' ); ?></li>
            </ul>
        </div>
        <?php get_template_part( 'template-parts/forms/booking' ); ?>
    </div>
</section>
<section class="faq-accordion" aria-labelledby="home-faq-title">
    <div class="container">
        <span class="section-subtitle" id="home-faq-title"><?php esc_html_e( 'FAQs', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Your Questions Answered', 'solid-cement' ); ?></h2>
        <div class="accordion" data-accordion>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'How weather resistant are your cement garden statues?', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'We blend marine-grade cement, quartz aggregate, and nano-sealants to create sculptures that withstand sun, sea spray, and frost. Each piece is tested across intense Queensland summers before it leaves our studio.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'Can you customise colours to match my home palette?', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'Absolutely. Bring paint swatches, fabric samples, or even photos of your favourite blooms. We create bespoke pigment recipes and can finish each statue with metallic leafing, pearlescent washes, or matte mineral stains.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'Do you travel for installations outside Brisbane?', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'Yes. Our team services the Gold Coast, Sunshine Coast, Northern NSW, and regional destinations across Australia. Travel-ready crates keep sculptures safe, and we coordinate local horticultural partners to deliver a seamless install.', 'solid-cement' ); ?></p>
                </div>
            </article>
        </div>
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
        'copy'        => [
            __( 'Tell us about your garden, the finishes you love, and the pieces that caught your eye. Our team will reply with a personalised concept and pricing guide.', 'solid-cement' ),
            __( 'Elementor-ready templates ensure you can continue editing these sections while keeping a cohesive luxury aesthetic.', 'solid-cement' ),
        ],
        'extra_class' => 'page-section--alt',
    ]
);
?>
<section class="blog-preview">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'From the Journal', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Latest Stories', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Stay inspired with expert guides on fairy garden styling, restoration walkthroughs, and design ideas for incorporating bespoke cement sculptures into luxury outdoor living.', 'solid-cement' ); ?></p>
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
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 32 ) ); ?></p>
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
