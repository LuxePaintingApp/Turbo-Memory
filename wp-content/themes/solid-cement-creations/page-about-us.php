<?php
/**
 * About page template enriched with storytelling, Elementor-friendly components, and generous copywriting.
 *
 * @package SolidCement
 */

global $post;
get_header();

$maker_name  = get_post_meta( get_the_ID(), 'solidcement_maker_name', true );
$maker_title = get_post_meta( get_the_ID(), 'solidcement_maker_title', true );
$maker_bio   = get_post_meta( get_the_ID(), 'solidcement_maker_bio', true );
$maker_photo = get_post_meta( get_the_ID(), 'solidcement_maker_photo', true );
$mission     = get_post_meta( get_the_ID(), 'solidcement_mission', true );
$values      = get_post_meta( get_the_ID(), 'solidcement_values', true );
$process_ids = array_filter( array_map( 'trim', explode( ',', (string) get_post_meta( get_the_ID(), 'solidcement_process_gallery', true ) ) ) );
?>
<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'solid-cement' ); ?>">
    <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'solid-cement' ); ?></a></li>
        <li aria-current="page"><?php the_title(); ?></li>
    </ol>
</nav>
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p><?php echo esc_html( get_post_meta( get_the_ID(), 'solidcement_about_tagline', true ) ? get_post_meta( get_the_ID(), 'solidcement_about_tagline', true ) : __( 'From humble beginnings to luxury garden artistry, Solid Cement Creations blends craftsmanship, innovation, and storytelling for discerning garden lovers.', 'solid-cement' ) ); ?></p>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Brand Story', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From humble beginnings to luxury garden artistry', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'The Solid Cement Creations story started with a single mould drying on a laundry balcony. Founder Skye Romano experimented with pigments and sealants between shifts, determined to create garden statues capable of withstanding Queensland heat while looking glamorous enough for designer resorts. That ambition grew into a thriving studio producing fairy garden dioramas, bird baths, and concrete landscapes that capture hearts across Australia.', 'solid-cement' ); ?></p>
        <p><?php esc_html_e( 'Every chapter of our story is steeped in curiosity. We studied heritage European cement recipes, collaborated with botanists for planting insights, and listened to clients describe the dream gardens they had pinned on mood boards. The result is a collection of luxurious outdoor pieces finished with soft pink washes, bright pink accents, and shimmering sealants that reflect the Australian sky. Homeowners searching for phrases like “luxury garden gnome Brisbane” or “handmade fairy garden decor Australia” consistently arrive at our workshop because we publish tutorials, research, and design diaries that guide them through every detail.', 'solid-cement' ); ?></p>
        <p><?php esc_html_e( 'Our team thrives on the intersection of design and storytelling. We sketch gnome families that mirror client personalities, craft fairy garden stages for imaginative children, and develop large-scale garden design plans that balance practicality with pure indulgence. Elementor and other modern WordPress tools let us document each build with galleries, checklists, and long-form blog posts—resources that help new clients feel confident and inspired.', 'solid-cement' ); ?></p>
        <div class="story-stepper">
            <h3><?php esc_html_e( 'Milestones', 'solid-cement' ); ?></h3>
            <ol class="stepper">
                <li><?php esc_html_e( '2012: Skye pours the first bright pink cement planter, sharing the process on a local gardening forum.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( '2015: Solid Cement Creations opens its studio to the public, unveiling Gnome World to delighted collectors.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( '2018: The team launches fairy garden workshops, blending horticulture with storytelling for families and schools.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( '2021: Commercial garden design services expand to boutique hotels and wellness retreats around Australia.', 'solid-cement' ); ?></li>
            </ol>
        </div>
        <div class="page-content">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>
<section class="page-section page-section--alt maker-section">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Meet the Maker', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( $maker_name ? $maker_name : __( 'Your Artisan', 'solid-cement' ) ); ?></h2>
            <?php if ( $maker_title ) : ?>
                <p><strong><?php echo esc_html( $maker_title ); ?></strong></p>
            <?php endif; ?>
            <p>
                <?php
                if ( $maker_bio ) {
                    echo esc_html( $maker_bio );
                } else {
                    esc_html_e( 'Skye Romano sculpted her first cement gnome after falling in love with European courtyard design. She brings a fine arts background, horticultural training, and a fierce love for Brisbane to every project. Skye leads an artisan team focused on advanced cement chemistry, environmental responsibility, and expressive storytelling that makes each statue feel alive.', 'solid-cement' );
                }
                ?>
            </p>
            <div class="maker-tabs" data-tabs>
                <div class="tabs" role="tablist" aria-label="<?php esc_attr_e( 'Studio insights', 'solid-cement' ); ?>">
                    <button type="button" role="tab" aria-selected="true" aria-controls="tab-philosophy" id="tab-philosophy-trigger" data-tab-target="tab-philosophy"><?php esc_html_e( 'Design Philosophy', 'solid-cement' ); ?></button>
                    <button type="button" role="tab" aria-selected="false" aria-controls="tab-materials" id="tab-materials-trigger" data-tab-target="tab-materials"><?php esc_html_e( 'Materials Lab', 'solid-cement' ); ?></button>
                    <button type="button" role="tab" aria-selected="false" aria-controls="tab-community" id="tab-community-trigger" data-tab-target="tab-community"><?php esc_html_e( 'Community', 'solid-cement' ); ?></button>
                </div>
                <div class="tab-panels">
                    <div class="tab-panel is-active" id="tab-philosophy" role="tabpanel" aria-labelledby="tab-philosophy-trigger" data-tab-panel>
                        <p><?php esc_html_e( 'Our design philosophy leans into soft curves, layered textures, and tonal gradients that photograph beautifully in natural light. We pair breathing space with statement details so every gnome, fairy door, or garden bench feels intentional. Each project begins with journaling exercises where clients describe their favourite memories of nature—material we transform into motifs on cement surfaces.', 'solid-cement' ); ?></p>
                    </div>
                    <div class="tab-panel" id="tab-materials" role="tabpanel" aria-labelledby="tab-materials-trigger" hidden data-tab-panel>
                        <p><?php esc_html_e( 'The materials lab tests pigments, aggregates, and sealants for longevity. We measure water absorption, abrasion resistance, and colourfastness under simulated Queensland sun. Clients seeking “long lasting cement bird bath” or “garden statue maintenance free” appreciate the scientific discipline baked into every product.', 'solid-cement' ); ?></p>
                        <ul>
                            <li><?php esc_html_e( 'Recycled glass fines for shimmer and sustainability.', 'solid-cement' ); ?></li>
                            <li><?php esc_html_e( 'Low VOC sealants that protect vibrant pink finishes.', 'solid-cement' ); ?></li>
                            <li><?php esc_html_e( 'Nano coatings that make cleaning gentle and efficient.', 'solid-cement' ); ?></li>
                        </ul>
                    </div>
                    <div class="tab-panel" id="tab-community" role="tabpanel" aria-labelledby="tab-community-trigger" hidden data-tab-panel>
                        <p><?php esc_html_e( 'Community is foundational. We mentor young artists, donate fairy garden installations to children’s hospitals, and host seasonal open studios. Visitors can watch live sculpting, learn about Elementor-ready website assets, and browse charity auctions featuring rare gnomes.', 'solid-cement' ); ?></p>
                        <div class="maker-badges">
                            <span class="badge"><?php esc_html_e( 'Mentor Program', 'solid-cement' ); ?></span>
                            <span class="badge"><?php esc_html_e( 'Garden Therapy', 'solid-cement' ); ?></span>
                            <span class="badge"><?php esc_html_e( 'Community Nights', 'solid-cement' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
        </div>
        <div>
            <?php
            if ( $maker_photo ) {
                echo wp_get_attachment_image( $maker_photo, 'large', false, [ 'class' => 'maker-photo' ] );
            } elseif ( has_post_thumbnail() ) {
                the_post_thumbnail( 'large', [ 'class' => 'maker-photo' ] );
            } else {
                echo '<div class="map-placeholder">' . esc_html__( 'Upload a maker portrait via custom field.', 'solid-cement' ) . '</div>';
            }
            ?>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Behind the Scenes', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Craftsmanship in Motion', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Peek inside the studio to watch gnome noses being sculpted, bird baths polished to a gentle sheen, and fairy lanterns wired for a warm glow. Elementor users can adapt this gallery into sliders or masonry layouts with ease.', 'solid-cement' ); ?></p>
        <div class="media-grid">
            <?php
            if ( $process_ids ) {
                foreach ( $process_ids as $attachment_id ) {
                    echo '<figure class="feature-card">';
                    echo wp_get_attachment_image( $attachment_id, 'large' );
                    echo '</figure>';
                }
            } else {
                echo '<p>' . esc_html__( 'Add attachment IDs to the "solidcement_process_gallery" custom field to show your studio process.', 'solid-cement' ) . '</p>';
            }
            ?>
        </div>
    </div>
</section>
<section class="page-section page-section--alt mission-values">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Mission & Values', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Quality, Care, Creativity', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Our mission is to transform everyday gardens into luxurious sanctuaries where handcrafted cement art invites joy, conversation, and reflection. We champion sustainability, inclusive storytelling, and client collaboration at every step.', 'solid-cement' ); ?></p>
        <div class="values-accordion">
            <details open>
                <summary><?php esc_html_e( 'Craftsmanship', 'solid-cement' ); ?></summary>
                <p><?php echo esc_html( $mission ? $mission : __( 'Each statue is hand-finished and quality checked across twelve stages, ensuring colour vibrancy, structural integrity, and storytelling magic.', 'solid-cement' ) ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Sustainability', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We source local aggregates, recycle water used during polishing, and offset studio electricity with solar. Gardeners looking for “eco-friendly cement decor” find actionable tips in our blog and newsletters.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Client Delight', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Open communication, transparent pricing, and milestone updates keep every collaboration joyful. We share editable Elementor templates so clients can document progress on their own sites.', 'solid-cement' ); ?></p>
            </details>
            <?php if ( $values ) : ?>
                <?php foreach ( preg_split( '/\r\n|\r|\n/', $values ) as $value ) : ?>
                    <?php if ( trim( $value ) ) : ?>
                        <details>
                            <summary><?php esc_html_e( 'Value Highlight', 'solid-cement' ); ?></summary>
                            <p><?php echo esc_html( $value ); ?></p>
                        </details>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="awards-table">
            <table>
                <caption><?php esc_html_e( 'Selected Awards & Features', 'solid-cement' ); ?></caption>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Year', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Recognition', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Category', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2020</td>
                        <td><?php esc_html_e( 'Australian Garden Design Awards', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Best Bespoke Garden Statues', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td>2021</td>
                        <td><?php esc_html_e( 'Queensland Creative Business Showcase', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Innovative Materials', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td><?php esc_html_e( 'Garden Lifestyle Magazine', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Feature: Luxury Fairy Garden Installations', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="page-section press-kit">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Press & Collaborations', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Request Our Media Kit', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Complete the form to receive downloadable imagery, interview notes, and curated quotes. Use these assets to feature Solid Cement Creations in blogs, magazines, podcasts, or Elementor-powered showcases.', 'solid-cement' ); ?></p>
        <form class="contact-card" method="post" action="#">
            <div class="form-control">
                <label for="press-name"><?php esc_html_e( 'Full Name', 'solid-cement' ); ?></label>
                <input type="text" id="press-name" name="press_name" required />
            </div>
            <div class="form-control">
                <label for="press-email"><?php esc_html_e( 'Email Address', 'solid-cement' ); ?></label>
                <input type="email" id="press-email" name="press_email" required />
            </div>
            <div class="form-control">
                <label for="press-outlet"><?php esc_html_e( 'Media Outlet or Brand', 'solid-cement' ); ?></label>
                <input type="text" id="press-outlet" name="press_outlet" />
            </div>
            <div class="form-control">
                <label for="press-focus"><?php esc_html_e( 'Story Focus', 'solid-cement' ); ?></label>
                <select id="press-focus" name="press_focus">
                    <option value="gardening"><?php esc_html_e( 'Gardening & Outdoor Design', 'solid-cement' ); ?></option>
                    <option value="restoration"><?php esc_html_e( 'Restoration & Maintenance', 'solid-cement' ); ?></option>
                    <option value="business"><?php esc_html_e( 'Creative Business', 'solid-cement' ); ?></option>
                </select>
            </div>
            <fieldset class="form-control">
                <legend><?php esc_html_e( 'Assets Requested', 'solid-cement' ); ?></legend>
                <label><input type="checkbox" name="press_assets[]" value="images" /> <?php esc_html_e( 'High-resolution imagery', 'solid-cement' ); ?></label>
                <label><input type="checkbox" name="press_assets[]" value="video" /> <?php esc_html_e( 'Video footage', 'solid-cement' ); ?></label>
                <label><input type="checkbox" name="press_assets[]" value="quotes" /> <?php esc_html_e( 'Quotes & statistics', 'solid-cement' ); ?></label>
            </fieldset>
            <fieldset class="form-control">
                <legend><?php esc_html_e( 'Interview Preference', 'solid-cement' ); ?></legend>
                <label><input type="radio" name="press_interview" value="virtual" checked /> <?php esc_html_e( 'Virtual chat', 'solid-cement' ); ?></label>
                <label><input type="radio" name="press_interview" value="studio" /> <?php esc_html_e( 'Studio visit', 'solid-cement' ); ?></label>
            </fieldset>
            <div class="form-control">
                <label for="press-notes"><?php esc_html_e( 'Additional Notes', 'solid-cement' ); ?></label>
                <textarea id="press-notes" name="press_notes"></textarea>
            </div>
            <button type="submit" class="btn"><?php esc_html_e( 'Send Request', 'solid-cement' ); ?></button>
        </form>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Highlights', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Favourite Projects', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Take a stroll through our highlight reel featuring resort-grade fairy gardens, restored heritage statues, and bespoke gnome families. Each story includes keywords and talking points to inspire your own blog posts or Elementor landing pages.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'highlight' ); ?>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Book a Consultation', 'solid-cement' ),
        'title'       => __( 'Bring Your Dream Garden to Life', 'solid-cement' ),
        'copy'        => __( 'Share your vision and we will curate a tailored plan for your outdoor sanctuary, complete with cement artistry, planting palettes, and storytelling cues for your website.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
