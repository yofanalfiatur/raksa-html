<?php
$title = "Error 404 | Raksa Online";
include "./components/header.php"; ?>

<?php
$titleBanner = "Halaman tidak ditemukan";
$descBanner = "Lorem ipsum dolor sit amet consectetur. Eget augue amet nibh sit tortor pellentesque volutpat.";
$imageBanner = "../dist/img/temp/404-raksa-re.jpg";

$btnBanner = array(
    'text' => 'Kembali ke beranda',
    'link' => './home.php'
);

include "./components/global/banner-global.php"; ?>


<?php include "./components/footer.php"; ?>