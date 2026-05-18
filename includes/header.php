<?php
/**
 * Primus Catering & Event Management
 * Shared Header Template - Harbor Street Redesign
 */

// Load global configuration
require_once __DIR__ . '/config.php';

// Default page title if not custom-specified
if (!isset($pageTitle)) {
    $pageTitle = 'Primus Catering & Event Management';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- High-Performance Pre-render Theme Check (Prevents dark-light flashing) -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>
    
    <!-- Editorial Typography (Google Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    
    <!-- Clean Icons (Material Symbols Outlined) -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    
    <!-- Custom Vanilla Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Luxurious Global Splash Screen & Micro-Spinner Loader -->
    <div id="global-splash-screen" class="splash-screen">
        <div class="splash-content">
            <div class="splash-logo-container">
                <img src="logo.png" alt="Primus Group logo" class="splash-logo">
            </div>
            <div class="splash-spinner-wrapper">
                <div class="splash-spinner"></div>
            </div>
            <span class="splash-loading-text">Primus Group Holdings</span>
        </div>
    </div>
    <script>
        (function() {
            // Check if splash screen has already run in this browser tab session
            const splashScreen = document.getElementById('global-splash-screen');
            if (sessionStorage.getItem('primus_splash_done')) {
                splashScreen.style.display = 'none';
            } else {
                // Set the session flag so it won't trigger again on interior page navigations
                sessionStorage.setItem('primus_splash_done', 'true');
                
                // Add event listener to fade it out gracefully when window has fully loaded
                window.addEventListener('load', function() {
                    setTimeout(function() {
                        splashScreen.classList.add('fade-out');
                        // Completely remove from layout flow after fade transition ends
                        setTimeout(function() {
                            splashScreen.style.display = 'none';
                        }, 600); // matches the 0.6s CSS transition
                    }, 500); // minimal elegant hold time to show the spinner settle
                });
                
                // Fail-safe: Auto fade-out after 3 seconds if any background assets hang
                setTimeout(function() {
                    if (!splashScreen.classList.contains('fade-out')) {
                        splashScreen.classList.add('fade-out');
                        setTimeout(function() {
                            splashScreen.style.display = 'none';
                        }, 600);
                    }
                }, 3000);
            }
        })();
    </script>

    <!-- Holding Conglomerate Top Utility Bar -->
    <div class="top-utility-bar">
        <div class="container utility-container">
            <div class="utility-left">
                <span class="conglomerate-pill">Holding Conglomerate</span>
                <span class="utility-divider">|</span>
                <a href="services.php" class="utility-sector <?php echo getActivePageClass('services.php'); ?>">Catering &amp; Camps</a>
                <span class="utility-divider">|</span>
                <a href="real-estate.php" class="utility-sector <?php echo getActivePageClass('real-estate.php'); ?>">Real Estate</a>
                <span class="utility-divider">|</span>
                <a href="financial-services.php" class="utility-sector <?php echo getActivePageClass('financial-services.php'); ?>">Financial Services</a>
                <span class="utility-divider">|</span>
                <a href="general-supplies.php" class="utility-sector <?php echo getActivePageClass('general-supplies.php'); ?>">General Supplies</a>
            </div>
            <div class="utility-right">
                <span class="material-symbols-outlined" style="font-size: 16px;">call</span>
                <a href="tel:0244877012" style="color: inherit; text-decoration: none;">0244877012 / 0202017681</a>
            </div>
        </div>
    </div>

    <!-- Header Navigation -->
    <header class="site-header">
        <div class="container nav-container">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-logo">
                <img src="logo.png" alt="Primus Catering &amp; Event Management" class="brand-logo-img">
            </a>

            <!-- Main Navigation Links -->
            <nav style="display: flex; align-items: center;">
                <ul class="nav-menu" id="nav-menu">
                    <li>
                        <a href="index.php" class="nav-link <?php echo getActivePageClass('index.php'); ?>">Home</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#" class="nav-link dropdown-toggle <?php echo (getActivePageClass('services.php') || getActivePageClass('real-estate.php') || getActivePageClass('financial-services.php') || getActivePageClass('general-supplies.php')) ? 'active-nav-link' : ''; ?>">
                            Divisions <span class="material-symbols-outlined dropdown-caret">expand_more</span>
                        </a>
                        <ul class="dropdown-submenu">
                            <li><a href="services.php"><span class="material-symbols-outlined">restaurant</span> Catering &amp; Camps</a></li>
                            <li><a href="real-estate.php"><span class="material-symbols-outlined">domain</span> Real Estate holdings</a></li>
                            <li><a href="financial-services.php"><span class="material-symbols-outlined">account_balance_wallet</span> Financial Services</a></li>
                            <li><a href="general-supplies.php"><span class="material-symbols-outlined">local_shipping</span> General Supplies</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.php" class="nav-link <?php echo getActivePageClass('about.php'); ?>">About</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav-link <?php echo getActivePageClass('contact.php'); ?>">Contact</a>
                    </li>
                    <li>
                        <a href="demos/index.php" class="nav-link design-portfolio-link" style="color: #FF7C3B; font-weight: 700; border: 1px solid rgba(255, 124, 59, 0.4); padding: 8px 16px; border-radius: 99px; display: inline-flex; align-items: center; gap: 6px; margin-left: 10px;">
                            <span class="material-symbols-outlined" style="font-size: 18px;">layers</span> Design Demos
                        </a>
                    </li>
                    <!-- Mobile-Only CTA in Dropdown Menu -->
                    <li class="mobile-only-cta">
                        <a href="contact.php" class="btn btn-primary" style="margin: 20px auto; display: inline-flex; width: calc(100% - 48px); justify-content: center;">
                            Request Quote
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Right Actions (Theme Switcher, Primary CTA, and Mobile Toggle) -->
            <div class="nav-right-actions">
                <button class="theme-toggle-btn" id="theme-toggle" aria-label="Toggle Light/Dark Mode">
                    <span class="material-symbols-outlined" id="toggle-icon">light_mode</span>
                </button>
                <div class="nav-cta">
                    <a href="contact.php" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.8rem;">
                        Request Quote
                    </a>
                </div>
                <!-- Mobile Toggle Button inside actions container for flawless alignment -->
                <button class="mobile-nav-toggle" id="mobile-toggle" aria-label="Toggle Navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
