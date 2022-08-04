@extends('layout')

@section('content')
    Список проектов
    <form name="build" method="post" action="/build">
        @csrf
        <select class="form-select" name="project" area-lable="Выбрать проект">
            @foreach($builds as $build)
                <option value="{{$build->id}}">{{$build->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">получить проект</button>
    </form>
    <button type="button" class="btn btn-primary" onclick="location.href='/project/create'">Новый проект</button>
    {{-- <table class="table table-striped">
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
                 <td>{{$room->name}}</td>
                 <td>{{$room->orientation}}</td>
                 <td>{{$room->tempOut}}</td>
             </tr>
         @endforeach
         </tbody>
     </table>--}}
@endsection
