<?php
$title = "Hubungi Kami | Raksa Online";
include "./components/header.php"; ?>

<section class="ct__intro">
    <div class="container">
        <div class="ct__intro__wrapper">
            <h1 class="ct__intro__title">Kami Ada Untuk Anda</h1>
            <p class="ct__intro__desc">Punya pertanyaan atau butuh informasi? Kami siap membantu Anda</p>
        </div>
    </div>
</section>

<section class="ct__map">
    <div class="container">
        <div class="ct__map__wrapper row">
            <h2 class="ct__map__title col-lg-4 col-12">Cari Cabang Terdekat di Wilayah Anda</h2>
            <div class="ct__map__filter col-lg-8 col-12">
                <select name="" id="province" class="ct__map__filter__select">
                    <option value="">Provinsi</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                </select>
                <button class="ct__map__filter__btn">Temukan</button>
            </div>
        </div>
        <div class="ct__map__content row">
            <div class="ct__map__content__info col-lg-5 col-12">
                <p class="ct__map__content__info__title">Jalan Arifin Ahmad No.89A, Marpoyan Damai
                    Kota Pekanbaru, Riau 28289</p>
                <a href="tel:085885558555" class="ct__map__content__info__phone">
                    <img src="../dist/img/temp/icon-phone.svg" alt="">
                    <span>085885558555</span>
                </a>
                <a href="mailto:9Hjxq@example.com" class="ct__map__content__info__email">
                    <img src="../dist/img/temp/icon-email.svg" alt="">
                    <span>9Hjxq@example.com</span>
                </a>
            </div>
            <div class="ct__map__content__embed col-lg-7 col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666427022623!2d106.82457787555265!3d-6.175392393812005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonas!5e0!3m2!1sen!2sid!4v1727780318086!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="ct__form">
    <div class="container">
        <div class="ct__form__wrapper row">
            <div class="ct__form__wrapper__col col-lg-10 col-12">
                <form action="" class="form">
                    <div class="form__name form__group">
                        <label for="name" class="form__label">Nama</label>
                        <input type="text" id="name" class="form__input" required>
                    </div>
                    <div class="form__email form__group">
                        <label for="email" class="form__label">Email</label>
                        <input type="email" id="email" class="form__input" required>
                    </div>
                    <div class="form__phone form__group">
                        <label for="phone" class="form__label">Nomor Handphone</label>
                        <input type="tel" id="phone" class="form__input">
                    </div>
                    <div class="form__service form__group">
                        <label for="service" class="form__label">Pilih Layanan</label>
                        <select name="" id="">
                            <option value="">Pilih Layanan</option>
                            <option value="">Layanan 1</option>
                            <option value="">Layanan 2</option>
                            <option value="">Layanan 3</option>
                        </select>
                    </div>
                    <div class="form__message form__group">
                        <label for="message" class="form__label">Pesan</label>
                        <textarea name="" id="message" cols="30" rows="10" class="form__input"></textarea>
                    </div>
                    <div class="form__submit form-group">
                        <input type="submit" value="Send Message" class="form__submit-btn btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include "./components/footer.php"; ?>