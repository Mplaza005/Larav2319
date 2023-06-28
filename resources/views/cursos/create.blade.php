@extends('layouts.plantilla')

@section('content')

<h1>Crear curso</h1>
<form action="{{route('cursos.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <br><br>
    <button type="submit">Enviar Formulario:</button>





</form>

@endsection