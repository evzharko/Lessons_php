<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>groham | HTML Ecommerce Template</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/eleganticon.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/navstylechange.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/noneed.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen"/>
    <!-- MAGNIFIC POPUP -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie:400' rel='stylesheet' type='text/css'>
    <!-- FAVICON -->
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="home01">
<!--Header-->
@section('menu')
    <div class="header">
        <!--Header-Top-->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="left"> Welcome to Groham <span><i class="fa fa-phone"></i>Call us</span> +49 1234
                            5678 9
                        </div>
                        <!--/.left-->
                    </div>
                    <!--/.col-md-6-->
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="right">
                            <ul>
                                <li class="cart">
                                    <a href="#"> <img alt="cart" src="assets/images/cart.png"> cart <span>2</span> </a>
                                    <div class="cart-list hidden-xs">
                                        <h5 class="title">your shopping cart <span>(2 items)</span></h5>
                                        <div class="cart-item">
                                            <div class="cart-item-image">
                                                <img class="img-responsive" alt="Single product"
                                                     src="assets/images/small_gallery/03.jpg">
                                            </div>
                                            <div class="product-info">
                                                <h5>New Yorker Suit</h5>
                                                <div class="star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <div class="price">
                                                    <del> $399</del>
                                                    $259
                                                </div>
                                                <div class="cart-delete-button"><a href="#"
                                                                                   class="delete-btn btn">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item">
                                            <div class="cart-item-image">
                                                <img class="img-responsive" alt="Single product"
                                                     src="assets/images/small_gallery/04.jpg">
                                            </div>
                                            <div class="product-info">
                                                <h5>New Yorker Suit</h5>
                                                <div class="star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <div class="price">
                                                    <del> $399</del>
                                                    $259
                                                </div>
                                                <div class="cart-delete-button"><a href="#"
                                                                                   class="delete-btn btn">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-total">
                                            <h5 class="title">Order Total</h5>
                                        </div>
                                        <div class="last-line">
                                            <h4><span class="amount">$166</span></h4>
                                            <a href="checkout.html" class="groham-btn btn black-bordered">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toggle">
                                    <span>USD</span> <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="#">USD</a>
                                        </li>
                                        <li><a href="#">EUR</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">my account</a>
                                </li>
                            </ul>
                        </div>
                        <!--/.right-->
                    </div>
                    <!--/.col-md-6-->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.header-top-->
        <!--Header-Middle-->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 site-logo">
                        <div class="logo">
                            <a href="/"><img src="assets/images/logo.png" alt="logo"/>
                            </a>
                        </div>
                        <div class="cart-text"><img src="assets/images/cart-2.png" alt="cart-2"> Free delivery on all US
                            orders over $99 | Free Returns
                        </div>
                    </div>
                    <!--/.site-logo-->
                    <div class="col-md-4 col-sm-4 col-xs-12 header-search">
                        <div class="search default">
                            <form class="searchform" action="#" method="get">
                                <div class="input-group">
                                    <input type="search" id="dsearch" name="s" class="form-control"
                                           placeholder="Search for something..."> <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" id="submit-btn"><span
                                                    class="arrow_right"></span>
                                    </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!--/.search-->
                    </div>
                    <!--/.header-search-->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.header-middle-->
        <!--Navbar-->
        <div class="navbar groham-nav megamenu">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse"
                            aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="/">Home 1</a>
                                </li>
                                <li><a href="home02.html">Home 2</a>
                                </li>
                                <li><a href="home03.html">Home 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw second">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Shop Pages</h5>
                                            <ul>
                                                <li><a href="shop-list.html">Shop List</a>
                                                </li>
                                                <li><a href="shop-list-sidebar.html">Shop List With Sidebar</a>
                                                </li>
                                                <li><a href="shop-grid.html">Shop Grid</a>
                                                </li>
                                                <li><a href="shop-grid-sidebar.html">Shop Grid With Sidebar</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Shop Pages</h5>
                                            <ul>
                                                <li><a href="single-product.html">Product Details </a>
                                                </li>
                                                <li><a href="single-product-sidebar.html">Product Details With
                                                        Sidebar</a>
                                                </li>
                                                <li><a href="cart.html">Cart</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Other Pages</h5>
                                            <ul>
                                                <li><a href="about01.html">About 1</a>
                                                </li>
                                                <li><a href="about02.html">About 2</a>
                                                </li>
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6 menuimg"><img src="assets/images/blog_listed1.jpg"
                                                                                    alt="" class="img-responsive"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop-grid.html">Men</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">SHOP</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">our fashion shop</h5>
                                            <ul>
                                                <li class="active"><a href="/">Home Website</a>
                                                </li>
                                                <li><a href="about01.html">About Us</a>
                                                </li>
                                                <li><a href="shop-grid.html">Fashion Trends</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Men's Wear</h5>
                                            <ul>
                                                <li><a href="shorts">Shorts<span class="sell">Sell</span></a>
                                                </li>
                                                <li><a href="shop-grid.html">Suits & Blazers</a>
                                                </li>
                                                <li><a href="shop-grid.html">Swimwear</a>
                                                </li>
                                                <li><a href="shop-grid.html">Trousers & Chinos<span
                                                                class="new">New</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Women's Wear</h5>
                                            <ul>
                                                <li><a href="shop-grid.html">Jackets<span class="sell">Sell</span></a>
                                                </li>
                                                <li><a href="shop-grid.html">Bouses</a>
                                                </li>
                                                <li><a href="shop-grid.html">Night Wear<span class="hot">Hot</span></a>
                                                </li>
                                                <li><a href="shop-grid.html">Jeans & Trousers</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6 menuimg"><img src="assets/images/blog_listed1.jpg"
                                                                                    alt="" class="img-responsive"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop-grid.html">Women</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a>
                                </li>
                                <li><a href="blog-archive.html">Blog Archive</a>
                                </li>
                                <li><a href="blog-single.html">Blog Single</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!--/.navbar-->
    </div>
