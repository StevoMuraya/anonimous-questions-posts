var section = document.getElementById("counter_section");
window.onload = function () {
    myFunction();
    if (section != null) {
        if (checkVisible(section)) {
            counters();
        }
    }
};
window.onscroll = function () {
    myFunction();
    if (section != null) {
        if (checkVisible(section)) {
            setTimeout(function () {
                counters();
            }, 600);
        }
    }
};

var navbar = document.getElementById("navbar");
var nav_overlay = document.getElementById("nav_overlay");
var nav_container = document.getElementById("nav_container");
var hamburger = document.getElementById("nav-icon2");
var nav_links = document.getElementById("nav-links");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    nav_links.classList.toggle("show");
    nav_overlay.classList.toggle("show");
});

nav_overlay.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    nav_links.classList.toggle("show");
    nav_overlay.classList.toggle("show");
});

function fun_calculate() {
    if (window.pageYOffset > section) {
        checkVisible(section);
    } else {
        console.log("not yet");
    }
}

function checkVisible(elm) {
    var rect = elm.getBoundingClientRect();
    var viewHeight = Math.max(
        document.documentElement.clientHeight,
        window.innerHeight
    );
    return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
}

function counters() {
    const counters = document.querySelectorAll(".count");
    const speed = 700;

    counters.forEach((counter) => {
        const updateCount = () => {
            const target = parseInt(counter.getAttribute("data-target"));
            const count = parseInt(counter.innerText);
            let increment = 1;
            if (target > 200) {
                increment = Math.trunc(target / speed);
            }

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target + "+";
            }
        };
        updateCount();
    });
}
