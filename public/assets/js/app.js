/* Template Name: Techwind - Laravel 12 Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 1.0.0
   Created: May 2025
   File Description: Main JS file of the template
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Loader               *
 *     02.  Toggle Menus         *
 *     03.  Menu Active          *
 *     04.  Clickable Menu       *
 *     05.  Menu Sticky          *
 *     06.  Back to top          *
 *     07.  Active Sidebar       *
 *     08.  Feather icon         *
 *     09.  Small Menu           *
 *     10.  Wow Animation JS     *
 *     11.  Contact us           *
 *     12.  Dark & Light Mode    *
 *     13.  LTR & RTL Mode       *
 ================================*/


window.addEventListener('load', fn, false)

function fn() {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        setTimeout(() => {
            preloader.style.visibility = 'hidden';
            preloader.style.opacity = '0';
        }, 350);
    }

    activateMenu();
}

//Menu
/*********************/
/* Toggle Menu */
/*********************/
function toggleMenu() {
    const isToggle = document.getElementById('isToggle');
    const navigation = document.getElementById('navigation');
    if (isToggle && navigation) {
        isToggle.classList.toggle('open');
        navigation.style.display = (navigation.style.display === "block") ? "none" : "block";
    }
}
/*********************/
/*    Menu Active    */
/*********************/
function getClosest(elem, selector) {
    if (!Element.prototype.matches) {
        Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
    }
    for (; elem && elem !== document; elem = elem.parentNode) {
        if (elem.matches(selector)) return elem;
    }
    return null;
}

function activateMenu() {
    const menuItems = document.getElementsByClassName("sub-menu-item");
    if (menuItems) {
        let matchingMenuItem = null;
        for (let i = 0; i < menuItems.length; i++) {
            if (menuItems[i].href === window.location.href) {
                matchingMenuItem = menuItems[i];
            }
        }

        if (matchingMenuItem) {
            matchingMenuItem.classList.add('active');

            const immediateParent = getClosest(matchingMenuItem, 'li');
            if (immediateParent) immediateParent.classList.add('active');

            let parent = getClosest(immediateParent, '.child-menu-item');
            if (parent) parent.classList.add('active');

            parent = getClosest(parent || immediateParent, '.parent-menu-item');
            if (parent) {
                parent.classList.add('active');
                const parentMenuItem = parent.querySelector('.menu-item');
                if (parentMenuItem) parentMenuItem.classList.add('active');

                const parentOfParent = getClosest(parent, '.parent-parent-menu-item');
                if (parentOfParent) parentOfParent.classList.add('active');
            } else {
                const parentOfParent = getClosest(matchingMenuItem, '.parent-parent-menu-item');
                if (parentOfParent) parentOfParent.classList.add('active');
            }
        }
    }
}
/*********************/
/*  Clickable manu   */
/*********************/
const nav = document.getElementById("navigation");
if (nav) {
    const elements = nav.getElementsByTagName("a");
    for (let i = 0; i < elements.length; i++) {
        elements[i].onclick = function (e) {
            if (e.target.getAttribute("href") === "javascript:void(0)") {
                const submenu = e.target.nextElementSibling?.nextElementSibling;
                submenu?.classList.toggle('open');
            }
        }
    }
}
/*********************/
/*   Menu Sticky     */
/*********************/
function windowScroll() {
    const navbar = document.getElementById("topnav");
    if (navbar) {
        if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
            navbar.classList.add("nav-sticky");
        } else {
            navbar.classList.remove("nav-sticky");
        }
    }
}
window.addEventListener('scroll', (e) => {
    e.preventDefault();
    windowScroll();
});
/*********************/
/*    Back To TOp    */
/*********************/

window.onscroll = scrollFunction;

