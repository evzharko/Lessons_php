@extends('layouts.admin.app_admin')

@section('left_menu')
    @parent
@endsection

@section('edit_products')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            sdfdsfds
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection