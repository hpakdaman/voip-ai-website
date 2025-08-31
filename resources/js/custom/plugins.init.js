/* Template Name: Techwind - Laravel 12 Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 1.0.0
   Created: May 2025
   File Description: Common JS file of the template(plugins.init.js)
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Tiny Slider          *
 *     02.  Swiper slider        *
 *     03.  Countdown Js         * (For Comingsoon pages)
 *     04.  Maintenance js       * (For Maintenance page)
 *     05.  Data Counter         *
 *     06.  Datepicker js        *
 *     07.  Gallery filter js    * (For Portfolio pages)
 *     08.  Tobii lightbox       * (For Portfolio pages)
 *     09.  Fade Animation       * 
 *     10.  Typed Text animation (animation) * 
 *     11.  Validation Form      * 
 *     12.  Switcher Pricing Plan* 
 *     13.  Cookies Policy       *
 *     14.  Back Button          *
 *     15.  Particles            *
 *     16.  Components           *
 *          1. Navtabs           *
 *          2. Carousel          *
 *          3. Accordions        *
 *     17. Upload Profile        *
 *     18. Custom Dropdown       * (For Dropdown)
 *     19. Connect wallet        * (Only For MetaMask)
 ================================*/
         
//=========================================//
/*            01) Tiny slider              */
//=========================================//

/* global tns */

const initTinySlider = (selector, options) => {
    const elements = document.querySelectorAll(selector);
    if (elements.length > 0) {
        tns({
            container: selector,
            ...options
        });
    }
};

// Default options
const defaultOptions = {
    controls: true,
    mouseDrag: true,
    loop: true,
    rewind: true,
    autoplay: true,
    autoplayButtonOutput: false,
    autoplayTimeout: 3000,
    navPosition: "bottom",
    controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
    nav: false,
    speed: 400,
    gutter: 0
};

// Slider configurations
initTinySlider('.tiny-single-item', {
    ...defaultOptions,
    controls: false,
    items: 1,
    gutter: 16,
    nav: true
});

initTinySlider('.tiny-one-item', {
    ...defaultOptions,
    items: 1
});

initTinySlider('.tiny-two-item', {
    ...defaultOptions,
    responsive: {
        768: { items: 2 }
    }
});

initTinySlider('.tiny-three-item', {
    ...defaultOptions,
    controls: false,
    gutter: 12,
    responsive: {
        992: { items: 3 },
        767: { items: 2 },
        320: { items: 1 }
    }
});

initTinySlider('.tiny-three-item-icon', {
    ...defaultOptions,
    responsive: {
        992: { items: 3 },
        767: { items: 2 },
        320: { items: 1 }
    }
});

initTinySlider('.tiny-five-item', {
    ...defaultOptions,
    responsive: {
        1025: { items: 5 },
        992: { items: 4 },
        767: { items: 3 },
        425: { items: 1 }
    }
});

initTinySlider('.tiny-six-item', {
    ...defaultOptions,
    responsive: {
        1025: { items: 6 },
        992: { items: 4 },
        767: { items: 3 },
        320: { items: 1 }
    }
});

initTinySlider('.tiny-ten-item', {
    ...defaultOptions,
    responsive: {
        1025: { items: 10 },
        992: { items: 7 },
        767: { items: 5 },
        320: { items: 2 }
    }
});

initTinySlider('.tiny-twelve-item', {
    ...defaultOptions,
    responsive: {
        1025: { items: 12 },
        992: { items: 8 },
        767: { items: 6 },
        320: { items: 2 }
    }
});

initTinySlider('.tiny-home-slide-four', {
    ...defaultOptions,
    responsive: {
        1025: { items: 4 },
        992: { items: 3 },
        767: { items: 2 },
        320: { items: 1 }
    }
});

//=========================================//
/*            02) Swiper slider            */
//=========================================//

/* global Swiper */

const swiperContainer = document.querySelector(".mySwiper");

if (swiperContainer) {
    try {
        new Swiper(swiperContainer, {
            keyboard: {
                enabled: true,
                onlyInViewport: true,
            },
            loop: true,
            speed: 2000,
            parallax: true,
            grabCursor: true,
            effect: "creative",
            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-20%", 0, -1],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },
        });
    } catch (error) {
        console.error("Swiper initialization failed:", error);
    }
}

