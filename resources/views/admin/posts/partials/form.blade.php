<div class="fomr-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nombre del videojuego']) !!}

    @error('name')

    <small class="text-danger">{{$message}}</small>
        
    @enderror

</div>
<div class="fomr-group">
    {!! Form::label('slug', 'Slug(Ej. Super-Mario-64):') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder' => 'Introduce un slug (indica la url del post)']) !!}

    @error('slug')

    <small class="text-danger">{{$message}}</small>
        
    @enderror


</div>

<div class="form-group">

    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}


    @error('category_id')

    <small class="text-danger">{{$message}}</small>
        
    @enderror

    
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)

        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
        
    @endforeach
        <hr>
   


</div>



<div class="form-group">

    <p class="font-weight-bold">Estado</p>

    <label class="mr-2">
        
        {!! Form::radio('status', 1, true) !!}
        Borrador
        
    </label>

    <label>
        
        {!! Form::radio('status', 2, false) !!}
        Publicado
        
    </label>

    <hr>

    @error('status')

    <small class="text-danger">{{$message}}</small>
        
    @enderror


</div>



<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' =>'form-control']) !!}

    
@error('descripcion')

<small class="text-danger">{{$message}}</small>
    
@enderror

</div>


<div class="form-group">
    {!! Form::label('contacto', 'Método de Contacto:') !!}
    {!! Form::textarea('contacto', null, ['class' =>'form-control']) !!}

    
@error('contacto')

<small class="text-danger">{{$message}}</small>
    
@enderror


</div>