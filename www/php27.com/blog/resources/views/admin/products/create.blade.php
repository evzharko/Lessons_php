@extends('layouts.admin.app_admin')

@section('left_menu')
    @parent
@endsection

@section('create_products')
    <div class="container-fluid" style="
       margin-left: 310px">

        <h1 class="h4 my-4">Добавиление товара</h1>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label type="text">Ссылка на товар</label>
                    <input name="ProductSlug" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label type="text">Названия товара</label>
                    <input name="ProductName" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label type="text">Описание товара</label>
                    <textarea id="editor" name="ProductDescription"></textarea>
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
                    <input name="ProductBrand" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label type="text">Категория товара</label>
                    <input name="ProductCategory" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label type="text">Цена</label>
                    <input name="ProductPrice" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label type="text">Картинка</label>
                    <input name="ProductImg" type="text" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Создать товар</button>
            </form>
        </div>
    </div>
@endsection