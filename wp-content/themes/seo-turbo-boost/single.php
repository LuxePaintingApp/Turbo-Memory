<?php
/**
 * Single post template.
 *
 * @package SEO_Turbo_Boost
 */

get_header();
?>
<section class="swg-section swg-single-post">
    <div class="swg-container">
        <?php seo_turbo_boost_maybe_render_breadcrumbs(); ?>
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article <?php post_class( 'swg-card' ); ?>>
                <header>
                    <h1><?php the_title(); ?></h1>
                    <div class="swg-badge"><?php echo esc_html( get_the_date() ); ?></div>
                </header>
                <div class="swg-post-content">
                    <?php the_content(); ?>
                </div>
                <footer class="swg-hero-cta">
                    <a class="swg-btn" href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Explore services', 'seo-turbo-boost' ); ?></a>
                    <a class="swg-link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Book a consultation', 'seo-turbo-boost' ); ?></a>
                </footer>
            </article>
            <?php
            the_post_navigation(
                [
                    'prev_text' => __( 'Previous article', 'seo-turbo-boost' ),
                    'next_text' => __( 'Next article', 'seo-turbo-boost' ),
                ]
            );
        endwhile;
        ?>
    </div>
</section>
<?php
get_footer();
