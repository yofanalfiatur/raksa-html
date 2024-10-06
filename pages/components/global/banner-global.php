<section class="banner-hero">
    <div class="container">
        <div class="banner-hero__wrapper row">
            <div class="banner-content col-lg-5 col-12">
                <h1 class="banner-content__title"><?= $titleBanner ?></h1>
                <p class="banner-content__desc"><?= $descBanner ?></p>

                <?php if (!empty($btnBanner)) : ?>
                    <a href="<?= $btnBanner['link'] ?>" class="banner-content__btn">
                        <p class="banner-content__btn__text"><?= $btnBanner['text'] ?></p>
                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8787 1.06562C12.7471 1.19745 12.6731 1.37616 12.6731 1.56249C12.6731 1.74882 12.7471 1.92753 12.8787 2.05937L20.1151 9.29687L1.18812 9.29687C1.00164 9.29687 0.822794 9.37095 0.690933 9.50281C0.559071 9.63467 0.484993 9.81351 0.484993 9.99999C0.484993 10.1865 0.559071 10.3653 0.690933 10.4972C0.822794 10.629 1.00164 10.7031 1.18812 10.7031L20.1151 10.7031L12.8787 17.9406C12.7545 18.0739 12.6869 18.2502 12.6901 18.4324C12.6934 18.6145 12.7671 18.7883 12.896 18.9171C13.0248 19.046 13.1986 19.1198 13.3808 19.123C13.5629 19.1262 13.7392 19.0586 13.8725 18.9344L22.31 10.4969C22.4417 10.365 22.5156 10.1863 22.5156 9.99999C22.5156 9.81366 22.4417 9.63495 22.31 9.50312L13.8725 1.06562C13.7407 0.933943 13.5619 0.859985 13.3756 0.859985C13.1893 0.859985 13.0106 0.933943 12.8787 1.06562Z" fill="#FF9000" />
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if (!empty($ListContent)) : ?>
                    <div class="banner-content__list">
                        <?php foreach ($ListContent as $item) : ?>
                            <div class="banner-content__list__item">
                                <img src="<?= $item['iconList'] ?>" alt="icon-service" class="banner-content__list__item__icon">
                                <p class="banner-content__list__item__text"><?= $item['textList'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="banner-picture">
        <img src="<?= $imageBanner ?>" alt="banner hero" class="banner-picture__img">
    </div>

    <!-- list mobile -->
    <?php if (!empty($ListContent)) : ?>
        <div class="banner-hero__list-md container">
            <div class="banner-content__list">
                <?php foreach ($ListContent as $item) : ?>
                    <div class="banner-content__list__item">
                        <img src="<?= $item['iconList'] ?>" alt="icon-service" class="banner-content__list__item__icon">
                        <p class="banner-content__list__item__text"><?= $item['textList'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>