<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
        .bg-primary-customer{
            background: url('assets/img/bg-mytechanic.png') no-repeat center center/cover!important;
            background-size: 100% 100%!important;
            margin: 20px;
        }
    </style>

    <!-- Start Header -->
    <section id="slide" class="slide background-withcolor bg-primary-customer">
        <div class="content-bottom">
            <div class="container potition-relative">
                <div class="row mx-0">
                    <div class="col-md-10 mt-2 pl-0 slide-user">
                        <div id="customer" class="row mx-0 active">
                            <div class="col-md-6 pl-0">
                                <h2 class="remove-class text-white mt-5" data-aos="fade-right" data-aos-delay="100">
                                    Jangan Bingung <br>
                                    Cari Tempat Service Terpercaya !
                                </h2>
                                <p data-aos="fade-right" data-aos-delay="200" class="font-size-17 text-white remove-class">
                                   My TECHANIC, Platform mudah mencari lokasi <br> tempat reparasi dengan standar pekerjaan <br>
                                   profesional dan bergaransi 👍
                                </p>
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
                    <div class="col-md-2 pr-0 mt-md-5" data-aos="fade-left" data-aos-delay="1500">
                        <?php $this->load->view('_sub_menu'); ?>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-delay="400" class="row bg-kategori-slider mx-0">
                    <div class="col-md-4 border-right">
                        <h4 class="font-weight-700 mb-1">1000+ Tempat Reparasi</h4>
                        <p class="mb-0">Tersedia Banyak Kategori Reparasi !</p>
                    </div>
                    <div class="col-md-7 pl-5">
                        <div class="kategori-slider">
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/phone.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100">Handphone & Tablet</span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/pc.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100">Komputer & Laptop</span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/ac.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100">Air Conditioner (AC)</span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/car.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100">Otomotif</span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/tv.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100">Peralatan Rumah Tangga</span>
                                </div>
                            </div>
                            <div class="item pr-2 w-slider">
                                <div class="d-flex">
                                    <img src="assets/img/lain-lain.png" class="icon-slide" alt="">
                                    <span class="icon-title w-100">Kategori Service Lainnya...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 pr-2">
                        <a href="#" class="btn btn-search"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Header -->
    
    <section id="manfaat-mytechanic" class="watch-video padding-150 background-fullwidth background-fixed" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 pl-md-5 section-title aos-init aos-animate" data-aos="fade-zoom-in">
                    <h3 class="text-center">
                        Jangan Ragu Untuk <br>  Mempertahankan Perangkat Lama
                    </h3>
                    <div class="space-25"></div>
                    <p class="text-center font-weight-normal">
                        Segala jenis tempat reparasi dapat di cari di aplikasi <br> <b>My Techanic</b>. pasti dikerjakan tenaga ahli dan berpengalaman.
                    </p>
                </div>
                <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                    <div class="w-100 text-center mt-3">
                        <a href="#" class="btn btn-primary">
                            Cari Lokasi Terdekat
                        </a>
                    </div>
                    <div class="video bg-none p-0 pr-3">
                        <img src="assets/img/laptop.png" class="img-fluid d-block mx-auto" alt="">
                        <a href="http://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="clients-testimonial">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title-custom" data-aos="fade-zoom-in">
                    <p class="font-size-20">APA YANG MEREKA KATAKAN</p>
                    <h3>Client puas dengan layanan <br>
                        My Techanic & Techanic Business</h3>
                    <div class="space-50"></div>
                </div>
                <div class="col-12">
                    <div class="testimonial-slider" data-aos="fade-up">
                        <div class="item">
                                <div>
                                    <span class="badge badge-client">Profesional Services</span>
                                </div>
                                <div class="px-md-5">
                                    <p class="text-center font-size-20 font-weight-400 mb-0 mt-2">“Tim semakin solid setelah pakai aplikasi Techanic 👏”</p>
                                </div>
                                <div class="mt-4">
                                    <p class="font-size-13 mb-0">
                                        Catherine<br>
                                        <b>PT. DR GADGET INDONESIA</b>
                                    </p>
                                    <p class="mb-0 col-md-13 text-techanicbusiness">
                                        Pengguna sejak 2021
                                    </p>
                                </div>
                        </div>
                        <div class="item">
                            <div>
                                <span class="badge badge-customer">Customer</span>
                            </div>
                            <div class="px-md-5">
                                <p class="text-center font-size-20 font-weight-400 mb-0 mt-2">“Jadi Mudah nyari tempat services! Pokoknya joss!”</p>
                            </div>
                            <div class="mt-4">
                                <p class="font-size-15 mb-0 pt-3">
                                    <b>Maya Reynold</b>
                                </p>
                                <p class="mb-0 col-md-13 text-mytehcanic">
                                    Pengguna sejak 2021
                                </p>
                            </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="space-100"></div>
    <section style="display: none;"  id="download-techanic-business" >
        <div class="bg-preview-apps">
            <div class="row align-items-center mx-0">
                <div class="col-md-5 pl-0 offset-md-1 text-white remove-class" data-aos="fade-zoom-in" data-aos-delay="500">
                    <h3 class="text-white">Unduh TECHANIC Business Untuk Pelayanan Yang Lebih Profesional</h3>
                        <p class="mt-5">Aplikasi bisa didapatkan melalui :</p>
                        <div class="row mx-0">
                            <div class="col-md-4 px-0">
                                <a class="img-download" href="#">
                                    <img src="assets/img/playstore.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md-5 pl-1 pr-0 mb-0">
                                <a class="img-download-appstore" href="#">
                                    <img src="assets/img/appstore.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    <div class="space-50"></div>
                </div>
                <div class="col-md-6 text-right pr-0 remove-class" data-aos="fade-right" data-aos-delay="200">
                    <img src="assets/img/preview-apps-techanic-business.png" class="img-fluid img-indonesia" alt="">
                </div>
            </div>
        </div>
        <div class="space-100"></div>
        <div class="space-50"></div>
        <div class="row">
            <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                <h3 class="text-dark-gradient">
                    Tim TECHANIC <br> Siap Memberikan Anda Solusi
                </h3>
                <div class="space-25"></div>
                <a href="#" class="btn btn-primary font-weight-700">Hubungkan Ke Tim</a>
            </div>
        </div>
        <div class="space-50"></div>
    </section>