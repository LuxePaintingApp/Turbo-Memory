<?php
/**
 * Front page template handing off layout to Elementor.
 *
 * @package SolidCement
 */

global $post;

get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}

get_footer();
