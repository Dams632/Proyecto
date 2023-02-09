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
                    <a href="../view/logTecnico.php">Inicio</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verTecnico.php">Tecnicos</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verEncuentro.php">Encuentros</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verEquipos.php">Equipos</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/jugadoresT.php">Jugadores</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verPuntuacion.php">Puntuacion</a>
                </li>
            </ul>
        </nav>
    </header>
        <div class="col-md-8">
          <table class="table" >
            <thead class="table-success table-striped" >
              <tr>
                <tr>
                  <th>Codigo de Cancha</th>
                  <th>Nombre</th>
                  <th>Capacidad</th>
                </tr>
                <th></th>
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
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>  
    </div>
  </body>
</html>