@extends('layout')

@section('content')

    <p>{{$room->roomType->type}}</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">№ помещения</th>
                <th scope="col">№ комнаты</th>
                <th scope="col">Помещение</th>
                <th scope="col">t нар</th>
                <th scope="col">t внутр</th>
                <th scope="col">Наименование</th>
                <th scope="col">Ориентация</th>
                <th scope="col">a</th>
                <th scope="col">b</th>
                <th scope="col">Площадь</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$room->apartmentNumber}}</td>
                <td>-</td>
                <td>{{$room->roomType->type}}</td>
                <td>-31</td>
                <td>-31</td>
                <td>нс</td>
                <td>Ю</td>
                <td>{{$room->height}}</td>
                <td>{{$room->width}}</td>
                <td>{{$room->square}}</td>
            </tr>
            </tbody>
        </table>
@endsection
