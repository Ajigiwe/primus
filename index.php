<?php
/**
 * Primus Catering & Event Management
 * Home Page - Harbor Street Redesign
 */

$pageTitle = 'Home | Primus Catering & Event Management';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Centered atmospheric luxury Hero section -->
<section class="hero-editorial">
    <!-- Atmospheric Luxury Hero Image Slider Backgrounds -->
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(rgba(9, 13, 22, 0.45), rgba(9, 13, 22, 0.96)), url('c1.jpg');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(rgba(9, 13, 22, 0.45), rgba(9, 13, 22, 0.96)), url('real1.jpg');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(rgba(9, 13, 22, 0.45), rgba(9, 13, 22, 0.96)), url('f1.jpg');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(rgba(9, 13, 22, 0.45), rgba(9, 13, 22, 0.96)), url('g1.jpg');"></div>
    </div>
    
    <div class="hero-centered-content reveal-fade-up">
        <span class="uppercase-label">Primus Group Holdings</span>
        <h1 class="hero-title">Multi-Sector Conglomerate Excellence</h1>
        <p class="hero-subtitle">Delivering elite culinary catering, premium real estate venues, dynamic financial solutions, and global supply logistics.</p>
        <div class="hero-actions">
            <a href="contact.php" class="btn btn-primary">
                <span class="material-symbols-outlined" style="font-size: 18px;">event_note</span>
                Request Quote
            </a>
            <a href="services.php" class="btn btn-white-outline">
                <span class="material-symbols-outlined" style="font-size: 18px;">explore</span>
                Our Sectors
            </a>
        </div>
    </div>
    <!-- Animated scroll mouse down indicator -->
    <div class="scroll-mouse"></div>
</section>



<!-- Featured Capabilities Section -->
<section class="section-padding container">
    <div class="editorial-title-block text-center reveal-fade-up">
        <span>Featured Sectors</span>
        <h2>Discover Our Core Capabilities</h2>
        <p class="text-muted" style="max-width: 750px; margin: 16px auto 0; font-size: 1.05rem;">We integrate high-end catering and luxury glamping event management with premium land assets, flexible corporate credit networks, and direct logisitics supply chains.</p>
    </div>

    <div class="editorial-grid-4">
        <!-- Sector 1: Catering & Camps -->
        <a href="services.php" class="editorial-card-link">
            <div class="editorial-card reveal-fade-up animation-delay-1">
                <div class="card-img-wrapper">
                    <img class="card-img" src="c2.jpg" alt="Executive corporate dining setup">
                    <div class="rating-badge">
                        <span class="star">&#9733;</span> 5.0
                    </div>
                </div>
                <div class="card-details">
                    <div class="card-title-row">
                        <h3 class="card-title" style="font-size: 1.15rem;">Catering &amp; Camps</h3>
                        <span class="card-price" style="font-size: 1.05rem;">Bespoke</span>
                    </div>
                    <p class="text-muted" style="font-size: 0.85rem; line-height: 1.6; margin-top: 4px;">Michelin-class executive dining, board banquets, and managed glamping retreats.</p>
                </div>
            </div>
        </a>

        <!-- Sector 2: Real Estate Holdings -->
        <a href="real-estate.php" class="editorial-card-link">
            <div class="editorial-card reveal-fade-up animation-delay-2">
                <div class="card-img-wrapper">
                    <img class="card-img" src="real2.jpg" alt="Luxury Glamping and Outdoor Retreat Camp Setup">
                    <div class="rating-badge">
                        <span class="star">&#9733;</span> 4.9
                    </div>
                </div>
                <div class="card-details">
                    <div class="card-title-row">
                        <h3 class="card-title" style="font-size: 1.15rem;">Real Estate</h3>
                        <span class="card-price" style="font-size: 1.05rem;">Holdings</span>
                    </div>
                    <p class="text-muted" style="font-size: 0.85rem; line-height: 1.6; margin-top: 4px;">Securing premium outdoor event grounds, estate grounds, and scenic glamping site leases.</p>
                </div>
            </div>
        </a>

        <!-- Sector 3: Financial Services -->
        <a href="financial-services.php" class="editorial-card-link">
            <div class="editorial-card reveal-fade-up animation-delay-3">
                <div class="card-img-wrapper">
                    <img class="card-img" src="f2.jpg" alt="Corporate banking and asset advisory session">
                    <div class="rating-badge">
                        <span class="star">&#9733;</span> 5.0
                    </div>
                </div>
                <div class="card-details">
                    <div class="card-title-row">
                        <h3 class="card-title" style="font-size: 1.15rem;">Financial Services</h3>
                        <span class="card-price" style="font-size: 1.05rem;">Advisory</span>
                    </div>
                    <p class="text-muted" style="font-size: 0.85rem; line-height: 1.6; margin-top: 4px;">Bespoke billing frameworks, corporate backing, and revolving lines of event credit.</p>
                </div>
            </div>
        </a>

        <!-- Sector 4: General Supplies -->
        <a href="general-supplies.php" class="editorial-card-link">
            <div class="editorial-card reveal-fade-up animation-delay-4">
                <div class="card-img-wrapper">
                    <img class="card-img" src="g2.jpg" alt="Active professional office and inventory operations">
                    <div class="rating-badge">
                        <span class="star">&#9733;</span> 4.8
                    </div>
                </div>
                <div class="card-details">
                    <div class="card-title-row">
                        <h3 class="card-title" style="font-size: 1.15rem;">General Supplies</h3>
                        <span class="card-price" style="font-size: 1.05rem;">Logistics</span>
                    </div>
                    <p class="text-muted" style="font-size: 0.85rem; line-height: 1.6; margin-top: 4px;">Proprietary logistical fleet, provisions warehousing, and heavy canvas camp imports.</p>
                </div>
            </div>
        </a>
    </div>
