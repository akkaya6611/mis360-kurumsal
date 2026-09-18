<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <!-- Preconnect & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>

    <style>
        /* AsistanX Header & Nav Base Styles */
        body { margin: 0; font-family: 'Inter', sans-serif; }
        
        .asx-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .asx-header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .asx-logo a {
            font-weight: 800;
            font-size: 24px;
            color: #1a1a1a;
            text-decoration: none;
            letter-spacing: -0.5px;
        }
        .asx-logo a span { color: #ea2845; }

        /* Desktop Nav */
        .asx-desktop-nav {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .asx-nav-menu {
            display: flex;
            gap: 28px;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .asx-nav-menu li a {
            text-decoration: none;
            color: #4b5563;
            font-weight: 500;
            font-size: 14.5px;
            transition: color 0.2s;
        }
        .asx-nav-menu li a:hover { color: #ea2845; }

        .asx-header-actions {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        /* Buttons */
        .asx-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border-radius: 99px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        .asx-btn-ghost { color: #1a1a1a; background: transparent; }
        .asx-btn-ghost:hover { background: rgba(0,0,0,0.04); }
        .asx-btn-primary { background: #ea2845; color: #fff; box-shadow: 0 4px 15px rgba(234, 40, 69, 0.3); }
        .asx-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(234, 40, 69, 0.4); }

        /* Mobile Hamburger */
        .asx-mobile-toggle {
            display: none;
            background: transparent;
            border: none;
            font-size: 24px;
            color: #1a1a1a;
            cursor: pointer;
            padding: 5px;
        }

        /* Mobile Menu Overlay */
        .asx-mobile-overlay {
            position: fixed;
            top: 70px; /* Below header */
            left: 0;
            right: 0;
            bottom: 0;
            background: #ffffff;
            z-index: 999;
            display: none;
            flex-direction: column;
            padding: 20px;
            overflow-y: auto;
        }
        .asx-mobile-overlay.active { display: flex; }

        .asx-mobile-nav { margin-bottom: 30px; }
        .asx-mobile-nav .asx-nav-menu {
            flex-direction: column;
            gap: 0;
        }
        .asx-mobile-nav .asx-nav-menu li {
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .asx-mobile-nav .asx-nav-menu li a {
            display: block;
            padding: 16px 0;
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
        }

        .asx-mobile-actions { display: flex; flex-direction: column; gap: 12px; }
        .asx-mobile-actions .asx-btn { width: 100%; box-sizing: border-box; }

        /* Responsive Breakpoints */
        @media (max-width: 992px) {
            .asx-desktop-nav { display: none; }
            .asx-header-actions { display: none; }
            .asx-mobile-toggle { display: block; }
        }
    </style>
</head>
<body <?php body_class(); ?>>

<header class="asx-header">
    <div class="asx-header-container">
        <!-- Logo -->
        <div class="asx-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                mis<span>360</span>
            </a>
        </div>

        <!-- Desktop Nav -->
        <nav class="asx-desktop-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'asx-nav-menu',
                'fallback_cb'    => false
            ) );
            ?>
        </nav>

        <!-- Desktop Actions -->
        <div class="asx-header-actions">
            <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="asx-btn asx-btn-ghost">Destek Talebi</a>
            <a href="<?php echo esc_url( home_url( '/teklif/' ) ); ?>" class="asx-btn asx-btn-primary">Demo Talep Et &rarr;</a>
        </div>

        <!-- Mobile Hamburger Toggle -->
        <button class="asx-mobile-toggle" id="asxMobileToggle" aria-label="Menüyü Aç/Kapat">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
    </div>
</header>

<!-- Mobile Full-Screen Overlay Menu -->
<div class="asx-mobile-overlay" id="asxMobileOverlay">
    <nav class="asx-mobile-nav">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'mobile-menu',
            'container'      => false,
            'menu_class'     => 'asx-nav-menu',
            'fallback_cb'    => false
        ) );
        ?>
    </nav>
    <div class="asx-mobile-actions">
        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="asx-btn asx-btn-ghost" style="border:1px solid rgba(0,0,0,0.1);">Destek Talebi</a>
        <a href="<?php echo esc_url( home_url( '/teklif/' ) ); ?>" class="asx-btn asx-btn-primary">Demo Talep Et &rarr;</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('asxMobileToggle');
        const overlay = document.getElementById('asxMobileOverlay');
        
        if (toggleBtn && overlay) {
            toggleBtn.addEventListener('click', function() {
                overlay.classList.toggle('active');
                
                // Change icon
                if (overlay.classList.contains('active')) {
                    toggleBtn.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>';
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                } else {
                    toggleBtn.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>';
                    document.body.style.overflow = ''; // Restore scrolling
                }
            });
        }
    });
</script>
