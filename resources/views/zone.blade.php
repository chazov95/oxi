@extends('layout')

@section('content')

    <p>{{$zone->zoneType->type}}</p>
    <div class="row">
        @foreach($zone->rooms as $room)

            <div class="col-sm-2">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <input type="button" onclick="getRoom({{$room->id}})" value="{{$room->roomType->type}}">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>
            {{--<div class="card" style="width: 10rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <button class="btn btn-primary" onclick="getRoom({{$room->id}})">{{$room->roomType->type}}</button>
                </div>
            </div>--}}
        @endforeach
    </div>
@endsection
