<?php
/**
 * About page template.
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
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p><?php echo esc_html( get_post_meta( get_the_ID(), 'solidcement_about_tagline', true ) ); ?></p>
    </div>
</section>

<section class="page-section">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Studio Credentials', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'Our atelier has handcrafted more than 2,500 bespoke cement garden statues, fairy garden layouts, and bird bath restorations. Each milestone feeds into our Elementor-friendly theme so your storytelling feels just as tailored.', 'solid-cement' ); ?></p>
            <div class="chip-row">
                <span class="chip">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm1 17.93V18h-2v1.93A8.013 8.013 0 014.07 13H6v-2H4.07A8.013 8.013 0 0111 4.07V6h2V4.07A8.013 8.013 0 0119.93 11H18v2h1.93A8.013 8.013 0 0113 19.93z"/></svg>
                    <?php esc_html_e( 'Family-run since 1998', 'solid-cement' ); ?>
                </span>
                <span class="chip">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l1.45 4.64L18 6.27l-3.73 2.88L15.64 14 12 11.73 8.36 14l1.37-4.85L6 6.27l4.55.37z"/></svg>
                    <?php esc_html_e( 'Awarded 7 design prizes', 'solid-cement' ); ?>
                </span>
            </div>
            <div class="popover" id="about-popover">
                <button class="btn btn--outline" type="button" data-popover-toggle="about-popover"><?php esc_html_e( 'View restoration highlights', 'solid-cement' ); ?></button>
                <div class="popover__panel">
                    <p><?php esc_html_e( 'Our restoration portfolio features heritage fountains, heirloom statues, and modern planters. The Elementor sections within this theme let you narrate each success with before-and-after galleries, testimonials, and maintenance tips.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </aside>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Brand Story', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'From humble beginnings to luxury garden artistry', 'solid-cement' ); ?></h2>
            <p class="section-lede"><?php esc_html_e( 'Solid Cement Creations grew from a single kiln into a studio renowned for cement outdoor sculptures that celebrate Australian gardens.', 'solid-cement' ); ?></p>
            <div class="page-content">
                <?php
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
                ?>
            </div>
            <p><?php esc_html_e( 'Founder Elise Hart sketched her first garden gnome during a rainy Brisbane weekend. What began as a playful experiment soon evolved into a thriving studio known for glamorous garden statues, fairy garden villages, and site-specific garden design. The theme you are exploring translates that craftsmanship into a digital experience, pairing evocative copywriting with responsive, Elementor-friendly components that make every page feel like a guided stroll through our workshop.', 'solid-cement' ); ?></p>
            <p><?php esc_html_e( 'Our team now includes sculptors, horticulturists, lighting designers, and restoration specialists. We host weekly garden tours, run creative workshops for families, and capture behind-the-scenes stories that fuel long-form blog posts. The About page template includes dedicated areas for brand storytelling, maker introductions, mission statements, and client highlights so you can weave your own narrative with ease.', 'solid-cement' ); ?></p>
            <div class="tabs" data-tabs>
                <div class="tabs__list" role="tablist">
                    <button class="tabs__button" type="button" role="tab"><?php esc_html_e( '1990s Origins', 'solid-cement' ); ?></button>
                    <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Modern Atelier', 'solid-cement' ); ?></button>
                    <button class="tabs__button" type="button" role="tab"><?php esc_html_e( 'Future Vision', 'solid-cement' ); ?></button>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'We started with reclaimed molds and a fierce curiosity about cement artistry. Early commissions focused on garden gnomes for family-run nurseries and intimate fairy garden scenes built in terracotta pots. The warmth of those first clients inspired our commitment to handcrafted service and generous storytelling.', 'solid-cement' ); ?></p>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'Today our studio spans design labs, finishing bays, and a gallery garden filled with sample installations. We document every step with high-resolution photography and narrative captions, then feed those assets into Elementor sections like sliders, accordions, and cards so your website mirrors the in-person experience.', 'solid-cement' ); ?></p>
                </div>
                <div class="tabs__panel" role="tabpanel">
                    <p><?php esc_html_e( 'The future centres on sustainability, inclusive community workshops, and digital experiences that let clients preview gnome poses or fairy garden lighting from their phones. Our WordPress theme is built to scale with that vision — plug in booking systems, membership content, or e-commerce and keep the luxurious aesthetic intact.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <div class="app-bar">
                <span class="badge"><?php esc_html_e( 'Studio Update', 'solid-cement' ); ?></span>
                <p><?php esc_html_e( 'We recently introduced a cement finishing lab dedicated to iridescent glazes. Tap below to read the behind-the-scenes article or use Elementor to swap in your latest news.', 'solid-cement' ); ?></p>
                <a class="btn" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Read the Journal', 'solid-cement' ); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Meet the Maker', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( $maker_name ? $maker_name : __( 'Your Artisan', 'solid-cement' ) ); ?></h2>
            <?php if ( $maker_title ) : ?>
                <p><strong><?php echo esc_html( $maker_title ); ?></strong></p>
            <?php endif; ?>
            <?php if ( $maker_bio ) : ?>
                <p><?php echo esc_html( $maker_bio ); ?></p>
            <?php else : ?>
                <p><?php esc_html_e( 'Share your passion for cement artistry, the care behind each mould, and what makes your cement outdoor sculptures unique.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'Use Elementor hotspots or tooltips like the one below to highlight the tools of your trade.', 'solid-cement' ); ?></p>
                <div class="tooltip" aria-label="<?php esc_attr_e( 'Our favourite sculpting spatula', 'solid-cement' ); ?>">
                    <button class="icon-btn" type="button">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M2 19l9-9 4 4-9 9H2zM20.7 7.3l-4-4a1 1 0 00-1.4 0L13 5.6l5.4 5.4 2.3-2.3a1 1 0 000-1.4z"/></svg>
                    </button>
                    <span class="tooltip__bubble"><?php esc_html_e( 'Hand-forged tools keep details crisp on every garden gnome.', 'solid-cement' ); ?></span>
                </div>
            <?php endif; ?>
            <button class="btn" type="button" data-modal-open="about-modal"><?php esc_html_e( 'View Artisan Manifesto', 'solid-cement' ); ?></button>
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

<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Mission & Values', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Quality, Care, Creativity', 'solid-cement' ); ?></h2>
        </div>
        <div>
            <?php if ( $mission ) : ?>
                <p><?php echo esc_html( $mission ); ?></p>
            <?php else : ?>
                <p><?php esc_html_e( 'Describe your commitment to bespoke craftsmanship, longevity, and client delight.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'The Elementor-ready layout lets you expand this section into full-width storytelling or bite-sized cards. Pair the mission statement with data badges to emphasise sustainability stats, like litres of water recycled or fairy garden workshops hosted.', 'solid-cement' ); ?></p>
            <?php endif; ?>
            <?php if ( $values ) : ?>
                <ul>
                    <?php foreach ( preg_split( '/\r\n|\r|\n/', $values ) as $value ) : ?>
                        <?php if ( trim( $value ) ) : ?>
                            <li><?php echo esc_html( $value ); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Highlights', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Favourite Projects', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Celebrate garden transformations with an interactive table of testimonials and a gallery grid pulled from your project custom post type. Use badges to flag which projects feature garden gnomes, fairy garden lighting, or large-scale garden design.', 'solid-cement' ); ?></p>
        <div class="table-wrapper">
            <table class="luxe-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e( 'Project', 'solid-cement' ); ?></th>
                        <th><?php esc_html_e( 'Location', 'solid-cement' ); ?></th>
                        <th><?php esc_html_e( 'Highlight', 'solid-cement' ); ?></th>
                        <th><?php esc_html_e( 'Service', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e( 'Evergreen Estate', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Toowoomba', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Custom garden gnome parade with solar fireflies', 'solid-cement' ); ?></td>
                        <td><span class="badge"><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Harbour Hideaway', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Sydney', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Cliffside fairy garden with cascading bird bath', 'solid-cement' ); ?></td>
                        <td><span class="badge"><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Riverside Retreat', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Brisbane', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Luxury garden design featuring terrazzo paving and lighting', 'solid-cement' ); ?></td>
                        <td><span class="badge"><?php esc_html_e( 'Garden Design', 'solid-cement' ); ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php solidcement_render_gallery( 'highlight' ); ?>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Ask Our Artisan', 'solid-cement' ); ?></h3>
            <p><?php esc_html_e( 'Use the form to submit custom questions about garden statues, fairy garden materials, or restoration schedules. The toast notification confirms receipt, reinforcing concierge-level service.', 'solid-cement' ); ?></p>
        </aside>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Connect', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Send a Note to the Studio', 'solid-cement' ); ?></h2>
            <form class="contact-card" method="post" action="#" data-toast-target="about-toast">
                <div class="form-control">
                    <label for="about-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                    <input type="text" id="about-name" name="about_name" required />
                </div>
                <div class="form-control">
                    <label for="about-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                    <input type="email" id="about-email" name="about_email" required />
                </div>
                <div class="form-control">
                    <label for="about-message"><?php esc_html_e( 'Message', 'solid-cement' ); ?></label>
                    <textarea id="about-message" name="about_message" rows="4" placeholder="<?php esc_attr_e( 'Share your garden statue dreams...', 'solid-cement' ); ?>"></textarea>
                </div>
                <div class="form-control">
                    <label for="about-channel"><?php esc_html_e( 'Preferred Contact', 'solid-cement' ); ?></label>
                    <select id="about-channel" name="about_channel">
                        <option value="email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></option>
                        <option value="phone"><?php esc_html_e( 'Phone', 'solid-cement' ); ?></option>
                        <option value="video"><?php esc_html_e( 'Video Consult', 'solid-cement' ); ?></option>
                    </select>
                </div>
                <div class="form-control">
                    <fieldset>
                        <legend><?php esc_html_e( 'Join Our Circles', 'solid-cement' ); ?></legend>
                        <label><input type="checkbox" name="about_updates[]" value="journal" /> <?php esc_html_e( 'Journal updates', 'solid-cement' ); ?></label>
                        <label><input type="checkbox" name="about_updates[]" value="events" /> <?php esc_html_e( 'Workshop invites', 'solid-cement' ); ?></label>
                        <label><input type="checkbox" name="about_updates[]" value="offers" /> <?php esc_html_e( 'Seasonal offers', 'solid-cement' ); ?></label>
                    </fieldset>
                </div>
                <button class="btn" type="submit"><?php esc_html_e( 'Send Message', 'solid-cement' ); ?></button>
            </form>
        </div>
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
        'copy'        => __( 'Share your vision and we will curate a tailored plan for your outdoor sanctuary.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>

<div class="toast" role="status" aria-live="polite" id="about-toast">
    <span class="toast__badge">★</span>
    <p><?php esc_html_e( 'Your note just landed in our artisan inbox. We will reply with sketches soon.', 'solid-cement' ); ?></p>
</div>

<div class="modal" id="about-modal" role="dialog" aria-modal="true" aria-labelledby="about-modal-title">
    <div class="modal__dialog">
        <button class="icon-btn modal__close" type="button" data-modal-close aria-label="<?php esc_attr_e( 'Close manifesto', 'solid-cement' ); ?>">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18.3 5.71L12 12l6.3 6.29-1.41 1.42L10.59 13.4 4.3 19.71 2.89 18.3 9.17 12 2.89 5.71 4.3 4.29 10.59 10.6l6.3-6.3z"/></svg>
        </button>
        <h2 id="about-modal-title"><?php esc_html_e( 'Artisan Manifesto', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'We vow to craft cement garden statues that last for generations, to honour Australian flora and fauna with respectful detail, and to help every client see their garden as a living gallery. Print this manifesto, embed it in Elementor, or repurpose it for pitch decks.', 'solid-cement' ); ?></p>
        <ul class="list-check">
            <li><?php esc_html_e( 'Sustainable sourcing for aggregates, pigments, and sealants', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Responsive customer care with direct access to artisans', 'solid-cement' ); ?></li>
            <li><?php esc_html_e( 'Story-driven design so every fairy garden tells a tale', 'solid-cement' ); ?></li>
        </ul>
        <button class="btn" type="button" data-modal-close><?php esc_html_e( 'Close Manifesto', 'solid-cement' ); ?></button>
    </div>
</div>

<div class="drawer" data-drawer id="about-drawer">
    <div class="drawer__handle" aria-hidden="true"></div>
    <h2><?php esc_html_e( 'Studio Soundtrack', 'solid-cement' ); ?></h2>
    <p><?php esc_html_e( 'Toggle your creative mode. This sheet doubles as a playful UI element and a real resource where we share playlists, podcasts, and inspiration boards that fuel our cement artistry.', 'solid-cement' ); ?></p>
    <form class="contact-card" method="post" action="#" data-toast-target="about-toast">
        <div class="form-control">
            <label class="toggle"> <input type="checkbox" checked /><span class="toggle__slider"></span></label>
            <p><?php esc_html_e( 'Ambient workshop vibes', 'solid-cement' ); ?></p>
        </div>
        <div class="form-control" data-range-output>
            <label for="about-volume"><?php esc_html_e( 'Preferred Volume', 'solid-cement' ); ?></label>
            <div class="slider-display">
                <input class="range-input" type="range" id="about-volume" name="about_volume" min="0" max="100" value="65" />
                <span data-output-value>65</span>
            </div>
        </div>
        <div class="form-control">
            <label><input type="radio" name="about_station" value="classical" checked /> <?php esc_html_e( 'Classical Garden', 'solid-cement' ); ?></label>
            <label><input type="radio" name="about_station" value="nature" /> <?php esc_html_e( 'Nature Soundscape', 'solid-cement' ); ?></label>
        </div>
        <button class="btn" type="submit" data-drawer-close="about-drawer"><?php esc_html_e( 'Save Listening Notes', 'solid-cement' ); ?></button>
    </form>
</div>

<?php get_footer(); ?>
