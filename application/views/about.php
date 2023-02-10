<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- Start Why Us -->
    <section id="about" class="why-us padding-100 background-fullwidth"
        style="background-image: url(assets/img/bg-about.png);height: 750px;">
        <div class="container d-flex-center">
            <div class="space-50"></div>
            <div class="row align-items-center" data-aos="fade-zoom-in" data-aos-delay="200">
                <div class="col-md-12 text-center">
                    <a href="#latar-belakang" id="#latar-belakang" class="anchor potition-relative">
                        <h3 class="text-white">
                            <?= trans('text_20') ?>
                        </h3>
                        <img src="assets/img/arrows-down.png" class="icon img-fluid arrow-animation ml_-2" alt="">
                        <div class="space-25"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us -->

    <section id="latar-belakang" class="padding-100 background-fixed bg-dark" >
        <div class="container bg-blue p-bg-blue rounded-30">
            <div class="row">
                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title stiky-left">
                        <span class="badge badge-light">Latar Belakang</span>
                        <h3 class="text-white mt-3 mb-3">
                            <?= trans('text_21') ?>
                        </h3>
                    </div>
                </div>
                <div class="col-md-7 section-title aos-init aos-animate" data-aos="fade-zoom-in">
                    <div class="row mx-0 produk-info mb-4 bg-white">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start flex-column h-card-info">
                                <div class="mb-auto p-2">
                                    <h3>
                                        <?= trans('text_22') ?>
                                    </h3>
                                </div>
                                <div class="p-2">
                                    <p class="font-weight-normal mb-0">
                                        <?= trans('text_23') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <img src="assets/img/ilustrasi-1.png" class="right img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row mx-0 produk-info mb-4 bg-white">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start flex-column h-card-info">
                                <div class="mb-auto p-2">
                                    <h3>
                                        <?= trans('text_24') ?>
                                    </h3>
                                </div>
                                <div class="p-2">
                                    <p class="font-weight-normal mb-0">
                                        <?= trans('text_25') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <img src="assets/img/ilustrasi-2.png" class="right img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row mx-0 produk-info mb-4 bg-white">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start flex-column h-card-info">
                                <div class="mb-auto p-2">
                                    <h3>
                                        <?= trans('text_26') ?>
                                    </h3>
                                </div>
                                <div class="p-2">
                                    <p class="font-weight-normal mb-0">
                                        <?= trans('text_27') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <img src="assets/img/ilustrasi-3.png" class="right img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row mx-0 produk-info mb-4 bg-white">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start flex-column h-card-info">
                                <div class="mb-auto p-2">
                                    <h3>
                                        <?= trans('text_28') ?>
                                    </h3>
                                </div>
                                <div class="p-2">
                                    <p class="font-weight-normal mb-0">
                                        <?= trans('text_29') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <img src="assets/img/ilustrasi-4.png" class="right img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="space-100"></div>
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3 class="text-white"><?= trans('text_30') ?></h3>
                </div>
            </div>
            <div class="space-50"></div>
            <div class="row align-items-center bg-my-techanic rounded-30-top">
                <div class="col-md-5 text-center" data-aos="fade-right">
                    <img src="assets/img/my-techanic-logo-white.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 text-white border-left-white" data-aos="fade-zoom-in" data-aos-delay="200">
                    <h3 class="text-white"><?= trans('text_31') ?> </h3>
                    <div class="space-25"></div>
                    <div class="row">
                        <div class="col-md-12" data-aos="zoom-in" data-aos-delay="400">
                            <div class="why-us-icon">
                                <p>
                                    <?= trans('text_32') ?>
                                </p>
                            </div>
                            <div class="space-15"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center bg-techanic-business rounded-30-bottom">
                <div class="col-md-5 text-center" data-aos="fade-right">
                    <img src="assets/img/techanic-business-logo-white.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 text-white border-left-white" data-aos="fade-zoom-in" data-aos-delay="200">
                    <h3 class="text-white">
                        <?= trans('text_33') ?></h3>
                        <div class="space-25"></div>
                    <div class="row">
                        <div class="col-md-12" data-aos="zoom-in" data-aos-delay="400">
                            <div class="why-us-icon">
                                <p>
                                    <?= trans('text_34') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-100 container">
        <div class="row mx-0 align-items-center">
            <div class="col-md-5 text-center" data-aos="fade-right">
                <img src="assets/img/logo-techanic-general-blue.png" class="img-fluid img-owner" alt="">
            </div>
            <div class="col-md-6" data-aos="fade-zoom-in" data-aos-delay="200">
                <div class="row">
                    <div class="col-md-12" data-aos="zoom-in" data-aos-delay="400">
                        <div class="why-us-icon">
                            <p>
                                <?= trans('text_35') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12" data-aos="zoom-in" data-aos-delay="600">
                        <div class="why-us-icon">
                            <p><?= trans('text_36') ?></p>
                        </div>
                    </div>
                    <div class="space-25"></div>
                    <div class="col-md-12" data-aos="zoom-in" data-aos-delay="800">
                        <div class="why-us-icon">
                            <p><?= trans('text_37') ?></p>
                        </div>
                        <div class="space-25"></div>
                    </div>
                    <div class="col-md-12" data-aos="zoom-in" data-aos-delay="800">
                        <div class="why-us-icon">
                            <p>Henry Lucman<br>
                                <!-- <b>CEO & Founder TECHANIC</b> -->
                            </p>
                        </div>
                        <div class="space-25"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-go-green">
            <div class="container">
                <div class="row mx-0 align-items-center mx-0">
                    <div class="col-md-6 text-white" data-aos="fade-zoom-in" data-aos-delay="200">
                            <h3 class="text-white"><?= trans('text_38') ?></h3>
                            <h3 class="text-white Sustainability">#SustainabilityIsImportant</h3>
                            <p class="font-size-18"><?= trans('text_39') ?></p>
                            <div class="row mx-0">
                                <div class="col-md-4 col-4 px-0">
                                    <a class="img-download" href="<?= link_ext('playstore') ?>">
                                        <img src="assets/img/playstore.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-5 col-5 pl-1 pr-0 mb-0">
                                    <a class="img-download-appstore" href="<?= link_ext('appstore') ?>">
                                        <img src="assets/img/appstore.png" class="img-fluid" alt="" style="width:73%">
                                    </a>
                                </div>
                                <div class="col-md-12 px-0 mt-2">
                                    <a href="<?= link_ext('web') ?>" class="btn btn-outline-light"><?= trans('text_40') ?></a>
                                </div>
                            </div>
                        <div class="space-50"></div>
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-right">
                        <img src="assets/img/indonesia.png" class="img-fluid img-indonesia" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_hubungkan_ke_tim',['text' => trans('text_41')]); ?>