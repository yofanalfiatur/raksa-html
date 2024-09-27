<?php
$title = "Home | Raksa Online";
include "./components/header.php"; ?>

<section class="home-hero">
    <div class="container-fluid home-hero-container">
        <div class="left-hero">
            <h1 class="text-capitalize">
                Percayakan <span style="background: linear-gradient(0deg, #FF9000 0%, #FF5A00 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">Rumah</span> Anda pada Asuransi Raksa.
            </h1>
            <p class="text-capitalize">
                Test Berbagai produk diatas bisa Anda dapatkan melalui pembelian di Raksa Online
            </p>
            <a href="#">
                <button class="text-capitalize">
                    Konsultasi dengan tim Raksa <img src="../dist/img/right-icon.svg" alt="">
                </button>
            </a>
        </div>
        <div class="right-hero">
            <img src="../dist/img/hero-img.png" alt="">
        </div>
    </div>

    <!-- Form Section -->
    <div class="container-fluid premium-check-form">
        <div class="form-tabs-container">
            <h3>Cek Premi Anda Untuk Asuransi</h3>
            <div class="form-tabs">
                <button class="active">Rumah</button>
                <button>Mobil</button>
                <button>Motor</button>
            </div>
        </div>
        <form>
            <div class="form-group">
                <select>
                    <option>Luas Bangunan</option>
                </select>
                <select>
                    <option>Luas Tanah</option>
                </select>
                <select>
                    <option>Kota</option>
                </select>
                <select>
                    <option>Provinsi</option>
                </select>
                <button type="submit" class="calculate-btn">Hitung</button>
            </div>
        </form>
    </div>
</section>

<section class="about-home">
    <div class="container-fluid about-container">
        <div class="left-about">
            <img src="../dist/img/about-img.png" alt="">
        </div>
        <div class="right-about">
            <h1>Perkembangan, Layanan, dan Inovasi Perusahaan</h1>
            <p>
                Berdiri sejak tahun 1975, PT Asuransi Raksa sudah memberikan layanan asuransi pada seluruh lapisan masyarakat di
                Indonesia. Berjalan dengan semboyan “Bijaksana dan Tepercaya” kami menerapkan prinsip konservatif dalam mengelola
                dana perasuransian. Berbagai produk, layanan, lokasi, dan inovasi terus kami kembangkan seiring dengan perjalanan
                perusahaan kami.
            </p>
            <a href="#">
                <button>
                    Lihat selanjutnya <img src="../dist/img/right-icon.svg" alt="">
                </button>
            </a>
        </div>
    </div>
</section>

<section class="protect mx-auto">
    <div class="container-fluid protect-container">
        <div class="tittle-row">
            <h2>Perlindungan untuk aset Anda</h2>
            <p>Berdiri sejak tahun 1975, PT Asuransi Raksa sudah memberikan layanan asuransi pada seluruh lapisan masyarakat di
                Indonesia. </p>
        </div>
        <div class="type-protect">
            <div class="house">
                <img src="../dist/img/house-protect.svg" alt="">
                <h5>Asuransi Rumah</h5>
                <p>Temukan dan dapatkan proteksi untuk rumah dan properti Anda</p>
                <a href="#">
                    <button>
                        Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt="">
                    </button>
                </a>
            </div>
            <div class="car">
                <img src="../dist/img/car-protect.svg" alt="">
                <h5>Asuransi Mobil</h5>
                <p>Berikan perlindungan menyeluruh untuk mobil Anda</p>
                <a href="#">
                    <button>
                        Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt="">
                    </button>
                </a>
            </div>
            <div class="motor">
                <img src="../dist/img/motor-protect.svg" alt="">
                <h5>Asuransi Motor</h5>
                <p>Proteksi motor kesayangan Anda dari risiko yang dapat terjadi</p>
                <a href="#">
                    <button>
                        Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt="">
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="image-carousel" class="slider-home splide">
    <div class="container-fluid slider-home-container">
        <h3>tawaran terbaik untuk anda</h3>
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="../dist/img/slider-cicilan.png" alt="">
                </li>
                <li class="splide__slide">
                    <img src="../dist/img/slider-cicilan.png" alt="">
                </li>
                <li class="splide__slide">
                    <img src="../dist/img/slider-cicilan.png" alt="">
                </li>
                <li class="splide__slide">
                    <img src="../dist/img/slider-cicilan.png" alt="">
                </li>
                <li class="splide__slide">
                    <img src="../dist/img/slider-cicilan.png" alt="">
                </li>
            </ul>
        </div>

    </div>
    <a href="#">
        <button>
            Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt="">
        </button>
    </a>
