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
                <button class="ct__map__filter__btn">
                    <span>Temukan</span>
                </button>
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
                        <input type="text" id="name" class="form__input" placeholder="" required>
                        <label for="name" class="form__label">Nama</label>
                    </div>
                    <div class="form__email form__group">
                        <input type="email" id="email" class="form__input" placeholder="" required>
                        <label for="email" class="form__label">Email</label>
                    </div>
                    <div class="form__phone form__group">
                        <input type="tel" id="phone" class="form__input" placeholder="" required>
                        <label for="phone" class="form__label">Nomor Handphone</label>
                    </div>
                    <div class="form__service form__group">
                        <select name="" id="service" class="form__input" required>
                            <option value disabled selected></option>
                            <option value="">Layanan 1</option>
                            <option value="">Layanan 2</option>
                            <option value="">Layanan 3</option>
                        </select>
                        <label for="service" class="form__label">Jenis Layanan</label>

                    </div>
                    <div class="form__message form__group">
                        <textarea name="" id="message" cols="30" rows="10" class="form__input" placeholder="" required></textarea>
                        <label for="message" class="form__label">Pesan</label>
                    </div>
                    <div class="form__submit form-group">
                        <button type="submit" value="" class="form__submit-btn btn">
                            <span>Kirim</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21" fill="none">
                                <path d="M13.4635 1.01403C13.3237 1.154 13.2451 1.34375 13.2451 1.54158C13.2451 1.73941 13.3237 1.92916 13.4635 2.06913L21.1466 9.75347L1.05107 9.75347C0.853073 9.75347 0.663189 9.83212 0.523186 9.97212C0.383183 10.1121 0.304531 10.302 0.304531 10.5C0.304531 10.698 0.383183 10.8879 0.523186 11.0279C0.663189 11.1679 0.853073 11.2465 1.05107 11.2465L21.1466 11.2465L13.4635 18.9309C13.3316 19.0724 13.2598 19.2596 13.2632 19.453C13.2666 19.6464 13.345 19.8309 13.4818 19.9677C13.6185 20.1045 13.8031 20.1828 13.9965 20.1862C14.1899 20.1896 14.377 20.1178 14.5186 19.986L23.477 11.0276C23.6168 10.8876 23.6953 10.6978 23.6953 10.5C23.6953 10.3022 23.6168 10.1124 23.477 9.97245L14.5186 1.01403C14.3786 0.874226 14.1888 0.795702 13.991 0.795702C13.7932 0.795702 13.6034 0.874226 13.4635 1.01403Z" fill="white" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ct__pre-footer">
    <div class="container">
        <div class="ct__pre-footer__wrapper row">
            <div class="ct__pre-footer__content col-lg-6 col-12">
                <h3 class="ct__pre-footer__content__title">Head Office
                    <br>PT Asuransi Raksa Pratikara
                </h3>
                <p class="ct__pre-footer__content__desc">Wisma BSG 3rd Floor Jl. Abdul Muis No.40, Jakarta 10160</p>
                <a href="#" class="ct__pre-footer__content__btn btn">
                    <span> Lihat di Google Maps</span>
                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8787 1.06562C12.7471 1.19745 12.6731 1.37616 12.6731 1.56249C12.6731 1.74882 12.7471 1.92753 12.8787 2.05937L20.1151 9.29687L1.18812 9.29687C1.00164 9.29687 0.822794 9.37095 0.690933 9.50281C0.559071 9.63467 0.484993 9.81351 0.484993 9.99999C0.484993 10.1865 0.559071 10.3653 0.690933 10.4972C0.822794 10.629 1.00164 10.7031 1.18812 10.7031L20.1151 10.7031L12.8787 17.9406C12.7545 18.0739 12.6869 18.2502 12.6901 18.4324C12.6934 18.6145 12.7671 18.7883 12.896 18.9171C13.0248 19.046 13.1986 19.1198 13.3808 19.123C13.5629 19.1262 13.7392 19.0586 13.8725 18.9344L22.31 10.4969C22.4417 10.365 22.5156 10.1863 22.5156 9.99999C22.5156 9.81366 22.4417 9.63495 22.31 9.50312L13.8725 1.06562C13.7407 0.933943 13.5619 0.859985 13.3756 0.859985C13.1893 0.859985 13.0106 0.933943 12.8787 1.06562Z" fill="#FF9000" />
                    </svg>
                </a>
            </div>

            <div class="ct__pre-footer__picture col-lg-6 col-12">
                <img src="../dist/img/temp/ct-pref-banner-2x.png" alt="Pre-Footer" class="ct__pre-footer__picture__img">
            </div>
        </div>
        <div class="ct__pre-footer__contact row">
            <div class="ct__pre-footer__contact__col col-lg-3 col-12">
                <a href="#" class="ct__pre-footer__contact__btn btn">
                    <img src="../dist/img/temp/logo-wa-btn.svg" alt="logo">
                    <span>085555555555</span>
                </a>
            </div>
            <div class="ct__pre-footer__contact__col col-lg-3 col-12">
                <a href="#" class="ct__pre-footer__contact__btn btn">
                    <img src="../dist/img/temp/icon-phone.svg" alt="logo">
                    <span>021-3859004</span>
                </a>
            </div>
            <div class="ct__pre-footer__contact__col col-lg-3 col-12">
                <a href="#" class="ct__pre-footer__contact__btn btn">
                    <img src="../dist/img/temp/icon-fax.svg" alt="logo">
                    <span>021-3859004</span>
                </a>
            </div>
            <div class="ct__pre-footer__contact__col col-lg-3 col-12">
                <a href="#" class="ct__pre-footer__contact__btn btn">
                    <img src="../dist/img/temp/icon-email.svg" alt="logo">
                    <span>raksa@online.co.id</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include "./components/global/pre-footer.php"; ?>
<?php include "./components/footer.php"; ?>