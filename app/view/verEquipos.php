<!DOCTYPE html>
<html>
  <head>
    <title>Equipos</title>
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
                    <a href="../view/logTecnico.php">Inicio</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verCiudades.php">Ciudades</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verTecnico.php">Tecnicos</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verEncuentro.php">Encuentros</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verCanchas.php">Canchas</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/verJugadores.php">Jugadores</a>
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
                  <th>Codigo de equipo</th>
                  <th>Nombre de Equipo</th>
                  <th>Ciudad de Equipo</th>
                  <th>Tecnico</th>
                </tr>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once('../controller/listarEquipos.php');
              //include_once('../controller/listarTecnicos.php');
              //include_once('../controller/listar_ciudades.php');  
              foreach($recordss as $registro){  
              ?> 
              <tr class="">
                <td scope="row"><?php echo $registro[0];?></td>
                <td><?php echo $registro[1];?></td>
                <td><?php echo $registro[2];?></td>
                <td><?php echo $registro[5];?></td>
              <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
  </body>
</html>