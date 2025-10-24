<?php
/**
 * Reusable quote request section.
 *
 * @package SolidCement
 */

$args = wp_parse_args(
    $args,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Booking', 'solid-cement' ),
        'title'       => __( 'Request a Custom Quote', 'solid-cement' ),
        'copy'        => __( 'Share your project ideas and our artisans will be in touch within two business days.', 'solid-cement' ),
        'extra_class' => '',
    ]
);
?>
<section id="<?php echo esc_attr( $args['section_id'] ); ?>" class="page-section quote-section <?php echo esc_attr( $args['extra_class'] ); ?>">
    <div class="container media-grid">
        <div>
            <?php if ( $args['subtitle'] ) : ?>
                <span class="section-subtitle"><?php echo esc_html( $args['subtitle'] ); ?></span>
            <?php endif; ?>
            <h2 class="section-title"><?php echo esc_html( $args['title'] ); ?></h2>
            <?php
            if ( is_array( $args['copy'] ) ) {
                foreach ( $args['copy'] as $paragraph ) {
                    if ( $paragraph ) {
                        echo '<p>' . esc_html( $paragraph ) . '</p>';
                    }
                }
            } elseif ( $args['copy'] ) {
                echo '<p>' . esc_html( $args['copy'] ) . '</p>';
            }
            ?>
        </div>
        <div class="quote-section__form">
            <?php get_template_part( 'template-parts/forms/quote' ); ?>
        </div>
    </div>
</section>
