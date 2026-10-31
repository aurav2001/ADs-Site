<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Notice Bar -->
<div class="top-notice-bar">
    <div class="site-container">
        <div>
            <span class="top-badge">Update</span>
            <span>BGMI 3.5 Winter Mode APK + OBB file download link updated &amp; 100% verified!</span>
        </div>
        <div class="top-links">
            <a href="#how-to-install">How To Install</a>
            <a href="#system-requirements">Requirements</a>
            <a href="#faqs">FAQs</a>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header class="site-header" id="masthead">
    <div class="site-container">
        <div class="header-inner">
            <!-- Branding -->
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo-icon">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-icon.jpg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                    <?php endif; ?>
                </a>
                <div>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">BGMI<span>APK</span></a></h1>
                    <p class="site-tagline"><?php bloginfo( 'description' ); ?></p>
                </div>
            </div>

            <!-- Navigation -->
            <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'bgmi-apk-pro' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                    ) );
                else :
                ?>
                    <ul class="nav-menu">
                        <li class="<?php echo is_front_page() ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="highlight-item"><a href="<?php echo esc_url( home_url( '/#download-now' ) ); ?>"><svg class="ui-icon icon-bolt" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> BGMI 3.5 APK</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#redeem-codes' ) ); ?>">Redeem Codes</a></li>
                        <li>
                            <a href="#">More Guides ▾</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo esc_url( home_url( '/#free-fire' ) ); ?>">Free Fire India</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/dmca-disclaimer/' ) ); ?>">DMCA Disclaimer</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php endif; ?>
            </nav>

            <!-- Actions -->
            <div class="header-actions">
                <button class="search-toggle-btn" id="searchToggle" aria-label="Search Website" title="Search">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle navigation">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Header Ad Slot Area -->
<div class="site-container">
    <?php if ( is_active_sidebar( 'header-ad' ) ) : ?>
        <?php dynamic_sidebar( 'header-ad' ); ?>
    <?php else : ?>
        <div class="ad-slot-wrapper">
            <div class="ad-slot-box ad-slot-header">
                <span class="ad-label">Advertisement</span>
                <div style="font-size: 13px; color: #94a3b8; font-weight: 600;">
                    Responsive Display Ad Banner (728x90 Desktop / 320x50 Mobile)
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
