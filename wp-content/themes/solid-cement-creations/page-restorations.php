<?php
/**
 * Restorations page template.
 *
 * @package SolidCement
 */

global $post;
get_header();

$restoration_services = [
    [
        'title' => __( 'Cracked Planters', 'solid-cement' ),
        'copy'  => __( 'Structural fixes, waterproof sealing, and new finishes for weathered planters. We reinforce weak points, resurface interiors, and match exterior textures for a flawless reveal.', 'solid-cement' ),
    ],
    [
        'title' => __( 'Faded Gnomes', 'solid-cement' ),
        'copy'  => __( 'Colour matching, hand-painting, and protective sealing to revive your characters and cherished cement angel garden statues.', 'solid-cement' ),
    ],
    [
        'title' => __( 'Chipped Bird Baths', 'solid-cement' ),
        'copy'  => __( 'Edge repairs, resurfacing, and hydro-proof coatings keep bird baths pristine. We refine bowls, seal micro-cracks, and balance the basin for perfect water flow.', 'solid-cement' ),
    ],
];
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Restorations & Repairs', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Renew beloved large cement garden ornaments with colour-matched finishes and artisan care.', 'solid-cement' ); ?></p>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Before & After', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Revival', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Slide across the gallery to compare weathered statues with freshly restored masterpieces. Our team repairs structural damage, revives colour, and reseals each piece for longevity.', 'solid-cement' ); ?></p>
        <?php solidcement_render_before_after(); ?>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Common Restorations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'What We Repair', 'solid-cement' ); ?></h2>
        <div class="featured-grid">
            <?php foreach ( $restoration_services as $service ) : ?>
                <article class="feature-card">
                    <h3><?php echo esc_html( $service['title'] ); ?></h3>
                    <p><?php echo esc_html( $service['copy'] ); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="care-accordion" data-accordion>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'Protective Coating Options', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'Choose from satin, matte, or high-gloss finishes. Each coating provides UV resistance and water repellence tailored to your location.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'Maintenance Plan', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'Receive a restoration diary with cleaning reminders, touch-up schedules, and seasonal inspection tips.', 'solid-cement' ); ?></p>
                </div>
            </article>
        </div>
    </div>
</section>
<section class="page-section" id="quote">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Quote Form', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Upload Your Project', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share photos of the damage and we will prepare a restoration plan with timelines and pricing.', 'solid-cement' ); ?></p>
            <div class="badge-row">
                <span class="badge"><?php esc_html_e( 'Express Service Available', 'solid-cement' ); ?></span>
                <span class="badge"><?php esc_html_e( 'Australia-Wide Pickup', 'solid-cement' ); ?></span>
            </div>
        </div>
        <div>
            <form class="contact-card" method="post" action="#" enctype="multipart/form-data">
                <div class="form-control">
                    <label for="restore-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                    <input type="text" id="restore-name" name="restore_name" required />
                </div>
                <div class="form-control">
                    <label for="restore-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                    <input type="email" id="restore-email" name="restore_email" required />
                </div>
                <div class="form-control form-control--inline">
                    <span class="form-label"><?php esc_html_e( 'Item Type', 'solid-cement' ); ?></span>
                    <label class="chip">
                        <input type="checkbox" name="restore_items[]" value="statue" />
                        <span><?php esc_html_e( 'Garden Statue', 'solid-cement' ); ?></span>
                    </label>
                    <label class="chip">
                        <input type="checkbox" name="restore_items[]" value="birdbath" />
                        <span><?php esc_html_e( 'Bird Bath', 'solid-cement' ); ?></span>
                    </label>
                    <label class="chip">
                        <input type="checkbox" name="restore_items[]" value="planter" />
                        <span><?php esc_html_e( 'Planter', 'solid-cement' ); ?></span>
                    </label>
                </div>
                <div class="form-control">
                    <label for="restore-photos"><?php esc_html_e( 'Upload Images', 'solid-cement' ); ?></label>
                    <input type="file" id="restore-photos" name="restore_photos[]" multiple />
                </div>
                <div class="form-control">
                    <label for="restore-notes"><?php esc_html_e( 'Notes', 'solid-cement' ); ?></label>
                    <textarea id="restore-notes" name="restore_notes"></textarea>
                </div>
                <div class="form-control form-control--inline">
                    <label class="toggle">
                        <input type="checkbox" name="restore_pickup" value="1" />
                        <span><?php esc_html_e( 'Request white-glove pickup and delivery.', 'solid-cement' ); ?></span>
                    </label>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Request Assessment', 'solid-cement' ); ?></button>
            </form>
        </div>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Service Timeline', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Restoration Roadmap', 'solid-cement' ); ?></h2>
        <ol class="restoration-steps">
            <li><?php esc_html_e( 'Assessment & pickup scheduling', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Structural repairs and curing', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Colour restoration and detailing', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Sealant application and quality assurance', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Delivery, placement, and care briefing', 'solid-cement' ); ?></li>
        </ol>
        <div class="progress-list">
            <div>
                <label for="progress-repair"><?php esc_html_e( 'Workshop Capacity Remaining', 'solid-cement' ); ?></label>
                <progress id="progress-repair" max="100" value="58">58%</progress>
            </div>
            <div>
                <label for="progress-emergency"><?php esc_html_e( 'Emergency Slots Available', 'solid-cement' ); ?></label>
                <progress id="progress-emergency" max="100" value="20">20%</progress>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Recent Projects', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Restorations in Focus', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Browse a carousel of refreshed statues, bird baths, and planters. Each project includes notes on techniques used and aftercare recommendations.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'restoration' ); ?>
    </div>
</section>
<?php
get_footer();
