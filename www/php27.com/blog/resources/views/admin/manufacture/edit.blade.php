@extends('layouts.admin.app_admin')

@section('left_menu')
    @parent
@endsection

@section('edit_products')
    <div class="container-fluid" style="
       margin-left: 310px">

        <h1 class="h4 my-4">Добавиление товара</h1>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{route('products.update',[$product->id])}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label type="text">Ссылка на товар</label>
                    <input name="ProductSlug" type="text" class="form-control" value="{{$product->slug}}">
                </div>
                <div class="form-group">
                    <label type="text">Названия товара</label>
                    <input name="ProductName" type="text" class="form-control" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label type="text">Описание товара</label>
                    <textarea id="editor" name="ProductDescription">{{$product->description}}</textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </div>
                <div class="form-group">
                    <label type="text">Брэнд товара</label>
                    <input name="ProductBrand" type="text" class="form-control" value="{{$product->brand}}">
                </div>
                <div class="form-group">
                    <label type="text">Категория товара</label>
                    <input name="ProductCategory" type="text" class="form-control" value="{{$product->category_id}}">
                </div>
                <div class="form-group">
                    <label type="text">Цена</label>
                    <input name="ProductPrice" type="text" class="form-control" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label type="text">Картинка</label>
                    <input name="ProductImg" type="hidden" class="form-control" value="{{$product->img}}">
                    <img src ="{{asset($product->img)}}" style="width: 100px;">
                </div>
                <button type="submit" class="btn btn-primary">Обновить товар</button>
            </form>
        </div>
    </div>
@endsection