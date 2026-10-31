<?php
/**
 * Footer template
 *
 * @package BGMI_APK_Pro
 */
?>

<!-- Site Footer -->
<footer class="site-footer" id="colophon">
    <div class="footer-widgets-section">
        <div class="site-container">
            <div class="footer-columns">
                <!-- About Col -->
                <div class="footer-widget">
                    <h4>About BGMI New APK</h4>
                    <p>
                        Your trusted portal for the latest official Battlegrounds Mobile India (BGMI) updates, APK &amp; OBB download guides, patch notes, sensitivity codes, and Free Fire India release news. We provide 100% virus-free, tested direct mirrors.
                    </p>
                    <div style="margin-top: 14px; display:flex; gap:8px; flex-wrap:wrap;">
                        <span class="meta-pill" style="display:inline-flex; align-items:center; gap:6px; background:#1e293b; color:#38bdf8; border:1px solid #334155;"><svg class="ui-icon icon-shield" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg> 100% Clean &amp; Safe</span>
                        <span class="meta-pill" style="display:inline-flex; align-items:center; gap:6px; background:#1e293b; color:#4ade80; border:1px solid #334155;"><svg class="ui-icon" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Fast Direct Servers</span>
                    </div>
                </div>

                <!-- Quick Navigation -->
                <div class="footer-widget">
                    <h4>Quick Links</h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>">BGMI 3.5 APK Download</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#obb-install' ) ); ?>">How to Install OBB File</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#system-requirements' ) ); ?>">System Requirements</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>">Free Fire Redeem Codes</a></li>
                    </ul>
                </div>

                <!-- Legal & Compliance -->
                <div class="footer-widget">
                    <h4>Legal &amp; Policy</h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo esc_url( home_url( '/dmca-disclaimer/' ) ); ?>">DMCA Disclaimer</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- DMCA Notice Box -->
            <div style="margin-top: 30px;">
                <div class="dmca-disclaimer-box">
                    <strong>Disclaimer:</strong> Battlegrounds Mobile India and BGMI are registered trademarks of KRAFTON, Inc. This website is an independent community portal dedicated to providing news, installation guides, and educational tutorials for Android gamers. We do not host modified files or bypass any anti-cheat mechanisms. All files are linked directly from public official releases or mirror archives for user convenience.
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <div class="site-container">
            <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. All rights reserved. Designed for Ultra Fast Gaming Downloads.</p>
        </div>
    </div>
</footer>

<!-- Floating Back to Top Button -->
<div class="back-to-top" id="backToTop" title="Back to Top">
    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"></path></svg>
</div>

<!-- Search Modal Popup -->
<div id="searchModal" style="display:none; position:fixed; inset:0; background:rgba(15,23,42,0.8); z-index:9999; backdrop-filter:blur(4px); align-items:center; justify-content:center; padding:20px;">
    <div style="background:#ffffff; max-width:550px; width:100%; border-radius:12px; padding:24px; box-shadow:0 20px 40px rgba(0,0,0,0.3); position:relative;">
        <button id="closeSearchModal" style="position:absolute; top:16px; right:16px; background:none; border:none; font-size:24px; cursor:pointer; color:#64748b;">&times;</button>
        <h3 style="margin-bottom:16px; font-size:18px;">Search BGMI Updates &amp; Downloads</h3>
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; gap:10px;">
            <input type="search" name="s" placeholder="e.g. BGMI 3.5 OBB, Free Fire, Redeem..." style="flex:1; padding:12px 16px; border:1px solid #cbd5e1; border-radius:6px; font-size:15px; outline:none;" required>
            <button type="submit" style="background:#0086FF; color:#fff; border:none; padding:12px 20px; border-radius:6px; font-weight:700; cursor:pointer;">Search</button>
        </form>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
