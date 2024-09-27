<?php
$title = "Promo Listing | Raksa Online";
include "./components/header.php"; ?>

<section class="hero-promosi mx-2">
    <div class="container container-promoDetail mt-3">
        <div class="top-promoDetail container mx-5">
            <h1 class="fw-medium">Promosi</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Lectus augue pretium adipiscing morbi neque sed tellus.</p>
        </div>
        <div class="bottom-promoDetail">
            <div class="left-middle">
                <img src="../../dist/img/promo-header.png" alt="">
            </div>
            <div class="right-middle">
                <img src="../../dist/img/promo-header.png" alt="">
            </div>
        </div>
    </div>
</section>
<section id="image-carousel" class="slider-promo container splide">
    <div class="splide" id="promoSplide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <p class="promo-period">Periode 22 Jul 2024 - 4 Aug 2024</p>
                    <h3 class="promo-text">Lugnutz Diskon 15%</h3>
                    <img src="../../dist/img/slider-cicilan.png" alt="">
                    <div class="mobile-desc">
                        <p>Periode 12 Jul 2024 - 14 Aug 2024</p>
                        <h3>Lugnutz Diskon 15%</h3>
                    </div>
                </li>
                <li class="splide__slide">
                    <p class="promo-period">Periode 22 Jul 2024 - 4 Aug 2024</p>
                    <h3 class="promo-text">Lugnutz Diskon 55%</h3>
                    <img src="../../dist/img/slider-cicilan.png" alt="">
                    <div class="mobile-desc">
                        <p>Periode 20 Jul 2024 - 24 Aug 2024</p>
                        <h3>Lugnutz Diskon 65%</h3>
                    </div>
                </li>
                <li class="splide__slide">
                    <p class="promo-period">Periode 22 Jul 2024 - 4 Aug 2024</p>
                    <h3 class="promo-text">Lugnutz Diskon 45%</h3>
                    <img src="../../dist/img/slider-cicilan.png" alt="">
                    <div class="mobile-desc">
                        <p>Periode 22 Jul 2024 - 4 Aug 2024</p>
                        <h3>Lugnutz Diskon 15%</h3>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="promosi-card mx-3">
    <div class="container promosi-container mt-5">
        <div class="title-promosi">
            <h3 class="text-capitalize">promosi lainnya</h3>
            <div class="promos-wrapper">
                <select id="promos">
                    <option value="filter-kategori">Filter Kategori</option>
                    <option value="bank">Bank</option>
                    <option value="lugnutz">Lugnutz</option>
                </select>
                <div class="filter-indicator">0</div>
            </div>

        </div>
        <div class="pages-container">
            <div class="page-1">
                <div class="promosi-card">
                    <a href="../promo-detail/promo-detail.html">
                        <div class="card1">
                            <div class="category-label">Bank</div>
                            <img src="../../dist/img/customer-1.png" alt="">
                            <p>09 jan 2024</p>
                            <p>Raksa StoreCare Insurance</p>
                        </div>
                    </a>
                    <a href="../promo-detail/promo-detail.html">
                        <div class="card2">
                            <div class="category-label">Bank</div>
                            <img src="../../dist/img/cafe.png" alt="">
                            <p>09 jan 2024</p>
                            <p>Raksa StoreCare Insurance</p>
                        </div>
                    </a>
                    <a href="../promo-detail/promo-detail.html">
                        <div class="card2">
                            <div class="category-label">Lugnutz</div>
                            <img src="../../dist/img/cafe.png" alt="">
                            <p>09 jan 2024</p>
                            <p>Raksa StoreCare Insurance</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="page-2">
                <div class="promosi-card">
                    <a href="../promo-detail/promo-detail.html">
                        <div class="card1">
                            <div class="category-label">Bank</div>
                            <img src="../../dist/img/customer-1.png" alt="">
                            <p>09 jan 2024</p>
                            <p>Raksa StoreCare Insurance</p>
                        </div>
                    </a>
                    <a href="../promo-detail/promo-detail.html">
                        <div class="card2">
                            <div class="category-label">Lugnutz</div>
                            <img src="../../dist/img/cafe.png" alt="">
                            <p>09 jan 2024</p>
                            <p>Raksa StoreCare Insurance</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pagination">
                <img class="prev" src="../../dist/img/prev-icon.svg" alt="">
                <div class="pagination-indicators"></div>
                <img class="next" src="../../dist/img/next-icon.svg" alt="">
            </div>
        </div>

    </div>
</section>


<?php include "./components/footer.php"; ?>