</section>

<section class="pelayanan">
    <div class="container-fluid pelayanan-container">
        <div class="top">
            <!-- Desktop Layout -->
            <div class="card-top-pelayanan">
                <h1>
                    <span>Pelayanan</span>
                    <span>Asuransi</span>
                    <span>Raksa</span>
                </h1>
                <div class="top-card1">
                    <img src="../dist/img/card-hotline.png" alt="">
                </div>
                <div class="top-card2">
                    <img src="../dist/img/card-emergency.png" alt="">
                </div>
                <div class="top-card3">
                    <img src="../dist/img/card-teller.png" alt="">
                </div>
            </div>
        </div>

        <div class="bottom">
            <!-- Desktop Layout -->
            <div class="bottom-card1">
                <img src="../dist/img/card-derek.png" alt="">
            </div>
            <div class="bottom-card2">
                <img src="../dist/img/card-mobile-club.png" alt="">
            </div>
            <div class="bottom-card3">
                <img src="../dist/img/card-gold-club.png" alt="">
            </div>
            <div class="button-bottom">
                <p>
                    Dapatkan pelayanan istimewa dari Asuransi Raksa yang dapat memenuhi seluruh kebutuhan Anda
                </p>
                <a href="#">
                    <button>
                        Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt="">
                    </button>
                </a>
            </div>
        </div>

        <!-- Mobile Layout -->
        <div class="pelayanan-mobile">
            <h1>Pelayanan Asuransi Raksa</h1>
            <div class="splide" id="pelayananSplide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="../dist/img/card-hotline.png" alt="Hotline">
                        </li>
                        <li class="splide__slide">
                            <img src="../dist/img/card-emergency.png" alt="Emergency">
                        </li>
                        <li class="splide__slide">
                            <img src="../dist/img/card-teller.png" alt="Teller">
                        </li>
                        <li class="splide__slide">
                            <img src="../dist/img/card-derek.png" alt="Derek">
                        </li>
                        <li class="splide__slide">
                            <img src="../dist/img/card-mobile-club.png" alt="Mobile Club">
                        </li>
                        <li class="splide__slide">
                            <img src="../dist/img/card-gold-club.png" alt="Gold Club">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="button-bottom">
                <p>
                    Dapatkan pelayanan istimewa dari Asuransi Raksa yang dapat memenuhi seluruh kebutuhan Anda
                </p>
                <a href="#">
                    <button>
                        Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt="">
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="review mx-auto mt-5">
    <div class="container-fluid container-review">
        <h1 class="fw-medium text-capitalize tittle-review-desktop">Apa pendapat mereka tentang Raksa?</h1>
        <div class="top-review">
            <div class="card-top-review">
                <div class="user-img">
                    <img src="../dist/img/user-review1.png" alt="">
                </div>
                <div class="info-user">
                    <p class="content-review">Proses klaim cepat, ga nunggu lama kendaraan sudah bisa masuk bengkel.. Mantap</p>
                    <p class="user-review fw-bold">Ardnew Yudisthira</p>
                </div>
            </div>
            <div class="card-top-review">
                <div class="user-img">
                    <img src="../dist/img/user-review2.png" alt="">
                </div>
                <div class="info-user">
                    <p class="content-review">
                        Pengalaman atas pelayanan asuransi Raksa sangat puas, layanan di office sangat ramah dan friendly, tim cek fisik
                        juga baik dan solutif, Tim bengkel rekanannya Megatama Kalimalang, juga memberikan service dan layanan yang
                        memuaskan, Semoga Asuransi Raksa dan Bengkel Megatama Kalimalang semakin sukses.
                    </p>
                    <p class="user-review">Ardnew Yudisthira</p>
                </div>
            </div>
        </div>
        <div class="bottom-review">
            <div class="card-bottom-review">
                <div class="user-img">
                    <img src="../dist/img/user-review1.png" alt="">
                </div>
                <div class="info-user">
                    <p class="content-review">
                        Pengalaman atas pelayanan asuransi Raksa sangat puas, layanan di office sangat ramah dan friendly, tim cek fisik
                        juga baik dan solutif, Tim bengkel rekanannya Megatama Kalimalang, juga memberikan service dan layanan yang
                        memuaskan, Semoga Asuransi Raksa dan Bengkel Megatama Kalimalang semakin sukses.
                    </p>
                    <p class="user-review">Ardnew Yudisthira</p>
                </div>
            </div>
            <div class="card-bottom-review">
                <div class="user-img">
                    <img src="../dist/img/user-review2.png" alt="">
                </div>
                <div class="info-user">
                    <p class="content-review">
                        Pengalaman atas pelayanan asuransi Raksa sangat puas, layanan di office sangat ramah dan friendly, tim cek fisik
                        juga baik dan solutif, Tim bengkel rekanannya Megatama Kalimalang, juga memberikan service dan layanan yang
                        memuaskan, Semoga Asuransi Raksa dan Bengkel Megatama Kalimalang semakin sukses.
                    </p>
                    <p class="user-review">Ardnew Yudisthira</p>
                </div>
            </div>
            <div class="card-bottom-review">
                <div class="user-img">
                    <img src="../dist/img/user-review3.png" alt="">
                </div>
                <div class="info-user">
                    <p class="content-review">
                        Pengalaman atas pelayanan asuransi Raksa sangat puas, layanan di office sangat ramah dan friendly, tim cek fisik
                        juga baik dan solutif, Tim bengkel rekanannya Megatama Kalimalang, juga memberikan service dan layanan yang
                        memuaskan, Semoga Asuransi Raksa dan Bengkel Megatama Kalimalang semakin sukses.
                    </p>
                    <p class="user-review">Ardnew Yudisthira</p>
                </div>
            </div>
            <div class="card-bottom-review">
                <div class="user-img">
                    <img src="../dist/img/user-review4.png" alt="">
                </div>
                <div class="info-user">
                    <p class="content-review">
                        Pengalaman atas pelayanan asuransi Raksa sangat puas, layanan di office sangat ramah dan friendly, tim cek fisik
                        juga baik dan solutif, Tim bengkel rekanannya Megatama Kalimalang, juga memberikan service dan layanan yang
                        memuaskan, Semoga Asuransi Raksa dan Bengkel Megatama Kalimalang semakin sukses.
                    </p>
                    <p class="user-review">Ardnew Yudisthira</p>
                </div>
            </div>
        </div>
        <div class="review-mobile">
            <h1 class="fw-medium text-capitalize tittle-review-mobile">Apa pendapat mereka tentang Raksa?</h1>
            <div class="splide" id="reviewSplide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card-mobile-review">
                                <div class="mobile-user-img">
                                    <img src="../dist/img/user-review1.png" alt="">
                                </div>
                                <div class="mobile-info-user">
                                    <p class="mobile-content-review">
                                        Pengalaman atas pelayanan asuransi Raksa sangat puas, layanan di office sangat ramah dan friendly, tim cek fisik
                                        juga baik dan solutif, Tim bengkel rekanannya Megatama Kalimalang, juga memberikan service dan layanan yang
                                        memuaskan, Semoga Asuransi Raksa dan Bengkel Megatama Kalimalang semakin sukses.
                                    </p>
                                    <p class="mobile-user-review">Ardnew Yudisthira</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card-mobile-review">
                                <div class="mobile-user-img">
                                    <img src="../dist/img/user-review2.png" alt="">
                                </div>
                                <div class="mobile-info-user">
                                    <p class="mobile-content-review">
                                        Pengalaman atas pelayanan asuransi Raksa sangat puas, layanan di office sangat ramah dan friendly, tim cek fisik
                                        juga baik dan solutif, Tim bengkel rekanannya Megatama Kalimalang, juga memberikan service dan layanan yang
                                        memuaskan, Semoga Asuransi Raksa dan Bengkel Megatama Kalimalang semakin sukses.
                                    </p>
                                    <p class="mobile-user-review">Ardnew Yudisthira</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="support">
    <div class="container-fluid support-container">
        <div class="left">
            <h3 class="fw-medium text-capitalize">Anda Adalah Nasabah Raksa Online?</h3>
            <a href="#">
                <button>
                    Login dan Cek Premi Anda Di sini <img src="../dist/img/right-icon.svg" alt="">
                </button>
            </a>
        </div>
        <div class="right">
            <img src="../dist/img/img-nasabah.png" alt="">
        </div>
    </div>
