<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Nombre del Anuncio">
    </div>

   <div class="card-body">
    <table class="table table-striped">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th colspan="2"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td width="10px">
                        <a class="btn btn-primary bt-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger bt-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>                
            @endforeach
        </tbody>

    </table>
  
</div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
</div>