//=========================================//
/*            03) Countdown                */
//=========================================//
try {
    const endDates = [
        { id: "auction-item-1", date: "December 29, 2025 06:00:00" },
        { id: "auction-item-2", date: "January 13, 2026 05:03:01" },
        { id: "auction-item-3", date: "January 22, 2026 01:00:01" },
        { id: "auction-item-4", date: "February 14, 2026 01:02:01" },
        { id: "auction-item-5", date: "March 01, 2026 01:06:06" },
        { id: "auction-item-6", date: "March 15, 2026 02:05:05" },
        { id: "auction-item-7", date: "April 08, 2026 05:01:04" },
        { id: "auction-item-8", date: "April 20, 2026 01:06:03" },
        { id: "auction-item-9", date: "May 30, 2026 01:05:02" }
    ];

    // Precompute countdown end timestamps
    const countdowns = endDates.map(item => ({
        id: item.id,
        element: document.getElementById(item.id),
        endTime: new Date(item.date).getTime()
    }));

    const timer = setInterval(() => {
        const now = new Date().getTime();
        let allDone = true;

        countdowns.forEach(item => {
            if (!item.element) return;

            const distance = item.endTime - now;

            if (distance < 0) {
                item.element.textContent = "00 : 00 : 00 : 00";
                return;
            }

            allDone = false;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            const format = num => num < 10 ? "0" + num : num;

            item.element.textContent = `${format(days)} : ${format(hours)} : ${format(minutes)} : ${format(seconds)}`;
        });

        if (allDone) clearInterval(timer);
    }, 1000);

} catch (error) {
    console.error("Countdown error:", error);
}

try {
    if (document.getElementById("days")) {
        const eventCountDown = new Date("July 25, 2026 16:37:52").getTime();

        const eventTimer = setInterval(() => {
            const now = new Date().getTime();
            const timeleft = eventCountDown - now;

            if (timeleft < 0) {
                clearInterval(eventTimer);
                document.getElementById("days").innerHTML = "";
                document.getElementById("hours").innerHTML = "";
                document.getElementById("mins").innerHTML = "";
                document.getElementById("secs").innerHTML = "";
                document.getElementById("end").innerHTML = "00:00:00:00";
                return;
            }

            const days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = days + "<p class='count-head'>Days</p>";
            document.getElementById("hours").innerHTML = hours + "<p class='count-head'>Hours</p>";
            document.getElementById("mins").innerHTML = minutes + "<p class='count-head'>Mins</p>";
            document.getElementById("secs").innerHTML = seconds + "<p class='count-head'>Secs</p>";
        }, 1000);
    }
} catch (err) {
    console.error("Event countdown error:", err);
}


//=========================================//
/*/*            04) Maintenance js         */
//=========================================//

try {
    const maintenanceEl = document.getElementById("maintenance");
    if (maintenanceEl) {
        let seconds = 3599;

        const countdownTimer = setInterval(() => {
            const minutes = Math.floor(seconds / 60);
            let remainingSeconds = seconds % 60;
            remainingSeconds = remainingSeconds < 10 ? "0" + remainingSeconds : remainingSeconds;

            maintenanceEl.textContent = minutes + ":" + remainingSeconds;

            if (seconds === 0) {
                clearInterval(countdownTimer);
                maintenanceEl.textContent = "Buzz Buzz";
            } else {
                seconds--;
            }
        }, 1000);
    }
} catch (err) {
    console.error("Maintenance countdown error:", err);
}

//=========================================//
/*/*            05) Data Counter           */
//=========================================//

try {
    const counters = document.querySelectorAll('.counter-value');
    const duration = 2500; // total duration in ms

    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const startTime = performance.now();

        const animate = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const currentValue = Math.floor(progress * target);
            counter.innerText = currentValue;

            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {
                counter.innerText = target; // ensure exact target at end
            }
        };

        requestAnimationFrame(animate);
    });
} catch (err) {
    console.error("Counter animation error:", err);
}


//=========================================//
/*/*            06) Datepicker js*/
//=========================================//

/* global datepicker */

