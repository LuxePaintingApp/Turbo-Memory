<?php
/**
 * Front page template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $post;

get_header();

$hero_title       = get_theme_mod( 'swg_turbospark_hero_title', __( 'Launch blazing-fast experiences that search engines love.', 'smartwebsitegenius-turbospark' ) );
$hero_subtitle    = get_theme_mod( 'swg_turbospark_hero_subtitle', __( 'TurboSpark by SmartWebsiteGenius is the 2025-ready WordPress theme that keeps Core Web Vitals sparkling, pages ultra-responsive, and every section Elementor friendly.', 'smartwebsitegenius-turbospark' ) );
$hero_cta_label   = get_theme_mod( 'swg_turbospark_hero_cta_label', __( 'Build with TurboSpark', 'smartwebsitegenius-turbospark' ) );
$hero_cta_url     = get_theme_mod( 'swg_turbospark_hero_cta_url', '#services' );
$hero_eyebrow     = get_theme_mod( 'swg_turbospark_hero_eyebrow', __( 'SmartWebsiteGenius Presents', 'smartwebsitegenius-turbospark' ) );

$feature_items = [
    get_theme_mod( 'swg_turbospark_feature_one', __( 'SEO-rich controls including schema, open graph, and instant indexing helpers.', 'smartwebsitegenius-turbospark' ) ),
    get_theme_mod( 'swg_turbospark_feature_two', __( 'Featherweight CSS and zero jQuery for peak performance.', 'smartwebsitegenius-turbospark' ) ),
    get_theme_mod( 'swg_turbospark_feature_three', __( 'Elementor, child-theme, and Website Skins compatible by design.', 'smartwebsitegenius-turbospark' ) ),
];
?>
<section class="hero">
    <p class="hero__eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="hero__title"><?php echo esc_html( $hero_title ); ?></h1>
    <p class="hero__subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
    <?php if ( $hero_cta_label ) : ?>
        <a class="hero__cta" href="<?php echo esc_url( $hero_cta_url ); ?>"><?php echo esc_html( $hero_cta_label ); ?></a>
    <?php endif; ?>
</section>

<section id="services" class="section section--alt">
    <div class="site-container">
        <div class="section__heading">
            <h2><?php esc_html_e( 'Why TurboSpark wins the rankings', 'smartwebsitegenius-turbospark' ); ?></h2>
            <p><?php esc_html_e( 'TurboSpark pairs brilliant color with a ruthless focus on performance, delivering SEO authority and stunning UX.', 'smartwebsitegenius-turbospark' ); ?></p>
        </div>
        <div class="section__grid section__grid--three">
            <?php foreach ( $feature_items as $feature ) : ?>
                <?php if ( $feature ) : ?>
                    <article class="card">
                        <div class="card__icon" aria-hidden="true">⚡</div>
                        <p><?php echo esc_html( $feature ); ?></p>
                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="site-container">
        <div class="section__heading">
            <h2><?php esc_html_e( 'Featured Insights', 'smartwebsitegenius-turbospark' ); ?></h2>
            <p><?php esc_html_e( 'Stay ahead with the latest SmartWebsiteGenius tactics for 2025 search domination.', 'smartwebsitegenius-turbospark' ); ?></p>
        </div>
        <div class="section__grid section__grid--three">
            <?php
            $front_posts = new WP_Query(
                [
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'no_found_rows'  => true,
                ]
            );

            if ( $front_posts->have_posts() ) :
                while ( $front_posts->have_posts() ) :
                    $front_posts->the_post();
                    ?>
                    <article class="card">
                        <p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
                        <h3 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post-card__excerpt"><?php the_excerpt(); ?></div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <article class="card">
                    <h3 class="post-card__title"><?php esc_html_e( 'Your latest posts will sparkle here.', 'smartwebsitegenius-turbospark' ); ?></h3>
                    <p><?php esc_html_e( 'Publish or select posts to feature your expertise.', 'smartwebsitegenius-turbospark' ); ?></p>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="site-container">
        <div class="section__grid">
            <article class="card">
                <h2><?php esc_html_e( 'Built for Elementor and Gutenberg harmony', 'smartwebsitegenius-turbospark' ); ?></h2>
                <p><?php esc_html_e( 'TurboSpark keeps markup lean and CSS scoped, so you can design freely with Elementor, Gutenberg blocks, or custom child themes without performance penalties.', 'smartwebsitegenius-turbospark' ); ?></p>
                <p><?php esc_html_e( 'Every template is tuned for accessibility, SEO best practices, and compatibility with Website Skins and leading optimization plugins.', 'smartwebsitegenius-turbospark' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="site-container">
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
