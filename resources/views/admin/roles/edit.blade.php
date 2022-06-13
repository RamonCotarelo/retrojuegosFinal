@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1>Editar Rol</h1>
    <img src="https://i.pinimg.com/originals/d8/e7/cd/d8e7cd69d08b48ecdf9b8e4d5cc6e429.png" alt="">
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($role,['route' => ['admin.roles.update',$role],'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Rol']) !!}

            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <h2 class="h3">Lista de Permisos</h2>

        @foreach ($permissions as $permission)

        <div>
            <label> {!! Form::checkbox('permissions[]', $permission->id, null, ['class' =>'mr-1']) !!} </label>
            {{$permission->name}}
        </div>
            
        @endforeach

        {!! Form::submit(' Editar Rol', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

