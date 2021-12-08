@extends('paginas.layouts.plantilla')
@section('title','Mostrar Curso: '.$curso->nameCourse)
@section('content')
    <h1>Pagina del curso: {{$curso->nameCourse}}</h1>
    <p>Descripcion:</p>
    <p>{{$curso->direcCourse}}</p>
    <p>Temas a tratar:</p>
    <ul>
        @foreach ($desc as $des)
            <li><p>{{$des->nameTopic}}</p>
                <p>{{$des->descTopic}}</p></li>
        @endforeach
    </ul>
@endsection()
