<?php
/**
 * Sidebar template - Modern High-CTR & Vector-Icon Gaming APK Layout
 *
 * @package BGMI_APK_Pro
 */
?>

<aside class="sidebar-area" id="secondary" role="complementary">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php else : ?>

        <!-- Modern Search Widget -->
        <div class="widget-box search-widget-box">
            <h3 class="widget-title">
                <span style="display:flex; align-items:center; gap:8px;">
                    <svg class="ui-icon icon-blue" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <span>Search Games &amp; OBB</span>
                </span>
            </h3>
            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="modern-search-form">
                <div class="search-input-wrap">
                    <svg class="search-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="search" name="s" placeholder="Search BGMI, Free Fire, OBB..." autocomplete="off" required>
                </div>
                <button type="submit" class="search-submit-btn" aria-label="Submit search">
                    <span>Search</span>
                </button>
            </form>
        </div>

        <!-- Trending Downloads Widget (Ranked 1, 2, 3) -->
        <div class="widget-box trending-widget-box">
            <div class="widget-header-row">
                <h3 class="widget-title">
                    <span style="display:flex; align-items:center; gap:8px;">
                        <svg class="ui-icon icon-fire" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 23c-4.97 0-9-4.03-9-9 0-3.77 2.34-6.4 4.54-8.87.53-.6 1.07-1.19 1.58-1.8.31-.38.82-.53 1.28-.38.46.15.78.56.81 1.05.15 2.12.98 3.5 2.04 4.6 1.5-2.2 2.25-4.5 2.25-6.6 0-.44.27-.83.68-.98.41-.15.87-.04 1.18.27 3.5 3.5 5.64 7.6 5.64 12.71 0 4.97-4.03 9-9 9zm-1-7c0-1.66 1.34-3 3-3 .55 0 1 .45 1 1s-.45 1-1 1c-.55 0-1 .45-1 1 0 .55-.45 1-1 1s-1-.45-1-1z"/></svg>
                        <span>Top Trending Downloads</span>
                    </span>
                </h3>
                <span class="live-pill"><span class="pulse-dot"></span> Live</span>
            </div>
            
            <ul class="trending-post-list">
                <!-- Rank #1 -->
                <li class="trending-post-item rank-1">
                    <div class="trending-rank-badge rank-gold">#1</div>
                    <div class="trending-post-thumb">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgmi-banner.jpg' ); ?>" alt="BGMI 3.5 APK">
                    </div>
                    <div class="trending-post-info">
                        <h4 class="trending-post-title">
                            <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>">BGMI 3.5 Apk + Obb Direct Download</a>
                        </h4>
                        <div class="trending-meta-pills">
                            <span class="badge-size">
                                <svg class="ui-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                                74 MB
                            </span>
                            <span class="badge-rating">
                                <svg class="ui-icon icon-star" width="12" height="12" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                4.9
                            </span>
                            <span class="badge-verified">
                                <svg class="ui-icon" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                Verified
                            </span>
                        </div>
                    </div>
                </li>

                <!-- Rank #2 -->
                <li class="trending-post-item rank-2">
                    <div class="trending-rank-badge rank-silver">#2</div>
                    <div class="trending-post-thumb">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/free-fire-banner.jpg' ); ?>" alt="Free Fire India">
                    </div>
                    <div class="trending-post-info">
                        <h4 class="trending-post-title">
                            <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>">Download Free Fire India: Official Release</a>
                        </h4>
                        <div class="trending-meta-pills">
                            <span class="badge-size">
                                <svg class="ui-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                                420 MB
                            </span>
                            <span class="badge-rating">
                                <svg class="ui-icon icon-star" width="12" height="12" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                4.8
                            </span>
                            <span class="badge-verified">New</span>
                        </div>
                    </div>
                </li>

                <!-- Rank #3 -->
                <li class="trending-post-item rank-3">
                    <div class="trending-rank-badge rank-bronze">#3</div>
                    <div class="trending-post-thumb">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-icon.jpg' ); ?>" alt="Redeem Codes">
                    </div>
                    <div class="trending-post-info">
                        <h4 class="trending-post-title">
                            <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>">Free Fire &amp; BGMI Redeem Codes (Today)</a>
                        </h4>
                        <div class="trending-meta-pills">
                            <span class="badge-size">
                                <svg class="ui-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
                                Free Rewards
                            </span>
                            <span class="badge-rating">
                                <svg class="ui-icon icon-star" width="12" height="12" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                5.0
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Security & Safe Download Guarantee Box -->
        <div class="widget-box security-widget-box">
            <div class="security-card-header">
                <span class="shield-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                </span>
                <div>
                    <h4 class="security-card-title">100% Safe &amp; Tested Downloads</h4>
                    <p class="security-card-desc">Every APK/OBB is analyzed before upload</p>
                </div>
            </div>
            <ul class="security-feature-list">
                <li>
                    <svg width="15" height="15" viewBox="0 0 20 20" fill="#16a34a"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>VirusTotal &amp; Google Play Protect Verified</span>
                </li>
                <li>
                    <svg width="15" height="15" viewBox="0 0 20 20" fill="#16a34a"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>Original Developer Signatures (Zero Mod / No Ban)</span>
                </li>
                <li>
                    <svg width="15" height="15" viewBox="0 0 20 20" fill="#16a34a"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>High-Speed Ultra CDN Direct Download Mirrors</span>
                </li>
            </ul>
        </div>

        <!-- Sidebar Sticky Ad Unit (300x250 / 300x600) -->
        <div class="widget-box sticky-sidebar-ad-card">
            <span class="ad-label">Sponsored Advertisement</span>
            <div class="ad-slot-box ad-slot-sidebar">
                <div class="ad-placeholder-content">
                    <span class="ad-placeholder-tag">[ High CTR Sticky Ad Unit ]</span>
                    <span class="ad-placeholder-size">300x250 Medium Rectangle / 300x600 Half-Page</span>
                    <span class="ad-placeholder-note">Scrolls along with page for 3x CTR</span>
                </div>
            </div>
        </div>

        <!-- Community Telegram Alert Card -->
        <div class="widget-box telegram-community-box">
            <div class="tg-badge-row">
                <span class="tg-mini-pill">Official Channel</span>
                <span class="tg-online-count"><span class="pulse-dot green"></span> 14,820 Online</span>
            </div>
            <h4 class="tg-title" style="display:flex; align-items:center; gap:8px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                <span>Instant Update Notifications</span>
            </h4>
            <p class="tg-desc">
                Get notified the exact second Krafton releases new BGMI APKs, OBB patches, or redeem codes!
            </p>
            <a href="https://t.me/" target="_blank" rel="noopener nofollow" class="btn-telegram-action">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69a.2.2 0 00-.05-.18c-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.63-.2-1.12-.31-1.08-.66.02-.18.27-.36.75-.55 2.92-1.27 4.86-2.11 5.83-2.51 2.78-1.16 3.35-1.36 3.73-1.36.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z"/></svg>
                <span>Join Telegram (Free)</span>
            </a>
        </div>

        <!-- Quick Game Categories -->
        <div class="widget-box categories-widget-box">
            <h3 class="widget-title">
                <span style="display:flex; align-items:center; gap:8px;">
                    <svg class="ui-icon icon-purple" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    <span>Popular Categories</span>
                </span>
            </h3>
            <div class="category-pill-grid">
                <a href="#" class="category-tag"><span class="cat-name">BGMI Updates</span><span class="cat-count">18</span></a>
                <a href="#" class="category-tag"><span class="cat-name">OBB Data</span><span class="cat-count">12</span></a>
                <a href="#" class="category-tag"><span class="cat-name">Free Fire India</span><span class="cat-count">9</span></a>
                <a href="#" class="category-tag"><span class="cat-name">Redeem Codes</span><span class="cat-count">34</span></a>
                <a href="#" class="category-tag"><span class="cat-name">Sensitivity Guides</span><span class="cat-count">7</span></a>
                <a href="#" class="category-tag"><span class="cat-name">Anti-Ban Tutorials</span><span class="cat-count">5</span></a>
            </div>
        </div>

    <?php endif; ?>
</aside>
