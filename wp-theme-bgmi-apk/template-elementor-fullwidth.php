<?php
/**
 * Template Name: Elementor Full Width
 * Description: Full-width page template designed for Elementor page builder with header and footer.
 *
 * @package BGMI_APK_Pro
 */

get_header(); ?>

<main id="primary" class="site-main elementor-fullwidth-wrapper" role="main">
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>

