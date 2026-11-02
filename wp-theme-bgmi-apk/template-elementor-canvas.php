<?php
/**
 * Template Name: Elementor Canvas (No Header, No Footer)
 * Description: A blank canvas page template for Elementor landing pages without theme header or footer.
 *
 * @package BGMI_APK_Pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'elementor-canvas-template' ); ?>>
<?php wp_body_open(); ?>

<div id="elementor-canvas-wrapper" class="elementor-canvas-wrapper">
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
