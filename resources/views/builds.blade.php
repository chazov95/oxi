@extends('layout')

@section('content')
    Список зданий
    @foreach($builds as $build)
        <button type="button" value="{{$build->id}}" onclick="getBuild({{$build->id}})">{{$build->name}}</button>
    @endforeach

    <button type="button" class="btn btn-primary" onclick="location.href='/newBuild'">Новый проект</button>
@endsection
