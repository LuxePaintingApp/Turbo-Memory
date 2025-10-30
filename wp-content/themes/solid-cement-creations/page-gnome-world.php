<?php
/**
 * Gnome World landing page.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<section class="page-hero">
    <div class="container">
        <span class="badge"><?php esc_html_e( 'Signature Collection', 'solid-cement' ); ?></span>
        <h1><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Charming cement garden gnomes designed to bring a wink of joy to every corner of your garden.', 'solid-cement' ); ?></p>
        <div class="chip-row">
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l2 6h6l-5 3.6L17 18l-5-3.4L7 18l2-6.4L4 8h6z"/></svg>
                <?php esc_html_e( 'Hand-painted hats', 'solid-cement' ); ?>
            </span>
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a9 9 0 019 9c0 5-9 10-9 10S3 17 3 12a9 9 0 019-9zm0 4a3 3 0 100 6 3 3 0 000-6z"/></svg>
                <?php esc_html_e( 'Weather smart sealants', 'solid-cement' ); ?>
            </span>
            <span class="chip">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01z"/></svg>
                <?php esc_html_e( 'Limited edition drops', 'solid-cement' ); ?>
            </span>
        </div>
        <div class="popover" id="gnome-popover">
            <button class="icon-btn" type="button" data-popover-toggle="gnome-popover" aria-label="<?php esc_attr_e( 'Show gnome care tips', 'solid-cement' ); ?>">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm1 15h-2v-2h2zm0-4h-2V7h2z"/></svg>
            </button>
            <div class="popover__panel">
                <p><?php esc_html_e( 'Dust weekly with a soft brush and refresh sealant every 18 months to keep colours brilliant.', 'solid-cement' ); ?></p>
            </div>
        </div>
        <div class="app-bar">
            <span class="badge"><?php esc_html_e( 'Mobile UI Tip', 'solid-cement' ); ?></span>
            <p><?php esc_html_e( 'Drag the slider below to preview gnome heights — the Elementor block adapts perfectly on phones.', 'solid-cement' ); ?></p>
            <button class="btn" type="button" data-drawer-open="gnome-drawer"><?php esc_html_e( 'Open Size Guide', 'solid-cement' ); ?></button>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container page-layout">
        <aside class="page-sidebar">
            <h3><?php esc_html_e( 'Collector Checklist', 'solid-cement' ); ?></h3>
            <ul class="list-check">
                <li><?php esc_html_e( 'Choose a clan: Woodland, Coastal, or Celestial gnomes', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Pick accessories: lanterns, musical instruments, or pets', 'solid-cement' ); ?></li>
                <li><?php esc_html_e( 'Lock in finishes: matte, pearl, or high-gloss metallic', 'solid-cement' ); ?></li>
            </ul>
            <div class="badge-row">
                <span class="badge"><?php esc_html_e( 'Garden gnomes Australia', 'solid-cement' ); ?></span>
                <span class="badge"><?php esc_html_e( 'Custom cement statues', 'solid-cement' ); ?></span>
            </div>
        </aside>
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Featured Gnome Collections', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Meet the Crew', 'solid-cement' ); ?></h2>
            <p class="section-lede"><?php esc_html_e( 'Discover cheeky companions, elegant sprites, and playful cement animal garden statues ready to enliven your landscape. Each card is a reusable Elementor component featuring imagery, descriptive copy, and quote buttons.', 'solid-cement' ); ?></p>
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
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 26 ) ); ?></p>
                            <a class="btn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Request Quote', 'solid-cement' ); ?></a>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>' . esc_html__( 'Assign the "gnome-world" collection category to showcase your characters here.', 'solid-cement' ) . '</p>';
                endif;
                ?>
            </div>
            <div class="pagination" aria-label="<?php esc_attr_e( 'Browse more gnome characters', 'solid-cement' ); ?>">
                <span class="current">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Interactive Preview', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Design Your Own Gnome', 'solid-cement' ); ?></h2>
        <div class="page-layout">
            <aside class="page-sidebar">
                <div class="stepper">
                    <div class="stepper__track">
                        <div class="stepper__item">
                            <span class="stepper__dot">1</span>
                            <p><?php esc_html_e( 'Select pose', 'solid-cement' ); ?></p>
                        </div>
                        <div class="stepper__item">
                            <span class="stepper__dot">2</span>
                            <p><?php esc_html_e( 'Choose finish', 'solid-cement' ); ?></p>
                        </div>
                        <div class="stepper__item">
                            <span class="stepper__dot">3</span>
                            <p><?php esc_html_e( 'Add accessories', 'solid-cement' ); ?></p>
                        </div>
                        <div class="stepper__item">
                            <span class="stepper__dot">4</span>
                            <p><?php esc_html_e( 'Confirm delivery', 'solid-cement' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="slider-display" data-range-output>
                    <label for="gnome-height"><?php esc_html_e( 'Height (cm)', 'solid-cement' ); ?></label>
                    <input class="range-input" type="range" id="gnome-height" min="20" max="120" value="65" />
                    <span data-output-value>65</span>
                </div>
                <div class="form-control">
                    <label class="toggle">
                        <input type="checkbox" checked />
                        <span class="toggle__slider"></span>
                    </label>
                    <p><?php esc_html_e( 'WeatherGuard top coat', 'solid-cement' ); ?></p>
                </div>
            </aside>
            <div>
                <form class="contact-card" method="post" action="#" data-toast-target="gnome-toast">
                    <div class="form-control">
                        <label for="gnome-name"><?php esc_html_e( 'Gnome Name', 'solid-cement' ); ?></label>
                        <input type="text" id="gnome-name" name="gnome_name" placeholder="<?php esc_attr_e( 'Sir Mossbeard', 'solid-cement' ); ?>" required />
                    </div>
                    <div class="form-control">
                        <label for="gnome-email"><?php esc_html_e( 'Email', 'solid-cement' ); ?></label>
                        <input type="email" id="gnome-email" name="gnome_email" required />
                    </div>
                    <div class="form-control">
                        <label for="gnome-hat"><?php esc_html_e( 'Hat Style', 'solid-cement' ); ?></label>
                        <select id="gnome-hat" name="gnome_hat">
                            <option value="tall"><?php esc_html_e( 'Tall Storybook', 'solid-cement' ); ?></option>
                            <option value="wide"><?php esc_html_e( 'Wide Brim', 'solid-cement' ); ?></option>
                            <option value="hood"><?php esc_html_e( 'Hooded Wanderer', 'solid-cement' ); ?></option>
                        </select>
                    </div>
                    <div class="form-control">
                        <fieldset>
                            <legend><?php esc_html_e( 'Accessories', 'solid-cement' ); ?></legend>
                            <label><input type="checkbox" name="gnome_accessories[]" value="lantern" /> <?php esc_html_e( 'Lantern', 'solid-cement' ); ?></label>
                            <label><input type="checkbox" name="gnome_accessories[]" value="instrument" /> <?php esc_html_e( 'Mandolin', 'solid-cement' ); ?></label>
                            <label><input type="checkbox" name="gnome_accessories[]" value="pet" /> <?php esc_html_e( 'Pet hedgehog', 'solid-cement' ); ?></label>
                        </fieldset>
                    </div>
                    <div class="form-control">
                        <label><?php esc_html_e( 'Personality', 'solid-cement' ); ?></label>
                        <label><input type="radio" name="gnome_personality" value="guardian" checked /> <?php esc_html_e( 'Garden guardian', 'solid-cement' ); ?></label>
                        <label><input type="radio" name="gnome_personality" value="mischief" /> <?php esc_html_e( 'Playful mischief', 'solid-cement' ); ?></label>
                        <label><input type="radio" name="gnome_personality" value="sage" /> <?php esc_html_e( 'Wise storyteller', 'solid-cement' ); ?></label>
                    </div>
                    <div class="form-control">
                        <label for="gnome-notes"><?php esc_html_e( 'Design Notes', 'solid-cement' ); ?></label>
                        <textarea id="gnome-notes" name="gnome_notes" rows="4" placeholder="<?php esc_attr_e( 'Share garden colours, favourite flowers, or fairy garden themes.', 'solid-cement' ); ?>"></textarea>
                    </div>
                    <button class="btn" type="submit"><?php esc_html_e( 'Send Design Brief', 'solid-cement' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Gnome Lore', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Stories Behind the Statues', 'solid-cement' ); ?></h2>
        <div class="accordion" data-accordion>
            <div class="accordion__item is-open">
                <button class="accordion__trigger" type="button" aria-expanded="true"><?php esc_html_e( 'What makes an heirloom gnome?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'Heirloom gnomes are cast with our dense cement blend, then aged with mineral washes that echo mossy woodland textures. Each figurine receives a numbered base so collectors can track limited releases.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <div class="accordion__item">
                <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'How do gnome worlds survive Australian weather?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'We engineer drainage into every base, apply UV-stable pigments, and offer restoration services to refresh finishes after wild summers. Toggle the WeatherGuard option in the custom form to include an extra layer of protection.', 'solid-cement' ); ?></p>
                </div>
            </div>
            <div class="accordion__item">
                <button class="accordion__trigger" type="button" aria-expanded="false"><?php esc_html_e( 'Can gnomes be personalised for events?', 'solid-cement' ); ?></button>
                <div class="accordion__panel">
                    <p><?php esc_html_e( 'Absolutely. We engrave names, incorporate corporate colours, or add miniature props. Use Elementor tabs to showcase wedding, hospitality, and retail installations for SEO-rich storytelling.', 'solid-cement' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--alt">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Collector Carousel', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Gnome Families on Tour', 'solid-cement' ); ?></h2>
        <div class="carousel" data-carousel>
            <div class="carousel__track">
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Woodland Wanderers', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Moss-toned outfits and mushroom lanterns suit shady corners and fern-draped fairy gardens.', 'solid-cement' ); ?></p>
                </article>
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Coastal Guardians', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Salt-resistant sealants and driftwood accessories bring whimsy to beachside decks and courtyards.', 'solid-cement' ); ?></p>
                </article>
                <article class="carousel__item card">
                    <h3><?php esc_html_e( 'Celestial Storytellers', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Glow-in-the-dark finishes and star-tipped wands turn night gardens into magical lounges.', 'solid-cement' ); ?></p>
                </article>
            </div>
            <div class="carousel__controls">
                <button class="carousel__button" type="button" data-carousel-prev><?php esc_html_e( 'Previous', 'solid-cement' ); ?></button>
                <button class="carousel__button" type="button" data-carousel-next><?php esc_html_e( 'Next', 'solid-cement' ); ?></button>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Testimonials', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Fans of the Gnome World', 'solid-cement' ); ?></h2>
        <?php solidcement_render_gallery( 'gnome-world' ); ?>
    </div>
</section>

<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Design Your Own', 'solid-cement' ),
        'title'       => __( 'Custom Gnomes', 'solid-cement' ),
        'copy'        => [
            __( 'Pick a hat, choose a pose, and we will sculpt a gnome that mirrors your personality.', 'solid-cement' ),
            __( 'Add inspiration photos and notes so our artisans can bring your concept to life.', 'solid-cement' ),
        ],
        'extra_class' => 'page-section--alt',
    ]
);
?>

<div class="toast" role="status" aria-live="polite" id="gnome-toast">
    <span class="toast__badge">⚒</span>
    <p><?php esc_html_e( 'Your custom gnome brief arrived! Expect sketches in your inbox shortly.', 'solid-cement' ); ?></p>
</div>

<div class="drawer" data-drawer id="gnome-drawer">
    <div class="drawer__handle" aria-hidden="true"></div>
    <h2><?php esc_html_e( 'Size & Finish Guide', 'solid-cement' ); ?></h2>
    <div class="table-wrapper">
        <table class="luxe-table">
            <thead>
                <tr>
                    <th><?php esc_html_e( 'Size', 'solid-cement' ); ?></th>
                    <th><?php esc_html_e( 'Ideal Placement', 'solid-cement' ); ?></th>
                    <th><?php esc_html_e( 'Finish', 'solid-cement' ); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php esc_html_e( '30 cm', 'solid-cement' ); ?></td>
                    <td><?php esc_html_e( 'Balcony planters', 'solid-cement' ); ?></td>
                    <td><?php esc_html_e( 'Matte pastel', 'solid-cement' ); ?></td>
                </tr>
                <tr>
                    <td><?php esc_html_e( '60 cm', 'solid-cement' ); ?></td>
                    <td><?php esc_html_e( 'Garden pathways', 'solid-cement' ); ?></td>
                    <td><?php esc_html_e( 'Pearlescent glow', 'solid-cement' ); ?></td>
                </tr>
                <tr>
                    <td><?php esc_html_e( '90 cm', 'solid-cement' ); ?></td>
                    <td><?php esc_html_e( 'Grand entrances', 'solid-cement' ); ?></td>
                    <td><?php esc_html_e( 'High-gloss metallic', 'solid-cement' ); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <button class="btn" type="button" data-drawer-close="gnome-drawer"><?php esc_html_e( 'Close Guide', 'solid-cement' ); ?></button>
</div>

<?php get_footer(); ?>
