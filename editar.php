<?php

  require_once "conexion.php";
  $obj =new conectar();
  $conexion= $obj->conexion();
  $id=$_GET['id'];
  $sql= "SELECT name,password,telefono from usuarios where id='$id'";

  $result= mysqli_query($conexion,$sql);
  $ver= mysqli_fetch_row($result); 
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
            <form action="actualizar.php" method="post" class="card-body">
             <input type="text" hidden="" value="<?php echo $id ?>" name="id"/>        
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  placeholder="nombre de usuario"
                  class="form-control"
                  value="<?php echo $ver[0]?>"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="password"
                  placeholder="password"
                  class="form-control"
                  value="<?php echo $ver[1]?>"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  name="telefono"
                  placeholder="telefono"
                  class="form-control"
                   value="<?php echo $ver[2]?>"
                />
              </div>
              <input
                type="submit"
                value="actualizar"
                class="btn btn-primary btn-block"
              />
            </form>
          </div>
        </div>


        </div>
      </div>
    </div>


  </body>
</html>
