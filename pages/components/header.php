<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../dist/css/vendor/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/main.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/vendor/splide/splide-core.min.css" type="text/css">
</head>

<body>

    <header>
        <div class="container">
            <nav class="mega-menu">
                <a href="../pages/home.php" class="logo">
                    <img src="../../dist/img/logo-raksa.png" alt="logo-raksa-online">
                </a>
                <div class="menu-icons">
                    <img src="../../dist/img/hamburger-icon.svg" alt="menu" class="hamburger-icon">
                    <img src="../../dist/img/close-icon.svg" alt="close" class="close-icon">
                </div>
                <ul class="menu">
                    <li><a href="../pages/about-us.php">Tentang Kami</a></li>
                    <li class="dropdown">
                        <a href="#">Produk <img class="arrow-down" src="../../dist/img/arrow-down.svg" alt=""></a>
                        <div class="dropdown-content produk">
                            <a href="#">
                                <div class="produk-item">
                                    <img src="../../dist/img/produk-megamenu.png" alt="Kendaraan">
                                    <span>Kendaraan</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="produk-item">
                                    <img src="../../dist/img/produk-megamenu-bangunan.png" alt="Bangunan">
                                    <span>Bangunan</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="produk-item">
                                    <img src="../../dist/img/produk-megamenu-lainnya.png" alt="Lainnya">
                                    <span>Lainnya</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#">Pelayanan <img class="arrow-down" src="../../dist/img/arrow-down.svg" alt=""></a>
                        <div class="dropdown-content pelayanan">
                            <a href="#">Raksa Gold Club</a>
                            <a href="#">Raksa Silver Club</a>
                            <a href="#">Raksa Mobile Club</a>
                            <a href="#">Hotline 24 Jam</a>
                            <a href="#">Derek 24 Jam</a>
                            <a href="#">Raksa Emergency Services</a>
                        </div>
                    </li>
                    <li><a href="#">Promosi</a></li>
                    <li><a href="#">Klaim</a></li>
                    <li><a href=""><button class="hubungi-kami">Hubungi Kami</button></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>