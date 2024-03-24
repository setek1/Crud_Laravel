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
            
            </tbody>
        </table>
    </div>


    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Edad:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Celular:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Edad:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>