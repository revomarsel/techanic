<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    
    <section id="faq" class="faq padding-100">
        <div class="container">
            <div class="row align-items-center">
                <!--align-items-center-->
                <div class="col-md-12 col-12" data-aos="fade-right">
                    <div class="mb-0 border-bottom pb-4 row">
                        <div class="col-md-6">
                            <h4 class=" text-left mt-3 title text-capitalize">
                                <b>Artikel dan informasi terbaru seputar Reparasi.</b> <br> <span class="font-weight-normal font-size-20 d-none-mobile">Temukan informasi terpercaya dengan cepat dan mudah</span>
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <div class="subscribe-form row m-0 potition-relative blog">
                                <div class="col-lg-5 col-md-8 col-10 offset-md-3 pl-0 text-left">
                                    <div class="form-group mb-0">
                                        <input type="text" value="<?= @$kategori['title'] ?>" class="form-control form-blog" placeholder="Cari Kategori Tertentu ?">
                                        <div class="suggestion">
                                            <ul class="list-group"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-1 text-left pl-0">
                                    <a href="#" class="anchor submit-blog btn btn-primary shadow px-4">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-25"></div>
                    <?php if(!empty($blog)){ ?>
                        <div class="row">
                            <?php foreach($blog as $u => $t){ ?>
                                <?php if($u === 0){ ?>
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <a href="<?= site_url('blog')?>/<?= $t['kategori_slug'] ?>/<?= $t['slug'] ?>"> <img src="<?= base_url($t['main_image']) ?>" style="height: 220px;object-fit: cover;width: 100%;" class="img-fluid width-img-md" alt=""> </a>
                                            </div>
                                            <div class="col-md-8">
                                                <a href="<?= site_url('blog')?>/<?= $t['kategori_slug'] ?>"><b><?= $t['kategori_title'] ?></b></a>
                                                <h3><a href="<?= site_url('blog')?>/<?= $t['kategori_slug'] ?>/<?= $t['slug'] ?>"> <?= $t['title'] ?></a></h3>
                                                <div class="mb-3">
                                                    <ul class="news-meta">
                                                        <li><span class="lnr lnr-user"></span> By Admin</li>
                                                        <li><span class="lnr lnr-clock"></span>  <?= formatted_date_indo($t['created_at']) ?></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                <?= limit_str($t['short_content'],500) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div class="col-md-4 col-12">
                                        <div class="box article">
                                            <img src="<?= base_url($t['main_image']) ?>" class="img-fluid width-img-md" alt="">
                                            <div class="space-20"></div>
                                            <a class="font-size-14" href="<?= site_url('blog')?>/<?= $t['kategori_slug'] ?>"><b><?= $t['kategori_title'] ?></b></a>
                                            <h3 class="font-size-18" style="height:auto"><a href="<?= site_url('blog')?>/<?= $t['kategori_slug'] ?>/<?= $t['slug'] ?>"> <?= $t['title'] ?></a></h3>
                                            <p>
                                                <?= limit_str($t['short_content'],200) ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php }else{ ?>
                        <div class="img-empty">
                            <img src="<?= base_url() ?>assets/img/empty-folder.png" alt="kosong">
                            <h4>Data Yang Dicari Tidak Ditemukan</h4>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>