<?php
/**
 * Primus Catering & Event Management
 * Services & Engagement Models - Harbor Street Redesign
 */

$pageTitle = 'Services | Primus Catering & Event Management';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Centered atmospheric luxury Hero section -->
<section class="hero-editorial">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(rgba(9, 13, 22, 0.45), rgba(9, 13, 22, 0.96)), url('c1.jpg'); transform: scale(1.03);"></div>
    </div>
    <div class="hero-centered-content reveal-fade-up">
        <span class="uppercase-label">Bespoke Experiences</span>
        <h1 class="hero-title">Artful Catering &amp; Camp Events</h1>
        <p class="hero-subtitle">Bespoke corporate banquets, high-end private dining, and luxury glamping retreat camps custom built to elevate your events.</p>
        <div class="hero-actions">
            <a href="contact.php" class="btn btn-primary">
                <span class="material-symbols-outlined" style="font-size: 18px;">event_note</span>
                Request Quote
            </a>
            <a href="contact.php" class="btn btn-white-outline">
                <span class="material-symbols-outlined" style="font-size: 18px;">call</span>
                Consult Specialists
            </a>
        </div>
    </div>
    <!-- Animated scroll mouse down indicator -->
    <div class="scroll-mouse"></div>
</section>



<!-- High-End Culinary Operations Section -->
<section class="section-padding container">
    <div class="editorial-title-block reveal-fade-up">
        <span class="uppercase-label" style="color: var(--color-blue);">Gastronomy</span>
        <h2>High-End Culinary Operations</h2>
        <p class="text-muted" style="max-width: 600px; margin-top: 12px; font-size: 1.05rem;">Menus designed around gourmet seasonal ingredients, visual culinary beauty, and bespoke guest preferences.</p>
    </div>

    <div class="editorial-grid">
        <!-- Service 1 -->
        <div class="editorial-card reveal-fade-up animation-delay-1">
            <div class="card-img-wrapper">
                <img class="card-img" src="c1.jpg" alt="Bespoke luxury culinary recipe preparation">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 4.9
                </div>
            </div>
            <div class="card-details">
                <h3 class="card-title" style="margin-bottom: 8px;">Bespoke Menus</h3>
                <p class="text-muted" style="font-size: 0.9rem; line-height: 1.6;">Curated dining plans balancing dietary specifications, artistic presentation, and premium local ingredients.</p>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="editorial-card reveal-fade-up animation-delay-2">
            <div class="card-img-wrapper">
                <img class="card-img" src="c2.jpg" alt="Elite commercial catering culinary staff">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 5.0
                </div>
            </div>
            <div class="card-details">
                <h3 class="card-title" style="margin-bottom: 8px;">Professional Staff</h3>
                <p class="text-muted" style="font-size: 0.9rem; line-height: 1.6;">Deploying award-winning executive chefs, elegant dining stewards, experienced mixologists, and event hosts.</p>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="editorial-card reveal-fade-up animation-delay-3">
            <div class="card-img-wrapper">
                <img class="card-img" src="c3.jpg" alt="Artful event presentation and custom floral settings">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 4.8
                </div>
            </div>
            <div class="card-details">
                <h3 class="card-title" style="margin-bottom: 8px;">Artful Presentation</h3>
                <p class="text-muted" style="font-size: 0.9rem; line-height: 1.6;">Sophisticated table settings, custom botanical arrangements, and gorgeous atmospheric lighting for themed gatherings.</p>
            </div>
        </div>
    </div>
</section>

<!-- Camp Events Section (Split Asymmetric Layout with Outline Float) -->
<section class="section-padding" style="background-color: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container bento-showcase">
        <div class="bento-image-frame reveal-scale-in">
            <div class="bento-img-container">
                <img class="bento-img" src="c1.jpg" alt="Luxury glamping bell tents on beautiful green lawn">
            </div>
        </div>
        <div class="bento-text reveal-fade-up">
            <span class="uppercase-label" style="color: var(--color-blue);">Luxury Glamping</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">Premium Camp Event Management</h2>
            <p class="text-muted" style="font-size: 1.05rem; line-height: 1.8;">We design and deploy fully self-contained canvas camps, combining luxury boutique glamping, campfires, outdoor activities, and comprehensive site event management.</p>
            
            <ul class="bento-list" style="grid-template-columns: 1fr;">
                <li style="margin-bottom: 16px;">
                    <strong>Bespoke Camp Blueprints</strong>
                    <p class="text-muted" style="font-size: 0.9rem; margin-top: 4px;">Deluxe canvas bell tents, custom hardwood furniture, glowing lanterns, and gourmet dining structures set up to order.</p>
                </li>
                <li>
                    <strong>Activities &amp; Stewardship</strong>
                    <p class="text-muted" style="font-size: 0.9rem; margin-top: 4px;">Live music curation, outdoor dining tables, curated cocktail lounges, and professional overnight hosts.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Service Engagement Models (Luxury Pricing Card Redesign) -->
