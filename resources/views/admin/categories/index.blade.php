@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>{{__('Lista de categorias')}}</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
