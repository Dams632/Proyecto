<!DOCTYPE html>
<html>
  <head>
    <title>Canchas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../view/css/general.css">
    <link href="css/style.css" rel="stylesheet">
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
                    <a href="../view/tecnico.php">Tecnicos</a>
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
            </ul>
        </nav>
    </header>
  <div class="container mt-5">
     <div class="row">                   
        <div class="col-md-3">
            <h1>Ingrese datos</h1>
              <form action="../controller/agregarCanchas.php"  method="POST">
                    <input type="text" class="form-control mb-3" name="cod_cancha" placeholder="codigo de cancha">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de cancha">
                    <input type="text" class="form-control mb-3" name="capacidad" placeholder="Capacidad">
                    <input type="submit" class="btn btn-primary">
              </form>
        </div>

        <div class="col-md-8">
          <table class="table" >
            <thead class="table-success table-striped" >
              <tr>
                <tr>
                  <th>Codigo de Cancha</th>
                  <th>Nombre</th>
                  <th>Capacidad</th>
                  <th>Acción</th>
                </tr>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once('../controller/listar_cancha.php');
              foreach($recordss as $registro){  
              ?> 
              <tr class="">
                <td scope="row"><?php echo $registro['cod_cancha'];?></td>
                <td><?php echo $registro[1];?></td>
                <td><?php echo $registro[2];?></td>
                <td><a href="../controller/eliminar_cancha.php?txtcodigo=<?php echo $registro[0];?>"><button>Eliminar</button></a>
                <td><button>
                <form action="../controller/actualizarCancha.php"  method="POST"> 
                <details>
                  <summary>Editar</summary>
                  <div class="col-md-8">
                      <input type="hidden" class="form-control mb-3" name="cod_cancha" placeholder="codigo de cancha" value="<?php echo $registro[0]?>">
                      <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de cancha" value="<?php echo $registro[1]?>">
                      <input type="text" class="form-control mb-3" name="capacidad" placeholder="Capacidad" value="<?php echo $registro[2]?>">
                      <a href="../controller/actualizarCancha.php?txtcodigo=<?php echo $registro[0];?>"><input type="submit" class="btn btn-primary" value="Actualizar"></a>  
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