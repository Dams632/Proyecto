<!DOCTYPE html>
<html>
  <head>
    <title>Encuentros</title>
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
                    <a href="../view/tecnico.php">Tecnicos</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/jugadores.php">Jugadores</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/equipos.php">Equipos</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/canchas.php">Canchas</a>
                </li>
            </ul>
        </nav>
    </header>
  <div class="container mt-5">
     <div class="row">                   
        <div class="col-md-3">
            <h1>Ingrese datos</h1>
              <form action="../controller/insertarEncuentro.php"  method="POST">
              <input type="text" class="form-control mb-3" name="cod_encuentro" placeholder="Codigo de encuentro">
              <div class="row">                       
                        <select name="cod_local">   
                                 <option value="">Seleccione el equipo local</option>
                                
                                 <?php
                                 include_once('../controller/listarEquipos.php');
                                    foreach ($recordss as $registro) {
                                        ?> 
                                    
                                     <option  value="<?php echo $registro[0];?>"> <?php echo $registro[1]; ?></option> </td>
                                     <?php }?>
                        </select>                       
                    </div>
                    <br>
                    <input type="text" class="form-control mb-3" name="cant_goles_local" placeholder="Goles del equipo Local">
                    <div class="row">                       
                        <select name="cod_visitante">   
                                 <option value="">Seleccione el equipo Visitante</option>
                                
                                 <?php
                                 include_once('../controller/listarEquipos.php');
                                    foreach ($recordss as $registro) {
                                        ?> 
                                    
                                     <option  value="<?php echo $registro[0];?>"> <?php echo $registro[1]; ?></option> </td>
                                     <?php }?>
                        </select>                       
                    </div>
                    <br>                
                    <input type="text" class="form-control mb-3" name="cant_goles_visitante" placeholder="Goles del equipo Visitante">
                    <div class="row">                       
                        <select name="cod_cancha">   
                                 <option value="">Seleccione la cancha</option>
                                
                                 <?php
                                 include_once('../controller/listar_cancha.php');
                                    foreach ($recordss as $registro) {
                                        ?> 
                                    
                                     <option  value="<?php echo $registro[0];?>"> <?php echo $registro[1]; ?></option> </td>
                                     <?php }?>
                        </select>                       
                    </div>
                    <br>
                    
                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Derrotas">
                    <input type="time" class="form-control mb-3" name="hora" placeholder="Empates">                
                    <input type="submit" class="btn btn-primary">
              </form>
        </div>

        <div class="col-md-8">
          <table class="table" >
            <thead class="table-success table-striped" >
              <tr>
                <tr>
                  <th>Encuentro</th>
                  <th>Local</th>
                  <th>Goles</th>
                  <th>Visitante</th>
                  <th>Goles</th>
                  <th>Cancha</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Acción</th>
                </tr>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once('../controller/listarEncuentros.php');
              //include_once('../controller/listarTecnicos.php');
              //include_once('../controller/listar_ciudades.php');  
              foreach($record as $registro){  
              ?> 
              <tr class="">
                <td scope="row"><?php echo $registro[0];?></td>
                <td><?php echo $registro[1];?></td>
                <td><?php echo $registro[2];?></td>
                <td><?php echo $registro[3];?></td>
                <td><?php echo $registro[4];?></td>
                <td><?php echo $registro[5];?></td>
                <td><?php echo $registro[6];?></td>
                <td><?php echo $registro[7];?></td>
                
                
                <td><a href="../controller/eliminarEncuentro.php?txtcodigo=<?php echo $registro[0];?>"><button>Eliminar</button></a>
                <td><button>
                <form action="../controller/editarEncuentro.php"  method="POST"> 
                <details>
                  <summary>Editar</summary>
                  <div class="col-md-8">
                      <input type="hidden" class="form-control mb-3" name="cod_encuentro" placeholder="Numero de identificacion" value="<?php echo $registro[0]?>">
                      <input type="hidden" class="form-control mb-3" name="cod_local" placeholder="Nombres" value="<?php echo $registro[1]?>">
                      <input type="text" class="form-control mb-3" name="cant_goles_local" placeholder="Apellidos" value="<?php echo $registro[2]?>">
                      <input type="hidden" class="form-control mb-3" name="cod_visitante" placeholder="Dorsal" value="<?php echo $registro[3]?>">
                      <input type="text" class="form-control mb-3" name="cant_goles_visitante" placeholder="Edad" value="<?php echo $registro[4]?>">
                      <input type="hidden" class="form-control mb-3" name="cod_cancha" placeholder="Posicion" value="<?php echo $registro[5]?>">
                      <input type="date" class="form-control mb-3" name="fecha" placeholder="Codigo equipo" value="<?php echo $registro[6]?>">
                      <input type="time" class="form-control mb-3" name="hora" placeholder="Codigo equipo" value="<?php echo $registro[7]?>">
                      <a href="../controller/editarEncuentro.php?txtcodigo=<?php echo $registro[0];?>"><input type="submit" class="btn btn-primary" value="Actualizar"></a>   
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