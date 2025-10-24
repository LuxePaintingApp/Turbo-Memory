<?php
/**
 * Default page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>
<?php
get_footer();
