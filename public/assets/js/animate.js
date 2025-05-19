// use a script tag or an external JS file
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin);
    // gsap code here!

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
        scrollTrigger: {
            trigger: ".boxSectorUp", // Animasi dimulai saat .boxSectorUp masuk viewport
            start: "top 80%", // Trigger saat bagian atas elemen 80% dari tinggi viewport
            toggleActions: "play none none reset", // Hanya play sekali
            // once: true, // Jalankan sekali saja
        },
        y: 100, // Mulai dari bawah (geser ke atas)
        opacity: 0, // Mulai dari transparan
        duration: 1.0, // Durasi animasi
        delay: 0.5, // Delay sebelum animasi dimulai (jika diperlukan)
        stagger: 0.1, // Jeda antar elemen jika ada lebih dari satu
        ease: "power2.out",
    });

    const hasVisited = sessionStorage.getItem("hasVisited");

    const splash = document.getElementById("splash-screen");
    const content = document.getElementById("main-content");

    if (!hasVisited) {
        // User pertama kali akses web
        window.addEventListener("load", () => {
            const tl = gsap.timeline();

            tl.from(".splash-logo", {
                y: 50,
                opacity: 0,
                duration: 1.2,
                ease: "power2.out",
            });

            tl.from(".splash-name", {
                y: 50,
                opacity: 0,
                duration: 0.8,
                delay: 0.1,
                ease: "power2.out",
            });

            tl.from(".splash-describe", {
                y: 50,
                opacity: 0,
                duration: 1.2,
                delay: 0.2,
                ease: "power2.out",
            });

            tl.to(splash, {
                opacity: 0,
                duration: 1,
                delay: 1.5,
                onComplete: () => {
                    splash.style.display = "none";
                    gsap.to(content, { opacity: 1, duration: 1 });
                    localStorage.setItem("hasVisited", "true"); // Simpan status
                },
            });
        });
    } else {
        // Sudah pernah, langsung sembunyikan splash
        splash.style.display = "none";
        document.body.classList.add("splash-hidden");
    }
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
