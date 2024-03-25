<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <!-- Boton -->
    @if ($msg !== null )
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{$msg}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @else
      @php
          $msg = [];
      @endphp
    @endif
    <div class="d-grid gap-2 p-5">
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Cliente</button>
    </div>

   

    <!-- Tabla -->

    <div class="d-grid gap-2 p-5">
        <h1 class="text-center">Tabla de Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Celular</th>
                  <th scope="col">Email</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td><button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#editModal{{$user->id}}"><i class="fa-solid fa-pen-to-square"></i></button></td>
                <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}"><i class="fa-solid fa-trash text-transparent"></i></button></td>
                <tr>

              @endforeach
            
            </tbody>
        </table>
        
    </div>


    <!-- Modal Crear-->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if ($errors->any())
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form action="{{ route('users.store') }}" method='POST'>
          @csrf
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="recipient-name"  value="{{ old ('nombre') }}">
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email" value="{{ old ('Email') }}" required>
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Celular:</label>
            <input type="text" class="form-control" id="recipient-name" name="phone" value="{{ old ('phone') }}" required>
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Edad:</label>
            <input type="text" class="form-control" id="recipient-name" name="edad" value="{{ old ('edad') }}" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal editar -->
@foreach($users as $user)
<div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModal{{$user->id}}">Agregar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
        <form action="{{ url('updateusers/'.$user->id.'/edit') }}" method='POST'>
          @csrf
          @method('PUT')
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="recipient-name"  value="{{ $user->name}}">
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email" value="{{ $user->email}}" required>
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Celular:</label>
            <input type="text" class="form-control" id="recipient-name" name="phone" value="{{$user->phone}}" required>
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Edad:</label>
            <input type="text" class="form-control" id="recipient-name" name="edad" value="{{ $user->age}}" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>
@endforeach

<!-- Modal Eliminar -->
@foreach($users as $user)
<div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteModal{{$user->id}}">Eliminar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
        <form action="{{ url('deleteusers/'.$user->id) }}" method='POST'>
          @csrf
          @method('DELETE')
          <div class="mb-2">
            Seguro que desea eliminar a {{$user->name}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
          </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>
@endforeach
    <script src="https://kit.fontawesome.com/f7e7143a98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>