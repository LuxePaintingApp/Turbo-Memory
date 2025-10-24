<?php
/**
 * Restorations page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Restorations & Repairs', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Renew beloved cement pieces with colour-matched finishes and artisan care.', 'solid-cement' ); ?></p>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Before & After', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Revival', 'solid-cement' ); ?></h2>
        <?php solidcement_render_before_after(); ?>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Common Restorations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'What We Repair', 'solid-cement' ); ?></h2>
        <div class="featured-grid">
            <article class="feature-card">
                <h3><?php esc_html_e( 'Cracked Planters', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Structural fixes, waterproof sealing, and new finishes for weathered planters.', 'solid-cement' ); ?></p>
            </article>
            <article class="feature-card">
                <h3><?php esc_html_e( 'Faded Gnomes', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Colour matching, hand-painting, and protective sealing to revive your characters.', 'solid-cement' ); ?></p>
            </article>
            <article class="feature-card">
                <h3><?php esc_html_e( 'Chipped Bird Baths', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Edge repairs, resurfacing, and hydro-proof coatings keep bird baths pristine.', 'solid-cement' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="page-section" id="restoration-quote">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Quote Form', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Upload Your Project', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share photos of the damage and we will prepare a restoration plan with timelines and pricing.', 'solid-cement' ); ?></p>
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
                <div class="form-control">
                    <label for="restore-photos"><?php esc_html_e( 'Upload Images', 'solid-cement' ); ?></label>
                    <input type="file" id="restore-photos" name="restore_photos[]" multiple />
                </div>
                <div class="form-control">
                    <label for="restore-notes"><?php esc_html_e( 'Notes', 'solid-cement' ); ?></label>
                    <textarea id="restore-notes" name="restore_notes"></textarea>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Request Assessment', 'solid-cement' ); ?></button>
            </form>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Recent Projects', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Restorations in Focus', 'solid-cement' ); ?></h2>
        <?php solidcement_render_gallery( 'restoration' ); ?>
    </div>
</section>
<?php
get_footer();
