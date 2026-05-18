/**
 * Theme 2: Swiss Precision - Operational Logic
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Razor Progress Loader Controller
    const loader = document.getElementById('loader-overlay');
    
    window.addEventListener('load', () => {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }, 1000); // Standard precision delay
    });

    // Fail-safe
    setTimeout(() => {
        if (loader && loader.style.opacity !== '0') {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }
    }, 3000);

    // 2. High-Density Form Submission Transmission Simulator
    const form = document.getElementById('intakeForm');
    const statusBox = document.getElementById('swissFormStatus');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Format precise transmission log
            const timestamp = new Date().toISOString();
            statusBox.style.display = 'block';
            statusBox.className = 'swiss-status-alert swiss-status-success';
            statusBox.innerHTML = `[TRANSMIT OK] // TIMESTAMP: ${timestamp} // SYSTEM STATE: LOGGED. OUR LOGISTICAL OPERATORS HAVE QUEUED YOUR BRIEF.`;
            
            form.reset();
            
            // Smoothly scroll to status box
            statusBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }

    // 3. Grid Nav Item Active State Tracking on Scroll
    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.swiss-nav-item');

    window.addEventListener('scroll', () => {
        let currentSectionId = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            if (window.scrollY >= sectionTop) {
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
    });

});
