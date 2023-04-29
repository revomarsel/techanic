<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <style>
        .floating-wpp {
            display: none!important;
        }
    </style>
    <section class="single-blog-with-sidebar single-blog-page padding-100">
        <div class="container">
            <div class="row">
                <!-- Start All Blogs -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-box">
                                <div class="blog-img">
                                    <img src="<?= base_url()?><?= $blog['main_image'] ?>" class="img-fluid  width-img-md" alt="">
                                </div>
                                <div class="blog-details">
                                    <div class="space-15"></div>
                                    <h3><?= $blog['title'] ?></h3>
                                    <div class="space-15"></div>
                                    <ul class="news-meta">
                                        <li><span class="lnr lnr-user"></span> By Admin</li>
                                        <li><span class="lnr lnr-clock"></span> <?= formatted_date_indo($blog['created_at']) ?></li>
                                    </ul>
                                    <div class="space-15"></div>
                                        <?= $blog['content'] ?>
                                    <a href="<?= site_url('blog') ?>" class="font-weight-bold"><i class="fa fa-arrow-left"></i> Kembali Ke Artikel</a>

                                </div>
                                <hr>
                                <div class="post-tag-area d-md-flex justify-content-between align-items-center">
                                    <ul class="share-icon">
                                        <li>Bagikan :</li>
                                        <li><a href="javascript:void(0)"  onclick='window.open("https://www.facebook.com/sharer/sharer.php?u=<?= site_url('blog')?>/<?= $blog['kategori_slug'] ?>/<?= $blog['slug'] ?>", "Share This Post", "width=640,height=450");return false' ><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="https://api.whatsapp.com/send?text=<?php echo str_replace("&", "", $blog['title']); ?>%0a<?= site_url('blog')?>/<?= $blog['kategori_slug'] ?>/<?= $blog['slug'] ?>" target="_blank" ><i class="fab fa-whatsapp font-size-18" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0)"  onclick='window.open("https://twitter.com/share?url=<?= site_url('blog')?>/<?= $blog['kategori_slug'] ?>/<?= $blog['slug'] ?>&amp;text=<?php echo html_escape($product->title); ?>", "Share This Post", "width=640,height=450");return false' ><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li>Kategori :</li>
                                        <li><a href="<?= site_url('blog')?>/<?= $blog['kategori_slug'] ?>"><b><?= $blog['kategori_title'] ?></b></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End All Blogs -->

                <!-- Start Sidebar -->
                <div class="col-md-12 col-lg-4">
                    <aside class="sidebar">
                        <div class="gray-panel categories">
                            <h3>Kategori</h3>
                            <ul>
                                <?php foreach($kategori as $r => $y){ ?>
                                    <li><a href="<?= site_url('blog')?>/<?= $y['slug'] ?>"><?= $y['title'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="gray-panel recent-post">
                            <h3>Artikel Populer</h3>
                            <?php foreach($blogs as $g => $s){ ?>
                            <div class="post d-flex align-items-top">
                                <figure>
                                    <a href="#"><img src="<?= base_url().$s['main_image'] ?>" class="img-fluid " alt=""></a>
                                </figure>
                                <div>
                                    <h4 class="mb-0">
                                        <a href="<?= site_url('blog')?>/<?= $s['kategori_slug'] ?>/<?= $s['slug'] ?>"><?= $s['title'] ?></a>
                                    </h4>
                                    <ul class="news-meta">
                                        <li>
                                            <a href="<?= site_url('blog')?>/<?= $s['kategori_slug'] ?>">
                                                <?= $s['kategori_title'] ?>
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </aside>
                </div>
                <!-- End Sidebar -->

            </div>
        </div>
    </section>