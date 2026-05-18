/**
 * Theme 3: Neo-Glassmorphism - Interactions Controller
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Orbital Loader Controller
    const loader = document.getElementById('loader-overlay');
    
    window.addEventListener('load', () => {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }, 900); // Standard futuristic boot delay
    });

    // Fail-safe
    setTimeout(() => {
        if (loader && loader.style.opacity !== '0') {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }
    }, 3000);

    // 2. High-Tech Glass Form Transmission Simulator
    const form = document.getElementById('terminalForm');
    const statusBox = document.getElementById('glassStatus');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            statusBox.style.display = 'block';
            statusBox.className = 'glass-status-alert glass-status-success';
            statusBox.innerHTML = '⚡ [NODE CONNECTION SECURED] // Data Brief transmitted through orbital channels. Executive Operators assigned.';
            
            form.reset();
            
            // Smoothly scroll to status box
            statusBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }

    // 3. Ambient Hover Card Parallax Effect
    const panels = document.querySelectorAll('.glass-panel');
    
    panels.forEach(panel => {
        panel.addEventListener('mousemove', (e) => {
            const rect = panel.getBoundingClientRect();
            const x = e.clientX - rect.left; // x position within the element
            const y = e.clientY - rect.top;  // y position within the element
            
            panel.style.setProperty('--mouse-x', `${x}px`);
            panel.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    // 4. Glass Nav Active State on Scroll
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.glass-nav-link');

    window.addEventListener('scroll', () => {
        let currentSectionId = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            if (window.scrollY >= sectionTop) {
                currentSectionId = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            }
        });
    });

});