@endsection
@yield('menu')
<!--/.header-->
<!--Slider-area-->
@section('slider')
    <div class="slider-area">
        <div class="container">
            <div class="tp-banner-container">
                <div class="tp-banner" id="tp-banner-1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE --><img src="assets/images/slider/sliderHome1.jpg" alt="slidebg1"
                                                    data-bgfit="cover" data-bgposition="left top"
                                                    data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption smallHeading skewfromrightshort customout" data-x="700" data-y="96"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="800" data-easing="Back.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 4">Awesome new
                                looks
                                for women
                            </div>
                            <div class="tp-caption lightgrey_divider skewfromrightshort customout" data-x="800"
                                 data-y="140"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="1200" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 2">
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption mainHeading skewfromleftshort customout" data-x="575" data-y="152"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="300" data-start="1100" data-easing="Back.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 7">WOMEN´S
                                WINTER
                                FASHION
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_para customin customout" data-x="575" data-y="240"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="1300" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8">Lorem ipsum
                                dolor
                                sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                <br/> invidunt ut labore et dolore magna aliquyam
                                <br/>erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            </div>
                            <div class="tp-caption gray-button customin customout" data-x="700" data-y="360"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="700" data-start="1500" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><a
                                        href="single-product.html">VIEW DETAILS</a>
                            </div>
                            <div class="tp-caption orange-button customin customout" data-x="860" data-y="360"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900" data-start="1700" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><a
                                        href="shop-grid.html">COLLECTION</a>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
                            <!-- MAIN IMAGE --><img src="assets/images/slider/sliderHome2.jpg" alt="darkblurbg"
                                                    data-bgfit="cover" data-bgposition="left top"
                                                    data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption smallHeading skewfromrightshort customout" data-x="700" data-y="96"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="800" data-easing="Back.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 4">Awesome new
                                looks
                                for women
                            </div>
                            <div class="tp-caption lightgrey_divider skewfromrightshort customout" data-x="800"
                                 data-y="140"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="1200" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 2">
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption mainHeading skewfromleftshort customout" data-x="575" data-y="152"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="300" data-start="1100" data-easing="Back.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 7">WOMEN´S
                                WINTER
                                FASHION
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_para customin customout" data-x="575" data-y="240"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="1300" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8">Lorem ipsum
                                dolor
                                sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                <br/> invidunt ut labore et dolore magna aliquyam
                                <br/>erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            </div>
                            <div class="tp-caption gray-button customin customout" data-x="700" data-y="360"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="700" data-start="1500" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><a
                                        href="single-product.html">VIEW DETAILS</a>
                            </div>
                            <div class="tp-caption orange-button customin customout" data-x="860" data-y="360"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900" data-start="1700" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><a
                                        href="shop-grid.html">COLLECTION</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@yield('slider')
