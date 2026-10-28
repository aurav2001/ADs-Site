<?php
/**
 * BGMI APK Pro Theme Functions and Definitions
 *
 * @package BGMI_APK_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'BGMI_THEME_VERSION', '1.0.0' );

/**
 * Theme Setup
 */
function bgmi_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 800, 450, true ); // 16:9 ratio
    add_image_size( 'bgmi-card', 600, 338, true );
    add_image_size( 'bgmi-thumb', 120, 80, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'bgmi-apk-pro' ),
        'top'     => __( 'Top Notice Bar Menu', 'bgmi-apk-pro' ),
        'footer'  => __( 'Footer Menu', 'bgmi-apk-pro' ),
    ) );

    // Switch default core markup to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add support for core custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Responsive embeds
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'bgmi_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function bgmi_theme_scripts() {
    // Google Fonts - Montserrat & Outfit
    wp_enqueue_style( 
        'bgmi-google-fonts', 
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Outfit:wght@500;600;700;800&display=swap', 
        array(), 
        null 
    );

    // Main stylesheet
    wp_enqueue_style( 'bgmi-theme-style', get_stylesheet_uri(), array(), BGMI_THEME_VERSION );

    // Main JavaScript
    wp_enqueue_script( 
        'bgmi-theme-main', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(), 
        BGMI_THEME_VERSION, 
        true 
    );

    // Pass data to script
    wp_localize_script( 'bgmi-theme-main', 'bgmiData', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'timerSeconds' => 10,
    ) );
}
add_action( 'wp_enqueue_scripts', 'bgmi_theme_scripts' );

/**
 * Register Widget Areas (Sidebars & Ad Slots)
 */
function bgmi_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'bgmi-apk-pro' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown in the right sidebar.', 'bgmi-apk-pro' ),
        'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Header Ad (728x90)', 'bgmi-apk-pro' ),
        'id'            => 'header-ad',
        'description'   => __( 'Appears at the top of the page below the header bar.', 'bgmi-apk-pro' ),
        'before_widget' => '<div class="ad-slot-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="screen-reader-text">',
        'after_title'   => '</div>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Post Below Title Ad', 'bgmi-apk-pro' ),
        'id'            => 'post-title-ad',
        'description'   => __( 'Displays directly below the article title banner.', 'bgmi-apk-pro' ),
        'before_widget' => '<div class="ad-slot-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="screen-reader-text">',
        'after_title'   => '</div>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Post Download Box Ad', 'bgmi-apk-pro' ),
        'id'            => 'download-box-ad',
        'description'   => __( 'Displays around or inside the download countdown box.', 'bgmi-apk-pro' ),
        'before_widget' => '<div class="ad-slot-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="screen-reader-text">',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'bgmi_widgets_init' );

/**
 * Custom Meta Boxes for APK Download Information
 */