try {
    const startEl = document.querySelector('.start');
    const endEl = document.querySelector('.end');

    if (startEl) {
        new datepicker(startEl, { id: 1 });
    }
    if (endEl) {
        new datepicker(endEl, { id: 1 });
    }
} catch (err) {
    console.error("Datepicker initialization error:", err);
}


//=========================================//
/*/*            07) Gallery filter js      */
//=========================================//

try {
    const Shuffle = window.Shuffle;

    class Demo {
        constructor(element) {
            if (!element) return;

            this.element = element;
            this.shuffle = new Shuffle(this.element, {
                itemSelector: '.picture-item',
                sizer: this.element.querySelector('.my-sizer-element'),
            });

            this._activeFilters = [];
            this.filterOptions = document.querySelector('.filter-options');

            this.addShuffleEventListeners();
            this.addFilterButtons();
        }

        addShuffleEventListeners() {
            this.shuffle.on(Shuffle.EventType.LAYOUT, data => {
                console.log('Layout event:', data);
            });

            this.shuffle.on(Shuffle.EventType.REMOVED, data => {
                console.log('Removed event:', data);
            });
        }

        addFilterButtons() {
            if (!this.filterOptions) return;

            const filterButtons = Array.from(this.filterOptions.children);
            const onClick = this._handleFilterClick.bind(this);

            filterButtons.forEach(button => {
                button.addEventListener('click', onClick, false);
            });
        }

        _handleFilterClick(evt) {
            const btn = evt.currentTarget;
            const isActive = btn.classList.contains('active');
            const btnGroup = btn.getAttribute('data-group');

            this._removeActiveClassFromChildren(btn.parentNode);

            const filterGroup = isActive ? Shuffle.ALL_ITEMS : btnGroup;

            if (isActive) {
                btn.classList.remove('active');
            } else {
                btn.classList.add('active');
            }

            this.shuffle.filter(filterGroup);
        }

        _removeActiveClassFromChildren(parent) {
            if (!parent?.children) return;

            Array.from(parent.children).forEach(child => {
                child.classList.remove('active');
            });
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const gridElement = document.getElementById('grid');
        if (gridElement) {
            window.demo = new Demo(gridElement);
        }
    });
} catch (err) {
    console.error('Shuffle initialization failed:', err);
}


//=========================================//
/*/*            08) Tobii lightbox         */
//=========================================//

/* global Tobii */

try {
    new Tobii();
} catch (err) {
    console.error('Failed to initialize Tobii:', err);
}


//=========================================//
/*/*            09) Fade Animation         */
//=========================================//

/* global AOS */

try {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });
        console.log('AOS initialized successfully.');
    } else {
        console.warn('AOS library not found.');
    }
} catch (err) {
    console.error('Error initializing AOS:', err);
}


//=========================================//
/*/* 10) Typed Text animation (animation) */
//=========================================//

try {
    class TxtType {
        constructor(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.isDeleting = false;
            this.tick();
        }

        tick() {
            const i = this.loopNum % this.toRotate.length;
            const fullTxt = this.toRotate[i];

            this.txt = this.isDeleting
                ? fullTxt.substring(0, this.txt.length - 1)
                : fullTxt.substring(0, this.txt.length + 1);

            this.el.innerHTML = `<span class="wrap">${this.txt}</span>`;

            let delta = 200 - Math.random() * 100;
            if (this.isDeleting) delta /= 2;

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(() => this.tick(), delta);
        }
    }

    function typewrite() {
        const elements = document.querySelectorAll('.typewrite');

        elements.forEach(el => {
            const toRotate = el.getAttribute('data-type');
            const period = el.getAttribute('data-period');

            if (toRotate) {
                try {
                    new TxtType(el, JSON.parse(toRotate), period);
                } catch {
                    console.error('Invalid data-type JSON format in element:', el);
                }
            }
        });

        // Inject CSS if not already present
        if (!document.getElementById('typewrite-style')) {
            const css = document.createElement("style");
            css.id = 'typewrite-style';
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid transparent }";
            document.head.appendChild(css);
        }
    }

    window.addEventListener('load', typewrite);
} catch (err) {
    console.error('Typewriter effect error:', err);
}


