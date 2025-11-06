<?php
/**
 * Fairy Garden page template.
 *
 * @package SolidCement
 */

global $post;

get_header();
?>
<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></span>
            <h1><?php esc_html_e( 'Magic in Every Corner', 'solid-cement' ); ?></h1>
            <p><?php esc_html_e( 'Immerse your guests in a storybook setting with bespoke pathways, sculptural lighting, and miniature architecture.', 'solid-cement' ); ?></p>
        </div>
        <figure class="hero-media">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Enchanting fairy garden scene.', 'solid-cement' ); ?>" />
            <figcaption><?php esc_html_e( 'Perth Botanic Installation', 'solid-cement' ); ?></figcaption>
        </figure>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Gallery Carousel', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Scenes That Spark Wonder', 'solid-cement' ); ?></h2>
        </div>
        <div class="gallery-grid">
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-fairy-garden.svg' ); ?>" alt="<?php esc_attr_e( 'Fairy lights over moss pathways.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-garden-designs.svg' ); ?>" alt="<?php esc_attr_e( 'Miniature castle within a garden.', 'solid-cement' ); ?>" />
            </figure>
            <figure>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-gnome-world.svg' ); ?>" alt="<?php esc_attr_e( 'Water feature with fairy statues.', 'solid-cement' ); ?>" />
            </figure>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?php esc_html_e( 'Design Inspiration', 'solid-cement' ); ?></span>
            <h2><?php esc_html_e( 'Ideas to Enchant Every Visit', 'solid-cement' ); ?></h2>
        </div>
        <div class="posts-grid">
            <?php
            $fairy_posts = new WP_Query(
                [
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'category_name'  => 'inspiration,fairy-garden',
                ]
            );
            if ( $fairy_posts->have_posts() ) :
                while ( $fairy_posts->have_posts() ) :
                    $fairy_posts->the_post();
                    ?>
                    <article <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="post-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 26 ) ); ?></p>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p><?php esc_html_e( 'Add inspirational posts to guide visitors through your fairy garden possibilities.', 'solid-cement' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container card-style-a">
        <h2><?php esc_html_e( 'Bring the Magic Home', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Invite us to craft a customised fairy garden experience. From layout planning to interactive lighting, every moment is considered.', 'solid-cement' ); ?></p>
        <a class="btn btn--light" href="#quote"><?php esc_html_e( 'Book Your Consultation', 'solid-cement' ); ?></a>
    </div>
</section>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        if ( trim( get_the_content() ) ) :
            ?>
            <section class="page-section page-section--content">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
            <?php
        endif;
    endwhile;
endif;
get_footer();
