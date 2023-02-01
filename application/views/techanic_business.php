<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
        .bg-primary-pengusaha{
            background: url('assets/img/bg-techanic business.png') no-repeat center center/cover!important;
            background-size: 100% 100%!important;
            margin: 20px;
        }
        .bg-primary-pengusaha .content-bottom {
            padding-top: 160px;
            position: relative;
            z-index: 1;
            height: 700px;
            /* height: 850px; */
            /* height: 790px; */
        }
    </style>

    <!-- Start Header -->
    <section id="slide" class="slide background-withcolor bg-primary-pengusaha">
        <div class="content-bottom">
            <div class="container potition-relative">
                <div class="row mx-0">
                    <div class="col-md-10 mt-4 pl-0 slide-user">
                        <div id="pengusaha" class="row mx-0">
                            <div class="col-md-8 pl-0 section-title">
                                <h3 class="text-white">Kita Pionir ! Mengembangkan <br>
                                    Industri Reparasi Indonesia</h3>
                                <div class="row mt-4 potition-relative">
                                    <div class="col-md-12">
                                        <p class="text-white font-size-17">
                                            Cek performa usaha tidak perlu datang ke toko setiap hari.
                                        </p>
                                    </div>
                                    <div class="col-md-5">
                                        <p data-aos="zoom-in" data-aos-delay="100" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17">Kelola Banyak Cabang</span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="200" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17">Dashboard Owner</span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="300" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17">QR Smart System</span>
                                        </p>
                                    </div>
                                    <div class="col-md-5">
                                        <p data-aos="zoom-in" data-aos-delay="100" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17">Kelola Karyawan</span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="200" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17">Cek Prestasi Karyawan</span>
                                        </p>
                                        <p data-aos="zoom-in" data-aos-delay="300" class="icon-pengusaha mb-3 line-height-0 d-flex text-white">
                                            <span class="icon-check d-block"><i class="fa fa-check"></i></span> 
                                            <span class="mt-11px d-block font-size-17">Analisa Performa Usaha</span>
                                        </p>
                                    </div>
                                </div>
                                <p data-aos="zoom-in" data-aos-delay="300" class="mb-2 mt-2 potition-relative text-white font-size-15">Dan puluhan fitur eksekutif lainnya...</p>
                                <div data-aos="zoom-in" data-aos-delay="400" class="d-flex align-items-center mt-4 mb-2">
                                    <div class="icon-group">
                                        <img src="assets/img/UserGroups.png" class="img-fluid" style="width: 25px;">
                                    </div>
                                    <p class="mb-0 text-white font-size-15">
                                        <b>1000+ Usaha Reparasi</b> <br>
                                        Mudah Ditemukan Customer My TECHANIC
                                    </p>
                                </div>
                                <a data-aos="zoom-in" data-aos-delay="400" href="#" class="btn btn-primary  mt-4 shadow font-size-13"><span>Daftarkan Usaha Saya </span></a>
                            </div>
                            <div class="col-md-4 pr-0">
                                <img data-aos="fade-right"  data-aos-delay="100" src="assets/img/user-techanic-business.png" class="img-fluid d-block mx-auto img-pengusaha" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 pr-0 mt-md-5" data-aos="fade-left" data-aos-delay="1500">
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
                        My Techanic Platform Customer
                    </h3>
                    <div class="space-25"></div>
                    <p class="text-center font-weight-normal">
                        Buat customer lebih mudah mencari toko reparasi anda <br>
                        dalam fitur <b>Marketplace My TECHANIC.</b> <br> 
                        fitur tracking order juga melengkapi aplikasi ini
                    </p>
                    <div class="w-100 text-center">
                        <a href="#" class="btn btn-primary mt-3">
                            Cek Marketplace Pelanggan
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
        <div class="watch-video bg-dark-blue rounded-bg mx-3 potition-relative padding-150" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4 section-title aos-init aos-animate" data-aos="fade-zoom-in">
                        <span class="badge badge-light">Tingkatkan</span>
                        <h3 class="text-white mt-3">
                            Techanic Business Pilihan Tepat Kembangkan <br>
                            Bisnis Reparasi anda.
                        </h3>
                        <a class="btn btn-primary mt-5" href="">Daftarkan Usaha Saya</a>
                    </div>
                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up">
                        
                    </div>
                </div>
            </div>
            <div class="video bg-none p-0" style="position: absolute;right: 0;top: -2px;">
                <img src="assets/img/gallery-1.png" class="img-fluid d-block mx-auto" style="width: 650px;height: 622px;object-fit: cover;border-radius: 0px 30px 30px 0px;" alt="">
                <a href="http://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity=""></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title" data-aos="fade-zoom-in">
                    <div class="space-100"></div>
                    <h3 class="mt-3 text-left">
                        Fitur Unggulan <br> dan Layanan
                    </h3>
                    <div class="space-50"></div>
                    <div class="row mx-0 border-fitur">
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-1.png" class="img-fluid" alt=""> 
                                <p class="m-0">Dashboard dan Statistik <br> Performa Usaha</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-2.png" class="img-fluid" alt=""> 
                                <p class="m-0">Laporan Penjualan & <br> Cash Flow</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-3.png" class="img-fluid" alt=""> 
                                <p class="m-0">Notifikasi Ke <br> WhatsApp / Email</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-4.png" class="img-fluid" alt=""> 
                                <p class="m-0">Smart QR System /<br> Smart Action QR</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-5.png" class="img-fluid" alt=""> 
                                <p class="m-0">Quality Control</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-6.png" class="img-fluid" alt=""> 
                                <p class="m-0">Notifikasi Di Dalam <br> Aplikasi</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-7.png" class="img-fluid" alt=""> 
                                <p class="m-0">Service Tracking <br> Order</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-8.png" class="img-fluid" alt=""> 
                                <p class="m-0">Catat Garansi</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="box-fitur d-flex">
                                <img src="assets/img/icon-9.png" class="img-fluid" alt=""> 
                                <p class="m-0">Export Laporan Ke <br> Microsoft Excel</p>
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
                    <img src="assets/img/mini-banner.png" class="img-fluid img-indonesia" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="space-50"></div>
    <section id="testimoni" class="clients-testimonial padding-150">
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
    <section id="download-techanic-business">
        <div class="bg-preview-apps" style="background: url('assets/img/bgdownload.png') no-repeat center center/cover!important;">
            <div class="row align-items-center mx-0">
                <div class="col-md-5 pl-0 offset-md-1 text-white" data-aos="fade-zoom-in" data-aos-delay="300">
                    <h3 class="text-white">Unduh TECHANIC Business Untuk Pelayanan Yang Lebih Profesional</h3>
                        <p class="mt-5">Aplikasi bisa didapatkan melalui :</p>
                        <div class="row mx-0">
                            <div class="col-md-3 px-0">
                                <a class="img-download" href="#">
                                    <img src="assets/img/playstore.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 pl-1 pr-0 mb-0">
                                <a class="img-download-appstore" href="#">
                                    <img src="assets/img/appstore.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    <div class="space-50"></div>
                </div>
                <div class="col-md-6 text-right pr-0" data-aos="fade-right" data-aos-delay="200">
                    <img src="assets/img/preview-apps-techanic-business.png" class="img-fluid img-indonesia" alt="">
                </div>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="potition-relative padding-150">
            <div class="row ">
                <div class="col-md-6">
                    <img src="assets/img/tim-techanic.png" class="img-fluid img-tim" alt="">
                </div>
                <div class="text-left col-md-6 section-title" data-aos-delay="200" data-aos="fade-zoom-in">
                    <h3>
                        Jadwalkan <br> Pelatihan Sekarang !
                    </h3>
                    <div class="space-25"></div>
                    <a href="#" class="btn btn-primary font-weight-700">Hubungkan Ke Tim</a>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
    </section>