//=========================================//
/*/*    11) Validation Shop Checkouts      */
//=========================================//

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {
        const forms = document.querySelectorAll('.needs-validation');

        if (forms.length === 0) return;

        forms.forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    });
})();


//=========================================//
/*/*      12) Cookies Policy               */
//=========================================//

try {
    /* Utility functions */
    function getElement(selector) { 
        return document.querySelector(selector);
    }
    function getElements(selector) { 
        return document.querySelectorAll(selector);
    }
    function addEventToElements(selector, event, handler) { 
        getElements(selector).forEach(element => element.addEventListener(event, handler));
    }
    function getCookieValue(name) { 
        const cookie = document.cookie.split('; ').find(c => c && c.startsWith(name + '='));
        return cookie ? cookie.split('=')[1] : null;
    }

    const cookiePopup = getElement('.cookie-popup');

    if (cookiePopup) {
        /* Handle cookie popup button click */
        addEventToElements('.cookie-popup button', 'click', () => {
            cookiePopup.classList.add('cookie-popup-accepted');
            document.cookie = 'cookie-accepted=true; path=/; max-age=' + 60*60*24*365; // 1 year
        });

        /* Initialize popup visibility */
        if (getCookieValue('cookie-accepted') !== "true") {
            cookiePopup.classList.add('cookie-popup-not-accepted');
        }
    }
} catch (error) {
    console.error('Cookie popup error:', error);
}

//=========================================//
/*/*            13) Back Button            */
//=========================================//
try {
    const backButton = document.getElementsByClassName("back-button")[0];
    if (backButton) {
        backButton.addEventListener("click", (event) => {
            if (document.referrer !== "") {
                event.preventDefault();
                window.location.href = document.referrer;
            }
        });
    }
} catch (error) {
    console.error('Back button error:', error);
}

  
//=========================================//
/*            14) Particles                */
//=========================================//

/* global particlesJS */

try {
    const particlesElement = document.getElementById("particles-snow");

    if (particlesElement) {
        particlesJS("particles-snow", {
            "particles": {
                "number": {
                    "value": 250,
                    "density": {
                        "enable": false,
                        "value_area": 1800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 36
                    },
                    "image": {
                        "src": "",
                        "width": 1000,
                        "height": 1000
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 0.5,
                        "opacity_min": 1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3.2,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 20,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 100,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 2
                },
                "move": {
                    "enable": true,
                    "speed": 5,
                    "direction": "bottom",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 1500,
                        "rotateY": 2000
                    }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: false, mode: "repulse" },
                    onclick: { enable: false, mode: "push" },
                    resize: true
                },
                modes: {
                    grab: { distance: 200, line_linked: { opacity: 1 } },
                    bubble: { distance: 400, size: 80, duration: 4, opacity: 8, speed: 15 },
                    repulse: { distance: 71, duration: 0.6 },
                    push: { particles_nb: 6 },
                    remove: { particles_nb: 2 }
                }
            },
            retina_detect: true
        });
    } else {
        console.log("particles-snow element not found, skipping particlesJS.");
    }
} catch (error) {
    console.error('particlesJS init error:', error);
}

//=========================================//
/*            15) Choice js                */
//=========================================//

/* global Choices */

try {
    // Location dropdown
    const locationSelect = document.getElementById('choices-location');
    if (locationSelect) {
        new Choices(locationSelect);
    }

    // Type/Categories dropdown
    const typeSelect = document.getElementById('choices-type');
    if (typeSelect) {
        new Choices(typeSelect);
    }

    // Category dropdown
    const categorySelect = document.getElementById('choices-catagory');
    if (categorySelect) {
        new Choices(categorySelect);
    }

    // Min price dropdown
    const minPriceSelect = document.getElementById('choices-min-price');
    if (minPriceSelect) {
        new Choices(minPriceSelect);
    }

    // Max price dropdown
    const maxPriceSelect = document.getElementById('choices-max-price');
    if (maxPriceSelect) {
        new Choices(maxPriceSelect);
    }

} catch (error) {
    console.error('Choices.js initialization error:', error);
}

//=========================================//
/*            16) Components               */
//=========================================//

