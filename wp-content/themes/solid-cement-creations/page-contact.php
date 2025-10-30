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
        <p><?php esc_html_e( 'Book a consultation, request a quote, or send us feedback about the finest cement garden statues Australia has to offer.', 'solid-cement' ); ?></p>
        <div class="chip-row">
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10H7l5.5-5.5L11 3l-8 9 8 9 1.5-1.5L7 12h14z"/></svg>
                <?php esc_html_e( 'Fast responses', 'solid-cement' ); ?>
            </span>
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 00-3.16 19.49c.5.09.68-.22.68-.48v-1.69c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.52 1.04 1.52 1.04.89 1.52 2.34 1.08 2.91.83.09-.64.35-1.08.63-1.33-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.28.1-2.68 0 0 .84-.27 2.75 1.02A9.6 9.6 0 0112 6.8c.85.004 1.7.115 2.5.337 1.9-1.29 2.74-1.02 2.74-1.02.56 1.4.21 2.43.1 2.68.64.7 1.03 1.59 1.03 2.68 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.86v2.76c0 .27.18.57.69.47A10 10 0 0012 2z"/></svg>
                <?php esc_html_e( 'Social support', 'solid-cement' ); ?>
            </span>
        </div>
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
        <div class="contact-card" id="quote">
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
        <h2 class="section-title"><?php esc_html_e( "We're Here for You", 'solid-cement' ); ?></h2>
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
