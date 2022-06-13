@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1>Asignar un Rol</h1>
    <img src="https://i.pinimg.com/originals/d8/e7/cd/d8e7cd69d08b48ecdf9b8e4d5cc6e429.png" alt="">
@stop

@section('content')
   
    <div class="card">
        <div class="card-body">
            <p class="h5">NOMBRE</p>
            <p class="form-control">{{$user->name}}</p>
                <hr>
            <h2 class="h5">LISTADO DE ROLES</h2>
            {!! Form::model($user, ['route' =>['admin.users.update', $user], 'method' =>'put']) !!}

                @foreach ($roles as $role)

                    <div>
                        <label > 
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                    
                @endforeach
                <br>
                        {!! Form::submit('Asignar', ['class' => 'btn btn-primary']) !!}
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