function bgmi_add_apk_meta_boxes() {
    add_meta_box(
        'bgmi_apk_details',
        __( 'APK & Game Details (Custom Download Box)', 'bgmi-apk-pro' ),
        'bgmi_apk_meta_box_html',
        'post',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'bgmi_add_apk_meta_boxes' );

function bgmi_apk_meta_box_html( $post ) {
    wp_nonce_field( 'bgmi_save_apk_meta', 'bgmi_apk_meta_nonce' );

    $app_name     = get_post_meta( $post->ID, '_bgmi_app_name', true );
    $version      = get_post_meta( $post->ID, '_bgmi_version', true );
    $size_apk     = get_post_meta( $post->ID, '_bgmi_size_apk', true );
    $size_obb     = get_post_meta( $post->ID, '_bgmi_size_obb', true );
    $requires     = get_post_meta( $post->ID, '_bgmi_requires', true );
    $developer    = get_post_meta( $post->ID, '_bgmi_developer', true );
    $rating       = get_post_meta( $post->ID, '_bgmi_rating', true );
    $apk_url      = get_post_meta( $post->ID, '_bgmi_apk_url', true );
    $obb_url      = get_post_meta( $post->ID, '_bgmi_obb_url', true );
    $playstore_url= get_post_meta( $post->ID, '_bgmi_playstore_url', true );
    ?>
    <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 10px;">
        <p>
            <label><strong>App / Game Name:</strong></label><br>
            <input type="text" name="bgmi_app_name" value="<?php echo esc_attr( $app_name ?: 'Battlegrounds Mobile India' ); ?>" style="width:100%;">
        </p>
        <p>
            <label><strong>Current Version:</strong></label><br>
            <input type="text" name="bgmi_version" value="<?php echo esc_attr( $version ?: 'v3.5.0' ); ?>" style="width:100%;">
        </p>
        <p>
            <label><strong>APK File Size:</strong></label><br>
            <input type="text" name="bgmi_size_apk" value="<?php echo esc_attr( $size_apk ?: '74 MB' ); ?>" style="width:100%;">
        </p>
        <p>
            <label><strong>OBB File Size:</strong></label><br>
            <input type="text" name="bgmi_size_obb" value="<?php echo esc_attr( $size_obb ?: '650 MB' ); ?>" style="width:100%;">
        </p>
        <p>
            <label><strong>Android OS Requirement:</strong></label><br>
            <input type="text" name="bgmi_requires" value="<?php echo esc_attr( $requires ?: 'Android 5.1.1 and up' ); ?>" style="width:100%;">
        </p>
        <p>
            <label><strong>Developer:</strong></label><br>
            <input type="text" name="bgmi_developer" value="<?php echo esc_attr( $developer ?: 'KRAFTON, Inc.' ); ?>" style="width:100%;">
        </p>
        <p>
            <label><strong>Rating (e.g. 4.8 / 5.0):</strong></label><br>
            <input type="text" name="bgmi_rating" value="<?php echo esc_attr( $rating ?: '4.8 ★' ); ?>" style="width:100%;">
        </p>
        <p>
            <label><strong>Play Store Link:</strong></label><br>
            <input type="url" name="bgmi_playstore_url" value="<?php echo esc_url( $playstore_url ); ?>" style="width:100%;">
        </p>
        <p style="grid-column: span 2;">
            <label><strong>Direct APK Download Link:</strong></label><br>
            <input type="url" name="bgmi_apk_url" value="<?php echo esc_url( $apk_url ); ?>" placeholder="https://..." style="width:100%;">
        </p>
        <p style="grid-column: span 2;">
            <label><strong>Direct OBB Download Link (Optional):</strong></label><br>
            <input type="url" name="bgmi_obb_url" value="<?php echo esc_url( $obb_url ); ?>" placeholder="https://..." style="width:100%;">
        </p>
    </div>
    <?php
}

function bgmi_save_apk_meta( $post_id ) {
    if ( ! isset( $_POST['bgmi_apk_meta_nonce'] ) || ! wp_verify_nonce( $_POST['bgmi_apk_meta_nonce'], 'bgmi_save_apk_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array(
        'bgmi_app_name', 'bgmi_version', 'bgmi_size_apk', 'bgmi_size_obb', 
        'bgmi_requires', 'bgmi_developer', 'bgmi_rating', 'bgmi_apk_url', 
        'bgmi_obb_url', 'bgmi_playstore_url'
    );

    foreach ( $fields as $field ) {
        if ( isset( $_POST[$field] ) ) {
            if ( strpos( $field, 'url' ) !== false ) {
                update_post_meta( $post_id, '_' . $field, esc_url_raw( $_POST[$field] ) );
            } else {
                update_post_meta( $post_id, '_' . $field, sanitize_text_field( $_POST[$field] ) );
            }
        }
    }
}
add_action( 'save_post', 'bgmi_save_apk_meta' );

/**
 * Shortcodes
 */

// Note Alert Shortcode: [note] or [note type="wr"]
function bgmi_note_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'type' => 'info', // 'info' or 'wr'
    ), $atts );

    $class = ( $a['type'] === 'wr' || $a['type'] === 'warning' ) ? 'note wr' : 'note';
    return '<div class="' . esc_attr( $class ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'note', 'bgmi_note_shortcode' );

// Ad Slot Shortcode: [ad_banner slot="header"]
function bgmi_ad_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'label' => 'Sponsored Advertisement',
    ), $atts );

    return '<div class="ad-slot-wrapper">
        <div class="ad-slot-box ad-slot-incontent">
            <span class="ad-label">' . esc_html( $a['label'] ) . '</span>
            <!-- Google AdSense Responsive Unit / Placeholder -->
            <div style="min-height:90px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:13px; font-weight:600;">
                [ Google AdSense / Header Bidding Responsive 728x90 ]
            </div>
        </div>
    </div>';
}
add_shortcode( 'ad_banner', 'bgmi_ad_shortcode' );
