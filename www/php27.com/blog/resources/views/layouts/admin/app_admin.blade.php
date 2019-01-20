<!doctype html>
<html lang="en">
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include Ckeditor5 ---------->
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/admin/admin.css') }}" rel="stylesheet">

</head>
<body>

@section('left_menu')
    <div class="nav-side-menu">
        <div class="brand">Admin Panel</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="/admin">
                        <i class="fa fa-dashboard fa-lg"></i> Dashboard
                    </a>
                </li>

                <li data-toggle="collapse" data-target="#products" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Каталог <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="#">Категории</a></li>
                    <li class="active"><a href="{{ route('products') }}">Товары</a></li>
                    <li><a href="#">Фильтры</a></li>
                    <li><a href="#">Атрибуты</a></li>
                    <li><a href="#">Производители</a></li>
                    <li><a href="#">Статьи</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                    <li>New Service 1</li>
                    <li>New Service 2</li>
                    <li>New Service 3</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                    <li>New New 1</li>
                    <li>New New 2</li>
                    <li>New New 3</li>
                </ul>


                <li>
                    <a href="#">
                        <i class="fa fa-user fa-lg"></i> Profile
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-users fa-lg"></i> Users
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
@endsection
@yield('left_menu')

@section('content_products')
@endsection
@yield('content_products')

@section('create_products')
@endsection()
@yield('create_products')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>