<?php
/**
 * About page template.
 *
 * @package SolidCement
 */

global $post;
get_header();

$maker_name  = get_post_meta( get_the_ID(), 'solidcement_maker_name', true );
$maker_title = get_post_meta( get_the_ID(), 'solidcement_maker_title', true );
$maker_bio   = get_post_meta( get_the_ID(), 'solidcement_maker_bio', true );
$maker_photo = get_post_meta( get_the_ID(), 'solidcement_maker_photo', true );
$mission     = get_post_meta( get_the_ID(), 'solidcement_mission', true );
$values      = get_post_meta( get_the_ID(), 'solidcement_values', true );
$process_ids = array_filter( array_map( 'trim', explode( ',', (string) get_post_meta( get_the_ID(), 'solidcement_process_gallery', true ) ) ) );

$brand_story = [
    __( 'Solid Cement Creations began in a humble backyard kiln where founder Lila Hartley experimented with sculpting whimsical garden gnomes for friends. Word spread quickly, and soon local resorts requested bespoke cement garden statues for their atriums and pool decks. Each commission refined our techniques and ignited a passion for elevating outdoor art into a fully immersive experience.', 'solid-cement' ),
    __( 'We now operate from a light-filled Brisbane studio filled with artisanal moulds, Italian pigments, and an ever-growing archive of botanical inspiration. Our team combines fine art training with engineering precision, casting cement fairy garden villages that withstand tropical summers, salt-laden breezes, and lively garden parties.', 'solid-cement' ),
    __( 'From the first sketch to the final sealant, we obsess over detail. Clients receive mood boards, material samples, and 3D previews that bring their visions to life. By partnering with horticulturalists and lighting designers, we ensure every statue, planter, and bird bath harmonises with the surrounding landscape.', 'solid-cement' ),
    __( 'Today, Solid Cement Creations serves homeowners, landscape architects, boutique hotels, and councils seeking durable art that sparks joy. Our philosophy is simple: luxury should feel alive, tactile, and deeply personal. That ethos informs every gnome grin, fairy door, and textured plinth we craft.', 'solid-cement' ),
];