<section class="section-padding">
    <div class="container">
        <div class="editorial-title-block text-center reveal-fade-up">
            <span>Engagement Models</span>
            <h2>Bespoke Contracting</h2>
            <p class="text-muted" style="max-width: 600px; margin: 16px auto 0; font-size: 1.05rem;">Flexible contracting models compiled for private events, luxury glamping campouts, and large-scale corporate retreats.</p>
        </div>

        <div class="pricing-grid">
            <!-- Model 1 -->
            <div class="pricing-card reveal-fade-up animation-delay-1">
                <h3 class="card-title" style="font-size: 1.45rem;">Private Catering</h3>
                <p class="text-muted" style="font-size: 0.9rem; margin-top: 8px;">Bespoke dinner parties, family celebrations, or boardroom meetings.</p>
                <div class="pricing-price">Artisan</div>
                <ul class="pricing-features">
                    <li><span class="material-symbols-outlined">check_circle</span> Single-delivery kitchen setup</li>
                    <li><span class="material-symbols-outlined">check_circle</span> Custom menu outlines</li>
                    <li><span class="material-symbols-outlined">check_circle</span> Full service stewards on-site</li>
                </ul>
                <a href="contact.php" class="btn btn-secondary">Select Model</a>
            </div>

            <!-- Model 2: Highlight Card -->
            <div class="pricing-card highlighted reveal-fade-up animation-delay-2">
                <div class="pricing-badge">Most Popular</div>
                <h3 class="card-title" style="font-size: 1.45rem;">Camp Retreats</h3>
                <p class="text-muted" style="font-size: 0.9rem; margin-top: 8px;">Complete glamping events, outdoor corporate retreats, and camp festivals.</p>
                <div class="pricing-price" style="color: var(--color-red);">Bespoke Packages</div>
                <ul class="pricing-features">
                    <li><span class="material-symbols-outlined">verified</span> 24/7 On-site glamping stewards</li>
                    <li><span class="material-symbols-outlined">verified</span> Full gourmet catering menus</li>
                    <li><span class="material-symbols-outlined">verified</span> Curated event camp coordination</li>
                </ul>
                <a href="contact.php" class="btn btn-primary">Start Retreat Quote</a>
            </div>

            <!-- Model 3 -->
            <div class="pricing-card reveal-fade-up animation-delay-3">
                <h3 class="card-title" style="font-size: 1.45rem;">Mega Festivals</h3>
                <p class="text-muted" style="font-size: 0.9rem; margin-top: 8px;">Large scale outdoor concerts, public camps, or multi-day culinary events.</p>
                <div class="pricing-price">Enterprise</div>
                <ul class="pricing-features">
                    <li><span class="material-symbols-outlined">check_circle</span> Large scale open air kitchens</li>
                    <li><span class="material-symbols-outlined">check_circle</span> Full-scale event coordination</li>
                    <li><span class="material-symbols-outlined">check_circle</span> Custom stage and tent designs</li>
                </ul>
                <a href="contact.php" class="btn btn-secondary">Consult Directors</a>
            </div>
        </div>
    </div>
</section>

