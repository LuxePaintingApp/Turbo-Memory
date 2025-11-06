<?php
/**
 * Front page layout for Solid Cement Creations.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="hero-banner">
    <div class="container">
        <div class="hero-content">
            <span class="hero-badge">Google Ads &bull; PPC &bull; Funnels &bull; ROI</span>
            <h1><?php esc_html_e( 'Perth’s Premium Garden Artisans', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'Handcrafted gnomes, fairy sanctuaries, and custom garden designs that blend luxury with whimsy for discerning outdoor spaces.', 'solid-cement' ); ?></p>
            <div class="hero-cta">
                <a class="btn" href="#signature-creations"><?php esc_html_e( 'Explore Collections', 'solid-cement' ); ?></a>
                <a class="btn btn--ghost" href="#quote"><?php esc_html_e( 'Book a Consultation', 'solid-cement' ); ?></a>
            </div>
            <div class="hero-note">
                <span aria-hidden="true">⚠️</span>
                <div>
                    <strong><?php esc_html_e( 'Budget Policy', 'solid-cement' ); ?>:</strong>
                    <span><?php esc_html_e( 'Projects begin at $2,500 to ensure artisan craftsmanship and enduring finishes.', 'solid-cement' ); ?></span>
                </div>
            </div>
            <div class="hero-kpis">
                <span class="pill"><?php esc_html_e( '15+ Years Experience', 'solid-cement' ); ?></span>
                <span class="pill"><?php esc_html_e( 'Performance-Based Strategy', 'solid-cement' ); ?></span>
                <span class="pill"><?php esc_html_e( 'Custom Cement Artistry', 'solid-cement' ); ?></span>
                <span class="pill"><?php esc_html_e( 'Australian Made', 'solid-cement' ); ?></span>
            </div>
        </div>
        <div class="hero-media">
            <figure class="curved-frame">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Handcrafted gnomes displayed in a garden setting.', 'solid-cement' ); ?>" />
                <figcaption><?php esc_html_e( 'Signature Gnome Series', 'solid-cement' ); ?></figcaption>
            </figure>
        </div>
    </div>
</section>

<section id="signature-creations" class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Our Craft', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Luxury Meets Nature', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Discover premium collections meticulously sculpted to bring charm and poise to your gardens.', 'solid-cement' ); ?></p>
        </div>
        <div class="gallery-grid">
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Gnome sculptures', 'solid-cement' ); ?>" />
                <figcaption><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></figcaption>
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Fairy garden designs', 'solid-cement' ); ?>" />
                <figcaption><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></figcaption>
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Garden design concepts', 'solid-cement' ); ?>" />
                <figcaption><?php esc_html_e( 'Garden Designs', 'solid-cement' ); ?></figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="page-section" id="quote">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Get Started', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Partner with Solid Cement Creations', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Complete the form and our artisan strategists will curate a bespoke pathway for your garden transformation.', 'solid-cement' ); ?></p>
        </div>
        <div class="split-grid">
            <form class="form-card" method="post" action="#">
                <h3><?php esc_html_e( 'Request Your Strategy Call', 'solid-cement' ); ?></h3>
                <div class="form-control">
                    <label for="lead-name"><?php esc_html_e( 'Full Name', 'solid-cement' ); ?></label>
                    <input type="text" id="lead-name" name="lead_name" required />
                </div>
                <div class="form-control">
                    <label for="lead-email"><?php esc_html_e( 'Email Address', 'solid-cement' ); ?></label>
                    <input type="email" id="lead-email" name="lead_email" required />
                </div>
                <div class="form-control">
                    <label for="lead-budget"><?php esc_html_e( 'Projected Budget', 'solid-cement' ); ?></label>
                    <select id="lead-budget" name="lead_budget" required>
                        <option value="" disabled selected><?php esc_html_e( 'Select an option', 'solid-cement' ); ?></option>
                        <option><?php esc_html_e( '$2,500 – $5,000', 'solid-cement' ); ?></option>
                        <option><?php esc_html_e( '$5,000 – $12,000', 'solid-cement' ); ?></option>
                        <option><?php esc_html_e( '$12,000+', 'solid-cement' ); ?></option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="lead-message"><?php esc_html_e( 'Project Vision', 'solid-cement' ); ?></label>
                    <textarea id="lead-message" name="lead_message" placeholder="<?php esc_attr_e( 'Describe your dream garden experience…', 'solid-cement' ); ?>" required></textarea>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Submit', 'solid-cement' ); ?></button>
            </form>
            <div class="feature-list">
                <h3><?php esc_html_e( 'Why Solid Cement Creations', 'solid-cement' ); ?></h3>
                <ul>
                    <li><?php esc_html_e( 'Performance-led design and campaign strategy for garden artistry.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Dedicated artisan consultant from first sketch to final installation.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Elementor-ready templates to maintain and evolve your experience easily.', 'solid-cement' ); ?></li>
                </ul>
                <div class="tag-pills">
                    <span class="tag-pill"><?php esc_html_e( 'Conversion-Focused', 'solid-cement' ); ?></span>
                    <span class="tag-pill"><?php esc_html_e( 'ROI Tracking', 'solid-cement' ); ?></span>
                    <span class="tag-pill"><?php esc_html_e( 'Premium Support', 'solid-cement' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Proof', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Case Study: The Luxe Garden Estate', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'From tired backyard to a curated showcase featuring custom gnomes, fairy sanctuaries, and sculpted water features.', 'solid-cement' ); ?></p>
        </div>
        <div class="case-study-grid">
            <div class="case-study-card">
                <div class="case-media">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Analytics dashboard highlighting campaign growth.', 'solid-cement' ); ?>" />
                    <span><?php esc_html_e( '+215% Enquiries', 'solid-cement' ); ?></span>
                </div>
                <p><?php esc_html_e( 'Our team engineered a paid campaign and on-site experience that nurtured visitors into consultations while showcasing handcrafted pieces in a guided digital gallery.', 'solid-cement' ); ?></p>
            </div>
            <div class="case-study-card">
                <h3><?php esc_html_e( 'Expect Results Like', 'solid-cement' ); ?></h3>
                <ul>
                    <li><?php esc_html_e( 'Qualified leads booking consults within 48 hours.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Custom Elementor layouts ready to expand collections.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Streamlined funnels with performance reporting.', 'solid-cement' ); ?></li>
                </ul>
                <a class="btn" href="#contact"><?php esc_html_e( 'Book My Call', 'solid-cement' ); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Process', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Our 3-Step Growth Process', 'solid-cement' ); ?></h2>
        </div>
        <div class="process-steps">
            <article class="process-step">
                <div class="process-step__index">1</div>
                <div>
                    <h3><?php esc_html_e( 'Discover', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Collaborate on your vision, audience, and desired campaign outcomes to scope the perfect mix of artistry and advertising.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">2</div>
                <div>
                    <h3><?php esc_html_e( 'Design & Build', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Craft custom Elementor layouts, sculpted imagery, and immersive funnels that reflect your brand’s luxurious edge.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="process-step">
                <div class="process-step__index">3</div>
                <div>
                    <h3><?php esc_html_e( 'Launch & Scale', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Optimise campaigns weekly, track ROI across channels, and evolve offers to sustain growth.', 'solid-cement' ); ?></p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="dual-grid">
            <article class="card-style-a">
                <h3><?php esc_html_e( 'Ideal Client Profile', 'solid-cement' ); ?></h3>
                <ul>
                    <li><?php esc_html_e( 'Premium garden centres and landscape designers seeking signature cement artistry.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Brands ready to invest in high-conversion digital experiences.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Teams who value collaborative strategy and transparent reporting.', 'solid-cement' ); ?></li>
                </ul>
            </article>
            <article class="card-style-b">
                <h3><?php esc_html_e( 'Not a Fit If…', 'solid-cement' ); ?></h3>
                <ul>
                    <li><?php esc_html_e( 'You require off-the-shelf designs without artisan input.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'You are not ready to invest in marketing or premium materials.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'You need rapid templated work instead of bespoke craftsmanship.', 'solid-cement' ); ?></li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Testimonials', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Garden Lovers Share the Magic', 'solid-cement' ); ?></h2>
        </div>
        <div class="testimonial-grid">
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'Our fairy garden launch sold out in weeks thanks to the custom Elementor funnel and targeted campaigns.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'Marina, Fairy Garden Boutique', 'solid-cement' ); ?></strong>
            </article>
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'The new gnome collection page perfectly balances storytelling with conversions. We doubled enquiries.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'James, Gnome Curator', 'solid-cement' ); ?></strong>
            </article>
            <article class="testimonial-card">
                <p>“<?php esc_html_e( 'Their process brought clarity, beauty, and measurable ROI to our garden art studio.', 'solid-cement' ); ?>”</p>
                <strong>— <?php esc_html_e( 'Elise, Landscape Designer', 'solid-cement' ); ?></strong>
            </article>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'From the Blog', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Stories from the Studio', 'solid-cement' ); ?></h2>
        </div>
        <?php
        $posts_query = new WP_Query(
            [
                'post_type'      => 'post',
                'posts_per_page' => 3,
            ]
        );
        ?>
        <div class="posts-grid">
            <?php if ( $posts_query->have_posts() ) : ?>
                <?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
                    <article <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="post-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
                            <a class="btn btn--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e( 'View Article', 'solid-cement' ); ?></a>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Publish your first article to share artisan tips, restorations, and inspiration.', 'solid-cement' ); ?></p>
            <?php endif; ?>
        </div>
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
