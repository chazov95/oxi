@extends('layout')

@section('content')
    Список проектов
    <form name="build" method="post" action="/project">
        @csrf
        <select class="form-select" name="project" area-lable="Выбрать проект">
            @foreach($builds as $build)
                <option value="{{$build->id}}">{{$build->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">получить проект</button>
    </form>
    <button type="button" class="btn btn-primary" onclick="location.href='/newBuild'">Новый проект</button>
@endsection
