/**
 * Theme 5: Split Cinematic - Controller logic
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Split Cinematic Loader Overlay
    const loader = document.getElementById('loader-overlay');
    
    window.addEventListener('load', () => {
        setTimeout(() => {
            loader.classList.add('loaded');
            setTimeout(() => {
                loader.style.display = 'none';
            }, 800); // Wait for transition splits to finish sliding out
        }, 1000);
    });

    // Fail-safe
    setTimeout(() => {
        if (loader && !loader.classList.contains('loaded')) {
            loader.classList.add('loaded');
            setTimeout(() => {
                loader.style.display = 'none';
            }, 800);
        }
    }, 3000);

    // 2. Interactive Image Projection Deck Swapper
    const slides = document.querySelectorAll('.deck-slide');
    const triggers = document.querySelectorAll('[data-trigger]');

    function swapProjection(targetNodeId) {
        slides.forEach(slide => {
            slide.classList.remove('active');
            if (slide.getAttribute('data-node') === targetNodeId) {
                slide.classList.add('active');
            }
        });
    }

    // Hover listeners for divisions card triggers
    triggers.forEach(trigger => {
        trigger.addEventListener('mouseenter', () => {
            const targetNode = trigger.getAttribute('data-trigger');
            swapProjection(targetNode);
            
            // Mark node row as active
            triggers.forEach(t => t.classList.remove('active'));
            trigger.classList.add('active');
        });
    });

    // 3. Cinematic Form Submission Transmission Simulator
    const form = document.getElementById('cinematicConsult');
    const statusBox = document.getElementById('cinematicStatus');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            statusBox.style.display = 'block';
            statusBox.className = 'cinematic-status-alert cinematic-status-success';
            statusBox.innerHTML = 'Thank you. Your invitiation request has been logged. Our Executive Council will verify details shortly.';
            
            form.reset();
            
            // Smoothly scroll to status box
            statusBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }

    // 4. Scroll Tracking for Nav and Reset projection to default (overview)
    const rightPanel = document.querySelector('.split-right');
    const sections = document.querySelectorAll('.cinematic-section');
    const navItems = document.querySelectorAll('.nav-item');

    rightPanel.addEventListener('scroll', () => {
        let currentSectionId = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            if (rightPanel.scrollTop >= sectionTop) {
                currentSectionId = section.getAttribute('id');
            }
        });

        navItems.forEach(item => {
            item.classList.remove('active');
            const href = item.getAttribute('href');
            if (href === `#${currentSectionId}`) {
                item.classList.add('active');
            }
        });

        // Reset projection to first slide if back in overview or metrics/contact
        const currentActiveSec = document.getElementById(currentSectionId);
        if (currentActiveSec) {
            const slideOverride = currentActiveSec.getAttribute('data-slide');
            if (slideOverride) {
                swapProjection(slideOverride);
                triggers.forEach(t => t.classList.remove('active'));
            }
        }
    });

});
