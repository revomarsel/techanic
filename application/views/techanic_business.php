<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <style>
        .slide-user > div {
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <?php $this->load->view('_modal'); ?>
    <!-- Start Header -->
    <section id="slide" class="slide background-withcolor bg-primary-pengusaha">
        <div class="content-bottom">
            <div class="container potition-relative">
                <div class="row mx-0">
                    <div class="col-md-10 mt-4 pl-0 slide-user">
                        <div id="pengusaha" class="row mx-0 active">
                            <div class="col-md-8 pl-0 section-title order-xs-last">
                                <h3 class="text-white title-business"><?= trans('text_66') ?></h3>
                                <div class="row mt-md-4 mt-3 potition-relative">
                                    <div class="col-md-12">
                                        <p class="text-white font-size-18">
                                        <?= trans('text_67') ?>
                                        </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p data-aos="zoom-in" data-aos-delay="100" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_68') ?></span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="200" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_69') ?></span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="300" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_70') ?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p data-aos="zoom-in" data-aos-delay="100" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_71') ?></span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="200" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_72') ?></span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="300" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_73') ?></span>
                                        </p>
                                    </div>
                                </div>
                                <p data-aos="zoom-in" data-aos-delay="300" class="mb-2 mt-2 potition-relative text-white font-size-15"><?= trans('text_74') ?></p>
                                <!-- <div data-aos="zoom-in" data-aos-delay="400" class="d-flex align-items-center mt-4 mb-2">
                                    <div class="icon-group">
                                        <img src="assets/img/UserGroups.png" class="img-fluid" style="width: 25px;">
                                    </div>
                                    <p class="mb-0 text-white font-size-15">
                                        <?= trans('text_75') ?>
                                    </p>
                                </div> -->
                                <a data-aos="zoom-in" data-aos-delay="400" href="<?= wa_link() ?>" class="btn btn-primary  mt-5 shadow font-size-13 btn-daftar"><span>
                                <?= trans('text__75') ?></span></a>
                            </div>
                            <div class="col-md-4 pr-0 order-xs-first border-bottom-mobile">
                                <img data-aos="fade-right"  data-aos-delay="100" src="assets/img/user-techanic-business.png" class="img-fluid d-block ml-auto mx-md-auto img-pengusaha" alt="">
                            </div>
                        </div>
                        <div id="teknisi" class="row mx-0">
                            <div class="col-md-8 pl-0 section-title">
                                <h3 class="text-white title-business"><?= trans('text_76') ?></h3>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <p data-aos-delay="100" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_77') ?></span>
                                        </p>
                                        <p data-aos-delay="200" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_78') ?></span>
                                        </p>
                                        <p data-aos-delay="300" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_79') ?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p data-aos-delay="300" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_80') ?></span>
                                        </p>
                                        <p data-aos-delay="500" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_81') ?></span>
                                        </p>
                                        <p data-aos-delay="700" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_82') ?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p data-aos-delay="300" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_83') ?></span>
                                        </p>
                                        <p data-aos-delay="500" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_84') ?></span>
                                        </p>
                                        <p data-aos-delay="700" class="icon-teknisi mb-3 line-height-0 d-flex remove-class">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17 text-white"><?= trans('text_85') ?></span>
                                        </p>
                                    </div>
                                </div>
                                <p class="mb-2 mt-2 potition-relative text-white"><?= trans('text_86') ?></p>
                                <!-- <div class="d-flex align-items-center mt-5 mb-2">
                                    <div class="icon-group">
                                        <img src="assets/img/UserGroups.png" class="img-fluid" style="width: 25px;">
                                    </div>
                                    <p class="mb-0 text-white">
                                        <?= trans('text_87') ?>
                                    </p>
                                </div> -->
                                <a href="#" class="btn btn-primary  mt-5 shadow font-size-13"><span><?= trans('text_88') ?> </span></a>
                            </div>
                            <div class="col-md-4 pl-0 pr-0">
                                <img data-aos="flip-right"  data-aos-anchor-placement="center-center" src="assets/img/ilustration-side-teknisi.png" class="remove-class img-fluid d-block img-teknisi mx-auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 pr-0 mt-md-5 d-none-mobile" data-aos="fade-left" data-aos-delay="1500">
                        <?php $this->load->view('_sub_menu'); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Header -->
    
    <section id="manfaat-mytechanic" class="watch-video padding-100 background-fullwidth background-fixed" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 pl-md-5 section-title aos-init aos-animate" data-aos="fade-zoom-in">
                    <h3 class="text-center">
                        <?= trans('text_93') ?>
                    </h3>
                    <div class="space-25"></div>
                    <p class="text-center font-weight-normal">
                    <?= trans('text_94') ?>
                    </p>
                    <div class="w-100 text-center">
                        <a href="#" class="btn btn-primary mt-3">
                        <?= trans('text_95') ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                    <div class="video bg-none p-0 pr-3">
                        <img src="assets/img/laptop.png" class="img-fluid d-block mx-auto" alt="">
                        <a href="http://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="manfaat-techanic-business" class="py-5" style="background: url('assets/img/bg-white.png') no-repeat center center/cover!important;">
        <div class="watch-video bg-dark-blue rounded-bg mx-3 potition-relative padding-150 padding-10-xs" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4 section-title aos-init aos-animate" data-aos="fade-zoom-in">
                        <span class="badge badge-light"><?= trans('text_96') ?></span>
                        <h3 class="text-white mt-3">
                        <?= trans('text_97') ?>
                        </h3>
                        <a class="btn btn-primary mt-5" href="<?= wa_link() ?>"><?= trans('text_98') ?></a>
                    </div>
                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up">
                        
                    </div>
                </div>
            </div>
            <div class="video bg-none p-0 business-right-img">
                <img src="assets/img/gallery-1.png" class="img-fluid d-block mx-auto" alt="">
                <a href="http://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity=""></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title" data-aos="fade-zoom-in">
                    <div class="space-100"></div>
                    <h3 class="mt-3 text-left">
                    <?= trans('text_99') ?>
                    </h3>
                    <div class="space-50"></div>
                    <div class="row mx-0 border-fitur">
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-1.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_100') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-2.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_101') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-3.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_102') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-4.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_103') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-5.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_104') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-6.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_105') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-7.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_106') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-8.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_107') ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-9.png" class="img-fluid" alt=""> 
                                <p class="m-0"><?= trans('text_108') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="space-100"></div>

    <section id="testimoni" class="clients-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-zoom-in">
                    <img src="assets/img/mini-banner-new.png" class="img-fluid img-indonesia" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="space-50"></div>
    
    <?php $this->load->view('_testimoni'); ?>

    <div class="space-100"></div>
    <section id="download-techanic-business">
        <div class="bg-preview-apps" style="background: url('assets/img/bgdownload.png') no-repeat center center/cover!important;">
            <div class="row align-items-center mx-0">
                <div class="col-md-5 pl-0 offset-md-1 text-white order-xs-last" data-aos="fade-zoom-in" data-aos-delay="300">
                    <h3 class="text-white"><?= trans('text_109') ?></h3>
                        <p class="mt-md-5 mt-2"><?= trans('text_110') ?></p>
                        <div class="row mx-0">
                            <div class="col-md-3 col-4 px-0">
                                <a class="img-download" href="<?= link_ext('playstore') ?>">
                                    <img src="assets/img/playstore.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-5 pl-1 pr-0 mb-0">
                                <a class="img-download-appstore" href="<?= link_ext('appstore') ?>">
                                    <img src="assets/img/appstore.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    <div class="space-50"></div>
                </div>
                <div class="col-md-6 text-right pr-0 order-xs-first" data-aos="fade-right" data-aos-delay="200">
                    <img src="assets/img/preview-apps-techanic-business.png" class="img-fluid img-indonesia" alt="">
                </div>
            </div>
        </div>
        
        <?php $this->load->view('_hubungkan_ke_tim',['text' => trans('text_111')]); ?>
        
    </section>