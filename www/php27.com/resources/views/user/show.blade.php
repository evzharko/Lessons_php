@extends('layouts.app')

@section('content')
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

                        <h1> {{$user->name}}</h1>
                        <h1> {{$user->email}}</h1>
                        <h1> {{$user->email_verified_at}}</h1>
                        <h1> {{$user->created_at}}</h1>
                        <h1> {{$user->updated_at}}</h1>
                        <h1><a href="{{route('user.edit',['user'=>$user->id])}}">edit</a></h1>
                        <h1>
                            <form action="{{route('user.destroy',['user'=>$user->id])}}">
                                {{csrf_field()}}
                                <input type="submit" value="delete"/>
                            </form>
                        </h1>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection