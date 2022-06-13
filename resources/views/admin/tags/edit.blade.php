@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1>Editar etiquetas</h1>
    <img src="https://i.pinimg.com/originals/d8/e7/cd/d8e7cd69d08b48ecdf9b8e4d5cc6e429.png" alt="">
@stop

@section('content')
@if (session('info'))

<div class="alert-success">
    <strong>
        {{session('info')}}
    </strong>
</div>

@endif
<div class="card">
<div class="card-body">
{!! Form::model($tag, ['route' => ['admin.tags.update',$tag],'method' => 'put']) !!}

<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la etiqueta']) !!}

    @error('slug')
    <span class="text-danger">{{$message}}</span>
@enderror


</div>

{!! Form::submit('Editar etiqueta', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
</div>
@stop