$studio_pillars = [
    [
        'title' => __( 'Craftsmanship with Heart', 'solid-cement' ),
        'body'  => __( 'Each artisan trains in sculpting, casting, hand-painting, and finishing to deliver heirloom-quality results. We draw inspiration from Australian flora, Art Nouveau curves, and contemporary architecture to create multidimensional pieces.', 'solid-cement' ),
    ],
    [
        'title' => __( 'Sustainable Luxury', 'solid-cement' ),
        'body'  => __( 'Our cement blends incorporate recycled aggregates and low-carbon additives. Rainwater harvesting feeds our polishing stations, and leftover mixes become community garden stepping stones.', 'solid-cement' ),
    ],
    [
        'title' => __( 'Client-Centred Collaboration', 'solid-cement' ),
        'body'  => __( 'From first consultation to aftercare, we communicate clearly and compassionately. Detailed style guides, styling checklists, and maintenance tutorials empower clients long after installation day.', 'solid-cement' ),
    ],
];
?>
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p><?php echo esc_html( get_post_meta( get_the_ID(), 'solidcement_about_tagline', true ) ? get_post_meta( get_the_ID(), 'solidcement_about_tagline', true ) : __( 'From humble beginnings to luxury garden artistry.', 'solid-cement' ) ); ?></p>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Brand Story', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'From Humble Kiln to Couture Gardens', 'solid-cement' ); ?></h2>
        <div class="page-content page-content--rich">
            <?php foreach ( $brand_story as $paragraph ) : ?>
                <p><?php echo esc_html( $paragraph ); ?></p>
            <?php endforeach; ?>
        </div>
        <div class="story-table" role="region" aria-label="Studio Snapshot">
            <table>
                <thead>
                    <tr>
                        <th scope="col"><?php esc_html_e( 'Milestone', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Year', 'solid-cement' ); ?></th>
                        <th scope="col"><?php esc_html_e( 'Details', 'solid-cement' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'First Collection Launch', 'solid-cement' ); ?></th>
                        <td>2014</td>
                        <td><?php esc_html_e( 'Limited-edition garden gnomes inspired by Queensland rainforests sold out in three days.', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'Studio Expansion', 'solid-cement' ); ?></th>
                        <td>2018</td>
                        <td><?php esc_html_e( 'Opened our current atelier with dedicated finishing booths, a mould archive, and client design lounge.', 'solid-cement' ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?php esc_html_e( 'National Recognition', 'solid-cement' ); ?></th>
                        <td>2021</td>
                        <td><?php esc_html_e( 'Awarded Australian Garden Innovator for immersive fairy garden designs.', 'solid-cement' ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Meet the Maker', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( $maker_name ? $maker_name : __( 'Your Artisan', 'solid-cement' ) ); ?></h2>
            <?php if ( $maker_title ) : ?>
                <p><strong><?php echo esc_html( $maker_title ); ?></strong></p>
            <?php endif; ?>
            <?php if ( $maker_bio ) : ?>
                <p><?php echo esc_html( $maker_bio ); ?></p>
            <?php else : ?>
                <p><?php esc_html_e( 'Lila Hartley studied sculpture in Florence before returning to Australia to elevate cement artistry. Her eye for detail and love of storytelling shape every gnome grin and fairy wing we sculpt.', 'solid-cement' ); ?></p>
            <?php endif; ?>
            <p class="author-credit">Copyright SmartWebsiteGenius With ChatGPT-5 Plus All Rights Reserved</p>
            <div class="maker-tabs" data-accordion>
                <article class="accordion-item">
                    <button class="accordion-toggle" aria-expanded="false">
                        <span><?php esc_html_e( 'Studio Rituals', 'solid-cement' ); ?></span>
                        <span class="accordion-icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content" hidden>
                        <p><?php esc_html_e( 'Morning begins with sketchbook sessions, exploring new silhouettes for garden statues. Afternoons are reserved for hand-painting details like gnome waistcoats, fairy mushrooms, and bird bath mosaics.', 'solid-cement' ); ?></p>
                    </div>
                </article>
                <article class="accordion-item">
                    <button class="accordion-toggle" aria-expanded="false">
                        <span><?php esc_html_e( 'Favourite Materials', 'solid-cement' ); ?></span>
                        <span class="accordion-icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content" hidden>
                        <p><?php esc_html_e( 'We favour eco-conscious cement blends, recycled glass aggregates, and plant-based sealers to ensure our statues shine sustainably.', 'solid-cement' ); ?></p>
                    </div>
                </article>
            </div>
        </div>
        <div>
            <?php
            if ( $maker_photo ) {
                echo wp_get_attachment_image( $maker_photo, 'large', false, [ 'class' => 'maker-photo' ] );
            } elseif ( has_post_thumbnail() ) {
                the_post_thumbnail( 'large', [ 'class' => 'maker-photo' ] );
            } else {
                echo '<div class="map-placeholder">' . esc_html__( 'Upload a maker portrait via custom field.', 'solid-cement' ) . '</div>';
            }
            ?>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Behind the Scenes', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Craftsmanship in Motion', 'solid-cement' ); ?></h2>
        <div class="media-grid">
            <?php
            if ( $process_ids ) {
                foreach ( $process_ids as $attachment_id ) {
                    echo '<figure class="feature-card">';
                    echo wp_get_attachment_image( $attachment_id, 'large' );
                    echo '</figure>';
                }
            } else {
                echo '<p>' . esc_html__( 'Add attachment IDs to the "solidcement_process_gallery" custom field to show your studio process.', 'solid-cement' ) . '</p>';
            }
            ?>
        </div>
        <div class="process-stepper">
            <ol>
                <li>
                    <h3><?php esc_html_e( 'Sketch & Storyboard', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'We storyboard each commission, mapping character poses, garden pathways, and lighting cues to ensure every statue feels alive.', 'solid-cement' ); ?></p>
                </li>
                <li>
                    <h3><?php esc_html_e( 'Casting & Curing', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Bespoke moulds are poured with reinforced cement blends, then gently cured for optimal strength and texture.', 'solid-cement' ); ?></p>
                </li>
                <li>
                    <h3><?php esc_html_e( 'Finishing & Styling', 'solid-cement' ); ?></h3>
                    <p><?php esc_html_e( 'Airbrushed pigments, metallic leaf, and protective sealants deliver radiant finishes ready for garden life.', 'solid-cement' ); ?></p>
                </li>
            </ol>
        </div>
    </div>
</section>
<section class="page-section page-section--alt">
    <div class="container media-grid">
        <div>
            <span class="section-subtitle"><?php esc_html_e( 'Mission & Values', 'solid-cement' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Quality, Care, Creativity', 'solid-cement' ); ?></h2>
            <?php if ( $mission ) : ?>
                <p><?php echo esc_html( $mission ); ?></p>
            <?php else : ?>
                <p><?php esc_html_e( 'We exist to sculpt joy-filled outdoor sanctuaries that celebrate Australian lifestyles. Every project balances artistic expression with practical longevity.', 'solid-cement' ); ?></p>
            <?php endif; ?>
            <div class="pillar-cards">
                <?php foreach ( $studio_pillars as $pillar ) : ?>
                    <article class="pillar-card">
                        <h3><?php echo esc_html( $pillar['title'] ); ?></h3>
                        <p><?php echo esc_html( $pillar['body'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
        <div>
            <?php if ( $values ) : ?>
                <ul class="value-list">
                    <?php foreach ( preg_split( '/\r\n|\r|\n/', $values ) as $value ) : ?>
                        <?php if ( trim( $value ) ) : ?>
                            <li><?php echo esc_html( $value ); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <ul class="value-list">
                    <li><?php esc_html_e( 'Handcrafted detail in every sculpted curve.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Transparent communication and collaborative planning.', 'solid-cement' ); ?></li>
                    <li><?php esc_html_e( 'Commitment to sustainable processes and local suppliers.', 'solid-cement' ); ?></li>
                </ul>
            <?php endif; ?>
            <div class="stats-cards">
                <article class="stat-card">
                    <span class="stat-number">87%</span>
                    <p><?php esc_html_e( 'Clients return for additional fairy garden styling or seasonal refreshes.', 'solid-cement' ); ?></p>
                </article>
                <article class="stat-card">
                    <span class="stat-number">1.2k</span>
                    <p><?php esc_html_e( 'Unique cement garden statues catalogued in our archives.', 'solid-cement' ); ?></p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <span class="section-subtitle"><?php esc_html_e( 'Customer Highlights', 'solid-cement' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Favourite Projects', 'solid-cement' ); ?></h2>
        <p class="section-lede"><?php esc_html_e( 'Browse beloved installations featuring cascading bird baths, storybook fairy houses, and sculpted seating nooks. Each gallery entry links to a detailed project story brimming with gardening tips and maintenance guides.', 'solid-cement' ); ?></p>
        <?php solidcement_render_gallery( 'highlight' ); ?>
    </div>
</section>
<?php
get_template_part(
    'template-parts/components/quote-section',
    null,
    [
        'section_id'  => 'quote',
        'subtitle'    => __( 'Book a Consultation', 'solid-cement' ),
        'title'       => __( 'Bring Your Dream Garden to Life', 'solid-cement' ),
        'copy'        => [
            __( 'Share your vision and we will curate a tailored plan for your outdoor sanctuary.', 'solid-cement' ),
            __( 'Expect detailed concept decks, planting suggestions, and options for custom cement sculptures crafted just for you.', 'solid-cement' ),
        ],
        'extra_class' => 'page-section--alt',
    ]
);
?>
<?php
get_footer();
