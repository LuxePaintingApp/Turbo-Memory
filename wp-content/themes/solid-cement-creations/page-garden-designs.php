<?php
/**
 * Garden Designs page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <span class="badge"><?php esc_html_e( 'Landscape Mastery', 'solid-cement' ); ?></span>
        <h1><?php esc_html_e( 'Garden Designs', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Professional garden design services blending architectural cement pieces with lush planting schemes.', 'solid-cement' ); ?></p>
        <div class="chip-row">
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zm0-10v2h14V7H7z"/></svg>
                <?php esc_html_e( 'Blueprint-ready plans', 'solid-cement' ); ?>
            </span>
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93V18h-2v1.93C7.05 19.44 4.56 16.95 4.07 13H6v-2H4.07C4.56 7.05 7.05 4.56 11 4.07V6h2V4.07c3.95.49 6.44 2.98 6.93 6.93H18v2h1.93c-.49 3.95-2.98 6.44-6.93 6.93z"/></svg>
                <?php esc_html_e( 'Sustainable systems', 'solid-cement' ); ?>
            </span>
        </div>
        <button class="icon-btn" type="button" data-popover-toggle="design-popover" aria-label="<?php esc_attr_e( 'View quick project checklist', 'solid-cement' ); ?>">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm-1 15l-4-4 1.41-1.41L11 14.17l4.59-4.58L17 11z"/></svg>
        </button>
        <div class="popover" id="design-popover">
            <div class="popover__panel">
                <p><?php esc_html_e( 'Confirm power access, water connections, and council approvals before installation to keep timelines on track.', 'solid-cement' ); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Design Philosophy', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'We balance creativity and functionality with layered cement sculptures, curated planting palettes, and lighting design that elevates every path.', 'solid-cement' ); ?></p>
            <ul class="list-check">
                <li><?php esc_html_e( 'Site analysis including sunlight, soil, and drainage mapping', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Cement feature design: bird baths, retaining walls, water features', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Outdoor styling: furniture, lighting, seasonal planting calendars', 'solid-cement' ); ?></li>
            </ul>
        </aside>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Intro Section', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Creativity and Balance', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Every garden begins with a conversation about lifestyle, climate, and architectural cues. Our designers sketch masterplans that integrate cement accents, fairy garden nooks, and gnome hideaways in a cohesive landscape.', 'solid-cement' ); ?></p>
            <div class="tabs" data-tabs>
                <div class="tabs__list" role="tablist">
                    <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Residential', 'solid-cement' ); ?></button>
                    <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Commercial', 'solid-cement' ); ?></button>
                    <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Hospitality', 'solid-cement' ); ?></button>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'Tailor pocket gardens, pool surrounds, and rooftop terraces with integrated cement seating, planters, and lighting. We create family-friendly layouts that still look magazine-ready.', 'solid-cement' ); ?></p>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'Design corporate campuses and retail plazas with statement sculptures, wayfinding, and sustainable planting. Elementor layouts showcase each project phase.', 'solid-cement' ); ?></p>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'Craft resort courtyards, winery promenades, and wedding venues with dramatic lighting and immersive fairy garden enclaves.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Portfolio Gallery', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Filter by Project Type', 'solid-cement' ); ?></h2>
        <div class="card-grid">
            <article class="card">
                <h3><?php esc_html_e( 'Urban Courtyard', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Layered planters, mirror-finish bird baths, and linear lighting for city dwellings.', 'solid-cement' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Hinterland Haven', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Terraced slopes with stone-textured retaining walls, fairy garden pockets, and gnome lookouts.', 'solid-cement' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Coastal Retreat', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Salt-resistant cement finishes, dune-friendly grasses, and sheltered dining zones.', 'solid-cement' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Design Process', 'solid-cement' ); ?></h3>
            <div class="stepper">
                <div class="stepper__track">
                    <div class="stepper__item">
                        <span class="stepper__dot">1</span>
                        <p><?php esc_html_e( 'Consult', 'solid-cement' ); ?></p>
                    </div>
                    <div class="stepper__item">
                        <span class="stepper__dot">2</span>
                        <p><?php esc_html_e( 'Design', 'solid-cement' ); ?></p>
                    </div>
                    <div class="stepper__item">
                        <span class="stepper__dot">3</span>
                        <p><?php esc_html_e( 'Create', 'solid-cement' ); ?></p>
                    </div>
                    <div class="stepper__item">
                        <span class="stepper__dot">4</span>
                        <p><?php esc_html_e( 'Install', 'solid-cement' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="slider-display" data-range-output>
                <label for="design-scope"><?php esc_html_e( 'Scope Emphasis', 'solid-cement' ); ?></label>
                <input class="range-input" type="range" id="design-scope" name="design_scope" min="0" max="100" value="50" />
                <span data-output-value>50</span>
            </div>
        </aside>
        <div>
            <div class="accordion" data-accordion>
                <div class="accordion__item is-open">
                    <button class="accordion__trigger" type="button" aria-expanded="true"><?php esc_html_e( 'Consult', 'solid-cement' ); ?></button>
                    <div class="accordion__panel">
                        <p><?php esc_html_e( 'We walk the site, document sunlight and drainage, and discuss your dream for garden statues, fairy garden zones, and relaxation areas.', 'solid-cement' ); ?></p>
                    </div>
                </div>
                <div class="accordion__item">
                    <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'Design', 'solid-cement' ); ?></button>
                    <div class="accordion__panel">
                        <p><?php esc_html_e( 'Our team produces scaled drawings, planting palettes, and cement feature renders. Use Elementor accordions to present each step with supporting imagery.', 'solid-cement' ); ?></p>
                    </div>
                </div>
                <div class="accordion__item">
                    <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'Create & Install', 'solid-cement' ); ?></button>
                    <div class="accordion__panel">
                        <p><?php esc_html_e( 'We fabricate cement elements in-house, coordinate trades, and install lighting and irrigation. Aftercare plans ensure gardens thrive long term.', 'solid-cement' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Client Success Stories', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Testimonials & Videos', 'solid-cement' ); ?></h2>
        <div class="carousel" data-carousel>
            <div class="carousel__track">
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'The Everton Estate', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'A heritage villa with new cement terraces, gnome gardens, and a reflective pond that delights guests.', 'solid-cement' ); ?></p>
                </article>
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Hotel Lumen', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'City rooftop transformed with fairy garden lounges, sculptural lighting, and native planting.', 'solid-cement' ); ?></p>
                </article>
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Cedar Ridge', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Rolling acreage reimagined with tiered decks, bird bath walkways, and outdoor entertaining hubs.', 'solid-cement' ); ?></p>
                </article>
            </div>
            <div class="carousel__controls">
                <button class="carousel__button" type="button" data-carousel-prev><?php esc_html_e( 'Previous', 'solid-cement' ); ?></button>
                <button class="carousel__button" type="button" data-carousel-next><?php esc_html_e( 'Next', 'solid-cement' ); ?></button>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Request a Design', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Tell Us About Your Landscape', 'solid-cement' ); ?></h2>
        <form class="contact-card" method="post" action="#" data-toast-target="design-toast">
            <div class="form-control">
                <label for="design-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                <input type="text" id="design-name" name="design_name" required />
            </div>
            <div class="form-control">
                <label for="design-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                <input type="email" id="design-email" name="design_email" required />
            </div>
            <div class="form-control">
                <label for="design-site"><?php esc_html_e( 'Site Address', 'solid-cement' ); ?></label>
                <input type="text" id="design-site" name="design_site" />
            </div>
            <div class="form-control">
                <label for="design-service"><?php esc_html_e( 'Service Focus', 'solid-cement' ); ?></label>
                <select id="design-service" name="design_service">
                    <option value="concept"><?php esc_html_e( 'Concept Design', 'solid-cement' ); ?></option>
                    <option value="full"><?php esc_html_e( 'Full Design & Install', 'solid-cement' ); ?></option>
                    <option value="restyle"><?php esc_html_e( 'Garden Restyle', 'solid-cement' ); ?></option>
                </select>
            </div>
            <div class="form-control">
                <label class="toggle">
                    <input type="checkbox" name="design_masterplan" />
                    <span class="toggle__slider"></span>
                </label>
                <p><?php esc_html_e( 'Include 3D masterplan render', 'solid-cement' ); ?></p>
            </div>
            <div class="form-control">
                <label for="design-notes"><?php esc_html_e( 'Project Notes', 'solid-cement' ); ?></label>
                <textarea id="design-notes" name="design_notes" rows="4"></textarea>
            </div>
            <button class="btn" type="submit"><?php esc_html_e( 'Request Garden Design', 'solid-cement' ); ?></button>
        </form>
    </div>
</section>

<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Strategic Landscaping', 'solid-cement' ),
        'title'       => __( 'Book a Design Intensive', 'solid-cement' ),
        'copy'        => __( 'We combine garden statues, fairy garden storytelling, and modern cement artistry into one cohesive plan. Submit your brief and receive a custom roadmap.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>

<div class="toast" role="status" aria-live="polite" id="design-toast">
    <span class="toast__badge">🌿</span>
    <p><?php esc_html_e( 'Thank you for sharing your landscape vision. Our designers will be in touch.', 'solid-cement' ); ?></p>
</div>

<?php get_footer(); ?>
