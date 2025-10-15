<script>
    document.addEventListener('DOMContentLoaded', function() {

        // ===== NEW HERO SLIDER =====
        class HeroSlider {
            constructor() {
                this.slides = document.querySelectorAll('.slide');
                this.dots = document.querySelectorAll('.dot');
                this.prevBtn = document.querySelector('.slider-arrow.prev');
                this.nextBtn = document.querySelector('.slider-arrow.next');
                this.currentSlide = 0;
                this.autoplayInterval = null;

                if (this.slides.length === 0) return;
                this.init();
            }

            init() {
                this.bindEvents();
                this.startAutoplay();
            }

            bindEvents() {
                // Next/Prev buttons
                this.nextBtn?.addEventListener('click', () => {
                    this.nextSlide();
                    this.restartAutoplay();
                });

                this.prevBtn?.addEventListener('click', () => {
                    this.prevSlide();
                    this.restartAutoplay();
                });

                // Dot navigation
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        const slideIndex = parseInt(dot.dataset.slide);
                        this.showSlide(slideIndex);
                        this.restartAutoplay();
                    });
                });

                // Pause on hover
                const sliderContainer = document.querySelector('.slider-container');
                sliderContainer?.addEventListener('mouseenter', () => this.stopAutoplay());
                sliderContainer?.addEventListener('mouseleave', () => this.startAutoplay());
            }

            showSlide(index) {
                this.slides.forEach(slide => slide.classList.remove('active'));
                this.dots.forEach(dot => dot.classList.remove('active'));

                this.slides[index].classList.add('active');
                this.dots[index].classList.add('active');
                this.currentSlide = index;
            }

            nextSlide() {
                let next = (this.currentSlide + 1) % this.slides.length;
                this.showSlide(next);
            }

            prevSlide() {
                let prev = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                this.showSlide(prev);
            }

            startAutoplay() {
                this.stopAutoplay();
                this.autoplayInterval = setInterval(() => this.nextSlide(), 5000);
            }

            stopAutoplay() {
                if (this.autoplayInterval) {
                    clearInterval(this.autoplayInterval);
                    this.autoplayInterval = null;
                }
            }

            restartAutoplay() {
                this.stopAutoplay();
                this.startAutoplay();
            }
        }

        // ===== HERO CTA BUTTONS =====
        class HeroCTAButtons {
            constructor() {
                this.init();
            }

            init() {
                setTimeout(() => {
                    const buttons = document.querySelectorAll('.hero-slider button, .slide button');

                    buttons.forEach((button) => {
                        // Skip navigation buttons
                        if (button.classList.contains('prev-slide') ||
                            button.classList.contains('next-slide') ||
                            button.classList.contains('slider-arrow') ||
                            button.classList.contains('slide-nav') ||
                            button.classList.contains('dot')) {
                            return;
                        }

                        button.style.cursor = 'pointer';
                        button.style.pointerEvents = 'auto';

                        // Remove existing listeners
                        const newButton = button.cloneNode(true);
                        button.parentNode.replaceChild(newButton, button);

                        newButton.addEventListener('click', (e) => {
                            e.preventDefault();
                            e.stopPropagation();
                            this.handleClick(newButton);
                        });
                    });
                }, 100);
            }

            handleClick(button) {
                const text = button.textContent.trim().toLowerCase();

                if (text.includes('quote')) {
                    this.scrollTo('quote');
                } else if (text.includes('service') || text.includes('option')) {
                    this.scrollTo('services');
                } else if (text.includes('secure') || text.includes('delivery')) {
                    this.scrollTo('services');
                } else if (text.includes('learn')) {
                    this.scrollTo('about');
                } else if (text.includes('track')) {
                    this.scrollTo('track');
                } else if (text.includes('ship')) {
                    this.scrollTo('quote');
                } else if (text.includes('contact')) {
                    this.scrollTo('contact');
                }
            }

            scrollTo(sectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                } else {
                    window.scrollBy({ top: 600, behavior: 'smooth' });
                }
            }
        }

        // ===== MOBILE MENU =====
        class MobileMenu {
            constructor() {
                this.menuBtn = document.querySelector('.mobile-menu-btn');
                this.menu = document.querySelector('.mobile-menu');
                this.menuIcon = document.querySelector('.menu-icon');
                this.closeIcon = document.querySelector('.close-icon');
                this.init();
            }

            init() {
                if (!this.menuBtn || !this.menu) return;

                this.menuBtn.addEventListener('click', () => this.toggle());

                document.querySelectorAll('.mobile-menu a').forEach(link => {
                    link.addEventListener('click', () => this.close());
                });
            }

            toggle() {
                this.menu.classList.toggle('hidden');
                this.menuIcon?.classList.toggle('hidden');
                this.closeIcon?.classList.toggle('hidden');
            }

            close() {
                this.menu?.classList.add('hidden');
                this.menuIcon?.classList.remove('hidden');
                this.closeIcon?.classList.add('hidden');
            }
        }

        // ===== SMOOTH NAVIGATION =====
        class SmoothNavigation {
            constructor() {
                this.sections = document.querySelectorAll('section[id]');
                this.navLinks = document.querySelectorAll('nav a[href^="#"]');
                this.init();
            }

            init() {
                this.bindScrollEvents();
                this.bindClickEvents();
            }

            bindScrollEvents() {
                let ticking = false;
                window.addEventListener('scroll', () => {
                    if (!ticking) {
                        window.requestAnimationFrame(() => {
                            this.highlightActiveNav();
                            ticking = false;
                        });
                        ticking = true;
                    }
                });
            }

            bindClickEvents() {
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', (e) => {
                        const href = anchor.getAttribute('href');
                        if (href === '#') return;

                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    });
                });
            }

            highlightActiveNav() {
                let current = '';

                this.sections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    if (rect.top <= 150 && rect.bottom > 150) {
                        current = section.getAttribute('id');
                    }
                });

                this.navLinks.forEach(link => {
                    link.classList.remove('font-semibold');
                    link.style.color = '';
                    link.style.borderBottom = '';

                    const href = link.getAttribute('href');
                    if (href === '#' + current) {
                        link.style.color = 'rgb(162, 38, 49)';
                        link.classList.add('font-semibold');
                        link.style.borderBottom = '2px solid rgb(162, 38, 49)';
                    }
                });
            }
        }

        // ===== TRACKING HANDLER =====
        class TrackingHandler {
            constructor() {
                this.init();
            }

            init() {
                // Handle main tracking form (if exists)
                const trackingForm = document.getElementById('trackingForm');
                if (trackingForm) {
                    trackingForm.addEventListener('submit', (e) => {
                        e.preventDefault();
                        const waybill = document.getElementById('waybill')?.value;
                        if (waybill) {
                            this.handleTracking(waybill);
                        }
                    });
                }

                // Handle hero tracking form
                const heroTrackingForm = document.getElementById('heroTrackingForm');
                if (heroTrackingForm) {
                    heroTrackingForm.addEventListener('submit', (e) => {
                        e.preventDefault();
                        const trackingInput = heroTrackingForm.querySelector('input[name="tracking_numbers"]');
                        const waybillNumber = trackingInput.value.trim();

                        if (waybillNumber) {
                            // Show loading state
                            const submitButton = heroTrackingForm.querySelector('button[type="submit"]');
                            const originalButtonText = submitButton.innerHTML;
                            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Loading...';
                            submitButton.disabled = true;

                            // Simulate loading (replace with actual API call)
                            setTimeout(() => {
                                // Load tracking data
                                this.loadTrackingData(waybillNumber);

                                // Show tracking section
                                const trackingSection = document.getElementById('trackingProgressSection');
                                if (trackingSection) {
                                    trackingSection.classList.remove('hidden');
                                    trackingSection.style.opacity = '0';
                                    trackingSection.style.transform = 'translateY(20px)';

                                    // Smooth scroll to tracking section
                                    setTimeout(() => {
                                        trackingSection.scrollIntoView({
                                            behavior: 'smooth',
                                            block: 'start'
                                        });

                                        // Fade in animation
                                        requestAnimationFrame(() => {
                                            trackingSection.style.transition = 'opacity 0.5s, transform 0.5s';
                                            trackingSection.style.opacity = '1';
                                            trackingSection.style.transform = 'translateY(0)';
                                        });
                                    }, 100);
                                }

                                // Reset button
                                submitButton.innerHTML = originalButtonText;
                                submitButton.disabled = false;

                                // Clear input
                                trackingInput.value = '';
                            }, 1000);
                        }
                    });
                }

                // Reset button handler - remove onclick attribute and add event listener
                document.addEventListener('click', (e) => {
                    if (e.target.closest('[onclick*="resetTracking"]')) {
                        e.preventDefault();
                        this.resetTracking();
                    }
                });
            }

            loadTrackingData(waybillNumber) {
                // Display waybill number
                const displayWaybill = document.getElementById('displayWaybill');
                if (displayWaybill) {
                    displayWaybill.textContent = waybillNumber;
                }

                // Here you would typically make an API call to fetch tracking data
                // Example API call structure:
                /*
                fetch(`/api/tracking/${waybillNumber}`)
                    .then(response => response.json())
                    .then(data => {
                        this.updateTrackingUI(data);
                    })
                    .catch(error => {
                        console.error('Error fetching tracking data:', error);
                        this.showNotification('Unable to fetch tracking information. Please try again.', 'error');
                    });
                */
            }

            updateTrackingUI(data) {
                // Update status cards
                // Update timeline progress
                // Update dates and locations
                // This would be customized based on your API response structure
            }

            handleTracking(waybill) {
                const formSection = document.getElementById('trackingFormSection');
                const header = document.getElementById('trackingHeader');
                const progressSection = document.getElementById('trackingProgressSection');
                const displayWaybill = document.getElementById('displayWaybill');

                if (!formSection || !progressSection) return;

                if (displayWaybill) {
                    displayWaybill.textContent = waybill;
                }

                formSection.style.transition = 'opacity 0.5s, transform 0.5s';
                formSection.style.opacity = '0';
                formSection.style.transform = 'translateY(-20px)';

                setTimeout(() => {
                    formSection.classList.add('hidden');
                    header?.classList.add('hidden');
                    progressSection.classList.remove('hidden');
                    progressSection.style.opacity = '0';
                    progressSection.style.transform = 'translateY(20px)';

                    requestAnimationFrame(() => {
                        progressSection.style.transition = 'opacity 0.5s, transform 0.5s';
                        progressSection.style.opacity = '1';
                        progressSection.style.transform = 'translateY(0)';
                    });
                }, 500);
            }

            resetTracking() {
                const progressSection = document.getElementById('trackingProgressSection');

                if (progressSection) {
                    progressSection.style.transition = 'opacity 0.5s, transform 0.5s';
                    progressSection.style.opacity = '0';
                    progressSection.style.transform = 'translateY(-20px)';

                    setTimeout(() => {
                        progressSection.classList.add('hidden');

                        // Scroll back to hero section
                        const heroSection = document.getElementById('home');
                        if (heroSection) {
                            heroSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }, 500);
                }
            }

            showNotification(message, type = 'success') {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 px-6 py-4 rounded-lg shadow-lg text-white z-50 transition-all duration-300 transform translate-x-full`;
                notification.style.backgroundColor = type === 'success' ? '#10b981' : '#ef4444';
                notification.textContent = message;

                document.body.appendChild(notification);

                requestAnimationFrame(() => {
                    notification.style.transform = 'translateX(0)';
                });

                setTimeout(() => {
                    notification.style.transform = 'translateX(150%)';
                    setTimeout(() => notification.remove(), 300);
                }, 3000);
            }
        }

        // ===== SCROLL TO TOP =====
        class ScrollToTop {
            constructor() {
                this.button = this.createButton();
                this.init();
            }

            createButton() {
                const btn = document.createElement('button');
                btn.innerHTML = `
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                    </svg>
                `;
                btn.className = 'fixed bottom-8 right-8 w-12 h-12 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-50 flex items-center justify-center';
                btn.style.backgroundColor = 'rgb(162, 38, 49)';
                btn.style.color = 'white';
                btn.setAttribute('aria-label', 'Scroll to top');
                document.body.appendChild(btn);
                return btn;
            }

            init() {
                this.button.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });

                let ticking = false;
                window.addEventListener('scroll', () => {
                    if (!ticking) {
                        window.requestAnimationFrame(() => {
                            this.toggleVisibility();
                            ticking = false;
                        });
                        ticking = true;
                    }
                });
            }

            toggleVisibility() {
                if (window.pageYOffset > 300) {
                    this.button.classList.remove('opacity-0', 'invisible');
                    this.button.classList.add('opacity-100', 'visible');
                } else {
                    this.button.classList.add('opacity-0', 'invisible');
                    this.button.classList.remove('opacity-100', 'visible');
                }
            }
        }

        // ===== FADE IN ANIMATIONS =====
        class FadeInAnimations {
            constructor() {
                this.init();
            }

            init() {
                const options = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                            observer.unobserve(entry.target);
                        }
                    });
                }, options);

                document.querySelectorAll('section[id]').forEach(section => {
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
                document.querySelectorAll('form').forEach(form => {
                    if (!form.id || form.id === 'trackingForm' || form.id === 'heroTrackingForm') return;

                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        this.handleSubmit(form);
                    });
                });
            }

            handleSubmit(form) {
                const formData = new FormData(form);
                const data = Object.fromEntries(formData.entries());

                console.log('Form submitted:', data);

                this.showNotification('Thank you! We will contact you shortly.', 'success');
                form.reset();
            }

            showNotification(message, type = 'success') {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 px-6 py-4 rounded-lg shadow-lg text-white z-50 transition-all duration-300 transform translate-x-full`;
                notification.style.backgroundColor = type === 'success' ? '#10b981' : '#ef4444';
                notification.textContent = message;

                document.body.appendChild(notification);

                requestAnimationFrame(() => {
                    notification.style.transform = 'translateX(0)';
                });

                setTimeout(() => {
                    notification.style.transform = 'translateX(150%)';
                    setTimeout(() => notification.remove(), 300);
                }, 3000);
            }
        }

        // ===== CUSTOM STYLES =====
        function addCustomStyles() {
            const style = document.createElement('style');
            style.textContent = `
        .slide {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.7s ease;
        }

        .slide.active {
            opacity: 1;
            pointer-events: auto;
        }

        .slide.active button {
            pointer-events: auto !important;
            cursor: pointer !important;
        }

        .dot {
            transition: all 0.3s ease;
        }

        .dot.active {
            width: 2rem;
            background-color: #dc2626 !important;
        }

        .dot:hover {
            transform: scale(1.2);
            background-color: rgba(255, 255, 255, 0.8) !important;
        }

        .slider-arrow:hover {
            background-color: rgba(255, 255, 255, 0.3) !important;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .dot {
                width: 10px !important;
                height: 10px !important;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .slide,
            .dot,
            * {
                transition: none !important;
                animation: none !important;
            }
        }
    `;
            document.head.appendChild(style);
        }

        // ===== INITIALIZE =====
        function init() {
            new HeroSlider();
            new HeroCTAButtons();
            new MobileMenu();
            new SmoothNavigation();
            new TrackingHandler();
            new ScrollToTop();
            new FadeInAnimations();
            new FormHandlers();
            addCustomStyles();

            console.log('✅ Simba Courier initialized with hero tracking form');
        }

        init();
    });

    // Make resetTracking available globally for inline onclick
    function resetTracking() {
        const progressSection = document.getElementById('trackingProgressSection');

        if (progressSection) {
            progressSection.style.transition = 'opacity 0.5s, transform 0.5s';
            progressSection.style.opacity = '0';
            progressSection.style.transform = 'translateY(-20px)';

            setTimeout(() => {
                progressSection.classList.add('hidden');

                // Scroll back to hero section
                const heroSection = document.getElementById('home');
                if (heroSection) {
                    heroSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }, 500);
        }
    }
</script>

<script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    document.querySelectorAll('[id$="Modal"]').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal(this.id);
            }
        });
    });

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('[id$="Modal"]').forEach(modal => {
                if (!modal.classList.contains('hidden')) {
                    closeModal(modal.id);
                }
            });
        }
    });
</script>
