<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raksa Online - Home</title>
    <link rel="stylesheet" href="dist/css/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/main.min.css">
    <link rel="stylesheet" href="dist/css/vendor/splide/splide-core.min.css">
    <style>
        /* * {
            box-sizing: border-box;
        }

        html {
            margin: 20px 0;
        }

        body {
            padding: 30px;
            font-family: ;
            font-size: 16px;
            line-height: 1.5em;
            margin: 0;
            padding: 0;
            color: #000;
            background-color: #f8f8f8; 
        } */

        /* a {
            text-decoration: none;
        } */

        header {
            display: none;
        }

        .index-card {
            display: block;
            max-width: 320px;
            margin: 0 auto;
            min-height: 262px;
            background: #FF8C4D;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 5px 5px 30px -5px #ddd;
        }

        .index-card-label {
            color: #fff;
            background-color: #ffffff;
            color: #000;
            padding: 15px;
            text-align: center;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        .index-card-header {
            position: relative;
            font-family: 'Urbanist';
            font-weight: 700;
            font-size: 14px;
            overflow: hidden;
            text-align: center;
            background-color: #f7f7f7;
            letter-spacing: 1px;
            padding: 30px 0 20px 0;
        }

        .index-card-header .company-name {
            font-size: 35px;
            color: #103851;
            font-weight: 700;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .index-card-header h4 {
            font-size: 12px;
            text-transform: uppercase;
            color: #919191;
        }

        .index-card-list-wrap {
            background: #fff;
            border-top: 0;
        }

        .index-card-item a {
            display: block;
            font-weight: 700;
            color: #000;
            padding: 13px 20px;
            font-size: 0.9em;
            letter-spacing: 0.5px;
            border-top: 1px solid #eee;
            border-left: 5px solid #FF8C4D;
            transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -webkit-transition: all 0.3s linear;
        }

        .index-card-item a:hover,
        .index-card-item a.active {
            color: #333 !important;
            background: #f1f1f1;
            border-top: 1px solid #fff;
            border-left: 5px solid #FF8C4D;
            text-decoration: none;
        }

        .fa {
            vertical-align: middle;
            line-height: 25px;
        }

        .index-card-search {
            position: relative;
            background: #fff;
            padding: 20px;
        }

        .index-card-search input {
            box-shadow: none;
            font-size: 14px;
            padding: 15px 20px;
            width: 100%;
            border-radius: 3px;
            border: 0;
            background: #efefef;
            color: #444;
        }

        input:focus {
            outline: 0;
        }

        footer {
            background-color: transparent;
            text-align: center;
            font-size: 12px;
            color: #999;
            padding: 15px;
            position: relative;
        }

        footer a {
            color: #999;
        }
    </style>
</head>

<body>
    <header></header>
    <main>
        <article></article>
        <div class="index-card">
            <div class="index-card-label">
                <span>Page Template</span>
            </div>
            <div class="index-card-header">
                <div class="img-retina img-icon-index"></div>
                <figure>
                    <img src="/dist/img/logo-raksa.png" width="200" alt="raksa online logo" />
                </figure>
            </div>
            <div class="index-card-list-wrap">
                <div class="index-card-item">
                    <a href="./pages/home.php" target="_blank" style="color: #000000">Beranda<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/about-us.php" target="_blank" style="color: #000000">Tentang Kami<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/promo-listing.php" target="_blank" style="color: #000000">Promo List<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/single-promo.php" target="_blank" style="color: #000000">Promo Detail<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="#" target="_blank" style="color: #000000">Product List<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/single-product.php" target="_blank" style="color: #000000">Product Detail<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/service-listing.php" target="_blank" style="color: #000000">Service List<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/single-service.php" target="_blank" style="color: #000000">Service Detail<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="#" target="_blank" style="color: #000000">Simulasi Perhitungan<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/contact.php" target="_blank" style="color: #000000">Hubungi Kami<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/thank-you.php" target="_blank" style="color: #000000">Thank You<i class="fa fa-angle-right pull-right"></i></a>
                    <a href="./pages/error-404.php" target="_blank" style="color: #000000">404<i class="fa fa-angle-right pull-right"></i></a>
                </div>
            </div>
        </div>
        <footer>
            Made by <a href="https://stucel.com/" target="_blank" title="Stucel">Stucel</a> - 2024
        </footer>
    </main>
</body>

</html>