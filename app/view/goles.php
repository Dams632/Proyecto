<!DOCTYPE html>
<html>
  <head>
    <title>Goles</title>
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
                    <a href="../view/equipos.php">Equipos</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/canchas.php">Canchas</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/puntuacion.php">Puntuacion</a>
                </li>
                <li class="menu-nav">
                    <a href="../view/jugadores.php">Jugadores</a>
                </li>
            </ul>
        </nav>
    </header>
  <div class="container mt-5">
     <div class="row">                   
        <div class="col-md-3">
            <h1>Ingrese datos</h1>
              <form action="../controller/insertarGoles.php"  method="POST">
                    <input type="text" class="form-control mb-3" name="id_gol" placeholder="codigo de Gol">
                    <div class="row">                       
                        <select name="id_jugador">   
                                 <option value="">Seleccione un Jugador</option>
                                
                                 <?php
                                 include_once('../controller/listarJugadores.php');
                                    foreach ($record as $registro) {
                                        ?> 
                                    
                                     <option  value="<?php echo $registro[0];?>"> <?php echo $registro[1]." ".$registro[2]; ?></option> </td>
                                     <?php }?>
                        </select>                       
                    </div>
                    <br>
                    <div class="row">                       
                        <select name="id_encuentro">   
                                 <option value="">Seleccione el Encuentro</option>
                                
                                 <?php
                                 include_once('../controller/listarEncuentros.php');
                                    foreach ($record as $registro) {
                                        ?> 
                                    
                                     <option  value="<?php echo $registro[0];?>"> <?php echo $registro[0]; ?></option> </td>
                                     <?php }?>
                        </select>                       
                    </div>
                    <br>

                    <div class="row">                       
                        <select name="periodo">   
                                 <option value="">Seleccione el periodo</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                
                        </select>                       
                    </div>
                    <br>
                    
                    <div class="row">   
                                
                        <select name="minuto">   
                                 <option value="">Seleccione el minuto</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>
                                 <option value="9">9</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="17">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                
                        </select>                       
                    </div>
                    <br>  
                    <textarea name="descripcion" rows="5" cols="40" placeholder="Descripcion del gol"></textarea>
                    <input type="submit" class="btn btn-primary">
              </form>
        </div>

        <div class="col-md-8">
          <table class="table" >
            <thead class="table-success table-striped" >
              <tr>
                <tr>
                  <th>Jugador</th>
                  <th>Encuentro</th>
                  <th>Periodo</th>
                  <th>Minuto</th>
                  <th>Descripcion</th>
                  <th>Acción</th>
                </tr>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once('../controller/listarGoles.php');
              //include_once('../controller/listarTecnicos.php');
              //include_once('../controller/listar_ciudades.php');  
              foreach($record as $registro){  
              ?> 
              <tr class="">
                <td scope="row"><?php echo $registro[7]." ".$registro[8];?></td>
                <td><?php echo $registro[2];?></td>
                <td><?php echo $registro[3];?></td>
                <td><?php echo $registro[4];?></td>
                <td><?php echo $registro[5];?></td>
                
                
                <td><a href="../controller/eliminarGoles.php?txtcodigo=<?php echo $registro[0];?>"><button>Eliminar</button></a>
                <td><button>
                <form action="../controller/actualizarJugador.php"  method="POST"> 
                <details>
                  <summary>Editar</summary>
                  <div class="col-md-8">
                      <input type="hidden" class="form-control mb-3" name="id_jugador" placeholder="Numero de identificacion" value="<?php echo $registro[0]?>">
                      <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $registro[1]?>">
                      <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $registro[2]?>">
                      <input type="text" class="form-control mb-3" name="dorsal" placeholder="Dorsal" value="<?php echo $registro[3]?>">
                      <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $registro[4]?>">
                      <input type="text" class="form-control mb-3" name="posicion" placeholder="Posicion" value="<?php echo $registro[5]?>">
                      <input type="text" class="form-control mb-3" name="cod_equipo" placeholder="Codigo equipo" value="<?php echo $registro[6]?>">v
                      <a href="../controller/actualizarJugador.php?txtcodigo=<?php echo $registro[0];?>"><input type="submit" class="btn btn-primary" value="Actualizar"></a>   
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