<section id="testimoni" class="boxes">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title-custom" data-aos="fade-zoom-in">
                    <p class="font-size-20">Artikel dan Informasi Terbaru</p>
                    <h3>
                         Seputar Industri Reparasi
                    </h3>
                    <div class="space-50"></div>
                </div>
                <?php foreach($blog as $u => $t){ ?>
                <div class="col-md-3 col-12">
                    <a href="<?= site_url('blog')?>/<?= $t['kategori_slug'] ?>/<?= $t['slug'] ?>">
                        <div class="px-2 box article" data-aos="fade-up">
                            <img src="<?= $t['main_image'] ?>" class="img-fluid width-img-md" alt="">
                            <div class="space-20"></div>
                            <h3> <?= $t['title'] ?></h3>
                            <p><?= limit_str($t['short_content'],200) ?></p>
                        </div>
                    </a>
                </div>
                <?php } ?>
                <div class="col-12 text-center mt-5">
                    <a href="<?= site_url('blog') ?>" class="btn btn-primary font-size-11">Baca artikel lainnya <i class="fa fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </section>