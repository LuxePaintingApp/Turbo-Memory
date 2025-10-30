<?php
/**
 * Single post template
 *
 * @package SmartWebsiteGenius_TurboSpark
 */

global $post;

get_header();
?>
<section class="section">
    <div class="site-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
                <header class="entry-header">
                    <p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?> · <?php the_category( ', ' ); ?></p>
                    <h1 class="post-card__title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer class="entry-footer">
                    <?php the_tags( '<p class="post-card__meta">' . esc_html__( 'Tags: ', 'smartwebsitegenius-turbospark' ), ', ', '</p>' ); ?>
                </footer>
            </article>
            <?php the_post_navigation(); ?>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
