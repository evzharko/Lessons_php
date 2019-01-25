@extends('layouts.admin.app_admin')

@section('left_menu')
    @parent
@endsection

@section('content_manufacture')
    <div class="container-fluid" style="
       margin-left: 310px">
        <a href="{{ route('manufacturers.add') }}">Добавить производителя</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Назваиние производителя</th>
            </tr>
            </thead>
            <tbody>
            @foreach($manufactures as $manufacture)
            <tr>
                <th scope="row">{{$manufacture->id}}</th>
                <td>{{$manufacture->name}}</td>
                {{--<td><a href="{{route('products.edit',[$product->id])}}">edit</a></td>--}}
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $manufactures->links() }}
    </div>
@endsection