function scrollFunction() {
    const mybutton = document.getElementById("back-to-top");
    if (mybutton) {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.classList.add("block");
            mybutton.classList.remove("hidden");
        } else {
            mybutton.classList.add("hidden");
            mybutton.classList.remove("block");
        }
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/*********************/
/*  Active Sidebar   */
/*********************/
(function () {
    const current = location.pathname.substring(location.pathname.lastIndexOf('/') + 1);
    if (!current) return;
    const menuItems = document.querySelectorAll('.sidebar-nav a');
    menuItems.forEach(item => {
        if (item.getAttribute("href").indexOf(current) !== -1) {
            item.parentElement.className += " active";
        }
    });
})();

/*********************/
/*   Feather Icons   */
/*********************/
// Initialize Feather Icons
if (typeof feather !== 'undefined') {
    feather.replace();
    console.log('Feather icons initialized successfully');
} else {
    console.warn('Feather icons library not found');
}

/*********************/
/*     Small Menu    */
/*********************/
try {
    // Only initialize Gumshoe if the navigation menu exists
    const navMenu = document.querySelector('#navmenu-nav');
    if (navMenu && navMenu.querySelectorAll('a').length > 0) {
        new Gumshoe('#navmenu-nav a', {
            offset: 80,
            reflow: true,
            navClass: 'active',
            contentClass: 'active',
            nested: false,
            nestedClass: 'active',
            events: false
        });
    }
} catch (err) { 
    // Silently fail if Gumshoe has issues
    console.log('Gumshoe navigation not initialized:', err.message);
}

/*********************/
/*      WoW Js       */
/*********************/
// Initialize WOW.js as early as possible on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    try {
        // Initialize WOW.js only once and early
        if (typeof WOW !== 'undefined' && !window.wowInitialized) {
            new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            }).init();
            window.wowInitialized = true;
        }
    } catch (error) { }
});

/*************************/
/*      Contact Js       */
/*************************/

function validateForm() {
    const form = document.forms["myForm"];
    const name = form["name"].value.trim();
    const email = form["email"].value.trim();
    const subject = form["subject"].value.trim();
    const comments = form["comments"].value.trim();

    const errorDiv = document.getElementById("error-msg");
    const responseDiv = document.getElementById("simple-msg");

    errorDiv.style.opacity = 0;
    errorDiv.innerHTML = "";
    responseDiv.innerHTML = '';

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!name) {
        errorDiv.innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Name*</div>";
        fadeIn(errorDiv);
        return false;
    }
    if (!email || !emailRegex.test(email)) {
        errorDiv.innerHTML = "<div class='alert alert-warning error_message'>*Please enter a valid Email*</div>";
        fadeIn(errorDiv);
        return false;
    }
    if (!subject) {
        errorDiv.innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Subject*</div>";
        fadeIn(errorDiv);
        return false;
    }
    if (!comments) {
        errorDiv.innerHTML = "<div class='alert alert-warning error_message'>*Please enter Comments*</div>";
        fadeIn(errorDiv);
        return false;
    }

    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/contact", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-CSRF-TOKEN": token
        },
        body: new URLSearchParams({
            name, email, subject, comments
        })
    })
    .then(response => response.json())
    .then(data => {
        responseDiv.innerHTML = data.message;
        responseDiv.className = 'alert alert-success';
        form.reset();
    })
    .catch(err => {
        responseDiv.innerHTML = err.message || 'Something went wrong.';
        responseDiv.className = 'alert alert-danger';
        fadeIn(responseDiv);
    });

    return false;
}

function fadeIn(el) {
    let opacity = 0;
    const intervalID = setInterval(() => {
        if (opacity < 1) {
            opacity += 0.5;
            el.style.opacity = opacity;
        } else {
            clearInterval(intervalID);
        }
    }, 200);
}


/*********************/
/* Dark & Light Mode */
/*********************/
try {
    function changeTheme(e) {
        e.preventDefault();
        const htmlTag = document.getElementsByTagName("html")[0];
        htmlTag.className = htmlTag.className.includes("dark") ? "light" : "dark";
    }

    const switcher = document.getElementById("theme-mode");
    switcher?.addEventListener("click", changeTheme);

    const chk = document.getElementById("chk");
    chk?.addEventListener("change", changeTheme);
} catch (err) { }


/*********************/
/* LTR & RTL Mode */
/*********************/
try {
    const htmlTag = document.getElementsByTagName("html")[0];
    const switcherRtl = document.getElementById("switchRtl");

    function changeLayout(e) {
        e.preventDefault();
        if (switcherRtl.innerText === "LTR") {
            htmlTag.dir = "ltr";
        } else {
            htmlTag.dir = "rtl";
        }
    }

    switcherRtl?.addEventListener("click", changeLayout);
} catch (err) { }