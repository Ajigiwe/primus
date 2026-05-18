<?php
/**
 * Primus Group Holdings
 * Real Estate & Venues Division - Harbor Street Redesign
 */

$pageTitle = 'Real Estate Holdings | Primus Group Holdings';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Centered atmospheric luxury Hero section with scenic meadow camp background -->
<section class="hero-editorial">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(rgba(9, 13, 22, 0.45), rgba(9, 13, 22, 0.96)), url('real1.jpg'); transform: scale(1.03);"></div>
    </div>
    <div class="hero-centered-content reveal-fade-up">
        <span class="uppercase-label" style="color: var(--color-blue);">Exclusive Grounds</span>
        <h1 class="hero-title">Real Estate Holdings &amp; Venues</h1>
        <p class="hero-subtitle">Securing premium outdoor landscapes, bespoke canvas glamping sites, and luxury residential properties for elite corporate events and private vacation retreats.</p>
        <div class="hero-actions">
            <a href="contact.php" class="btn btn-primary">
                <span class="material-symbols-outlined" style="font-size: 18px;">domain</span>
                Inquire About Venues
            </a>
            <a href="#portfolio" class="btn btn-white-outline">
                <span class="material-symbols-outlined" style="font-size: 18px;">explore</span>
                View Holdings
            </a>
        </div>
    </div>
    <div class="scroll-mouse"></div>
</section>

<!-- Venue Portfolio Section -->
<section id="portfolio" class="section-padding container">
    <div class="editorial-title-block text-center reveal-fade-up">
        <span class="uppercase-label" style="color: var(--color-blue);">Properties</span>
        <h2>Curated Land &amp; Venue Holdings</h2>
        <p class="text-muted" style="max-width: 650px; margin: 16px auto 0; font-size: 1.05rem;">We own, operate, and manage high-end event spaces and properties designed to integrate seamlessly with luxury tent setups and catering operations.</p>
    </div>

    <div class="editorial-grid">
        <!-- Property 1 -->
        <div class="editorial-card reveal-fade-up animation-delay-1">
            <div class="card-img-wrapper">
                <img class="card-img" src="real1.jpg" alt="Scenic meadows and canvas tents retreat grounds">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 5.0
                </div>
            </div>
            <div class="card-details">
                <div class="card-title-row">
                    <h3 class="card-title">Glamping Meadows</h3>
                    <span class="card-price">Premium</span>
                </div>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">Pristine, pre-engineered grass landscapes equipped with luxury water channels, discrete electrical setups, and scenic outdoor canvas foundations.</p>
            </div>
        </div>

        <!-- Property 2 -->
        <div class="editorial-card reveal-fade-up animation-delay-2">
            <div class="card-img-wrapper">
                <img class="card-img" src="real2.jpg" alt="Luxury residential property managed by Primus">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 4.9
                </div>
            </div>
            <div class="card-details">
                <div class="card-title-row">
                    <h3 class="card-title">Luxury Holiday Estates</h3>
                    <span class="card-price">Exclusive</span>
                </div>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">Bespoke residential retreats managed directly by Primus Group, offering five-star accommodation alongside high-end culinary and lounge capacities.</p>
            </div>
        </div>

        <!-- Property 3 -->
        <div class="editorial-card reveal-fade-up animation-delay-3">
            <div class="card-img-wrapper">
                <img class="card-img" src="real3.jpg" alt="Corporate retreat estate gardens and arenas">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 4.9
                </div>
            </div>
            <div class="card-details">
                <div class="card-title-row">
                    <h3 class="card-title">Corporate Arenas</h3>
                    <span class="card-price">Holdings</span>
                </div>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">Manicured lawns and spectacular natural valleys pre-secured for multi-day commercial retreats, board outings, weddings, and public gatherings.</p>
            </div>
        </div>
    </div>
</section>

<!-- Integrated Services & Management Details -->
<section class="section-padding" style="background-color: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container bento-showcase">
        <!-- Left Column: Content -->
        <div class="bento-text reveal-fade-up">
            <span class="uppercase-label" style="color: var(--color-blue);">Synergistic Venues</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">Bespoke Land Scopes &amp; Management</h2>
            <p class="text-muted" style="font-size: 1.05rem; line-height: 1.8;">Our real estate team handles everything from municipal permitting and spatial landscaping design to round-the-clock facility maintenance, guaranteeing a stress-free experience for luxury operators and corporate planners alike.</p>
            
            <ul class="bento-list">
                <li>
                    <strong>Municipal Permitting</strong>
                    <p class="text-muted">Direct compliance coordination with local zoningboards and noise ordinances.</p>
                </li>
                <li>
                    <strong>Spatial Camp Blueprints</strong>
                    <p class="text-muted">CAD architectural plotting for canvas setups, culinary paths, and generator fields.</p>
                </li>
                <li>
                    <strong>Operational Stewardship</strong>
                    <p class="text-muted">On-site facility managers keeping meadows, utility lines, and accommodations pristine.</p>
                </li>
                <li>
                    <strong>Cross-Sector Integration</strong>
                    <p class="text-muted">Backed directly by our logistical supplies fleet and in-house payment consulting divisions.</p>
                </li>
            </ul>
        </div>

        <!-- Right Column: Image with floating badge -->
        <div class="bento-image-frame reveal-scale-in">
            <div class="bento-img-container">
                <img class="bento-img" src="real2.jpg" alt="Scenic glamping field and property backdrop">
            </div>
            <div class="bento-floating-badge">
                <div class="badge-heart-icon">
                    <span class="material-symbols-outlined">domain</span>
                </div>
                <div>
                    <span class="badge-text-val">12+</span>
                    <span class="badge-text-lbl">Secured Acres</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="section-padding container text-center reveal-fade-up">
    <div class="info-card" style="padding: 60px 40px; border-radius: 24px; max-width: 900px; margin: 0 auto; background-color: var(--color-surface-soft);">
        <span class="uppercase-label" style="color: var(--color-red); margin-bottom: 12px; display: inline-block;">Consult Our Land Officers</span>
        <h2 style="font-size: 2.1rem; margin-bottom: 16px;">Ready to Secure Your Scenic Backdrop?</h2>
        <p class="text-muted" style="max-width: 600px; margin: 0 auto 32px; font-size: 1.05rem;">Get in touch with our real estate division today to coordinate site scouting, land leasing fees, and customized camp layouts.</p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="contact.php?interest=Real%20Estate" class="btn btn-primary">Book Site Tour</a>
            <a href="tel:0244877012" class="btn btn-secondary">Call Land Office</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
