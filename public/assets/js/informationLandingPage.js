// document.querySelectorAll(".switch-section").forEach(function (item) {
//     item.addEventListener("click", function (e) {
//         e.preventDefault();

//         const target = this.getAttribute("data-target")?.toLowerCase(); // 'event' atau 'article'

//         const sectionEvent = document.getElementById("section-event");
//         const sectionArticle = document.getElementById("section-article");

//         // Reset semua section
//         sectionEvent.classList.remove("show");
//         sectionArticle.classList.remove("show");

//         // Tunggu sebentar untuk memberikan efek transisi saat berpindah
//         setTimeout(() => {
//             if (target === "event") {
//                 sectionEvent.classList.add("show");
//             } else {
//                 sectionArticle.classList.add("show");
//             }
//         }, 10); // kasih delay kecil biar efek transisi berjalan

//         // Update tombol aktif
//         document.querySelectorAll(".switch-section").forEach((btn) => {
//             btn.classList.remove("btn-primary");
//             btn.classList.add("btn-outline-black");
//         });

//         this.classList.add("btn-primary");
//         this.classList.remove("btn-outline-black");
//     });
// });

// Fungsi animasi fadeIn
const fadeIn = el => {
  gsap.fromTo(el,
    { opacity: 0},
    { opacity: 1, duration: 0.8, ease: "power2.out" }
  );
};

document.addEventListener("DOMContentLoaded", () => {
  const sectionEvent = document.getElementById("section-event");
  const sectionArticle = document.getElementById("section-article");

  document.querySelectorAll(".switch-section").forEach(btn => {
    btn.addEventListener("click", e => {
      e.preventDefault();

      const target = btn.getAttribute("data-target")?.toLowerCase();
      const activeSection = target === "event" ? sectionEvent : sectionArticle;

      // Reset section
      [sectionEvent, sectionArticle].forEach(sec => {
        sec.classList.remove("show");
        // sec.classList.add("fade-ready");
      });

      // Tampilkan dan animasikan yang aktif
    //   setTimeout(() => {
        activeSection.classList.add("show");
        // activeSection.classList.remove("fade-ready");
        fadeIn(activeSection);
    //   }, 10);

      // Toggle tombol aktif
      document.querySelectorAll(".switch-section").forEach(b => {
        b.classList.remove("btn-primary");
        b.classList.add("btn-outline-black");
      });
      btn.classList.add("btn-primary");
      btn.classList.remove("btn-outline-black");
    });
  });
});