//============= 01) Navtabs ===============//
try {
    const Default = {
        defaultTabId: null,
        activeClasses: 'text-white bg-indigo-600',
        inactiveClasses: 'hover:text-indigo-600 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-slate-800',
        onShow: () => { }
    }
    
    class Tabs {
        constructor(items = [], options = {}) {
            this._items = items
            this._activeTab = options ? this.getTab(options.defaultTabId) : null
            this._options = { ...Default, ...options }
            this._init()
        }
    
        _init() {
            if (this._items.length) {
                // set the first tab as active if not set by explicitly
                if (!this._activeTab) {
                    this._setActiveTab(this._items[0])
                }
    
                // force show the first default tab
                this.show(this._activeTab.id, true)
    
                // show tab content based on click
                this._items.map(tab => {
                    tab.triggerEl.addEventListener('click', () => {
                        this.show(tab.id)
                    })
                })
            }
        }
    
        getActiveTab() {
            return this._activeTab
        }
    
        _setActiveTab(tab) {
            this._activeTab = tab
        }
    
        getTab(id) {
            return this._items.filter(t => t.id === id)[0]
        }
    
        show(id, forceShow = false) {
            const tab = this.getTab(id)
    
            // don't do anything if already active
            if (tab === this._activeTab && !forceShow) {
                return
            }
    
            // hide other tabs
            this._items.map(t => {
                if (t !== tab) {
                    t.triggerEl.classList.remove(...this._options.activeClasses.split(" "));
                    t.triggerEl.classList.add(...this._options.inactiveClasses.split(" "));
                    t.targetEl.classList.add('hidden')
                    t.triggerEl.setAttribute('aria-selected', false)
                }
            })
    
            // show active tab
            tab.triggerEl.classList.add(...this._options.activeClasses.split(" "));
            tab.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "));
            tab.triggerEl.setAttribute('aria-selected', true)
            tab.targetEl.classList.remove('hidden')
    
            this._setActiveTab(tab)
    
            // callback function
            this._options.onShow(this, tab)
        }
    
    }
    
    window.Tabs = Tabs;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-tabs-toggle]').forEach(triggerEl => {
    
            const tabElements = []
            let defaultTabId = null
            triggerEl.querySelectorAll('[role="tab"]').forEach(el => {
                const isActive = el.getAttribute('aria-selected') === 'true'
                const tab = {
                    id: el.getAttribute('data-tabs-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-tabs-target'))
                }
                tabElements.push(tab)
    
                if (isActive) {
                    defaultTabId = tab.id
                }
            })
            new Tabs(tabElements, {
                defaultTabId: defaultTabId
            })
        })
    })
} catch (error) {
    console.error('Tabs initialization failed:', error);
}

