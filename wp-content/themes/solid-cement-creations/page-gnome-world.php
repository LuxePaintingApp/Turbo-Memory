<?php
/**
 * Gnome World landing page rich with storytelling, design components, and keyword-focused copy.
 *
 * @package SolidCement
 */

global $post;
get_header();
?>
<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'solid-cement' ); ?>">
    <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'solid-cement' ); ?></a></li>
        <li aria-current="page"><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></li>
    </ol>
</nav>
<section class="page-hero gnome-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Gnome World', 'solid-cement' ); ?></h1>
        <p><?php esc_html_e( 'Charming cement garden gnomes designed to bring a wink of joy to every corner of your garden. Our artisans sculpt each gnome with nuanced facial expressions, gemstone accents, and luxe pigments that resonate with collectors searching for “premium garden gnomes Australia”, “luxury gnome statues Brisbane”, and “Elementor fairy garden templates”.', 'solid-cement' ); ?></p>
        <div class="hero-cta">
            <a class="btn" href="#gnome-collections"><?php esc_html_e( 'Browse Collections', 'solid-cement' ); ?></a>
            <a class="btn btn--outline" href="#gnome-customiser"><?php esc_html_e( 'Customise a Gnome', 'solid-cement' ); ?></a>
        </div>
        <div class="chip-row" role="list">
            <span class="chip" role="listitem"><?php esc_html_e( 'limited edition garden gnomes', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'hand painted outdoor statues', 'solid-cement' ); ?></span>
            <span class="chip" role="listitem"><?php esc_html_e( 'australian made gnomes', 'solid-cement' ); ?></span>
        </div>
    </div>
