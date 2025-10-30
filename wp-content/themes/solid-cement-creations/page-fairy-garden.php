<?php
/**
 * Fairy Garden page template with immersive copy and Elementor-friendly modules.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'solid-cement' ); ?>">
    <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'solid-cement' ); ?></a></li>
        <li aria-current="page"><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></li>
    </ol>
</nav>
<section class="page-hero fairy-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Fairy Garden Experiences', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Whimsical landscapes designed with layered textures, lighting, and weatherproof cement garden decor. Each fairy garden is a sensory retreat where fragrant herbs mingle with glowing pathways, attracting visitors searching for “luxury fairy garden design Australia” and “Elementor fairy garden inspiration”.', 'solid-cement' ); ?></p>
        <div class="hero-cta">
            <a class="btn" href="#fairy-gallery"><?php esc_html_e( 'View Transformations', 'solid-cement' ); ?></a>
            <a class="btn btn--outline" href="#fairy-planner"><?php esc_html_e( 'Plan Your Garden', 'solid-cement' ); ?></a>
        </div>
        <div class="chip-row" role="list">
            <span class="chip" role="listitem"><?php esc_html_e( 'enchanted backyard design', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'fairy garden lighting ideas', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'cement fairy houses', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section id="fairy-gallery" class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Gallery Carousel', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Before & After Moments', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Swipe through immersive fairy garden makeovers featuring custom cement mushrooms, gnome villages, and bird bath cascades. Elementor users can mirror this layout with sliders or interactive galleries.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'fairy-garden' ); ?>
    </div>
</section>
<section class="page-section page-section--alt fairy-moods" data-tabs>
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Inspiration', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Ideas for Outdoor Storytelling', 'solid-cement' ); ?></h2>
        <div class="tabs" role="tablist" aria-label="<?php esc_attr_e( 'Fairy mood board tabs', 'solid-cement' ); ?>">
            <button type="button" role="tab" aria-selected="true" aria-controls="tab-dawn" id="tab-dawn-trigger" data-tab-target="tab-dawn"><?php esc_html_e( 'Dawn Glow', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-twilight" id="tab-twilight-trigger" data-tab-target="tab-twilight"><?php esc_html_e( 'Twilight Sparkle', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-festival" id="tab-festival-trigger" data-tab-target="tab-festival"><?php esc_html_e( 'Festival Nights', 'solid-cement' ); ?></button>
        </div>
        <div class="tab-panels">
            <div class="tab-panel is-active" id="tab-dawn" role="tabpanel" aria-labelledby="tab-dawn-trigger" data-tab-panel>
                <p><?php esc_html_e( 'The Dawn Glow palette focuses on soft pink sky reflections and dew-kissed foliage. Cement fairy cottages are finished with pearlescent washes that shimmer as the sun rises. Pair with herbs like thyme and lemon balm for a sensory wake-up moment.', 'solid-cement' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'Install misting fountains to catch early light.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Use reflective tiles to extend the glow of pink cement pathways.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Add a gentle chime or soundscape for meditative mornings.', 'solid-cement' ); ?></li>
                </ul>
            </div>
            <div class="tab-panel" id="tab-twilight" role="tabpanel" aria-labelledby="tab-twilight-trigger" hidden data-tab-panel>
                <p><?php esc_html_e( 'Twilight Sparkle embraces romantic evenings. Layer copper string lights through sculpted branches and choose cement mushrooms with integrated LEDs. This mood board is perfect for keywords like “fairy garden lighting ideas” and “romantic backyard inspiration”.', 'solid-cement' ); ?></p>
                <div class="feature-list">
                    <article>
                        <h3><?php esc_html_e( 'Lighting Plan', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Combine solar lanterns with low-voltage uplights to highlight centrepiece sculptures.', 'solid-cement' ); ?></p>
                    </article>
                    <article>
                        <h3><?php esc_html_e( 'Scent Layering', 'solid-cement' ); ?></h3>
                        <p><?php esc_html_e( 'Plant jasmine and night-blooming cereus to perfume the evening air.', 'solid-cement' ); ?></p>
                    </article>
                </div>
            </div>
            <div class="tab-panel" id="tab-festival" role="tabpanel" aria-labelledby="tab-festival-trigger" hidden data-tab-panel>
                <p><?php esc_html_e( 'Festival Nights transform your garden into an event-ready stage. Introduce modular seating, storytelling stations, and cement arches for dramatic entries. Use the printable program included with our fairy festival kit to guide guests through interactive stations.', 'solid-cement' ); ?></p>
                <ol class="stepper">
                    <li><?php esc_html_e( 'Welcome guests with enchanted gates adorned in glittering vines.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Lead visitors along a quest trail featuring gnome riddles and fairy trivia.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Close the evening with a projection show on a cement backdrop wall.', 'solid-cement' ); ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="page-section fairy-packages">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Packages', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Choose Your Enchantment', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Select a package that matches your space, timeline, and storytelling goals. Every package includes copywriting prompts, Elementor page layouts, and maintenance checklists.', 'solid-cement' ); ?></p>
        <div class="package-cards">
            <article class="card">
                <h3><?php esc_html_e( 'Sprout', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Perfect for balconies and petite courtyards. Includes three cement fairy homes, a micro bird bath, and herb-rich planters that thrive in pots.', 'solid-cement' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'Install time: 1 week', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Blog keywords: “small balcony fairy garden”, “compact garden gnome ideas”.', 'solid-cement' ); ?></li>
                </ul>
                <a class="btn" href="#fairy-planner"><?php esc_html_e( 'Plan Sprout Garden', 'solid-cement' ); ?></a>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Bloom', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Designed for family backyards. Features elevated pathways, storytelling benches, and integrated lighting perfect for evening adventures.', 'solid-cement' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'Install time: 3 weeks', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Blog keywords: “family friendly fairy garden”, “outdoor storytelling garden design”.', 'solid-cement' ); ?></li>
                </ul>
                <a class="btn" href="#fairy-planner"><?php esc_html_e( 'Plan Bloom Garden', 'solid-cement' ); ?></a>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Majestic', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'A resort-grade fairy garden experience featuring water elements, elevated viewing decks, and a performance-ready amphitheatre crafted in luminous cement.', 'solid-cement' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'Install time: 6–8 weeks', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Blog keywords: “luxury fairy garden design Australia”, “event-ready garden installation”.', 'solid-cement' ); ?></li>
                </ul>
                <a class="btn" href="#fairy-planner"><?php esc_html_e( 'Plan Majestic Garden', 'solid-cement' ); ?></a>
            </article>
        </div>
        <div class="fairy-table-wrapper">
            <table>
                <caption><?php esc_html_e( 'Package Comparison', 'solid-cement' ); ?></caption>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Feature', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Sprout', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Bloom', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Majestic', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Custom Cement Sculptures', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( '3 piece starter set', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '8 piece village', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '15+ signature sculptures', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Lighting Plan', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( 'Solar twinkle lights', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Integrated pathway lighting', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Programmable light show', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Maintenance Visits', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( 'Annual tune-up', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Seasonal refresh', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Quarterly concierge', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="fairy-planner" class="page-section fairy-planner">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Bring the Magic of Fairy Garden to Your Home', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'We create bespoke layouts that balance botanicals, lighting, and weatherproof cement garden decor built to sparkle after every rain. Our planning toolkit includes checklists, printable fairy invitations, and SEO prompts for your blog.', 'solid-cement' ); ?></p>
            <div class="progress-grid">
                <div class="progress-card">
                    <p class="progress-label"><?php esc_html_e( 'Concept Stage', 'solid-cement' ); ?></p>
                    <div class="progress" data-progress="35">
                        <div class="progress__bar" style="width: 35%"></div>
                    </div>
                    <p class="progress-value"><?php esc_html_e( 'Mood boards, style quiz, and preliminary planting plan.', 'solid-cement' ); ?></p>
                </div>
                <div class="progress-card">
                    <p class="progress-label"><?php esc_html_e( 'Creation Stage', 'solid-cement' ); ?></p>
                    <div class="progress" data-progress="70">
                        <div class="progress__bar" style="width: 70%"></div>
                    </div>
                    <p class="progress-value"><?php esc_html_e( 'Cement sculpting, lighting installation, and softscape layering.', 'solid-cement' ); ?></p>
                </div>
                <div class="progress-card">
                    <p class="progress-label"><?php esc_html_e( 'Celebration Stage', 'solid-cement' ); ?></p>
                    <div class="progress" data-progress="100">
                        <div class="progress__bar" style="width: 100%"></div>
                    </div>
                    <p class="progress-value"><?php esc_html_e( 'Guided walkthrough, photography tips, and Elementor launch assets.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
        </div>
        <div>
            <?php get_template_part( 'template-parts/forms/booking' ); ?>
        </div>
    </div>
</section>
<section class="faq-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'FAQs', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Fairy Garden Essentials', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'How do you maintain fairy garden lighting?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We provide waterproof connectors, timer settings, and seasonal checklists. Clients also receive blog-ready reminders such as “fairy garden lighting maintenance guide”.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Do you offer child-friendly elements?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Yes. We create tactile play stations, story cards, and durable cement seats sized for little ones. All finishes are low VOC and easy to wipe clean.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Can fairy gardens be adapted for commercial venues?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Our team designs sensory trails for retail centres, wellness retreats, and community gardens. We include signage templates and crowd-friendly pathways to keep experiences accessible.', 'solid-cement' ); ?></p>
            </details>
        </div>
    </div>
</section>
<section class="page-section fairy-cta">
    <div class="container">
        <div class="toast" role="status" aria-live="polite">
            <strong><?php esc_html_e( 'Seasonal Note', 'solid-cement' ); ?></strong>
            <p><?php esc_html_e( 'Spring bookings fill quickly. Reserve a planning call now to secure installation dates aligned with flowering cycles.', 'solid-cement' ); ?></p>
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
        'copy'        => __( 'Tell us about the space you are styling and we will propose a layout with lighting, pathways, and whimsical sculptures.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
