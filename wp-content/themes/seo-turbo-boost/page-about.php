<?php
/**
 * Template Name: About SmartWebsiteGenius
 *
 * @package SEO_Turbo_Boost
 */

get_header();
?>
<section class="swg-section swg-about-hero">
    <div class="swg-container">
        <?php seo_turbo_boost_maybe_render_breadcrumbs(); ?>
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'About SmartWebsiteGenius', 'seo-turbo-boost' ); ?></span>
            <h1><?php esc_html_e( 'Mission-led innovators building the fastest SEO experiences', 'seo-turbo-boost' ); ?></h1>
        </div>
        <div class="swg-tabs">
            <div class="swg-tablist" role="tablist" aria-controls="mission-panels">
                <button role="tab" id="mission-tab" aria-controls="mission-panel" aria-selected="true"><?php esc_html_e( 'Mission', 'seo-turbo-boost' ); ?></button>
                <button role="tab" id="vision-tab" aria-controls="vision-panel" aria-selected="false"><?php esc_html_e( 'Vision', 'seo-turbo-boost' ); ?></button>
            </div>
            <div id="mission-panels">
                <div id="mission-panel" role="tabpanel">
                    <p><?php esc_html_e( 'Empower bold entrepreneurs with a WordPress theme engineered to demolish performance roadblocks and dominate SEO opportunities.', 'seo-turbo-boost' ); ?></p>
                </div>
                <div id="vision-panel" role="tabpanel" hidden>
                    <p><?php esc_html_e( 'Lead the 2025 digital landscape with sustainable, lightning-fast experiences that adapt to every growth strategy and builder workflow.', 'seo-turbo-boost' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="swg-section swg-team-section">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Meet the experts', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Founder story & lightning squad', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-cards">
            <?php
            $team = [
                [
                    'name'  => __( 'Avery Brooks', 'seo-turbo-boost' ),
                    'role'  => __( 'Founder & Lead Strategist', 'seo-turbo-boost' ),
                    'bio'   => __( 'Architected over 200 SEO-focused websites surpassing 1B annual impressions.', 'seo-turbo-boost' ),
                ],
                [
                    'name'  => __( 'Camila Ortiz', 'seo-turbo-boost' ),
                    'role'  => __( 'Performance Engineer', 'seo-turbo-boost' ),
                    'bio'   => __( 'Obsessed with shaving milliseconds using critical CSS and CDN intelligence.', 'seo-turbo-boost' ),
                ],
                [
                    'name'  => __( 'Noah Li', 'seo-turbo-boost' ),
                    'role'  => __( 'Experience Designer', 'seo-turbo-boost' ),
                    'bio'   => __( 'Designs conversion funnels with emotional storytelling and accessibility in focus.', 'seo-turbo-boost' ),
                ],
            ];
            foreach ( $team as $member ) :
                ?>
                <article class="swg-card" aria-describedby="<?php echo esc_attr( sanitize_title( $member['name'] ) ); ?>-bio">
                    <h3><?php echo esc_html( $member['name'] ); ?></h3>
                    <p><strong><?php echo esc_html( $member['role'] ); ?></strong></p>
                    <p id="<?php echo esc_attr( sanitize_title( $member['name'] ) ); ?>-bio"><?php echo esc_html( $member['bio'] ); ?></p>
                    <button class="swg-icon-btn" type="button" data-tooltip="<?php esc_attr_e( 'Connect on LinkedIn', 'seo-turbo-boost' ); ?>">in</button>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="swg-section swg-process-section">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Our workflow', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Velocity-fueled process', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-stepper" role="list">
            <div class="swg-step" role="listitem">
                <span>1</span>
                <div>
                    <h3><?php esc_html_e( 'Discovery Sync', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Audit performance, keywords, and conversion paths to craft a targeted acceleration plan.', 'seo-turbo-boost' ); ?></p>
                </div>
            </div>
            <div class="swg-step" role="listitem">
                <span>2</span>
                <div>
                    <h3><?php esc_html_e( 'Blueprint & Build', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Customize the theme structure, Elementor templates, and schema connections.', 'seo-turbo-boost' ); ?></p>
                </div>
            </div>
            <div class="swg-step" role="listitem">
                <span>3</span>
                <div>
                    <h3><?php esc_html_e( 'Launch & Iterate', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Monitor analytics, automate reporting, and continuously optimize micro-conversions.', 'seo-turbo-boost' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="swg-section swg-values-section">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'What we stand for', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Core values aligned with your wins', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-accordion">
            <details open>
                <summary><?php esc_html_e( 'Speed with integrity', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                <p><?php esc_html_e( 'We never sacrifice stability or accessibility in pursuit of speed. Every enhancement is inclusive.', 'seo-turbo-boost' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Data-driven clarity', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                <p><?php esc_html_e( 'Transparent reporting and measurable goals keep stakeholders aligned and informed.', 'seo-turbo-boost' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Collaborative innovation', 'seo-turbo-boost' ); ?> <span>+</span></summary>
                <p><?php esc_html_e( 'We co-create with your marketing team to shape agile experiments that move rankings faster.', 'seo-turbo-boost' ); ?></p>
            </details>
        </div>
    </div>
</section>

<section class="swg-section swg-certifications">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Proof & trust', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Awards, certifications, and partners', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-logo-cloud">
            <img src="https://dummyimage.com/120x60/ff6b1a/ffffff&text=Google+Partner" alt="Google Partner" />
            <img src="https://dummyimage.com/120x60/1f6feb/ffffff&text=Elementor" alt="Elementor" />
            <img src="https://dummyimage.com/120x60/ffc929/ffffff&text=HubSpot" alt="HubSpot" />
            <img src="https://dummyimage.com/120x60/ff2d55/ffffff&text=Clutch" alt="Clutch" />
        </div>
        <div class="swg-chip-group" role="list">
            <span class="swg-chip" role="listitem"><?php esc_html_e( 'Core Web Vitals Specialist', 'seo-turbo-boost' ); ?></span>
            <span class="swg-chip" role="listitem"><?php esc_html_e( 'Schema Pro Certified', 'seo-turbo-boost' ); ?></span>
            <span class="swg-chip" role="listitem"><?php esc_html_e( 'Elementor Expert Network', 'seo-turbo-boost' ); ?></span>
        </div>
    </div>
</section>

<section class="swg-section swg-about-cta">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Ready to sprint?', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Let’s build your SEO growth engine', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-hero-cta">
            <a class="swg-btn" href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Explore services', 'seo-turbo-boost' ); ?></a>
            <a class="swg-link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Book a consultation', 'seo-turbo-boost' ); ?></a>
        </div>
    </div>
</section>
<?php
get_footer();
