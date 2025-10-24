<?php
/**
 * About page template.
 *
 * @package SolidCement
 */

global $post;
get_header();
$maker_name  = get_post_meta( get_the_ID(), 'solidcement_maker_name', true );
$maker_title = get_post_meta( get_the_ID(), 'solidcement_maker_title', true );
$maker_bio   = get_post_meta( get_the_ID(), 'solidcement_maker_bio', true );
$maker_photo = get_post_meta( get_the_ID(), 'solidcement_maker_photo', true );
$mission     = get_post_meta( get_the_ID(), 'solidcement_mission', true );
$values      = get_post_meta( get_the_ID(), 'solidcement_values', true );
$process_ids = array_filter( array_map( 'trim', explode( ',', (string) get_post_meta( get_the_ID(), 'solidcement_process_gallery', true ) ) ) );
?>
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p><?php echo esc_html( get_post_meta( get_the_ID(), 'solidcement_about_tagline', true ) ); ?></p>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Brand Story', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From humble beginnings to luxury garden artistry', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Solid Cement Creations grew from a single kiln into a studio renowned for cement outdoor sculptures that celebrate Australian gardens.', 'solid-cement' ); ?></p>
        <div class="page-content">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Meet the Maker', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( $maker_name ? $maker_name : __( 'Your Artisan', 'solid-cement' ) ); ?></h2>
            <?php if ( $maker_title ) : ?>
                <p><strong><?php echo esc_html( $maker_title ); ?></strong></p>
            <?php endif; ?>
            <?php if ( $maker_bio ) : ?>
                <p><?php echo esc_html( $maker_bio ); ?></p>
            <?php else : ?>
                <p><?php esc_html_e( 'Share your passion for cement artistry, the care behind each mould, and what makes your cement outdoor sculptures unique.', 'solid-cement' ); ?></p>
            <?php endif; ?>
        </div>
        <div>
            <?php
            if ( $maker_photo ) {
                echo wp_get_attachment_image( $maker_photo, 'large', false, [ 'class' => 'maker-photo' ] );
            } elseif ( has_post_thumbnail() ) {
                the_post_thumbnail( 'large', [ 'class' => 'maker-photo' ] );
            } else {
                echo '<div class="map-placeholder">' . esc_html__( 'Upload a maker portrait via custom field.', 'solid-cement' ) . '</div>';
            }
            ?>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Behind the Scenes', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Craftsmanship in Motion', 'solid-cement' ); ?></h2>
        <div class="media-grid">
            <?php
            if ( $process_ids ) {
                foreach ( $process_ids as $attachment_id ) {
                    echo '<figure class="feature-card">';
                    echo wp_get_attachment_image( $attachment_id, 'large' );
                    echo '</figure>';
                }
            } else {
                echo '<p>' . esc_html__( 'Add attachment IDs to the "solidcement_process_gallery" custom field to show your studio process.', 'solid-cement' ) . '</p>';
            }
            ?>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Mission & Values', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Quality, Care, Creativity', 'solid-cement' ); ?></h2>
        </div>
        <div>
            <?php if ( $mission ) : ?>
                <p><?php echo esc_html( $mission ); ?></p>
            <?php else : ?>
                <p><?php esc_html_e( 'Describe your commitment to bespoke craftsmanship, longevity, and client delight.', 'solid-cement' ); ?></p>
            <?php endif; ?>
            <?php if ( $values ) : ?>
                <ul>
                    <?php foreach ( preg_split( '/\r\n|\r|\n/', $values ) as $value ) : ?>
                        <?php if ( trim( $value ) ) : ?>
                            <li><?php echo esc_html( $value ); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Highlights', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Favourite Projects', 'solid-cement' ); ?></h2>
        <?php solidcement_render_gallery( 'highlight' ); ?>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Book a Consultation', 'solid-cement' ),
        'title'       => __( 'Bring Your Dream Garden to Life', 'solid-cement' ),
        'copy'        => __( 'Share your vision and we will curate a tailored plan for your outdoor sanctuary.', 'solid-cement' ),
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
