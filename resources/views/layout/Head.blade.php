<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />   
	<meta name="description" content="台北(石牌、明德、芝山、士林、天母)外送便當，歡迎附近的鄰居們點餐訂購，防疫期間讓我們為大家準備。為因應外送期間減少人員接觸，本店外送一律固定人員，並送至各位指定地點。">
    <link rel="icon" type="image/png" href="images/favicon.jpg">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Lollipapa</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css?v={{filemtime(public_path('css/style.css'))}}" rel="stylesheet">
    <meta name="author" content="Artisan Q" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph data -->    
    <meta property="og:url" content="http://lollipapa.co/"/>
    <meta property="og:title" content="Lollipapa | 石牌、明德、芝山、士林、天母外送便當" />
    <meta property="og:description" content="台北(石牌、明德、芝山、士林、天母)外送便當，歡迎附近的鄰居們點餐訂購，防疫期間讓我們為大家準備。為因應外送期間減少人員接觸，本店外送一律固定人員，並送至各位指定地點。" />
    <meta property="og:image" content="images/logo.png?v={{filemtime(public_path('/images/logo.png'))}}" />
    <meta property="og:image:alt" content="Lollipapa" />

    <!-- Schema.org markup for Google+ -->
    <meta property="og:url" content="http://lollipapa.co/"/>
    <meta property="og:title" content="Lollipapa | 石牌、明德、芝山、士林、天母外送便當" />
    <meta property="og:image" content="images/logo.png?v={{filemtime(public_path('/images/logo.png'))}}" />
    <meta property="og:description" content="台北(石牌、明德、芝山、士林、天母)外送便當，歡迎附近的鄰居們點餐訂購，防疫期間讓我們為大家準備。為因應外送期間減少人員接觸，本店外送一律固定人員，並送至各位指定地點。" />
    <meta property="og:image:alt" content="Lollipapa" />
    <meta property="og:image:type" content="website" />

    <meta name="google-site-verification" content="6ffvlTTwiBIEeTWeTRh6-woDWofs-TKmxXqiTnjDTwA" />
    
    <!-- Layout Stylesheets & Fonts -->
    <link href="//fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet" type="text/css">
    <!-- <link href="css/restaurant-style.css" media="screen" rel="stylesheet" type="text/css" /> -->
    <link href='{{ asset("css/restaurant-style.css")."?v=".filemtime(public_path("/css/restaurant-style.css")) }}' media="screen" rel="stylesheet" type="text/css" />
    <!-- <link href="css/color-variations/brown-light.css" rel="stylesheet" type="text/css" media="screen" title="brown-light"> -->
    <style>
        .banner1{
            background-image:url({{ asset('images/slider/slider1.jpg')."?v=".filemtime(public_path('/images/slider/slider1.jpg')) }});
        }

        @font-face {
            font-family: 'JinXuan-fresh';
            src: url('/fonts/jf-jinxuan-fresh2.2-medium.otf') format("opentype");
        }
        *{
            font-family: 'JinXuan-fresh' !important; 
        }
    </style>
</head>