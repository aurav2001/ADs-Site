<?php
/**
 * Elementor Widget: High CTR Ad Slot Banner
 *
 * @package BGMI_APK_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class BGMI_Widget_Ad_Slot extends Widget_Base {

    public function get_name() {
        return 'bgmi_ad_slot';
    }

    public function get_title() {
        return esc_html__( 'High CTR AdSense / Banner Slot', 'bgmi-apk-pro' );
    }

    public function get_icon() {
        return 'eicon-ad';
    }

    public function get_categories() {
        return array( 'bgmi-apk-elements' );
    }

    public function get_keywords() {
        return array( 'ad', 'adsense', 'banner', 'monetization', 'sponsor' );
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_ad_settings',
            array(
                'label' => esc_html__( 'Ad Unit Settings', 'bgmi-apk-pro' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            )
        );

        $this->add_control(
            'ad_label',
            array(
                'label'   => esc_html__( 'Ad Label', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Sponsored Advertisement', 'bgmi-apk-pro' ),
            )
        );

        $this->add_control(
            'ad_code',
            array(
                'label'       => esc_html__( 'HTML / AdSense Script Code', 'bgmi-apk-pro' ),
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 6,
                'placeholder' => '<script async src="https://pagead2.googlesyndication.com/..."></script>',
                'description' => esc_html__( 'Paste your Google AdSense or advertising network code here. If left empty, a placeholder banner will be displayed.', 'bgmi-apk-pro' ),
            )
        );

        $this->add_control(
            'ad_format',
            array(
                'label'   => esc_html__( 'Slot Format / Placeholder Size', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'responsive',
                'options' => array(
                    'responsive'  => 'Responsive Native (728x90 Desktop • 300x250 Mobile)',
                    'leaderboard' => 'Leaderboard (728x90)',
                    'rectangle'   => 'Medium Rectangle (300x250)',
                    'halfpage'    => 'Half-Page Sticky (300x600)',
                ),
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $ad_code = trim( $settings['ad_code'] );
        $label   = ! empty( $settings['ad_label'] ) ? $settings['ad_label'] : 'Advertisement';
        $format  = $settings['ad_format'];

        $min_height = '90px';
        $max_width  = '728px';

        if ( 'rectangle' === $format ) {
            $min_height = '250px';
            $max_width  = '300px';
        } elseif ( 'halfpage' === $format ) {
            $min_height = '600px';
            $max_width  = '300px';
        }
        ?>
        <div class="ad-slot-wrapper elementor-ad-slot" style="margin: 18px 0; text-align:center;">
            <div class="ad-slot-box" style="background:#ffffff; border:1px dashed #cbd5e1; border-radius:8px; padding:12px; max-width:<?php echo esc_attr( $max_width ); ?>; margin:0 auto;">
                <span class="ad-label" style="font-size:10px; text-transform:uppercase; letter-spacing:0.8px; color:#94a3b8; display:block; margin-bottom:6px; font-weight:600;">
                    <?php echo esc_html( $label ); ?>
                </span>

                <?php if ( ! empty( $ad_code ) ) : ?>
                    <div class="ad-content-loaded">
                        <?php echo $ad_code; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                <?php else : ?>
                    <div style="min-height:<?php echo esc_attr( $min_height ); ?>; display:flex; flex-direction:column; align-items:center; justify-content:center; color:#94a3b8; font-size:13px; font-weight:600; padding:10px;">
                        <span>[ Google AdSense / Header Bidding Unit ]</span>
                        <span style="font-size:11px; color:#cbd5e1; margin-top:4px;">Format: <?php echo esc_html( ucfirst( $format ) ); ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
}
