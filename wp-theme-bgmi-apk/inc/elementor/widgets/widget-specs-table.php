<?php
/**
 * Elementor Widget: Game & APK Specifications Table
 *
 * @package BGMI_APK_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;

class BGMI_Widget_Specs_Table extends Widget_Base {

    public function get_name() {
        return 'bgmi_specs_table';
    }

    public function get_title() {
        return esc_html__( 'Game / APK Specs Table', 'bgmi-apk-pro' );
    }

    public function get_icon() {
        return 'eicon-table';
    }

    public function get_categories() {
        return array( 'bgmi-apk-elements' );
    }

    public function get_keywords() {
        return array( 'table', 'specs', 'details', 'apk', 'game', 'information' );
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_table_header',
            array(
                'label' => esc_html__( 'Table Header', 'bgmi-apk-pro' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            )
        );

        $this->add_control(
            'table_title',
            array(
                'label'   => esc_html__( 'Table Title', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Battlegrounds Mobile India (BGMI) 3.5 Details', 'bgmi-apk-pro' ),
            )
        );

        $this->end_controls_section();

        // Rows Section
        $this->start_controls_section(
            'section_rows',
            array(
                'label' => esc_html__( 'Specifications Rows', 'bgmi-apk-pro' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            )
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'row_label',
            array(
                'label'   => esc_html__( 'Specification Label', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'App Name', 'bgmi-apk-pro' ),
            )
        );

        $repeater->add_control(
            'row_value',
            array(
                'label'   => esc_html__( 'Value', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Battlegrounds Mobile India', 'bgmi-apk-pro' ),
            )
        );

        $repeater->add_control(
            'is_badge',
            array(
                'label'        => esc_html__( 'Display Value as Verified Badge', 'bgmi-apk-pro' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Yes', 'bgmi-apk-pro' ),
                'label_off'    => esc_html__( 'No', 'bgmi-apk-pro' ),
                'return_value' => 'yes',
                'default'      => 'no',
            )
        );

        $this->add_control(
            'specs_list',
            array(
                'label'       => esc_html__( 'Specifications Rows', 'bgmi-apk-pro' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_fields(),
                'default'     => array(
                    array(
                        'row_label' => esc_html__( 'App Name', 'bgmi-apk-pro' ),
                        'row_value' => esc_html__( 'Battlegrounds Mobile India', 'bgmi-apk-pro' ),
                        'is_badge'  => 'no',
                    ),
                    array(
                        'row_label' => esc_html__( 'Package Name', 'bgmi-apk-pro' ),
                        'row_value' => 'com.pubg.imobile',
                        'is_badge'  => 'no',
                    ),
                    array(
                        'row_label' => esc_html__( 'Latest Version', 'bgmi-apk-pro' ),
                        'row_value' => 'v3.5.0 (Winter Update)',
                        'is_badge'  => 'no',
                    ),
                    array(
                        'row_label' => esc_html__( 'File Size', 'bgmi-apk-pro' ),
                        'row_value' => '74 MB (APK) + 650 MB (OBB)',
                        'is_badge'  => 'no',
                    ),
                    array(
                        'row_label' => esc_html__( 'Requires Android', 'bgmi-apk-pro' ),
                        'row_value' => 'Android 5.1.1 or above',
                        'is_badge'  => 'no',
                    ),
                    array(
                        'row_label' => esc_html__( 'Developer / Publisher', 'bgmi-apk-pro' ),
                        'row_value' => 'KRAFTON, Inc.',
                        'is_badge'  => 'no',
                    ),
                    array(
                        'row_label' => esc_html__( 'Security Check', 'bgmi-apk-pro' ),
                        'row_value' => esc_html__( 'Verified Clean (No Virus / 100% Anti-Ban)', 'bgmi-apk-pro' ),
                        'is_badge'  => 'yes',
                    ),
                    array(
                        'row_label' => esc_html__( 'Price', 'bgmi-apk-pro' ),
                        'row_value' => esc_html__( '100% Free', 'bgmi-apk-pro' ),
                        'is_badge'  => 'no',
                    ),
                ),
                'title_field' => '{{{ row_label }}}: {{{ row_value }}}',
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ( empty( $settings['specs_list'] ) ) {
            return;
        }
        ?>
        <div class="elementor-specs-table-wrapper" style="margin: 20px 0;">
            <table class="app-specs-table">
                <?php if ( ! empty( $settings['table_title'] ) ) : ?>
                    <thead>
                        <tr>
                            <th colspan="2" style="background:linear-gradient(135deg, #1e1b4b 0%, #312e81 100%); color:#ffffff; font-size:15px; padding:12px 18px;">
                                <div style="display:flex; align-items:center; gap:8px;">
                                    <svg class="ui-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <span><?php echo esc_html( $settings['table_title'] ); ?></span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                <?php endif; ?>
                <tbody>
                    <?php foreach ( $settings['specs_list'] as $row ) : ?>
                        <tr>
                            <td class="spec-prop" style="width:35%; font-weight:600; color:#475569;">
                                <?php echo esc_html( $row['row_label'] ); ?>
                            </td>
                            <td class="spec-data" style="color:#0f172a;">
                                <?php if ( 'yes' === $row['is_badge'] ) : ?>
                                    <span style="display:inline-flex; align-items:center; gap:6px; color:#16a34a; font-weight:700;">
                                        <svg class="ui-icon icon-shield" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <?php echo esc_html( $row['row_value'] ); ?>
                                    </span>
                                <?php else : ?>
                                    <?php echo esc_html( $row['row_value'] ); ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}

