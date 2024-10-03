<?php
$title = "Thank You | Raksa Online";
include "./components/header.php"; ?>

<?php
$titleBanner = "Terima kasih atas pesan anda";
$descBanner = "Lorem ipsum dolor sit amet consectetur. Eget augue amet nibh sit tortor pellentesque volutpat.";
$imageBanner = "../dist/img/temp/ty-raksa-re.jpg";

$btnBanner = array(
    'text' => 'Kembali ke beranda',
    'link' => './home.php'
);

include "./components/global/banner-global.php"; ?>

<?php include "./components/footer.php"; ?>