<?php
/**
 * Fairy Garden page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <span class="badge"><?php esc_html_e( 'Enchanting Installations', 'solid-cement' ); ?></span>
        <h1><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Immersive fairy garden design with layered lighting, handcrafted pathways, and custom cement decor.', 'solid-cement' ); ?></p>
        <div class="app-bar">
            <span class="badge"><?php esc_html_e( 'Design Tip', 'solid-cement' ); ?></span>
            <p><?php esc_html_e( 'Use the toggle to view night mode inspiration before submitting your fairy garden brief.', 'solid-cement' ); ?></p>
            <label class="toggle" aria-label="<?php esc_attr_e( 'Enable night mode preview', 'solid-cement' ); ?>">
                <input type="checkbox" checked />
                <span class="toggle__slider"></span>
            </label>
            <button class="icon-btn" type="button" data-popover-toggle="fairy-popover" aria-label="<?php esc_attr_e( 'View styling checklist', 'solid-cement' ); ?>">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm1 15h-2v-2h2zm0-4h-2V7h2z"/></svg>
            </button>
        </div>
        <div class="popover" id="fairy-popover">
            <div class="popover__panel">
                <p><?php esc_html_e( 'Remember to mix textures: gravel, moss, and miniature stepping stones create depth in fairy garden photography.', 'solid-cement' ); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Fairy Garden Moodboard', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'Layered scenes combine miniature statues, mossy groundcovers, and sparkling LED lighting. Use this checklist to plan your dream fairy garden.', 'solid-cement' ); ?></p>
            <ul class="list-check">
                <li><?php esc_html_e( 'Storyline: enchanted forest, seaside cove, or celestial courtyard', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Scale: terrarium tabletop, patio planter, or full backyard nook', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Lighting: twinkle strands, hidden uplights, or glowing mushrooms', 'solid-cement' ); ?></li>
            </ul>
        </aside>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Gallery Carousel', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Before & After Transformations', 'solid-cement' ); ?></h2>
            <div class="carousel" data-carousel>
                <div class="carousel__track">
                    <article class="carousel__item card">
                        <h3><?php esc_html_e( 'Courtyard Revival', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'From bare pavers to layered planters, miniature bridges, and a central cement fairy house.', 'solid-cement' ); ?></p>
                    </article>
                    <article class="carousel__item card">
                        <h3><?php esc_html_e( 'Balcony Enclave', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Self-watering planters, drought-friendly herbs, and a sparkling waterfall wall.', 'solid-cement' ); ?></p>
                    </article>
                    <article class="carousel__item card">
                        <h3><?php esc_html_e( 'Forest Retreat', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Multi-tiered landscaping with mossy pathways, bird bath streams, and moonlit lanterns.', 'solid-cement' ); ?></p>
                    </article>
                </div>
                <div class="carousel__controls">
                    <button class="carousel__button" type="button" data-carousel-prev><?php esc_html_e( 'Previous', 'solid-cement' ); ?></button>
                    <button class="carousel__button" type="button" data-carousel-next><?php esc_html_e( 'Next', 'solid-cement' ); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Inspiration', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Curated Ideas for Outdoor Magic', 'solid-cement' ); ?></h2>
        <div class="page-layout">
            <aside class="page-sidebar">
                <div class="tabs" data-tabs>
                    <div class="tabs__list" role="tablist">
                        <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Miniature Architecture', 'solid-cement' ); ?></button>
                        <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Planting Palettes', 'solid-cement' ); ?></button>
                        <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Lighting Plans', 'solid-cement' ); ?></button>
                    </div>
                    <div class="tabs__panel" role="tabpanel">
                        <p><?php esc_html_e( 'Craft miniature cottages, mushroom gazebos, and bridge walkways using cement moulds. Add peek-through windows with warm LED flickers for night-time charm.', 'solid-cement' ); ?></p>
                    </div>
                    <div class="tabs__panel" role="tabpanel">
                        <p><?php esc_html_e( 'Mix thyme, dwarf mondo grass, and trailing succulents to create lush textures. Pair soft greens with blush florals to complement our pastel cement statues.', 'solid-cement' ); ?></p>
                    </div>
                    <div class="tabs__panel" role="tabpanel">
                        <p><?php esc_html_e( 'Layer uplights, string lights, and glow stones. Use sliders in Elementor to show day-to-night transitions for SEO-rich storytelling about fairy garden lighting.', 'solid-cement' ); ?></p>
                    </div>
                </div>
            </aside>
            <div>
                <div class="card-grid">
                    <article class="card">
                        <h3><?php esc_html_e( 'Waterfall Focus', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Install recirculating streams with polished cement basins. Add glass beads and koi figurines for glimmer.', 'solid-cement' ); ?></p>
                    </article>
                    <article class="card">
                        <h3><?php esc_html_e( 'Storybook Seating', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Mini benches and tea sets transform patios into storytelling nooks for kids and guests.', 'solid-cement' ); ?></p>
                    </article>
                    <article class="card">
                        <h3><?php esc_html_e( 'Glow Gardens', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Phosphorescent pigments highlight pathways, making twilight garden tours unforgettable.', 'solid-cement' ); ?></p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Fairy Garden Packages', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Choose Your Experience', 'solid-cement' ); ?></h2>
        <div class="table-wrapper">
            <table class="luxe-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e( 'Package', 'solid-cement' ); ?></th>
                        <th><?php esc_html_e( 'Includes', 'solid-cement' ); ?></th>
                        <th><?php esc_html_e( 'Best For', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e( 'Spark', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Container garden, two statues, LED micro lights', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Apartment balconies', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Glow', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Raised bed design, custom pathways, curated plants', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Townhouse courtyards', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Enchantment', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Full landscape plan, bird bath water features, event styling', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Boutique venues & hospitality', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Request Your Fairy Garden', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'Use the form to book a consultation. The slider lets you indicate complexity while the toggle reserves aftercare check-ins.', 'solid-cement' ); ?></p>
        </aside>
        <div>
            <form class="contact-card" method="post" action="#" data-toast-target="fairy-toast">
                <div class="form-control">
                    <label for="fairy-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                    <input type="text" id="fairy-name" name="fairy_name" required />
                </div>
                <div class="form-control">
                    <label for="fairy-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                    <input type="email" id="fairy-email" name="fairy_email" required />
                </div>
                <div class="form-control">
                    <label for="fairy-location"><?php esc_html_e( 'Location', 'solid-cement' ); ?></label>
                    <input type="text" id="fairy-location" name="fairy_location" placeholder="<?php esc_attr_e( 'Brisbane backyard', 'solid-cement' ); ?>" />
                </div>
                <div class="form-control" data-range-output>
                    <label for="fairy-scale"><?php esc_html_e( 'Project Scale', 'solid-cement' ); ?></label>
                    <div class="slider-display">
                        <input class="range-input" type="range" id="fairy-scale" name="fairy_scale" min="1" max="10" value="5" />
                        <span data-output-value>5</span>
                    </div>
                </div>
                <div class="form-control">
                    <label class="toggle">
                        <input type="checkbox" name="fairy_aftercare" checked />
                        <span class="toggle__slider"></span>
                    </label>
                    <p><?php esc_html_e( 'Include seasonal aftercare visits', 'solid-cement' ); ?></p>
                </div>
                <div class="form-control">
                    <label for="fairy-notes"><?php esc_html_e( 'Project Notes', 'solid-cement' ); ?></label>
                    <textarea id="fairy-notes" name="fairy_notes" rows="4"></textarea>
                </div>
                <button class="btn" type="submit"><?php esc_html_e( 'Book Fairy Garden Consultation', 'solid-cement' ); ?></button>
            </form>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Booking Section', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Bring the Magic of Fairy Garden to Your Home', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Every fairy garden project begins with a collaborative design workshop. We sketch storylines, curate cement statues, and plan lighting to ensure the installation glows day and night.', 'solid-cement' ); ?></p>
        <div class="pagination">
            <span class="current">Discovery</span>
            <span><?php esc_html_e( 'Design', 'solid-cement' ); ?></span>
            <span><?php esc_html_e( 'Install', 'solid-cement' ); ?></span>
            <span><?php esc_html_e( 'Aftercare', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>

<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Plan Your Fairy Garden', 'solid-cement' ),
        'title'       => __( 'Book a Creative Session', 'solid-cement' ),
        'copy'        => __( 'Tell us about the spaces you want to transform, the fairy garden statues you adore, and the atmosphere you imagine. We will craft a tailored proposal and timeline.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>

<div class="toast" role="status" aria-live="polite" id="fairy-toast">
    <span class="toast__badge">✨</span>
    <p><?php esc_html_e( 'Your fairy garden request is sparkling in our inbox!', 'solid-cement' ); ?></p>
</div>

<?php get_footer(); ?>
