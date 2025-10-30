<?php
/**
 * Gnome World landing page.
 *
 * @package SolidCement
 */

global $post;
get_header();

$gnome_personas = [
    [
        'name'  => __( 'Storybook Sentinels', 'solid-cement' ),
        'description' => __( 'Tall-hatted guardians crafted for grand entrances and manicured hedges. Each sentinel boasts hand-carved details such as brass buttons, botanical etchings, and twinkling glass eyes.', 'solid-cement' ),
    ],
    [
        'name'  => __( 'Fairy Garden Friends', 'solid-cement' ),
        'description' => __( 'Delicate gnomes designed for mossy fairy gardens. Their petite proportions and layered patinas blend seamlessly with mini bridges, mushroom stools, and twinkle-light pathways.', 'solid-cement' ),
    ],
    [
        'name'  => __( 'Modern Garden Muse', 'solid-cement' ),
        'description' => __( 'Sleek, minimalist silhouettes with architectural lines ideal for contemporary courtyards and poolside lounges. Choose from matte charcoal, terrazzo speckle, or metallic champagne finishes.', 'solid-cement' ),
    ],
];
?>
<section class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Charming cement garden gnomes designed to bring a wink of joy to every corner of your garden.', 'solid-cement' ); ?></p>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Meet the Characters', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'A Gallery of Gnome Personalities', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Our gnomes are more than statues; they are storytellers that greet visitors, guard herb gardens, and spark conversations. Each design begins with a hand-drawn character sketch before being sculpted in high-performance cement mixes that thrive outdoors.', 'solid-cement' ); ?></p>
        <div class="gnome-persona-grid">
            <?php foreach ( $gnome_personas as $persona ) : ?>
                <article class="persona-card">
                    <h3><?php echo esc_html( $persona['name'] ); ?></h3>
                    <p><?php echo esc_html( $persona['description'] ); ?></p>
                    <div class="badge-row">
                        <span class="badge"><?php esc_html_e( 'Hand-painted', 'solid-cement' ); ?></span>
                        <span class="badge"><?php esc_html_e( 'UV Sealed', 'solid-cement' ); ?></span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Featured Gnome Collections', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Meet the Crew', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Discover cheeky companions, elegant sprites, and playful cement animal garden statues ready to enliven your landscape. Filter by vibe to find the perfect character for your outdoor sanctuary.', 'solid-cement' ); ?></p>
        <div class="filter-toolbar" role="region" aria-label="Gnome Filters">
            <label for="gnome-sort" class="form-label"><?php esc_html_e( 'Sort by', 'solid-cement' ); ?></label>
            <select id="gnome-sort">
                <option><?php esc_html_e( 'Latest Sculptures', 'solid-cement' ); ?></option>
                <option><?php esc_html_e( 'Top Rated', 'solid-cement' ); ?></option>
                <option><?php esc_html_e( 'Limited Editions', 'solid-cement' ); ?></option>
            </select>
            <div class="chip-group">
                <span class="chip chip--filter"><?php esc_html_e( 'Garden Party Ready', 'solid-cement' ); ?></span>
                <span class="chip chip--filter"><?php esc_html_e( 'Petite Size', 'solid-cement' ); ?></span>
                <span class="chip chip--filter"><?php esc_html_e( 'Statement Piece', 'solid-cement' ); ?></span>
            </div>
        </div>
        <div class="featured-grid">
            <?php
            $gnome_collections = new WP_Query(
                [
                    'post_type'      => 'solidcement_collection',
                    'posts_per_page' => 9,
                    'tax_query'      => [
                        [
                            'taxonomy' => 'collection_category',
                            'field'    => 'slug',
                            'terms'    => [ 'gnome-world' ],
                        ],
                    ],
                ]
            );
            if ( $gnome_collections->have_posts() ) :
                while ( $gnome_collections->have_posts() ) : $gnome_collections->the_post();
                    ?>
                    <article class="feature-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large' ); ?>
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <div class="card-actions">
                            <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Request Quote', 'solid-cement' ); ?></a>
                            <a class="btn btn--ghost" href="#quote"><?php esc_html_e( 'Add to Wishlist', 'solid-cement' ); ?></a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__( 'Assign the "gnome-world" collection category to showcase your characters here.', 'solid-cement' ) . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Custom Gnomes', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Design Your Own Gnome', 'solid-cement' ); ?></h2>
            <p><?php esc_html_e( 'Collaborate with our artisans to create a gnome that mirrors your personality. Choose hat styles, facial expressions, companion animals, and personalised inscriptions. We sketch multiple concepts before casting and provide progress photos along the way.', 'solid-cement' ); ?></p>
            <ul class="icon-list">
                <li><?php esc_html_e( 'Add LED lanterns for twilight glow.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Select from 24 premium pigment palettes.', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Integrate time capsules or keepsakes within the base.', 'solid-cement' ); ?></li>
            </ul>
        </div>
        <div>
            <form class="contact-card" method="post" action="#">
                <div class="form-control">
                    <label for="gnome-name"><?php esc_html_e( 'Full Name', 'solid-cement' ); ?></label>
                    <input type="text" id="gnome-name" name="gnome_name" required />
                </div>
                <div class="form-control">
                    <label for="gnome-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                    <input type="email" id="gnome-email" name="gnome_email" required />
                </div>
                <div class="form-control form-control--inline">
                    <span class="form-label"><?php esc_html_e( 'Choose a Style', 'solid-cement' ); ?></span>
                    <label class="chip">
                        <input type="radio" name="gnome_style" value="storybook" checked />
                        <span><?php esc_html_e( 'Storybook', 'solid-cement' ); ?></span>
                    </label>
                    <label class="chip">
                        <input type="radio" name="gnome_style" value="fairy" />
                        <span><?php esc_html_e( 'Fairy Garden', 'solid-cement' ); ?></span>
                    </label>
                    <label class="chip">
                        <input type="radio" name="gnome_style" value="modern" />
                        <span><?php esc_html_e( 'Modern Muse', 'solid-cement' ); ?></span>
                    </label>
                </div>
                <div class="form-control">
                    <label for="gnome-accessories"><?php esc_html_e( 'Accessories', 'solid-cement' ); ?></label>
                    <select id="gnome-accessories" name="gnome_accessories[]" multiple>
                        <option value="lantern"><?php esc_html_e( 'Lantern', 'solid-cement' ); ?></option>
                        <option value="bird"><?php esc_html_e( 'Songbird Companion', 'solid-cement' ); ?></option>
                        <option value="book"><?php esc_html_e( 'Storybook', 'solid-cement' ); ?></option>
                        <option value="mushroom"><?php esc_html_e( 'Mushroom Seat', 'solid-cement' ); ?></option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="gnome-notes"><?php esc_html_e( 'Design Notes', 'solid-cement' ); ?></label>
                    <textarea id="gnome-notes" name="gnome_notes" placeholder="Describe colours, poses, or inscriptions"></textarea>
                </div>
                <div class="form-control form-control--inline">
                    <label class="toggle">
                        <input type="checkbox" name="gnome_updates" value="1" checked />
                        <span><?php esc_html_e( 'Email me concept sketches and progress photos.', 'solid-cement' ); ?></span>
                    </label>
                </div>
                <button type="submit" class="btn"><?php esc_html_e( 'Submit Concept', 'solid-cement' ); ?></button>
            </form>
        </div>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Gnome Care', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Keep Their Magic Glowing', 'solid-cement' ); ?></h2>
        <div class="care-accordion" data-accordion>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'Seasonal Cleaning Ritual', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'Wipe surfaces with a soft brush and pH-neutral cleanser every change of season. Reapply protective sealant annually for coastal locations.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'Weatherproof Styling Tips', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'Nest gnomes among hardy groundcovers and install discreet drainage to keep bases dry. Add micro solar lights to highlight their expressions at twilight.', 'solid-cement' ); ?></p>
                </div>
            </article>
            <article class="accordion-item">
                <button class="accordion-toggle" aria-expanded="false">
                    <span><?php esc_html_e( 'Restoration Assurance', 'solid-cement' ); ?></span>
                    <span class="accordion-icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content" hidden>
                    <p><?php esc_html_e( 'If mishaps occur, our restoration team offers colour matching, chip repair, and detailing so your gnome returns to glory.', 'solid-cement' ); ?></p>
                </div>
            </article>
        </div>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Book Your Gnome', 'solid-cement' ),
        'title'       => __( 'Bring Home a Bespoke Companion', 'solid-cement' ),
        'copy'        => [
            __( 'Select your favourite characters, share placement ideas, and receive a tailored quote with styling suggestions.', 'solid-cement' ),
            __( 'Our team will map out delivery logistics, aftercare tips, and optional accessories so your new gnome arrives ready to delight.', 'solid-cement' ),
        ],
        'extra_class' => 'page-section--alt',
    ]
);
?>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Testimonials', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Fans of the Gnome World', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Homeowners across Australia share how our charming cement gnomes transformed patios, balconies, and expansive estate gardens into whimsical retreats.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'gnome-world' ); ?>
    </div>
</section>
<?php
get_footer();
