@extends('layout')

@section('content')
    Создать проект
    <form name="build" method="post" action="/create">
        @csrf
        <input type="text" name="name" placeholder="Имя проекта">
        <input type="number" id="level" name="level" placeholder="Укажите этажность здания">
        <button type="button" class="btn btn-primary" onclick="createForm()">Построить</button>
        <div class="accordion accordion-flush" id="buildLevels">
            {{--<input type="radio" name="premisesType" value="1">Жилое
            <input type="radio" name="premisesType" value="2">МОП
            <input type="radio" name="premisesType" value="3">Подвал
            <input type="radio" name="premisesType" value="4">Офисы--}}
{{--            <input type="text" name="room[1]" value="">
            <input type="text" name="room[2]" value="">
            <input type="text" name="room[3]" value="">--}}
            <div class="accordion-item">

            </div>
        </div>
        <div>
        </div>
        {{--<button type="submit" class="btn btn-primary">Сохранить</button>--}}
    </form>
@endsection
