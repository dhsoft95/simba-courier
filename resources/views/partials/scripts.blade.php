<!-- Enhanced Scripts for Simba Courier -->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // ===== HERO SLIDER WITH MULTIPLE TRANSITION EFFECTS =====
        class HeroSlider {
            constructor() {
                this.currentSlide = 0;
                this.slides = document.querySelectorAll('.hero-slider .slide');
                this.slideNavs = document.querySelectorAll('.slide-nav');
                this.totalSlides = this.slides.length;
                this.autoSlideInterval = null;
                this.isTransitioning = false;
                this.transitionTypes = [
                    'slideHorizontal',
                    'fadeScale',
                    'rotateSlide',
                    'slideVertical',
                    'zoomFade',
                    'curtainEffect'
                ];

                this.init();
            }

            init() {
                this.bindEvents();
                this.startAutoSlide();
            }

            bindEvents() {
                // Navigation arrows
                document.querySelector('.next-slide')?.addEventListener('click', () => {
                    if (!this.isTransitioning) {
                        this.nextSlide();
                        this.restartAutoSlide();
                    }
                });

                document.querySelector('.prev-slide')?.addEventListener('click', () => {
                    if (!this.isTransitioning) {
                        this.prevSlide();
                        this.restartAutoSlide();
                    }
                });

                // Dot navigation
                this.slideNavs.forEach((nav, index) => {
                    nav.addEventListener('click', () => {
                        if (!this.isTransitioning && index !== this.currentSlide) {
                            const direction = index > this.currentSlide ? 'next' : 'prev';
                            this.showSlide(index, direction, 'fadeScale');
                            this.restartAutoSlide();
                        }
                    });
                });

                // Touch/swipe support
                this.bindTouchEvents();

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (!this.isTransitioning) {
                        if (e.key === 'ArrowLeft') {
                            this.prevSlide();
                            this.restartAutoSlide();
                        } else if (e.key === 'ArrowRight') {
                            this.nextSlide();
                            this.restartAutoSlide();
                        }
                    }
                });

                // Pause on hover
                const heroSlider = document.querySelector('.hero-slider');
                if (heroSlider) {
                    heroSlider.addEventListener('mouseenter', () => this.stopAutoSlide());
                    heroSlider.addEventListener('mouseleave', () => this.startAutoSlide());
                }
            }

            bindTouchEvents() {
                let startX = 0, endX = 0, startY = 0, endY = 0;
                const heroSlider = document.querySelector('.hero-slider');

                heroSlider?.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    startY = e.touches[0].clientY;
                });

                heroSlider?.addEventListener('touchend', (e) => {
                    endX = e.changedTouches[0].clientX;
                    endY = e.changedTouches[0].clientY;

                    const threshold = 50;
                    const xDiff = Math.abs(startX - endX);
                    const yDiff = Math.abs(startY - endY);

                    if (!this.isTransitioning && xDiff > threshold && xDiff > yDiff) {
                        if (startX > endX) {
                            this.showSlide((this.currentSlide + 1) % this.totalSlides, 'next', 'slideHorizontal');
                        } else {
                            const prev = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                            this.showSlide(prev, 'prev', 'slideHorizontal');
                        }
                        this.restartAutoSlide();
                    }
                });
            }

            getRandomTransition() {
                return this.transitionTypes[Math.floor(Math.random() * this.transitionTypes.length)];
            }

            nextSlide() {
                const next = (this.currentSlide + 1) % this.totalSlides;
                const randomTransition = this.getRandomTransition();
                this.showSlide(next, 'next', randomTransition);
            }

            prevSlide() {
                const prev = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                const randomTransition = this.getRandomTransition();
                this.showSlide(prev, 'prev', randomTransition);
            }

            showSlide(index, direction = 'next', transitionType = 'slideHorizontal') {
                if (this.isTransitioning || index === this.currentSlide) return;

                this.isTransitioning = true;
                const currentSlideElement = this.slides[this.currentSlide];
                const nextSlideElement = this.slides[index];

                // Update navigation dots
                this.slideNavs.forEach(nav => nav.classList.remove('active'));
                this.slideNavs[index].classList.add('active');

                // Apply transition effect
                this.applyTransition(currentSlideElement, nextSlideElement, direction, transitionType);

                // Cleanup after transition
                setTimeout(() => {
                    this.slides.forEach(slide => {
                        if (slide !== nextSlideElement) {
                            slide.classList.remove('active');
                            this.resetSlideStyles(slide);
                        }
                    });
                    this.isTransitioning = false;
                }, 1200);

                this.currentSlide = index;
            }

            resetSlideStyles(slide) {
                slide.style.transform = '';
                slide.style.opacity = '';
                slide.style.clipPath = '';
                slide.style.filter = '';
                slide.style.transition = '';
            }

            applyTransition(currentSlide, nextSlide, direction, type) {
                // Reset all slides
                this.slides.forEach(slide => this.resetSlideStyles(slide));
                nextSlide.classList.add('active');

                switch(type) {
                    case 'slideHorizontal':
                        this.slideHorizontalTransition(currentSlide, nextSlide, direction);
                        break;
                    case 'fadeScale':
                        this.fadeScaleTransition(currentSlide, nextSlide);
                        break;
                    case 'rotateSlide':
                        this.rotateSlideTransition(currentSlide, nextSlide, direction);
                        break;
                    case 'slideVertical':
                        this.slideVerticalTransition(currentSlide, nextSlide, direction);
                        break;
                    case 'zoomFade':
                        this.zoomFadeTransition(currentSlide, nextSlide);
                        break;
                    case 'curtainEffect':
                        this.curtainEffectTransition(currentSlide, nextSlide, direction);
                        break;
                }
            }

            // Transition Effect 1: Enhanced Horizontal Slide
            slideHorizontalTransition(current, next, direction) {
                const moveDistance = direction === 'next' ? '100%' : '-100%';
                const enterDistance = direction === 'next' ? '-100%' : '100%';

                current.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                next.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

                next.style.transform = `translateX(${moveDistance})`;
                next.style.opacity = '1';

                requestAnimationFrame(() => {
                    current.style.transform = `translateX(${enterDistance}) scale(0.8)`;
                    current.style.opacity = '0';
                    next.style.transform = 'translateX(0) scale(1)';
                });
            }

            // Transition Effect 2: Fade with Scale
            fadeScaleTransition(current, next) {
                current.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                next.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

                next.style.opacity = '0';
                next.style.transform = 'scale(1.1)';

                requestAnimationFrame(() => {
                    current.style.opacity = '0';
                    current.style.transform = 'scale(0.9)';
                    next.style.opacity = '1';
                    next.style.transform = 'scale(1)';
                });
            }

            // Transition Effect 3: 3D Rotate Slide
            rotateSlideTransition(current, next, direction) {
                const rotateAngle = direction === 'next' ? -90 : 90;

                current.style.transition = 'all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                next.style.transition = 'all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

                next.style.transform = `rotateY(${-rotateAngle}deg) translateZ(-200px)`;
                next.style.opacity = '0.3';

                requestAnimationFrame(() => {
                    current.style.transform = `rotateY(${rotateAngle}deg) translateZ(-200px)`;
                    current.style.opacity = '0';
                    next.style.transform = 'rotateY(0deg) translateZ(0px)';
                    next.style.opacity = '1';
                });
            }

            // Transition Effect 4: Vertical Slide
            slideVerticalTransition(current, next, direction) {
                const moveDistance = direction === 'next' ? '100%' : '-100%';
                const enterDistance = direction === 'next' ? '-100%' : '100%';

                current.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                next.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

                next.style.transform = `translateY(${moveDistance})`;
                next.style.opacity = '1';

                requestAnimationFrame(() => {
                    current.style.transform = `translateY(${enterDistance})`;
                    current.style.opacity = '0';
                    next.style.transform = 'translateY(0)';
                });
            }

            // Transition Effect 5: Zoom Fade
            zoomFadeTransition(current, next) {
                current.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                next.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

                next.style.opacity = '0';
                next.style.transform = 'scale(0.5)';
                next.style.filter = 'blur(10px)';

                requestAnimationFrame(() => {
                    current.style.opacity = '0';
                    current.style.transform = 'scale(2)';
                    current.style.filter = 'blur(10px)';
                    next.style.opacity = '1';
                    next.style.transform = 'scale(1)';
                    next.style.filter = 'blur(0px)';
                });
            }

            // Transition Effect 6: Curtain Effect
            curtainEffectTransition(current, next, direction) {
                const clipStart = direction === 'next' ?
                    'polygon(0 0, 0 0, 0 100%, 0 100%)' :
                    'polygon(100% 0, 100% 0, 100% 100%, 100% 100%)';
                const clipEnd = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)';

                current.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                next.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

                next.style.clipPath = clipStart;
                next.style.opacity = '1';

                requestAnimationFrame(() => {
                    current.style.opacity = '0.3';
                    current.style.transform = 'scale(1.1)';
                    next.style.clipPath = clipEnd;
                });
            }

            startAutoSlide() {
                this.autoSlideInterval = setInterval(() => {
                    this.nextSlide();
                }, 8000);
            }

            stopAutoSlide() {
                clearInterval(this.autoSlideInterval);
            }

            restartAutoSlide() {
                this.stopAutoSlide();
                setTimeout(() => this.startAutoSlide(), 4000);
            }
        }

        // ===== MOBILE MENU FUNCTIONALITY =====
        class MobileMenu {
            constructor() {
                this.menuBtn = document.querySelector('.mobile-menu-btn');
                this.menu = document.querySelector('.mobile-menu');
                this.menuIcon = document.querySelector('.menu-icon');
                this.closeIcon = document.querySelector('.close-icon');

                this.init();
            }

            init() {
                if (this.menuBtn && this.menu) {
                    this.menuBtn.addEventListener('click', () => this.toggle());
                }
            }

            toggle() {
                this.menu.classList.toggle('hidden');
                this.menuIcon?.classList.toggle('hidden');
                this.closeIcon?.classList.toggle('hidden');
            }

            close() {
                if (this.menu && !this.menu.classList.contains('hidden')) {
                    this.menu.classList.add('hidden');
                    this.menuIcon?.classList.remove('hidden');
                    this.closeIcon?.classList.add('hidden');
                }
            }
        }

        // ===== SMOOTH SCROLLING & NAVIGATION =====
        class SmoothNavigation {
            constructor() {
                this.sections = document.querySelectorAll('section[id]');
                this.navLinks = document.querySelectorAll('nav a[href^="#"]');
                this.mobileMenu = new MobileMenu();

                this.init();
            }

            init() {
                this.bindScrollEvents();
                this.bindClickEvents();
                this.highlightActiveNav();
            }

            bindScrollEvents() {
                window.addEventListener('scroll', () => {
                    this.highlightActiveNav();
                });
            }

            bindClickEvents() {
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', (e) => {
                        e.preventDefault();
                        const target = document.querySelector(anchor.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                            this.mobileMenu.close();
                        }
                    });
                });
            }

            highlightActiveNav() {
                let current = '';
                this.sections.forEach(section => {
                    const sectionTop = section.getBoundingClientRect().top;
                    const sectionHeight = section.offsetHeight;
                    if (sectionTop <= 100 && sectionTop + sectionHeight > 100) {
                        current = section.getAttribute('id');
                    }
                });

                this.navLinks.forEach(link => {
                    // Remove active styles
                    link.classList.remove('font-semibold');
                    link.style.color = '';
                    link.style.borderBottom = '';

                    // Add active state with your red color
                    if (link.getAttribute('href') === '#' + current) {
                        link.style.color = 'rgb(139, 31, 41)';
                        link.classList.add('font-semibold');
                        link.style.borderBottom = '2px solid rgb(139, 31, 41)';
                    }
                });
            }
        }

        // ===== TRACKING FUNCTIONALITY =====
        class TrackingHandler {
            constructor() {
                this.heroTrackingInput = document.getElementById('hero-tracking');
                this.init();
            }

            init() {
                this.bindHeroTracking();
                this.bindAllTrackingForms();
            }

            bindHeroTracking() {
                if (this.heroTrackingInput) {
                    const button = this.heroTrackingInput.parentElement.querySelector('button');

                    button?.addEventListener('click', (e) => {
                        e.preventDefault();
                        this.handleTracking(this.heroTrackingInput.value);
                        this.heroTrackingInput.value = '';
                    });

                    this.heroTrackingInput.addEventListener('keypress', (e) => {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            this.handleTracking(this.heroTrackingInput.value);
                            this.heroTrackingInput.value = '';
                        }
                    });
                }
            }

            bindAllTrackingForms() {
                const trackingForms = document.querySelectorAll('form');
                trackingForms.forEach(form => {
                    const trackingInput = form.querySelector('input[type="text"]');
                    if (trackingInput &&
                        trackingInput.id !== 'hero-tracking' &&
                        (trackingInput.id === 'tracking-number' ||
                            trackingInput.placeholder.toLowerCase().includes('tracking'))) {

                        form.addEventListener('submit', (e) => {
                            e.preventDefault();
                            this.handleTracking(trackingInput.value);
                            trackingInput.value = '';
                        });
                    }
                });
            }

            handleTracking(trackingNumber) {
                const trimmedNumber = trackingNumber.trim();

                if (!trimmedNumber) {
                    this.showAlert('Please enter a tracking number.', 'warning');
                    return;
                }

                if (trimmedNumber.length < 6) {
                    this.showAlert('Please enter a valid tracking number.', 'error');
                    return;
                }

                // Simulate tracking result
                this.showTrackingResult(trimmedNumber);
            }

            showTrackingResult(trackingNumber) {
                const result = `Tracking Package: ${trackingNumber}\n\n` +
                    `Status: In Transit\n` +
                    `Estimated Delivery: Tomorrow by 5:00 PM\n` +
                    `Last Update: Package departed from sorting facility\n` +
                    `Location: Distribution Center - Downtown`;

                alert(result);
            }

            showAlert(message, type) {
                // You can replace this with a custom modal/toast notification
                alert(message);
            }
        }

        // ===== SCROLL TO TOP BUTTON =====
        class ScrollToTop {
            constructor() {
                this.button = this.createButton();
                this.init();
            }

            createButton() {
                const button = document.createElement('button');
                button.innerHTML = '↑';
                button.className = 'fixed bottom-8 right-8 bg-amber-500 hover:bg-amber-600 text-white w-12 h-12 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-40 scroll-to-top';
                button.setAttribute('aria-label', 'Scroll to top');
                document.body.appendChild(button);
                return button;
            }

            init() {
                this.button.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });

                window.addEventListener('scroll', () => {
                    if (window.pageYOffset > 300) {
                        this.button.classList.remove('opacity-0', 'invisible');
                        this.button.classList.add('opacity-100', 'visible');
                    } else {
                        this.button.classList.add('opacity-0', 'invisible');
                        this.button.classList.remove('opacity-100', 'visible');
                    }
                });
            }
        }

        // ===== BUTTON ENHANCEMENTS =====
        class ButtonEnhancements {
            constructor() {
                this.init();
            }

            init() {
                document.querySelectorAll('.btn-primary, .btn-secondary').forEach(button => {
                    button.addEventListener('click', (e) => {
                        if (button.type === 'submit') {
                            this.showLoadingState(button);
                        }
                    });
                });
            }

            showLoadingState(button) {
                const originalText = button.textContent;
                button.textContent = 'Processing...';
                button.disabled = true;

                // Re-enable after 2 seconds (remove this in production)
                setTimeout(() => {
                    button.textContent = originalText;
                    button.disabled = false;
                }, 2000);
            }
        }

        // ===== FADE-IN ANIMATIONS =====
        class FadeInAnimations {
            constructor() {
                this.sections = document.querySelectorAll('section[id]');
                this.init();
            }

            init() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-fade-in');
                        }
                    });
                }, observerOptions);

                this.sections.forEach(section => {
                    if (section.id !== 'home') {
                        section.style.opacity = '0';
                        section.style.transform = 'translateY(30px)';
                        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        observer.observe(section);
                    }
                });
            }
        }

        // ===== FORM HANDLERS =====
        class FormHandlers {
            constructor() {
                this.init();
            }

            init() {
                this.bindQuoteForm();
                this.bindContactForms();
            }

            bindQuoteForm() {
                const quoteForm = document.querySelector('#quote form');
                if (quoteForm) {
                    quoteForm.addEventListener('submit', (e) => {
                        e.preventDefault();
                        this.handleQuoteSubmission(quoteForm);
                    });
                }
            }

            bindContactForms() {
                const contactForms = document.querySelectorAll('#contact form');
                contactForms.forEach(form => {
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        this.handleContactSubmission(form);
                    });
                });
            }

            handleQuoteSubmission(form) {
                const formData = new FormData(form);
                const requiredFields = ['pickup-address', 'delivery-address', 'package-weight', 'delivery-type', 'phone'];

                const missingFields = requiredFields.filter(field => !formData.get(field));

                if (missingFields.length > 0) {
                    alert('Please fill in all required fields.');
                    return;
                }

                alert('Thank you for your quote request! We will contact you shortly with a detailed quote.');
                form.reset();
            }

            handleContactSubmission(form) {
                alert('Thank you for your message! We will get back to you soon.');
                form.reset();
            }
        }

        // ===== INITIALIZE ALL COMPONENTS =====
        function initializeApp() {
            // Initialize all components
            new HeroSlider();
            new SmoothNavigation();
            new TrackingHandler();
            new ScrollToTop();
            new ButtonEnhancements();
            new FadeInAnimations();
            new FormHandlers();

            // Add custom styles
            addCustomStyles();
        }

        // ===== CUSTOM STYLES =====
        function addCustomStyles() {
            const style = document.createElement('style');
            style.textContent = `
            /* Enhanced Hero Slider Styles */
            .hero-slider {
                transform: translateZ(0);
                backface-visibility: hidden;
                perspective: 1000px;
                overflow: hidden;
            }

            .hero-slider .slide {
                opacity: 0;
                transform: translateX(100%);
                pointer-events: none;
                will-change: transform, opacity, clip-path, filter;
                backface-visibility: hidden;
                transform-style: preserve-3d;
            }

            .hero-slider .slide.active {
                opacity: 1;
                transform: translateX(0);
                pointer-events: auto;
            }

            /* Enhanced Navigation Dots */
            .slide-nav {
                transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                will-change: transform, background-color, box-shadow;
                cursor: pointer;
                position: relative;
            }

            .slide-nav.active {
                background-color: white !important;
                transform: scale(1.4);
                box-shadow: 0 3px 15px rgba(255, 255, 255, 0.4);
            }

            .slide-nav.active::before {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
                transform: translate(-50%, -50%);
                border-radius: 50%;
                animation: pulse-ring 2s ease-out infinite;
                pointer-events: none;
            }

            @keyframes pulse-ring {
                0% {
                    transform: translate(-50%, -50%) scale(0.8);
                    opacity: 1;
                }
                100% {
                    transform: translate(-50%, -50%) scale(1.4);
                    opacity: 0;
                }
            }

            .slide-nav:hover:not(.active) {
                transform: scale(1.2);
                background-color: rgba(255, 255, 255, 0.8) !important;
                box-shadow: 0 2px 8px rgba(255, 255, 255, 0.2);
            }

            /* Enhanced Navigation Arrows */
            .prev-slide, .next-slide {
                transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                will-change: transform, background-color, box-shadow;
                backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .prev-slide:hover, .next-slide:hover {
                transform: translateY(-50%) scale(1.2);
                background-color: rgba(255, 255, 255, 0.7) !important;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            }

            .prev-slide:active, .next-slide:active {
                transform: translateY(-50%) scale(1.1);
            }

            /* Button Enhancements */
            .btn-primary, .btn-secondary {
                transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                will-change: transform, box-shadow, background-color;
                position: relative;
                overflow: hidden;
            }

            .btn-primary::before, .btn-secondary::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                transition: left 0.5s;
                pointer-events: none;
            }

            .btn-primary:hover::before, .btn-secondary:hover::before {
                left: 100%;
            }

            .btn-primary:hover, .btn-secondary:hover {
                transform: translateY(-4px);
                box-shadow: 0 10px 30px rgba(245, 158, 11, 0.4);
            }

            .btn-primary:active, .btn-secondary:active {
                transform: translateY(-2px);
                box-shadow: 0 5px 20px rgba(245, 158, 11, 0.3);
            }

            .btn-primary:disabled, .btn-secondary:disabled {
                opacity: 0.6;
                cursor: not-allowed;
                transform: none !important;
                box-shadow: none !important;
            }

            /* Slide Content Animations */
            .hero-slider .slide.active h1 {
                animation: slideInUp 1s ease-out 0.3s both;
            }

            .hero-slider .slide.active p {
                animation: slideInUp 1s ease-out 0.5s both;
            }

            .hero-slider .slide.active .flex {
                animation: slideInUp 1s ease-out 0.7s both;
            }

            .hero-slider .slide.active .w-80 {
                animation: slideInRight 1s ease-out 0.4s both;
            }

            @keyframes slideInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes slideInRight {
                from {
                    opacity: 0;
                    transform: translateX(30px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            /* Glassmorphism Enhancement */
            .hero-slider .slide .backdrop-blur-lg {
                backdrop-filter: blur(20px) saturate(180%);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            }

            /* Scroll to Top Button */
            .scroll-to-top:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
            }

            /* Fade-in Animation */
            .animate-fade-in {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }

            /* Enhanced text readability */
            .hero-slider .slide h1,
            .hero-slider .slide p {
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            }

            /* Mobile Optimizations */
            @media (max-width: 768px) {
                .slide-nav {
                    width: 12px !important;
                    height: 12px !important;
                }

                .slide-nav.active {
                    transform: scale(1.2);
                }

                .prev-slide, .next-slide {
                    width: 40px;
                    height: 40px;
                    padding: 8px;
                }

                .prev-slide:hover, .next-slide:hover {
                    transform: translateY(-50%) scale(1.1);
                }

                .hero-title {
                    font-size: 2.5rem !important;
                    line-height: 1.1 !important;
                }

                .slide .text-xl, .slide .text-2xl {
                    font-size: 1rem !important;
                }

                .slide .w-80 {
                    width: 14rem !important;
                    height: 14rem !important;
                }
            }

            /* Accessibility - Reduced Motion */
            @media (prefers-reduced-motion: reduce) {
                .hero-slider .slide,
                .slide-nav,
                .prev-slide, .next-slide,
                .btn-primary, .btn-secondary {
                    transition: none !important;
                    animation: none !important;
                }

                .slide-nav.active::before {
                    animation: none !important;
                }
            }

            /* Performance Optimizations */
            .hero-slider .slide {
                transform: translate3d(0, 0, 0);
            }

            /* Focus states for accessibility */
            .slide-nav:focus,
            .prev-slide:focus,
            .next-slide:focus {
                outline: 2px solid rgba(255, 255, 255, 0.8);
                outline-offset: 2px;
            }

            /* Loading states */
            .btn-primary.loading,
            .btn-secondary.loading {
                position: relative;
                color: transparent;
            }

            .btn-primary.loading::after,
            .btn-secondary.loading::after {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                width: 20px;
                height: 20px;
                margin: -10px 0 0 -10px;
                border: 2px solid transparent;
                border-top: 2px solid currentColor;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            ::-webkit-scrollbar-thumb {
                background: #d97706;
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #b45309;
            }

            /* Smooth transitions for all elements */
            * {
                transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            /* Enhanced form focus states */
            input:focus,
            textarea:focus,
            select:focus {
                outline: none;
                ring: 2px;
                ring-color: #d97706;
                border-color: #d97706;
                box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.1);
            }

            /* Notification styles (for future use) */
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 16px 24px;
                border-radius: 8px;
                color: white;
                font-weight: 500;
                z-index: 1000;
                transform: translateX(100%);
                transition: transform 0.3s ease;
            }

            .notification.show {
                transform: translateX(0);
            }

            .notification.success {
                background-color: #10b981;
            }

            .notification.error {
                background-color: #ef4444;
            }

            .notification.warning {
                background-color: #f59e0b;
            }

            /* Enhanced hover effects for service cards */
            .service-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            }

            /* Statistics counter animations */
            .stat-counter {
                font-variant-numeric: tabular-nums;
            }

            /* Enhanced glassmorphism for hero cards */
            .hero-card {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow:
                    0 8px 32px rgba(0, 0, 0, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2);
            }

            /* Animated background patterns */
            .hero-slider::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background:
                    radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                    radial-gradient(circle at 40% 40%, rgba(120, 200, 255, 0.3) 0%, transparent 50%);
                animation: backgroundShift 10s ease-in-out infinite alternate;
                pointer-events: none;
                z-index: 1;
            }

            @keyframes backgroundShift {
                0% {
                    transform: translateX(-10px) translateY(-10px);
                }
                100% {
                    transform: translateX(10px) translateY(10px);
                }
            }

            /* Text selection styling */
            ::selection {
                background-color: rgba(245, 158, 11, 0.3);
                color: #1f2937;
            }

            ::-moz-selection {
                background-color: rgba(245, 158, 11, 0.3);
                color: #1f2937;
            }

            /* Print styles */
            @media print {
                .hero-slider,
                .prev-slide,
                .next-slide,
                .slide-nav,
                .scroll-to-top {
                    display: none !important;
                }
            }

            /* High contrast mode support */
            @media (prefers-contrast: high) {
                .hero-slider .slide {
                    border: 2px solid white;
                }

                .btn-primary,
                .btn-secondary {
                    border: 2px solid currentColor;
                }
            }

            /* Dark mode support (future enhancement) */
            @media (prefers-color-scheme: dark) {
                .scroll-to-top {
                    background-color: #1f2937;
                    color: #f9fafb;
                }

                .notification {
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
                }
            }

            /* Enhanced loading animation for buttons */
            @keyframes buttonPulse {
                0%, 100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.02);
                }
            }

            .btn-primary:active,
            .btn-secondary:active {
                animation: buttonPulse 0.3s ease-in-out;
            }

            /* Improved accessibility for screen readers */
            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
            }

            /* Enhanced form validation styles */
            .form-error {
                border-color: #ef4444 !important;
                box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1) !important;
            }

            .form-success {
                border-color: #10b981 !important;
                box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1) !important;
            }
        `;
            document.head.appendChild(style);
        }

        // Initialize the application
        initializeApp();

        // Expose some functions globally for debugging (remove in production)
        window.SimbaSlider = {
            version: '1.0.0',
            components: {
                HeroSlider,
                MobileMenu,
                SmoothNavigation,
                TrackingHandler,
                ScrollToTop,
                ButtonEnhancements,
                FadeInAnimations,
                FormHandlers
            }
        };

        // Log initialization
        console.log('🦁 Simba Courier - All systems loaded!');
    });
