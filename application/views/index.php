<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <section id="main-bg" class="watch-video padding-100 potition-relative" style="background: url(assets/img/bg.png);">
        <div class="container video px-md-3">
            <a href="https://www.youtube.com/watch?v=NtFyX2d59bo" data-lity></a>
            <div class="section-title text-white" data-aos="fade-zoom-in">
                <div class="space-100"></div>
                <!-- <span class="badge badge-light mb-2">Visi Kita</span> -->
                <h3 class="text-white">
                    <?= trans('text_1') ?>
                </h3>
                <div class="space-25"></div>
                <p>
                    <?= trans('text_2') ?>
                </p>
                <p class="mt-md-3">
                    <?= trans('text_3') ?>
                </p>
            </div>
        </div>
        <img id="slider-right" src="assets/img/right-slider-0.png" class="img-fluid" style="width: 650px;height: 100%;object-fit: cover;position: absolute;right: 0;top: 0;">
        <a class="text-white" data-toggle="modal" data-target="#showBlog" href="#"><?= trans('text_4') ?> <img src="assets/img/right.png" class="img-fluid small-icon ml-2"></a>
    </section>

    <div class="space-50"></div>
    <section id="cara-kerja" class="boxes padding-100">
        <div class="container">
            <div class="text-center section-title">
                <h3 class="mb-3">
                    <?= trans('text_5') ?></h3>
                <img src="assets/img/icon-r3.png" class="img-fluid" alt="">
            </div>
            <div class="space-50"></div>
            <div class="row">
                <div class="col-md-2 col-12"> </div>
                <div class="col-md-4 col-12">
                    <div class="box active" data-aos="fade-up">
                        <h5>01</h5>
                        <div class="space-20"></div>
                        <img src="assets/img/ilustrasi-edukasi.png" class="img-fluid width-img-md" alt="">
                        <div class="space-20"></div>
                        <h3><?= trans('text_6') ?></h3>
                        <p>
                            <?= trans('text_7') ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box" data-aos="fade-up">
                        <h5>02</h5>
                        <div class="space-20"></div>
                        <img src="assets/img/my-techanic-ilustration.png" class="img-fluid width-img-md" alt="">
                        <div class="space-20"></div>
                        <h3><?= trans('text_8') ?></h3>
                        <p>
                            <?= trans('text_9') ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-12"> </div>
                <div class="col-md-2 col-12"> </div>
                <div class="col-md-4 col-12">
                    <div class="box" data-aos="fade-up">
                        <h5>03</h5>
                        <div class="space-20"></div>
                        <img src="assets/img/ilustrasi-traking-order.png" class="img-fluid width-img-md" alt="">
                        <div class="space-20"></div>
                        <h3><?= trans('text_10') ?></h3>
                        <p>
                            <?= trans('text_11') ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box" data-aos="fade-up">
                        <h5>04</h5>
                        <div class="space-20"></div>
                        <img src="assets/img/ilustrasi-win.png" class="img-fluid width-img-md" alt="">
                        <div class="space-20"></div>
                        <h3> <?= trans('text_12') ?></h3>
                        <p>
                            <?= trans('text_13') ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-12"> </div>
            </div>
        </div>
    </section>
    
    <section id="manfaat-mytechanic" class="padding-100 background-fullwidth background-fixed bg-blue" >
        <div class="container">
            <div class="row mx-0">
                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title stiky-left mb-3">
                        <span class="badge badge-light"><?= trans('text_14') ?></span>
                        <h3 class="text-white mt-3 title-1">
                            <?= trans('text_15') ?>
                        </h3>
                        <h3 class="text-white mt-3 title-2">
                            <?= trans('text__15') ?>
                        </h3>
                    </div>
                </div>
                <?php $lang = $this->input->get('lang',true); ?>
                <div class="col-md-7 section-title aos-init aos-animate" data-aos="fade-zoom-in">
                    <div class="mx-0 row produk-info bg-white mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start flex-column h-card mytechanic">
                                <div class="mb-auto">
                                    <img src="assets/img/my-techanic-logo-blue.png" class="logo img-fluid mt-3" alt="">
                                    <p class="font-weight-normal mt-md-2">
                                        <?= trans('text_16') ?>
                                    </p>
                                </div>
                                <a href="<?= site_url().'product?title=my-techanic'.($lang == 'en-id' ? '&lang=en-id'  : '') ?>" class="btn btn-primary mytechanic">
                                    <?= trans('text_17') ?> <i class="fa fa-chevron-circle-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/my-techanic-home.png" class="right img-fluid" alt="">
                        </div>
                    </div>
                    <div class="mx-0 row produk-info bg-white">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start flex-column h-card">
                                <div class="mb-auto">
                                    <img src="assets/img/techanic-business-logo-blue.png" class="logo techanic-business img-fluid mt-3" alt="">
                                    <p class="font-weight-normal">
                                        <?= trans('text_18') ?>
                                    </p>
                                </div>
                                <a href="<?= site_url().'product?title=techanic-business'.($lang == 'en-id' ? '&lang=en-id'  : '') ?>" class="btn btn-primary techanicbusiness">
                                    <?= trans('text_17') ?> <i class="fa fa-chevron-circle-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/techanic-business-home.png" class="right img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="space-100 d-none-mobile"></div>

    <?php $this->load->view('_modal_blog'); ?>