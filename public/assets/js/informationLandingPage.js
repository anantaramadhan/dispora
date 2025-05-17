// Loop untuk setiap item dropdown yang memiliki class 'switch-section'
document.querySelectorAll(".switch-section").forEach(function (item) {
    item.addEventListener("click", function (e) {
        e.preventDefault();

        const target = this.getAttribute("data-target");
        const sectionProduk = document.getElementById("section-event");
        const sectionUsaha = document.getElementById("section-articel");

        sectionProduk.classList.remove("show");
        sectionUsaha.classList.remove("show");

        setTimeout(() => {
            if (target === "Event") {
                sectionUsaha.style.display = "none";
                sectionProduk.style.display = "block";
                requestAnimationFrame(() =>
                    sectionProduk.classList.add("show")
                );
            } else {
                sectionProduk.style.display = "none";
                sectionUsaha.style.display = "block";
                requestAnimationFrame(() => sectionUsaha.classList.add("show"));
            }
        }, 400);

        // Update active item di dropdown
        document
            .querySelectorAll(".switch-section")
            .forEach((el) => el.classList.remove("active"));
        this.classList.add("active");

        // Ubah teks tombol dropdown
        // const dropdownBtn = document.querySelector("#dropdown-usaha-produk p");
        // dropdownBtn.textContent = target === "Product" ? "Produk" : "Usaha";
    });
});