</script>

<script>
    document.getElementById('trackingForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const waybill = document.getElementById('waybill').value;

        // Show waybill number in progress section
        document.getElementById('displayWaybill').textContent = waybill;

        // Hide form section with smooth transition
        const formSection = document.getElementById('trackingFormSection');
        const header = document.getElementById('trackingHeader');
        const progressSection = document.getElementById('trackingProgressSection');

        formSection.style.transition = 'all 0.5s ease-out';
        formSection.style.opacity = '0';
        formSection.style.transform = 'translateY(-20px)';

        setTimeout(() => {
            formSection.classList.add('hidden');
            header.classList.add('hidden');
            progressSection.classList.remove('hidden');
            progressSection.style.opacity = '0';
            progressSection.style.transform = 'translateY(20px)';

            setTimeout(() => {
                progressSection.style.transition = 'all 0.5s ease-out';
                progressSection.style.opacity = '1';
                progressSection.style.transform = 'translateY(0)';
            }, 50);
        }, 500);
    });

    function resetTracking() {
        const formSection = document.getElementById('trackingFormSection');
        const header = document.getElementById('trackingHeader');
        const progressSection = document.getElementById('trackingProgressSection');

        progressSection.style.transition = 'all 0.5s ease-out';
        progressSection.style.opacity = '0';
        progressSection.style.transform = 'translateY(-20px)';

        setTimeout(() => {
            progressSection.classList.add('hidden');
            header.classList.remove('hidden');
            formSection.classList.remove('hidden');
            formSection.style.opacity = '0';
            formSection.style.transform = 'translateY(20px)';

            setTimeout(() => {
                formSection.style.transition = 'all 0.5s ease-out';
                formSection.style.opacity = '1';
                formSection.style.transform = 'translateY(0)';
            }, 50);

            // Reset form
            document.getElementById('trackingForm').reset();
        }, 500);
    }
</script>
