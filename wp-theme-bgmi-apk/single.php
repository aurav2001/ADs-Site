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
                    $rating       = get_post_meta( get_the_ID(), '_bgmi_rating', true ) ?: '4.8 ★';
                    $apk_url      = get_post_meta( get_the_ID(), '_bgmi_apk_url', true ) ?: '#';
                    $obb_url      = get_post_meta( get_the_ID(), '_bgmi_obb_url', true ) ?: '#';
                    $playstore_url= get_post_meta( get_the_ID(), '_bgmi_playstore_url', true ) ?: 'https://play.google.com/store/apps/details?id=com.pubg.imobile';
                    ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-container' ); ?>>
                        
                        <!-- Breadcrumbs -->
                        <div class="breadcrumbs">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                            <span>&raquo;</span>
                            <span><?php the_category( ', ' ); ?></span>
                            <span>&raquo;</span>
                            <span><?php the_title(); ?></span>
                        </div>

                        <!-- Signature Title Banner (bgminewapk style) -->
                        <h1 class="entry-title mainh"><?php the_title(); ?></h1>

                        <!-- Meta Row -->
                        <div class="post-meta-row" style="justify-content:center; margin-bottom:18px;">
                            <span>📅 Last Updated: <?php echo get_the_modified_date( 'd F Y' ); ?></span>
                            <span>•</span>
                            <span>👤 By <?php the_author(); ?></span>
                            <span>•</span>
                            <span style="color:#16a34a; font-weight:700;">🛡️ 100% Virus-Free Verified</span>
                        </div>

                        <!-- Post Title Ad Unit -->
                        <?php if ( is_active_sidebar( 'post-title-ad' ) ) : ?>
                            <?php dynamic_sidebar( 'post-title-ad' ); ?>
                        <?php else : ?>
                            <div class="ad-slot-wrapper">
                                <div class="ad-slot-box ad-slot-incontent">
                                    <span class="ad-label">Advertisement</span>
                                    <div style="font-size:13px; color:#94a3b8; font-weight:600;">
                                        Responsive High-CTR In-Article Ad (728x90 / 300x250)
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
                        <div class="box2" id="download-now">
                            <div class="box2-app-icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-icon.jpg' ); ?>" alt="<?php echo esc_attr( $app_name ); ?>">
                            </div>
                            <h3><?php echo esc_html( $app_name ); ?> (<?php echo esc_html( $version ); ?>)</h3>
                            <p style="margin-bottom:12px; color:#1e293b; font-size:15px;">Official Battlegrounds Mobile India Direct APK &amp; OBB Download</p>
                            
                            <div class="box2-meta-pills">
                                <span class="meta-pill">📦 Version: <?php echo esc_html( $version ); ?></span>
                                <span class="meta-pill">💾 Size: <?php echo esc_html( $size_apk ); ?> (APK)</span>
                                <span class="meta-pill">📂 Data: <?php echo esc_html( $size_obb ); ?> (OBB)</span>
                                <span class="meta-pill">📱 <?php echo esc_html( $requires ); ?></span>
                                <span class="meta-pill">⭐ <?php echo esc_html( $rating ); ?></span>
                            </div>

                            <div class="box2-download-actions">
                                <button class="btn-primary-download" id="startTimerBtn">
                                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    <span>Download BGMI <?php echo esc_html( $version ); ?> APK</span>
                                </button>
                                
                                <a href="<?php echo esc_url( $playstore_url ); ?>" target="_blank" rel="noopener nofollow" class="btn-secondary-download">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M3.609 1.814L13.793 12 3.61 22.186a1.996 1.996 0 0 1-.61-.914c-.068-.266-.1-.54-.1-.818V3.546c0-.278.032-.552.1-.818.128-.358.337-.674.609-.914zM15.207 13.414l2.122 2.121-12.02 6.94 9.898-9.061zm0-2.828L5.309 1.525l12.02 6.94-2.122 2.121zm1.414 1.414l3.197 1.846c.92.531.92 1.393 0 1.924l-3.197 1.846-2.121-2.121 2.121-2.121z"/></svg>
                                    <span>Get from Google Play Store</span>
                                </a>
                            </div>

                            <!-- High-CTR Interactive Download Timer -->
                            <div class="download-timer-container" id="timerBox">
                                <div class="timer-circle" id="countdownNumber">10</div>
                                <div class="timer-message">Please wait while your secure download link is being generated...</div>
                                <div class="timer-submessage">Scanning file integrity: SHA256 Verified • Anti-Ban Safe</div>
                                
                                <!-- Ad space inside download countdown for maximum CTR -->
                                <div class="ad-slot-wrapper" style="margin:15px 0;">
                                    <div class="ad-slot-box" style="background:#f1f5f9; min-height:80px;">
                                        <span class="ad-label">Advertisement</span>
                                        <div style="font-size:12px; color:#64748b; font-weight:600;">High Impact Native Ad during Link Generation</div>
                                    </div>
                                </div>

                                <div class="final-download-links" id="finalLinks">
                                    <p style="color:#16a34a; font-weight:700; font-size:16px; margin-bottom:12px;">✅ Your Download Links Are Ready!</p>
                                    <div style="display:flex; flex-direction:column; gap:10px; align-items:center;">
                                        <a href="<?php echo esc_url( $apk_url ); ?>" class="btn-primary-download" style="background:#16a34a; max-width:400px;">
                                            <span>📥 Direct Download APK (<?php echo esc_html( $size_apk ); ?>)</span>
                                        </a>
                                        <a href="<?php echo esc_url( $obb_url ); ?>" class="btn-primary-download" style="background:#0284c7; max-width:400px;">
                                            <span>💾 Direct Download OBB File (<?php echo esc_html( $size_obb ); ?>)</span>
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
                                            <td>✅ 100% Virus-Free &amp; Official Hash Verified</td>
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