//******** 2) Carousel********//
try {
    const Default = {
        defaultPosition: 0,
        indicators: {
            items: [],
            activeClasses: 'bg-white dark:bg-gray-800',
            inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800'
        },
        interval: 6000,
        onNext: () => { },
        onPrev: () => { },
        onChange: () => { }
    }
    
    class Carousel {
        constructor(items = [], options = {}) {
            this._items = items
            this._options = { ...Default, ...options, indicators : { ...Default.indicators, ...options.indicators } }
            this._activeItem = this.getItem(this._options.defaultPosition)
            this._indicators = this._options.indicators.items
            this._interval = null
            this._init()
            this.cycle()
    
        }
    
        /**
         * Initialise carousel and items based on active one
         */
        _init() {
            this._items.map(item => {
                item.el.classList.add('absolute', 'inset-0', 'transition-all', 'transform')
            })
    
            // if no active item is set then first position is default
            if (this._getActiveItem()) {
                this.slideTo(this._getActiveItem().position)
            } else {
                this.slideTo(0)
            }
    
            this._indicators.map((indicator, position) => {
                indicator.el.addEventListener('click', () => {
                    this.slideTo(position)
                })
            })
        }
    
        getItem(position) {
            return this._items[position]
        }
    
        /**
         * Slide to the element based on id
         * @param {*} position 
         */
        slideTo(position) {
            const nextItem = this._items[position]
            const rotationItems = {
                'left': nextItem.position === 0 ? this._items[this._items.length - 1] : this._items[nextItem.position - 1],
                'middle': nextItem,
                'right': nextItem.position === this._items.length - 1 ? this._items[0] : this._items[nextItem.position + 1]
            }
            this._rotate(rotationItems)
            this._setActiveItem(nextItem.position)
            if (this._interval) {
                this.pause()
                this.cycle()
            }
    
            this._options.onChange(this)
        }
    
        /**
         * Based on the currently active item it will go to the next position
         */
        next() {
            const activeItem = this._getActiveItem()
            let nextItem = null
    
            // check if last item
            if (activeItem.position === this._items.length - 1) {
                nextItem = this._items[0]
            } else {
                nextItem = this._items[activeItem.position + 1]
            }
    
            this.slideTo(nextItem.position)
    
            // callback function
            this._options.onNext(this)
        }
    
        /**
         * Based on the currently active item it will go to the previous position
         */
        prev() {
            const activeItem = this._getActiveItem()
            let prevItem = null
    
            // check if first item
            if (activeItem.position === 0) {
                prevItem = this._items[this._items.length - 1]
            } else {
                prevItem = this._items[activeItem.position - 1]
            }
    
            this.slideTo(prevItem.position)
    
            // callback function
            this._options.onPrev(this)
        }
    
        /**
         * This method applies the transform classes based on the left, middle, and right rotation carousel items
         * @param {*} rotationItems 
         */
        _rotate(rotationItems) {
            // reset
            this._items.map(item => {
                item.el.classList.add('hidden')
            })
    
            // left item (previously active)
            rotationItems.left.el.classList.remove('-translate-x-full', 'translate-x-full', 'translate-x-0', 'hidden', 'z-20')
            rotationItems.left.el.classList.add('-translate-x-full', 'z-10')
    
            // currently active item
            rotationItems.middle.el.classList.remove('-translate-x-full', 'translate-x-full', 'translate-x-0', 'hidden', 'z-10')
            rotationItems.middle.el.classList.add('translate-x-0', 'z-20')
    
            // right item (upcoming active)
            rotationItems.right.el.classList.remove('-translate-x-full', 'translate-x-full', 'translate-x-0', 'hidden', 'z-20')
            rotationItems.right.el.classList.add('translate-x-full', 'z-10')
        }
    
        /**
         * Set an interval to cycle through the carousel items
         */
        cycle() {
            this._interval = setInterval(() => {
                this.next();
            }, this._options.interval)
        }
    
        /**
         * Clears the cycling interval
         */
        pause() {
            clearInterval(this._interval);
        }
    
        /**
         * Get the currently active item
         */
        _getActiveItem() {
            return this._activeItem
        }
    
        /**
         * Set the currently active item and data attribute
         * @param {*} position 
         */
        _setActiveItem(position) {
            this._activeItem = this._items[position]
    
            // update the indicators if available
            if (this._indicators.length) {
                this._indicators.map(indicator => {
                    indicator.el.setAttribute('aria-current', 'false')
                    indicator.el.classList.remove(...this._options.indicators.activeClasses.split(" "))
                    indicator.el.classList.add(...this._options.indicators.inactiveClasses.split(" "))
                })
                this._indicators[position].el.classList.add(...this._options.indicators.activeClasses.split(" "))
                this._indicators[position].el.classList.remove(...this._options.indicators.inactiveClasses.split(" "))
                this._indicators[position].el.setAttribute('aria-current', 'true')
            }
        }
    
    }
    
    window.Carousel = Carousel;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-carousel]').forEach(carouselEl => {
            const interval = carouselEl.getAttribute('data-carousel-interval')
            const slide = carouselEl.getAttribute('data-carousel') === 'slide' ? true : false
    
            const items = []
            let defaultPosition = 0
            if (carouselEl.querySelectorAll('[data-carousel-item]').length) {
                [...carouselEl.querySelectorAll('[data-carousel-item]')].map((carouselItemEl, position) => {
                    items.push({
                        position: position,
                        el: carouselItemEl
                    })
    
                    if (carouselItemEl.getAttribute('data-carousel-item') === 'active') {
                        defaultPosition = position
                    }
                })
            }
    
            const indicators = [];
            if (carouselEl.querySelectorAll('[data-carousel-slide-to]').length) {
                [...carouselEl.querySelectorAll('[data-carousel-slide-to]')].map((indicatorEl) => {
                    indicators.push({
                        position: indicatorEl.getAttribute('data-carousel-slide-to'),
                        el: indicatorEl
                    })
                })
            }
    
            const carousel = new Carousel(items, {
                defaultPosition: defaultPosition,
                indicators: {
                    items: indicators
                },
                interval: interval ? interval : Default.interval
            })
    
            if (slide) {
                carousel.cycle();
            }
    
            // check for controls
            const carouselNextEl = carouselEl.querySelector('[data-carousel-next]')
            const carouselPrevEl = carouselEl.querySelector('[data-carousel-prev]')
    
            if (carouselNextEl) {
                carouselNextEl.addEventListener('click', () => {
                    carousel.next()
                })
            }
    
            if (carouselPrevEl) {
                carouselPrevEl.addEventListener('click', () => {
                    carousel.prev()
                })
            }
    
        })
    })
    
} catch (error) {
    console.error('Tabs initialization failed:', error);
}

