<!DOCTYPE html>
<html lang="en">
@include('layout.Head')

<body data-offset=-1>


    <!-- Body Inner -->
    <div class="body-inner">
        @include('layout.Header')

        <!-- Content -->
        <section id="meal_page" style="">
            <div class="container">
                <div class="grid-layout grid-4-columns" data-item="grid-item" data-margin="0" data-lightbox="gallery">
                    <div class="grid-item">
                        <a title="胡麻舒肥雞肉飯" data-lightbox="gallery-image" href="images/meal/chicken.jpg" style="position:relative;">
                            <img src="images/meal/chicken.jpg?v={{filemtime(public_path('/images/meal/chicken.jpg'))}}" width="" style="width: 265px;">
                        </a>
                    </div>
                    <div class="grid-item">
                        <a title="白帶魚卷飯" data-lightbox="gallery-image" href="images/meal/fish.jpg" style="position:relative;">
                            <img src="images/meal/fish.jpg?v={{filemtime(public_path('/images/meal/fish.jpg'))}}" width="" style="width: 265px;">
                        </a>
                    </div>
                    <div class="grid-item" style="">
                        <a title="打拋豬肉飯" data-lightbox="gallery-image" href="images/meal/pig.jpg" style="position:relative;">
                            <img src="images/meal/pig.jpg?v={{filemtime(public_path('/images/meal/pig.jpg'))}}" width="" style="width: 265px;">
                        </a>
                    </div>
                    <div class="grid-item" style=";">
                        <a title="奶油蒜檸蝦飯" data-lightbox="gallery-image" href="images/meal/shrimp.jpg" style="position:relative;">
                            <img src="images/meal/shrimp.jpg?v={{filemtime(public_path('/images/meal/shrimp.jpg'))}}" width="" style="width: 265px;">
                        </a>
                    </div>
                </div>
                <hr class="space">
                <p>
                    抗疫小提醒，從你我做起<br>
                    為了讓大家安心的享用餐點<br>
                    我們針對供餐環境跟送出餐點都有以下幾點防疫作為：<br>
                    1. 每日日常消毒，防疫期間更加強餐具清潔、維護衛生<br>
                    2. 為因應外送期間減少人員接觸，本店外送一律固定人員，並送至各位指定地點<br>
                    3. 首批外送石牌、明德、芝山、士林、天母，歡迎附近的鄰居們點餐訂購，防疫期間讓我們為大家準備餐盒<br>
                    想要訂餐的夥伴，趕快點進下方傳送門，即可進行預訂📥 <br>
                    <a target="_blank" href="https://linktr.ee/lollipapa">linktr.ee/lollipapa</a><br>
                    🔸供餐日：週一～週六 午餐、晚餐<br>
                    🔸每日餐點限量供應<br>
                    🔸建議用餐日，提前訂購確認唷<br>
                    🔸醫護軍警消85折優惠，感謝疫情期間的辛勞<br>
                </p>
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
                            Website Supported by QPStudio
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
    <script src="js/functions.js?v={{filemtime(public_path('/js/functions.js'))}}""></script>

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
            var $scrollTop = $(".scrollTop");
            if($(window).scrollTop() > 0){
                $scrollTop.css({
                    "opacity": 1,
                    "z-index": 199
                })
            }

        }); /*ready*/
    </script>

</body>

</html>