</section>
<section id="gnome-collections" class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Featured Gnome Collections', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Meet the Crew', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Discover cheeky companions, elegant sprites, and playful cement animal garden statues ready to enliven your landscape. Each range includes narrative cards, care guides, and Elementor block templates so you can showcase your favourite gnomes online.', 'solid-cement' ); ?></p>
        <div class="filter-controls" role="group" aria-label="<?php esc_attr_e( 'Filter by vibe', 'solid-cement' ); ?>">
            <button type="button" class="btn btn--outline" data-filter-chip><?php esc_html_e( 'Collector Edition', 'solid-cement' ); ?></button>
            <button type="button" class="btn btn--outline" data-filter-chip><?php esc_html_e( 'Family Favourites', 'solid-cement' ); ?></button>
            <button type="button" class="btn btn--outline" data-filter-chip><?php esc_html_e( 'Seasonal Celebrations', 'solid-cement' ); ?></button>
            <button type="button" class="btn btn--outline" data-filter-chip><?php esc_html_e( 'Garden Guardians', 'solid-cement' ); ?></button>
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
        <div class="gnome-table-wrapper">
            <table>
                <caption><?php esc_html_e( 'Signature Gnome Personalities', 'solid-cement' ); ?></caption>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Name', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Personality', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Ideal Setting', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Popular Keyword', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e( 'Aurora the Storyteller', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Keeps children enchanted with bedtime tales and fairy garden prompts.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Layered fairy garden terraces with solar lights.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'fairy garden gnome australia', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Marble the Guardian', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Protects heirloom roses while welcoming guests with a cheeky grin.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Formal garden entryways and luxe patios.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'luxury garden gnome brisbane', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e( 'Coral the Adventurer', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Loves water play and bird watching from sculptural rockeries.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'Lagoon-inspired ponds and cascading planters.', 'solid-cement' ); ?></td>
                        <td><?php esc_html_e( 'garden gnome water feature ideas', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="page-section page-section--alt gnome-stories">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Gnome Lore', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Behind Every Expression', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'Sketching Personalities', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'We start with watercolour sketches that capture a gnome’s mood, from whimsical wink to sophisticated smirk. Clients share keywords describing their ideal garden ambience—serene, playful, botanical, or fantastical—and our artists incorporate those cues into accessories, posture, and surface texture.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Cement Casting Rituals', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Each gnome is cast in small batches, vibrated to remove air pockets, and cured in humidity-controlled cabinets. We embed hidden steel supports for longevity and finish with breathable sealants that make cleaning simple. This process helps your gnome resist the elements while shining in Instagram-worthy shoots.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Finishing Touches', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Our finishing studio adds gemstone eyes, pearlescent highlights, and gold leaf charms. We document each step with photos and copywriting suggestions so you can share the journey on your Elementor site or marketing materials, reinforcing keywords like “bespoke garden statue finishing”.', 'solid-cement' ); ?></p>
            </details>
        </div>
    </div>
</section>
<section id="gnome-customiser" class="page-section custom-gnome">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Custom Gnomes', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Design Your Own Gnome', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Fill in the details to start a personalised gnome commission. The more you share, the easier it is for our sculptors to blend personality, storytelling, and sustainable finishes.', 'solid-cement' ); ?></p>
        <form class="contact-card" method="post" action="#">
            <div class="form-row">
                <div class="form-control">
                    <label for="gnome-name"><?php esc_html_e( 'Your Name', 'solid-cement' ); ?></label>
                    <input type="text" id="gnome-name" name="gnome_name" required />
                </div>
                <div class="form-control">
                    <label for="gnome-email"><?php esc_html_e( 'Email Address', 'solid-cement' ); ?></label>
                    <input type="email" id="gnome-email" name="gnome_email" required />
                </div>
            </div>
            <div class="form-control">
                <label for="gnome-character"><?php esc_html_e( 'Character Inspiration', 'solid-cement' ); ?></label>
                <textarea id="gnome-character" name="gnome_character" placeholder="<?php esc_attr_e( 'Describe personality traits, hobbies, or stories you want the gnome to represent.', 'solid-cement' ); ?>"></textarea>
            </div>
            <div class="form-row">
                <div class="form-control">
                    <label for="gnome-palette"><?php esc_html_e( 'Colour Palette', 'solid-cement' ); ?></label>
                    <select id="gnome-palette" name="gnome_palette">
                        <option value="signature"><?php esc_html_e( 'Signature Bright Pink & Soft Pink', 'solid-cement' ); ?></option>
                        <option value="forest"><?php esc_html_e( 'Forest Greens & Misty Greys', 'solid-cement' ); ?></option>
                        <option value="coastal"><?php esc_html_e( 'Coastal Blues & Shell Whites', 'solid-cement' ); ?></option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="gnome-hat"><?php esc_html_e( 'Hat Style', 'solid-cement' ); ?></label>
                    <select id="gnome-hat" name="gnome_hat">
                        <option value="classic"><?php esc_html_e( 'Classic Swirl', 'solid-cement' ); ?></option>
                        <option value="wide"><?php esc_html_e( 'Wide Brim Explorer', 'solid-cement' ); ?></option>
                        <option value="crown"><?php esc_html_e( 'Crown of Blooms', 'solid-cement' ); ?></option>
                    </select>
                </div>
            </div>
            <fieldset class="form-control">
                <legend><?php esc_html_e( 'Preferred Materials', 'solid-cement' ); ?></legend>
                <label><input type="checkbox" name="gnome_materials[]" value="glass" /> <?php esc_html_e( 'Recycled glass accents', 'solid-cement' ); ?></label>
                <label><input type="checkbox" name="gnome_materials[]" value="metals" /> <?php esc_html_e( 'Brushed brass charms', 'solid-cement' ); ?></label>
                <label><input type="checkbox" name="gnome_materials[]" value="lighting" /> <?php esc_html_e( 'Integrated LED lantern', 'solid-cement' ); ?></label>
            </fieldset>
            <fieldset class="form-control">
                <legend><?php esc_html_e( 'Finish Preference', 'solid-cement' ); ?></legend>
                <label><input type="radio" name="gnome_finish" value="satin" checked /> <?php esc_html_e( 'Satin sheen', 'solid-cement' ); ?></label>
                <label><input type="radio" name="gnome_finish" value="matte" /> <?php esc_html_e( 'Matte artisanal', 'solid-cement' ); ?></label>
                <label><input type="radio" name="gnome_finish" value="gloss" /> <?php esc_html_e( 'High gloss', 'solid-cement' ); ?></label>
            </fieldset>
            <div class="form-control slider-control">
                <label for="gnome-height"><?php esc_html_e( 'Ideal Height (cm)', 'solid-cement' ); ?></label>
                <input type="range" id="gnome-height" name="gnome_height" min="30" max="120" value="60" />
                <div class="range-output" data-range-output><?php esc_html_e( 'Approx. 60 cm', 'solid-cement' ); ?></div>
            </div>
            <div class="form-control">
                <label for="gnome-deadline"><?php esc_html_e( 'Desired Delivery Date', 'solid-cement' ); ?></label>
                <input type="date" id="gnome-deadline" name="gnome_deadline" />
            </div>
            <button type="submit" class="btn"><?php esc_html_e( 'Start My Gnome', 'solid-cement' ); ?></button>
        </form>
        <p class="author-credit">c SmartWebsiteGenius With ChatGPT-5 Plus. All Rights Reserved.</p>
    </div>
</section>
<section class="page-section testimonials">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Testimonials', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Fans of the Gnome World', 'solid-cement' ); ?></h2>
        <p><?php esc_html_e( 'Collectors share their favourite styling tips, from pairing gnomes with heirloom roses to integrating them into fairy garden villages. Use these stories in your Elementor carousels or blog recaps to demonstrate how flexible our gnomes can be.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'gnome-world' ); ?>
    </div>
</section>
<section class="faq-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'FAQ', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Gnome Care & Display', 'solid-cement' ); ?></h2>
        <div class="accordion" role="list">
            <details>
                <summary><?php esc_html_e( 'How heavy are the gnomes?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Most gnomes weigh between 6 and 14 kilograms depending on height and accessories. We include lifting instructions and optional bases for soft soil gardens.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'Can gnomes be customised for commercial spaces?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Yes. We reinforce commercial statues with thicker steel cores, anti-graffiti coatings, and branded signage. Hospitality venues often request “Instagram gnome photo spots” and we supply marketing copy along with the sculpture.', 'solid-cement' ); ?></p>
            </details>
            <details>
                <summary><?php esc_html_e( 'What maintenance is required?', 'solid-cement' ); ?></summary>
                <p><?php esc_html_e( 'Simply rinse with gentle soap every three months and reapply sealant every two years. We send automated reminders so your collector gnomes stay luminous season after season.', 'solid-cement' ); ?></p>
            </details>
        </div>
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
<?php
get_footer();
