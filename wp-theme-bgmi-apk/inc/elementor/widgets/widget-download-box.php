<?php
/**
 * Elementor Widget: APK Download Box
 *
 * @package BGMI_APK_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;

class BGMI_Widget_Download_Box extends Widget_Base {

    public function get_name() {
        return 'bgmi_download_box';
    }

    public function get_title() {
        return esc_html__( 'APK Download Box (Countdown)', 'bgmi-apk-pro' );
    }

    public function get_icon() {
        return 'eicon-download-bold';
    }

    public function get_categories() {
        return array( 'bgmi-apk-elements' );
    }

    public function get_keywords() {
        return array( 'download', 'apk', 'obb', 'timer', 'button', 'game', 'box' );
    }

    protected function register_controls() {

        // Content Section
        $this->start_controls_section(
            'section_app_info',
            array(
                'label' => esc_html__( 'App & Game Details', 'bgmi-apk-pro' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            )
        );

        $this->add_control(
            'badge_text',
            array(
                'label'   => esc_html__( 'Top Badge Text', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Fast Direct Mirror', 'bgmi-apk-pro' ),
            )
        );

        $this->add_control(
            'app_name',
            array(
                'label'   => esc_html__( 'App / Game Title', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Battlegrounds Mobile India', 'bgmi-apk-pro' ),
            )
        );

        $this->add_control(
            'subtitle',
            array(
                'label'   => esc_html__( 'Subtitle', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Official Direct APK & OBB Data Pack (No Ads / Clean)', 'bgmi-apk-pro' ),
            )
        );

        $this->add_control(
            'app_icon',
            array(
                'label'   => esc_html__( 'App Icon', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/app-icon.jpg',
                ),
            )
        );

        $this->add_control(
            'version',
            array(
                'label'   => esc_html__( 'Version', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => 'v3.5.0',
            )
        );

        $this->add_control(
            'size_apk',
            array(
                'label'   => esc_html__( 'APK Size', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '74 MB',
            )
        );

        $this->add_control(
            'size_obb',
            array(
                'label'   => esc_html__( 'OBB Size', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '650 MB',
            )
        );

        $this->add_control(
            'requires',
            array(
                'label'   => esc_html__( 'Required OS', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => 'Android 5.1.1+',
            )
        );

        $this->add_control(
            'rating',
            array(
                'label'   => esc_html__( 'Rating', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '4.8',
            )
        );

        $this->add_control(
            'safe_status',
            array(
                'label'   => esc_html__( 'Safety Status', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Safe & Anti-Ban', 'bgmi-apk-pro' ),
            )
        );

        $this->end_controls_section();

        // Download Links Section
        $this->start_controls_section(
            'section_links',
            array(
                'label' => esc_html__( 'Download Links & Timer', 'bgmi-apk-pro' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            )
        );

        $this->add_control(
            'enable_timer',
            array(
                'label'        => esc_html__( 'Enable Countdown Timer', 'bgmi-apk-pro' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Yes', 'bgmi-apk-pro' ),
                'label_off'    => esc_html__( 'No', 'bgmi-apk-pro' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            )
        );

        $this->add_control(
            'timer_seconds',
            array(
                'label'     => esc_html__( 'Timer Seconds', 'bgmi-apk-pro' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 3,
                'max'       => 60,
                'step'      => 1,
                'default'   => 10,
                'condition' => array(
                    'enable_timer' => 'yes',
                ),
            )
        );

        $this->add_control(
            'apk_url',
            array(
                'label'       => esc_html__( 'APK Download Link URL', 'bgmi-apk-pro' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => 'https://...',
                'default'     => array(
                    'url' => '#',
                ),
            )
        );

        $this->add_control(
            'apk_button_text',
            array(
                'label'   => esc_html__( 'APK Button Text', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Download APK File', 'bgmi-apk-pro' ),
            )
        );

        $this->add_control(
            'obb_url',
            array(
                'label'       => esc_html__( 'OBB Download Link URL (Optional)', 'bgmi-apk-pro' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => 'https://...',
                'default'     => array(
                    'url' => '#',
                ),
            )
        );

        $this->add_control(
            'obb_button_text',
            array(
                'label'   => esc_html__( 'OBB Button Text', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Download OBB Data', 'bgmi-apk-pro' ),
            )
        );

        $this->add_control(
            'playstore_url',
            array(
                'label'       => esc_html__( 'Google Play Store URL', 'bgmi-apk-pro' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => 'https://play.google.com/...',
                'default'     => array(
                    'url' => 'https://play.google.com/store/apps/details?id=com.pubg.imobile',
                ),
            )
        );

        $this->add_control(
            'show_ad_box',
            array(
                'label'        => esc_html__( 'Show In-Box Ad Slot', 'bgmi-apk-pro' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Yes', 'bgmi-apk-pro' ),
                'label_off'    => esc_html__( 'No', 'bgmi-apk-pro' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $app_icon_url = ! empty( $settings['app_icon']['url'] ) 
            ? $settings['app_icon']['url'] 
            : get_template_directory_uri() . '/assets/images/app-icon.jpg';

        $apk_link = ! empty( $settings['apk_url']['url'] ) ? $settings['apk_url']['url'] : '#';
        $obb_link = ! empty( $settings['obb_url']['url'] ) ? $settings['obb_url']['url'] : '';
        $play_link = ! empty( $settings['playstore_url']['url'] ) ? $settings['playstore_url']['url'] : '';
        $enable_timer = ( 'yes' === $settings['enable_timer'] );
        $timer_seconds = ! empty( $settings['timer_seconds'] ) ? intval( $settings['timer_seconds'] ) : 10;
        ?>
        <div class="box2 modern-box2 elementor-download-box" id="download-now">
            <?php if ( ! empty( $settings['badge_text'] ) ) : ?>
                <div class="box2-badge-top">
                    <svg class="ui-icon icon-bolt" width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    <span><?php echo esc_html( $settings['badge_text'] ); ?></span>
                </div>
            <?php endif; ?>

            <div class="box2-header-content">
                <div class="box2-app-icon-wrap">
                    <img src="<?php echo esc_url( $app_icon_url ); ?>" alt="<?php echo esc_attr( $settings['app_name'] ); ?>" class="box2-icon-img">
                    <span class="icon-verified-check" title="Verified Safe"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                </div>
                <div class="box2-titles">
                    <h3 class="box2-main-title"><?php echo esc_html( $settings['app_name'] ); ?></h3>
                    <?php if ( ! empty( $settings['subtitle'] ) ) : ?>
                        <div class="box2-subtitle"><?php echo esc_html( $settings['subtitle'] ); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Spec Grid -->
            <div class="box2-spec-grid">
                <div class="spec-cell">
                    <span class="spec-label">
                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 18l6-6-6-6"></path><path d="M8 6l-6 6 6 6"></path></svg>
                        <?php esc_html_e( 'Version', 'bgmi-apk-pro' ); ?>
                    </span>
                    <span class="spec-val highlight"><?php echo esc_html( $settings['version'] ); ?></span>
                </div>
                <div class="spec-cell">
                    <span class="spec-label">
                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <?php esc_html_e( 'APK Size', 'bgmi-apk-pro' ); ?>
                    </span>
                    <span class="spec-val"><?php echo esc_html( $settings['size_apk'] ); ?></span>
                </div>
                <div class="spec-cell">
                    <span class="spec-label">
                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <?php esc_html_e( 'OBB Size', 'bgmi-apk-pro' ); ?>
                    </span>
                    <span class="spec-val"><?php echo esc_html( $settings['size_obb'] ); ?></span>
                </div>
                <div class="spec-cell">
                    <span class="spec-label">
                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                        <?php esc_html_e( 'Requires OS', 'bgmi-apk-pro' ); ?>
                    </span>
                    <span class="spec-val"><?php echo esc_html( $settings['requires'] ); ?></span>
                </div>
                <div class="spec-cell">
                    <span class="spec-label">
                        <svg class="ui-icon icon-star" width="11" height="11" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <?php esc_html_e( 'Rating', 'bgmi-apk-pro' ); ?>
                    </span>
                    <span class="spec-val gold" style="display:inline-flex; align-items:center; gap:4px;">
                        <?php echo esc_html( $settings['rating'] ); ?> 
                        <svg class="ui-icon icon-star" width="12" height="12" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </span>
                </div>
                <div class="spec-cell">
                    <span class="spec-label">
                        <svg class="ui-icon icon-shield" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        <?php esc_html_e( 'Status', 'bgmi-apk-pro' ); ?>
                    </span>
                    <span class="spec-val green"><?php echo esc_html( $settings['safe_status'] ); ?></span>
                </div>
            </div>

            <!-- Download Actions Area -->
            <div class="download-action-box">
                <?php if ( $enable_timer ) : ?>
                    <div class="timer-section-wrapper" id="timerBox" data-timer-seconds="<?php echo esc_attr( $timer_seconds ); ?>">
                        <div class="timer-badge">
                            <span class="pulse-ring"></span>
                            <span class="timer-live-label"><?php esc_html_e( 'Generating Secure Download Mirror', 'bgmi-apk-pro' ); ?></span>
                        </div>
                        <div class="timer-display-card">
                            <div class="timer-countdown-text">
                                <?php esc_html_e( 'Your high-speed verified mirror is ready in', 'bgmi-apk-pro' ); ?>
                                <span class="seconds-count" id="countdownSeconds"><?php echo esc_html( $timer_seconds ); ?></span> <?php esc_html_e( 'seconds...', 'bgmi-apk-pro' ); ?>
                            </div>
                            <div class="timer-progress-track">
                                <div class="timer-progress-bar" id="timerProgress"></div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ( 'yes' === $settings['show_ad_box'] ) : ?>
                    <!-- In-Box Ad Slot Area -->
                    <div class="ad-slot-wrapper" style="margin: 14px 0;">
                        <div class="ad-slot-box" style="background:#ffffff; border:1px dashed #cbd5e1; border-radius:8px; padding:10px;">
                            <span class="ad-label"><?php esc_html_e( 'Sponsored Result', 'bgmi-apk-pro' ); ?></span>
                            <div style="font-size: 13px; color: #94a3b8; font-weight: 600; min-height: 80px; display:flex; align-items:center; justify-content:center;">
                                [ High CTR In-Download Responsive Ad (728x90 / 300x250) ]
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Direct Action Buttons -->
                <div class="download-ready-links" id="downloadLinks" style="<?php echo $enable_timer ? 'display:none;' : 'display:block;'; ?>">
                    <div class="btn-group-main">
                        <a href="<?php echo esc_url( $apk_link ); ?>" class="btn-primary-download" target="_blank" rel="noopener nofollow">
                            <svg class="ui-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <div class="btn-text-wrap">
                                <span class="btn-main-title"><?php echo esc_html( $settings['apk_button_text'] ); ?> (<?php echo esc_html( $settings['size_apk'] ); ?>)</span>
                                <span class="btn-sub-title"><?php esc_html_e( 'Direct High-Speed CDN Mirror • 100% Virus-Free', 'bgmi-apk-pro' ); ?></span>
                            </div>
                        </a>

                        <?php if ( ! empty( $obb_link ) && '#' !== $obb_link ) : ?>
                            <a href="<?php echo esc_url( $obb_link ); ?>" class="btn-secondary-download" target="_blank" rel="noopener nofollow">
                                <svg class="ui-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span><?php echo esc_html( $settings['obb_button_text'] ); ?> (<?php echo esc_html( $settings['size_obb'] ); ?>)</span>
                            </a>
                        <?php endif; ?>
                    </div>

                    <?php if ( ! empty( $play_link ) ) : ?>
                        <div class="official-stores-row">
                            <span class="store-label"><?php esc_html_e( 'Official Store Option:', 'bgmi-apk-pro' ); ?></span>
                            <a href="<?php echo esc_url( $play_link ); ?>" target="_blank" rel="noopener nofollow" class="btn-store-badge">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M3.609 1.814L13.793 12 3.61 22.186a2.036 2.036 0 0 1-.61-1.458V3.272c0-.568.225-1.09.609-1.458zm11.232 11.234l2.585 2.585-12.03 6.945 9.445-9.53zm0-2.096L5.396 1.417l12.03 6.945-2.585 2.586zm1.484 1.048l3.418 1.973a1.44 1.44 0 0 1 0 2.494l-3.418 1.973-2.316-2.316 2.316-2.316z"/></svg>
                                <span><?php esc_html_e( 'Google Play Store', 'bgmi-apk-pro' ); ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Trust Badges Footer -->
            <div class="box2-footer-trust">
                <div class="trust-badge-item">
                    <svg class="ui-icon icon-shield" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                    <span><?php esc_html_e( '100% Virus-Free', 'bgmi-apk-pro' ); ?></span>
                </div>
                <div class="trust-badge-item">
                    <svg class="ui-icon icon-bolt" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    <span><?php esc_html_e( 'Direct High-Speed CDN', 'bgmi-apk-pro' ); ?></span>
                </div>
                <div class="trust-badge-item">
                    <svg class="ui-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    <span><?php esc_html_e( 'Official Signature Check', 'bgmi-apk-pro' ); ?></span>
                </div>
            </div>
        </div>
        <?php
    }
}

