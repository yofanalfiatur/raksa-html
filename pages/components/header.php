<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../dist/css/vendor/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/vendor/splide/splide-core.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/main.min.css" type="text/css">
</head>

<body>
    <header class="header">
        <div class="header__wrapper">
            <div class="container">
                <nav class="header__nav navbar">
                    <a href="/home.php" class="header__logo">
                        <img src="../dist/img/logo-raksa-1x.png" alt="Raksa">
                    </a>
                    <!-- Main Menu Desktop  -->
                    <div class="header__menu">
                        <ul class="header__menu-list menu main-menu">
                            <li class="menu-item">
                                <a href="#" class="menu-link nav-link">
                                    <span>Tentang Kami</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-has-children megamenu">
                                <a href="#" class="menu-link nav-link">
                                    <span>Produk</span>
                                    <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 0.5L4.5 4.5L8.5 0.5" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="sub-mega-menu">
                                    <div class="container">
                                        <ul class="sub-mega-menu-list">
                                            <li class="sub-mega-menu-item">
                                                <a href="#" class="sub-mega-menu-link nav-link">
                                                    <img class="sub-mega-menu-img" src="../dist/img/temp/prod-mm-1.jpg" alt="">
                                                    <div class="sub-mega-menu-text">
                                                        <img src="../dist/img/temp/mm-1.png" alt="">
                                                        <span>Bangunan</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sub-mega-menu-item">
                                                <a href="#" class="sub-mega-menu-link nav-link">
                                                    <img class="sub-mega-menu-img" src="../dist/img/temp/prod-mm-2.jpg" alt="">
                                                    <div class="sub-mega-menu-text">
                                                        <img src="../dist/img/temp/mm-2.png" alt="">
                                                        <span>Bangunan</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sub-mega-menu-item">
                                                <a href="#" class="sub-mega-menu-link nav-link">
                                                    <img class="sub-mega-menu-img" src="../dist/img/temp/prod-mm-3.jpg" alt="">
                                                    <div class="sub-mega-menu-text">
                                                        <img src="../dist/img/temp/mm-3.png" alt="">
                                                        <span>Lainnya</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" class="menu-link nav-link">
                                    <span>Pelayanan</span>
                                    <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 0.5L4.5 4.5L8.5 0.5" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <ul class="sub-menu-list">
                                    <li class="sub-menu-item"><a href="#" class="sub-menu-link nav-link">Raksa Gold Club 2</a></li>
                                    <li class="sub-menu-item"><a href="#" class="sub-menu-link nav-link">Raksa Gold Club</a></li>
                                    <li class="sub-menu-item"><a href="#" class="sub-menu-link nav-link">Raksa Gold Club 3</a></li>
                                    <li class="sub-menu-item"><a href="#" class="sub-menu-link nav-link">Raksa Gold Club 4</a></li>
                                    <li class="sub-menu-item"><a href="#" class="sub-menu-link nav-link">Raksa Gold Club 5</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link nav-link">
                                    <span>Promosi</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link nav-link">
                                    <span>Klaim</span>
                                </a>
                            </li>
                        </ul>
                        <a href="/contact.php" class="header__btn-contact">
                            Hubungi Kami
                        </a>
                    </div>
                    <!-- Button Menu Mobile  -->
                    <div class="header__btn-md">
                        <button class="burger-btn" type="button" value="menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>