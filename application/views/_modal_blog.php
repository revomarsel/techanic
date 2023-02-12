<div class="modal fade" id="showBlog" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body potition-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row align-items-center">
          <div class="text-center col-12 mt-4 section-title-custom aos-init aos-animate" data-aos="fade-zoom-in">
              <p class="font-size-20"><?= trans('text_136') ?></p>
              <h3 class="text-capitalize"><?= trans('text_137') ?></h3>
              <div class="space-50"></div>
          </div>
        </div>
        <?php 
            $lang = $this->input->get('lang',true);
            if($lang == 'en-id'){ 
        ?>
          <div class="row mx-0 align-items-center mb-md-4 mb-3">
              <div class="col-md-12 col-12">
                  <img src="assets/img/blog-eng-1-min.png" class="img-fluid rounded mb-3" alt="">
              </div>
              <div class="col-md-12 col-12">
                  <h3 class="mb-0">Why We Need To Start Recycling Our E-Wate Now</h3>
                  <ul class="news-meta">
                      <li> weforum.org </li>
                  </ul>
                  <div class="space-15"></div>
                  <p class="mb-2">
                    Only a fifth of the world’s e-waste is ever recycled and it is full of key minerals such as cobalt, used in magnets and nickel, used to make batteries.
                  </p>
                  <a target="_blank" href="https://www.weforum.org/videos/why-we-need-to-start-recycling-our-e-waste-now" class=" btn btn-primary shadow font-size-11 btn-theme" tabindex="0"><span><?= trans('text_138') ?></span></a>
              </div>
          </div>
          <div class="row mx-0 align-items-center">
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-eng-2-min.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">Apple has expanded its self-service repairs to Europe. How are other companies and countries tackling e-waste?</h3>
                        <ul class="news-meta mb-2">
                            <li>weforum.org</li>
                        </ul>
                        <a target="_blank" href="https://www.weforum.org/agenda/2022/01/repair-recycle-waste-circular-economy/" class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-eng-3-min.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">5 billion cell phones will become e-waste this year</h3>
                        <ul class="news-meta mb-2">
                            <li>weforum.org </li>
                        </ul>
                        <a target="_blank" href="https://www.weforum.org/agenda/2022/10/global-phone-technology-waste/" class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-eng-4-min.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">What is e-waste and what can we do about it?</h3>
                        <ul class="news-meta mb-2">
                            <li>nhm.ac.uk </li>
                        </ul>
                        <a target="_blank" href="https://www.nhm.ac.uk/discover/what-is-ewaste-and-what-can-we-do-about-it.html" class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-eng-5-min.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">The Growing Environmental Risks of E-Waste</h3>
                        <ul class="news-meta mb-2">
                            <li> genevaenvironmentnetwork.org </li>
                        </ul>
                        <a target="_blank" href="https://www.genevaenvironmentnetwork.org/resources/updates/the-growing-environmental-risks-of-e-waste/ " class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
          </div>
        <?php }else{ ?>
          <div class="row mx-0 align-items-center mb-md-4 mb-3">
              <div class="col-md-12 col-12">
                  <img src="assets/img/blog-1.png" class="img-fluid rounded mb-3" alt="">
              </div>
              <div class="col-md-12 col-12">
                  <h3 class="mb-0">Indonesia Timbun 2 Juta Ton Sampah Elektronik Sepanjang Tahun</h3>
                  <ul class="news-meta">
                      <li>
                          Datakata.id </li>
                  </ul>
                  <div class="space-15"></div>
                  <p class="mb-2">
                      Kementerian Lingkungan Hidup dan Kehutanan (KLHK) mencatat timbunan sampah elektronik di Indonesia tahun ini mencapai 2 juta ton. Dari jumlah tersebut, pulau Jawa berkontribusi hingga 56% dari total sampah elektronik tahun ini. Direktur Jenderal Pengelolaan Sampah Limbah dan B3 (PSLB3) Kementerian Lingkungan Hidup dan Kehutanan (KLHK), Rosa Vivien Ratnawati mengakui pengelolaan sampah elektronik di Indonesia memang belum optimal. Oleh sebab itu, persoalan limbah sampah elektronik ini harus segera dituntaskan ...
                  </p>
                  <a target="_blank" href="https://katadata.co.id/happyfajrian/berita/6167d8389a3c3/indonesia-timbun-2-juta-ton-sampah-elektronik-sepanjang-tahun-ini" class=" btn btn-primary shadow font-size-11 btn-theme" tabindex="0"><span><?= trans('text_138') ?></span></a>
              </div>
          </div>
          <div class="row mx-0 align-items-center">
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-3.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">Menteri ESDM Terbitkan Aturan Krisis Darurat Energi</h3>
                        <ul class="news-meta mb-2">
                            <li>
                              Kementerian ESDM </li>
                        </ul>
                        <a target="_blank" href="https://www.esdm.go.id/id/media-center/arsip-berita/menteri-esdm-terbitkan-aturan-krisis-dan-darurat-energi" class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-4.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">Dunia Sedang Krisis Energi untuk Pertama Kali</h3>
                        <ul class="news-meta mb-2">
                            <li>
                              CNN Indonesia </li>
                        </ul>
                        <a target="_blank" href="https://www.cnnindonesia.com/ekonomi/20221025124047-85-865046/dunia-sedang-dalam-krisis-energi-untuk-pertama-kali" class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-5.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">Pengolahan Sampah Elektronik dan Peraturannya di Indonesia</h3>
                        <ul class="news-meta mb-2">
                            <li>
                              Waste 4 Change </li>
                        </ul>
                        <a target="_blank" href="https://waste4change.com/blog/pengelolaan-sampah-elektronik-dan-peraturannya-di-indonesia/" class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-12 p-2">
                  <div class="blog-secondary rounded d-flex align-items-end" style="background: linear-gradient( 1deg,#062b4ba1 0%,#00000054 80%),url(assets/img/blog-6.png) no-repeat center center/cover!important;background-size: 100% 100%!important;">
                      <div>
                        <h3 class="mb-1">Cadangan Timah Indonesia akan Habis 10 Tahun Lagi</h3>
                        <ul class="news-meta mb-2">
                            <li>
                              Liputan6 </li>
                        </ul>
                        <a target="_blank" href="https://www.liputan6.com/bisnis/read/5021452/cadangan-timah-indonesia-akan-habis-10-tahun-lagi" class="px-3 py-2 btn btn-primary shadow font-size-10 text-capitalize btn-theme mb-3" tabindex="0"><span><?= trans('text_138') ?></span></a>
                      </div>
                  </div>
              </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>