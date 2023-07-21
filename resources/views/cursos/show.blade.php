@extends('layouts.plantilla')

@section('content')

{{-- <h1>hola desde show {{$curso}}</h1> --}}

<iframe src="{{ 'http://localhost/larav2319/public/storage/imagenes/' . $curso->urlPdf }}"  frameborder="0"></iframe>


@endsection