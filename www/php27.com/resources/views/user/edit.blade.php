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
                        @php
                            $id = 0;
                            if(isset($user)){
                                $id = $user->id;
                            }
                        @endphp
                        <form method="post" action="{{route('user.store',['user'=>$id])}}">
                            {{csrf_field()}}
                            @if(isset($user))
                                <input type="hidden" name="id" value="{{$user->id}}">
                            @endif
                            <input name="name" value="@if(isset($user)){{$user->name}}@endif"/>
                            <input name="email" value="@if(isset($user)){{$user->email}}@endif"/>
                            {{--@if(!isset($user))--}}
                                <input name="password" placeholder="password" value=""/>
                            {{--@endif--}}
                            <input type="submit" value=" @if(isset($user))Edit @else Save @endif"/>
                        </form>
                        </h1>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
