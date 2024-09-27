<section class="banner-hero">
    <div class="container">
        <div class="banner-hero__wrapper row">
            <div class="banner-content col-lg-5 col-12">
                <h1 class="banner-content__title"><?= $titleBanner ?></h1>
                <p class="banner-content__desc"><?= $descBanner ?></p>

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


</section>