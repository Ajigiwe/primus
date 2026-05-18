/**
 * Theme 1: Imperial Luxury - Visual Controller
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Splash Loader Fadeout
    const loader = document.getElementById('loader-overlay');
    
    window.addEventListener('load', () => {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }, 800); // Elegant luxury delay
    });

    // Fail-safe timeout
    setTimeout(() => {
        if (loader && loader.style.opacity !== '0') {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
        }
    }, 3000);

    // 2. Ken Burns Crossfading Hero Slider
    const slides = document.querySelectorAll('.hero-slide');
    if (slides.length > 0) {
        let currentSlide = 0;
        
        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000);
    }

    // 3. Elegant Local Form Submission Simulation
    const form = document.getElementById('consultationForm');
    const statusBox = document.getElementById('formStatus');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Show status alert
            statusBox.style.display = 'block';
            statusBox.className = 'form-status-alert form-status-success';
            statusBox.innerHTML = 'Thank you. Your request has been sealed. The Primus Executive Council will establish communication shortly.';
            
            form.reset();
            
            // Smoothly scroll to status box
            statusBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }

    // 4. Symmetrical Nav Active State Handling on Scroll
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

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
