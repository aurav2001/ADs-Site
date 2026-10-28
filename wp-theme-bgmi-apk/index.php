<?php
/**
 * Main Index / Homepage Template
 *
 * @package BGMI_APK_Pro
 */

get_header(); ?>

<main class="site-main-content">
    <div class="site-container">
        
        <!-- Category & Filter Bar -->
        <div class="hero-category-bar">
            <div class="category-pills">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="category-pill active">🔥 All Downloads</a>
                <a href="#bgmi-category" class="category-pill">BGMI 3.5 APK</a>
                <a href="#obb-files" class="category-pill">OBB Data Packs</a>
                <a href="#free-fire" class="category-pill">Free Fire India</a>
                <a href="#redeem-codes" class="category-pill">Daily Redeem Codes</a>
                <a href="#guides" class="category-pill">Install Guides</a>
            </div>
            <div style="font-size:13px; color:#64748b; font-weight:600;">
                ⚡ 100% Virus-Free Safe Links
            </div>
        </div>

        <!-- 2-Column Grid Layout with Sidebar -->
        <div class="layout-grid">
            <div class="primary-content-area">
                
                <div class="posts-grid">
                    <?php
                    if ( have_posts() ) :
                        $post_counter = 0;
                        while ( have_posts() ) : the_post();
                            $post_counter++;
                            $version = get_post_meta( get_the_ID(), '_bgmi_version', true ) ?: 'v3.5.0';
                            $size    = get_post_meta( get_the_ID(), '_bgmi_size_apk', true ) ?: '74 MB';
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                                <div class="post-thumbnail-wrap">
                                    <span class="card-badge">Verified APK</span>
                                    <span class="card-version-tag"><?php echo esc_html( $version ); ?></span>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'bgmi-card' ); ?>
                                        <?php else : ?>
                                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgmi-banner.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="post-meta-row">
                                        <span>📅 <?php echo get_the_date( 'd M Y' ); ?></span>
                                        <span>•</span>
                                        <span>💾 <?php echo esc_html( $size ); ?></span>
                                        <span>•</span>
                                        <span>👤 <?php the_author(); ?></span>
                                    </div>
                                    <h2 class="post-card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="post-card-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="card-bottom-action">
                                        <a href="<?php the_permalink(); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                        <a href="<?php the_permalink(); ?>#download-now" class="btn-download-quick">⚡ Download</a>
                                    </div>
                                </div>
                            </article>
                            <?php
                            // Insert In-Feed Ad after the 2nd post
                            if ( $post_counter == 2 ) :
                            ?>
                            <div style="grid-column: 1 / -1;">
                                <div class="ad-slot-wrapper">
                                    <div class="ad-slot-box ad-slot-incontent">
                                        <span class="ad-label">Sponsored Result</span>
                                        <div style="font-size: 13px; color: #94a3b8; font-weight: 600;">
                                            Responsive In-Feed Native Ad Unit (728x90 / Mobile 300x250)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endif;
                        endwhile;
                    else :
                        // Default High-Converting Demo Posts (Inspired by bgminewapk.com)
                    ?>
                        <!-- Demo Post 1: BGMI 3.5 APK -->
                        <article class="post-card">
                            <div class="post-thumbnail-wrap">
                                <span class="card-badge">Latest Update</span>
                                <span class="card-version-tag">v3.5.0</span>
                                <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgmi-banner.jpg' ); ?>" alt="BGMI 3.5 APK + OBB">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="post-meta-row">
                                    <span>📅 Today</span>
                                    <span>•</span>
                                    <span>💾 74 MB APK + 650 MB OBB</span>
                                    <span>•</span>
                                    <span>⭐ 4.9/5</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>">Get BGMI 3.5 Apk + Obb Direct Download Link (Official)</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Stay up-to-date with the latest official Battlegrounds Mobile India v3.5 winter update! Download direct high-speed APK and OBB data files with zero server restrictions and full anti-ban security check.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>" class="btn-download-quick">⚡ Download</a>
                                </div>
                            </div>
                        </article>

                        <!-- Demo Post 2: Free Fire India -->
                        <article class="post-card">
                            <div class="post-thumbnail-wrap">
                                <span class="card-badge" style="background:#ea580c;">New Launch</span>
                                <span class="card-version-tag">v1.108</span>
                                <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/free-fire-banner.jpg' ); ?>" alt="Free Fire India">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="post-meta-row">
                                    <span>📅 October 2026</span>
                                    <span>•</span>
                                    <span>💾 420 MB</span>
                                    <span>•</span>
                                    <span>⭐ 4.8/5</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>">Download Free Fire India : Play Store, Launch &amp; Rules</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Free Fire India is officially ready for players! Check out the Google Play Store and App Store direct links, verification guidelines, playtime limits, and complete migration steps from Free Fire MAX.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>" class="btn-download-quick">⚡ Download</a>
                                </div>
                            </div>
                        </article>

                        <!-- In-Feed Ad Banner -->
                        <div style="grid-column: 1 / -1;">
                            <div class="ad-slot-wrapper">
                                <div class="ad-slot-box ad-slot-incontent">
                                    <span class="ad-label">Sponsored Result</span>
                                    <div style="font-size: 13px; color: #94a3b8; font-weight: 600;">
                                        Responsive In-Feed Native Ad Unit (728x90 / Mobile 300x250)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Demo Post 3: Daily Redeem Codes -->
                        <article class="post-card">
                            <div class="post-thumbnail-wrap">
                                <span class="card-badge" style="background:#16a34a;">Daily Code</span>
                                <span class="card-version-tag">Working</span>
                                <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-icon.jpg' ); ?>" alt="Daily Redeem Codes">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="post-meta-row">
                                    <span>📅 28 October 2026</span>
                                    <span>•</span>
                                    <span>🎁 Free Rewards</span>
                                    <span>•</span>
                                    <span>Verified</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>">Free Fire &amp; BGMI Redeem Codes Today (100% Working)</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Claim today's exclusive redemption codes for free weapon crates, mythic outfits, diamonds, and gun skins. Follow our step-by-step reward redemption tutorial.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>" class="btn-download-quick">🎁 Claim Code</a>
                                </div>
                            </div>
                        </article>

                        <!-- Demo Post 4: Sensitivity Settings -->
                        <article class="post-card">
                            <div class="post-thumbnail-wrap">
                                <span class="card-badge" style="background:#7c3aed;">Pro Guide</span>
                                <span class="card-version-tag">Zero Recoil</span>
                                <a href="<?php echo esc_url( home_url( '/#sensitivity' ) ); ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgmi-banner.jpg' ); ?>" alt="Sensitivity Guide">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="post-meta-row">
                                    <span>📅 Updated</span>
                                    <span>•</span>
                                    <span>🎯 Gyro + Non-Gyro</span>
                                    <span>•</span>
                                    <span>⭐ 5.0/5</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#sensitivity' ) ); ?>">Best BGMI 3.5 Sensitivity Code: No Recoil Gyroscope &amp; ADS</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Dominate every close-range fight and long-range M416 spray with tested BGMI pro sensitivity codes. Works flawlessly on Android phones and tablets.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#sensitivity' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#sensitivity' ) ); ?>" class="btn-download-quick">📋 Copy Code</a>
                                </div>
                            </div>
                        </article>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination-wrapper">
                    <?php
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => '&larr; Prev',
                        'next_text' => 'Next &rarr;',
                    ) );
                    ?>
                </div>

            </div>

            <!-- Right Sidebar -->
            <?php get_sidebar(); ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>
