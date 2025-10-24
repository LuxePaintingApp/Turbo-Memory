<?php
/**
 * Registers custom post types and taxonomies used by the theme.
 *
 * @package SolidCement
 */

add_action( 'init', 'solidcement_register_content_types' );

/**
 * Register bespoke content types.
 */
function solidcement_register_content_types() {
    // Collections (Gnomes, Fairy Gardens, Garden Designs).
    register_post_type(
        'solidcement_collection',
        [
            'labels'       => [
                'name'          => __( 'Collections', 'solid-cement' ),
                'singular_name' => __( 'Collection Item', 'solid-cement' ),
            ],
            'public'       => true,
            'has_archive'  => true,
            'menu_icon'    => 'dashicons-palmtree',
            'rewrite'      => [ 'slug' => 'collections' ],
            'supports'     => [ 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ],
            'show_in_rest' => true,
        ]
    );

    register_taxonomy(
        'collection_category',
        'solidcement_collection',
        [
            'labels'       => [
                'name'          => __( 'Collection Categories', 'solid-cement' ),
                'singular_name' => __( 'Collection Category', 'solid-cement' ),
            ],
            'public'       => true,
            'hierarchical' => true,
            'rewrite'      => [ 'slug' => 'collection-category' ],
            'show_in_rest' => true,
        ]
    );

    // Projects (used for galleries, restorations, fairy gardens, etc.).
    register_post_type(
        'solidcement_project',
        [
            'labels'       => [
                'name'          => __( 'Projects', 'solid-cement' ),
                'singular_name' => __( 'Project', 'solid-cement' ),
            ],
            'public'       => true,
            'has_archive'  => true,
            'menu_icon'    => 'dashicons-art',
            'rewrite'      => [ 'slug' => 'projects' ],
            'supports'     => [ 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'page-attributes' ],
            'show_in_rest' => true,
        ]
    );

    register_taxonomy(
        'project_type',
        'solidcement_project',
        [
            'labels'       => [
                'name'          => __( 'Project Types', 'solid-cement' ),
                'singular_name' => __( 'Project Type', 'solid-cement' ),
            ],
            'public'       => true,
            'hierarchical' => true,
            'rewrite'      => [ 'slug' => 'project-type' ],
            'show_in_rest' => true,
        ]
    );

    // Testimonials.
    register_post_type(
        'solidcement_testimonial',
        [
            'labels'       => [
                'name'          => __( 'Testimonials', 'solid-cement' ),
                'singular_name' => __( 'Testimonial', 'solid-cement' ),
            ],
            'public'       => true,
            'has_archive'  => false,
            'menu_icon'    => 'dashicons-format-quote',
            'rewrite'      => [ 'slug' => 'testimonials' ],
            'supports'     => [ 'title', 'editor', 'thumbnail', 'page-attributes' ],
            'show_in_rest' => true,
        ]
    );
}
