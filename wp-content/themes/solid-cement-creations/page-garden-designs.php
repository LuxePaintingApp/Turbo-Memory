<?php
/**
 * Garden Designs page template.
 *
 * @package SolidCement
 */

global $post;
get_header();

$service_packages = [
    [
        'name'        => __( 'Boutique Refresh', 'solid-cement' ),
        'features'    => [
            __( 'Concept mood board with planting schedule', 'solid-cement' ),
            __( 'Two custom cement garden statues or bird baths', 'solid-cement' ),
            __( 'Styling session with lighting placement guide', 'solid-cement' ),
        ],
        'investment'  => '$4,800',
        'timeline'    => __( '4 weeks', 'solid-cement' ),
    ],
    [
        'name'        => __( 'Signature Sanctuary', 'solid-cement' ),
        'features'    => [
            __( 'Masterplan drawings and 3D walkthrough', 'solid-cement' ),
            __( 'Bespoke fairy garden vignette and pathways', 'solid-cement' ),
            __( 'On-site project management and install styling', 'solid-cement' ),
        ],
        'investment'  => '$12,600',
        'timeline'    => __( '8-12 weeks', 'solid-cement' ),
    ],
    [
        'name'        => __( 'Estate Masterpiece', 'solid-cement' ),
        'features'    => [
            __( 'Comprehensive landscape architecture plans', 'solid-cement' ),
            __( 'Custom cement garden statues suite and water features', 'solid-cement' ),
            __( 'Seasonal maintenance blueprint and concierge support', 'solid-cement' ),
        ],
        'investment'  => '$28,900+',
        'timeline'    => __( '16+ weeks', 'solid-cement' ),
    ],
];
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Garden Design Services', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Elegant outdoor concepts that balance structure, planting, and custom cement garden statues.', 'solid-cement' ); ?></p>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Portfolio', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Signature Spaces', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Browse curated landscapes that blend sculptural focal points with lush plantings and tailored lighting. Filter by project type to explore intimate courtyards, expansive estates, and resort-style retreats.', 'solid-cement' ); ?></p>
        <div class="filter-toolbar" role="region" aria-label="Garden Design Filters">
            <label for="design-filter" class="form-label"><?php esc_html_e( 'Project Focus', 'solid-cement' ); ?></label>
            <select id="design-filter">
                <option><?php esc_html_e( 'All Projects', 'solid-cement' ); ?></option>
                <option><?php esc_html_e( 'Entertaining Spaces', 'solid-cement' ); ?></option>
                <option><?php esc_html_e( 'Wellness Gardens', 'solid-cement' ); ?></option>
                <option><?php esc_html_e( 'Family-Friendly', 'solid-cement' ); ?></option>
            </select>
            <div class="chip-group">
                <span class="chip chip--filter"><?php esc_html_e( 'Coastal', 'solid-cement' ); ?></span>
                <span class="chip chip--filter"><?php esc_html_e( 'Heritage', 'solid-cement' ); ?></span>
                <span class="chip chip--filter"><?php esc_html_e( 'Urban', 'solid-cement' ); ?></span>
            </div>
        </div>
        <?php solidcement_render_gallery( 'garden-design' ); ?>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Process', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From Idea to Installation', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Our process honours both artistry and practicality. We collaborate closely with clients, builders, and horticultural partners to deliver gardens that captivate and endure.', 'solid-cement' ); ?></p>
        <div class="process-steps">
            <article class="process-step">
                <h3><?php esc_html_e( 'Consult', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'We walk your space, listen to your wishlist, and capture measurements.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'A discovery workbook helps you articulate lifestyle needs, favourite colours, and must-have cement garden statues.', 'solid-cement' ); ?></p>
            </article>
            <article class="process-step">
                <h3><?php esc_html_e( 'Design', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Concept sketches, mood boards, and 3D previews bring your garden to life.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'We outline lighting plans, irrigation considerations, and furniture placement for a cohesive experience.', 'solid-cement' ); ?></p>
            </article>
            <article class="process-step">
                <h3><?php esc_html_e( 'Create', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Our artisans pour, sculpt, and finish every cement detail with precision, from paving to custom cement garden statues.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'Weekly updates include behind-the-scenes videos and progress milestones so you can watch your sanctuary take shape.', 'solid-cement' ); ?></p>
            </article>
            <article class="process-step">
                <h3><?php esc_html_e( 'Install', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'We handle delivery, placement, and styling for a photo-ready reveal.', 'solid-cement' ); ?></p>
                <p><?php esc_html_e( 'After install, we host a garden walkthrough to review maintenance routines and seasonal refresh options.', 'solid-cement' ); ?></p>
            </article>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Design Packages', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Choose Your Path', 'solid-cement' ); ?></h2>
        <table class="package-table">
            <thead>
                <tr>
                    <th scope="col"><?php esc_html_e( 'Package', 'solid-cement' ); ?></th>
                    <th scope="col"><?php esc_html_e( "What's Included", 'solid-cement' ); ?></th>
                    <th scope="col"><?php esc_html_e( 'Investment', 'solid-cement' ); ?></th>
                    <th scope="col"><?php esc_html_e( 'Timeline', 'solid-cement' ); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $service_packages as $package ) : ?>
                    <tr>
                        <th scope="row"><?php echo esc_html( $package['name'] ); ?></th>
                        <td>
                            <ul>
                                <?php foreach ( $package['features'] as $feature ) : ?>
                                    <li><?php echo esc_html( $feature ); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </td>
                        <td><?php echo esc_html( $package['investment'] ); ?></td>
                        <td><?php echo esc_html( $package['timeline'] ); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Client Success Stories', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From Vision to Reality', 'solid-cement' ); ?></h2>
        <div class="testimonial-slider__wrapper">
            <?php
            $design_testimonials = new WP_Query([
                'post_type'      => 'solidcement_testimonial',
                'posts_per_page' => 3,
            ]);
            if ( $design_testimonials->have_posts() ) :
                while ( $design_testimonials->have_posts() ) : $design_testimonials->the_post();
                    ?>
                    <article class="testimonial">
                        <div class="testimonial__content"><?php the_content(); ?></div>
                        <cite>&mdash; <?php the_title(); ?></cite>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__( 'Add testimonials to spotlight completed garden design projects.', 'solid-cement' ) . '</p>';
            endif;
            ?>
        </div>
        <div class="stats-cards">
            <article class="stat-card">
                <span class="stat-number">94%</span>
                <p><?php esc_html_e( 'Clients book ongoing maintenance or seasonal styling after installation.', 'solid-cement' ); ?></p>
            </article>
            <article class="stat-card">
                <span class="stat-number">5*</span>
                <p><?php esc_html_e( 'Average client rating across garden design projects.', 'solid-cement' ); ?></p>
            </article>
        </div>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Book a Design Consultation', 'solid-cement' ),
        'title'       => __( 'Schedule Your Garden Masterplan', 'solid-cement' ),
        'copy'        => [
            __( 'Outline your dream landscape, and we will prepare mood boards, layouts, and investment options tailored to your space.', 'solid-cement' ),
            __( 'Receive a collaborative workbook, project schedule, and digital concept hub to track progress.', 'solid-cement' ),
        ],
        'extra_class' => 'page-section--alt',
    ]
);
?>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Resources', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Design Library', 'solid-cement' ); ?></h2>
        <div class="resource-cards">
            <article class="card">
                <h3><?php esc_html_e( 'Luxury Garden Lighting Guide', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Download our guide to layered lighting strategies that highlight sculptures, pathways, and foliage for day-to-night ambience.', 'solid-cement' ); ?></p>
                <a class="btn" href="#quote"><?php esc_html_e( 'Request Access', 'solid-cement' ); ?></a>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Plant Pairing Playbook', 'solid-cement' ); ?></h3>
                <p><?php esc_html_e( 'Explore curated plant combinations that complement cement textures and thrive in Australian climates.', 'solid-cement' ); ?></p>
                <a class="btn btn--ghost" href="#quote"><?php esc_html_e( 'Join Waitlist', 'solid-cement' ); ?></a>
            </article>
        </div>
    </div>
</section>
<?php
get_footer();
