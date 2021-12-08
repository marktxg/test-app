@extends('paginas.layouts.plantilla')

@section('title','Lista de Cursos')
@section('content')
    <h1>Pagina de los cursos</h1>
    <p>Lista de los cursos disponibles:</p>
    <a href="{{route('curso.create')}}">Nuevo Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <a href="{{route('curso.show',$curso->id)}}"><li>{{$curso->nameCourse}}</li></a>
        @endforeach
    </ul>
    <a href="/">Volver</a>
@endsection()
