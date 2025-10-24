<?php
/**
 * Contact page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Contact Solid Cement Creations', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Book a consultation, request a quote, or send us feedback.', 'solid-cement' ); ?></p>
    </div>
</section>

<section class="page-section">
    <div class="container contact-tabs">
        <div class="contact-card">
            <span class="section-subtitle"><?php esc_html_e( 'General Enquiries', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Contact Form', 'solid-cement' ); ?></h2>
            <form method="post" action="#">
                <div class="form-control">
                    <label for="contact-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                    <input type="text" id="contact-name" name="contact_name" required />
                </div>
                <div class="form-control">
                    <label for="contact-phone"><?php esc_html_e( 'Phone', 'solid-cement' ); ?></label>
                    <input type="tel" id="contact-phone" name="contact_phone" />
                </div>
                <div class="form-control">
                    <label for="contact-message"><?php esc_html_e( 'Message', 'solid-cement' ); ?></label>
                    <textarea id="contact-message" name="contact_message" required></textarea>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Send Message', 'solid-cement' ); ?></button>
            </form>
        </div>
        <div class="contact-card">
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Quote Request', 'solid-cement' ); ?></h2>
            <?php get_template_part( 'template-parts/forms/quote' ); ?>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Visit Us', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Workshop & Showroom', 'solid-cement' ); ?></h2>
            <div class="map-placeholder"><?php esc_html_e( 'Embed your map iframe here.', 'solid-cement' ); ?></div>
        </div>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Feedback', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Leave a Quick Review', 'solid-cement' ); ?></h2>
            <form class="contact-card" method="post" action="#">
                <div class="form-control">
                    <label for="feedback-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                    <input type="text" id="feedback-name" name="feedback_name" required />
                </div>
                <div class="form-control">
                    <label for="feedback-rating"><?php esc_html_e( 'Rating', 'solid-cement' ); ?></label>
                    <select id="feedback-rating" name="feedback_rating">
                        <option value="5">★★★★★</option>
                        <option value="4">★★★★☆</option>
                        <option value="3">★★★☆☆</option>
                        <option value="2">★★☆☆☆</option>
                        <option value="1">★☆☆☆☆</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="feedback-message"><?php esc_html_e( 'Comments', 'solid-cement' ); ?></label>
                    <textarea id="feedback-message" name="feedback_message" required></textarea>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Submit Feedback', 'solid-cement' ); ?></button>
            </form>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Business Hours', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'We\'re Here for You', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Monday – Friday: 8am – 5pm | Saturday: 9am – 2pm | Sunday: By appointment', 'solid-cement' ); ?></p>
        <p><?php esc_html_e( 'Phone: 1300 000 000 | Email: hello@solidcementcreations.com', 'solid-cement' ); ?></p>
        <div class="flex">
            <a class="btn" href="https://instagram.com" target="_blank" rel="noopener"><?php esc_html_e( 'Instagram', 'solid-cement' ); ?></a>
            <a class="btn" href="https://facebook.com" target="_blank" rel="noopener"><?php esc_html_e( 'Facebook', 'solid-cement' ); ?></a>
            <a class="btn" href="https://pinterest.com" target="_blank" rel="noopener"><?php esc_html_e( 'Pinterest', 'solid-cement' ); ?></a>
        </div>
    </div>
</section>
<?php
get_footer();
