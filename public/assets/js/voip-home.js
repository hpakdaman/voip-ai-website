/**
 * VoIP AI Homepage Interactive Features
 * Enhanced functionality for UAE AI Call Center website
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize all interactive features
    initCurrencyToggle();
    initCounterAnimations();
    initDemoSimulation();
    initSmoothScrolling();
    initTrendingEffects();
    initFloatingElements();
    
    /**
     * Currency Toggle Functionality
     */
    function initCurrencyToggle() {
        const toggle = document.getElementById('currencyToggle');
        const usdPrices = document.querySelectorAll('.usd-price');
        const aedPrices = document.querySelectorAll('.aed-price');
        
        if (toggle) {
            toggle.addEventListener('change', function() {
                const showAED = this.checked;
                
                usdPrices.forEach(price => {
                    price.style.display = showAED ? 'none' : 'inline';
                });
                
                aedPrices.forEach(price => {
                    price.style.display = showAED ? 'inline' : 'none';
                });
                
                // Add smooth transition effect
                document.querySelectorAll('.price-container').forEach(container => {
                    container.style.transform = 'scale(1.05)';
                    setTimeout(() => {
                        container.style.transform = 'scale(1)';
                    }, 200);
                });
            });
        }
    }
    
    /**
     * Animated Counters for Success Metrics
     */
    function initCounterAnimations() {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.counter-value').forEach(counter => {
            observer.observe(counter.closest('.counter-box'));
        });
        
        function animateCounters(container) {
            const counters = container.querySelectorAll('.counter-value');
            
            counters.forEach(counter => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        if (target < 1) {
                            counter.textContent = current.toFixed(1);
                        } else if (target < 100) {
                            counter.textContent = Math.ceil(current);
                        } else {
                            counter.textContent = Math.ceil(current);
                        }
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target % 1 === 0 ? target : target.toFixed(1);
                    }
                };
                
                updateCounter();
            });
        }
    }
    
    /**
     * Interactive Demo Simulation
     */
    function initDemoSimulation() {
        const demoContainer = document.querySelector('#demo .bg-white.dark\\:bg-slate-800');
        if (!demoContainer) return;
        
        let currentStep = 0;
        const steps = demoContainer.querySelectorAll('[class*="bg-blue-50"], [class*="bg-indigo-50"], [class*="bg-green-50"]');
        
        // Hide all steps initially except the first
        steps.forEach((step, index) => {
            if (index > 0) {
                step.style.opacity = '0.3';
                step.style.transform = 'translateX(20px)';
            }
        });
        
        // Auto-advance demo every 4 seconds
        setInterval(() => {
            if (steps.length > 0) {
                // Reset previous step
                if (steps[currentStep]) {
                    steps[currentStep].style.opacity = '0.3';
                    steps[currentStep].style.transform = 'translateX(-20px)';
                }
                
                // Advance to next step
                currentStep = (currentStep + 1) % steps.length;
                
                // Animate current step
                setTimeout(() => {
                    if (steps[currentStep]) {
                        steps[currentStep].style.opacity = '1';
                        steps[currentStep].style.transform = 'translateX(0)';
                        steps[currentStep].style.transition = 'all 0.5s ease-in-out';
                        
                        // Add pulse effect
                        const pulseEffect = steps[currentStep].querySelector('[class*="animate-pulse"]');
                        if (pulseEffect) {
                            pulseEffect.style.animation = 'pulse 1s ease-in-out 3';
                        }
                    }
                }, 200);
            }
        }, 4000);
    }
    
    /**
     * Smooth Scrolling for Anchor Links
     */
    function initSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
    
    /**
     * Trending Visual Effects
     */
    function initTrendingEffects() {
        // Parallax effect for floating backgrounds
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('[class*="blur-3xl"]');
            
            parallaxElements.forEach((el, index) => {
                const speed = 0.5 + (index * 0.1);
                el.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.05}deg)`;
            });
        });
        
        // Industry cards hover effects
        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('mouseenter', function() {
                // Add magnetic effect
                this.style.transform = 'translateY(-8px) scale(1.02)';
                this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
                
                // VoIP Theme Glow effect using CSS variables
                this.style.setProperty('box-shadow', '0 25px 50px -12px var(--voip-hover)');
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '';
            });
        });
    }
    
    /**
     * Subtle Floating Elements (Only 1-2 sections)
     */
    function initFloatingElements() {
        // Only add floating particles to the AI Features section for premium effect
        const aiSection = document.querySelector('[class*="from-slate-900 to-indigo-900"]');
        
        // Add subtle particles to AI features section only
        if (aiSection) {
            createFloatingParticles(aiSection, 6); // Just 6 subtle particles
        }
        
        function createFloatingParticles(container, particleCount = 6) {
            const particles = [];
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'absolute w-1.5 h-1.5 bg-white/20 rounded-full pointer-events-none';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animation = `subtleFloat ${5 + Math.random() * 3}s ease-in-out infinite`;
                particle.style.animationDelay = Math.random() * 3 + 's';
                
                container.style.position = 'relative';
                container.appendChild(particle);
                particles.push(particle);
            }
            
            // Add subtle floating animation CSS if not exists
            if (!document.getElementById('floating-particles-style')) {
                const style = document.createElement('style');
                style.id = 'floating-particles-style';
                style.textContent = `
                    @keyframes subtleFloat {
                        0%, 100% { 
                            transform: translateY(0px) translateX(0px); 
                            opacity: 0.3; 
                        }
                        33% { 
                            transform: translateY(-15px) translateX(10px); 
                            opacity: 0.6; 
                        }
                        66% { 
                            transform: translateY(-8px) translateX(-5px); 
                            opacity: 0.4; 
                        }
                    }
                `;
                document.head.appendChild(style);
            }
        }
    }
    
    /**
     * Enhanced Scroll Animations
     */
    function initAdvancedScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add staggered animations to child elements
                    const children = entry.target.querySelectorAll('[class*="animate__fadeInUp"], [class*="animate__fadeInLeft"], [class*="animate__fadeInRight"]');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.style.opacity = '1';
                            child.style.transform = 'translateY(0)';
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    }
    
    /**
     * Interactive CTA Enhancements
     */
    function initCTAEnhancements() {
        // Add magnetic effect to CTA buttons
        document.querySelectorAll('.group.relative.bg-white\\/10').forEach(cta => {
            cta.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                this.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
            });
            
            cta.addEventListener('mouseleave', function() {
                this.style.transform = 'translate(0, 0)';
                this.style.transition = 'transform 0.3s ease';
            });
        });
    }
    
    // Initialize advanced features
    initAdvancedScrollAnimations();
    initCTAEnhancements();
    
    // Add loading completion effect
    window.addEventListener('load', () => {
        document.body.classList.add('page-loaded');
        
        // Trigger hero animations
        setTimeout(() => {
            const heroElements = document.querySelectorAll('.hero-element');
            heroElements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('animate-in');
                }, index * 200);
            });
        }, 500);
    });
});

/**
 * Performance optimization for animations
 */
let ticking = false;

function updateAnimations() {
    // Your animation code here
    ticking = false;
}

function requestTick() {
    if (!ticking) {
        requestAnimationFrame(updateAnimations);
        ticking = true;
    }
}

// Throttled scroll listener
window.addEventListener('scroll', requestTick);