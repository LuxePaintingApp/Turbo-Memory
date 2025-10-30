<?php
/**
 * Template Name: Contact
 *
 * @package SEO_Turbo_Boost
 */

get_header();
?>
<section class="swg-section swg-contact">
    <div class="swg-container">
        <?php seo_turbo_boost_maybe_render_breadcrumbs(); ?>
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Contact SmartWebsiteGenius', 'seo-turbo-boost' ); ?></span>
            <h1><?php esc_html_e( 'Let’s launch your SEO Turbo Boost experience', 'seo-turbo-boost' ); ?></h1>
            <p><?php esc_html_e( 'Fill out the form, give us a call, or drop a message. We respond within one business day.', 'seo-turbo-boost' ); ?></p>
        </div>
    </div>
</section>

<section class="swg-section">
    <div class="swg-container" style="display:grid;gap:2rem;grid-template-columns:2fr 1fr;align-items:start;">
        <div>
            <h2><?php esc_html_e( 'Send us a message', 'seo-turbo-boost' ); ?></h2>
            <form class="swg-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
                <input type="hidden" name="action" value="seo_turbo_contact" />
                <div class="swg-form-row">
                    <label>
                        <?php esc_html_e( 'Full Name', 'seo-turbo-boost' ); ?>
                        <input type="text" name="contact-name" required />
                    </label>
                    <label>
                        <?php esc_html_e( 'Email', 'seo-turbo-boost' ); ?>
                        <input type="email" name="contact-email" required />
                    </label>
                </div>
                <div class="swg-form-row">
                    <label>
                        <?php esc_html_e( 'Preferred contact method', 'seo-turbo-boost' ); ?>
                        <select name="contact-method">
                            <option value="email"><?php esc_html_e( 'Email', 'seo-turbo-boost' ); ?></option>
                            <option value="phone"><?php esc_html_e( 'Phone', 'seo-turbo-boost' ); ?></option>
                            <option value="video"><?php esc_html_e( 'Video call', 'seo-turbo-boost' ); ?></option>
                        </select>
                    </label>
                    <div>
                        <span><?php esc_html_e( 'Project urgency', 'seo-turbo-boost' ); ?></span>
                        <label class="swg-checkbox"><input type="radio" name="contact-urgency" value="normal" checked /> <?php esc_html_e( 'Planning', 'seo-turbo-boost' ); ?></label>
                        <label class="swg-checkbox"><input type="radio" name="contact-urgency" value="fast" /> <?php esc_html_e( 'Need quick turnaround', 'seo-turbo-boost' ); ?></label>
                    </div>
                </div>
                <label>
                    <?php esc_html_e( 'How can we help?', 'seo-turbo-boost' ); ?>
                    <textarea name="contact-message" rows="4" required></textarea>
                </label>
                <div class="swg-hero-cta">
                    <button type="submit" class="swg-btn"><?php esc_html_e( 'Send message', 'seo-turbo-boost' ); ?></button>
                    <label class="swg-toggle">
                        <input type="checkbox" name="contact-updates" value="1" checked />
                        <span class="swg-toggle-slider"></span>
                    </label>
                    <span><?php esc_html_e( 'Receive launch alerts', 'seo-turbo-boost' ); ?></span>
                </div>
            </form>
        </div>
        <aside>
            <h2><?php esc_html_e( 'Contact details', 'seo-turbo-boost' ); ?></h2>
            <ul class="swg-contact-list">
                <li><strong><?php esc_html_e( 'Phone', 'seo-turbo-boost' ); ?>:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></li>
                <li><strong><?php esc_html_e( 'Email', 'seo-turbo-boost' ); ?>:</strong> <a href="mailto:hello@smartwebsitegenius.com">hello@smartwebsitegenius.com</a></li>
                <li><strong><?php esc_html_e( 'HQ', 'seo-turbo-boost' ); ?>:</strong> 88 Velocity Ave, Suite 5, Austin, TX</li>
            </ul>
            <div class="swg-map">
                <iframe src="https://maps.google.com/maps?q=Austin%20Texas&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="240" loading="lazy" allowfullscreen title="SmartWebsiteGenius location"></iframe>
            </div>
        </aside>
    </div>
</section>

<section class="swg-section swg-social-proof">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Trusted by', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Brands scaling with SEO Turbo Boost', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-logo-cloud">
            <img src="https://dummyimage.com/120x60/1f6feb/ffffff&text=Skyline" alt="Skyline" />
            <img src="https://dummyimage.com/120x60/ff6b1a/ffffff&text=Pulse" alt="Pulse" />
            <img src="https://dummyimage.com/120x60/ffc929/ffffff&text=Beacon" alt="Beacon" />
            <img src="https://dummyimage.com/120x60/ff2d55/ffffff&text=Momentum" alt="Momentum" />
        </div>
    </div>
</section>

<section class="swg-section swg-contact-faq">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Before you reach out', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Frequently asked questions', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-accordion">
            <details>
                <summary><?php esc_html_e( 'Do you work with existing Elementor layouts?', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                <p><?php esc_html_e( 'Yes. SEO Turbo Boost is purpose-built to extend Elementor without breaking styling or speed budgets.', 'seo-turbo-boost' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Can we install a child theme?', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                <p><?php esc_html_e( 'Absolutely. The theme is architected for child themes and Website Skins plugin support.', 'seo-turbo-boost' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'What’s your response time?', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                <p><?php esc_html_e( 'We typically reply within one business day with next-step recommendations.', 'seo-turbo-boost' ); ?></p>
            </details>
        </div>
    </div>
</section>
<?php
get_footer();
