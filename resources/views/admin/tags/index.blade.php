@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1>Etiquetas</h1>
    <img src="https://i.pinimg.com/originals/d8/e7/cd/d8e7cd69d08b48ecdf9b8e4d5cc6e429.png" alt="">
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary btn-sm" href="{{route('admin.tags.create')}}">Añadir Etiqueta</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route('admin.tags.edit',$tag)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
