@extends('layout')

@section('content')
    <p>{{$build->name}}</p>
    @foreach($build->levels as $level)
        <div class="card" style="width: 10rem;">
            {{--<img src="..." class="card-img-top" alt="...">--}}
            <div class="card-body">
                <button class="btn btn-primary" onclick="getLevel({{$level->id}})">Этаж {{$level->level}}</button>
            </div>
        </div>
        </br>
    @endforeach

@endsection
