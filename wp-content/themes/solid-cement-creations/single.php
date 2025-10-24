<?php
/**
 * Single post template.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p class="post-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></p>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            if ( has_post_thumbnail() ) {
                echo '<figure class="post-featured">';
                the_post_thumbnail( 'large' );
                echo '</figure>';
            }
            the_content();
        endwhile;
        ?>
        <nav class="pagination">
            <div><?php previous_post_link( '%link', __( '&laquo; Previous', 'solid-cement' ) ); ?></div>
            <div><?php next_post_link( '%link', __( 'Next &raquo;', 'solid-cement' ) ); ?></div>
        </nav>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Inspired by What You Read?', 'solid-cement' ),
        'title'       => __( 'Book a Quote for Your Garden Project', 'solid-cement' ),
        'copy'        => __( 'Turn these ideas into a reality with a personalised consultation from our team.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
