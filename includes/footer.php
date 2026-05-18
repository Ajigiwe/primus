<?php
/**
 * Primus Catering & Camp Management
 * Shared Footer Template - Cream Multi-Column Layout
 */
?>
    <!-- Global Footer -->
    <footer class="site-footer-cream">
        <div class="container">
            <div class="footer-top-row">
                <!-- Column 1: Brand -->
                <div style="text-align: left;">
                    <a href="#home" style="display: inline-block; margin-bottom: 20px;">
                        <img src="logo.png" alt="Primus logo" class="brand-logo-img" style="height: 40px;">
                    </a>
                    <p style="font-size: 0.88rem; color: var(--color-text-body); line-height: 1.7;">
                        Primus Catering &amp; Camp Management delivers michelin-class culinary hospitality, executive boardroom banquets, and luxury glamping wilderness retreats with absolute precision.
                    </p>
                </div>

                <!-- Column 2: Sitemap -->
                <div>
                    <h4 class="footer-column-heading">Sitemap</h4>
                    <ul class="footer-links-list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services Focus</a></li>
                        <li><a href="#contact">Inquire Now</a></li>
                    </ul>
                </div>

                <!-- Column 3: Correspondence Info -->
                <div>
                    <h4 class="footer-column-heading">HQ Address</h4>
                    <ul class="footer-links-list" style="color: var(--color-text-body);">
                        <li style="margin-bottom: 8px;">82 Ironwood Drive,<br>Boulder County, CO</li>
                        <li style="margin-bottom: 8px;"><strong>Call:</strong> 0244877012 / 0202017681</li>
                        <li><strong>Mail:</strong> primusdmn@gmail.com</li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom Row -->
            <div class="footer-bottom-row">
                <p>&copy; <?php echo date('Y'); ?> Primus Catering &amp; Camp Management. All rights reserved. <a href="admin-inquiries.php" style="opacity: 0.15; text-decoration: none; margin-left: 8px;" title="Administrative Inquiries Portal">🔑</a></p>
                <div style="display: flex; gap: 24px;">
                    <a href="#home">Home</a>
                    <a href="#services">Services</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Navigation Menu & Drawer Controls -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ==========================================
            // 1. Mobile Menu Drawer Toggle Controller
            // ==========================================
            const toggleBtn = document.getElementById('mobile-toggle');
            const navMenu = document.getElementById('nav-menu');
            const navLinks = document.querySelectorAll('.nav-link');

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

                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        toggleBtn.classList.remove('active');
                        navMenu.classList.remove('open');
                    });
                });
            }

            // ==========================================
            // 2. Scroll Spy Navigation Highlight
            // ==========================================
            const sections = document.querySelectorAll('section[id], header[id]');
            
            function handleScrollHighlight() {
                const scrollY = window.pageYOffset;
                
                sections.forEach(current => {
                    const sectionHeight = current.offsetHeight;
                    const sectionTop = current.offsetTop - 140;
                    const sectionId = current.getAttribute('id');
                    const targetLink = document.querySelector(`.nav-menu a[href*=${sectionId}]`);
                    
                    if (targetLink) {
                        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                            targetLink.classList.add('active-nav-link');
                        } else {
                            targetLink.classList.remove('active-nav-link');
                        }
                    }
                });
            }

            window.addEventListener('scroll', handleScrollHighlight);
            handleScrollHighlight(); // Trigger immediately to highlight initial view

            // ==========================================
            // 3. Asymmetric Hero Slider Crossfader
            // ==========================================
            const slides = document.querySelectorAll('.hero-slide-img');
            if (slides.length > 0) {
                let currentSlide = 0;
                setInterval(() => {
                    slides[currentSlide].classList.remove('active');
                    currentSlide = (currentSlide + 1) % slides.length;
                    slides[currentSlide].classList.add('active');
                }, 5000); // Crossfade every 5 seconds
            }

            // ==========================================
            // 4. Premium AJAX Form Submission Controller
            // ==========================================
            const inquiryForm = document.getElementById('inquiryForm');
            if (inquiryForm) {
                inquiryForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const submitBtn = inquiryForm.querySelector('.form-submit-pill-btn');
                    const originalBtnText = submitBtn.textContent;
                    
                    // Show premium loading state
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'TRANSMITTING...';
                    submitBtn.style.opacity = '0.7';
                    
                    // Remove any existing inline status dialog boxes
                    const existingAlerts = inquiryForm.parentNode.querySelectorAll('.status-dialog-box');
                    existingAlerts.forEach(alert => alert.remove());
                    
                    const formData = new FormData(inquiryForm);
                    
                    fetch('index.php', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Re-enable submit button
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalBtnText;
                        submitBtn.style.opacity = '1';
                        
                        if (data.status === 'success') {
                            // Trigger the beautiful success modal pop-up
                            const modal = document.getElementById('inquiryModal');
                            const modalMsg = document.getElementById('modalMessage');
                            if (modal) {
                                if (modalMsg) {
                                    modalMsg.textContent = data.message;
                                }
                                modal.classList.add('active');
                                
                                // Close button interactive control
                                const closeBtn = document.getElementById('closeModalBtn');
                                if (closeBtn) {
                                    closeBtn.onclick = function() {
                                        modal.classList.remove('active');
                                    };
                                }
                            }
                            
                            // Reset form fields cleanly
                            inquiryForm.reset();
                        } else {
                            // Create a beautiful animated error alert card inline
                            const alertDiv = document.createElement('div');
                            alertDiv.className = 'status-dialog-box status-dialog-error';
                            alertDiv.style.opacity = '0';
                            alertDiv.style.transform = 'translateY(10px)';
                            alertDiv.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                            alertDiv.style.marginTop = '24px';
                            alertDiv.style.padding = '16px 20px';
                            alertDiv.style.borderRadius = '12px';
                            alertDiv.style.fontSize = '0.88rem';
                            alertDiv.style.fontWeight = '600';
                            alertDiv.style.textAlign = 'center';
                            alertDiv.style.backgroundColor = 'rgba(239, 68, 68, 0.08)';
                            alertDiv.style.color = '#ef4444';
                            alertDiv.style.border = '1px solid rgba(239, 68, 68, 0.2)';
                            alertDiv.textContent = '✗ ' + data.message;
                            
                            inquiryForm.parentNode.appendChild(alertDiv);
                            
                            // Smooth fade-in animation
                            setTimeout(() => {
                                alertDiv.style.opacity = '1';
                                alertDiv.style.transform = 'translateY(0)';
                            }, 50);
                        }
                    })
                    .catch(error => {
                        // Re-enable submit button
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalBtnText;
                        submitBtn.style.opacity = '1';
                        
                        // Create a beautiful error alert
                        const alertDiv = document.createElement('div');
                        alertDiv.className = 'status-dialog-box status-dialog-error';
                        alertDiv.style.marginTop = '24px';
                        alertDiv.style.padding = '16px 20px';
                        alertDiv.style.borderRadius = '12px';
                        alertDiv.style.fontSize = '0.88rem';
                        alertDiv.style.fontWeight = '600';
                        alertDiv.style.textAlign = 'center';
                        alertDiv.style.backgroundColor = 'rgba(239, 68, 68, 0.08)';
                        alertDiv.style.color = '#ef4444';
                        alertDiv.style.border = '1px solid rgba(239, 68, 68, 0.2)';
                        alertDiv.style.opacity = '0';
                        alertDiv.style.transform = 'translateY(10px)';
                        alertDiv.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                        
                        alertDiv.textContent = '✗ Transmission error. Please try again.';
                        inquiryForm.parentNode.appendChild(alertDiv);
                        
                        setTimeout(() => {
                            alertDiv.style.opacity = '1';
                            alertDiv.style.transform = 'translateY(0)';
                        }, 50);
                    });
                });
            }

            // ==========================================
            // 5. Premium Custom Select Dropdown Parser
            // ==========================================
            const nativeSelects = document.querySelectorAll('select');
            nativeSelects.forEach(select => {
                if (select.classList.contains('form-field-input-select-hidden')) return;

                // Hide the native select cleanly
                select.classList.add('form-field-input-select-hidden');

                // Create custom container
                const container = document.createElement('div');
                container.className = 'custom-select-container';

                // Create custom trigger
                const trigger = document.createElement('div');
                trigger.className = 'custom-select-trigger';
                
                const triggerText = document.createElement('span');
                triggerText.className = 'custom-select-trigger-text';
                
                const selectedOption = select.options[select.selectedIndex];
                triggerText.textContent = selectedOption ? selectedOption.textContent : '-- SELECT AN OPTION --';
                
                const arrow = document.createElement('span');
                arrow.className = 'material-symbols-outlined custom-select-arrow';
                arrow.textContent = 'expand_more';

                trigger.appendChild(triggerText);
                trigger.appendChild(arrow);
                container.appendChild(trigger);

                // Create options box
                const optionsBox = document.createElement('div');
                optionsBox.className = 'custom-select-options-box';

                // Populate option items
                Array.from(select.options).forEach((opt, idx) => {
                    const optDiv = document.createElement('div');
                    optDiv.className = 'custom-select-option';
                    if (idx === select.selectedIndex) {
                        optDiv.classList.add('selected');
                    }
                    optDiv.textContent = opt.textContent;
                    optDiv.setAttribute('data-value', opt.value);

                    optDiv.addEventListener('click', function(e) {
                        e.stopPropagation();
                        
                        optionsBox.querySelectorAll('.custom-select-option').forEach(item => item.classList.remove('selected'));
                        optDiv.classList.add('selected');

                        select.value = opt.value;
                        triggerText.textContent = opt.textContent;
                        select.dispatchEvent(new Event('change', { bubbles: true }));

                        container.classList.remove('active');
                    });

                    optionsBox.appendChild(optDiv);
                });

                container.appendChild(optionsBox);

                // Insert the custom container right after the hidden select element
                select.parentNode.insertBefore(container, select.nextSibling);

                // Toggle dropdown menu on trigger click
                trigger.addEventListener('click', function(e) {
                    e.stopPropagation();
                    
                    document.querySelectorAll('.custom-select-container').forEach(other => {
                        if (other !== container) {
                            other.classList.remove('active');
                        }
                    });

                    container.classList.toggle('active');
                });
            });

            // Close all custom dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.custom-select-container').forEach(container => {
                    container.classList.remove('active');
                });
            });
        });
    </script>
</body>
</html>
