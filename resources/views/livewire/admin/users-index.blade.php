<div>
  <div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingresa usuario para su busqueda">
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td width="10px">
                        <a href="{{route('admin.users.edit',$user)}}" class=" btn btn-primary">Editar</a>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$users->links()}}
    </div>
  </div>
</div>
