/*jslint browser: true*/
/*global $, jQuery ,AOS*/

(function ($) {

    "use strict";

    var $window = $(window),
        $body = $('body'),
        $foxappMenu = $('.foxapp-header'),
        $countUp = $('.fact-box h5'),
        $otherFeaturesSlider = $('.other-features-slider'),
        $screenshotsSlider = $('.screenshots-slider'),
        $testimonialSslider = $('.testimonial-slider'),
        $bannerSlider = $('.banner-slider'),
        $teamSlider = $('.team-slider'),
        $kategoriSlider = $('.kategori-slider'),
        $logosSlider = $('.logos-slider'),
        $recentNewsSlider = $('.recent-news-slider');

    /*START PRELOADER JS & REFRESH AOS*/
    $window.on('load', function () {
        $('.preloader').delay(350).fadeOut('slow');
        AOS.refresh();
    });
    /*END PRELOADER JS & REFRESH AOS*/


    $(document).ready(function () {

        setTimeout(function(){
            var first = $('.img-slide-customer#1'); 
            first.addClass('not-show');
            var second = $('.img-slide-customer#2'); 
            second.toggleClass('not-show show').on('transitionend', function(e) {
                this.classList.remove('not-show'); 
            });
        }, 2000);

        $(".switch-button").on('click', function(){
            var type = $(this).attr('id');
            if(type === 'eng'){
                $('#indo').removeClass('active');
            }else{
                $('#eng').removeClass('active');
            }
            $('#'+type).addClass('active');
            // setTimeout(function(){
            //     $(".preloader").css("display", "block");
            // }, 500);
            // setTimeout(function(){
            //     $(".preloader").css("display", "none");
            // }, 2000);
        });

        $(".filter-faq").on('click', function(){
            var type = $(this).attr('type');
            if(type === 'mytechanic'){
                $('.btn-techanic-business').removeClass('active');
                $('.btn-mytechanic').addClass('active');;
                $("#faqAccordion").css("display", "none");
                $(".img-empty").css("display", "block");
                $("#produk-title").text("MyTechanic");
            }else{
                $('.btn-mytechanic').removeClass('active');
                $('.btn-techanic-business').addClass('active');
                $("#faqAccordion").css("display", "block");
                $(".img-empty").css("display", "none");
                $("#produk-title").text("Techanic Business");
            }
        });

        $(".btn-switch-user").on('click', function(){
            $('#customer').removeClass('active');
            $('#pengusaha').removeClass('active');
            $('#teknisi').removeClass('active');

            var type = $(this).attr('val');
            $('#'+type).addClass('active');

            $('.btn-switch-user').removeClass('active');
            $(this).addClass('active');

            if(type === 'customer'){
                $('#slide').addClass('bg-primary-customer');
                $('.img-bottom').removeClass('teknisi');
                $('.img-bottom').removeClass('pengusaha');
                $('.navbar-brand > .black').attr('src','assets/img/my-techanic-logo-blue.png');
                $('.navbar-brand > .white').attr('src','assets/img/my-techanic-logo-white.png');
                $("#manfaat-techanic-business").css("display", "none");
                $("#download-techanic-business").css("display", "none");
            }else{
                // $('#slide').removeClass('bg-primary-customer');
                $("#manfaat-techanic-business").css("display", "block");
                $("#download-techanic-business").css("display", "block");
                $('.remove-class').removeClass('aos-animate');
                $('.remove-class').removeClass('aos-init');
                if(type === 'pengusaha'){
                    $('.img-bottom').removeClass('teknisi');
                    $('.img-pengusaha').addClass('aos-animate');
                    $('.icon-pengusaha').addClass('aos-animate');
                }else{
                    $('.img-teknisi').addClass('aos-animate');
                    $('.img-bottom').removeClass('pengusaha');
                    $('.icon-teknisi').addClass('aos-animate');
                }
                $('.navbar-brand > .black').attr('src','assets/img/techanic-business-logo-blue.png');
                $('.navbar-brand > .white').attr('src','assets/img/techanic-business-logo-white.png');
                $('.img-bottom').addClass(type);
                $('.slide-user').addClass(type);
                setTimeout(function() { AOS.refresh(); }, 500);
            }
        });

        $('.themes-colors span').on('click', function () {
            $('.themes-colors').toggleClass('open');
        });

        $('.themes-colors ul li a').on('click', function () {
            var styleSrc = $(this).attr("data-style");
            $('.themes-colors ul li').removeClass('active');
            $('#themes_colors').attr("href", "assets/css/" + styleSrc + ".css");
            $(this).parent().toggleClass('active');
        });

        /*START AOS JS*/
        AOS.init({
            disable: 'mobile',
            once: true,
            duration: 600
        });
        /*END AOS JS*/

        /*START SCROLL SPY JS*/
        $body.scrollspy({
            target: '#main_menu',
        });
        /*END SCROLL SPY JS*/

        /*START MENU JS*/
        $('a.anchor').on('click', function (e) {
            var anchor = $(this);
            var ancAtt = $(anchor.attr('href'));
            $('html, body').stop().animate({
                scrollTop: ancAtt.offset().top
            }, 1000);
            e.preventDefault();
        });

        $window.scroll(function () {
            var currentLink = $(this);
            if ($(currentLink).scrollTop() > 500) {
                $foxappMenu.addClass("sticky");
            } else {
                $foxappMenu.removeClass("sticky");
            }
        });
        /*END MENU JS*/
        
        /*START OTHER FEATURES SLIDER JS*/
        if ($otherFeaturesSlider.length > 0) {
            $otherFeaturesSlider.slick({
                centerMode: true,
                centerPadding: '150px',
                slidesToShow: 3,
                infinite: false,
                focusOnSelect: true,
                arrows: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            centerPadding: '0',
                        }
                    },
                ]
            });
        }
        /*END OTHER FEATURES SLIDER JS*/

        /*START SCREENSHOTS SLIDER JS*/
        if ($screenshotsSlider.length > 0) {
            $screenshotsSlider.slick({
                centerMode: true,
                centerPadding: '150px',
                slidesToShow: 3,
                infinite: false,
                focusOnSelect: true,
                arrows: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            centerPadding: '0',
                        }
                    },
                ]
            });
        }
        /*END SCREENSHOTS SLIDER JS*/

        /*START TESTIMONIAL SLIDER JS*/
        if ($testimonialSslider.length > 0) {
            $testimonialSslider.slick({
                centerPadding: '150px',
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                infinite: false,
                arrows: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                ]
            });
        }
        /*END TESTIMONIAL SLIDER JS*/
        
        /*START TESTIMONIAL SLIDER JS*/
        if ($bannerSlider.length > 0) {
            $bannerSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: false,
                arrows: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                ]
            });
        }
        /*END TESTIMONIAL SLIDER JS*/

        /*START COUNTUP JS*/
        $countUp.counterUp({
            delay: 10,
            time: 2000
        });
        /*END COUNTUP JS*/

        /*START TEAM SLIDER JS*/
        if ($teamSlider.length > 0) {
            $teamSlider.slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                infinite: false,
                arrows: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                ]
            });
        }
        /*END TEAM SLIDER JS*/

        /*START TEAM SLIDER JS*/
        if ($kategoriSlider.length > 0) {
            $kategoriSlider.slick({
                slidesToShow: 2,
                dots: false,
                infinite: true,
                arrows: false,
                variableWidth: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                cssEase: 'linear',
                centerPadding: '0',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                ]
            });
        }
        /*END TEAM SLIDER JS*/

        /*START LOGOS SLIDER JS*/
        if ($logosSlider.length > 0) {
            $logosSlider.slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                dots: false,
                infinite: false,
                arrows: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                ]
            });
        }
        /*END LOGOS SLIDER JS*/

        /*START RECENT NEWS SLIDER JS*/
        if ($recentNewsSlider.length > 0) {
            $recentNewsSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: false,
                arrows: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                ]
            });
        }
        /*END RECENT NEWS SLIDER JS*/

    });

}(jQuery));