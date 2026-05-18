<?php
/**
 * Primus Catering & Event Management
 * Contact & Support Intake - Harbor Street Redesign
 */

$pageTitle = 'Contact Us | Primus Catering & Event Management';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Centered atmospheric luxury Hero section -->
<section class="hero-editorial">
    <div class="hero-centered-content reveal-fade-up">
        <span class="uppercase-label">Support Desk</span>
        <h1 class="hero-title">Coordinate With Primus</h1>
        <p class="hero-subtitle">Request high-end corporate executive banquet menus or schedule a luxury glamping retreat and outdoor camp event setup.</p>
        <div class="hero-actions">
            <a href="#inquiry-form" class="btn btn-primary">
                <span class="material-symbols-outlined" style="font-size: 18px;">mail</span>
                Send Message
            </a>
            <a href="tel:0244877012" class="btn btn-white-outline">
                <span class="material-symbols-outlined" style="font-size: 18px;">call</span>
                0244877012 / 0202017681
            </a>
        </div>
    </div>
    <!-- Animated scroll mouse down indicator -->
    <div class="scroll-mouse"></div>
</section>

<!-- Form & Sidebar Layout Section -->
<section class="section-padding container" id="inquiry-form">
    <div class="contact-grid">
        <!-- Left Column: Glowing Form Wrapper -->
        <div class="form-wrapper reveal-fade-up">
            <h2 class="form-title">Service Inquiry Form</h2>
            
            <!-- Real-Time Session Status Alerts -->
            <?php if (isset($_SESSION['status'])): ?>
                <div class="form-status form-status-<?php echo $_SESSION['status'] === 'success' ? 'success' : 'error'; ?>">
                    <?php 
                        echo htmlspecialchars($_SESSION['message']); 
                        unset($_SESSION['status']);
                        unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="submit-inquiry.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="company" class="form-label">Company Name</label>
                        <input type="text" id="company" name="company" class="form-control" placeholder="Luxury Corporate Events LLC">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="0244877012 / 0202017681">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="j.doe@example.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="service" class="form-label">Service Interest *</label>
                    <select id="service" name="service" class="form-control" required style="appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23ff7c3b%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22/%3E%3C/svg%3E'); background-repeat: no-repeat; background-position: right 18px top 50%; background-size: 12px auto; padding-right: 40px;">
                        <option value="Corporate Dining">Corporate Dining</option>
                        <option value="Camp Event Retreats">Camp Event Retreats &amp; Glamping</option>
                        <option value="Bespoke Catering">Bespoke Catering &amp; Banquets</option>
                        <option value="Festival Planning">Festival &amp; Celebration Coordination</option>
                        <option value="Real Estate">Real Estate &amp; Glamping Venues</option>
                        <option value="Financial Services">Financial Backing &amp; Asset Management</option>
                        <option value="General Supplies">General Supplies &amp; Provisions</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Message Details</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Describe your event, number of guests, location, styling preferences, and culinary wishes..." rows="5"></textarea>
                </div>

                <div style="margin-top: 32px;">
                    <button type="submit" class="btn btn-primary" style="width: 100%; letter-spacing: 0.15em;">
                        Submit Event Inquiry
                    </button>
                </div>
            </form>
        </div>

        <!-- Right Column: Sidebar Blocks exactly like reference screenshots -->
        <div class="contact-sidebar reveal-fade-up animation-delay-2">
            
            <!-- Address Panel -->
            <div class="info-card">
                <div class="info-item">
                    <span class="material-symbols-outlined info-icon">location_on</span>
                    <div class="info-text">
                        <h4>Address</h4>
                        <p>82 Ironwood Drive,<br>Boulder County, CO 80301</p>
                    </div>
                </div>
            </div>

            <!-- Business Hours Panel -->
            <div class="info-card">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                    <span class="material-symbols-outlined info-icon">schedule</span>
                    <h4 style="font-family: var(--font-serif); font-size: 1.25rem; color: var(--color-text-title);">Opening Hours</h4>
                </div>
                <ul class="hours-list">
                    <li>
                        <span>Monday - Thursday</span>
                        <strong>11:00 AM - 10:00 PM</strong>
                    </li>
                    <li>
                        <span>Friday - Saturday</span>
                        <strong>11:00 AM - 11:00 PM</strong>
                    </li>
                    <li>
                        <span>Sunday</span>
                        <strong>10:00 AM - 9:00 PM</strong>
                    </li>
                </ul>
            </div>

            <!-- Amenities/Credentials Panel -->
            <div class="info-card">
                <h4 style="font-family: var(--font-serif); font-size: 1.25rem; color: var(--color-text-title); margin-bottom: 24px;">Amenities &amp; Standards</h4>
                <ul class="bento-list" style="margin-top: 0; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <li style="flex-direction: row; align-items: center; gap: 8px;">
                        <span class="material-symbols-outlined" style="color: var(--color-red); font-size: 16px;">check_circle</span>
                        <span style="font-size: 0.85rem; color: var(--color-text-body);">Free Consult</span>
                    </li>
                    <li style="flex-direction: row; align-items: center; gap: 8px;">
                        <span class="material-symbols-outlined" style="color: var(--color-red); font-size: 16px;">check_circle</span>
                        <span style="font-size: 0.85rem; color: var(--color-text-body);">Curated Themes</span>
                    </li>
                    <li style="flex-direction: row; align-items: center; gap: 8px;">
                        <span class="material-symbols-outlined" style="color: var(--color-red); font-size: 16px;">check_circle</span>
                        <span style="font-size: 0.85rem; color: var(--color-text-body);">Premium Service</span>
                    </li>
                    <li style="flex-direction: row; align-items: center; gap: 8px;">
                        <span class="material-symbols-outlined" style="color: var(--color-red); font-size: 16px;">check_circle</span>
                        <span style="font-size: 0.85rem; color: var(--color-text-body);">Custom Menus</span>
                    </li>
                </ul>
            </div>

            <!-- Rounded Roadmap Card -->
            <div class="map-card">
                <img class="map-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvtGl3egXAw0Dyn7hs14X3Fd-_hQXiO6Ex9n366LuByC437G_8U-bvQc8KgCEmCWFckjlA7hEpTfy5pSRKwsbg-rNTTWjyVvxjFUhyR4_SIe3sgxH8Hi86ONdHEMQNMgAtLPW0GZSUHyyvMIQu-z1zpGsO0aIbhmhoKLtIbVMCjGsoj8ohTPGh2J5W_iw_HqnFoQoHPu5cP0e1ez9wnXsnnsHrA2CDcASCh4MBAObF-ypfFhH_ezFGC5sNt62DBIsuYGgBbSAir7Ey" alt="Roadmap grid of Boulder County, CO HQ">
                <div class="map-badge">
                    <h5>Primus HQ</h5>
                    <p>Boulder County, CO</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Verification Alliance Badge Section -->
