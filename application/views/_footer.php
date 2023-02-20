<footer class="pb-0">
        <div class="space-50"></div>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 pr-0">
                        <div class="widget main">
                            <img src="<?= base_url() ?>assets/img/logo-techanic-general-white.png" class="img-fluid" alt="">
                            <p class="font-size-16 mt-2 lh-30">
                                <?= trans('text_19') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 offset-md-1">
                        <div class="widget">
                            <h6>Alamat</h6>
                            <div class="d-flex">
                                <div class="mr-2">
                                    <img src="<?= base_url() ?>assets/img/alamat techanic.png" class="img-icon" alt="">
                                </div>
                                <p>
                                    Epicentrum Walk Lt. 3 Unit A306-307, <br>
                                    Kawasan Rasuna Karet Kuningan, Setiabudi <br>
                                    Jakarta Selatan, DKI Jakarta
                                </p>
                            </div>
                            <div class="row mt-md-2">
                                <div class="col-md-6">
                                    <a class="text-white" href="https://api.whatsapp.com/send?phone=6281233236569">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="<?= base_url() ?>assets/img/wa techanic.png" class="img-icon" alt="">
                                            </div>
                                            <p> +62 812 3323 6569 </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="text-white" href="mailto:help@techanic.co">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="<?= base_url() ?>assets/img/email techanic.png" class="img-icon" alt="">
                                            </div>
                                            <p> help@techanic.co </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 offset-md-1">
                        <div class="widget">
                            <h6>Social Media</h6>
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.tiktok.com/@techanicid?is_from_webapp=1&sender_device=pc"><span class="mr-md-2 mr-1"> <img src="<?= base_url() ?>assets/img/TikTok Techanic.png" class="img-icon" alt=""> </span>techanicid</a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/techanicindonesia/?igshid=YmMyMTA2M2Y%3D"><span class="mr-md-2 mr-1"> <img src="<?= base_url() ?>assets/img/Instagram Techanic.png" class="img-icon" alt=""> </span>
                                    techanicindonesia</a></li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/techanicindonesia"><span class="mr-md-2 mr-1"> <img src="<?= base_url() ?>assets/img/Facebook Techanic.png" class="img-icon" alt=""> </span>techanicindonesia</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-50 d-none-mobile"></div>
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center-mobile">
                        <p>Ⓒ2022. Techanic All Right Reserved.</p>
                    </div>
                    <div class="offset-md-4 col-md-4">
                        <ul class="nav justify-content-end justify-content-center-mobile">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="https://www.mytechanic.com/privacy-policy">Terms and Conditions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="https://www.mytechanic.com/privacy-policy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer  -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    
    <link rel="stylesheet" href="assets/floating-whatsapp-master/floating-wpp.min.css">
    <script type="text/javascript" src="<?= base_url() ?>assets/floating-whatsapp-master/floating-wpp.min.js"></script>

    <script type="text/javascript">
      $(function () {
        $('#Whatsapp').floatingWhatsApp({
            phone: '+6281233236569',
            position: "right",
            popupMessage: '',
            message: "Hallo Techanic, saya ingin menanyakan perihal",
            showPopup: false,
            showOnIE: false,
            headerTitle: '',
            headerColor: '#25d366',
            backgroundColor: '#25d366',
        });
      });
        $( document ).ready(function() {
            setTimeout(function() { 
                $('#showInformation').modal('show');
            }, 5000);
            var numSlide= 0;
            setInterval(function() { 
                if(numSlide < 3){
                    numSlide += 1;
                }else{
                    numSlide = 0;
                }
                var image = $("#slider-right");
                image.fadeOut('slow', function () {
                    image.attr('src', 'assets/img/right-slider-'+numSlide+'.png');
                    image.fadeIn('slow');
                });
            }, 4000);
        });
        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 300) {
                $('#Whatsapp').fadeIn();
            } else {
                $('#Whatsapp').fadeOut();
            }
            if( y > 3120){
                $('.title-2').fadeIn('slow');
            }else{
                $('.title-2').fadeOut('fast');
            }
        });
    </script>
    
    <!-- Bootstrap JS -->
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- svg -->
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="<?= base_url() ?>assets/js/slick.min.js"></script>

    <!-- Counterup JS -->
    <script src="<?= base_url() ?>assets/js/waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.counterup.js"></script>

    <!-- AOS JS -->
    <script src="<?= base_url() ?>assets/js/aos.js"></script>

    <!-- lity JS -->
    <script src="<?= base_url() ?>assets/js/lity.min.js"></script>

    <!-- Our Main JS -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>