//********3) Accordions********/
try {
    const Default = {
        alwaysOpen: false,
        activeClasses: 'bg-gray-50 dark:bg-slate-800 text-indigo-600',
        inactiveClasses: 'text-slate-900 dark:text-white',
        onOpen: () => { },
        onClose: () => { },
        onToggle: () => { }
    }
    
    class Accordion {
        constructor(items = [], options = {}) {
            this._items = items
            this._options = { ...Default, ...options }
            this._init()
        }
    
        _init() {
            if (this._items.length) {
                // show accordion item based on click
                this._items.map(item => {
    
                    if (item.active) {
                        this.open(item.id)
                    }
    
                    item.triggerEl.addEventListener('click', () => {
                        this.toggle(item.id)
                    })
                })
            }
        }
    
        getItem(id) {
            return this._items.filter(item => item.id === id)[0]
        }
    
        open(id) {
            const item = this.getItem(id)
    
            // don't hide other accordions if always open
            if (!this._options.alwaysOpen) {
                this._items.map(i => {
                    if (i !== item) {
                        i.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
                        i.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
                        i.targetEl.classList.add('hidden')
                        i.triggerEl.setAttribute('aria-expanded', false)
                        i.active = false
    
                        // rotate icon if set
                        if (i.iconEl) {
                            i.iconEl.classList.remove('rotate-180')
                        }
                    }
                })
            }
    
            // show active item
            item.triggerEl.classList.add(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "))
            item.triggerEl.setAttribute('aria-expanded', true)
            item.targetEl.classList.remove('hidden')
            item.active = true
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.add('rotate-180')
            }
    
            // callback function
            this._options.onOpen(this, item)
        }
    
        toggle(id) {
            const item = this.getItem(id)
    
            if (item.active) {
                this.close(id)
            } else {
                this.open(id)
            }
    
            // callback function
            this._options.onToggle(this, item)
        }
    
        close(id) {
            const item = this.getItem(id)
    
            item.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
            item.targetEl.classList.add('hidden')
            item.triggerEl.setAttribute('aria-expanded', false)
            item.active = false
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.remove('rotate-180')
            }
    
            // callback function
            this._options.onClose(this, item)
        }
    
    }
    
    window.Accordion = Accordion;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-accordion]').forEach(accordionEl => {
    
            const alwaysOpen = accordionEl.getAttribute('data-accordion')
            const activeClasses = accordionEl.getAttribute('data-active-classes')
            const inactiveClasses = accordionEl.getAttribute('data-inactive-classes')
    
            const items = []
            accordionEl.querySelectorAll('[data-accordion-target]').forEach(el => {
                const item = {
                    id: el.getAttribute('data-accordion-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-accordion-target')),
                    iconEl: el.querySelector('[data-accordion-icon]'),
                    active: el.getAttribute('aria-expanded') === 'true' ? true : false
                }
                items.push(item)
            })
    
            new Accordion(items, {
                alwaysOpen: alwaysOpen === 'open' ? true : false,
                activeClasses: activeClasses ? activeClasses : Default.activeClasses,
                inactiveClasses: inactiveClasses ? inactiveClasses : Default.inactiveClasses
            })
        })
    })
} catch (error) {
    console.error('Accordion initialization failed:', error);
}

