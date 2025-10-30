<?php
/**
 * Garden Designs page template with strategic storytelling and interactive elements.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'solid-cement' ); ?>">
    <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'solid-cement' ); ?></a></li>
        <li aria-current="page"><?php esc_html_e( 'Garden Designs', 'solid-cement' ); ?></li>
    </ol>
</nav>
<section class="page-hero garden-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Garden Design Services', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Elegant outdoor concepts that balance structure, planting, and custom cement garden statues. From chic inner-city courtyards to sprawling coastal estates, we shape spaces that photograph beautifully and perform flawlessly.', 'solid-cement' ); ?></p>
        <div class="hero-cta">
            <a class="btn" href="#garden-portfolio"><?php esc_html_e( 'See Signature Spaces', 'solid-cement' ); ?></a>
            <a class="btn btn--outline" href="#design-request"><?php esc_html_e( 'Request a Masterplan', 'solid-cement' ); ?></a>
        </div>
        <div class="chip-row" role="list">
            <span class="chip" role="listitem"><?php esc_html_e( 'luxury garden design brisbane', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'cement landscaping australia', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'outdoor styling elementor template', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section id="garden-portfolio" class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Portfolio', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Signature Spaces', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Explore large-scale installations featuring sculptural planters, bespoke seating, and lighting strategies. Each project includes a downloadable Elementor section so you can adapt layouts for your own marketing.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'garden-design' ); ?>
    </div>
</section>
<section class="page-section page-section--alt design-matrix" data-tabs>
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Process', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From Idea to Installation', 'solid-cement' ); ?></h2>
        <div class="tabs" role="tablist" aria-label="<?php esc_attr_e( 'Design stages', 'solid-cement' ); ?>">
            <button type="button" role="tab" aria-selected="true" aria-controls="tab-consult" id="tab-consult-trigger" data-tab-target="tab-consult"><?php esc_html_e( 'Consult', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-design" id="tab-design-trigger" data-tab-target="tab-design"><?php esc_html_e( 'Design', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-create" id="tab-create-trigger" data-tab-target="tab-create"><?php esc_html_e( 'Create', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-install" id="tab-install-trigger" data-tab-target="tab-install"><?php esc_html_e( 'Install', 'solid-cement' ); ?></button>
        </div>
        <div class="tab-panels">
            <div class="tab-panel is-active" id="tab-consult" role="tabpanel" aria-labelledby="tab-consult-trigger" data-tab-panel>
                <p><?php esc_html_e( 'We walk your space, listen to your wishlist, and capture measurements. Our consult kit includes questionnaires for residential and commercial clients, ensuring we address accessibility, maintenance, and branding objectives.', 'solid-cement' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'Site photography, sun mapping, and soil testing.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Keyword research to help you publish project updates with SEO power.', 'solid-cement' ); ?></li>
                </ul>
            </div>
            <div class="tab-panel" id="tab-design" role="tabpanel" aria-labelledby="tab-design-trigger" hidden data-tab-panel>
                <p><?php esc_html_e( 'Concept sketches, mood boards, and 3D previews bring your garden to life. We design with path circulation, focal sculptures, and planting palettes that thrive in Brisbane and beyond.', 'solid-cement' ); ?></p>
                <div class="design-grid">
                    <article>
                        <h3><?php esc_html_e( 'Concept Deck', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Receive a PDF deck featuring mood imagery, palette swatches, and sample Elementor sections.', 'solid-cement' ); ?></p>
                    </article>
                    <article>
                        <h3><?php esc_html_e( 'Budget Planner', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Transparent pricing tables outline cement works, planting, irrigation, and lighting.', 'solid-cement' ); ?></p>
                    </article>
                </div>
            </div>
            <div class="tab-panel" id="tab-create" role="tabpanel" aria-labelledby="tab-create-trigger" hidden data-tab-panel>
                <p><?php esc_html_e( 'Our artisans pour, sculpt, and finish every cement detail with precision, from paving to custom statues. We coordinate fabrication timelines with horticulture schedules to ensure seamless installation.', 'solid-cement' ); ?></p>
                <ol class="stepper">
                    <li><?php esc_html_e( 'Fabricate cement components in our Brisbane studio.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Mock up layouts in augmented reality for approval.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Seal and package elements for transport.', 'solid-cement' ); ?></li>
                </ol>
            </div>
            <div class="tab-panel" id="tab-install" role="tabpanel" aria-labelledby="tab-install-trigger" hidden data-tab-panel>
                <p><?php esc_html_e( 'We handle delivery, placement, and styling for a photo-ready reveal. Our team sets up irrigation, lighting programs, and provides maintenance training. You receive a launch kit for press releases and social media.', 'solid-cement' ); ?></p>
                <div class="progress-grid">
                    <div class="progress-card">
                        <p class="progress-label"><?php esc_html_e( 'Onsite Coordination', 'solid-cement' ); ?></p>
                        <div class="progress" data-progress="85"><div class="progress__bar" style="width: 85%"></div></div>
                        <p class="progress-value"><?php esc_html_e( 'Project managers ensure trades, deliveries, and styling align with the design vision.', 'solid-cement' ); ?></p>
                    </div>
                    <div class="progress-card">
                        <p class="progress-label"><?php esc_html_e( 'Launch Support', 'solid-cement' ); ?></p>
                        <div class="progress" data-progress="100"><div class="progress__bar" style="width: 100%"></div></div>
                        <p class="progress-value"><?php esc_html_e( 'Receive photography, copywriting prompts, and Elementor modules for reveal campaigns.', 'solid-cement' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section garden-metrics">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Performance Insights', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Results That Speak Volumes', 'solid-cement' ); ?></h2>
        <div class="metrics-grid">
            <article class="card">
                <h3><?php esc_html_e( 'Lifestyle Upgrade', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Clients report spending 42% more time outdoors after a Solid Cement garden redesign.', 'solid-cement' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Property Value', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Real estate partners note up to 18% value increases for homes featuring our luxury garden statues and entertaining zones.', 'solid-cement' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Maintenance Ease', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Smart irrigation, hardy plant palettes, and resilient cement finishes reduce weekly upkeep to under 20 minutes.', 'solid-cement' ); ?></p>
            </article>
        </div>
        <div class="garden-table-wrapper">
            <table>
                <caption><?php esc_html_e( 'Project Snapshot', 'solid-cement' ); ?></caption>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Project Type', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Scope', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Timeline', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Keywords', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e( 'Boutique Hotel Courtyard', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Sculptural planters, bird bath plaza, illuminated pathways.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '12 weeks', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'resort garden design australia', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Modern Family Retreat', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Outdoor kitchen, fairy garden zone, layered seating.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '10 weeks', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'family backyard renovation brisbane', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Urban Rooftop Oasis', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Lightweight planters, wind-resistant sculptures, private lounges.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '8 weeks', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'luxury rooftop garden design', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="design-request" class="page-section design-request">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Request', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Schedule Your Garden Masterplan', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Complete the planning form to receive a tailored proposal with layout options, cement sculpture recommendations, and horticultural strategies. We include Elementor-ready copy blocks to help you document the transformation.', 'solid-cement' ); ?></p>
        <form class="contact-card" method="post" action="#">
            <div class="form-row">
                <div class="form-control">
                    <label for="design-name"><?php esc_html_e( 'Full Name', 'solid-cement' ); ?></label>
                    <input type="text" id="design-name" name="design_name" required />
                </div>
                <div class="form-control">
                    <label for="design-email"><?php esc_html_e( 'Email Address', 'solid-cement' ); ?></label>
                    <input type="email" id="design-email" name="design_email" required />
                </div>
            </div>
            <div class="form-control">
                <label for="design-location"><?php esc_html_e( 'Project Location', 'solid-cement' ); ?></label>
                <input type="text" id="design-location" name="design_location" />
            </div>
            <div class="form-row">
                <div class="form-control">
                    <label for="design-budget"><?php esc_html_e( 'Investment Range', 'solid-cement' ); ?></label>
                    <select id="design-budget" name="design_budget">
                        <option value="under50"><?php esc_html_e( 'Under $50k', 'solid-cement' ); ?></option>
                        <option value="50-100"><?php esc_html_e( '$50k – $100k', 'solid-cement' ); ?></option>
                        <option value="100plus"><?php esc_html_e( 'Over $100k', 'solid-cement' ); ?></option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="design-style"><?php esc_html_e( 'Preferred Style', 'solid-cement' ); ?></label>
                    <select id="design-style" name="design_style">
                        <option value="contemporary"><?php esc_html_e( 'Contemporary Luxury', 'solid-cement' ); ?></option>
                        <option value="coastal"><?php esc_html_e( 'Coastal Sanctuary', 'solid-cement' ); ?></option>
                        <option value="botanical"><?php esc_html_e( 'Botanical Fairy Tale', 'solid-cement' ); ?></option>
                    </select>
                </div>
            </div>
            <fieldset class="form-control">
                <legend><?php esc_html_e( 'Key Features', 'solid-cement' ); ?></legend>
                <label><input type="checkbox" name="design_features[]" value="pool" /> <?php esc_html_e( 'Pool integration', 'solid-cement' ); ?></label>
                <label><input type="checkbox" name="design_features[]" value="fire" /> <?php esc_html_e( 'Fire feature', 'solid-cement' ); ?></label>
                <label><input type="checkbox" name="design_features[]" value="fairy" /> <?php esc_html_e( 'Fairy garden zone', 'solid-cement' ); ?></label>
                <label><input type="checkbox" name="design_features[]" value="commercial" /> <?php esc_html_e( 'Commercial foot traffic planning', 'solid-cement' ); ?></label>
            </fieldset>
            <div class="form-control slider-control">
                <label for="design-timeline"><?php esc_html_e( 'Preferred Completion Month', 'solid-cement' ); ?></label>
                <input type="month" id="design-timeline" name="design_timeline" />
            </div>
            <div class="form-control">
                <label for="design-notes"><?php esc_html_e( 'Project Notes', 'solid-cement' ); ?></label>
                <textarea id="design-notes" name="design_notes" placeholder="<?php esc_attr_e( 'Share goals, inspirations, or required functionality.', 'solid-cement' ); ?>"></textarea>
            </div>
            <button type="submit" class="btn"><?php esc_html_e( 'Submit Request', 'solid-cement' ); ?></button>
        </form>
        <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
    </div>
</section>
<section class="faq-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Client Success Stories', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From Vision to Reality', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'Boutique Hotel, Sunshine Coast', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We revitalised a tired courtyard into a guest magnet featuring bespoke cement arches, rainforest-inspired planting, and a fairy garden walkway for children. Occupancy rose thanks to social media buzz featuring keywords like “luxury resort garden Australia”.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Heritage Home Restoration', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Working with heritage approvals, we restored fountains, designed gnome guard stations, and added modern lighting disguised within classic stonework. The client now hosts twilight concerts on weekends.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Urban Rooftop Haven', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We engineered lightweight cement planters, wind-resistant screens, and a fairy garden nook for city dwellers needing respite. Sustainable irrigation keeps maintenance low while the view remains captivating.', 'solid-cement' ); ?></p>
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
        'subtitle'    => __( 'Book a Design Consultation', 'solid-cement' ),
        'title'       => __( 'Schedule Your Garden Masterplan', 'solid-cement' ),
        'copy'        => __( 'Outline your dream landscape, and we will prepare mood boards, layouts, and investment options tailored to your space.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
