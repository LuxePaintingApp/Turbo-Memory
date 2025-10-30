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
            <div class="skeleton-card" aria-hidden="true"></div>
        </div>
        <div class="hero-content">
            <span class="badge"><?php esc_html_e( 'Boutique Concrete Atelier', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Handcrafted Luxury for Your Garden', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'From whimsical gnomes to immersive fairy gardens, our concrete garden ornaments elevate every outdoor space with artisanal finishes.', 'solid-cement' ); ?></p>
            <p><?php esc_html_e( 'Solid Cement Creations is renowned across Australia for lush landscaping accents that photograph beautifully, withstand harsh climates, and celebrate the playful soul of great garden design. Every statue, bird bath, or fairy house is sketched, poured, polished, and sealed under one roof so you can trust the detail, durability, and delight.', 'solid-cement' ); ?></p>
            <div class="hero-cta">
                <a class="btn" href="#signature-creations"><?php esc_html_e( 'Explore Collections', 'solid-cement' ); ?></a>
                <a class="btn btn--outline" href="#quote"><?php esc_html_e( 'Get a Quote', 'solid-cement' ); ?></a>
                <button class="icon-btn tooltip" type="button" data-modal-open="service-modal" aria-label="<?php esc_attr_e( 'Open service lookbook', 'solid-cement' ); ?>">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3zm0 2.18L6 8.118v7.764l6 2.94 6-2.94V8.118L12 5.18z"/></svg>
                    <span class="tooltip__bubble"><?php esc_html_e( 'Peek inside our 2024 lookbook', 'solid-cement' ); ?></span>
                </button>
            </div>
            <div class="chip-row">
                <span class="chip">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01z"/></svg>
                    <?php esc_html_e( 'Award-winning garden statues', 'solid-cement' ); ?>
                </span>
                <span class="chip">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a5 5 0 015 5c0 2.89-2.11 5.72-5 8.7-2.89-2.98-5-5.81-5-8.7a5 5 0 015-5zm0 2a3 3 0 00-3 3c0 1.86 1.53 4.11 3 5.94 1.47-1.83 3-4.08 3-5.94a3 3 0 00-3-3z"/></svg>
                    <?php esc_html_e( 'Custom-mapped garden journeys', 'solid-cement' ); ?>
                </span>
                <span class="chip">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4l1.41 1.41L8.83 10H20v2H8.83l4.58 4.59L12 18l-8-8 8-8z"/></svg>
                    <?php esc_html_e( 'Mobile-first concierge planning', 'solid-cement' ); ?>
                </span>
            </div>
            <div class="popover" id="hero-popover">
                <button class="btn btn--outline" type="button" data-popover-toggle="hero-popover"><?php esc_html_e( 'What’s included in every project?', 'solid-cement' ); ?></button>
                <div class="popover__panel">
                    <p><?php esc_html_e( 'Our designers provide sketches, palette studies, and finishing schedules that consider your irrigation, sunlight, and seasonal planting calendar.', 'solid-cement' ); ?></p>
                    <ul class="list-check">
                        <li><?php esc_html_e( 'Weather-sealed cement mixes blended for your postcode', 'solid-cement' ); ?></li>
                        <li><?php esc_html_e( 'On-site styling with sustainable mulches and lighting cues', 'solid-cement' ); ?></li>
                        <li><?php esc_html_e( 'Follow-up maintenance guide plus direct artisan hotline', 'solid-cement' ); ?></li>
                    </ul>
                </div>
            </div>
            <div class="app-bar">
                <span class="badge"><?php esc_html_e( 'Mobile Booking', 'solid-cement' ); ?></span>
                <p><?php esc_html_e( 'Tap the quick moodboard drawer to save ideas instantly while strolling through your garden — the theme is engineered for Elementor so you can edit layouts on the go.', 'solid-cement' ); ?></p>
                <button class="btn" type="button" data-drawer-open><?php esc_html_e( 'Open Moodboard Drawer', 'solid-cement' ); ?></button>
            </div>
        </div>
    </div>
</section>

<section class="page-section home-overview">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Garden Essentials Index', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'Navigate our luxury cement catalog with quick badges for the features most loved by Australian gardeners.', 'solid-cement' ); ?></p>
            <div class="badge-row">
                <span class="badge"><?php esc_html_e( 'Fairy Garden Lighting', 'solid-cement' ); ?></span>
                <span class="badge"><?php esc_html_e( 'Bird Bath Sculpting', 'solid-cement' ); ?></span>
                <span class="badge"><?php esc_html_e( 'Gnome Personalisation', 'solid-cement' ); ?></span>
                <span class="badge"><?php esc_html_e( 'Landscape Styling', 'solid-cement' ); ?></span>
            </div>
            <ul>
                <li><?php esc_html_e( 'Signature cement mixes for coastal, hinterland, and alpine climates', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Elementor-ready sections for duplicating hero banners, galleries, and booking forms', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Responsive components built for mobile-first browsing and quick quote submissions', 'solid-cement' ); ?></li>
            </ul>
        </aside>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Immersive Storytelling', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'A Seamless Journey from Inspiration to Installation', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Home gardeners, boutique landscapers, and hospitality venues trust Solid Cement Creations for grand entrances, whimsical courtyards, and fairy-tale pathways. Our Elementor-friendly WordPress theme mirrors that experience with layout sections that guide visitors from visual inspiration to instant booking. Every page includes layered storytelling, interactive UI pieces, and compelling copywriting focused on garden statues, garden gnomes, fairy garden ideas, and bespoke garden design.', 'solid-cement' ); ?></p>
            <p><?php esc_html_e( 'The theme ships with curated typography, bright pink navigation for brand recognition, and mobile sliders that showcase hero imagery of gnomes, bird baths, and lush outdoor vignettes. Long-form copy across each section delivers SEO-friendly keyword phrases, ensuring you attract homeowners searching for premium fairy garden installations, weather-ready bird baths, or custom cement restoration services.', 'solid-cement' ); ?></p>
            <div class="tabs" data-tabs>
                <div class="tabs__list" role="tablist">
                    <button class="tabs__button" role="tab" type="button"><?php esc_html_e( 'Garden Statues', 'solid-cement' ); ?></button>
                    <button class="tabs__button" role="tab" type="button"><?php esc_html_e( 'Fairy Garden Ideas', 'solid-cement' ); ?></button>
                    <button class="tabs__button" role="tab" type="button"><?php esc_html_e( 'Luxury Garden Design', 'solid-cement' ); ?></button>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'Explore towering garden statues with smooth satin finishes, antiqued patinas, and storybook characters that complement modern architecture. Each statue is weight-balanced for safety, sealed for shade or full sun, and backed by a restoration program that keeps your showpieces shimmering through every season.', 'solid-cement' ); ?></p>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'Design immersive fairy gardens with mini mushroom cottages, LED fireflies, and textured pathways. Our team maps plant pairings, pebble palettes, and water features to ensure each fairy garden thrives in Australian climates while delivering magical photo-ready scenes for social media and events.', 'solid-cement' ); ?></p>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'Commission full garden design blueprints complete with drainage plans, lighting schedules, and statement sculptures. The Elementor sections highlight your process with step-by-step visuals, interactive timelines, and contact forms that invite clients to book a consultation instantly.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="signature-creations" class="signature-creations">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Our Signature Creations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Sculpted to Delight', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Select from hero sections that highlight Gnome World, Fairy Garden, and Garden Design stories. Each card is Elementor-compatible, features descriptive text for SEO, and drives visitors deeper into the site. Use these cards to broadcast product categories, announce seasonal launches, or spotlight restoration success stories.', 'solid-cement' ); ?></p>
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
                <p><?php esc_html_e( 'Every piece is sealed with premium coatings for a satin sheen built to withstand Australian summers and keep your concrete garden ornaments glowing. Shadow-casting ridges and glinting metallic washes ensure the sculptures look sensational in sunrise or twilight.', 'solid-cement' ); ?></p>
            </article>
            <article class="why-card">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l2.09 6.26H21l-5.17 3.76 1.98 6.12L12 15.77l-5.81 3.37 1.98-6.12L3 9.26h6.91z"/></svg>
                <h3><?php esc_html_e( 'Custom Designs', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Collaborate directly with our artisans to dream up heirloom-worthy statement pieces. Choose hat styles for your gnomes, select mosaic tiles for bird baths, and specify lighting niches that turn fairy gardens into night-time theatres.', 'solid-cement' ); ?></p>
            </article>
            <article class="why-card">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
                <h3><?php esc_html_e( 'Australian Made', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Handcrafted in Brisbane with locally sourced materials and sustainable practices. Our studio recycles wash water, uses solar kilns, and supports local growers who provide foliage for staging photos and events.', 'solid-cement' ); ?></p>
            </article>
        </div>
        <div class="accordion" data-accordion>
            <div class="accordion__item is-open">
                <button class="accordion__trigger" type="button" aria-expanded="true"><?php esc_html_e( 'How do we deliver luxury garden statues?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'Our logistics team wraps each cement garden statue in breathable padding, ships Australia-wide, and provides video guides for placement. On-site installation ensures every statue is seated level, anchored for safety, and surrounded by plants that complement the cement tones.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <div class="accordion__item">
                <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'What makes our fairy garden layouts unique?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'We map fairy garden staging with layered heights, glittering resin streams, and sensors that trigger soundscapes at dusk. Each layout is documented in Elementor templates so you can refresh sections as you expand your enchanted spaces.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <div class="accordion__item">
                <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'How do bookings stay mobile-friendly?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'Sticky buttons, quick forms, and responsive typography guide clients toward your booking funnel. The sticky “Book a Quote” CTA is mirrored in the drawer, header, and footer for seamless conversions on phones and tablets.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="customer-gallery">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Gallery', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Magic in Real Gardens', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Swipe through real-life installations ranging from pocket-sized balcony gardens to sprawling estate makeovers. Clients love how the chip-inspired navigation keeps them oriented while they browse projects that mix garden gnomes, fairy garden lighting, and architectural bird baths.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'customer-gallery' ); ?>
    </div>
</section>

<section class="page-section home-progress" data-progress="92">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Project Tracker', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'Follow the journey from discovery call to final garden styling. The spinner reflects active artisan hours while the progress bar celebrates milestones.', 'solid-cement' ); ?></p>
            <div class="spinner" aria-hidden="true"></div>
        </aside>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Booking Timeline', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Transform Your Garden — Book a Custom Quote Today', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share your ideas and we will design a tailored concept, timeline, and investment guide. This Elementor-ready section includes descriptive copy for SEO, a progress animation, and form fields for lead capture. It keeps visitors engaged as they move from curiosity into confident booking.', 'solid-cement' ); ?></p>
            <div class="progress-track" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-track__bar"></div>
            </div>
            <div class="stepper">
                <div class="stepper__track">
                    <div class="stepper__item">
                        <span class="stepper__dot">1</span>
                        <p><?php esc_html_e( 'Send your garden wish list', 'solid-cement' ); ?></p>
                    </div>
                    <div class="stepper__item">
                        <span class="stepper__dot">2</span>
                        <p><?php esc_html_e( 'Receive a concept moodboard', 'solid-cement' ); ?></p>
                    </div>
                    <div class="stepper__item">
                        <span class="stepper__dot">3</span>
                        <p><?php esc_html_e( 'Approve finishes &amp; timeline', 'solid-cement' ); ?></p>
                    </div>
                    <div class="stepper__item">
                        <span class="stepper__dot">4</span>
                        <p><?php esc_html_e( 'Installation &amp; reveal', 'solid-cement' ); ?></p>
                    </div>
                </div>
            </div>
            <?php get_template_part( 'template-parts/forms/booking' ); ?>
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
        'copy'        => __( 'Tell us about your garden, the finishes you love, and the pieces that caught your eye. Our team will reply with a personalised concept and pricing guide.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>

<section class="blog-preview">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'From the Journal', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Latest Stories', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Dive into gardening tips, restoration advice, and design-forward storytelling that positions your brand as the go-to authority on luxury cement garden creations. Each article preview uses badges, chips, and accessible buttons to encourage deep exploration and newsletter sign-ups.', 'solid-cement' ); ?></p>
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
                            <span class="badge"><?php esc_html_e( 'Garden Wisdom', 'solid-cement' ); ?></span>
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

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Garden Knowledge Base', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Frequently Asked Fairy Garden Questions', 'solid-cement' ); ?></h2>
        <div class="accordion" data-accordion>
            <div class="accordion__item is-open">
                <button class="accordion__trigger" type="button" aria-expanded="true"><?php esc_html_e( 'How do I choose plants for my fairy garden?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'Select compact herbs, trailing groundcovers, and seasonal flowers that echo your fairy statues. We provide planting diagrams, watering schedules, and styling notes inside the Elementor template so you can update the advice as trends evolve.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <div class="accordion__item">
                <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'What maintenance keeps bird baths sparkling?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'Use eco-friendly cleaners, refresh water weekly, and add our protective wax each quarter. The restoration page dives deeper into sealing techniques, while the blog shares long-form tutorials that boost SEO for terms like “how to clean a cement bird bath”.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <div class="accordion__item">
                <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'Can I book virtual garden design consults?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'Absolutely. Our booking form captures your preferred platform, uploads inspiration photos, and schedules a video call so we can sketch custom cement installations in real time.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="toast" role="status" aria-live="polite" id="booking-toast">
    <span class="toast__badge">✓</span>
    <p><?php esc_html_e( 'Thank you! Your garden dreams are on their way to our artisans.', 'solid-cement' ); ?></p>
</div>

<div class="modal" id="service-modal" role="dialog" aria-modal="true" aria-labelledby="service-modal-title">
    <div class="modal__dialog">
        <button class="icon-btn modal__close" type="button" data-modal-close aria-label="<?php esc_attr_e( 'Close modal', 'solid-cement' ); ?>">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18.3 5.71L12 12l6.3 6.29-1.41 1.42L10.59 13.4 4.3 19.71 2.89 18.3 9.17 12 2.89 5.71 4.3 4.29 10.59 10.6l6.3-6.3z"/></svg>
        </button>
        <h2 id="service-modal-title"><?php esc_html_e( 'Service Lookbook', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Download a PDF-ready brief that outlines every garden service, pricing tier, and maintenance plan. The modal is styled for Elementor compatibility so you can swap imagery or copy in seconds.', 'solid-cement' ); ?></p>
        <ul class="list-check">
            <li><?php esc_html_e( 'Gnome World character catalogue with seasonal releases', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Fairy garden styling checklists and planting palettes', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Garden design masterplans with milestone reporting', 'solid-cement' ); ?></li>
        </ul>
        <button class="btn" type="button" data-modal-close><?php esc_html_e( 'Close &amp; Keep Exploring', 'solid-cement' ); ?></button>
    </div>
</div>

<div class="drawer" data-drawer>
    <div class="drawer__handle" aria-hidden="true"></div>
    <h2><?php esc_html_e( 'Quick Moodboard Capture', 'solid-cement' ); ?></h2>
    <p><?php esc_html_e( 'Snap ideas while you roam the garden. This sheet acts like a mini CRM: add colours, lighting notes, or gnome poses and we will store them for your project briefing.', 'solid-cement' ); ?></p>
    <form class="contact-card" method="post" action="#" data-toast-target="booking-toast">
        <div class="form-control">
            <label for="drawer-idea"><?php esc_html_e( 'Moodboard Title', 'solid-cement' ); ?></label>
            <input type="text" id="drawer-idea" name="drawer_idea" placeholder="Twilight Fairy Garden" />
        </div>
        <div class="form-control">
            <label for="drawer-colour"><?php esc_html_e( 'Colour Palette', 'solid-cement' ); ?></label>
            <input type="text" id="drawer-colour" name="drawer_colour" placeholder="Blush pink, moss green, stone grey" />
        </div>
        <div class="form-control">
            <label for="drawer-notes"><?php esc_html_e( 'Quick Notes', 'solid-cement' ); ?></label>
            <textarea id="drawer-notes" name="drawer_notes" rows="3"></textarea>
        </div>
        <button class="btn" type="submit" data-drawer-close><?php esc_html_e( 'Save Moodboard Notes', 'solid-cement' ); ?></button>
    </form>
</div>

<?php
get_footer();
