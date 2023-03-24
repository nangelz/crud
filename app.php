<?php
  require_once "conexion.php";
  require_once "metodos.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>App para usuarios</title>
    <!-- Bootswatch Cosmo Theme -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css"
    />
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">App para usuarios</a>
    </nav>

    <div class="container">
      <!-- APPLICATION -->
      <div id="App" class="row pt-5">
        <!-- FORM -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h4>Agregar usuarios</h4>
            </div>
            <form action="insertar.php" method="post" class="card-body">
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  placeholder="nombre de usuario"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="password"
                  placeholder="password"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  name="telefono"
                  placeholder="telefono"
                  class="form-control"
                />
              </div>
              <input
                type="submit"
                value="Save"
                class="btn btn-primary btn-block"
              />
            </form>
          </div>
        </div>

        <div  class="col-md-8">
          <table class="table">
            <thead>
              <tr>
                <th scope="col-md-2">ID</th>
                <th scope="col-md-2">Name</th>
                <th scope="col-md-2">password</th>
                <th scope="col-md-2">telefono</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $obj = new metodo();
                $sql="SELECT id,name,password,telefono from usuarios";
                $datos=$obj->mostrarDatos($sql);

                 foreach($datos as $us){?>
              <tr>
                <td><?php echo $us['id']; ?></td>
                <td><?php echo $us['name']; ?></td>
                <td><?php echo $us['password']; ?></td>
                <td><?php echo $us['telefono']; ?></td>
                <td ><a href="eliminar.php?id=<?php echo $us['id']?>"class="btn btn-danger btn-group btn-group.sm" 
                  name="eliminar"
                  value='borrar'>Eliminar</a></td>
                <td ><a href="editar.php?id=<?php echo $us['id']?>" class="btn btn-success btn-group btn-group-sm"
                  name="editar"
                  value='actualizar'>Actualizar</a></td>
              </tr>
               <?php
                };
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </body>
</html>
