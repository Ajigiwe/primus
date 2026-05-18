/**
 * Theme 4: Bold Brutalist - Interaction Script
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Block Loader Controller
    const loader = document.getElementById('loader-overlay');
    
    window.addEventListener('load', () => {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }, 800); // Brutal raw prompt delay
    });

    // Fail-safe
    setTimeout(() => {
        if (loader && loader.style.opacity !== '0') {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }
    }, 3000);

    // 2. High Impact Form Transmission Simulator
    const form = document.getElementById('powerForm');
    const statusBox = document.getElementById('brutalStatus');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            statusBox.style.display = 'block';
            statusBox.innerHTML = '👉 [TRANSMISSION SUCCESSFUL] // DATA RECEIVED // WE ARE QUEUING YOUR PARAMETERS IMMEDIATELY. NO DELAYS.';
            
            form.reset();
            
            // Smoothly scroll to status box
            statusBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }

    // 3. Symmetrical Nav Active State Tracking on Scroll
    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.nav-item');

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
