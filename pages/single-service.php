<?php
$title = "Detail Service | Raksa Online";
include "./components/header.php"; ?>

<?php
$titleBanner = "Pelayanan Kami";
$descBanner = "Dapatkan pelayanan istimewa dari Asuransi Raksa yang dapat memenuhi seluruh kebutuhan Anda";
$imageBanner = "../dist/img/temp/service-banner-1.png";

$ListContent = array(
    array(
        'textList' => 'Layanan Eksklusif',
        'iconList' => "../dist/img/temp/list-layanan.svg"
    ),
    array(
        'textList' => 'Personal Assistant',
        'iconList' => "../dist/img/temp/list-pa.svg"
    ),
    array(
        'textList' => 'Bengkel Rekanan',
        'iconList' => "../dist/img/temp/list-bengkel.svg"
    ),
);
include "./components/global/banner-global.php"; ?>

<section class="sg-serv-info">
    <div class="container">
        <div class="sg-serv-info__wrapper row">
            <div class="sg-serv-info__content col-12 col-lg-7">
                <h3 class="sg-serv-info__content__title">Sekilas Mengenai Raksa Gold Club</h3>
                <div class="sg-serv-info__content__desc">
                    <p>Diluncurkan sejak tahun 2004, Raksa Gold Club menjadi salah satu layanan eksklusif unggulan dari PT Asuransi Raksa. Layanan ini terbatas pada Nasabah dengan nilai pertanggungan mobil minimal $80.000. Tentu eksklusifitas dari Layanan kami kedepankan khusus untuk Nasabah di Raksa Gold Club. Tidak semua Nasabah dari Asuransi Raksa dapat mengakses layanan ini. Jadikan diri Anda sebagai Nasabah Raksa Gold Club untuk bisa merasakan Layanan Eksklusif dari PT Asuransi Raksa.</p>
                </div>
            </div>
            <div class="sg-serv-info__picture col-12 col-lg-5">
                <img src="../dist/img/temp/service-card-1.jpg" alt="" class="sg-serv-info__picture__img">
            </div>
        </div>
    </div>
</section>

<section class="sg-serv-loc">
    <div class="container">
        <div class="sg-serv-loc__wrapper row">
            <h2 class="sg-serv-loc__title">Tersedia Di Lokasi Berikut</h2>
        </div>
    </div>
</section>

<section class="sg-serv-ct">
    <div class="container">
        <div class="sg-serv-loc__ct row gap-lg-2">
            <div class="sg-serv-loc__ct__content col-12 col-lg-5">
                <h2 class="sg-serv-loc__ct__content__title">Butuh Layanan Dek?</h2>
                <a href="#" class="sg-serv-loc__ct__content__btn"></a>
                <div class="sg-serv-loc__ct__content__contact">
                    <a href="tel:085885558555" class="sg-serv-loc__ct__content__contact__wa" target="_blank">085885558555</a>
                    <span>atau</span>
                    <a href="tel:0217226865" class="sg-serv-loc__ct__content__contact__phone" target="_blank">021-7226865</a>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <img src="../dist/img/temp/service-card-4.jpg" alt="contact service">
            </div>
        </div>
    </div>
    <div class="sg-serv-ct__decor">
        <img src="" alt="">
    </div>
</section>

<section class="sg-serv-other">
    <div class="container">
        <div class="row">
            <div class="sg-serv-other__intro col-12">
                <h2 class="sg-serv-other__intro__title">Pelayanan Lainnya</h2>
                <a href="#" class="sg-serv-other__intro__btn">Lihat Selengkapnya</a>
            </div>
            <div class="sg-serv-other__wrapper col-12 row">
                <div class="sg-serv-other__wrapper__card col-12 col-lg-4">
                    <a href="#" class="sg-serv-other__wrapper__card__link">
                        <img src="../dist/img/temp/service-card-1.jpg" alt="" class="sg-serv-other__wrapper__card__img">
                        <p class="sg-serv-other__wrapper__card__title">Raksa Silver Club</p>
                    </a>
                </div>
                <div class="sg-serv-other__wrapper__card col-12 col-lg-4">
                    <a href="#" class="sg-serv-other__wrapper__card__link">
                        <img src="../dist/img/temp/service-card-1.jpg" alt="" class="sg-serv-other__wrapper__card__img">
                        <p class="sg-serv-other__wrapper__card__title">Raksa Silver Club</p>
                    </a>
                </div>
                <div class="sg-serv-other__wrapper__card col-12 col-lg-4">
                    <a href="#" class="sg-serv-other__wrapper__card__link">
                        <img src="../dist/img/temp/service-card-1.jpg" alt="" class="sg-serv-other__wrapper__card__img">
                        <p class="sg-serv-other__wrapper__card__title">Raksa Silver Club</p>
                    </a>
                </div>
                <div class="sg-serv-other__wrapper__card col-12 col-lg-4">
                    <a href="#" class="sg-serv-other__wrapper__card__link">
                        <img src="../dist/img/temp/service-card-1.jpg" alt="" class="sg-serv-other__wrapper__card__img">
                        <p class="sg-serv-other__wrapper__card__title">Raksa Silver Club</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "./components/footer.php"; ?>