//=========================================//
/*            18) Upload Profile           */
//=========================================//

/* eslint-disable no-unused-vars */

function loadFile(event) {
    const targetImage = document.getElementById(event.target.name);
    if (targetImage) {
        targetImage.src = URL.createObjectURL(event.target.files[0]);
    }
}

//=========================================//
/*            19) Custom Dropdown          */
//=========================================//

document.querySelectorAll(".dropdown").forEach(function (dropdown) {
    dropdown.querySelectorAll(".dropdown-toggle").forEach(function (toggle) {
        toggle.addEventListener("click", function (event) {
            // Toggle the 'block' class on the toggle button
            toggle.classList.toggle("block");

            const menu = dropdown.querySelector(".dropdown-menu");

            if (!toggle.classList.contains("block")) {
                // Hide dropdown menu if toggle is inactive
                menu.classList.remove("block");
                menu.classList.add("hidden");
            } else {
                // Close all other dropdown menus before opening this one
                dismissDropdownMenu();

                // Show this dropdown menu
                menu.classList.add("block");
                menu.classList.remove("hidden");

                // Sync toggle button state based on menu visibility
                if (menu.classList.contains("block")) {
                    toggle.classList.add("block");
                } else {
                    toggle.classList.remove("block");
                }

                event.stopPropagation(); // Prevent click from bubbling up and closing menu immediately
            }
        });
    });
});

// Function to close all dropdown menus and reset toggles
function dismissDropdownMenu() {
    document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
        menu.classList.remove("block");
        menu.classList.add("hidden");
    });

    document.querySelectorAll(".dropdown-toggle").forEach(function (toggle) {
        toggle.classList.remove("block");
    });
}

// Close all dropdown menus when clicking anywhere outside
window.addEventListener('click', function () {
    dismissDropdownMenu();
});

// Prevent clicks inside dropdown menus from closing them
const dropdownMenus = document.getElementsByClassName("dd-menu");
for (let i = 0; i < dropdownMenus.length; i++) {
    dropdownMenus[i].addEventListener('click', function (event) {
        event.stopPropagation();
    });
}

//=========================================//
/*            20) Connect wallet           */
//=========================================//

/* global ethereum */

;(async function () {
  try {
    // Elements
    const connectWalletBtn = document.getElementById('connectWallet');
    const metamaskModal = document.getElementById('modal-metamask');
    const closeModalBtn = document.getElementById('close-modal');
    const publicAddressDisplay = document.getElementById('myPublicAddress');

    if (!connectWalletBtn || !closeModalBtn) {
      console.warn('Required buttons not found in the DOM. Exiting.');
      return;
    }

    if (!metamaskModal) {
      console.warn('MetaMask modal element not found');
    }
    if (!publicAddressDisplay) {
      console.warn('Public address display element not found');
    }

    const isMetaMaskInstalled = () => {
      const { ethereum } = window;
      return Boolean(ethereum && ethereum.isMetaMask);
    };

    const formatAddress = (address) => {
      return address.slice(0, 6) + '...' + address.slice(-7);
    };

    const connectWallet = async () => {
      if (!isMetaMaskInstalled()) {
        metamaskModal.classList.add('show');
        metamaskModal.style.display = 'block';
        return;
      }
      try {
        await ethereum.request({ method: 'eth_requestAccounts' });
        const accounts = await ethereum.request({ method: 'eth_accounts' });
        if (accounts.length > 0) {
          publicAddressDisplay.textContent = formatAddress(accounts[0]);
        }
      } catch (error) {
        console.error('Error connecting to MetaMask:', error);
      }
    };

    const closeModal = () => {
      metamaskModal.classList.remove('show');
      metamaskModal.style.display = 'none';
    };

    if (isMetaMaskInstalled()) {
      const accounts = await ethereum.request({ method: 'eth_accounts' });
      if (accounts.length > 0) {
        publicAddressDisplay.textContent = formatAddress(accounts[0]);
      }
    }

    connectWalletBtn.addEventListener('click', connectWallet);
    closeModalBtn.addEventListener('click', closeModal);
  } catch (error) {
    console.error('Initialization error:', error);
  }
})();