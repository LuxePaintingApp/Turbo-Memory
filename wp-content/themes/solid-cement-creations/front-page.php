<?php
/**
 * Front page layout packed with storytelling content and Elementor-compatible sections.
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
        <div class="hero-slider-wrapper" aria-live="polite">
            <div class="hero-slider" data-hero-slider>
                <?php if ( $hero_query->have_posts() ) : ?>
                    <?php while ( $hero_query->have_posts() ) : $hero_query->the_post(); ?>
                        <article class="hero-slide">
                            <figure>
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'large' );
                                } else {
                                    echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ) . '" alt="Collector gnomes ready to surprise guests" loading="lazy" />';
                                }
                                ?>
                            </figure>
                            <div class="slide-overlay">
                                <h3><?php the_title(); ?></h3>
                                <p class="slide-overlay__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '…' ) ); ?></p>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <article class="hero-slide">
                        <figure>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="Hand sculpted gnome" />
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
            <p>
                <?php esc_html_e( 'Solid Cement Creations crafts statement bird baths, charismatic garden gnomes, and immersive fairy garden worlds that glow with luxurious detailing. From the moment you explore our gallery you will feel the satin touch of artisan sealants, the vibrant pigments blended for Australian sunlight, and the thoughtful design language that turns a simple courtyard into a resort-inspired sanctuary.', 'solid-cement' ); ?>
            </p>
            <p>
                <?php esc_html_e( 'Use the search below to jump directly to inspiration, explore the signature collections, or tap the quote button to start designing a bespoke outdoor installation. Every statue, planter, and miniature fairy door is poured, polished, and perfected in our Brisbane studio with sustainability and longevity in mind.', 'solid-cement' ); ?>
            </p>
            <form class="hero-search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
                <label class="screen-reader-text" for="hero-search-field"><?php esc_html_e( 'Search the site', 'solid-cement' ); ?></label>
                <input type="search" id="hero-search-field" name="s" placeholder="<?php esc_attr_e( 'Search garden gnomes, fairy scenes, restorations…', 'solid-cement' ); ?>" />
                <button class="btn" type="submit"><?php esc_html_e( 'Search Inspiration', 'solid-cement' ); ?></button>
            </form>
            <div class="hero-cta">
                <a class="btn" href="#signature-creations"><?php esc_html_e( 'Explore Collections', 'solid-cement' ); ?></a>
                <a class="btn btn--outline" href="#quote"><?php esc_html_e( 'Get a Quote', 'solid-cement' ); ?></a>
            </div>
            <div class="hero-highlights" role="list">
                <div class="hero-highlight" role="listitem">
                    <span class="badge">New</span>
                    <p><?php esc_html_e( '2024 limited-edition garden gnomes hand finished with pearlescent pigments.', 'solid-cement' ); ?></p>
                </div>
                <div class="hero-highlight" role="listitem">
                    <span class="badge">Eco</span>
                    <p><?php esc_html_e( 'Rain-harvesting bird baths and planters crafted with recycled aggregates.', 'solid-cement' ); ?></p>
                </div>
                <div class="hero-highlight" role="listitem">
                    <span class="badge">Premium</span>
                    <p><?php esc_html_e( 'Signature sealing system keeps colours luminous for more than ten Brisbane summers.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-chips">
    <div class="container">
        <p class="section-lede"><?php esc_html_e( 'Popular searches from garden lovers this month', 'solid-cement' ); ?></p>
        <div class="chip-row" role="list">
            <span class="chip" role="listitem"><?php esc_html_e( 'luxury garden gnomes australia', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'custom fairy garden Brisbane', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'cement bird bath restoration', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'Elementor garden design theme', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'outdoor styling with statues', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section id="signature-creations" class="signature-creations">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Our Signature Creations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Sculpted to Delight', 'solid-cement' ); ?></h2>
        <p class="section-lede">
            <?php esc_html_e( 'Step inside the Solid Cement Creations atelier where polished concrete meets storytelling. Each collection is developed with gardeners who crave bespoke statements that hold strong against the Australian climate. Dive into Gnome World to meet whimsical guardians, wander through our Fairy Garden vignettes for layered landscaping inspiration, and explore Garden Designs where large-scale cement installations bring hospitality-grade ambience to private residences.', 'solid-cement' ); ?>
        </p>
        <?php solidcement_render_signature_creations(); ?>
        <div class="signature-table-wrapper">
            <table>
                <caption><?php esc_html_e( 'Highlights from our hero collections', 'solid-cement' ); ?></caption>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Collection', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Ideal For', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Finishing Touch', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Lead Time', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( 'Collectors seeking personality-packed statues and narrative scenes.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Hand painted gemstone eyes and gold-leaf amulets.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '2–4 weeks', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( 'Families curating magical play spaces and lush container gardens.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Solar-lit pathways and fragrant planting palettes.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '3–5 weeks', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Garden Designs', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( 'Homeowners and designers planning immersive outdoor entertaining areas.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Integrated seating, sculptural planters, and misting features.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '6–10 weeks', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="service-tabs" data-tabs>
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Curated Pathways', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Choose Your Garden Journey', 'solid-cement' ); ?></h2>
        <div class="tabs" role="tablist" aria-label="<?php esc_attr_e( 'Garden experience tabs', 'solid-cement' ); ?>">
            <button type="button" role="tab" aria-selected="true" aria-controls="tab-collectors" id="tab-collectors-trigger" data-tab-target="tab-collectors"><?php esc_html_e( 'Collectors', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-storytellers" id="tab-storytellers-trigger" data-tab-target="tab-storytellers"><?php esc_html_e( 'Storytellers', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-visionaries" id="tab-visionaries-trigger" data-tab-target="tab-visionaries"><?php esc_html_e( 'Visionaries', 'solid-cement' ); ?></button>
        </div>
        <div class="tab-panels">
            <div class="tab-panel is-active" id="tab-collectors" role="tabpanel" aria-labelledby="tab-collectors-trigger" data-tab-panel>
                <p>
                    <?php esc_html_e( 'Our collector pathway is perfect for shoppers who love discovering rare garden gnomes, limited run fairy garden props, and sculptural bird baths. Explore behind-the-scenes footage, read artisan notes about pigment selection, and toggle our finish options to design a statue that feels like an heirloom. Collectors also receive quarterly styling guides packed with trending keywords like “heritage inspired garden gnome” and “luxury fairy garden lighting tips”.', 'solid-cement' ); ?>
                </p>
                <ul>
                    <li><?php esc_html_e( 'Exclusive previews of seasonal launches and collaborative artist drops.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Priority restoration scheduling for cherished vintage figurines.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Complimentary care kit including breathable wraps and eco-friendly sealant refresher.', 'solid-cement' ); ?></li>
                </ul>
            </div>
            <div class="tab-panel" id="tab-storytellers" role="tabpanel" aria-labelledby="tab-storytellers-trigger" hidden data-tab-panel>
                <p>
                    <?php esc_html_e( 'Storytellers are the dreamers designing fairy garden dioramas, interactive children’s spaces, and whimsical event styling. This pathway highlights layered planting ideas, cement mushroom stools, and water features that shimmer at dusk. Use our downloadable story scripts to craft narratives around your statues, and browse our blog for long-tail gems such as “how to build an enchanted fairy garden in small courtyards” or “family friendly garden gnome games for parties”.', 'solid-cement' ); ?>
                </p>
                <ol class="stepper">
                    <li><?php esc_html_e( 'Map your fairy garden storyline with our printable storyboard templates.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Select modular cement pieces that layer texture, colour, and height.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Book our styling team to add lighting, mist effects, and fragrance recommendations.', 'solid-cement' ); ?></li>
                </ol>
            </div>
            <div class="tab-panel" id="tab-visionaries" role="tabpanel" aria-labelledby="tab-visionaries-trigger" hidden data-tab-panel>
                <p>
                    <?php esc_html_e( 'Visionaries lead grand landscaping projects. Whether you are transforming a boutique hotel courtyard or a coastal residence, we supply CAD-ready cement designs, onsite pour consultations, and maintenance schedules. Explore case studies that illustrate how luxury garden design keywords like “concrete resort pool landscaping” and “architectural garden statues Australia” draw the right clients and elevate property value.', 'solid-cement' ); ?>
                </p>
                <div class="feature-list">
                    <article>
                        <h3><?php esc_html_e( 'Design Strategy Call', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Schedule an intensive consultation to review mood boards, sustainability targets, and guest flow before we sketch your bespoke pieces.', 'solid-cement' ); ?></p>
                    </article>
                    <article>
                        <h3><?php esc_html_e( 'Installation Blueprint', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Receive annotated diagrams, drainage instructions, and planter soil recipes to keep each cement installation thriving year-round.', 'solid-cement' ); ?></p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="toggle-showcase">
    <div class="container">
        <div class="toggle-showcase__header">
            <span class="section-subtitle"><?php esc_html_e( 'Tailored Advice', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Residential or Commercial Focus', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Flip the switch to see how we adapt our cement artistry for different environments. Our studio keeps both homeowners and commercial property managers inspired with practical, keyword-rich recommendations.', 'solid-cement' ); ?></p>
        </div>
        <div class="toggle-control" data-toggle-panel>
            <label for="audience-toggle" class="toggle-label">
                <input type="checkbox" id="audience-toggle" aria-controls="toggle-copy" />
                <span class="toggle-switch" aria-hidden="true"></span>
                <span class="toggle-text" data-toggle-text-residential><?php esc_html_e( 'Residential Spotlight', 'solid-cement' ); ?></span>
                <span class="toggle-text" data-toggle-text-commercial hidden><?php esc_html_e( 'Commercial Spotlight', 'solid-cement' ); ?></span>
            </label>
            <div id="toggle-copy" class="toggle-copy">
                <div data-toggle-panel-residential>
                    <p><?php esc_html_e( 'For residential gardens we focus on intimate luxuries: petite fairy doors hidden between rosemary hedges, sculptural cement planters that frame alfresco dining tables, and hand-painted garden gnomes that delight neighbourhood strolls. Clients adore long-tail ideas like “backyard fairy garden design for small spaces” and “luxury garden gnome gifts for new homeowners”.', 'solid-cement' ); ?></p>
                    <p><?php esc_html_e( 'Our residential care guides teach you how to refresh sealants, layer seasonal plantings, and invite pollinators without disrupting cement finishes. We pair each install with maintenance schedules that sync to your smartphone calendar.', 'solid-cement' ); ?></p>
                </div>
                <div data-toggle-panel-commercial hidden>
                    <p><?php esc_html_e( 'Commercial partners lean into spectacle. We engineer statement arches for resort entries, oversized gnome mascots for tourism campaigns, and curated planter collections that guide foot traffic. Our blog shares keyword-rich resources like “commercial garden statue installation checklist” and “cement fairy garden experiences for retail activations”.', 'solid-cement' ); ?></p>
                    <p><?php esc_html_e( 'Facility managers receive training on quick-clean coatings, graffiti-resistant sealants, and emergency touch-up kits. We also provide quarterly strategy calls to align your outdoor decor with marketing campaigns and event calendars.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Why Choose Us', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Elegance in Every Detail', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Solid Cement Creations blends artisan skill with advanced protective science. Our process includes meticulous mould crafting, multi-layer colouring, and long-form curing schedules that honour the integrity of every statue. Discover the pillars that keep our clients returning for new projects season after season.', 'solid-cement' ); ?></p>
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
        <div class="progress-grid">
            <div class="progress-card">
                <p class="progress-label"><?php esc_html_e( 'Bespoke Orders Completed in 2023', 'solid-cement' ); ?></p>
                <div class="progress" data-progress="92">
                    <div class="progress__bar" style="width: 92%"></div>
                </div>
                <p class="progress-value"><?php esc_html_e( '92 projects delivered with five-star reviews mentioning “luxury garden statues” and “Elementor-ready gallery”.', 'solid-cement' ); ?></p>
            </div>
            <div class="progress-card">
                <p class="progress-label"><?php esc_html_e( 'Sustainable Materials Adoption', 'solid-cement' ); ?></p>
                <div class="progress" data-progress="87">
                    <div class="progress__bar" style="width: 87%"></div>
                </div>
                <p class="progress-value"><?php esc_html_e( '87% of cement blends now incorporate recycled aggregates, reducing embodied carbon and supporting eco-conscious gardens.', 'solid-cement' ); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="customer-gallery">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Gallery', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Magic in Real Gardens', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Browse real-life installations submitted by our clients. Each gallery entry includes planting notes, styling tips, and keywords to help you describe similar looks in your own marketing. Tap a tile to open details when using Elementor or customise the gallery further with lightbox widgets.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'customer-gallery' ); ?>
    </div>
</section>
<section id="booking" class="booking-teaser">
    <div class="container">
        <div class="booking-copy">
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Transform Your Garden — Book a Custom Quote Today', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share your ideas and we will design a tailored concept, timeline, and investment guide. Our team responds within two business days with sketches, mood board links, and guidance on SEO-friendly descriptions to help you document the journey.', 'solid-cement' ); ?></p>
            <ul class="booking-benefits">
                <li><?php esc_html_e( 'Choose job type, material preferences, and styling goals with intuitive dropdowns.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Attach reference photos via Elementor’s upload widget or send inspiration links.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Receive a detailed roadmap covering design, pour, finishing, and aftercare milestones.', 'solid-cement' ); ?></li>
            </ul>
            <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
        </div>
        <?php get_template_part( 'template-parts/forms/booking' ); ?>
    </div>
</section>
<?php get_template_part( 'template-parts/components/testimonial-slider' ); ?>
<section class="faq-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Questions', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Frequently Asked Luxury Garden Questions', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'How do you protect bright pink cement finishes from fading?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We layer UV-stable pigments with marine-grade sealants specifically engineered for Australian UV indexes. After installation we provide a care schedule that includes gentle washing steps and reminders to refresh sealant every 24 months. Clients searching for “how to protect pink garden statues” will appreciate the straightforward plan.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Can Solid Cement Creations collaborate with landscape architects using Elementor templates?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Absolutely. Our documentation packs include high-resolution imagery, CAD references, and copywriting snippets optimised for Elementor and other WordPress builders. Use them to populate modules, sliders, and accordions while maintaining brand cohesion and strong keyword performance.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Do you travel for onsite installations and restorations?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We service Brisbane, the Sunshine Coast, and the Gold Coast with full installation crews. For interstate projects we offer virtual consultations, project management coordination, and a fly-in finishing service to ensure every statue receives the same luxurious touch.', 'solid-cement' ); ?></p>
            </details>
        </div>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Detailed Quote', 'solid-cement' ),
        'title'       => __( 'Plan Your Custom Creation', 'solid-cement' ),
        'copy'        => __( 'Tell us about your garden, the finishes you love, and the pieces that caught your eye. Our team will reply with a personalised concept and pricing guide complete with maintenance tips and SEO-friendly wording for your project journal.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<section class="blog-preview">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'From the Journal', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Latest Stories', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Explore deep dives into fairy garden lighting, restorative cement techniques, and landscaping masterclasses. Each post is written with long-tail keywords to help you rank for terms like “cement garden statue care tips” and “Elementor fairy garden inspiration layouts”.', 'solid-cement' ); ?></p>
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
                            <p class="post-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></p>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 30 ) ); ?></p>
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
<section class="notification">
    <div class="container">
        <div class="toast" role="status" aria-live="polite">
            <strong><?php esc_html_e( 'Studio Update', 'solid-cement' ); ?></strong>
            <p><?php esc_html_e( 'Our next open studio weekend is scheduled for early spring. RSVP through the contact page to secure a guided tour of our cement pouring process and fairy garden styling bays.', 'solid-cement' ); ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
