<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="about" class="why-us padding-100 background-fullwidth h-bg"
        style="background-image: url(assets/img/bg-faq.png);height: 700px;align-items: center;display: flex;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-zoom-in" data-aos-delay="200">
                    <h3 class="text-white"><?= trans('text_120') ?></h3>
                    <div class="space-50"></div>
                    <form class="subscribe-form row m-0">
                        <div class="col-lg-5 col-md-8 col-10 offset-md-3 pl-0 text-left">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-faq" placeholder="<?= trans('text_121') ?>">
                            </div>
                            <div class="d-flex">
                                <a type="mytechanic" href="#faq" class="filter-faq anchor btn w-auto font-size-12 btn-mytechanic">
                                    <img src="assets/img/my-techanic-logo-white.png" class="white img-fluid" alt="">
                                </a>
                                <a type="techanic-business" href="#faq" class="filter-faq anchor btn font-size-12 btn-techanic-business active">Techanic Business</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-2 text-left pl-0">
                            <a href="#faq" class="anchor btn btn-primary shadow">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section id="faq" class="faq padding-100">
        <div class="container">
            <div class="row align-items-center">
                <!--align-items-center-->
                <div class="col-md-12 col-12" data-aos="fade-right">
                    <h3 class=" text-center title"><?= trans('text_123') ?></h3>
                    <div class="space-50"></div>
                    <div class="accordion" id="faqAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="heading_1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                        <?= trans('text_125') ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse_1" class="collapse show" aria-labelledby="heading_1"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                        <?= trans('text_126') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header" id="heading_2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                                        <?= trans('text__126') ?>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_2" class="collapse" aria-labelledby="heading_2"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                        <?= trans('text_127') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header" id="heading_3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                                        <?= trans('text_128') ?>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_3" class="collapse" aria-labelledby="heading_3"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                        <?= trans('text_129') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card shadow">
                            <div class="card-header" id="heading_4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                        Bagaimana cara melihat performa karyawan ?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_4" class="collapse" aria-labelledby="heading_4"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card shadow">
                            <div class="card-header" id="heading_5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                        <?= trans('text_130') ?>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_5" class="collapse" aria-labelledby="heading_5"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                        <?= trans('text_131') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header" id="heading_6">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_6" aria-expanded="false" aria-controls="collapse_6">
                                        <?= trans('text_132') ?>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_6" class="collapse" aria-labelledby="heading_6"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                        <?= trans('text_133') ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header" id="heading_10">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_10" aria-expanded="false" aria-controls="collapse_10">
                                        <?= trans('text_134') ?> 
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_10" class="collapse" aria-labelledby="heading_10"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                        <?= trans('text_135') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card shadow">
                            <div class="card-header" id="heading_7">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_7" aria-expanded="false" aria-controls="collapse_7">
                                        Apakah pemilik usaha dapat mengambil alih order dari teknisi yang tidak masuk ?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_7" class="collapse" aria-labelledby="heading_7"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                            1. Pastikan sudah mendownload aplikasi <b>Techanic Business</b> dari app store ataupun play store <br>
                                            2. Buka aplikasinya dan masukkan nomor hp anda, lalu klik lanjut <br>
                                            3. Lalu masukkan kode otp yang yang telah dikirim di nomor whatsapp <br>
                                            4. Lanjutkan pendaftaran dengan mengisi form identitas <br>
                                            5. Buat PIN baru <br>
                                            6. Konfirmasi PIN baru <br>
                                            7. Selamat, anda telah berhasil mendaftar di <b>Techanic Business</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header" id="heading_8">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_9" aria-expanded="false" aria-controls="collapse_9">
                                        Siapa pemilik data pelanggan yang terdaftar di Techanic Business ?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_9" class="collapse" aria-labelledby="heading_8"
                                data-parent="#faqAccordion">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <div class="watch-video faq">
                                            <div class="video">
                                                <img src="assets/img/mobile.png" class="d-none-mobile img-fluid mx-auto" alt="">
                                                <img src="assets/img/mobile-landscape.png" class=" d-none-pc img-fluid mx-auto" alt="">
                                                <a href="https://www.youtube.com/watch?v=2PtGxaaCApg" data-lity></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="align-self: center;">
                                        <p>
                                            1. Pastikan sudah mendownload aplikasi <b>Techanic Business</b> dari app store ataupun play store <br>
                                            2. Buka aplikasinya dan masukkan nomor hp anda, lalu klik lanjut <br>
                                            3. Lalu masukkan kode otp yang yang telah dikirim di nomor whatsapp <br>
                                            4. Lanjutkan pendaftaran dengan mengisi form identitas <br>
                                            5. Buat PIN baru <br>
                                            6. Konfirmasi PIN baru <br>
                                            7. Selamat, anda telah berhasil mendaftar di <b>Techanic Business</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="img-empty" style="display:none">
                        <img src="assets/img/empty-folder.png" alt="kosong">
                        <h4>Data Yang Dicari Tidak Ditemukan</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    