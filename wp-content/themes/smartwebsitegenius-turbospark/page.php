<?php
/**
 * Default page template
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
                    <h1><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
