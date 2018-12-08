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
                        <table class="table">
                            @foreach($users as $user)
                                <tr>
                                    <td><a href="{{route('user.show',['user'=>$user->id])}}">
                                            {{$user->name}}
                                        </a></td>
                                    <td> {{$user->email}}</td>
                                    <td> {{$user->email_verified_at}}</td>
                                    <td> {{$user->created_at}}</td>
                                    <td> {{$user->updated_at}}</td>
                                    <td><a href="{{route('user.edit',['user'=>$user->id])}}">edit</a></td>
                                    <td>
                                        <form action="{{route('user.destroy',['user'=>$user->id])}}">
                                            {{csrf_field()}}
                                            <input type="submit" value="delete"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
{{$users->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
