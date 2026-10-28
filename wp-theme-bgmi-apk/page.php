<?php
/**
 * Page template
 *
 * @package BGMI_APK_Pro
 */

get_header(); ?>

<main class="site-main-content">
    <div class="site-container">
        <div class="layout-grid">
            <div class="primary-content-area">
                <?php
                while ( have_posts() ) : the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-container' ); ?>>
                        <div class="breadcrumbs">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                            <span>&raquo;</span>
                            <span><?php the_title(); ?></span>
                        </div>

                        <h1 class="page-title mainh"><?php the_title(); ?></h1>

                        <div class="entry-content" style="margin-top:20px;">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
