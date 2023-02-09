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
                    <a href="../view/canchas.php">Canchas</a>
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
              <form action="../controller/agregarEquipo.php"  method="POST">
                    <input type="text" class="form-control mb-3" name="cod_equipo" placeholder="Codigo de equipo">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <div class="row">                       
                        <select name="cod_ciudad">   
                                 <option value="">Seleccione una ciudad</option>
                                
                                 <?php
                                 include_once('../controller/listar_ciudades.php');
                                    foreach ($record as $registro) {
                                        ?> 
                                    
                                     <option  value="<?php echo $registro[0];?>"> <?php echo $registro[1]; ?></option> </td>
                                     <?php }?>
                        </select>                       
                    </div>
                        <br>
                        <div class="row">                       
                        <select name="id_tecnico">   
                             <table>
                                <tbody>
                                 <option value="">Seleccione un Tecnico</option>
                                
                                 <?php
                                 include_once('../controller/listarTecnicos.php');
                                    foreach ($record as $registro) {
                                        ?> 
                                    <tr class="">
                                     <td> <option value="<?php echo $registro[0];?>"> <?php echo $registro[1]." ".$registro[2]; ?></option> </td>
                                     <?php }?>             
                                </tbody>
                            </table>
                        </select>                       
                    </div>    
                    
                    <input type="submit" class="btn btn-primary">
              </form>
        </div>

        <div class="col-md-8">
          <table class="table" >
            <thead class="table-success table-striped" >
              <tr>
                <tr>
                  <th>Codigo de equipo</th>
                  <th>Nombre de Equipo</th>
                  <th>Ciudad de Equipo</th>
                  <th>Tecnico</th>
                  <th>Acción</th>
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
                <td><?php echo $registro[5]." ".$registro[6];?></td>
                
                
                <td><a href="../controller/eliminarEquipo.php?txtcodigo=<?php echo $registro[0];?>"><button>Eliminar</button></a>
                <td><button>
                <form action="../controller/actualizarEquipo.php"  method="POST"> 
                <details>
                  <summary>Editar</summary>
                  <div class="col-md-8">
                      <input type="hidden" class="form-control mb-3" name="cod_equipo" placeholder="Numero de identificacion" value="<?php echo $registro[0]?>">
                      <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $registro[1]?>">
                      <input type="text" class="form-control mb-3" name="cod_ciudad" placeholder="Ciudad" value="<?php echo $registro[2]?>">
                      <input type="text" class="form-control mb-3" name="id_tecnico" placeholder="Tecnico" value="<?php echo $registro[3]?>">
                      <a href="../controller/actualizarEquipo.php?txtcodigo=<?php echo $registro[0];?>"><input type="submit" class="btn btn-primary" value="Actualizar"></a>   
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