<!--/.slider-area-->
<!--Site-Content-->

@yield('content')
<!--/.site-content-->
<!--Footer-->
@section('footer')
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-6">
                        <div class="widget widget-contect">
                            <h3 class="widget-title">Contact Information</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                dolore
                                magna, dolere estus muvelas.</p>
                            <p><strong>Address</strong> 78 Fashion Street, Beverly Hill Abony, NYC 12045</p>
                            <p><strong>Phone:</strong> (800) 0123 4567 890</p>
                            <p><strong>Fax:</strong> (800) 0123 4567 892</p>
                            <p><strong>E-mail:</strong> groham@fashion-template.com</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="widget widget-services">
                            <h3 class="widget-title">our services</h3>
                            <ul class="widget-list">
                                <li><a href="#">Winter sales</a>
                                </li>
                                <li><a href="#">New products</a>
                                </li>
                                <li><a href="#">Best sellers</a>
                                </li>
                                <li><a href="#">Shorts</a>
                                </li>
                                <li><a href="#">Our stores</a>
                                </li>
                                <li><a href="#">About us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="widget widget-tag">
                            <h3 class="widget-title">my account</h3>
                            <ul class="widget-list">
                                <li><a href="#">My orders</a>
                                </li>
                                <li><a href="#">My shopping cart</a>
                                </li>
                                <li><a href="#">My credit slips</a>
                                </li>
                                <li><a href="#">My addresses</a>
                                </li>
                                <li><a href="#">My personal profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="widget widget-company-info">
                            <h3 class="widget-title">company information</h3>
                            <ul class="widget-list">
                                <li><a href="#">Brands we sale</a>
                                </li>
                                <li><a href="#">Our locations</a>
                                </li>
                                <li><a href="#">Contact us</a>
                                </li>
                            </ul>
                            <ul class="card-list">
                                <li>
                                    <a href="#"><img src="assets/images/card/01.png" alt="card">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/card/prymant-3.png" alt="card">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/card/prymant-1.png" alt="card">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/card/prymant-2.png" alt="card">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/card/prymant-4.png" alt="card">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.footer-top-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="footer-logo">
                        <a href="/"><img src="assets/images/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="social">
                        <li><a href="#">facebook</a>
                        </li>
                        <li><a href="#">twitter</a>
                        </li>
                        <li><a href="#">pinterest</a>
                        </li>
                        <li><a href="#">instagram</a>
                        </li>
                        <li><a href="#">linked in</a>
                        </li>
                        <li><a href="#">google+</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.footer-bottom-->
        <div class="copyright home01">
            <div class="container">
                <p class="text-center">&copy; 2016 by Groham - Fashion Template | All rights reserved</p>
            </div>
        </div>
        <!--/.copyright-->
    </footer>
@endsection
@yield('footer')
<!--/.footer-->
<!--==============================
@section('footerplugin')
    Footer js pluging -->
    <!-- jQuery -->
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <!-- modernizr -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- wow js-->
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <!-- venobox js-->
    <script type="text/javascript" src="assets/js/venobox.min.js"></script>
    <!-- mouse hover js-->
    <script src="assets/js/jquery.directional-hover.js"></script>
    <!-- owl js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- smoothscroll -->
    <script src="assets/js/smoothscroll.js"></script>
    <!-- settings -->
    <script type="text/javascript" src="assets/js/setting.js"></script>
    <script type="text/javascript" src="assets/js/setting-revolution-1.js"></script>
@endsection
@yield('footerplugin')
</body>
</html>