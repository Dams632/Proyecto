<!DOCTYPE html>
<html>
  <head>
    <title>Directores Tecnicos</title>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/general.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
  <header>
        <nav>
            <ul class="bar-nav">
                <li class="menu-nav">
                    <a href="../view/admin.php">Inicio</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/Ciudades.php">Ciudades</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/canchas.php">Canchas</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/encuentro.php">Encuentros</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/equipos.php">Equipos</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/jugadores.php">Jugadores</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/puntuacion.php">Puntuacion</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/goles.php">Goles</a>
                </li>
            </ul>
        </nav>
    </header>
  <div class="container mt-5">
     <div class="row">                   
        <div class="col-md-3">
            <h1>Ingrese datos</h1>
              <form action="../controller/agregarTecnico.php"  method="POST">
                    <input type="text" class="form-control mb-3" name="id_tecnico" placeholder="identificacion tecnico">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                    <input type="submit" class="btn btn-primary">
              </form>
        </div>

        <div class="col-md-8">
          <table class="table" >
            <thead class="table-success table-striped" >
              <tr>
                <tr>
                  <th>Numero de documento</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Edad</th>
                  <th>Acción</th>
                </tr>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once('../controller/listarTecnicos.php');
              foreach($record as $registro){  
              ?> 
              <tr class="">
                <td scope="row"><?php echo $registro[0];?></td>
                <td><?php echo $registro[1];?></td>
                <td><?php echo $registro[2];?></td>
                <td><?php echo $registro[3];?></td>
                <td><a href="../controller/eliminarTecnico.php?txtcodigo=<?php echo $registro[0];?>"><button>Eliminar</button></a>
                <td><button>
                <form action="../controller/actualizarTecnico.php"  method="POST"> 
                <details>
                  <summary>Editar</summary>
                  <div class="col-md-8">
                      <input type="hidden" class="form-control mb-3" name="id_tecnico" placeholder="Numero de identificacion" value="<?php echo $registro[0]?>">
                      <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $registro[1]?>">
                      <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $registro[2]?>">
                      <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $registro[3]?>">
                      <a href="../controller/actualizarTecnico.php?txtcodigo=<?php echo $registro[0];?>"><input type="submit" class="btn btn-primary" value="Actualizar"></a>   
                 </div>
                </details>
                </form> 
              </button>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>  
    </div>
  </body>
</html>