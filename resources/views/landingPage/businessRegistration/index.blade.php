<!DOCTYPE html>
<html lang="en">


@include('components.head')

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<style>
    body {
        /* padding-top: 73px; */
        background-color: white;
    }

    #map {
        height: 300px;
        width: 100%;
    }

    .cardSection {
        display: none;
    }

    .cardSection.active {
        display: flex;
    }
</style>

<!-- Flatpickr CSS -->
<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">


<body class="overflow-x-hidden"
    style="background-image: url('https://images.unsplash.com/photo-1663942535328-4adb74bb0380?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
    <?php
    
    //data sektor
    $data = [
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'ilustration' => 'assets/img/sector/daniel-mccullough-HtBlQdxfG9k-unsplash.jpg',
            'title' => 'Arsitektur',
            'description' =>
                'Peran arsitektur di Indonesia sangat penting. Dalam hal budaya, keanekaragaman arsitektur lokal dan daerah menunjukkan karakter Bangsa Indonesia yang mempunyai beraneka ragam budaya. Sedangkan dalam hal pembangunan, arsitektur juga berperan dalam merancang dasar pembangunan sebuah kota. Karena potensinya yang sangat besar, Kemenparekraf memasukkan arsitektur sebagai salah satu sub sektor yang layak untuk dikelola secara lebih serius. Saat ini, sub sektor arsitektur menghadapi berbagai macam tantangan. Salah satu di antaranya adalah kekurangan arsitek di Indonesia. Menurut data anggota Ikatan Arsitek Indonesia (IAI), jumlah arsitek di Indonesia hanya 15 ribu orang, sangat kurang jika dibandingkan dengan 250 juta penduduk Indonesia. Sedangkan tantangan lain adalah para pengembang besar lebih banyak menggunakan jasa arsitek asing daripada arsitek lokal. Meski begitu, pembangunan sarana dan prasarana di Indonesia masih sangat membutuhkan peran arsitek. Arsitektur menjadi bagian penting dari pengembangan industri nasional yang sedang bergeser dari raw- based economy menjadi knowledge-based economy. Para arsitek pun saat ini mulai memunculkan inovasi produk arsitektur yang menyiratkan karakter budaya dan kearifan lokal.',
        ],
        [
            'gambar' => 'assets/svg/aplikasi.svg',
            'ilustration' => 'assets/img/sector/olaf-val-UTk9cXzYWAg-unsplash.jpg',
            'title' => 'Aplikasi',
            'description' => 'Meningkatnya penetrasi pemanfaatan gawai oleh masyarakat tak lepas dari peran aplikasi yang tertanam di dalamnya. Masyarakat sudah fasih menggunakan berbagai jenis aplikasi digital seperti peta atau navigasi, media sosial, berita, bisnis, musik, penerjemah, permainan dan lain sebagainya. Berbagai aplikasi tersebut didesain supaya mempermudah pengguna dalam melakukan aktivitas sehari-hari. Maka tak heran jika potensi sub sektor aplikasi dan sangat besar. Di lain pihak, sub sektor ini masih menghadapi berbagai tantangan. Beberapa di antaranya adalah keterbatasan sumber daya manusia (SDM) baik secara kuantitas atau kualitas, sedikitnya minat investor pada industri ini, dan belum adanya kebijakan proteksi yang memihak pada kepentingan developer domestik. Situasi inilah yang menyebabkan ekosistem sub sektor ini belum terbangun secara maksimal, sehingga Kemenparekraf akan berfokus menyelesaikan berbagai tantangan tersebut.',
        ],
        [
            'gambar' => 'assets/svg/desainInterior.svg',
            'ilustration' => 'assets/img/sector/lissete-laverde-Op1TRxpm40o-unsplash.jpg',
            'title' => 'Desain Interior',
            'description' => 'Desain interior merupakan salah satu subsektor ekonomi kreatif yang memiliki potensi besar di Indonesia. Subsektor ini mencakup perancangan ruang, estetika, dan elemen-elemen dalam bangunan, seperti hunian, hotel, dan perkantoran. Perkembangan desain interior di Indonesia menunjukkan kemajuan pesat, dengan meningkatnya minat masyarakat terhadap jasa desainer interior. ',
        ],
        [
            'gambar' => 'assets/svg/desainProduk.svg',
            'ilustration' => 'assets/img/sector/kumpan-electric-fJebhGIP0P4-unsplash.jpg',
            'title' => 'Desain Produk',
            'description' =>
                'Tren sub sektor ini sangat positif. Dengan populasi penduduk yang didominasi oleh usia produktif, potensi terbentuknya interaksi antara pelaku industri dan pasar pun sangat besar. Ditambah lagi masyarakat dan pasar sekarang memiliki apresiasi terhadap produk yang berkualitas. Sub sektor desain produk juga didukung oleh para pelaku industri yang memiliki craftmanshift andal. Para desainer produk mampu menggali dan mengangkat kearifan lokal, kekayaan budaya Indonesia yang beraneka ragam, dalam setiap karya-karyanya. Sebagai wakil pemerintah, Kemenparekraf akan mengelola sub sektor ini dan mendampingi para pelaku kreatif dalam mengembangkan bisnisnya. Beberapa pendekatan yang bisa dilakukan untuk sub sektor ini adalah dengan mengelola industri dari hulu ke hilir, bekerja sama dengan berbagai asosiasi untuk meningkatkan penggunaan desain produk lokal Indonesia, dan mendirikan pusat desain sebagai hub lintas sub sektor. Untuk jangka panjang, perlu adanya undang-undang atau peraturan yang menetapkan supaya setiap retail dan mal menjual minimal 20-30% produk-produk lokal.',
        ],
        [
            'gambar' => 'assets/svg/dkv.svg',
            'ilustration' => 'assets/img/sector/2h-media-y6CkJowOCvc-unsplash.jpg',
            'title' => 'Desain Komunikasi Visual',
            'description' =>
                'Desain Grafis (DKV) punya peran yang sangat penting dalam mendukung pertumbuhan bisnis pengusaha swasta, pemilik merek, dan bahkan kelancaran program-program pemerintah. Potensi pasar domestik sangat menjanjikan, terutama dengan semakin banyaknya praktisi DKV lokal yang lebih memahami situasi pasar, pengetahuan, dan nilai-nilai lokal. Potensi ini masih harus ditingkatkan, seperti kesadaran pasar tentang pentingnya desain. Hasil karya desainer grafis sering dinilai dengan harga yang kurang layak. Padahal para desainer grafis membutuhkan proses yang cukup panjang dalam bekerja, dari memikirkan filosofi, mengolah desain sehingga mempunyai makna, dan menghasilkan produk jadi. Ajakan kepada para pengusaha untuk menggunakan jasa desainer grafis lokal pun perlu lebih lantang diserukan. Kemenparekraf dengan segala wewenangnya akan ikut membangun DKV menjadi sub sektor yang unggul dan mampu bersaing baik di dalam negeri dan internasional. Beberapa program yang bisa dilakukan adalah dengan mempromosikan serta memublikasikan hasil karya sub sektor ini, membuat regulasi agar para pekerja desain lokal mendapatkan prioritas dalam menggarap proyek perusahaan domestik daripada para desainer luar, terutama setelah kesepakatan Masyarakat Ekonomi ASEAN (MEA) diberlakukan.',
        ],
        [
            'gambar' => 'assets/svg/fashion.svg',
            'ilustration' => 'assets/img/sector/agus-prasetyo-FsgDRCJoP1M-unsplash.jpg',
            'title' => 'Fashion',
            'description' =>
                'Tren fashion senantiasa berubah dengan cepat. Dalam hitungan bulan, selalu muncul mode fashion baru. Ini tak lepas dari produktivitas para desainer fashion lokal yang inovatif merancang baju-baju model baru, dan munculnya generasi muda kreatif yang antusias dengan industri fashion ini. Masyarakat sebagai pasar pun juga semakin cerdas dan berselera tinggi dalam memilih fashion. Di sisi lain, sub sektor ini harus menghadapi banyak tantangan. Fashion lokal masih menjadi anak tiri, pasar memprioritaskan ruangnya untuk produk-produk impor, sehingga fashion lokal kurang mendapatkan tempat. Sedangkan tantangan lain yang tak kalah penting adalah sinergi industri hulu ke hilir, mulai dari pabrik tekstil/garmen, perancang busana, sampai ke urusan pasar. Dengan optimisme bahwa industri fashion bisa bersaing di Masyarakat Ekonomi ASEAN (MEA), Kemenparekraf akan melakukan pendampingan melalui fasilitasi-fasilitasi yang bisa mendorong sub sektor ini menjadi semakin besar. Kemenparekraf akan mengeluarkan kebijakan untuk mendorong penggunaan karya fashion dalam negeri, melancarkan ketersediaan bahan baku, sampai pada promosi produk-produk fashion dalam negeri di pasar domestik dan global.',
        ],
    
        [
            'gambar' => 'assets/svg/filmAnimasiDanVidio.svg',
            'ilustration' => 'assets/img/sector/alan-alves-CX0r0CKFvYo-unsplash.jpg',
            'title' => 'Film Animasi dan Video',
            'description' =>
                'Perfilman Indonesia saat ini sedang mengalami perkembangan yang positif. Para rumah produksi mulai berlomba-lomba menggenjot produktivitasnya menggarap film yang berkualitas dari segi cerita sekaligus menguntungkan secara komersial. Ini tak lepas dari potensi penonton Indonesia yang sangat besar dan bisa mengapresiasi film produksi lokal secara positif. Sub sektor film, animasi, dan video memiliki potensi yang bisa dikembangkan menjadi lebih baik, walaupun masih harus menghadapi berbagai tantangan. Beberapa di antaranya adalah minimnya SDM yang benar-benar mempunyai keahlian di bidang film, sehingga pilihan untuk memperoleh tim dari sutradara, penulis skenario, kru, dan pemain film, sangat terbatas. Permasalahan lain yang tak kalah penting adalah layar bioskop yang terbatas dan tidak merata penyebarannya, serta belum adanya proteksi terhadap hak karya cipta sehingga aksi pembajakan masih marak. Sebagai lembaga pemerintah, Kemenparekraf akan menyediakan fasilitasi untuk memperkuat industri perfilman Indonesia. Kemenparekraf menggarap beberapa program, seperti mengeluarkan peraturan untuk melindungi hak karya intelektual di industri film, membuka akses investasi dan permodalan, serta membuka akses lebih lebar terhadap para penonton.',
        ],
        [
            'gambar' => 'assets/svg/fotografi.svg',
            'ilustration' => 'assets/img/sector/soragrit-wongsa-aV5xrpB0bwQ-unsplash.jpg',
            'title' => 'Fotografi',
            'description' =>
                'Perkembangan sub sektor fotografi yang cukup pesat tak lepas dari banyaknya generasi muda yang sangat antusias belajar fotografi. Tak sedikit pula dari mereka yang kemudian memutuskan terjun di bidang ini sebagai profesional. Masyarakat pun memberikan apresiasi yang positif terhadap dunia fotografi. Beberapa pelaku memberikan pendapatnya tentang apa yang masih harus digarap dalam bidang fotografi ini. Pertama, belum adanya perlindungan HKI terutama untuk hak penggunaan karya fotografi. Kedua, belum adanya pengarsipan karya-karya fotografi Indonesia. Dan ketiga, Kemenparekraf diharapkan bisa membantu para fotografer Indonesia mendapatkan perhatian internasional. Salah satu program yang dilakukan oleh Kemenparekraf adalah sertifikasi terhadap para fotografer. Dengan adanya sertifikasi ini diharapkan ada standar yang jelas terhadap profesi fotografer. Kemenparekraf juga akan memfasilitasi perlindungan HKI terhadap karya-karya fotografi, dan meningkatkan eksposur fotografer lokal ke kancah internasional.   ',
        ],
        [
            'gambar' => 'assets/svg/gameDev.svg',
            'ilustration' => 'assets/img/sector/lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg',
            'title' => 'Pengembangan Game',
            'description' =>
                'Industri dan ekosistem permainan (game) lokal memiliki potensi besar untuk berkontribusi dalam ekonomi kreatif Tanah Air. Kontribusi game untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, dengan 44.733 jumlah tenaga kerja di sub sektor ini. Di tahun yang sama ada 51 pengembang game lokal baru yang dari tahun ke tahun bertambah jumlahnya. Kemenparekraf mendorong para pengembang game lokal untuk berkarya, karena Indonesia merupakan salah satu negara dengan pangsa pasar game yang peningkatannya cenderung signifikan. Banyak peluang yang bisa didalami, baik sebagai pembuat maupun pemain profesional. Mengingat demografi Indonesia semakin banyak segmen produktif dan jumlah middle income class yang tinggi. Kemenparekraf akan mengelola sub sektor pengembang permainan lebih serius melalui beberapa hal, yaitu menginisiasi munculnya lebih banyak inkubator pengembang permainan, memasukkan unsur-unsur permainan ke dalam dunia pendidikan, memproteksi para pengembang lokal, dan membantu mereka dalam mempromosikan karya-karyanya.',
        ],
        [
            'gambar' => 'assets/svg/kriya.svg',
            'ilustration' => 'assets/img/sector/shelby-murphy-figueroa-c3FgI1hl_50-unsplash.jpg',
            'title' => 'Kriya',
            'description' => 'Kriya merupakan subsektor berciri khas Indonesia yang sangat dekat dengan industri pariwisata dan menyerap banyak tenaga kerja. Kriya meliputi segala kerajinan yang berbahan kayu, logam, kulit, kaca, keramik, dan tekstil. Subsektor ini maju karena berlimpahnya material bahan baku yang tersedia dan tingginya kreativitas para pelaku industrinya. Potensinya juga masih besar, dan pemasarannya cukup terbuka. Bukan hanya di Indonesia, namun sampai ke luar negeri.',
        ],
        [
            'gambar' => 'assets/svg/kuliner.svg',
            'ilustration' => 'assets/img/sector/aldino-hartan-putra-idveVMe3GGg-unsplash.jpg',
            'title' => 'Kuliner',
            'description' =>
                'Sub sektor kuliner memberikan kontribusi yang cukup besar, yaitu 30% dari total pendapatan sektor pariwisata dan ekonomi kreatif. Industri kuliner mempunyai potensi yang sangat kuat untuk berkembang, oleh karena itu pemerintah akan mendukung sub sektor ini supaya lebih maju. Beberapa pelaku industri kuliner melihat ada beberapa hal yang harus diperbaiki dan dikelola secara lebih serius. Salah satu di antaranya adalah perlunya akses perizinan usaha melalui satu pintu sehingga lebih mudah dan efektif. Para pebisnis kuliner baru sebaiknya mendapatkan panduan dari pemerintah, mulai dari pelatihan bisnis, informasi perizinan, sampai pada pendampingan hukum dalam proses pendirian usaha. Sebagai wakil dari pemerintah Kemenparekraf berperan serta dalam mendampingi sub sektor kuliner ini. Kemenparekraf menyediakan fasilitasi seperti pelatihan bisnis, akses permodalan, dan pendampingan pendirian usaha. Kemenparekraf juga akan berpartisipasi dalam mempromosikan kuliner Indonesia yang sangat beraneka ragam ini di pasar domestik dan luar negeri.',
        ],
        [
            'gambar' => 'assets/svg/musik.svg',
            'ilustration' => 'assets/img/sector/wes-hicks-MEL-jJnm7RQ-unsplash.jpg',
            'title' => 'Musik',
            'description' => 'Kemenparekraf optimistis menempatkan musik sebagai salah satu sub sektor yang akan dikelola secara lebih maksimal. Meskipun sub sektor musik punya potensi yang sangat besar, beberapa pelaku melihat permasalahan yang harus segera diselesaikan. Salah satu tantangan terbesar pembajakan yang masih marak sehingga menyebabkan perkembangan industri musik di Indonesia terhambat. Pembajakan tentunya menyebabkan turunnya kualitas dan kuantitas produksi, menurunnya apresiasi masyarakat terhadap musik, dan turunnya minat investasi di bidang ini. Kemenparekraf menyediakan fasilitasi untuk para pelaku industri musik. Beberapa fasilitasi yang akan disediakan oleh Kemenparekraf antara lain perlindungan HKI sehingga bisa mengurangi pembajakan, menginisiasi terbentuknya inkubator-inkubator musik, membuka akses permodalan untuk industri musik, membangun ekosistem bisnis musik yang sehat, dan program-program lain.',
        ],
        [
            'gambar' => 'assets/svg/penerbitan.svg',
            'ilustration' => 'assets/img/sector/rey-seven-_nm_mZ4Cs2I-unsplash.jpg',
            'title' => 'Penerbitan',
            'description' =>
                'Pasar industri penerbitan memang tidak sebesar sub sektor yang lain, namun industri ini punya potensi yang tak kalah kuat. Banyak penerbitan besar dan kecil yang masih bermunculan meramaikan industri ini. Ditambah lagi perkembangan teknologi yang memungkinkan buku diterbitkan dalam bentuk digital. Penerbitan turut berperan aktif dalam membangun kekuatan intelektual bangsa. Munculnya sastrawan, penulis, peneliti, dan para cendekiawan, tak lepas dari peran industri ini. Walaupun saat ini profesi penulis masih dianggap kurang menjanjikan, banyak para penulis muda yang sangat antusias, silih berganti menerbitkan karya-karyanya. Kemenparekraf akan turut mengelola industri penerbitan sebagai salah satu sub sektor unggulan. Peran Kemenparekraf adalah menyediakan berbagai fasilitasi, seperti membuka akses di pasar domestik (daerah) dan global, fasilitasi kebijakan perpajakan yang bisa meringankan industri penerbitan, dan lain sebagainya. Kemenparekraf optimistis sub sektor penerbitan bisa berkembang menjadi lebih besar.',
        ],
        [
            'gambar' => 'assets/svg/periklanan.svg',
            'ilustration' => 'assets/img/sector/eleni-afiontzi-gLU8GZpHtRA-unsplash.jpg',
            'title' => 'Periklanan',
            'description' => 'Sampai saat ini, iklan masih menjadi medium paling efisien untuk memublikasikan produk dan jasa. Potensi industri ini pun tak perlu diragukan lagi. Pertumbuhan belanja iklan nasional bisa mencapai 5-7% setiap tahunnya. Ditambah lagi, iklan mempunyai soft power berperan dalam membentuk pola konsumsi, pola berpikir, dan pola hidup masyarakat. Oleh karena itu sangat penting apabila sub sektor ini dikuasai oleh SDM lokal. Kemenparekraf pun akan menyediakan fasilitasi terkait dengan penguatan SDM lokal, mengatur kebijakan pembatasan investasi asing di industri iklan Indonesia, memperkuat otoritas dewan periklanan Indonesia, dan pembatasan penayangan iklan adaptasi dari regional atau global. Kemenparekraf melihat masih ada banyak ruang yang bisa dikerjakan untuk sub sektor ini.',
        ],
        [
            'gambar' => 'assets/svg/seniPertunjukan.svg',
            'ilustration' => 'assets/img/sector/a-n-v-e-s-h-AxbvZI8RfYo-unsplash.jpg',
            'title' => 'Seni Pertunjukan',
            'description' =>
                'Seni pertunjukan dari masing-masing daerah sudah tersebar secara sporadis ke seluruh wilayah di Indonesia. Banyaknya jumlah seni pertunjukan baik tradisi maupun kontemporer yang selama ini dikreasikan, dikembangkan, dan dipromosikan, telah mendapatkan apresiasi dunia internasional. Peran Pemerintah tentu sangat diperlukan, terutama dalam menentukan regulasi yang komprehensif untuk mendorong sub sektor seni pertunjukan ini supaya lebih berkembang. Tak hanya itu, peran pemerintah dalam memfasilitasi pembangunan gedung atau tempat pertunjukan yang representatif dan bisa diakses oleh semua lapisan masyarakat juga mutlak diperlukan. Sebagai lembaga Pemerintah, Kemenparekraf akan mendukung perkembangan sub sektor seni pertunjukan. Bekraf akan menyediakan fasilitasi regulasi, pembangunan tempat pertunjukan, fasilitasi pembentukan performing art board/council untuk memetakan platform dan menjaga standar seni pertunjukan, festival-festival pertunjukan seni, dan lain sebagainya. Kemenparekraf optimistis sub sektor ini bisa berkembang secara maksimal.',
        ],
    
        [
            'gambar' => 'assets/svg/seniRupa.svg',
            'ilustration' => 'assets/img/sector/viktor-talashuk-S39X1P9gsfA-unsplash.jpg',
            'title' => 'Seni Rupa',
            'description' =>
                'Industri seni rupa dunia sedang memusatkan perhatiannya ke Asia Tenggara. Indonesia pun tak luput dari perhatian mereka. Di mana Indonesia mempunyai potensi terbesar baik secara kualitas, kuantitas, pelaku kreatif, produktivitas, dan potensi pasar. Seni rupa Indonesia juga sudah memiliki jaringan yang sangat kuat baik dalam negeri ataupun di luar negeri. Berbagai festival seni rupa diadakan secara rutin, bahkan yang reputasinya diakui secara internasional. Hingga kini sudah lebih dari 160 pelaku kreatif seni rupa Indonesia terlibat dalam forum dan acara internasional. Melihat potensi yang sangat besar ini, Kemenparakraf antusias untuk memberikan dukungan sesuai dengan kewenangannya sebagai lembaga pemerintah. Kemenparakraf akan menyediakan berbagai fasilitas seperti pembangunan ruang seni dan budaya, fasilitasi forum dan ajang seni rupa bertaraf internasional, serta mewujudkan supaya Indonesia menjadi pusat seni rupa Asia Tenggara. Dengan memasukkannya ke dalam 17 sub sektor, Kemenparakraf berkomitmen mengelola seni rupa secara lebih serius.',
        ],
        [
            'gambar' => 'assets/svg/TVDanRadio.svg',
            'ilustration' => 'assets/img/sector/gabriel-avalos-aiT5t1VbSbw-unsplash.jpg',
            'title' => 'TV dan Radio',
            'description' =>
                'Meskipun tidak semutakhir ponsel dan gawai lainnya, televisi dan radio masih mempunyai peran yang sangat besar dalam penyebaran informasi. Saat ini, kepemilikan televisi dan radio sudah merata, sehingga setiap lapisan masyarakat bisa mengakses teknologi ini. Pertumbuhan jumlah stasiun televisi dan stasiun radio pun masih terus bertambah. Namun, pertumbuhan dan potensi tersebut belum disertai dengan tayangan televisi yang berkualitas. Mayoritas program televisi, karena mengejar rating tinggi, tak lagi memperhatikan kualitas program yang ditayangkan. Industri ini kekurangan rumah produksi dan SDM yang bisa merancang program-program berkualitas. Sebagai wakil dari pemerintah untuk menangani industri kreatif, Kemenparekraf akan menyediakan berbagai fasilitasi yang dibutuhkan oleh sub sektor televisi dan radio. Fasilitasi tersebut akan meliputi banyak hal, mulai dari program-program acara yang berkualitas, mendukung pembentukan SDM yang berkualitas, dan segala hal yang berkaitan dengan kekreativitasan dalam sub sektor ini.',
        ],
    ];
    
    ?>

    <section class="w-100 h-100 d-flex flex-column align-items-center">
        <div class="min-vw-100 p-4 d-flex justify-content-end">
            <div class="d-flex flex-row gap-2 align-items-center">
                <img src="{{ asset('assets/img/logoEkrafWhite.png') }}" alt="" style="width: 40px;">
                <p class="fw-bold text-white mb-0 fs-3">Ekraf<span class="fw-medium">Kuy</h2>
            </div>
        </div>

        <form action="">
            <div class="h-100 min-vw-100 py-4 d-flex flex-column align-items-center justify-content-center">

                {{-- CARD NAMA USAHA --}}
                <div id="card1"
                    class=" text-white w-25 p-4 flex-column rounded-4 gap-5 glass-card cardSection active">
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <h2 class="fw-semibold">Daftarkan Usahanmu</h2>
                        <p class="text-center">Masukkan data dengan benar dan jika masih bingung terhadap sektor apa
                            usaha
                            anda, anda bisa
                            menyakan langsung ke <a class="fw-semibold text-white text-decoration-underline"
                                href="">Admin Ekonomi Kreatif</a></p>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-column gap-2 w-100">
                            <p class="fw-semibold mb-0">Nama Usaha</p>
                            <input class="form-control rounded-pill border-0 py-2 px-4"
                                placeholder="masukkan nama usaha disini..." type="text">
                        </div>

                        <div class="d-flex flex-column gap-2 w-100">
                            <p class="fw-semibold mb-0">Nama Pemilik</p>
                            <input class="form-control rounded-pill border-0 py-2 px-4"
                                placeholder="masukkan nama usaha disini..." type="text">
                        </div>

                        <div class="d-flex flex-column gap-2 w-100">
                            <p class="fw-semibold mb-0">Deskripsi Usaha</p>
                            <textarea class="form-control rounded-4 border-0 py-2 px-4 overflow-hidden" style="height: 120px;"
                                placeholder="masukkan nama usaha disini..." row="4" type="text"></textarea>
                        </div>

                        <div class="d-flex flex-column gap-2 w-100">
                            <p class="fw-semibold mb-0">Kategori Sektor Ekonomi Kreatif</p>
                            <input class="form-control rounded-pill py-2 px-4" list="daftarKota" id="pilihKota"
                                placeholder="Ketik untuk memilih sektor...">
                            <datalist id="daftarKota">
                                <?php foreach ($data as $item):?>
                                <option value="<?= $item['title'] ?>">
                                    <?php endforeach; ?>
                            </datalist>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-4 w-100">
                        <a onclick="tampilkanCard(2)" class="btn btn-primary rounded-pill px-4 py-2">Lanjut</a>
                        <a href="{{ route('home') }}"
                            class="w-100 d-flex flex-row justify-content-center text-white">Batal Daftar
                            Usaha</a>
                    </div>
                </div>

                {{-- CARD LOKASI --}}
                <div id="card2" class=" text-white w-25 p-4 flex-column rounded-4 gap-5 glass-card cardSection">
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <h2 class="fw-semibold">Daftarkan Usahanmu</h2>
                        <p class="text-center">Klik pada peta untuk menentukan titik koordinat lokasi usaha anda</p>
                    </div>

                    <div class="d-flex flex-column gap-3">

                        <div class="d-flex flex-column gap-2 w-100">
                            <p class="fw-semibold mb-0">Kategori Sektor Ekonomi Kreatif</p>
                            <input type="text" id="koordinat" class="form-control mb-3 rounded-pill px-4 py-2"
                                placeholder="Klik di peta untuk mendapatkan koordinat" readonly>

                            <div id="map" class="rounded-4"></div>
                        </div>


                    </div>

                    <div class="d-flex flex-column gap-4 w-100">
                        <a onclick="tampilkanCard(3)" class="btn btn-primary rounded-pill px-4 py-2">Lanjut</a>
                        <a onclick="tampilkanCard(1)" class="btn btn-outline-light rounded-pill px-4 py-2">Kembali</a>
                        <a href="{{ route('home') }}"
                            class="w-100 d-flex flex-row justify-content-center text-white">Batal
                            Daftar
                            Usaha</a>
                    </div>
                </div>


                {{-- CARD DATA TAMBAHAN --}}
                <div id="card3" class=" text-white w-25 p-4 flex-column rounded-4 gap-5 glass-card cardSection">
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <h2 class="fw-semibold">Daftarkan Usahanmu</h2>
                        <p class="text-center">Tambahkan Foto Usaha anda dalam bentuk Foto Produk, tempat, alat usaha,
                            atau surat usaha</p>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-column w-100">
                            <p class="fw-semibold mb-0">Foto Bukti Usaha</p>

                            <div id="preview" class="w-100 h-100 d-flex justify-content-center mb-4"></div>

                            <div class="input-group rounded-pill border border-dark overflow-hidden">
                                <!-- text‐box palsu tempat menampilkan nama file -->
                                <input type="text" class="form-control border-0 ps-3"
                                    placeholder="nama file" readonly>

                                <!-- tombol/ikon unggah -->
                                <label class="input-group-text border-0 pe-3 py-2"
                                    style="cursor:pointer;">
                                    {{-- <i class="bi bi-upload text-primary fs-5"></i> --}}
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="blue" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 9V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h4M9 3v4a1 1 0 0 1-1 1H4m11 6v4m-2-2h4m3 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z" />
                                    </svg>

                                    <input type="file" id="foto" class="d-none">
                                </label>
                            </div>
                        </div>


                    </div>

                    <div class="d-flex flex-column gap-4 w-100">
                        <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-4 py-2">Ajukan Usaha</a>
                        <a onclick="tampilkanCard(2)" class="btn btn-outline-light rounded-pill px-4 py-2">Kembali</a>
                        <a href="{{ route('home') }}"
                            class="w-100 d-flex flex-row justify-content-center text-white">Batal
                            Daftar
                            Usaha</a>
                    </div>
                </div>
            </div>

        </form>

    </section>

    <script>
        function tampilkanCard(nomor) {
            // Sembunyikan semua card
            const cards = document.querySelectorAll('.cardSection');
            cards.forEach(card => card.classList.remove('active'));

            // Tampilkan card sesuai nomor
            document.getElementById(`card${nomor}`).classList.add('active');
        }

        // Inisialisasi peta
        var map = L.map('map').setView([-7.6079, 111.9031], 12); // Titik awal: Nganjuk

        // Tambahkan layer peta dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Marker yang bisa digerakkan (optional)
        var marker;

        // Event klik pada peta
        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(6);
            var lng = e.latlng.lng.toFixed(6);

            document.getElementById('koordinat').value = lat + ', ' + lng;

            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
        });

        // js untuk foto
        const fileInput = document.getElementById('foto');
        const textBox = fileInput.closest('.input-group').querySelector('input[type="text"]');
        const preview = document.getElementById('preview');
        const MAX_SIZE = 1280; // batas piksel

        fileInput.addEventListener('change', () => {
            // reset tampilan
            preview.innerHTML = '';
            textBox.value = '';

            const file = fileInput.files[0];
            if (!file) return;

            // pastikan file gambar
            if (!file.type.startsWith('image/')) {
                alert('File bukan gambar!');
                fileInput.value = '';
                return;
            }

            // baca sebagai URL
            const url = URL.createObjectURL(file);
            const imgTemp = new Image();

            imgTemp.onload = () => {
                // cek dimensi
                if (imgTemp.width > MAX_SIZE || imgTemp.height > MAX_SIZE) {
                    alert(`Gambar terlalu besar! Batas ${MAX_SIZE}px x ${MAX_SIZE}px.`);
                    URL.revokeObjectURL(url);
                    fileInput.value = '';
                    return;
                }

                // valid → tampilkan nama & preview
                textBox.value = file.name;

                const thumb = document.createElement('img');
                thumb.src = url;
                thumb.classList.add('rounded', 'border', 'mt-1');
                thumb.style.maxWidth = '320px';
                // thumb.style.maxHeight = '120px';
                thumb.style.height = 'auto';
                thumb.style.objectFit = 'contain';
                preview.appendChild(thumb);
            };

            imgTemp.onerror = () => {
                alert('Tidak dapat membaca gambar.');
                URL.revokeObjectURL(url);
                fileInput.value = '';
            };

            imgTemp.src = url;
        });
    </script>
</body>

</html>
