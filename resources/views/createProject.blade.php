@extends('layout')

@section('content')
    Создание нового проекта
    <form action="/project/create" method="post">
        @csrf
        <input type="text" name="name" placeholder="Имя проекта">
        <input type="radio" name="premisesType" value="1">Жилое
        <input type="radio" name="premisesType" value="2">МОП
        <input type="radio" name="premisesType" value="3">Подвал
        <input type="radio" name="premisesType" value="4">Офисы
        <input type="text" name="room[1]" value="">
        <input type="text" name="room[2]" value="">
        <input type="text" name="room[3]" value="">
        <button type="submit">Сохранить проект</button>
    </form>
@endsection
