<?php
/**
 * Primus Group Holdings
 * Financial Services Division - Harbor Street Redesign
 */

$pageTitle = 'Financial Services | Primus Group Holdings';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Centered atmospheric luxury Hero section with professional office setup background -->
<section class="hero-editorial">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(rgba(9, 13, 22, 0.45), rgba(9, 13, 22, 0.96)), url('f1.jpg'); transform: scale(1.03);"></div>
    </div>
    <div class="hero-centered-content reveal-fade-up">
        <span class="uppercase-label" style="color: var(--color-blue);">Bespoke Advisory</span>
        <h1 class="hero-title">Financial Services &amp; Advisory</h1>
        <p class="hero-subtitle">Providing flexible corporate asset backing, structured event credit lines, customized payment programs, and tailored capital advisory for large-scale hospitality operations.</p>
        <div class="hero-actions">
            <a href="contact.php" class="btn btn-primary">
                <span class="material-symbols-outlined" style="font-size: 18px;">account_balance_wallet</span>
                Consult Financial Officer
            </a>
            <a href="#solutions" class="btn btn-white-outline">
                <span class="material-symbols-outlined" style="font-size: 18px;">explore</span>
                Our Solutions
            </a>
        </div>
    </div>
    <div class="scroll-mouse"></div>
</section>

<!-- Financial Solutions Section -->
<section id="solutions" class="section-padding container">
    <div class="editorial-title-block text-center reveal-fade-up">
        <span class="uppercase-label" style="color: var(--color-blue);">Portfolios</span>
        <h2>Structured Corporate Solutions</h2>
        <p class="text-muted" style="max-width: 650px; margin: 16px auto 0; font-size: 1.05rem;">We offer bespoke institutional structures and payment backing designed to help corporate clients scale high-end experiences, camps, and logistics.</p>
    </div>

    <div class="editorial-grid">
        <!-- Solution 1 -->
        <div class="editorial-card reveal-fade-up animation-delay-1">
            <div class="card-img-wrapper">
                <img class="card-img" src="f1.jpg" alt="Active professional corporate accounts and audits desk">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 4.9
                </div>
            </div>
            <div class="card-details">
                <div class="card-title-row">
                    <h3 class="card-title">Corporate Accounts</h3>
                    <span class="card-price">Tailored</span>
                </div>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">Specialized multi-phase billing frameworks and corporate credit ledgers integrated directly with annual executive dining budgets.</p>
            </div>
        </div>

        <!-- Solution 2 -->
        <div class="editorial-card reveal-fade-up animation-delay-2">
            <div class="card-img-wrapper">
                <img class="card-img" src="f2.jpg" alt="Corporate banking and asset advisory session">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 5.0
                </div>
            </div>
            <div class="card-details">
                <div class="card-title-row">
                    <h3 class="card-title">Capital Backing</h3>
                    <span class="card-price">Advisory</span>
                </div>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">Providing robust asset management programs, investment structuring, and direct liquidity backing for large-scale operations.</p>
            </div>
        </div>

        <!-- Solution 3 -->
        <div class="editorial-card reveal-fade-up animation-delay-3">
            <div class="card-img-wrapper">
                <img class="card-img" src="f3.jpg" alt="Commercial credit and payment setups">
                <div class="rating-badge">
                    <span class="star">&#9733;</span> 4.8
                </div>
            </div>
            <div class="card-details">
                <div class="card-title-row">
                    <h3 class="card-title">Event Credit Lines</h3>
                    <span class="card-price">Flex</span>
                </div>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">Customizable revolving lines of credit and flexible funding backing designed to cover heavy camp logistics and upfront setups for public festivals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Financial Integrity & Compliance details -->
<section class="section-padding" style="background-color: var(--color-surface); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container bento-showcase">
        <!-- Left Column: Content -->
        <div class="bento-text reveal-fade-up">
            <span class="uppercase-label" style="color: var(--color-blue);">Institutional backing</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">Audited Security &amp; Asset Protection</h2>
            <p class="text-muted" style="font-size: 1.05rem; line-height: 1.8;">Our corporate financial officers bring decades of combined advisory experience to ensure total compliance, fiscal transparency, and highly-optimized asset alignment for your corporate expenditures.</p>
            
            <ul class="bento-list">
                <li>
                    <strong>Fiscal Transparency</strong>
                    <p class="text-muted">Rigorous, multi-tier auditing ledgers and detailed real-time corporate cost breakdown portals.</p>
                </li>
                <li>
                    <strong>Compliance &amp; Reporting</strong>
                    <p class="text-muted">Fully integrated, tax-compliant documentation designed to streamline corporate accounting passes.</p>
                </li>
                <li>
                    <strong>Risk Assessment Frameworks</strong>
                    <p class="text-muted">Proactive operational and logistic threat models ensuring balanced, secure funding channels.</p>
                </li>
                <li>
                    <strong>Integrated Group Support</strong>
                    <p class="text-muted">Direct financial linkages to secure property holdings and bulk logistics supplies instantly.</p>
                </li>
            </ul>
        </div>

        <!-- Right Column: Image with floating badge -->
        <div class="bento-image-frame reveal-scale-in">
            <div class="bento-img-container">
                <img class="bento-img" src="f2.jpg" alt="Active professional office operations">
            </div>
            <div class="bento-floating-badge">
                <div class="badge-heart-icon">
                    <span class="material-symbols-outlined">shield</span>
                </div>
                <div>
                    <span class="badge-text-val">100%</span>
                    <span class="badge-text-lbl">Audited &amp; Compliant</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="section-padding container text-center reveal-fade-up">
    <div class="info-card" style="padding: 60px 40px; border-radius: 24px; max-width: 900px; margin: 0 auto; background-color: var(--color-surface-soft);">
        <span class="uppercase-label" style="color: var(--color-red); margin-bottom: 12px; display: inline-block;">Consult Our Analysts</span>
        <h2 style="font-size: 2.1rem; margin-bottom: 16px;">Leverage In-House Capital Backing Today</h2>
        <p class="text-muted" style="max-width: 600px; margin: 0 auto 32px; font-size: 1.05rem;">Connect with our financial advisors today to set up corporate client accounts, explore credit options, and customize payment solutions.</p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="contact.php?interest=Financial%20Services" class="btn btn-primary">Schedule Consultation</a>
            <a href="tel:0202017681" class="btn btn-secondary">Call Finance Desk</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
