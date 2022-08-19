@extends('layout')

@section('content')
    Создание нового проекта
    <form action="/project/create" method="post">
        @csrf

        <button type="submit">Сохранить проект</button>
    </form>
@endsection
