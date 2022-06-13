@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')

    <h1>Listado de Anuncios</h1>
    <img src="https://i.pinimg.com/originals/d8/e7/cd/d8e7cd69d08b48ecdf9b8e4d5cc6e429.png" alt="">

   {{--   <a href="{{route('admin.posts.create')}}" class="btn btn-secondary bt-sm float-right">Nuevo Anuncio</a>  --}}

@stop

@section('content')
    @livewire('admin.posts-index')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop