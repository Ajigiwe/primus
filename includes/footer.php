<?php
/**
 * Primus Catering & Event Management
 * Shared Footer Template - Harbor Street Redesign
 */
?>
    <!-- Global Footer -->
    <footer class="site-footer">
        <div class="container footer-grid">
            <!-- Brand Section -->
            <div class="footer-brand">
                <a href="index.php" style="display: inline-block; margin-bottom: 20px;">
                    <img src="logo.png" alt="Primus Catering &amp; Event Management" class="brand-logo-img">
                </a>
                <p>Delivering elite culinary hospitality, bespoke catering services, and premium camp event management for corporate and private gatherings.</p>
                <div class="footer-socials">
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <span class="material-symbols-outlined" style="font-size: 18px;">share</span>
                    </a>
                    <a href="#" class="social-link" aria-label="HQ Website">
                        <span class="material-symbols-outlined" style="font-size: 18px;">public</span>
                    </a>
                    <a href="#" class="social-link" aria-label="Mail Support">
                        <span class="material-symbols-outlined" style="font-size: 18px;">mail</span>
                    </a>
                </div>
            </div>

            <!-- Sitemap Sitemap -->
            <div class="footer-column">
                <h4>Sitemap</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact &amp; Support</a></li>
                </ul>
            </div>

            <!-- Corporate Group Divisions -->
            <div class="footer-column">
                <h4>Group Divisions</h4>
                <ul class="footer-links">
                    <li><a href="services.php">Catering &amp; Camp Events</a></li>
                    <li><a href="real-estate.php">Real Estate &amp; Venues</a></li>
                    <li><a href="financial-services.php">Financial Services</a></li>
                    <li><a href="general-supplies.php">General Supplies &amp; Logistics</a></li>
                </ul>
            </div>

            <!-- Contact HQ Details -->
            <div class="footer-column">
                <h4>Operations HQ</h4>
                <ul class="footer-links" style="font-size: 0.95rem;">
                    <li style="margin-bottom: 12px; display: flex; align-items: flex-start; gap: 8px;">
                        <span class="material-symbols-outlined" style="color: var(--color-red); font-size: 18px; margin-top: 3px;">location_on</span>
                        <span>82 Ironwood Drive,<br>Boulder County, CO</span>
                    </li>
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                        <span class="material-symbols-outlined" style="color: var(--color-red); font-size: 18px;">call</span>
                        <span>0244877012 / 0202017681</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 8px;">
                        <span class="material-symbols-outlined" style="color: var(--color-red); font-size: 18px;">mail</span>
                        <span>primusdmn@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Panel -->
        <div class="container footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Primus Catering &amp; Event Management. All rights reserved.</p>
        </div>
    </footer>

    <!-- Interactive Navigation Menu & Theme Toggling Controls -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ==========================================
            // 1. Mobile Menu Drawer Toggle Controller
            // ==========================================
            const toggleBtn = document.getElementById('mobile-toggle');
            const navMenu = document.getElementById('nav-menu');

            if (toggleBtn && navMenu) {
                toggleBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleBtn.classList.toggle('active');
                    navMenu.classList.toggle('open');
                });

                document.addEventListener('click', function(e) {
                    if (!navMenu.contains(e.target) && !toggleBtn.contains(e.target)) {
                        toggleBtn.classList.remove('active');
                        navMenu.classList.remove('open');
                    }
                });
            }

            // ==========================================
            // 2. High-Performance Theme Toggle Controller
            // ==========================================
            const themeBtn = document.getElementById('theme-toggle');
            const toggleIcon = document.getElementById('toggle-icon');

            if (themeBtn && toggleIcon) {
                // Initialize the toggle button icon on load
                const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
                toggleIcon.textContent = currentTheme === 'light' ? 'dark_mode' : 'light_mode';

                // Add dynamic click listeners
                themeBtn.addEventListener('click', function() {
                    const activeTheme = document.documentElement.getAttribute('data-theme') || 'dark';
                    let nextTheme = 'dark';
                    
                    if (activeTheme === 'dark') {
                        nextTheme = 'light';
                        toggleIcon.textContent = 'dark_mode';
                    } else {
                        nextTheme = 'dark';
                        toggleIcon.textContent = 'light_mode';
                    }

                    document.documentElement.setAttribute('data-theme', nextTheme);
                    localStorage.setItem('theme', nextTheme);
                });
            }

            // ==========================================
            // 3. High-End Atmospheric Hero Slider Controller
            // ==========================================
            const slides = document.querySelectorAll('.hero-slide');
            if (slides.length > 1) {
                let currentSlideIndex = 0;
                
                setInterval(function() {
                    // Remove active status from current slide
                    const prevSlide = slides[currentSlideIndex];
                    prevSlide.classList.remove('active');
                    
                    // Update index
                    currentSlideIndex = (currentSlideIndex + 1) % slides.length;
                    
                    // Add active class to next slide
                    slides[currentSlideIndex].classList.add('active');
                }, 5000); // Transitions every 5 seconds
            }
        });
    </script>
</body>
</html>
