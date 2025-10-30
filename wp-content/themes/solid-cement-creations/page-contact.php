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
    </div>
</section>
<section class="page-section">
    <div class="container contact-tabs" data-tabs>
        <div class="tabs" role="tablist">
            <button class="tab-button is-active" id="tab-general" aria-controls="contact-general" aria-selected="true" data-tab-target="contact-general"><?php esc_html_e( 'General Enquiries', 'solid-cement' ); ?></button>
            <button class="tab-button" id="tab-quote" aria-controls="quote" aria-selected="false" data-tab-target="quote"><?php esc_html_e( 'Book a Quote', 'solid-cement' ); ?></button>
        </div>
        <div class="contact-card tab-panel is-active" id="contact-general" role="tabpanel" aria-labelledby="tab-general">
            <span class="section-subtitle"><?php esc_html_e( 'General Enquiries', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Contact Form', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Share your ideas, inspiration images, or feedback and our concierge team will respond within one business day.', 'solid-cement' ); ?></p>
            <form method="post" action="#">
                <div class="form-control">
                    <label for="contact-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                    <input type="text" id="contact-name" name="contact_name" required />
                </div>
                <div class="form-control">
                    <label for="contact-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                    <input type="email" id="contact-email" name="contact_email" required />
                </div>
                <div class="form-control">
                    <label for="contact-phone"><?php esc_html_e( 'Phone', 'solid-cement' ); ?></label>
                    <input type="tel" id="contact-phone" name="contact_phone" />
                </div>
                <div class="form-control">
                    <label for="contact-message"><?php esc_html_e( 'Message', 'solid-cement' ); ?></label>
                    <textarea id="contact-message" name="contact_message" required></textarea>
                </div>
                <div class="form-control form-control--inline">
                    <label class="toggle">
                        <input type="checkbox" name="contact_newsletter" value="1" checked />
                        <span><?php esc_html_e( 'Send me garden design inspiration and workshop invitations.', 'solid-cement' ); ?></span>
                    </label>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Send Message', 'solid-cement' ); ?></button>
            </form>
        </div>
        <div class="contact-card tab-panel" id="quote" role="tabpanel" aria-labelledby="tab-quote">
            <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Quote Request', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Provide project details so we can craft a tailored proposal featuring timelines, materials, and investment options.', 'solid-cement' ); ?></p>
            <?php get_template_part( 'template-parts/forms/quote' ); ?>
        </div>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Visit Us', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Workshop & Showroom', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Immerse yourself in curated fairy garden vignettes, tactile material libraries, and live sculpting demonstrations. Appointments ensure personalised attention.', 'solid-cement' ); ?></p>
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
                <div class="form-control form-control--inline">
                    <label class="toggle">
                        <input type="checkbox" name="feedback_feature" value="1" />
                        <span><?php esc_html_e( 'Yes, you may feature my review on the website.', 'solid-cement' ); ?></span>
                    </label>
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
        <div class="hours-table" role="region" aria-label="Business Hours">
            <table>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Day', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Hours', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Monday – Friday', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( '8:00am – 5:00pm', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Saturday', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( '9:00am – 2:00pm', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Sunday', 'solid-cement' ); ?></th>
                        <td><?php esc_html_e( 'By appointment', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><?php esc_html_e( 'Phone: 1300 000 000 | Email: hello@solidcementcreations.com', 'solid-cement' ); ?></p>
        <div class="flex">
            <a class="btn" href="https://instagram.com" target="_blank" rel="noopener"><?php esc_html_e( 'Instagram', 'solid-cement' ); ?></a>
            <a class="btn" href="https://facebook.com" target="_blank" rel="noopener"><?php esc_html_e( 'Facebook', 'solid-cement' ); ?></a>
            <a class="btn" href="https://pinterest.com" target="_blank" rel="noopener"><?php esc_html_e( 'Pinterest', 'solid-cement' ); ?></a>
        </div>
        <div class="snackbar" role="status" aria-live="polite">
            <p><?php esc_html_e( 'Thank you for reaching out! Our concierge team is currently responding to enquiries received within the last 12 hours.', 'solid-cement' ); ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
