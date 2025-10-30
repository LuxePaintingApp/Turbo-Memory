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
        <span class="badge"><?php esc_html_e( 'Restore & Refresh', 'solid-cement' ); ?></span>
        <h1><?php esc_html_e( 'Restorations', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Professional restoration and repair services for cracked planters, faded gnomes, and chipped bird baths.', 'solid-cement' ); ?></p>
        <div class="chip-row">
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 13l4 4L19 7l-1.41-1.41L9 14.17l-2.59-2.58z"/></svg>
                <?php esc_html_e( 'Warranty friendly fixes', 'solid-cement' ); ?>
            </span>
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l4 4H8l4-4zm0 20l-4-4h8l-4 4zM4 12l4 4V8l-4 4zm16 0l-4-4v8l4-4z"/></svg>
                <?php esc_html_e( 'On-site or studio care', 'solid-cement' ); ?>
            </span>
        </div>
        <button class="icon-btn" type="button" data-popover-toggle="restoration-popover" aria-label="<?php esc_attr_e( 'View restoration checklist', 'solid-cement' ); ?>">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"/></svg>
        </button>
        <div class="popover" id="restoration-popover">
            <div class="popover__panel">
                <p><?php esc_html_e( 'Before shipping your statue, photograph each angle and note existing repairs so our team can match finishes precisely.', 'solid-cement' ); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Before & After Slider', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Restoration Difference', 'solid-cement' ); ?></h2>
        <?php solidcement_render_before_after(); ?>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Common Restorations', 'solid-cement' ); ?></h3>
            <ul class="list-check">
                <li><?php esc_html_e( 'Cracked planters patched and sealed', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Faded gnomes refreshed with UV-stable pigments', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Chipped bird baths resurfaced and rebalanced', 'solid-cement' ); ?></li>
            </ul>
        </aside>
        <div>
            <div class="card-grid">
                <article class="card">
                    <h3><?php esc_html_e( 'Colour Revival', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'We layer mineral paints, sealants, and protective waxes to return your garden statues to gallery-grade shine.', 'solid-cement' ); ?></p>
                </article>
                <article class="card">
                    <h3><?php esc_html_e( 'Structural Repair', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Our team rebuilds cracked elements with reinforced cement blends and hidden armatures.', 'solid-cement' ); ?></p>
                </article>
                <article class="card">
                    <h3><?php esc_html_e( 'Water Feature Detailing', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'We descale, reseal, and balance water flow in bird baths and fountains for crystal clear results.', 'solid-cement' ); ?></p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Quote Form', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Upload Photos for an Estimate', 'solid-cement' ); ?></h2>
        <form class="contact-card" method="post" action="#" data-toast-target="restoration-toast" enctype="multipart/form-data">
            <div class="form-control">
                <label for="restore-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                <input type="text" id="restore-name" name="restore_name" required />
            </div>
            <div class="form-control">
                <label for="restore-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                <input type="email" id="restore-email" name="restore_email" required />
            </div>
            <div class="form-control">
                <label for="restore-type"><?php esc_html_e( 'Item Type', 'solid-cement' ); ?></label>
                <select id="restore-type" name="restore_type">
                    <option value="gnome"><?php esc_html_e( 'Garden Gnome', 'solid-cement' ); ?></option>
                    <option value="birdbath"><?php esc_html_e( 'Bird Bath', 'solid-cement' ); ?></option>
                    <option value="planter"><?php esc_html_e( 'Planter', 'solid-cement' ); ?></option>
                </select>
            </div>
            <div class="form-control">
                <label for="restore-photos"><?php esc_html_e( 'Upload Photos', 'solid-cement' ); ?></label>
                <input type="file" id="restore-photos" name="restore_photos" multiple />
            </div>
            <div class="form-control">
                <label for="restore-notes"><?php esc_html_e( 'Damage Details', 'solid-cement' ); ?></label>
                <textarea id="restore-notes" name="restore_notes" rows="4"></textarea>
            </div>
            <button class="btn" type="submit"><?php esc_html_e( 'Request Restoration Quote', 'solid-cement' ); ?></button>
        </form>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Service Levels', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Flexible Packages', 'solid-cement' ); ?></h2>
        <div class="table-wrapper">
            <table class="luxe-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e( 'Package', 'solid-cement' ); ?></th>
                        <th><?php esc_html_e( 'Turnaround', 'solid-cement' ); ?></th>
                        <th><?php esc_html_e( 'Includes', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e( 'Refresh', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '1 week', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Cleaning, minor paint touch-ups, sealing', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Revive', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '2-3 weeks', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Structural repair, repainting, resealing', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Reimagine', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '4+ weeks', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Custom redesign, new accessories, on-site installation', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Recent Projects Showcase', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Highlights from the Studio', 'solid-cement' ); ?></h2>
        <div class="carousel" data-carousel>
            <div class="carousel__track">
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Heritage Fountain', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Cracks repaired, patina refreshed, and pump upgraded for a Brisbane heritage home.', 'solid-cement' ); ?></p>
                </article>
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Gnome Family Revival', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Six garden gnomes repainted with UV pigments and sealed for coastal conditions.', 'solid-cement' ); ?></p>
                </article>
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Bird Bath Glow-Up', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Surface smoothed, bowl resealed, and integrated LED lighting added for twilight sparkle.', 'solid-cement' ); ?></p>
                </article>
            </div>
            <div class="carousel__controls">
                <button class="carousel__button" type="button" data-carousel-prev><?php esc_html_e( 'Previous', 'solid-cement' ); ?></button>
                <button class="carousel__button" type="button" data-carousel-next><?php esc_html_e( 'Next', 'solid-cement' ); ?></button>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Restoration Experts', 'solid-cement' ),
        'title'       => __( 'Book a Restoration Consultation', 'solid-cement' ),
        'copy'        => __( 'Send us your restoration photos and we will outline the steps, timeline, and investment to return your garden statues to their original glory.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>

<div class="toast" role="status" aria-live="polite" id="restoration-toast">
    <span class="toast__badge">🛠</span>
    <p><?php esc_html_e( 'Thanks! Our restoration specialists will review your images and respond soon.', 'solid-cement' ); ?></p>
</div>

<?php get_footer(); ?>
