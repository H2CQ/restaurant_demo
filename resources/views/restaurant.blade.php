<!DOCTYPE html>
<html lang="en">
@include('layout.Head')

<body>


    <!-- Body Inner -->
    <div class="body-inner">

        @include('layout.Header')

        @include('layout.Slider')

        <hr class="space">

        <!-- MENU LIST PRICE -->
        <section id="section-menu" class="p-t-100 p-b-100 text-light" data-bg-parallax="images/background2.jpg" style=" display: flex; align-items: center; justify-content: center;">
            <div class="container" style="">
                <div class="row" style="">
                    <!-- <div class="col-lg-12">
                        <h2 class="text-medium m-b-40">MENU</h2>
                    </div> -->
                    <div class="col-lg-6" data-animate="fadeIn" style="">
                        <p class="p_image1" style="">
                            嘿!<br>
                            有多久沒有跟著自己的心再瘋狂一次了<br>
                            又有多久沒有熱汗淋漓的上山下海了<br>
                            <br>
                            再怎麼繁忙也別忘記當初那個無所畏懼的自己<br>
                            今年夏天<br>
                            帶著自己的熱血<br>
                            讓我們陪著你奔往山海裡<br>
                            <br>
                            還記得那個的夏天<br>
                            我們頂著炙熱的太陽<br>
                            一起划立槳<br>
                            一起探索海裡的未知<br>
                            一起跌跌撞撞地抓著岩石往上爬登頂<br>
                            那汗水流進眼裡而我們卻義無反顧往前奔的感覺嗎<br>
                            菈莉帕帕準備好陪你再瘋一次了，你呢?<br>
                        </p>
                    </div>
                    <div class="col-lg-6" data-animate="fadeIn">
                        <p class="p_image2" style="">
                            走吧!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: MENU LIST PRICE -->

        <!-- Content -->
        <section id="page-content" class="p-b-0">
            <div class="container">
                <div class="grid-layout grid-2-columns main_page" data-item="grid-item" data-margin="0" data-lightbox="gallery">
                    <div class="grid-item">
                        <a title="餐點"  href="/meal" style="position:relative;">
                            <img src="images/list/meal.jpg?v={{filemtime(public_path('/images/list/meal.jpg'))}}" width="" style="">
                        </a>
                    </div>
                    <div class="grid-item margin_top">
                        <a title="自由潛水" data-lightbox="gallery-image" href="images/list/diving_big.jpg" style="position:relative;">
                            <img src="images/list/diving.jpg?v={{filemtime(public_path('/images/list/diving.jpg'))}}" width="" style="">
                        </a>
                    </div>
                    <div class="grid-item" style="margin-top:40px;">
                        <a title="SUP" data-lightbox="gallery-image" href="images/list/SUP_big.jpg" style="position:relative;">
                            <img src="images/list/SUP.jpg?v={{filemtime(public_path('/images/list/SUP.jpg'))}}" width="" style="">
                        </a>
                    </div>
                    <div class="grid-item" style="margin-top:40px;">
                        <a title="場地" data-lightbox="gallery-image" href="images/list/place_big.jpg" style="position:relative;">
                            <img src="images/list/place.jpg?v={{filemtime(public_path('/images/list/place.jpg'))}}" width="" style="">
                        </a>
                    </div>
                </div>
                <hr class="space">
            </div>
        </section>
        <!-- end: Content -->

        <!-- PRE-FOOTER -->
        <section id="section-contact" class="background-grey p-t-20 p-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box effect small clean">
                            <h3 style="font-size: 1rem;">菈莉帕帕 | Lollipapa</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="icon-box effect small clean">
                            <div class="icon" style="width: 35px;">
                                <img src="images/location.png" width="30px">
                            </div>
                            <a target="_blank" href="https://goo.gl/maps/A7R8WxFDyF74FnAo6">
                                <h3 style="font-size: 1rem; margin-left:40px; margin-top:5px;">新北市貢寮區龍洞街32號</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="icon-box effect small clean">
                            <div class="icon" style="width: 35px;">
                                <img src="images/mail.png" width="30px">
                            </div>
                            <h3 style="font-size: 1rem; margin-left:40px; margin-top:5px;">lollipapa.co@gmail.com</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: PRE-FOOTER -->

        <!-- FOOTER -->
        <footer class="background-grey" id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="copyright-text text-center"> &copy; 2021 Lollipapa All Rights Reserved.<br>
                            <!-- Website Supported by <a href="" target="_blank">QPStudio</a> -->
                            Website Supported by <a href="http://qartisan.be/"  target="_blank">QPStudio</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: FOOTER -->
    </div>
    <!-- end: Body Inner -->


    <!-- Scroll top -->
    <a class="scrollTop" style="bottom:calc(5vh + 120px); opacity: 1; z-index: 199;" target="_blank" href="https://www.instagram.com/lollipapa.co/">
        <img src="images/right_float_bar/ig.png" width="">
    </a>
    <a class="scrollTop" style="bottom: calc(5vh + 80px); opacity: 1; z-index: 199;" target="_blank" href="https://www.facebook.com/lollipapa.co/">
        <img src="images/right_float_bar/fb.png" width="">
    </a>
    <a class="scrollTop" style="bottom: calc(5vh + 40px); opacity: 1; z-index: 199;" target="_blank" href="https://line.me/R/ti/p/@lollipapa">
        <img src="images/right_float_bar/line.png" width="">
    </a>
    <a class="scrollTop click" style="bottom: 5vh; opacity: 1; z-index: 199;">
        <img class="icon-chevron-up" src="images/right_float_bar/back.png" width="" onclick="copy_url();">
    </a>


    

    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js?v={{filemtime(public_path('/js/functions.js'))}}"></script>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <link rel="stylesheet" type="text/css" href="css/slider-revolution/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/slider-revolution/layers.css">
    <link rel="stylesheet" type="text/css" href="css/slider-revolution/navigation.css">

    <script type="text/javascript" src="js/slider-revolution/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/slider-revolution/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="js/Studio.js"></script>

    <script type="text/javascript">
        var tpj = jQuery;

        var revapi22;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_22_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_22_1");
            } else {
                revapi22 = tpj("#rev_slider_22_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/slider-revolution/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "vertical",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%"
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "single",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>

</body>

</html>