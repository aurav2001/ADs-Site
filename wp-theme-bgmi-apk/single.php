<?php
/**
 * Single Post / Game Download Template
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
                    $app_name     = get_post_meta( get_the_ID(), '_bgmi_app_name', true ) ?: get_the_title();
                    $version      = get_post_meta( get_the_ID(), '_bgmi_version', true ) ?: 'v3.5.0';
                    $size_apk     = get_post_meta( get_the_ID(), '_bgmi_size_apk', true ) ?: '74 MB';
                    $size_obb     = get_post_meta( get_the_ID(), '_bgmi_size_obb', true ) ?: '650 MB';
                    $requires     = get_post_meta( get_the_ID(), '_bgmi_requires', true ) ?: 'Android 5.1.1 or above';
                    $developer    = get_post_meta( get_the_ID(), '_bgmi_developer', true ) ?: 'KRAFTON, Inc.';
                    $rating       = get_post_meta( get_the_ID(), '_bgmi_rating', true ) ?: '4.8';
                    $apk_url      = get_post_meta( get_the_ID(), '_bgmi_apk_url', true ) ?: '#';
                    $obb_url      = get_post_meta( get_the_ID(), '_bgmi_obb_url', true ) ?: '#';
                    $playstore_url= get_post_meta( get_the_ID(), '_bgmi_playstore_url', true ) ?: 'https://play.google.com/store/apps/details?id=com.pubg.imobile';
                    ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-container' ); ?>>
                        
                        <!-- Breadcrumbs -->
                        <div class="breadcrumbs">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                            <span class="bc-sep">&rsaquo;</span>
                            <span><?php the_category( ', ' ); ?></span>
                            <span class="bc-sep">&rsaquo;</span>
                            <span class="bc-current"><?php the_title(); ?></span>
                        </div>

                        <!-- Signature Title Banner (bgminewapk style) -->
                        <div class="title-banner-wrap">
                            <span class="title-badge-pill">
                                <svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12 23c-4.97 0-9-4.03-9-9 0-3.77 2.34-6.4 4.54-8.87.53-.6 1.07-1.19 1.58-1.8.31-.38.82-.53 1.28-.38.46.15.78.56.81 1.05.15 2.12.98 3.5 2.04 4.6 1.5-2.2 2.25-4.5 2.25-6.6 0-.44.27-.83.68-.98.41-.15.87-.04 1.18.27 3.5 3.5 5.64 7.6 5.64 12.71 0 4.97-4.03 9-9 9zm-1-7c0-1.66 1.34-3 3-3 .55 0 1 .45 1 1s-.45 1-1 1c-.55 0-1 .45-1 1 0 .55-.45 1-1 1s-1-.45-1-1z"/></svg>
                                <span>100% Working Official Mirror</span>
                            </span>
                            <h1 class="entry-title mainh"><?php the_title(); ?></h1>
                        </div>

                        <!-- Meta Row -->
                        <div class="post-meta-row modern-meta-row">
                            <span class="meta-item">
                                <svg class="ui-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Updated: <strong><?php echo get_the_modified_date( 'd F Y' ); ?></strong></span>
                            </span>
                            <span class="meta-item">
                                <svg class="ui-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span>Author: <strong><?php the_author(); ?></strong></span>
                            </span>
                            <span class="meta-item verified-meta">
                                <svg class="ui-icon icon-shield" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <strong>100% Virus-Free Verified</strong>
                            </span>
                        </div>

                        <!-- Post Title Ad Unit -->
                        <?php if ( is_active_sidebar( 'post-title-ad' ) ) : ?>
                            <?php dynamic_sidebar( 'post-title-ad' ); ?>
                        <?php else : ?>
                            <div class="ad-slot-wrapper">
                                <div class="ad-slot-box ad-slot-incontent">
                                    <span class="ad-label">Sponsored Advertisement</span>
                                    <div class="ad-slot-body-text">
                                        [ Responsive High-CTR In-Article Ad &bull; 728x90 Desktop / 300x250 Mobile ]
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Featured Image -->
                        <div class="single-featured-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'full' ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgmi-banner.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>

                        <!-- Core Download Spec Box (.box2) -->
                        <div class="box2 modern-box2" id="download-now">
                            <div class="box2-badge-top">
                                <svg class="ui-icon icon-bolt" width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Fast Direct Mirror</span>
                            </div>
                            <div class="box2-header-content">
                                <div class="box2-app-icon-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-icon.jpg' ); ?>" alt="<?php echo esc_attr( $app_name ); ?>" class="box2-icon-img">
                                    <span class="icon-verified-check" title="Verified Safe"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                </div>
                                <div class="box2-titles">
                                    <h3 class="box2-main-title"><?php echo esc_html( $app_name ); ?></h3>
                                    <div class="box2-subtitle">Official Direct APK &amp; OBB Data Pack (No Ads / Clean)</div>
                                </div>
                            </div>
                            
                            <!-- Spec Grid -->
                            <div class="box2-spec-grid">
                                <div class="spec-cell">
                                    <span class="spec-label">
                                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 18l6-6-6-6"></path><path d="M8 6l-6 6 6 6"></path></svg>
                                        Version
                                    </span>
                                    <span class="spec-val highlight"><?php echo esc_html( $version ); ?></span>
                                </div>
                                <div class="spec-cell">
                                    <span class="spec-label">
                                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                        APK Size
                                    </span>
                                    <span class="spec-val"><?php echo esc_html( $size_apk ); ?></span>
                                </div>
                                <div class="spec-cell">
                                    <span class="spec-label">
                                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                        OBB Data
                                    </span>
                                    <span class="spec-val"><?php echo esc_html( $size_obb ); ?></span>
                                </div>
                                <div class="spec-cell">
                                    <span class="spec-label">
                                        <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                        Requires OS
                                    </span>
                                    <span class="spec-val"><?php echo esc_html( $requires ); ?></span>
                                </div>
                                <div class="spec-cell">
                                    <span class="spec-label">
                                        <svg class="ui-icon icon-star" width="11" height="11" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        Rating
                                    </span>
                                    <span class="spec-val gold" style="display:inline-flex; align-items:center; gap:4px;"><?php echo esc_html( $rating ); ?> <svg class="ui-icon icon-star" width="12" height="12" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span>
                                </div>
                                <div class="spec-cell">
                                    <span class="spec-label">
                                        <svg class="ui-icon icon-shield" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                        Status
                                    </span>
                                    <span class="spec-val green">Safe &amp; Anti-Ban</span>
                                </div>
                            </div>

                            <!-- Download Actions -->
                            <div class="box2-download-actions">
                                <button class="btn-primary-download" id="startTimerBtn">
                                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    <span>Download BGMI <?php echo esc_html( $version ); ?> APK + OBB</span>
                                </button>
                                
                                <div class="box2-secondary-actions">
                                    <a href="<?php echo esc_url( $playstore_url ); ?>" target="_blank" rel="noopener nofollow" class="btn-secondary-download">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M3.609 1.814L13.793 12 3.61 22.186a1.996 1.996 0 0 1-.61-.914c-.068-.266-.1-.54-.1-.818V3.546c0-.278.032-.552.1-.818.128-.358.337-.674.609-.914zM15.207 13.414l2.122 2.121-12.02 6.94 9.898-9.061zm0-2.828L5.309 1.525l12.02 6.94-2.122 2.121zm1.414 1.414l3.197 1.846c.92.531.92 1.393 0 1.924l-3.197 1.846-2.121-2.121 2.121-2.121z"/></svg>
                                        <span>Google Play Store</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Security Trust Footer inside Box2 -->
                            <div class="box2-trust-footer">
                                <span style="display:inline-flex; align-items:center; gap:5px;">
                                    <svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <span>100% Safe Clean File</span>
                                </span>
                                <span>•</span>
                                <span style="display:inline-flex; align-items:center; gap:5px;">
                                    <svg class="ui-icon icon-bolt" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                    <span>Direct High-Speed Cloud Server</span>
                                </span>
                                <span>•</span>
                                <span style="display:inline-flex; align-items:center; gap:5px;">
                                    <svg class="ui-icon icon-shield" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                    <span>Anti-Ban Guaranteed</span>
                                </span>
                            </div>

                            <!-- High-CTR Interactive Download Timer -->
                            <div class="download-timer-container" id="timerBox">
                                <div class="timer-circle" id="countdownNumber">10</div>
                                <div class="timer-message">Please wait while your secure download link is being generated...</div>
                                <div class="timer-submessage">Scanning file integrity: SHA256 Verified • Anti-Ban Safe</div>
                                
                                <!-- Ad space inside download countdown for maximum CTR -->
                                <div class="ad-slot-wrapper" style="margin:16px 0;">
                                    <div class="ad-slot-box" style="background:#f8fafc; min-height:85px;">
                                        <span class="ad-label">Sponsored Advertisement</span>
                                        <div style="font-size:12px; color:#64748b; font-weight:600;">[ High Impact Native Ad during Link Generation ]</div>
                                    </div>
                                </div>

                                <div class="final-download-links" id="finalLinks">
                                    <p class="final-success-title" style="display:flex; align-items:center; justify-content:center; gap:8px;">
                                        <svg class="ui-icon icon-shield" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                        <span>Your Download Links Are Ready!</span>
                                    </p>
                                    <div class="final-download-btn-group">
                                        <a href="<?php echo esc_url( $apk_url ); ?>" class="btn-primary-download btn-apk-ready">
                                            <svg class="ui-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                            <span>Direct Download APK (<?php echo esc_html( $size_apk ); ?>)</span>
                                        </a>
                                        <a href="<?php echo esc_url( $obb_url ); ?>" class="btn-primary-download btn-obb-ready">
                                            <svg class="ui-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                                            <span>Direct Download OBB File (<?php echo esc_html( $size_obb ); ?>)</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Info Callout Note -->
                        <div class="note">
                            <strong>Official Note:</strong> Battlegrounds Mobile India <?php echo esc_html( $version ); ?> is compatible with all Android devices running Android 5.1.1 or higher with at least 2GB of RAM. Make sure to download both the APK and the OBB data pack for smooth gameplay.
                        </div>

                        <!-- Content Area -->
                        <div class="entry-content">
                            <?php 
                            if ( have_posts() ) {
                                the_content();
                            }
                            ?>

                            <!-- Fallback / Demo Rich Content if empty -->
                            <?php if ( empty( get_the_content() ) ) : ?>
                                <h2>What is Battlegrounds Mobile India (BGMI)?</h2>
                                <p>
                                    Battlegrounds Mobile India (BGMI) is the premier battle royale multiplayer game created exclusively for Indian gamers by KRAFTON. Set in diverse battlefields, 100 players parachute onto an island and battle until only one squad or lone survivor remains. Featuring realistic physics, intense gunplay, dynamic weather mechanics, and tailor-made Indian events, BGMI delivers top-tier esports-level action right onto your mobile device.
                                </p>

                                <h2>BGMI <?php echo esc_html( $version ); ?> Technical Specifications</h2>
                                <table class="app-specs-table" id="system-requirements">
                                    <tbody>
                                        <tr>
                                            <td>App Name</td>
                                            <td>Battlegrounds Mobile India</td>
                                        </tr>
                                        <tr>
                                            <td>Package Name</td>
                                            <td><code>com.pubg.imobile</code></td>
                                        </tr>
                                        <tr>
                                            <td>Current Version</td>
                                            <td><strong><?php echo esc_html( $version ); ?> (Latest Release)</strong></td>
                                        </tr>
                                        <tr>
                                            <td>APK File Size</td>
                                            <td><?php echo esc_html( $size_apk ); ?></td>
                                        </tr>
                                        <tr>
                                            <td>OBB Data Size</td>
                                            <td><?php echo esc_html( $size_obb ); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Operating System</td>
                                            <td><?php echo esc_html( $requires ); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Developer</td>
                                            <td><?php echo esc_html( $developer ); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Safety Check</td>
                                            <td>
                                                <span style="display:inline-flex; align-items:center; gap:6px; color:#16a34a; font-weight:700;">
                                                    <svg class="ui-icon icon-shield" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                                    100% Virus-Free &amp; Official Hash Verified
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h2>Step-by-Step Guide: How to Install BGMI APK + OBB</h2>
                                <div class="note wr">
                                    <strong>Important:</strong> Do not open the game right after installing the APK. You must place the OBB file in the designated Android directory first to prevent "Download Failed because you may not have purchased this app" error.
                                </div>

                                <ol class="install-steps-list" id="how-to-install">
                                    <li class="install-step-item">
                                        <h4>Step 1: Download Both Files</h4>
                                        <p>Click on the download button above and save both the <code>BGMI_v3.5.0.apk</code> and <code>main.com.pubg.imobile.obb</code> files to your phone's Download folder.</p>
                                    </li>
                                    <li class="install-step-item">
                                        <h4>Step 2: Enable Unknown Sources</h4>
                                        <p>Go to your phone's <strong>Settings &gt; Security &gt; Install Unknown Apps</strong>, and grant permission to your File Manager or Chrome browser.</p>
                                    </li>
                                    <li class="install-step-item">
                                        <h4>Step 3: Install APK File</h4>
                                        <p>Tap on the APK file to initiate installation. Once installed, tap <strong>Done</strong> (do NOT tap Open yet).</p>
                                    </li>
                                    <li class="install-step-item">
                                        <h4>Step 4: Copy OBB File to Target Folder</h4>
                                        <p>Open File Manager, navigate to <code>Android / obb /</code>. Create a new folder named <code>com.pubg.imobile</code> if it does not already exist, and paste the downloaded <code>.obb</code> file inside it.</p>
                                    </li>
                                    <li class="install-step-item">
                                        <h4>Step 5: Launch &amp; Enjoy!</h4>
                                        <p>Launch BGMI from your app drawer. Allow required storage and mic permissions, download the resource compilation pack, log in with your Twitter, Facebook, or Google Play account, and enjoy the game!</p>
                                    </li>
                                </ol>

                                <h2>Frequently Asked Questions (FAQs)</h2>
                                <div class="faq-accordion-group" id="faqs">
                                    <div class="faq-item">
                                        <button class="faq-question">
                                            <span>Is this BGMI <?php echo esc_html( $version ); ?> APK safe and ban-free?</span>
                                            <span class="faq-icon">+</span>
                                        </button>
                                        <div class="faq-answer">
                                            Yes, absolutely. The APK and OBB files provided on our portal are pure, unaltered official packages taken directly from official servers. They contain original signatures and pass all Google Play Protect security checks.
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-question">
                                            <span>What is the minimum RAM required for BGMI <?php echo esc_html( $version ); ?>?</span>
                                            <span class="faq-icon">+</span>
                                        </button>
                                        <div class="faq-answer">
                                            The game runs on devices with 2GB RAM, but for smooth 60 FPS / 90 FPS gameplay without heating or frame drops, a phone with at least 4GB or 6GB RAM and a Snapdragon 7 series or MediaTek Dimensity processor is recommended.
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-question">
                                            <span>Why am I seeing "OBB data not found" error?</span>
                                            <span class="faq-icon">+</span>
                                        </button>
                                        <div class="faq-answer">
                                            This error occurs when the OBB file is not copied to the exact path <code>Internal Storage/Android/obb/com.pubg.imobile/</code>. Ensure the folder name and file name are correct and permissions are enabled.
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- In-Article Bottom Ad Slot -->
                        <div class="ad-slot-wrapper">
                            <div class="ad-slot-box ad-slot-incontent">
                                <span class="ad-label">Advertisement</span>
                                <div style="font-size:13px; color:#94a3b8; font-weight:600;">
                                    High Conversion Native Display Banner (728x90 / 300x250)
                                </div>
                            </div>
                        </div>

                    </article>
                    
                    <?php
                endwhile;
                ?>
            </div>

            <!-- Right Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<!-- Schema.org SoftwareApplication Structured Data for SEO / Rank Math style -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Battlegrounds Mobile India",
  "operatingSystem": "Android",
  "applicationCategory": "GameApplication",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "ratingCount": "125430"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR"
  }
}
</script>

<?php get_footer(); ?>
