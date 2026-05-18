<?php
/**
 * Primus Catering & Camp Management
 * Home Page - Pinterest Design Overhaul
 */

// Initialize configuration and database connection
require_once __DIR__ . '/includes/config.php';

$successMsg = '';
$errorMsg = '';

// Handle Direct Inquiry Post Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitizeInput($_POST['name'] ?? '');
    $company = sanitizeInput($_POST['company'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $service = sanitizeInput($_POST['service'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($service)) {
        $errorMsg = 'Please fill out all required fields (*).';
    } else {
        if ($pdo === null) {
            $errorMsg = 'Database connection is currently offline: ' . ($db_error ?? 'Unknown connection error.');
        } else {
            try {
                $stmt = $pdo->prepare("INSERT INTO inquiries (name, company, email, phone, service, message) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$name, $company, $email, $phone, $service, $message]);
                $successMsg = 'Inquiry submitted successfully! A representative will contact you shortly.';
            } catch (PDOException $e) {
                $errorMsg = 'Database error: ' . $e->getMessage();
            }
        }
    }

    // Modern AJAX Response Support
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        header('Content-Type: application/json');
        if (!empty($errorMsg)) {
            echo json_encode(['status' => 'error', 'message' => $errorMsg]);
        } else {
            echo json_encode(['status' => 'success', 'message' => $successMsg]);
        }
        exit;
    }
}

$pageTitle = 'Home | Primus Catering & Camp Management';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Centered Luxury Hero Section (Pinterest Inspo Overhaul) -->
<section class="hero-asymmetric" id="home">
    <div class="container" style="text-align: center;">
        <div class="hero-block-centered reveal-fade-up">
            <!-- Center Typography Grid -->
            <div class="hero-text-centered">
                <span class="hero-subtitle-caps centered-caps">EXCELLENCE // REIMAGINED</span>
                <h1 class="hero-heading-serif centered-title">Catering &amp; Camp Management</h1>
                <p class="hero-desc-para centered-desc">
                    Michelin-class culinary catering and luxury base-camp operations, delivered with absolute precision.
                </p>
                <div class="hero-actions-row centered-actions">
                    <a href="#contact" class="btn-pill">Inquire Now</a>
                    <a href="#services" class="btn-pill btn-pill-outline">Our Focus</a>
                </div>
            </div>

            <!-- Massive Rounded Image Showcase (Multiple Image Crossfader) -->
            <div class="hero-img-showcase">
                <div class="hero-slide-wrapper">
                    <div class="hero-slide-img active" style="background-image: url('c1.jpg');" aria-label="Luxury Base Camp Glamping Retreats"></div>
                    <div class="hero-slide-img" style="background-image: url('c2.jpg');" aria-label="Michelin Class Dining Banquets"></div>
                    <div class="hero-slide-img" style="background-image: url('c3.jpg');" aria-label="Gourmet Culinary Operations"></div>
                    <div class="hero-slide-img" style="background-image: url('c4.jpg');" aria-label="Michelin-Class Plated Entrées"></div>
                    <div class="hero-slide-img" style="background-image: url('c5.jpg');" aria-label="Gourmet Dessert & Presentation Operations"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Alternating Asymmetric Services Section -->
<section class="section-padding services-section" id="services">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header text-center reveal-fade-up" style="margin-bottom: 80px;">
            <span class="section-subtitle-pill">OUR CORE SPECIALIZATIONS</span>
            <h2 class="section-title" style="font-family: var(--font-serif); font-size: 2.5rem;">Focused Expertise</h2>
            <p class="section-desc" style="max-width: 600px; margin: 12px auto 0;">
                By focusing our assets entirely on high-end catering and managed camp retreats, we deliver impeccable, distraction-free corporate stewardship.
            </p>
        </div>

        <!-- Services Alternating Layout -->
        <div class="services-layout-grid">
            
            <!-- Service Block 1: Culinary Catering -->
            <div class="service-row-asymmetric reveal-fade-up">
                <!-- Left Text Column -->
                <div class="service-text-card">
                    <h3 class="service-row-title-serif">Michelin-Class Culinary Catering</h3>
                    <p class="service-row-desc-para">
                        Bespoke menu planning, fine boardroom dining, executive banquets, and high-yield corporate event culinary solutions engineered to perfection.
                    </p>
                    <ul class="service-bullets-list">
                        <li>
                            <span class="bullet">&#9679;</span>
                            Executive Boardroom Banquets
                        </li>
                        <li>
                            <span class="bullet">&#9679;</span>
                            Artisanal Custom Menu Architecture
                        </li>
                        <li>
                            <span class="bullet">&#9679;</span>
                            Michelin-Caliber Culinary Stewards
                        </li>
                    </ul>
                    <div class="service-actions-inline">
                        <a href="#contact" class="btn-pill">Explore Menu</a>
                        <a href="#contact" class="service-arrow-link">
                            Consult Specialist
                            <span class="material-symbols-outlined" style="font-size: 16px;">arrow_right_alt</span>
                        </a>
                    </div>
                </div>
                <!-- Right Image Column (Floating Card Frame from Pinterest) -->
                <div class="service-image-float-wrapper">
                    <img class="service-image-float" src="c2.jpg" alt="Premium gourmet culinary presentation">
                </div>
            </div>

            <!-- Service Block 2: Luxury Camp Operations (Swapped Columns) -->
            <div class="service-row-asymmetric swapped reveal-fade-up">
                <!-- Left Image Column (Floating Card Frame from Pinterest) -->
                <div class="service-image-float-wrapper">
                    <img class="service-image-float" src="c1.jpg" alt="Premium luxury base-camp glamping retreat">
                </div>
                <!-- Right Text Column -->
                <div class="service-text-card">
                    <h3 class="service-row-title-serif">Luxury Base-Camps &amp; Managed Retreats</h3>
                    <p class="service-row-desc-para">
                        Complete canvas glamping retreat deployments, scenic ground leasing, heavy canvas camp gear imports, and comprehensive wilderness hospitality.
                    </p>
                    <ul class="service-bullets-list">
                        <li>
                            <span class="bullet">&#9679;</span>
                            Premium Wilderness Glamping Retreats
                        </li>
                        <li>
                            <span class="bullet">&#9679;</span>
                            Full-Scale Base-Camp Deployments &amp; Logistics
                        </li>
                        <li>
                            <span class="bullet">&#9679;</span>
                            Complete High-End Hospitality Coordinators
                        </li>
                    </ul>
                    <div class="service-actions-inline">
                        <a href="#contact" class="btn-pill">Request Quote</a>
                        <a href="#contact" class="service-arrow-link">
                            Plan Retreat
                            <span class="material-symbols-outlined" style="font-size: 16px;">arrow_right_alt</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Inquiry & Connection Section (Pinterest Banner Style) -->
<section class="section-padding connection-banner-section" id="contact">
    <div class="container">
        <div class="connection-banner-content">
            <span class="hero-subtitle-caps" style="margin-bottom: 16px;">DIRECT CORRESPONDENCE</span>
            <h2 class="connection-banner-title-serif">Initiate Your Experience</h2>
            <p class="connection-banner-desc-para">
                Whether staging an executive corporate boardroom retreat or a gourmet banquet, get in touch with our division coordinators to secure dates and design bespoke options.
            </p>

            <!-- Minimalist Form Card Container -->
            <div class="minimalist-form-card reveal-fade-up">
                <form action="#contact" method="POST" id="inquiryForm">
                    <div class="form-grid-row">
                        <div class="form-field-group">
                            <label for="name">Your Name *</label>
                            <input type="text" name="name" id="name" required placeholder="e.g., John Doe" class="form-field-input">
                        </div>
                        <div class="form-field-group">
                            <label for="company">Company Name</label>
                            <input type="text" name="company" id="company" placeholder="e.g., Corp Inc" class="form-field-input">
                        </div>
                    </div>

                    <div class="form-grid-row">
                        <div class="form-field-group">
                            <label for="email">Email Address *</label>
                            <input type="email" name="email" id="email" required placeholder="e.g., john@company.com" class="form-field-input">
                        </div>
                        <div class="form-field-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="e.g., +233..." class="form-field-input">
                        </div>
                    </div>

                    <div class="form-field-group">
                        <label for="service">Service of Interest *</label>
                        <select name="service" id="service" required class="form-field-input">
                            <option value="">-- SELECT A SERVICE DIVISION --</option>
                            <option value="catering">Michelin-Class Culinary Catering</option>
                            <option value="camps">Luxury Base-Camps &amp; Managed Retreats</option>
                            <option value="both">Both Catering &amp; Camp Operations</option>
                        </select>
                    </div>

                    <div class="form-field-group" style="margin-bottom: 32px;">
                        <label for="message">Your Specifications</label>
                        <textarea name="message" id="message" rows="4" placeholder="Specify your venue requirements, guest capacity, or camp logistics needs..." class="form-field-input"></textarea>
                    </div>

                    <button type="submit" class="form-submit-pill-btn">Submit Inquiry</button>
                </form>

                <!-- Inline PHP Status Alerts -->
                <?php if (!empty($successMsg)): ?>
                    <div class="status-dialog-box status-dialog-success">
                        ✓ <?php echo htmlspecialchars($successMsg); ?>
                    </div>
                <?php elseif (!empty($errorMsg)): ?>
                    <div class="status-dialog-box status-dialog-error">
                        ✗ <?php echo htmlspecialchars($errorMsg); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Rebuilt Premium Inquiry Success Modal -->
<div id="inquiryModal" class="modal-overlay" aria-hidden="true">
    <div class="modal-card">
        <div class="modal-icon-container">
            <span class="material-symbols-outlined modal-success-icon">task_alt</span>
        </div>
        <h3 class="modal-title-serif">Inquiry Transmitted</h3>
        <p class="modal-desc-para" id="modalMessage">
            Your specifications have been safely logged in our administrative portal. A division steward will contact you shortly.
        </p>
        <button type="button" class="btn-pill modal-close-btn" id="closeModalBtn">Acknowledge</button>
    </div>
</div>

<?php if (!empty($successMsg)): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('inquiryModal');
        const modalMsg = document.getElementById('modalMessage');
        if (modal) {
            modalMsg.textContent = <?php echo json_encode($successMsg); ?>;
            modal.classList.add('active');
            
            // Close button control
            const closeBtn = document.getElementById('closeModalBtn');
            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    modal.classList.remove('active');
                });
            }
        }
    });
</script>
<?php endif; ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
