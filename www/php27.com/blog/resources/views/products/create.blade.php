{{--@extends('layouts.app')--}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавиление товара</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="" method="POST">
                            {{ csrf_field() }}
                            Ссылка на товар <input type="text" name="ProductSlug" style="width: 300px"/>
                            <br/>
                            <br/>
                            Названия товара <input type="text" name="ProductName" style="width: 300px"/>
                            <br/>
                            <br/>
                            Описание товара <input type="text" name="ProductDescription" style="width: 300px"/>
                            <br/>
                            <br/>
                            Брэнд товара <input type="text" name="ProductBrand" style="width: 300px"/>
                            <br/>
                            <br/>
                            Категория товара <input type="text" name="ProductCategory" style="width: 300px"/>
                            <br/>
                            <br/>
                            Цена <input type="text" name="ProductPrice" style="width: 300px"/>
                            <br/>
                            <br/>
                            Картинка <input type="text" name="ProductImg" style="width: 300px"/>
                            <br/>
                            <br/>
                            <input type="submit" value="Save">
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@show
