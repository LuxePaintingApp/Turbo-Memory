<?php
/**
 * Contact page template with extended copy, multiple form elements, and SEO-rich details.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'solid-cement' ); ?>">
    <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'solid-cement' ); ?></a></li>
        <li aria-current="page"><?php esc_html_e( 'Contact', 'solid-cement' ); ?></li>
    </ol>
</nav>
<section class="page-hero contact-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Contact Solid Cement Creations', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Book a consultation, request a quote, or send us feedback about the finest cement garden statues Australia has to offer. Our concierge team responds within one business day with personalised advice and resources tailored to your project.', 'solid-cement' ); ?></p>
        <div class="chip-row" role="list">
            <span class="chip" role="listitem"><?php esc_html_e( 'book a garden design consult', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'restore my cement bird bath', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'request fairy garden styling', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section class="page-section contact-options" data-tabs>
    <div class="container">
        <div class="tabs" role="tablist" aria-label="<?php esc_attr_e( 'Contact methods', 'solid-cement' ); ?>">
            <button type="button" role="tab" aria-selected="true" aria-controls="tab-general" id="tab-general-trigger" data-tab-target="tab-general"><?php esc_html_e( 'General Enquiries', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-quote" id="tab-quote-trigger" data-tab-target="tab-quote"><?php esc_html_e( 'Quote Request', 'solid-cement' ); ?></button>
            <button type="button" role="tab" aria-selected="false" aria-controls="tab-press" id="tab-press-trigger" data-tab-target="tab-press"><?php esc_html_e( 'Press & Media', 'solid-cement' ); ?></button>
        </div>
        <div class="tab-panels">
            <div class="tab-panel is-active" id="tab-general" role="tabpanel" aria-labelledby="tab-general-trigger" data-tab-panel>
                <div class="contact-card">
                    <span class="section-subtitle"><?php esc_html_e( 'General Enquiries', 'solid-cement' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Send a Message', 'solid-cement' ); ?></h2>
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
                            <label for="contact-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                            <input type="email" id="contact-email" name="contact_email" required />
                        </div>
                        <div class="form-control">
                            <label for="contact-topic"><?php esc_html_e( 'Topic', 'solid-cement' ); ?></label>
                            <select id="contact-topic" name="contact_topic">
                                <option value="consult"><?php esc_html_e( 'Consultation Request', 'solid-cement' ); ?></option>
                                <option value="order"><?php esc_html_e( 'Existing Order', 'solid-cement' ); ?></option>
                                <option value="care"><?php esc_html_e( 'Care & Maintenance', 'solid-cement' ); ?></option>
                            </select>
                        </div>
                        <div class="form-control">
                            <label for="contact-message"><?php esc_html_e( 'Message', 'solid-cement' ); ?></label>
                            <textarea id="contact-message" name="contact_message" required></textarea>
                        </div>
                        <button type="submit" class="btn"><?php esc_html_e( 'Send Message', 'solid-cement' ); ?></button>
                    </form>
                </div>
            </div>
            <div class="tab-panel" id="tab-quote" role="tabpanel" aria-labelledby="tab-quote-trigger" hidden data-tab-panel>
                <div class="contact-card">
                    <span class="section-subtitle"><?php esc_html_e( 'Booking', 'solid-cement' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Quote Request', 'solid-cement' ); ?></h2>
                    <?php get_template_part( 'template-parts/forms/quote' ); ?>
                </div>
            </div>
            <div class="tab-panel" id="tab-press" role="tabpanel" aria-labelledby="tab-press-trigger" hidden data-tab-panel>
                <div class="contact-card">
                    <span class="section-subtitle"><?php esc_html_e( 'Press & Collaborations', 'solid-cement' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Media Enquiry', 'solid-cement' ); ?></h2>
                    <form method="post" action="#">
                        <div class="form-control">
                            <label for="press-name"><?php esc_html_e( 'Name', 'solid-cement' ); ?></label>
                            <input type="text" id="press-name" name="press_name" required />
                        </div>
                        <div class="form-control">
                            <label for="press-outlet"><?php esc_html_e( 'Media Outlet', 'solid-cement' ); ?></label>
                            <input type="text" id="press-outlet" name="press_outlet" />
                        </div>
                        <div class="form-control">
                            <label for="press-deadline"><?php esc_html_e( 'Deadline', 'solid-cement' ); ?></label>
                            <input type="date" id="press-deadline" name="press_deadline" />
                        </div>
                        <div class="form-control">
                            <label for="press-details"><?php esc_html_e( 'Story Details', 'solid-cement' ); ?></label>
                            <textarea id="press-details" name="press_details"></textarea>
                        </div>
                        <button type="submit" class="btn"><?php esc_html_e( 'Submit Request', 'solid-cement' ); ?></button>
                    </form>
                </div>
            </div>
        </div>
        <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
    </div>
</section>
<section class="page-section page-section--alt contact-location">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Visit Us', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Workshop & Showroom', 'solid-cement' ); ?></h2>
            <div class="map-placeholder"><?php esc_html_e( 'Embed your map iframe here.', 'solid-cement' ); ?></div>
            <div class="contact-table-wrapper">
                <table>
                    <caption><?php esc_html_e( 'Quick Contacts', 'solid-cement' ); ?></caption>
                    <tbody>
                        <tr>
                            <th scope="row"><?php esc_html_e( 'Phone', 'solid-cement' ); ?></th>
                            <td><?php esc_html_e( '1300 000 000', 'solid-cement' ); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?php esc_html_e( 'Email', 'solid-cement' ); ?></th>
                            <td><?php esc_html_e( 'hello@solidcementcreations.com', 'solid-cement' ); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?php esc_html_e( 'Address', 'solid-cement' ); ?></th>
                            <td><?php esc_html_e( '12 Artisan Way, Brisbane QLD 4000', 'solid-cement' ); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
                <fieldset class="form-control">
                    <legend><?php esc_html_e( 'Experience Highlights', 'solid-cement' ); ?></legend>
                    <label><input type="checkbox" name="feedback_highlights[]" value="service" /> <?php esc_html_e( 'Excellent service', 'solid-cement' ); ?></label>
                    <label><input type="checkbox" name="feedback_highlights[]" value="quality" /> <?php esc_html_e( 'Quality craftsmanship', 'solid-cement' ); ?></label>
                    <label><input type="checkbox" name="feedback_highlights[]" value="communication" /> <?php esc_html_e( 'Clear communication', 'solid-cement' ); ?></label>
                </fieldset>
                <div class="form-control">
                    <label for="feedback-message"><?php esc_html_e( 'Comments', 'solid-cement' ); ?></label>
                    <textarea id="feedback-message" name="feedback_message" required></textarea>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Submit Feedback', 'solid-cement' ); ?></button>
            </form>
        </div>
    </div>
</section>
<section class="page-section contact-hours">
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
<section class="faq-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'FAQs', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Planning Your Enquiry', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'How soon can we schedule a consultation?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We typically schedule virtual consultations within five business days and onsite visits within two weeks, depending on project scope.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Do you provide after-hours appointments?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Yes. We offer limited evening consultations for interstate clients and commercial partners by request.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'What information should I prepare?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Share inspiration images, measurements, and desired keywords or marketing goals. This helps our team craft proposals aligned with your brand and audience.', 'solid-cement' ); ?></p>
            </details>
        </div>
    </div>
</section>
<section class="page-section contact-toast">
    <div class="container">
        <div class="toast" role="status" aria-live="polite">
            <strong><?php esc_html_e( 'Hot Tip', 'solid-cement' ); ?></strong>
            <p><?php esc_html_e( 'Join our newsletter for seasonal garden care guides, exclusive gnome releases, and early access to workshop tickets.', 'solid-cement' ); ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