<!-- Conglomerate Integration section in Services -->
<section class="section-padding" style="background-color: var(--color-surface-soft); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container">
        <div class="editorial-title-block text-center reveal-fade-up">
            <span class="uppercase-label" style="color: var(--color-blue);">Conglomerate Synergy</span>
            <h2>Integrated Group Services</h2>
            <p class="text-muted" style="max-width: 650px; margin: 16px auto 0; font-size: 1.05rem;">To elevate our catering and events, the Primus Group harnesses proprietary divisions in real estate holdings, tailored financial backing, and general supply chains.</p>
        </div>

        <div class="divisions-grid" style="margin-top: 50px;">
            <!-- Real Estate -->
            <div class="division-card reveal-fade-up animation-delay-1" style="display: flex; flex-direction: column;">
                <div class="division-icon">
                    <span class="material-symbols-outlined">domain</span>
                </div>
                <h3>Real Estate &amp; Grounds</h3>
                <p>We own and lease exclusive landscapes, luxury glamping campsites, and residential properties to secure the perfect backdrop for your private retreats.</p>
                <ul style="list-style: none; margin: 0 0 24px; padding: 0; font-size: 0.9rem; color: var(--color-text-body);">
                    <li style="margin-bottom: 8px; display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--color-red);">check_circle</span> Private glamping meadows</li>
                    <li style="margin-bottom: 8px; display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--color-red);">check_circle</span> Luxury vacation holdings</li>
                    <li style="display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--color-red);">check_circle</span> Scenic event grounds leasing</li>
                </ul>
                <a href="real-estate.php" class="division-link" style="margin-top: auto;">Explore Division <span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>

            <!-- Financial Services -->
            <div class="division-card reveal-fade-up animation-delay-2" style="display: flex; flex-direction: column;">
                <div class="division-icon">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                </div>
                <h3>Financial Backing</h3>
                <p>We structure asset management, corporate event accounts, and tailored payment terms to allow seamless scaling of large multi-day festival structures.</p>
                <ul style="list-style: none; margin: 0 0 24px; padding: 0; font-size: 0.9rem; color: var(--color-text-body);">
                    <li style="margin-bottom: 8px; display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--color-red);">check_circle</span> Structured payment programs</li>
                    <li style="margin-bottom: 8px; display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--color-red);">check_circle</span> Corporate hospitality accounts</li>
                    <li style="display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="font-size: 16px; color: var(--color-red);">check_circle</span> Asset-backed event funding</li>
                </ul>
                <a href="financial-services.php" class="division-link" style="margin-top: auto;">Explore Division <span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>

            <!-- General Supplies -->
            <div class="division-card reveal-fade-up animation-delay-3" style="grid-column: span 2; display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                <div style="display: flex; flex-direction: column;">
                    <div class="division-icon">
                        <span class="material-symbols-outlined">local_shipping</span>
                    </div>
                    <h3>General Supplies &amp; Logistics</h3>
                    <p style="margin-bottom: 24px;">We run our own logistics and imports pipeline, distributing high-quality commercial kitchen supplies, canvas camp tents, food provisions, and custom gear.</p>
                    <a href="general-supplies.php" class="division-link" style="margin-top: auto;">Explore Division <span class="material-symbols-outlined">arrow_right_alt</span></a>
                </div>
                <div style="display: flex; flex-direction: column; justify-content: center; border-left: 1px solid var(--color-border); padding-left: 32px;">
                    <ul style="list-style: none; margin: 0; padding: 0; font-size: 0.95rem; color: var(--color-text-body);">
                        <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="color: var(--color-blue); font-size: 18px;">local_shipping</span> Heavy-duty canvas tent imports</li>
                        <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="color: var(--color-blue); font-size: 18px;">kitchen</span> Professional commercial kitchen gear</li>
                        <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="color: var(--color-blue); font-size: 18px;">shopping_cart</span> High-volume food provision lines</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span class="material-symbols-outlined" style="color: var(--color-blue); font-size: 18px;">forklift</span> Global operations camp logistics</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accordion Section -->
<section class="section-padding container reveal-fade-up" style="border-top: 1px solid var(--color-border);">
    <div class="editorial-title-block text-center">
        <span>FAQ Support</span>
        <h2>Frequently Asked Questions</h2>
    </div>

    <div class="faq-accordion">
        <details class="faq-item">
            <summary class="faq-summary">
                What is your timeline for camp event setup?
                <span class="material-symbols-outlined faq-icon">add</span>
            </summary>
            <div class="faq-content">
                For complete glamping camp events (including deluxe canvas bell tents, lounge areas, and outdoor kitchens), our typical mobilization time is 5 to 7 days depending on guest volume. Private catering can be coordinated within 48 hours.
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-summary">
                How do you handle dietary specifications?
                <span class="material-symbols-outlined faq-icon">add</span>
            </summary>
            <div class="faq-content">
                Our culinary directors work hand-in-hand with you to construct menus reflecting vegetarian, gluten-free, vegan, or keto preferences with high-end creative flavor profiles.
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-summary">
                Do you provide event decorations?
                <span class="material-symbols-outlined faq-icon">add</span>
            </summary>
            <div class="faq-content">
                Yes! Our camp event package includes beautiful rustic-luxury styling, ambient fairy lighting, custom floral centerpieces, and printed menus to create an unforgettable visual atmosphere.
            </div>
        </details>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
