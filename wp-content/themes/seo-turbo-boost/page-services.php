<?php
/**
 * Template Name: Services
 *
 * @package SEO_Turbo_Boost
 */

get_header();
?>
<section class="swg-section swg-services-hero">
    <div class="swg-container">
        <?php seo_turbo_boost_maybe_render_breadcrumbs(); ?>
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'SmartWebsiteGenius Services', 'seo-turbo-boost' ); ?></span>
            <h1><?php esc_html_e( 'High-octane SEO campaigns engineered for 2025', 'seo-turbo-boost' ); ?></h1>
            <p><?php esc_html_e( 'From technical cleanups to content dominance, SEO Turbo Boost delivers an Elementor-friendly stack that stays blazingly quick.', 'seo-turbo-boost' ); ?></p>
        </div>
        <div class="swg-hero-cta">
            <a class="swg-btn" href="#consultation"><?php esc_html_e( 'Request a Quote', 'seo-turbo-boost' ); ?></a>
            <a class="swg-link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Talk to a strategist', 'seo-turbo-boost' ); ?></a>
        </div>
    </div>
</section>

<section class="swg-section swg-services-list">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Services overview', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Solutions built to win rankings', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-cards">
            <?php
            $service_blocks = [
                [
                    'title' => __( 'Turbo Technical SEO', 'seo-turbo-boost' ),
                    'desc'  => __( 'Site architecture, schema, crawl budget optimization, and CWV improvements.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Content Velocity Program', 'seo-turbo-boost' ),
                    'desc'  => __( 'Editorial calendars, conversion copy, and AI-assisted briefs aligned to demand.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Authority Amplifier', 'seo-turbo-boost' ),
                    'desc'  => __( 'Digital PR, backlinks, and brand amplification across high-impact publications.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Local Domination Suite', 'seo-turbo-boost' ),
                    'desc'  => __( 'Local landing pages, review funnels, and hyper-targeted neighborhood campaigns.', 'seo-turbo-boost' ),
                ],
            ];
            foreach ( $service_blocks as $block ) :
                ?>
                <article class="swg-card">
                    <h3><?php echo esc_html( $block['title'] ); ?></h3>
                    <p><?php echo esc_html( $block['desc'] ); ?></p>
                    <a class="swg-btn" href="#consultation"><?php esc_html_e( 'Learn more', 'seo-turbo-boost' ); ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="swg-section swg-benefits">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'What you gain', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'ROI benchmarks from recent campaigns', 'seo-turbo-boost' ); ?></h2>
        </div>
        <table class="swg-table" aria-label="ROI results">
            <thead>
                <tr>
                    <th><?php esc_html_e( 'Service', 'seo-turbo-boost' ); ?></th>
                    <th><?php esc_html_e( 'Result', 'seo-turbo-boost' ); ?></th>
                    <th><?php esc_html_e( 'Timeline', 'seo-turbo-boost' ); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php esc_html_e( 'Technical SEO Sprint', 'seo-turbo-boost' ); ?></td>
                    <td><?php esc_html_e( '+58% organic visibility', 'seo-turbo-boost' ); ?></td>
                    <td><?php esc_html_e( '45 days', 'seo-turbo-boost' ); ?></td>
                </tr>
                <tr>
                    <td><?php esc_html_e( 'Content Velocity Program', 'seo-turbo-boost' ); ?></td>
                    <td><?php esc_html_e( '3x keyword footprint', 'seo-turbo-boost' ); ?></td>
                    <td><?php esc_html_e( '90 days', 'seo-turbo-boost' ); ?></td>
                </tr>
                <tr>
                    <td><?php esc_html_e( 'Authority Amplifier', 'seo-turbo-boost' ); ?></td>
                    <td><?php esc_html_e( '+42 high-quality links', 'seo-turbo-boost' ); ?></td>
                    <td><?php esc_html_e( '60 days', 'seo-turbo-boost' ); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="swg-section swg-process-timeline">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'How we deliver', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Transparent roadmap from audit to growth', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-stepper" role="list">
            <div class="swg-step" role="listitem">
                <span>1</span>
                <div>
                    <h3><?php esc_html_e( 'Insight Workshop', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Deep dive into analytics, competitors, and buyer intent to prioritize wins.', 'seo-turbo-boost' ); ?></p>
                </div>
            </div>
            <div class="swg-step" role="listitem">
                <span>2</span>
                <div>
                    <h3><?php esc_html_e( 'Execution Sprints', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Bi-weekly deployments with Website Skins compatibility for rapid design swaps.', 'seo-turbo-boost' ); ?></p>
                </div>
            </div>
            <div class="swg-step" role="listitem">
                <span>3</span>
                <div>
                    <h3><?php esc_html_e( 'Optimization Loop', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Iterative testing, heatmap reviews, and copy refinements to scale conversions.', 'seo-turbo-boost' ); ?></p>
                </div>
            </div>
        </div>
        <div class="swg-progress" aria-hidden="true">
            <span style="width: 75%"></span>
        </div>
    </div>
</section>

<section class="swg-section swg-case-studies">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Proof of impact', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Featured case studies & partners', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-carousel" data-swg-carousel>
            <div class="swg-carousel-track">
                <div class="swg-carousel-item swg-card">
                    <h3><?php esc_html_e( 'SaaS Velocity', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Scaled signups 71% with technical cleanups, high-intent content, and in-app schema.', 'seo-turbo-boost' ); ?></p>
                    <a class="swg-link" href="#consultation"><?php esc_html_e( 'See similar results', 'seo-turbo-boost' ); ?></a>
                </div>
                <div class="swg-carousel-item swg-card">
                    <h3><?php esc_html_e( 'Ecommerce Ignite', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Implemented lightning PDPs, product schema, and CRO experiments for +38% revenue.', 'seo-turbo-boost' ); ?></p>
                    <a class="swg-link" href="#consultation"><?php esc_html_e( 'Talk with us', 'seo-turbo-boost' ); ?></a>
                </div>
                <div class="swg-carousel-item swg-card">
                    <h3><?php esc_html_e( 'Local Legend', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Multi-location business achieved map-pack dominance using localized Website Skins.', 'seo-turbo-boost' ); ?></p>
                    <a class="swg-link" href="#consultation"><?php esc_html_e( 'Request insights', 'seo-turbo-boost' ); ?></a>
                </div>
            </div>
            <div class="swg-carousel-controls">
                <button class="swg-carousel-dot" type="button" aria-current="true" aria-label="<?php esc_attr_e( 'Case study 1', 'seo-turbo-boost' ); ?>"></button>
                <button class="swg-carousel-dot" type="button" aria-current="false" aria-label="<?php esc_attr_e( 'Case study 2', 'seo-turbo-boost' ); ?>"></button>
                <button class="swg-carousel-dot" type="button" aria-current="false" aria-label="<?php esc_attr_e( 'Case study 3', 'seo-turbo-boost' ); ?>"></button>
            </div>
        </div>
        <div class="swg-logo-cloud" aria-label="Client logos">
            <img src="https://dummyimage.com/120x60/1f6feb/ffffff&text=Orbit" alt="Orbit" />
            <img src="https://dummyimage.com/120x60/ff6b1a/ffffff&text=Nova" alt="Nova" />
            <img src="https://dummyimage.com/120x60/ffc929/ffffff&text=Pioneer" alt="Pioneer" />
        </div>
    </div>
</section>

<section id="consultation" class="swg-section swg-services-consultation">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Let’s plan your roadmap', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Book a consultation in 60 seconds', 'seo-turbo-boost' ); ?></h2>
        </div>
        <form class="swg-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
            <input type="hidden" name="action" value="seo_turbo_services_lead" />
            <div class="swg-form-row">
                <label>
                    <?php esc_html_e( 'Full Name', 'seo-turbo-boost' ); ?>
                    <input type="text" name="service-name" required />
                </label>
                <label>
                    <?php esc_html_e( 'Business Email', 'seo-turbo-boost' ); ?>
                    <input type="email" name="service-email" required />
                </label>
            </div>
            <div class="swg-form-row">
                <label>
                    <?php esc_html_e( 'Monthly marketing budget', 'seo-turbo-boost' ); ?>
                    <select name="service-budget">
                        <option value="2-5k"><?php esc_html_e( '$2k – $5k', 'seo-turbo-boost' ); ?></option>
                        <option value="5-10k"><?php esc_html_e( '$5k – $10k', 'seo-turbo-boost' ); ?></option>
                        <option value="10k+"><?php esc_html_e( '$10k+', 'seo-turbo-boost' ); ?></option>
                    </select>
                </label>
                <label class="swg-checkbox">
                    <input type="checkbox" name="service-audit" value="1" />
                    <span><?php esc_html_e( 'Include complimentary technical audit', 'seo-turbo-boost' ); ?></span>
                </label>
            </div>
            <label>
                <?php esc_html_e( 'Project goals', 'seo-turbo-boost' ); ?>
                <textarea name="service-goals" rows="3"></textarea>
            </label>
            <div class="swg-hero-cta">
                <button type="submit" class="swg-btn"><?php esc_html_e( 'Schedule call', 'seo-turbo-boost' ); ?></button>
                <label class="swg-toggle">
                    <input type="checkbox" name="service-updates" value="1" checked />
                    <span class="swg-toggle-slider"></span>
                </label>
                <span><?php esc_html_e( 'Get launch reminders', 'seo-turbo-boost' ); ?></span>
            </div>
        </form>
    </div>
</section>
<?php
get_footer();
