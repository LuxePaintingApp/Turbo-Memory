<?php
/**
 * Template part for displaying post excerpts
 *
 * @package SmartWebsiteGenius_TurboSpark
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
    <p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?> · <?php the_category( ', ' ); ?></p>
    <h2 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="post-card__excerpt">
        <?php the_excerpt(); ?>
    </div>
    <a class="hero__cta" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'smartwebsitegenius-turbospark' ); ?></a>
</article>
