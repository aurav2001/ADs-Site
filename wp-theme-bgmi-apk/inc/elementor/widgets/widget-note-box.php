<?php
/**
 * Elementor Widget: Note & Alert Callout Box
 *
 * @package BGMI_APK_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class BGMI_Widget_Note_Box extends Widget_Base {

    public function get_name() {
        return 'bgmi_note_box';
    }

    public function get_title() {
        return esc_html__( 'Note & Alert Callout Box', 'bgmi-apk-pro' );
    }

    public function get_icon() {
        return 'eicon-alert';
    }

    public function get_categories() {
        return array( 'bgmi-apk-elements' );
    }

    public function get_keywords() {
        return array( 'note', 'alert', 'warning', 'info', 'box', 'callout' );
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_note_content',
            array(
                'label' => esc_html__( 'Callout Settings', 'bgmi-apk-pro' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            )
        );

        $this->add_control(
            'note_type',
            array(
                'label'   => esc_html__( 'Callout Style', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'info',
                'options' => array(
                    'info'    => esc_html__( 'Info Blue Box (Tips & Guidelines)', 'bgmi-apk-pro' ),
                    'warning' => esc_html__( 'Warning Red Box (Anti-Ban & Crucial Notices)', 'bgmi-apk-pro' ),
                ),
            )
        );

        $this->add_control(
            'note_text',
            array(
                'label'   => esc_html__( 'Content', 'bgmi-apk-pro' ),
                'type'    => Controls_Manager::WYSIWYG,
                'default' => esc_html__( '<strong>Notice:</strong> Always make sure to uninstall any older modded versions before installing the official APK file to prevent installation errors.', 'bgmi-apk-pro' ),
            )
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $class = ( 'warning' === $settings['note_type'] ) ? 'note wr' : 'note';
        ?>
        <div class="<?php echo esc_attr( $class ); ?> elementor-note-box">
            <?php echo $settings['note_text']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
        </div>
        <?php
    }
}

