@extends('layout')

@section('content')
    Таблица помещений
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <th scope="row">1</th>
                <td>{{$room->room_type_id}}</td>
                <td>{{$room->build_id}}</td>
                <td>{{$room->roomType->type}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
