@extends('layouts.app')

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
                            Названия товара <input type="text" name="name" style="width: 300px"/>
                            <br/>
                            <br/>
                            Описание товара <input type="text" name="description" style="width: 300px"/>
                            <br/>
                            <br/>
                            <input type="submit" value="Save">
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
