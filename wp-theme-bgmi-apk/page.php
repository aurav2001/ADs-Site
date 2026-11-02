<?php
/**
 * Page template - Compatible with Standard WP Pages & Elementor Builder
 *
 * @package BGMI_APK_Pro
 */

get_header();

$is_elementor = did_action( 'elementor/loaded' ) && \Elementor\Plugin::$instance->documents->get( get_the_ID() ) && \Elementor\Plugin::$instance->documents->get( get_the_ID() )->is_built_with_elementor();

if ( $is_elementor ) :
    // Clean full-width layout for Elementor pages
    ?>
    <main id="primary" class="site-main elementor-fullwidth-wrapper" role="main">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </main>
    <?php
else :
    // Standard WordPress Page with Breadcrumbs & Sidebar
    ?>
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
    <?php
endif;

get_footer();
