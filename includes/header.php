<?php
/**
 * Primus Catering & Camp Management
 * Shared Header Template - Soft-Minimalist Design
 */

// Load global configuration
require_once __DIR__ . '/config.php';

// Default page title
if (!isset($pageTitle)) {
    $pageTitle = 'Primus | Catering & Camp Management';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <!-- Editorial Typography (Google Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    
    <!-- Clean Icons (Material Symbols Outlined) -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    
    <!-- Custom Vanilla Stylesheet with cache-busting to force cache refresh -->
    <link rel="stylesheet" href="css/styles.css?v=2.1">
</head>
<body>


    <!-- Main Navigation Header -->
    <header class="site-header">
        <div class="container nav-container">
            <!-- Brand Logo -->
            <a href="#home" class="brand-logo">
                <img src="logo.png" alt="Primus Catering &amp; Camp Management" class="brand-logo-img">
            </a>

            <!-- Main Spaced Navigation Links -->
            <nav style="display: flex; align-items: center;">
                <ul class="nav-menu" id="nav-menu">
                    <li>
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li>
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Right Actions (Rounded CTA Pill & Hamburger Toggle) -->
            <div style="display: flex; align-items: center; gap: 16px;">
                <a href="#contact" class="btn-pill btn-pill-header">Inquire</a>
                <button class="mobile-nav-toggle" id="mobile-toggle" aria-label="Toggle Navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
