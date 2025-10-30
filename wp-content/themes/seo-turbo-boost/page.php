<?php
/**
 * Default page template.
 *
 * @package SEO_Turbo_Boost
 */

get_header();
?>
<div class="swg-section">
    <div class="swg-container">
        <?php seo_turbo_boost_maybe_render_breadcrumbs(); ?>
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>
<?php
get_footer();