</section>

<!-- Chef / Story Section (Asymmetric Bento with Outline overlays) -->
<section class="section-padding" style="background-color: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container bento-showcase">
        <!-- Left Side: Image with floating badge -->
        <div class="bento-image-frame reveal-scale-in">
            <div class="bento-img-container">
                <img class="bento-img" src="c3.jpg" alt="Chef preparing luxury meals in active kitchen">
            </div>
            <div class="bento-floating-badge">
                <div class="badge-heart-icon">
                    <span class="material-symbols-outlined">favorite</span>
                </div>
                <div>
                    <span class="badge-text-val">5,000+</span>
                    <span class="badge-text-lbl">Clients Served</span>
                </div>
            </div>
        </div>
        
        <!-- Right Side: Content -->
        <div class="bento-text reveal-fade-up">
            <span class="uppercase-label" style="color: var(--color-blue);">Corporate Story</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">Synergy in Action, Quality in Execution</h2>
            <p class="text-muted" style="font-size: 1.05rem; line-height: 1.8;">The Primus Group Holdings operates at the intersection of premium hospitality, tactical real estate holdings, tailored financial backing, and global supplies logistics. We leverage our diverse holdings to orchestrate seamless, vertically-integrated corporate solutions and boutique events with absolute precision.</p>
            
            <ul class="bento-list">
                <li>
                    <strong>Group Synergy</strong>
                    <p class="text-muted">Cross-divisional alignment for camp setups, catering resources, and delivery trucks.</p>
                </li>
                <li>
                    <strong>Holding Quality</strong>
                    <p class="text-muted">Meticulous standards enforced across elite culinary divisions, land portfolios, and imports.</p>
                </li>
                <li>
                    <strong>In-House Capital</strong>
                    <p class="text-muted">Direct financial backing to structure flexible payments and scale mega festival programs.</p>
                </li>
                <li>
                    <strong>15+ Years Excellence</strong>
                    <p class="text-muted">Managing elite timelines, custom designs, and highly trained operational stewardship.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- The Primus Group Ecosystem -->
<section class="section-padding" style="background-color: var(--color-surface-soft); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container">
        <div class="editorial-title-block text-center reveal-fade-up">
            <span class="uppercase-label" style="color: var(--color-blue);">The Primus Group</span>
            <h2>Multi-Sector Conglomerate Ecosystem</h2>
            <p class="text-muted" style="max-width: 600px; margin: 16px auto 0; font-size: 1.05rem;">In addition to our hallmark culinary and camp event operations, the Primus Group executes bespoke services across real estate development, financial advisory, and global general supplies.</p>
        </div>
        
        <div class="divisions-grid">
            <!-- Division 1 -->
            <div class="division-card reveal-fade-up animation-delay-1">
                <div class="division-icon">
                    <span class="material-symbols-outlined">restaurant</span>
                </div>
                <h3>Catering &amp; Camp Events</h3>
                <p>Delivering michelin-class culinary hospitality, bespoke corporate boardroom dining, open-air festivals, and premium canvas camp event retreats.</p>
                <a href="services.php" class="division-link">Explore Division <span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
            
            <!-- Division 2 -->
            <div class="division-card reveal-fade-up animation-delay-2">
                <div class="division-icon">
                    <span class="material-symbols-outlined">domain</span>
                </div>
                <h3>Real Estate &amp; Venues</h3>
                <p>Securing premium event landscapes, luxury residential holdings, and managing exclusive glamping retreat grounds and vacation property developments.</p>
                <a href="real-estate.php" class="division-link">Explore Division <span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
            
            <!-- Division 3 -->
            <div class="division-card reveal-fade-up animation-delay-3">
                <div class="division-icon">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                </div>
                <h3>Financial Services</h3>
                <p>Providing bespoke financial consulting, structured asset-backing, asset management, and flexible financing structures for large-scale public festivals.</p>
                <a href="financial-services.php" class="division-link">Explore Division <span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
            
            <!-- Division 4 -->
            <div class="division-card reveal-fade-up animation-delay-4">
                <div class="division-icon">
                    <span class="material-symbols-outlined">local_shipping</span>
                </div>
                <h3>General Supplies</h3>
                <p>Executing high-volume provision services, hospitality kitchen equipment, canvas camp gear imports, and robust commercial supplies logistics.</p>
                <a href="general-supplies.php" class="division-link">Explore Division <span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
        </div>
    </div>
