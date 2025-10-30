<?php
/**
 * Restorations page template featuring detailed copywriting and interactive components.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'solid-cement' ); ?>">
    <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'solid-cement' ); ?></a></li>
        <li aria-current="page"><?php esc_html_e( 'Restorations', 'solid-cement' ); ?></li>
    </ol>
</nav>
<section class="page-hero restoration-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Restorations & Repairs', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Renew beloved large cement garden ornaments with colour-matched finishes and artisan care. From century-old statues to modern fairy garden villages, our restoration studio revives each piece with scientific precision and heartfelt storytelling.', 'solid-cement' ); ?></p>
        <div class="hero-cta">
            <a class="btn" href="#before-after"><?php esc_html_e( 'View Transformations', 'solid-cement' ); ?></a>
            <a class="btn btn--outline" href="#restoration-quote"><?php esc_html_e( 'Book an Assessment', 'solid-cement' ); ?></a>
        </div>
        <div class="chip-row" role="list">
            <span class="chip" role="listitem"><?php esc_html_e( 'cement statue restoration brisbane', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'garden gnome repainting', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'bird bath resurfacing australia', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section id="before-after" class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Before & After', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'See the Revival', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Slide across our restoration reveals to witness cracked planters, faded gnomes, and chipped bird baths returning to showroom splendour.', 'solid-cement' ); ?></p>
        <?php solidcement_render_before_after(); ?>
    </div>
</section>
<section class="page-section page-section--alt restoration-types">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Common Restorations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'What We Repair', 'solid-cement' ); ?></h2>
        <div class="featured-grid">
            <article class="feature-card">
                <h3><?php esc_html_e( 'Cracked Planters', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Structural stitching, waterproof sealing, and fresh finishes bring structural confidence back to cherished planters.', 'solid-cement' ); ?></p>
            </article>
            <article class="feature-card">
                <h3><?php esc_html_e( 'Faded Gnomes', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Colour matching, hand-painting, and protective sealing revive characters and cement angel statues.', 'solid-cement' ); ?></p>
            </article>
            <article class="feature-card">
                <h3><?php esc_html_e( 'Chipped Bird Baths', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Edge repairs, resurfacing, and hydro-proof coatings keep bird baths pristine and inviting.', 'solid-cement' ); ?></p>
            </article>
        </div>
        <div class="restoration-table-wrapper">
            <table>
                <caption><?php esc_html_e( 'Restoration Package Overview', 'solid-cement' ); ?></caption>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Package', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Ideal For', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Inclusions', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Turnaround', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e( 'Refresh', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Minor chips, early fading, gentle wear.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Cleaning, surface repair, sealant top-up.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '2 weeks', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Revive', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Cracks, missing details, colour loss.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Structural repair, sculpting, colour restoration.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '4 weeks', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Reimagine', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Heritage statues, complex garden installations.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Full rebuild, custom finishes, documentation for heritage boards.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( '6–8 weeks', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="page-section restoration-toggle">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Care Tips', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Maintenance Insights', 'solid-cement' ); ?></h2>
        <div class="toggle-control" data-toggle-panel>
            <label for="care-toggle" class="toggle-label">
                <input type="checkbox" id="care-toggle" aria-controls="care-copy" />
                <span class="toggle-switch" aria-hidden="true"></span>
                <span class="toggle-text" data-toggle-text-residential><?php esc_html_e( 'Residential Advice', 'solid-cement' ); ?></span>
                <span class="toggle-text" data-toggle-text-commercial hidden><?php esc_html_e( 'Commercial Advice', 'solid-cement' ); ?></span>
            </label>
            <div id="care-copy" class="toggle-copy">
                <div data-toggle-panel-residential>
                    <p><?php esc_html_e( 'Home gardens thrive when you schedule seasonal cleaning, apply breathable sealant biannually, and store touch-up paint in a cool, dry space. We supply easy-to-follow checklists covering “how to restore garden gnomes” and “bird bath maintenance”.', 'solid-cement' ); ?></p>
                </div>
                <div data-toggle-panel-commercial hidden>
                    <p><?php esc_html_e( 'Commercial venues benefit from weekly inspections, scheduled pressure washing, and graffiti-resistant coatings. Our team trains staff to capture before-and-after photos for marketing campaigns targeting “resort statue restoration Australia”.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="restoration-quote" class="page-section restoration-form">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Quote Form', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Upload Your Project', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share photos of the damage and we will prepare a restoration plan with timelines and pricing. Include as much history as possible so we can honour your piece’s story.', 'solid-cement' ); ?></p>
            <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
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
                    <label for="restore-phone"><?php esc_html_e( 'Phone', 'solid-cement' ); ?></label>
                    <input type="tel" id="restore-phone" name="restore_phone" />
                </div>
                <div class="form-control">
                    <label for="restore-photos"><?php esc_html_e( 'Upload Images', 'solid-cement' ); ?></label>
                    <input type="file" id="restore-photos" name="restore_photos[]" multiple />
                </div>
                <fieldset class="form-control">
                    <legend><?php esc_html_e( 'Damage Type', 'solid-cement' ); ?></legend>
                    <label><input type="checkbox" name="restore_damage[]" value="crack" /> <?php esc_html_e( 'Cracks or breaks', 'solid-cement' ); ?></label>
                    <label><input type="checkbox" name="restore_damage[]" value="fade" /> <?php esc_html_e( 'Colour fading', 'solid-cement' ); ?></label>
                    <label><input type="checkbox" name="restore_damage[]" value="chip" /> <?php esc_html_e( 'Chips & missing details', 'solid-cement' ); ?></label>
                </fieldset>
                <fieldset class="form-control">
                    <legend><?php esc_html_e( 'Item Type', 'solid-cement' ); ?></legend>
                    <label><input type="radio" name="restore_item" value="gnome" checked /> <?php esc_html_e( 'Garden gnome', 'solid-cement' ); ?></label>
                    <label><input type="radio" name="restore_item" value="birdbath" /> <?php esc_html_e( 'Bird bath', 'solid-cement' ); ?></label>
                    <label><input type="radio" name="restore_item" value="planter" /> <?php esc_html_e( 'Planter', 'solid-cement' ); ?></label>
                    <label><input type="radio" name="restore_item" value="other" /> <?php esc_html_e( 'Other cement feature', 'solid-cement' ); ?></label>
                </fieldset>
                <div class="form-control">
                    <label for="restore-notes"><?php esc_html_e( 'Notes', 'solid-cement' ); ?></label>
                    <textarea id="restore-notes" name="restore_notes" placeholder="<?php esc_attr_e( 'Tell us the history, desired finish, and any deadlines.', 'solid-cement' ); ?>"></textarea>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Request Assessment', 'solid-cement' ); ?></button>
            </form>
        </div>
    </div>
</section>
<section class="page-section page-section--alt restoration-gallery">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Recent Projects', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Restorations in Focus', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Browse restored sculptures, fountains, and fairy garden installations. Each entry includes keywords and captions you can adapt for your own marketing.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'restoration' ); ?>
    </div>
</section>
<section class="faq-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'FAQs', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Restoration Questions', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'Can you match discontinued colours?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Yes. We build pigment recipes from scratch, testing samples until they match your original finish. Our lab documents ratios so you can request touch-ups later.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Do you work onsite or in the studio?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Small to medium pieces can be transported to our studio. Large installations, fountains, and built-in seating are handled onsite with protective enclosures to safeguard landscaping.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'How do you protect restored pieces?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We apply UV-stable sealants, anti-graffiti coatings for commercial sites, and supply maintenance kits with microfiber cloths, pH-neutral cleaners, and care logs.', 'solid-cement' ); ?></p>
            </details>
        </div>
    </div>
</section>
<section class="page-section restoration-toast">
    <div class="container">
        <div class="toast" role="status" aria-live="polite">
            <strong><?php esc_html_e( 'Restoration Queue Update', 'solid-cement' ); ?></strong>
            <p><?php esc_html_e( 'Winter bookings are open. Reserve your slot now to ensure your cement statues are refreshed before spring celebrations.', 'solid-cement' ); ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
