<?php
/**
 * Sidebar template
 *
 * @package BGMI_APK_Pro
 */
?>

<aside class="sidebar-area" id="secondary" role="complementary">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php else : ?>

        <!-- Search Widget -->
        <div class="widget-box">
            <h3 class="widget-title">Search Games</h3>
            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; gap:8px;">
                <input type="search" name="s" placeholder="Search APK, OBB..." style="flex:1; padding:10px 14px; border:1px solid #cbd5e1; border-radius:6px; font-size:14px; outline:none;" required>
                <button type="submit" style="background:#0086FF; color:#fff; border:none; padding:10px 16px; border-radius:6px; font-weight:700; cursor:pointer;">Go</button>
            </form>
        </div>

        <!-- Sidebar Sticky Ad Unit (300x250 / 300x600) -->
        <div class="widget-box" style="padding:12px; text-align:center;">
            <span class="ad-label">Advertisement</span>
            <div style="background:#f8fafc; border:1px dashed #cbd5e1; border-radius:6px; min-height:250px; display:flex; flex-direction:column; align-items:center; justify-content:center; padding:15px;">
                <div style="color:#64748b; font-size:13px; font-weight:600; margin-bottom:8px;">[ High CTR Sticky Ad ]</div>
                <div style="color:#94a3b8; font-size:12px;">300x250 Medium Rectangle / 300x600 Half Page</div>
            </div>
        </div>

        <!-- Trending Downloads Widget -->
        <div class="widget-box">
            <h3 class="widget-title">
                <span>🔥 Trending Games</span>
                <span style="font-size:11px; background:#eff6ff; color:#2563eb; padding:2px 8px; border-radius:12px;">Verified</span>
            </h3>
            <ul class="trending-post-list">
                <li class="trending-post-item">
                    <div class="trending-post-thumb">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgmi-banner.jpg' ); ?>" alt="BGMI 3.5 APK">
                    </div>
                    <div class="trending-post-info">
                        <h4 class="trending-post-title">
                            <a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>">BGMI 3.5 Apk + Obb Direct Download</a>
                        </h4>
                        <span class="trending-post-date">Updated Today • 74 MB</span>
                    </div>
                </li>

                <li class="trending-post-item">
                    <div class="trending-post-thumb">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/free-fire-banner.jpg' ); ?>" alt="Free Fire India">
                    </div>
                    <div class="trending-post-info">
                        <h4 class="trending-post-title">
                            <a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>">Download Free Fire India: Play Store &amp; Rules</a>
                        </h4>
                        <span class="trending-post-date">New Release • 420 MB</span>
                    </div>
                </li>

                <li class="trending-post-item">
                    <div class="trending-post-thumb">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-icon.jpg' ); ?>" alt="Redeem Codes">
                    </div>
                    <div class="trending-post-info">
                        <h4 class="trending-post-title">
                            <a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>">Free Fire Redeem Code Today (100% Working)</a>
                        </h4>
                        <span class="trending-post-date">Active Rewards • Daily</span>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Community Channel Box -->
        <div class="widget-box" style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%); color:#ffffff;">
            <h4 style="color:#ffffff; font-size:16px; margin-bottom:8px;">📢 Instant Telegram Alerts</h4>
            <p style="color:#c7d2fe; font-size:13px; line-height:1.5; margin-bottom:14px;">
                Get notified immediately when Krafton pushes new BGMI 3.5 APK, OBB files, or server maintenance updates!
            </p>
            <a href="#" style="background:#0086FF; color:#ffffff; display:block; text-align:center; padding:10px; border-radius:6px; font-weight:700; font-size:13px; text-transform:uppercase; box-shadow:0 4px 12px rgba(0,134,255,0.4);">
                Join Telegram Channel
            </a>
        </div>

        <!-- Quick Game Categories -->
        <div class="widget-box">
            <h3 class="widget-title">Popular Categories</h3>
            <div style="display:flex; flex-wrap:wrap; gap:8px;">
                <a href="#" class="category-pill">BGMI Updates</a>
                <a href="#" class="category-pill">OBB Files</a>
                <a href="#" class="category-pill">Free Fire India</a>
                <a href="#" class="category-pill">Redeem Codes</a>
                <a href="#" class="category-pill">Sensitivity Guides</a>
                <a href="#" class="category-pill">Esports News</a>
            </div>
        </div>

    <?php endif; ?>
</aside>
