@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1>Editar Anuncio</h1>
    <img src="https://i.pinimg.com/originals/d8/e7/cd/d8e7cd69d08b48ecdf9b8e4d5cc6e429.png" alt="">
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            
            {!! Form::model($post,['route' =>[ 'admin.posts.update', $post],'method' => 'put']) !!}

                {!! Form::hidden('user_id', auth()->user()->id) !!}


                    @include('admin.posts.partials.form')
              

                {!! Form::submit('Actualizar Anuncio', ['class' => 'btn btn-primary']) !!}
              

            {!! Form::close() !!}
            
        </div>
    </div>  

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop