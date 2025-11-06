<?php
/**
 * Default page template.
 *
 * @package SolidCement
 */

global $post;
get_header();

if ( solidcement_can_use_elementor() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
    get_footer();
    return;
}
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
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Ready for Luxury Cement Creations?', 'solid-cement' ),
        'title'       => __( 'Request Your Personalised Quote', 'solid-cement' ),
        'copy'        => __( 'Let us know what you are dreaming up and we will reply with tailored ideas and pricing.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
