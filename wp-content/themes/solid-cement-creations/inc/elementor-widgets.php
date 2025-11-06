<?php
/**
 * Elementor widgets for Solid Cement Creations.
 *
 * @package SolidCement
 */

namespace SolidCement;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Call-to-action widget matching theme styling.
 */
class Elementor_CTA_Widget extends Widget_Base {
    public function get_name() {
        return 'solidcement_cta';
    }

    public function get_title() {
        return \__( 'Solid Cement CTA', 'solid-cement' );
    }

    public function get_icon() {
        return 'eicon-call-to-action';
    }

    public function get_categories() {
        return [ 'solidcement' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => \__( 'Content', 'solid-cement' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'badge',
            [
                'label'       => \__( 'Badge', 'solid-cement' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => \__( 'Premium Craft', 'solid-cement' ),
                'placeholder' => __( 'Badge text', 'solid-cement' ),
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => \__( 'Heading', 'solid-cement' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => \__( 'Plan Your Garden Transformation', 'solid-cement' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'description',
            [
                'label'       => \__( 'Description', 'solid-cement' ),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => \__( 'Share your dream space and our artisans will design a bespoke concept aligned with your brand.', 'solid-cement' ),
                'rows'        => 4,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'       => \__( 'Button Text', 'solid-cement' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => \__( 'Book a Consultation', 'solid-cement' ),
            ]
        );

        $this->add_control(
            'button_url',
            [
                'label'         => \__( 'Button URL', 'solid-cement' ),
                'type'          => Controls_Manager::URL,
                'placeholder'   => \__( 'https://your-link.com', 'solid-cement' ),
                'default'       => [
                    'url'         => '#quote',
                    'is_external' => false,
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section',
            [
                'label' => \__( 'Style', 'solid-cement' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'label'    => \__( 'Title Typography', 'solid-cement' ),
                'selector' => '{{WRAPPER}} .solidcement-widget__title',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'label'    => \__( 'Description Typography', 'solid-cement' ),
                'selector' => '{{WRAPPER}} .solidcement-widget__description',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ( ! empty( $settings['button_url']['url'] ) ) {
            $this->add_render_attribute( 'button', 'href', $settings['button_url']['url'] );
            if ( ! empty( $settings['button_url']['is_external'] ) ) {
                $this->add_render_attribute( 'button', 'target', '_blank' );
            }
            if ( ! empty( $settings['button_url']['nofollow'] ) ) {
                $this->add_render_attribute( 'button', 'rel', 'nofollow' );
            }
        }
        ?>
        <div class="solidcement-widget solidcement-widget--cta card-style-b">
            <?php if ( ! empty( $settings['badge'] ) ) : ?>
                <span class="kicker solidcement-widget__badge"><?php echo \esc_html( $settings['badge'] ); ?></span>
            <?php endif; ?>
            <?php if ( ! empty( $settings['title'] ) ) : ?>
                <h3 class="solidcement-widget__title"><?php echo \esc_html( $settings['title'] ); ?></h3>
            <?php endif; ?>
            <?php if ( ! empty( $settings['description'] ) ) : ?>
                <p class="solidcement-widget__description"><?php echo \esc_html( $settings['description'] ); ?></p>
            <?php endif; ?>
            <?php if ( ! empty( $settings['button_text'] ) && ! empty( $settings['button_url']['url'] ) ) : ?>
                <a <?php $this->print_render_attribute_string( 'button' ); ?> class="btn btn--ghost">
                    <?php echo \esc_html( $settings['button_text'] ); ?>
                </a>
            <?php endif; ?>
        </div>
        <?php
    }
}
