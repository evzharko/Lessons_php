@extends('layouts.app')

@section('menu')
    @parent
@endsection

@section('slider')

@endsection

@section('content')
    <!--Site-Content-->
    <div id="#content" class="site-content shop-grid">
        <div class="container">
            <!--page title-->
            <div class="page_title_area row">
                <div class="col-md-12">
                    <div class="bredcrumb">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li class="active"><a href="#">shop Grid</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.page title-->

            <div class="row">
                <div class="col-md-12">
                    <div class="product-listing-view">
                        <div class="view-navigation">
                            <div class="info-text">
                                <p>Showing 1-8 from 124 products</p>
                            </div>
                            <div class="right-content">
                                <div class="grid-list">
                                    <ul>
                                        <li><a href="shop-list-sidebar.html"><i class="fa fa-align-justify"></i></a>
                                        </li>
                                        <li><a href="#" class="active"><i class="fa fa-th"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-select">
                                    <select name="sorted" id="sorted">
                                        <option value="-1">default sorting</option>
                                        <option>Price</option>
                                        <option>Useless</option>
                                        <option>Important</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="shop-product-list">
                                @foreach($products as $product)
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="product-single">
                                        <div class="product-thumb">
                                            <img class="img-responsive" alt="Single product"
                                                 src="{{$product->img}}">
                                            <div class="actions">
                                                <ul>
                                                    <li><a class="add-cart" href="{{$product->slug}}"><span><span
                                                                        class="icon_plus"></span></span> add to cart</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon_heart_alt"></span></a>
                                                    </li>
                                                    <li><a href="{{$product->slug}}"><span class="arrow_expand"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.product-thumb-->
                                        <div class="product-info">
                                            <h2>{{$product->name}}</h2>
                                            <div class="price">
                                                {{$product->price}} грн.
                                                <del> $50</del>
                                            </div>
                                        </div>
                                        <!--/.product-info-->
                                    </div>
                                    <!--/.product-single-->
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- pagination -->
                    <div class="paginations text-center">
                        <ul class="pagination">
                            <li><a href="#"><span class="pagicon arrow_carrot-left"></span></a>
                            </li>
                            <li><a href="#"><span>1</span></a>
                            </li>
                            <li class="active"><a href="#"><span>2</span></a>
                            </li>
                            <li><a href="#"><span>3</span></a>
                            </li>
                            <li><a href="#"><span>4</span></a>
                            </li>
                            <li><a href="#"><span>5</span></a>
                            </li>
                            <li><a href="#"><span>6</span></a>
                            </li>
                            <li><a href="#"><span class="pagicon arrow_carrot-right"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!--/.pagination-->

                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
@endsection

@section('footer')
    @parent
@endsection

@section('footerplugin')
    @parent
@endsection
