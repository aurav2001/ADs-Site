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
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="category-pill active">
                    <svg class="ui-icon icon-fire" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 23c-4.97 0-9-4.03-9-9 0-3.77 2.34-6.4 4.54-8.87.53-.6 1.07-1.19 1.58-1.8.31-.38.82-.53 1.28-.38.46.15.78.56.81 1.05.15 2.12.98 3.5 2.04 4.6 1.5-2.2 2.25-4.5 2.25-6.6 0-.44.27-.83.68-.98.41-.15.87-.04 1.18.27 3.5 3.5 5.64 7.6 5.64 12.71 0 4.97-4.03 9-9 9z"/></svg>
                    <span>All Downloads</span>
                </a>
                <a href="#bgmi-category" class="category-pill">
                    <svg class="ui-icon icon-bolt" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    <span>BGMI 3.5 APK</span>
                </a>
                <a href="#obb-files" class="category-pill">
                    <svg class="ui-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <span>OBB Data Packs</span>
                </a>
                <a href="#free-fire" class="category-pill">
                    <svg class="ui-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                    <span>Free Fire India</span>
                </a>
                <a href="#redeem-codes" class="category-pill">
                    <svg class="ui-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
                    <span>Daily Redeem Codes</span>
                </a>
                <a href="#guides" class="category-pill">
                    <svg class="ui-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    <span>Install Guides</span>
                </a>
            </div>
            <div style="display:inline-flex; align-items:center; gap:6px; font-size:13px; color:#16a34a; font-weight:700;">
                <svg class="ui-icon icon-shield" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                <span>100% Virus-Free &amp; Verified Official Files</span>
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
                                        <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <?php echo get_the_date( 'd M Y' ); ?></span>
                                        <span>•</span>
                                        <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> <?php echo esc_html( $size ); ?></span>
                                        <span>•</span>
                                        <span><svg class="ui-icon icon-blue" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <?php the_author(); ?></span>
                                    </div>
                                    <h2 class="post-card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="post-card-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="card-bottom-action">
                                        <a href="<?php the_permalink(); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                        <a href="<?php the_permalink(); ?>#download-now" class="btn-download-quick"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Download</a>
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
                                    <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Today</span>
                                    <span>•</span>
                                    <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> 74 MB APK + 650 MB OBB</span>
                                    <span>•</span>
                                    <span><svg class="ui-icon icon-star" width="13" height="13" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.9/5</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>">Get BGMI 3.5 Apk + Obb Direct Download Link (Official)</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Stay up-to-date with the latest official Battlegrounds Mobile India v3.5 winter update! Download direct high-speed APK and OBB data files with zero server restrictions and full anti-ban security check.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>" class="btn-download-quick"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Download</a>
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
                                    <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> October 2026</span>
                                    <span>•</span>
                                    <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> 420 MB</span>
                                    <span>•</span>
                                    <span><svg class="ui-icon icon-star" width="13" height="13" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.8/5</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>">Download Free Fire India : Play Store, Launch &amp; Rules</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Free Fire India is officially ready for players! Check out the Google Play Store and App Store direct links, verification guidelines, playtime limits, and complete migration steps from Free Fire MAX.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>" class="btn-download-quick"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Download</a>
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
                                    <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 28 October 2026</span>
                                    <span>•</span>
                                    <span><svg class="ui-icon icon-purple" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg> Free Rewards</span>
                                    <span>•</span>
                                    <span style="color:#16a34a;"><svg class="ui-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Verified</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>">Free Fire &amp; BGMI Redeem Codes Today (100% Working)</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Claim today's exclusive redemption codes for free weapon crates, mythic outfits, diamonds, and gun skins. Follow our step-by-step reward redemption tutorial.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>" class="btn-download-quick"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg> Claim Code</a>
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
                                    <span><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Updated</span>
                                    <span>•</span>
                                    <span><svg class="ui-icon icon-blue" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg> Gyro + Non-Gyro</span>
                                    <span>•</span>
                                    <span><svg class="ui-icon icon-star" width="13" height="13" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 5.0/5</span>
                                </div>
                                <h2 class="post-card-title">
                                    <a href="<?php echo esc_url( home_url( '/#sensitivity' ) ); ?>">Best BGMI 3.5 Sensitivity Code: No Recoil Gyroscope &amp; ADS</a>
                                </h2>
                                <div class="post-card-excerpt">
                                    Dominate every close-range fight and long-range M416 spray with tested BGMI pro sensitivity codes. Works flawlessly on Android phones and tablets.
                                </div>
                                <div class="card-bottom-action">
                                    <a href="<?php echo esc_url( home_url( '/#sensitivity' ) ); ?>" class="btn-read-more">Read Guide &rarr;</a>
                                    <a href="<?php echo esc_url( home_url( '/#sensitivity' ) ); ?>" class="btn-download-quick"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg> Copy Code</a>
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
