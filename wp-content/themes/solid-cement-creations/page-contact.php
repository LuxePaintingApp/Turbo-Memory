<?php
/**
 * Contact page template.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Contact', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Let’s Create Together', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'Share your ideas, book a site visit, or request a bespoke quote for your next garden masterpiece.', 'solid-cement' ); ?></p>
        </div>
    </div>
</section>

<section class="page-section" id="quote">
    <div class="container split-grid">
        <form class="form-card" method="post" action="#">
            <h2><?php esc_html_e( 'Request a Quote', 'solid-cement' ); ?></h2>
            <div class="form-control">
                <label for="quote-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                <input type="text" id="quote-name" name="quote_name" required />
            </div>
            <div class="form-control">
                <label for="quote-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                <input type="email" id="quote-email" name="quote_email" required />
            </div>
            <div class="form-control">
                <label for="quote-phone"><?php esc_html_e( 'Phone', 'solid-cement' ); ?></label>
                <input type="tel" id="quote-phone" name="quote_phone" />
            </div>
            <div class="form-control">
                <label for="quote-message"><?php esc_html_e( 'How can we help?', 'solid-cement' ); ?></label>
                <textarea id="quote-message" name="quote_message" required></textarea>
            </div>
            <button type="submit" class="btn"><?php esc_html_e( 'Submit', 'solid-cement' ); ?></button>
        </form>
        <div class="contact-card">
            <h2><?php esc_html_e( 'Connect with the Studio', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Email', 'solid-cement' ); ?>: <a href="mailto:studio@solidcementcreations.com">studio@solidcementcreations.com</a></p>
            <p><?php esc_html_e( 'Phone', 'solid-cement' ); ?>: <a href="tel:+611300000000">1300 000 000</a></p>
            <div class="tag-pills">
                <span class="tag-pill"><?php esc_html_e( 'Consultations', 'solid-cement' ); ?></span>
                <span class="tag-pill"><?php esc_html_e( 'Site Visits', 'solid-cement' ); ?></span>
                <span class="tag-pill"><?php esc_html_e( 'Press Enquiries', 'solid-cement' ); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container split-grid">
        <div>
            <h2><?php esc_html_e( 'Visit Our Workshop', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( '12 Artisan Way, Perth, WA 6000', 'solid-cement' ); ?></p>
            <iframe class="map-embed" title="<?php esc_attr_e( 'Solid Cement Creations location map', 'solid-cement' ); ?>" src="https://maps.google.com/maps?q=Perth%20WA&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
        <div class="card-style-b">
            <h2><?php esc_html_e( 'Business Hours & Socials', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Monday – Friday: 8am – 5pm', 'solid-cement' ); ?><br /><?php esc_html_e( 'Saturday: 9am – 2pm', 'solid-cement' ); ?><br /><?php esc_html_e( 'Sunday: By appointment', 'solid-cement' ); ?></p>
            <div class="list-buttons">
                <a class="btn btn--light" href="https://instagram.com" target="_blank" rel="noopener"><?php esc_html_e( 'Instagram', 'solid-cement' ); ?></a>
                <a class="btn btn--light" href="https://facebook.com" target="_blank" rel="noopener"><?php esc_html_e( 'Facebook', 'solid-cement' ); ?></a>
                <a class="btn btn--light" href="https://pinterest.com" target="_blank" rel="noopener"><?php esc_html_e( 'Pinterest', 'solid-cement' ); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container card-style-a">
        <h2><?php esc_html_e( 'Share Your Vision', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Tell us about your space, timeline, and dream aesthetic. We will respond within one business day with the next steps.', 'solid-cement' ); ?></p>
        <a class="btn btn--light" href="mailto:studio@solidcementcreations.com"><?php esc_html_e( 'Email the Studio', 'solid-cement' ); ?></a>
    </div>
</section>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        if ( trim( get_the_content() ) ) :
            ?>
            <section class="page-section page-section--content">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
            <?php
        endif;
    endwhile;
endif;
get_footer();
