<!--HEADER-->
<header id="header" data-transparent="false" data-fullwidth="true" class="header-logo-center">
    <div class="header-inner">
        <div class="container" style="padding:0px;">
            <!--Logo-->
            <div id="logo"> 
                <a href="/">
                    <!-- <span class="logo-default">POLO</span><span class="logo-dark">POLO</span> -->
                    <span class="logo-default">
                        <img src="images/logo.png?v={{filemtime(public_path('/images/logo.png'))}}" width="150" style="padding-left: 10px;"> 
                    </span>
                </a> 
            </div>
            <!--End: Logo-->
            <!-- Search -->
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>
            <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <!-- <li> <a id="btn-search" href="#"> <i class="icon-search"></i></a> </li> -->
                    <!-- <li>
                        <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                            <ul class="p-dropdown-content">
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
            <!--end: Navigation Resposnive Trigger-->
        </div>
    </div>
    <div class="header-inner" style="height: 110px; margin-top:18px;">
        <div class="container" style="">
            <!--Navigation-->
            <div id="mainMenu" class="menu-center">
                <div class="container" >
                    <nav>
                        <ul>
                            <li><a href="/">
                                <figure class="item">
                                    <img src="images/header/news.png?v={{filemtime(public_path('images/header/news.png'))}}"/>
                                    <figcaption class="caption">最新消息</figcaption>
                                </figure>      
                            </a></li>
                            <li><a href="/">                                
                                <figure class="item">
                                    <img src="images/header/about.png?v={{filemtime(public_path('images/header/about.png'))}}"/>
                                    <figcaption class="caption">關於</figcaption>
                                </figure> 
                            </a></li>
                            <li><a href="/meal">
                                <figure class="item">
                                    <img src="images/header/meal.png?v={{filemtime(public_path('images/header/meal.png'))}}"/>
                                    <figcaption class="caption">餐點</figcaption>
                                </figure>
                            </a></li>
                            <li><a href="/">
                                <figure class="item">
                                    <img src="images/header/activity.png?v={{filemtime(public_path('images/header/activity.png'))}}"/>
                                    <figcaption class="caption">戶外課程</figcaption>
                                </figure>
                            </a></li>
                            <li><a href="/">
                                <figure class="item">
                                    <img src="images/header/place.png?v={{filemtime(public_path('images/header/place.png'))}}" style="width: 66px;"/>
                                    <figcaption class="caption">場地</figcaption>
                                </figure>
                            </a></li>
                            <li><a href="/">
                                <figure class="item">
                                    <img src="images/header/product.png?v={{filemtime(public_path('images/header/product.png'))}}"/>
                                    <figcaption class="caption">商品</figcaption>
                                </figure>
                            </a></li>
                            <!-- <li><a href="/">
                                <figure class="item">
                                    <img src="images/header/search.png"/>
                                    <figcaption class="caption">搜尋</figcaption>
                                </figure>
                            </a></li> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!--END: HEADER-->