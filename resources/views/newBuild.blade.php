@extends('layout')

@section('content')
    Создать проект
    <form name="build" method="post" action="{{route('buildCreate')}}">
        @csrf
        <input type="text" name="name" placeholder="Имя проекта">
        <input type="number" id="level" name="level" placeholder="Укажите этажность здания">
        <button type="button" class="btn btn-primary" onclick="createForm()">Построить</button>
        <div class="accordion accordion-flush" id="buildLevels">
        </div>
        <div>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
