<?php
/**
 * Helper template tags used around the theme.
 *
 * @package SolidCement
 */

if ( ! function_exists( 'solidcement_render_signature_creations' ) ) {
    /**
     * Output highlight cards for the front page.
     */
    function solidcement_render_signature_creations() {
        $pages = [
            'gnome-world'     => __( 'Gnome World', 'solid-cement' ),
            'fairy-garden'    => __( 'Fairy Garden', 'solid-cement' ),
            'garden-designs'  => __( 'Garden Designs', 'solid-cement' ),
        ];
        echo '<div class="card-grid">';
        foreach ( $pages as $slug => $label ) {
            $page = get_page_by_path( $slug );
            $image = $page && has_post_thumbnail( $page->ID )
                ? get_the_post_thumbnail( $page->ID, 'large' )
                : '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/placeholder-' . $slug . '.svg' ) . '" alt="" loading="lazy" />';
            echo '<article class="card">';
            echo $image; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo '<div>';
            echo '<h3>' . esc_html( $label ) . '</h3>';
            if ( $page ) {
                echo '<p>' . esc_html( wp_trim_words( $page->post_excerpt ? $page->post_excerpt : wp_strip_all_tags( $page->post_content ), 24 ) ) . '</p>';
                echo '<a class="btn" href="' . esc_url( get_permalink( $page ) ) . '">' . esc_html__( 'Explore', 'solid-cement' ) . '</a>';
            } else {
                echo '<p>' . esc_html__( 'Create a page with this slug to populate this feature.', 'solid-cement' ) . '</p>';
            }
            echo '</div>';
            echo '</article>';
        }
        echo '</div>';
    }
}

if ( ! function_exists( 'solidcement_render_gallery' ) ) {
    /**
     * Output masonry gallery of projects.
     *
     * @param string $type Optional taxonomy term slug.
     */
    function solidcement_render_gallery( $type = '' ) {
        $args = [
            'post_type'      => 'solidcement_project',
            'posts_per_page' => 9,
        ];
        if ( $type ) {
            $args['tax_query'] = [
                [
                    'taxonomy' => 'project_type',
                    'field'    => 'slug',
                    'terms'    => $type,
                ],
            ];
        }
        $projects = new WP_Query( $args );

        if ( $projects->have_posts() ) {
            echo '<div class="customer-gallery__grid">';
            while ( $projects->have_posts() ) {
                $projects->the_post();
                echo '<figure>';
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large' );
                }
                echo '<figcaption>' . esc_html( get_the_title() ) . '</figcaption>';
                echo '</figure>';
            }
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>' . esc_html__( 'Add "Solid Cement Projects" in the dashboard to showcase recent installations.', 'solid-cement' ) . '</p>';
        }
    }
}

if ( ! function_exists( 'solidcement_render_before_after' ) ) {
    /**
     * Render comparison list for restorations.
     */
    function solidcement_render_before_after() {
        $projects = new WP_Query(
            [
                'post_type'      => 'solidcement_project',
                'posts_per_page' => 5,
                'tax_query'      => [
                    [
                        'taxonomy' => 'project_type',
                        'field'    => 'slug',
                        'terms'    => 'restoration',
                    ],
                ],
            ]
        );

        if ( $projects->have_posts() ) {
            echo '<div class="media-grid">';
            while ( $projects->have_posts() ) {
                $projects->the_post();
                echo '<article class="feature-card">';
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large' );
                }
                echo '<h3>' . esc_html( get_the_title() ) . '</h3>';
                the_excerpt();
                echo '</article>';
            }
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>' . esc_html__( 'Create restoration projects and assign them to the "restoration" project type to populate this section.', 'solid-cement' ) . '</p>';
        }
    }
}