<section class="section-padding reveal-fade-up" style="background-color: var(--color-surface); border-top: 1px solid var(--color-border);">
    <div class="container text-center">
        <span class="uppercase-label" style="color: var(--color-blue);">Alliances</span>
        <h2 style="font-size: 2.2rem; margin-bottom: 48px;">High-End Industry Credentials</h2>
        
        <div class="editorial-grid" style="max-width: 900px; margin: 0 auto;">
            <div class="editorial-card" style="padding: 32px; text-align: center; border-radius: 12px; box-shadow: none;">
                <span class="material-symbols-outlined" style="font-size: 32px; color: var(--color-blue); margin-bottom: 12px; display: block;">restaurant</span>
                <strong style="color: var(--color-text-title); display: block; font-family: var(--font-serif); font-size: 1.15rem; margin-bottom: 6px;">National Culinary &amp; Catering Association</strong>
                <p class="text-muted" style="font-size: 0.8rem;">MEMBER SINCE 2012</p>
            </div>
            
            <div class="editorial-card" style="padding: 32px; text-align: center; border-radius: 12px; box-shadow: none;">
                <span class="material-symbols-outlined" style="font-size: 32px; color: var(--color-blue); margin-bottom: 12px; display: block;">workspace_premium</span>
                <strong style="color: var(--color-text-title); display: block; font-family: var(--font-serif); font-size: 1.15rem; margin-bottom: 6px;">Five-Star Outdoor Hospitality Award</strong>
                <p class="text-muted" style="font-size: 0.8rem;">EXCELLENCE ASSURED</p>
            </div>

            <div class="editorial-card" style="padding: 32px; text-align: center; border-radius: 12px; box-shadow: none;">
                <span class="material-symbols-outlined" style="font-size: 32px; color: var(--color-blue); margin-bottom: 12px; display: block;">celebration</span>
                <strong style="color: var(--color-text-title); display: block; font-family: var(--font-serif); font-size: 1.15rem; margin-bottom: 6px;">Professional Event Organizers Alliance</strong>
                <p class="text-muted" style="font-size: 0.8rem;">EXQUISITE SCENIC CELEBRATIONS</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
