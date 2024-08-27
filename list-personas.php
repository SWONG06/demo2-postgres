<!doctype html>
<html lang="es">
  <head>
    <title>Listado de Personas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index2.png" style="width: 30px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="index.php">Registrar</a>
        <a class="p-2 text-dark" href="#">Actualizar</a>
        <a class="p-2 text-dark" href="#">Eliminar</a>
      </nav>
    </div>

    <div class="container">
      <h1 class="my-4">Listado de Personas</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Celular</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include("conexion.php");
            $con = conexion();

            $result = pg_query($con, "SELECT * FROM persona");

            while ($row = pg_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>{$row['idpersona']}</td>";
              echo "<td>{$row['documento']}</td>";
              echo "<td>{$row['nombre']}</td>";
              echo "<td>{$row['apellido']}</td>";
              echo "<td>{$row['direccion']}</td>";
              echo "<td>{$row['celular']}</td>";
              echo "<td>
                      <form action='delete-persona.php' method='post' style='display:inline;'>
                        <input type='hidden' name='id' value='{$row['idpersona']}'>
                        <button type='submit' class='btn btn-danger btn-sm'>Eliminar</button>
                      </form>
                    </td>";
              echo "</tr>";
            }

            pg_close($con);
          ?>
        </tbody>
      </table>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="https://www.svgrepo.com/show/508391/uncle.svg" alt="" width="24" height="24">
          <small class="d-block mb-3 text-muted">&copy; 2023-1</small>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>