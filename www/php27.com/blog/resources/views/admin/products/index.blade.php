@extends('layouts.admin.app_admin')

@section('left_menu')
    @parent
@endsection

@section('content_products')
    <div class="container-fluid" style="
       margin-left: 310px">
        <a href="{{ route('products.add') }}">Добавить товары</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Назваиние</th>
                <th>Описание</th>
                <th>Картинка</th>
                <th>Цена</th>
                <th>Редактировать</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{!!$product->description!!}</td>
                <td>{{$product->img}}</td>
                <td>{{$product->price}}</td>
                <td><a href="">edit</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection


    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12 ">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Добавиление товара--}}
    {{--<br>--}}
    {{--<a href="{{ route('products.add') }}">Добавить товары</a>--}}
    {{--</div>--}}

    {{--<div class="panel-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--Вывод всех товаров--}}

    {{--<table class="table table-hover">--}}
    {{--@foreach($products as $product)--}}
    {{--<tr>--}}

    {{--<td>{{$product->id}}</td>--}}
    {{--<td>{{$product->name}}</td>--}}
    {{--<td>{{$product->description}}</td>--}}
    {{--<td>{{$product->img}}</td>--}}
    {{--<td>{{$product->price}}</td>--}}
    {{--<td></td>--}}
    {{--<td><a href="">edit</a></td>--}}
    {{--<td>--}}
    {{--<form method="POST" action="{{route('user.destroy',['user'=>$user->id])}}">--}}
    {{--{{csrf_field()}}--}}
    {{--{!! method_field('delete') !!}--}}
    {{--<input type="submit" value="delete"/>--}}
    {{--</form>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</table>--}}
    {{--{{ $products->links() }}--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