</section>

<section class="faq">
    <div class="faq-header">
        <h1>F.A.Q</h1>
        <div class="faq-filter">
            <button class="active" data-filter="kebakaran">Asuransi Kebakaran</button>
            <button data-filter="kendaraan">Kendaraan Bermotor</button>
            <button data-filter="perusahaan">Tentang Perusahaan</button>
        </div>
        <select id="faq-select-filter" class="mobile-filter">
            <option value="asuransi-kebakaran">Asuransi Kebakaran</option>
            <option value="kendaraan-bermotor">Kendaraan Bermotor</option>
            <option value="tentang-perusahaan">Tentang Perusahaan</option>
        </select>
    </div>
    </div>
    <div class="container-fluid faq-container">
        <!-- FAQ for Asuransi Kebakaran -->
        <div class="faq-item" data-category="kebakaran">
            <div class="faq-question">
                Bagaimana cara beli asuransi kebakaran di Raksa Online?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Detail informasi asuransi kebakaran.</p>
            </div>
        </div>
        <div class="faq-item" data-category="kebakaran">
            <div class="faq-question">
                Bagaimana cara beli asuransi kebakaran di Raksa Online?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Detail informasi asuransi kebakaran.</p>
            </div>
        </div>
        <div class="faq-item" data-category="kebakaran">
            <div class="faq-question">
                Bagaimana cara beli asuransi kebakaran di Raksa Online?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Detail informasi asuransi kebakaran.</p>
            </div>
        </div>

        <!-- FAQ for Kendaraan Bermotor -->
        <div class="faq-item" data-category="kendaraan" style="display:none;">
            <div class="faq-question">
                Bagaimana cara beli asuransi kendaraan di Raksa Online?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Detail informasi asuransi kendaraan bermotor.</p>
            </div>
        </div>

        <!-- FAQ for Tentang Perusahaan -->
        <div class="faq-item" data-category="perusahaan" style="display:none;">
            <div class="faq-question">
                Bagaimana cara beli asuransi perusahaan di Raksa Online?
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Detail informasi tentang perusahaan.</p>
            </div>
        </div>
    </div>
</section>




<!-- <div class="news-container">
                <div class="title-news">
                    <h3>Berita lainnya</h3>
                    <a href="#" class="desktop-link">Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt=""></a>
                </div>
                <div class="news-card">
                    <div class="card1">
                        <img src="../dist/img/customer-1.png" alt="">
                        <p>09 jan 2024</p>
                        <p>Raksa StoreCare Insurance</p>
                    </div>
                    <div class="card2">
                        <img src="../dist/img/cafe.png" alt="">
                        <p>09 jan 2024</p>
                        <p>Raksa StoreCare Insurance</p>
                    </div>
                    <div class="card3">
                        <img src="../dist/img/fire.png" alt="">
                        <p>09 jan 2024</p>
                        <p>Raksa StoreCare Insurance</p>
                    </div>
                    <div class="card4">
                        <img src="../dist/img/apart.png" alt="">
                        <p>09 jan 2024</p>
                        <p>Raksa StoreCare Insurance</p>
                    </div>
                </div> 
                <a href="#" class="view-more-link">Lihat selengkapnya <img src="../dist/img/right-icon.svg" alt=""></a>
            </div>
        </div>  -->
<?php include "./components/global/prefooter.php"; ?>

<?php include "./components/footer.php"; ?>