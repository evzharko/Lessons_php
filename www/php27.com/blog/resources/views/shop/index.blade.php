@extends('layouts.app')

@section('content')
    <html>
    <body class="home01">
    <!--Header-->
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
                                                <div class="cart-delete-button"><a href="#" class="delete-btn btn">delete</a>
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
                                                <div class="cart-delete-button"><a href="#" class="delete-btn btn">delete</a>
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
                            <a href="home01.html"><img src="assets/images/logo.png" alt="logo"/>
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
                               aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="home01.html">Home 1</a>
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
                                                <li class="active"><a href="home01.html">Home Website</a>
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
                                                <li><a href="shop-grid.html">Shorts<span class="sell">Sell</span></a>
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
                               aria-haspopup="true" aria-expanded="false">Blog</a>
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
    <!--/.header-->
    <!--Slider-area-->
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
                                looks for women
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
                                WINTER FASHION
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_para customin customout" data-x="575" data-y="240"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="1300" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8">Lorem ipsum
                                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
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
                                looks for women
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
                                WINTER FASHION
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_para customin customout" data-x="575" data-y="240"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="1300" data-easing="Power4.easeOut" data-endspeed="500"
                                 data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8">Lorem ipsum
                                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
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
    <!--/.slider-area-->
    <!--Site-Content-->
    <div id="#content" class="site-content">
        <div class="container">
            <!--Featured Collection-->
            <div class="featured-collection">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-featured left-featured">
                            <img class="img-responsive" alt="coata" src="assets/images/featuard/featuerd-1.jpg">
                            <div class="caption">
                                <div class="tb">
                                    <div class="tb-cell">
                                        <h2 class="heading">women</h2>
                                        <h4 class="heading"><span>Coats &amp; Jackets</span></h4>
                                        <a href="#" class="details-btn btn">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.single-featured-->
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-featured center-featured">
                            <img class="img-responsive" alt="coata" src="assets/images/featuard/featuerd-2.jpg">
                            <div class="caption">
                                <div class="tb">
                                    <div class="tb-cell">
                                        <h4 class="heading">
                                            <span>WATCHES</span>
                                            <span class="added">&amp;</span>
                                            <span>ACCESSORIES</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-featured right-featured">
                            <img class="img-responsive" alt="coata" src="assets/images/featuard/featuerd-3.jpg">
                            <div class="caption text-right">
                                <div class="tb">
                                    <div class="tb-cell">
                                        <h2 class="heading">man</h2>
                                        <h4 class="heading">TROUSERS</h4>
                                        <a href="#" class="details-btn btn">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.single-featured-->
                    </div>
                    <!--/.col-md-4-->
                </div>
                <!--/.row-->
            </div>
            <!--/.featured-collection-->
            <!--Latest items -->
            <div class="latest-items">
                <div class="tab-header">
                    <div class="heading-title">
                        <h3 class="title-text">LATEST TRENDS</h3>
                    </div>
                    <div class="tab-item">
                        <ul class="tab-item-list">
                            <li class="active"><a data-toggle="tab" href="#new">New Arrivals</a>
                            </li>
                            <li><a data-toggle="tab" href="#latest">Latest Trends</a>
                            </li>
                            <li><a data-toggle="tab" href="#men">Men's Fashion</a>
                            </li>
                            <li><a data-toggle="tab" href="#women">Women's Fashion</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.tab-item-->
                </div>
                <!--/.tab-header-->
                <div class="tab-content row">
                    <div id="new" class="tab-pane fade in active">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/01.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/01.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/02.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/02.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/01.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/01.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/04.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/04.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/04.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/04.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/01.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/01.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/07.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/07.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/07.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/07.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                    </div>
                    <!--/.new-->
                    <div id="latest" class="tab-pane fade">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/09.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/09.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/02.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/02.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/03.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/03.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/09.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/09.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/04.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/04.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/06.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/06.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/09.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/09.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/08.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/08.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                    </div>
                    <div id="men" class="tab-pane fade">
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/01.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/01.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/03.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/03.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/03.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/03.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/04.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/04.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/04.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/04.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/03.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/03.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/07.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/07.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/08.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/08.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                    </div>
                    <div id="women" class="tab-pane fade">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/03.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/03.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/02.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/02.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/02.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/02.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/04.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/04.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/02.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/02.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/06.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/06.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/small_gallery/02.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/small_gallery/02.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <img class="img-responsive" alt="Single product"
                                         src="assets/images/gallery_men/08.jpg">
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span
                                                                class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt "></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/08.jpg"><span
                                                            class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.product-thumb-->
                                <div class="product-info">
                                    <h2>White Stripe T-Shirt</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price"> $40
                                        <del> $50</del>
                                    </div>
                                </div>
                                <!--/.product-info-->
                            </div>
                            <!--/.product-single-->
                        </div>
                        <!--/.col-md-3-->
                    </div>
                </div>
                <!--/.tab-content-->
            </div>
            <!--/.Latest items-->
            <!--Subscribe Area-->
            <div class="subscripe-area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subscript-bg" style="background-image: url(assets/images/subscripe-bg.jpg);"></div>
                        <div class="subscript-content">
                            <div class="subscript-comtent-width">
                                <div class="subscript-title-area">
                                    <h3 class="subscript-title">subscribe to our newsletter</h3>
                                    <p class="subscript-subtitle">We do not spam! Get the latest updates from our
                                        shop.</p>
                                </div>
                                <!--/.subscript-title-->
                                <div class="form-newsletter">
                                    <form id="newsletter-form" name="newsletter-form" method="post" action="#">
                                        <input type="email" placeholder="enter your email address" name="email">
                                        <button type="submit"><span class="arrow_right"></span>
                                        </button>
                                    </form>
                                </div>
                                <!--/.form-newsletter-->
                            </div>
                            <!--/.subscript-comtent-width-->
                        </div>
                        <!--/.subscript-content-->
                    </div>
                    <!--/.col-md-12-->
                </div>
                <!--/.row-->
            </div>
            <!--/.subscribe area-->
            <!--/.Items-Carosel-Area-->
            <div class="items-carosel-area">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 pupoler-items">
                        <div class="items-carosel-single">
                            <div class="heading-title">
                                <h3 class="title-text">pupoler items</h3>
                            </div>
                            <!--/.heading-title-->
                            <div id="pupoler-items-slide">
                                <ul class="item-list">
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/01.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/02.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/03.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                </ul>
                                <!--/.item-list-->
                                <ul class="item-list">
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/04.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/05.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/06.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                </ul>
                                <!--/.item-list-->
                            </div>
                            <!--/.pupoler-items-slide-->
                        </div>
                        <!--/.items-carosel-single-->
                    </div>
                    <!--/.pupoler-items-->
                    <div class="col-md-4 col-sm-6 col-xs-6 letest-items">
                        <div class="items-carosel-single">
                            <div class="heading-title">
                                <h3 class="title-text">LATEST ITEMS</h3>
                            </div>
                            <!--/.heading-title-->
                            <div id="latest-items-slide">
                                <ul class="item-list">
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/07.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/08.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/09.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                </ul>
                                <!--/.item-list-->
                                <ul class="item-list">
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/10.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/11.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/03.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                </ul>
                                <!--/.item-list-->
                            </div>
                            <!--/.latest-items-slide-->
                        </div>
                        <!--/.items-carosel-single-->
                    </div>
                    <!--/.letest-items-->
                    <div class="col-md-4 col-sm-6 col-xs-6 top-sellers">
                        <div class="items-carosel-single">
                            <div class="heading-title">
                                <h3 class="title-text">TOP SELLERS</h3>
                            </div>
                            <!--/.heading-title-->
                            <div id="topsell-items-slide">
                                <ul class="item-list">
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/10.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/11.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/03.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                </ul>
                                <!--/.item-list-->
                                <ul class="item-list">
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/04.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/05.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                    <li class="item">
                                        <div class="product-thumb"><img src="assets/images/small_gallery/06.jpg"
                                                                        alt="img"></div>
                                        <div class="product-info">
                                            <h2>White Stripe T-Shirt</h2>
                                            <div class="price"> $40
                                                <del> $50</del>
                                            </div>
                                            <a class="cart-btn btn" href="single-product.html">add to cart</a>
                                        </div>
                                    </li>
                                    <!--/.item-->
                                </ul>
                                <!--/.item-list-->
                            </div>
                            <!--/.topsell-items-slide-->
                        </div>
                        <!--/.items-carosel-single-->
                    </div>
                    <!--/.top-sellers-->
                </div>
                <!--/.row-->
            </div>
            <!--/.items-carosel-area-->
            <!--Latest Blogs-->
            <div class="latest-blogs">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title-text">LATEST NEWS FROM THE BLOG</h3>
                        </div>
                        <!--/.heading-title-->
                    </div>
                    <!--/.col-md-12-->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <article class="post">
                            <div class="post-thumb-content">
                                <figure class="post-thumb">
                                    <a href="#"> <img class="img-responsive" alt="thumb"
                                                      src="assets/images/blog/blog-thumb1.jpg"> </a>
                                </figure>
                                <!--/.post thumb--><span class="entry-date">15th apr. 2016</span>
                            </div>
                            <!--/.post-thumb-content-->
                            <div class="post-details">
                                <h3 class="entry-title">
                                    <a href="blog-single.html">New men´s styles in 2016</a>
                                </h3>
                                <!--/.entry title-->
                                <div class="entry-meta"> <span>
                                        <img alt="icon" src="assets/images/cat-icon.png">
                                        in
                                        <a href="#">clothes</a>,
                                        <a href="#">fashion</a>,
                                        <a href="#">men</a>
                                        </span> <span>
                                        <img alt="icon" src="assets/images/comment-icon.png">
                                        <a href="#">19</a>
                                        </span>
                                </div>
                                <!--/.meta-->
                                <div class="entry-content">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl.
                                        Morbi mollis pellen tesque aug Phase llus ac venenl....... </p>
                                </div>
                                <!--/.entry content-->
                            </div>
                            <!--/.post details-->
                        </article>
                        <!--/.post-->
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <article class="post">
                            <div class="post-thumb-content">
                                <figure class="post-thumb">
                                    <a href="#"> <img class="img-responsive" alt="thumb"
                                                      src="assets/images/blog/blog-thumb2.jpg"> </a>
                                </figure>
                                <!--/.post thumb--><span class="entry-date">15th apr. 2016</span>
                            </div>
                            <!--/.post-thumb-content-->
                            <div class="post-details">
                                <h3 class="entry-title">
                                    <a href="blog-single.html">New men´s styles in 2016</a>
                                </h3>
                                <!--/.entry title-->
                                <div class="entry-meta"> <span>
                                        <img alt="icon" src="assets/images/cat-icon.png">
                                        in
                                        <a href="#">clothes</a>,
                                        <a href="#">fashion</a>,
                                        <a href="#">men</a>
                                        </span> <span>
                                        <img alt="icon" src="assets/images/comment-icon.png">
                                        <a href="#">19</a>
                                        </span>
                                </div>
                                <!--/.meta-->
                                <div class="entry-content">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl.
                                        Morbi mollis pellen tesque aug Phase llus ac venenl....... </p>
                                </div>
                                <!--/.entry content-->
                            </div>
                            <!--/.post details-->
                        </article>
                        <!--/.post-->
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <article class="post">
                            <div class="post-thumb-content">
                                <figure class="post-thumb">
                                    <a href="#"> <img class="img-responsive" alt="thumb"
                                                      src="assets/images/blog/blog-thumb3.jpg"> </a>
                                </figure>
                                <!--/.post thumb--><span class="entry-date">15th apr. 2016</span>
                            </div>
                            <!--/.post-thumb-content-->
                            <div class="post-details">
                                <h3 class="entry-title">
                                    <a href="blog-single.html">New men´s styles in 2016</a>
                                </h3>
                                <!--/.entry title-->
                                <div class="entry-meta"> <span>
                                        <img alt="icon" src="assets/images/cat-icon.png">
                                        in
                                        <a href="#">clothes</a>,
                                        <a href="#">fashion</a>,
                                        <a href="#">men</a>
                                        </span> <span>
                                        <img alt="icon" src="assets/images/comment-icon.png">
                                        <a href="#">19</a>
                                        </span>
                                </div>
                                <!--/.meta-->
                                <div class="entry-content">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl.
                                        Morbi mollis pellen tesque aug Phase llus ac venenl....... </p>
                                </div>
                                <!--/.entry content-->
                            </div>
                            <!--/.post details-->
                        </article>
                        <!--/.post-->
                    </div>
                    <!--/.col-md-4-->
                </div>
                <!--/.row-->
            </div>
            <!--/.latest blogs -->
            <!--clients-->
            <div class="clients">
                <ul class="client-carousel">
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/01.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/02.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/03.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/04.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/05.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/01.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/02.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/03.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/04.png">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img alt="clients logo" src="assets/images/clients/05.png">
                        </a>
                    </li>
                </ul>
            </div>
            <!--/.client -->
        </div>
        <!--/.container-->
    </div>
    <!--/.site-content-->
    <!--Footer-->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-6">
                        <div class="widget widget-contect">
                            <h3 class="widget-title">Contact Information</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                dolore magna, dolere estus muvelas.</p>
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
                        <a href="home01.html"><img src="assets/images/logo.png" alt="logo">
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
    <!--/.footer-->
    <!--==============================
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
    </body>
    </html>
@endsection