<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Start Header -->
    <section id="slide" class="slide background-withcolor bg-primary-customer">
        <div class="content-bottom">
            <div class="container potition-relative">
                <div class="row mx-0">
                    <div class="col-md-10 mt-2 pl-0 slide-user">
                        <div id="customer" class="row mx-0 active">
                            <div class="col-md-6 pl-0">
                                <h2 class="remove-class text-white mt-0" data-aos="fade-right" data-aos-delay="100">
                                    <?= trans('text_43') ?>
                                </h2>
                                <p data-aos="fade-right mt-2" data-aos-delay="200" class="font-size-17 text-white remove-class">
                                    <?= trans('text_44') ?>
                                </p>
                                <div class="row mt-4" data-aos-delay="300">
                                    <div class="col-md-12">
                                        <p data-aos-delay="100" class="icon-teknisi text-capitalize mb-3 d-flex remove-class">
                                            <span style="padding: 5px 7px;height: 23px;width: 23px;" class="font-size-10 icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="d-block font-size-17 text-white"><?= trans('text__44') ?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-12">
                                        <p data-aos-delay="300" class="icon-teknisi text-capitalize mb-3 d-flex remove-class">
                                            <span style="padding: 5px 7px;height: 23px;width: 23px;" class="font-size-10 icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="d-block font-size-17 text-white"><?= trans('text___44') ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pr-0 position-relative">
                                <div data-aos="zoom-in-up" data-aos-delay="1000" class="img-slide-customer">
                                    <img src="assets/img/like-icon.png" class="img-fluid _1" alt="">
                                    <img src="assets/img/rating-mytechanic.png" class="img-fluid _2" alt="">
                                    <img  src="assets/img/user-mytechanic.png" class="img-fluid main" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 pr-0 mt-md-5 d-none-mobile" data-aos="fade-left" data-aos-delay="400">
                        <?php $this->load->view('_sub_menu'); ?>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-delay="400" class="row bg-kategori-slider mx-0">
                    <div class="col-md-4 px-md-3 px-1 border-right">
                        <h4 class="font-weight-700 mb-1"><?= trans('text_45') ?></h4>
                        <p class="mb-md-0 mb-2"><?= trans('text_46') ?></p>
                    </div>
                    <div class="col-md-7 col-10 pl-md-5 pl-0">
                        <div class="kategori-slider">
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/phone.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100"><?= trans('text_47') ?></span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/pc.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100"><?= trans('text_48') ?></span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/ac.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100"><?= trans('text_49') ?></span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/car.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100"><?= trans('text_50') ?></span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/tv.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100"><?= trans('text_51') ?></span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex">
                                    <img src="assets/img/lain-lain.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100"><?= trans('text_52') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-2 pr-2">
                        <a href="<?= link_ext('web') ?>" class="btn btn-search"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Header -->
    <div class="space-50 d-none-pc"></div>
    <div class="space-100"></div>
        <section id="manfaat-mytechanic" class="watch-video padding-0 background-fullwidth background-fixed" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pl-md-5 section-title aos-init aos-animate" data-aos="fade-zoom-in">
                        <h3 class="text-center">
                            <?= trans('text__52') ?>
                        </h3>
                        <div class="space-25"></div>
                        <p class="text-center font-weight-normal">
                            <?= trans('text_53') ?>
                        </p>
                    </div>
                    <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="w-100 text-center mt-3">
                            <a href="<?= link_ext('web') ?>" class="btn btn-primary">
                            <?= trans('text_54') ?> 
                            </a>
                        </div>
                        <div class="video bg-none p-0 pr-3">
                            <img src="assets/img/laptop.png" class="img-fluid d-block mx-auto" alt="">
                            <a href="https://www.youtube.com/watch?v=UTGmM4J0gVY" data-lity=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="space-100 d-none-mobile"></div>
    <div class="space-100"></div>
    
    <div class="container gallery">
        <div class="mb-3 row">
            <div class="col-md-6 px-2 text-left aos-init " data-aos="fade-right">
                <div class="bg-gray d-flex align-items-center">
                    <div class="section-title">
                        <h3 class="text-left mb-md-3">
                            <b><?= trans('text_55') ?></b> 
                        </h3>
                        <p class="text-left font-weight-normal">
                        <?= trans('text_56',1) ?>
                        </p>
                    </div>
                </div>  
            </div>
            <div class="col-md-6 aos-init " data-aos="fade-zoom-in" data-aos-delay="200">
                <div class="row">
                    <div class="col-lg-6 px-2  aos-init text-right" data-aos="zoom-in" data-aos-delay="400">
                        <div class="blog-secondary gallery _1 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-0.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                            <div class="mb-md-3 mb-1">
                                <h3 class="mb-1 text-left"><?= trans('text__55') ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-2  aos-init " data-aos="zoom-in" data-aos-delay="600">
                        <div class="w-100 mb-3">
                            <div class="blog-secondary gallery _2 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-2.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                                <div class="mb-md-3 mb-1">
                                    <h3 class="mb-1"><?= trans('text___55') ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                        <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-3.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                                <div class="mb-md-3 mb-1">
                                    <h3 class="mb-1"><?= trans('text__1_55') ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-25"></div>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 px-2 aos-init " data-aos="zoom-in" data-aos-delay="100">
                <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-5.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                    <div class="mb-md-3 mb-1">
                    <h3 class="mb-1"><?= trans('text__2_55') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 aos-init " data-aos="zoom-in" data-aos-delay="100">
                    <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-6.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                    <div class="mb-md-3 mb-1">
                    <h3 class="mb-1"><?= trans('text__3_55') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 aos-init " data-aos="zoom-in" data-aos-delay="100">
                    <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-7.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                    <div class="mb-md-3 mb-1">
                        <h3 class="mb-1"><?= trans('text__55') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 aos-init " data-aos="zoom-in" data-aos-delay="100">
                    <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-8.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                    <div class="mb-md-3 mb-1">
                        <h3 class="mb-1"><?= trans('text__55') ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 px-2 aos-init " data-aos="zoom-in" data-aos-delay="100">
                    <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-9.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                    <div class="mb-md-3 mb-1">
                    <h3 class="mb-1"><?= trans('text__4_55') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-2 aos-init " data-aos="zoom-in" data-aos-delay="100">
                    <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-10.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                    <div class="mb-md-3 mb-1">
                    <h3 class="mb-1"><?= trans('text___55') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 aos-init d-none-mobile" data-aos="zoom-in" data-aos-delay="100">
              <!-- <div class="bg-blue"></div>   -->
                <div class="blog-secondary gallery _3 rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/gallery-11.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                    <div class="mb-md-3 mb-1">
                        <h3 class="mb-1"></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-100 d-none-mobile"></div>
    <div class="space-50"></div>

    <?php $this->load->view('_testimoni'); ?>

    <div class="space-100"></div>
    <?php $this->load->view('_blog_item'); ?>

    <div class="space-100 d-none-mobile"></div>