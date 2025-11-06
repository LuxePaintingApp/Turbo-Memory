<?php
/**
 * Default page template.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Solid Cement Creations', 'solid-cement' ); ?></span>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="page-section page-section--content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