</section>

<!-- Review Grid Section (What Our Guests Say) -->
<section class="section-padding container">
    <div class="editorial-title-block text-center reveal-fade-up">
        <span>Testimonials</span>
        <h2>What Our Guests Say</h2>
        <p class="text-muted" style="max-width: 600px; margin: 16px auto 0; font-size: 1.05rem;">Real feedback regarding our executive boardroom menus, custom camp glamping retreats, and artisan culinary standards.</p>
    </div>

    <div class="reviews-grid">
        <!-- Review 1 -->
        <div class="review-card reveal-fade-up animation-delay-1">
            <span class="double-quote">&ldquo;</span>
            <div class="review-stars">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
            </div>
            <p class="review-desc">Absolutely outstanding! The corporate board lunches are incredibly delicious, and the team's coordination is perfect for formal boardroom meetings. Highly recommend.</p>
            <div class="review-user-row">
                <div class="review-avatar-frame">
                    <img class="review-avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAe2WCEFNVfWshnEhoxb0Sg5DOV5iwM7OtpUWKntmQHvRY1k8heAadqH59pE6NOn_p4yQNwiWxw2gjvM4EkTyxH7Xvd-iG2sRa3hQzFD4Hwqv9DVBExU5ML3AghLzTqpPd3fUGHYrwzoNqmGKlBPyB7dO0JKcWngtM56IIpLidOxO0dj8SoPfspqhaZSkiUkmPUth4ngIlhLmayVJnC5UZEmAj211iTCtThEpfHwM-Rv2bmfI0PBHSDjAi1POmOEGP2uvo54ykaEUiI" alt="Sarah Johnson Profile">
                </div>
                <div>
                    <span class="review-user-name">Sarah Johnson</span>
                    <span class="review-user-role">Corporate Coordinator</span>
                </div>
            </div>
        </div>

        <!-- Review 2 -->
        <div class="review-card reveal-fade-up animation-delay-2">
            <span class="double-quote">&ldquo;</span>
            <div class="review-stars">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
            </div>
            <p class="review-desc">We have partnered with Primus for over 3 years now. Their luxury camp events, tailored menu planning, and hospitality coordinators are completely reliable and professional.</p>
            <div class="review-user-row">
                <div class="review-avatar-frame">
                    <img class="review-avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHLpQ2qBvUNe6V46Ewn1sIUGGoA571sTYIa5GmmrF95LmAJQPSs7Ijz3Kx_mNYQYtN9FmTD76D9iuEU4eOL7jYCylC2zkXS_n_sDS9JVJ7G0wb4e8nZDfNC6qJdTIu115MYMoPOZtLlwJxtPqKUXcR1VoYVf3ybUJFiN-Fbyy3I6LlMEzmWqYtgsze3_1NEigh8UrLSH3mQUmWz-yHiG0WsSiXHiFijswdvD4zm1NqADdpG357dhfq_ftsXjfIiruMc9PCvTIFOm5u" alt="Michael Chen Profile">
                </div>
                <div>
                    <span class="review-user-name">Michael Chen</span>
                    <span class="review-user-role">Events Director</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Average reviews badge exactly like reference -->
    <div class="average-reviews-badge reveal-fade-up">
        <div class="avg-left-stars">
            <h3>4.9</h3>
            <div class="review-stars" style="margin-bottom: 0; margin-top: 4px; justify-content: center;">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
            </div>
            <p class="text-muted" style="font-size: 0.8rem; margin-top: 4px;">Average Rating</p>
        </div>
        <div class="avg-right-cnt">
            <h3>2,500+</h3>
            <p>Active Guest &amp;<br>Client Reviews</p>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section-padding text-center container reveal-fade-up" style="border-top: 1px solid var(--color-border);">
    <span class="uppercase-label" style="color: var(--color-blue);">Ready to Partner?</span>
    <h2 style="font-size: 2.6rem; margin-bottom: 16px;">Deploy Luxury Camp Events &amp; Dining Today</h2>
    <p class="text-muted" style="max-width: 600px; margin: 0 auto 40px; font-size: 1.05rem;">Connect with our event coordinators to establish customized menus, glamping camp layouts, or full banquet designs.</p>
    <div class="hero-actions">
        <a href="contact.php" class="btn btn-primary">Start a Quote</a>
        <a href="contact.php" class="btn btn-secondary">Consult Specialists</a>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
