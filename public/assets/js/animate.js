// use a script tag or an external JS file
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin);
    // gsap code here!
});

gsap.to(".box", {
    scrollTrigger: ".box", // start the animation when ".box" enters the viewport (once)
    x: -100,
    duration: 1.0,
});

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
