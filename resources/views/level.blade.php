@extends('layout')

@section('content')

    <p>Этаж {{$level->level}}</p>
    @foreach($level->zones as $zone)
        <div class="card" style="width: 10rem;">
            {{--<img src="..." class="card-img-top" alt="...">--}}
            <div class="card-body">
                <button class="btn btn-primary" onclick="getZone({{$zone->id}})">{{$zone->zoneType->type}}</button>
            </div>
        </div>
        </br>
    @endforeach
@endsection
