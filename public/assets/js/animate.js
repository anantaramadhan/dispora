// use a script tag or an external JS file
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin);
    // gsap code here!
});

gsap.from(".box", {
    scrollTrigger: ".box", // start the animation when ".box" enters the viewport (once)
    x: 100,
    opacity: 0,
    duration: 1.0,
    ease: "power2.out",
});

// animasi drop bawah
gsap.from(".boxSector", {
    // scrollTrigger: ".boxSector", // start the animation when ".box" enters the viewport (once)
    scrollTrigger: {
        trigger: ".boxSector", // animasi dimulai saat container masuk viewport
        start: "top 80%",
        toggleActions: "play none none none",
        once: true,
    },
    y: -100,
    opacity: 0,
    duration: 1.0,
    DelayNode: 0.5,
    stagger: 0.1, // delay antar elemen
    ease: "power2.out",
});

// animasi drop atas
gsap.from(".boxSectorUp", {
    // scrollTrigger: ".boxSector", // start the animation when ".box" enters the viewport (once)
    scrollTrigger: {
        trigger: ".boxSectorUp", // animasi dimulai saat container masuk viewport
        start: "top 80%",
        toggleActions: "play none none none",
        once: true,
    },
    y: 100,
    opacity: 0,
    duration: 1.0,
    DelayNode: 0.5,
    stagger: 0.1, // delay antar elemen
    ease: "power2.out",
});

// ZOOM CARD 0.5
const cards = document.querySelectorAll(".zoom-card");

cards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
        gsap.to(card, {
            scale: 1.05,
            duration: 0.3,
            ease: "power2.out",
        });
    });

    card.addEventListener("mouseleave", () => {
        gsap.to(card, {
            scale: 1,
            duration: 0.3,
            ease: "power2.out",
        });
    });
});

// ZOOM CARD 0.3
const card3 = document.querySelectorAll(".zoom-card-3");

card3.forEach((card) => {
    card.addEventListener("mouseenter", () => {
        gsap.to(card, {
            scale: 1.03,
            duration: 0.3,
            ease: "power2.out",
        });
    });

    card.addEventListener("mouseleave", () => {
        gsap.to(card, {
            scale: 1,
            duration: 0.3,
            ease: "power2.out",
        });
    });
});

//animasi scroolbar
document.addEventListener("DOMContentLoaded", function () {
    const progressBar = document.getElementById("scroll-progress");
    const animatedElements = document.querySelectorAll(".element");
    const scrollContainer = document.querySelector(".element-container");

    function updateProgressBar() {
        const scrollWidth =
            scrollContainer.scrollWidth - scrollContainer.clientWidth;
        const scrollLeft = scrollContainer.scrollLeft;
        const progress = (scrollLeft / scrollWidth) * 100;
        progressBar.style.width = progress + "%";
        progressBar.setAttribute("aria-valuenow", progress);

        animatedElements.forEach((element) => {
            const elementLeft = element.getBoundingClientRect().left;
            const containerLeft = scrollContainer.getBoundingClientRect().left;
            const viewportWidth = window.innerWidth;

            // Ubah nilai ambang batas kemunculan elemen
            if (elementLeft - containerLeft < viewportWidth * 0.75) {
                element.classList.add("show");
            }
        });
    }

    scrollContainer.addEventListener("scroll", updateProgressBar);
    updateProgressBar(); // Panggil sekali saat halaman dimuat
});
