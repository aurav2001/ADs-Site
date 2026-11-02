<?php
/**
 * Elementor Compatibility & Custom Widgets Integration
 *
 * @package BGMI_APK_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

final class BGMI_Elementor_Extension {

    private static $_instance = null;

    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        // Register Widget Category
        add_action( 'elementor/elements/categories_registered', array( $this, 'register_categories' ) );

        // Register Widgets (Elementor 3.5+)
        if ( defined( 'ELEMENTOR_VERSION' ) && version_compare( ELEMENTOR_VERSION, '3.5.0', '>=' ) ) {
            add_action( 'elementor/widgets/register', array( $this, 'register_widgets' ) );
        } else {
            add_action( 'elementor/widgets/widgets_registered', array( $this, 'register_widgets_legacy' ) );
        }

        // Register Elementor Pro Theme Locations
        add_action( 'elementor/theme/register_locations', array( $this, 'register_theme_locations' ) );
    }

    public function register_categories( $elements_manager ) {
        $elements_manager->add_category(
            'bgmi-apk-elements',
            array(
                'title' => esc_html__( 'BGMI APK Pro Elements', 'bgmi-apk-pro' ),
                'icon'  => 'fa fa-gamepad',
            )
        );
    }

    public function register_theme_locations( $elementor_theme_manager ) {
        $elementor_theme_manager->register_location( 'header' );
        $elementor_theme_manager->register_location( 'footer' );
        $elementor_theme_manager->register_location( 'single' );
    }

    public function register_widgets( $widgets_manager ) {
        require_once get_template_directory() . '/inc/elementor/widgets/widget-download-box.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-specs-table.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-games-grid.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-ad-slot.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-note-box.php';

        $widgets_manager->register( new \BGMI_Widget_Download_Box() );
        $widgets_manager->register( new \BGMI_Widget_Specs_Table() );
        $widgets_manager->register( new \BGMI_Widget_Games_Grid() );
        $widgets_manager->register( new \BGMI_Widget_Ad_Slot() );
        $widgets_manager->register( new \BGMI_Widget_Note_Box() );
    }

    public function register_widgets_legacy( $widgets_manager ) {
        require_once get_template_directory() . '/inc/elementor/widgets/widget-download-box.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-specs-table.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-games-grid.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-ad-slot.php';
        require_once get_template_directory() . '/inc/elementor/widgets/widget-note-box.php';

        $widgets_manager->register_widget_type( new \BGMI_Widget_Download_Box() );
        $widgets_manager->register_widget_type( new \BGMI_Widget_Specs_Table() );
        $widgets_manager->register_widget_type( new \BGMI_Widget_Games_Grid() );
        $widgets_manager->register_widget_type( new \BGMI_Widget_Ad_Slot() );
        $widgets_manager->register_widget_type( new \BGMI_Widget_Note_Box() );
    }
}

// Initialize extension when Elementor is loaded
function bgmi_elementor_init() {
    if ( did_action( 'elementor/loaded' ) ) {
        BGMI_Elementor_Extension::instance();
    }
}
add_action( 'plugins_loaded', 'bgmi_elementor_init' );
