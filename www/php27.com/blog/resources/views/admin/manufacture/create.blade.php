@extends('layouts.admin.app_admin')

@section('left_menu')
    @parent
@endsection

@section('create_manufacture')
    <div class="container-fluid" style="
       margin-left: 310px">

        <h1 class="h4 my-4">Добавиление Производителя</h1>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label type="text">Названия производителя</label>
                    <input name="ManufactureName" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label type="text">Загрузить изображение</label>
                    <input type="file" name="ManufactureImg">
                    {{--<input name="ManufactureImg" type="file" class="form-control">--}}
                </div>
                <button type="submit" class="btn btn-primary">Создать производителя</button>
            </form>
        </div>
    </div>
@endsection