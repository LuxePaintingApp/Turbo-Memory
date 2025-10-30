<?php
/**
 * Front page template.
 *
 * @package SEO_Turbo_Boost
 */

get_header();
?>
<section class="swg-section swg-hero-section">
    <div class="swg-container">
        <div class="swg-hero">
            <div>
                <span class="swg-badge"><?php esc_html_e( 'SmartWebsiteGenius presents', 'seo-turbo-boost' ); ?></span>
                <h1><?php esc_html_e( 'SEO Turbo Boost – outrank in 2025 with the fastest WordPress experience', 'seo-turbo-boost' ); ?></h1>
                <p><?php esc_html_e( 'Crafted for visionary brands demanding instant load speeds, conversion-primed layouts, and SEO intelligence baked into every pixel.', 'seo-turbo-boost' ); ?></p>
                <div class="swg-hero-cta">
                    <a class="swg-btn" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Get Started', 'seo-turbo-boost' ); ?></a>
                    <a class="swg-icon-btn" href="<?php echo esc_url( home_url( '/services' ) ); ?>" aria-label="View services">➜</a>
                    <a class="swg-link" href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'Why SmartWebsiteGenius?', 'seo-turbo-boost' ); ?></a>
                </div>
                <div class="swg-hero-progress">
                    <div class="swg-stat">
                        <span>95</span>
                        <div>
                            <strong><?php esc_html_e( 'Lighthouse score average', 'seo-turbo-boost' ); ?></strong>
                            <div class="swg-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="95">
                                <span style="width:95%"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="swg-card">
                    <h3><?php esc_html_e( 'Rank faster with performance-first UI', 'seo-turbo-boost' ); ?></h3>
                    <p><?php esc_html_e( 'Modular sections, schema automation, and conversion copy align to win clicks and keep bounce rates low.', 'seo-turbo-boost' ); ?></p>
                    <ul>
                        <li><?php esc_html_e( 'Elementor & Website Skins ready', 'seo-turbo-boost' ); ?></li>
                        <li><?php esc_html_e( 'Child-theme friendly architecture', 'seo-turbo-boost' ); ?></li>
                        <li><?php esc_html_e( 'Zero bloat — no render-blocking assets', 'seo-turbo-boost' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="swg-section swg-value-section">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Why brands pick SEO Turbo Boost', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Value-packed performance accelerators', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-cards">
            <?php
            $values = [
                [
                    'title' => __( '1-second load times', 'seo-turbo-boost' ),
                    'text'  => __( 'Optimized CSS, async scripts, and smart preloads keep your site blazingly fast.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Keyword-ready layout blocks', 'seo-turbo-boost' ),
                    'text'  => __( 'Sitemap-inspired sections map to SERP intent, no custom coding required.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Conversion-first UX', 'seo-turbo-boost' ),
                    'text'  => __( 'Sticky CTAs, lead funnels, and social proof to turn readers into customers.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Elementor + Gutenberg harmony', 'seo-turbo-boost' ),
                    'text'  => __( 'Use your favorite builder without breaking performance or design consistency.', 'seo-turbo-boost' ),
                ],
            ];
            foreach ( $values as $value ) :
                ?>
                <article class="swg-card">
                    <h3><?php echo esc_html( $value['title'] ); ?></h3>
                    <p><?php echo esc_html( $value['text'] ); ?></p>
                    <a class="swg-link" href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'Learn how we deliver', 'seo-turbo-boost' ); ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="swg-section swg-services-overview">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Featured SEO services', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'High-impact growth packages', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-cards">
            <?php
            $services = [
                [
                    'title' => __( 'Technical SEO Sprint', 'seo-turbo-boost' ),
                    'text'  => __( 'Resolve crawl issues, structure data, and boost core web vitals.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Content Dominance Plan', 'seo-turbo-boost' ),
                    'text'  => __( 'Topic clusters, pillar pages, and conversion copywriting built-in.', 'seo-turbo-boost' ),
                ],
                [
                    'title' => __( 'Local Visibility Engine', 'seo-turbo-boost' ),
                    'text'  => __( 'Google Business Profile optimization and hyperlocal landing pages.', 'seo-turbo-boost' ),
                ],
            ];
            foreach ( $services as $service ) :
                ?>
                <article class="swg-card">
                    <h3><?php echo esc_html( $service['title'] ); ?></h3>
                    <p><?php echo esc_html( $service['text'] ); ?></p>
                    <a class="swg-btn" href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Explore service', 'seo-turbo-boost' ); ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="swg-section swg-testimonials">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Results that speak', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Client stories & testimonials', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-carousel" data-swg-carousel>
            <div class="swg-carousel-track">
                <?php
                $testimonials = [
                    [
                        'quote' => __( '“Within 30 days, our organic conversions grew 64% and we cut load times in half. SmartWebsiteGenius redefined performance.”', 'seo-turbo-boost' ),
                        'name'  => __( 'Jordan Mitchell – SaaS Founder', 'seo-turbo-boost' ),
                    ],
                    [
                        'quote' => __( '“SEO Turbo Boost gave us an Elementor-compatible theme that finally ranks. Schema automation saved our team hours weekly.”', 'seo-turbo-boost' ),
                        'name'  => __( 'Priya Sharma – Agency Director', 'seo-turbo-boost' ),
                    ],
                    [
                        'quote' => __( '“The Website Skins plugin plays perfectly with this theme. Our new brand skin rolled out in minutes and the site flies.”', 'seo-turbo-boost' ),
                        'name'  => __( 'Emmanuel Ruiz – Creative Lead', 'seo-turbo-boost' ),
                    ],
                ];
                foreach ( $testimonials as $testimonial ) :
                    ?>
                    <blockquote class="swg-carousel-item swg-card">
                        <p><?php echo esc_html( $testimonial['quote'] ); ?></p>
                        <footer><?php echo esc_html( $testimonial['name'] ); ?></footer>
                    </blockquote>
                <?php endforeach; ?>
            </div>
            <div class="swg-carousel-controls" role="group" aria-label="<?php esc_attr_e( 'Testimonials carousel controls', 'seo-turbo-boost' ); ?>">
                <?php foreach ( $testimonials as $index => $testimonial ) : ?>
                    <button class="swg-carousel-dot" type="button" aria-current="<?php echo 0 === $index ? 'true' : 'false'; ?>" aria-label="<?php printf( esc_attr__( 'Show testimonial %d', 'seo-turbo-boost' ), $index + 1 ); ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="swg-section swg-lead-capture">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Grab your free growth plan', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Request a complimentary SEO audit', 'seo-turbo-boost' ); ?></h2>
        </div>
        <form class="swg-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
            <input type="hidden" name="action" value="seo_turbo_lead" />
            <div class="swg-form-row">
                <label>
                    <?php esc_html_e( 'Full Name', 'seo-turbo-boost' ); ?>
                    <input type="text" name="lead-name" required />
                </label>
                <label>
                    <?php esc_html_e( 'Business Email', 'seo-turbo-boost' ); ?>
                    <input type="email" name="lead-email" required />
                </label>
            </div>
            <div class="swg-form-row">
                <label>
                    <?php esc_html_e( 'Primary Goal', 'seo-turbo-boost' ); ?>
                    <select name="lead-goal">
                        <option value="traffic"><?php esc_html_e( 'Increase organic traffic', 'seo-turbo-boost' ); ?></option>
                        <option value="leads"><?php esc_html_e( 'Generate qualified leads', 'seo-turbo-boost' ); ?></option>
                        <option value="sales"><?php esc_html_e( 'Scale ecommerce revenue', 'seo-turbo-boost' ); ?></option>
                    </select>
                </label>
                <label>
                    <?php esc_html_e( 'Monthly traffic', 'seo-turbo-boost' ); ?>
                    <input type="number" name="lead-traffic" min="0" />
                </label>
            </div>
            <label>
                <?php esc_html_e( 'Website URL', 'seo-turbo-boost' ); ?>
                <input type="url" name="lead-url" required />
            </label>
            <label class="swg-checkbox">
                <input type="checkbox" name="lead-updates" value="1" checked />
                <span><?php esc_html_e( 'Send me weekly SEO velocity tips.', 'seo-turbo-boost' ); ?></span>
            </label>
            <button type="submit" class="swg-btn"><?php esc_html_e( 'Book my audit', 'seo-turbo-boost' ); ?></button>
        </form>
    </div>
</section>

<section class="swg-section swg-blog-highlights">
    <div class="swg-container">
        <div class="swg-section-heading">
            <span class="swg-tagline"><?php esc_html_e( 'Latest field notes', 'seo-turbo-boost' ); ?></span>
            <h2><?php esc_html_e( 'Insights from our SEO lab', 'seo-turbo-boost' ); ?></h2>
        </div>
        <div class="swg-cards">
            <?php
            $recent_posts = new WP_Query(
                [
                    'posts_per_page'      => 3,
                    'ignore_sticky_posts' => true,
                ]
            );
            if ( $recent_posts->have_posts() ) :
                while ( $recent_posts->have_posts() ) :
                    $recent_posts->the_post();
                    ?>
                    <article <?php post_class( 'swg-card' ); ?>>
                        <div class="swg-badge"><?php echo esc_html( get_the_date() ); ?></div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
                        <a class="swg-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read article', 'seo-turbo-boost' ); ?></a>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p><?php esc_html_e( 'Fresh insights are on the way. Check back soon!', 'seo-turbo-boost' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();
