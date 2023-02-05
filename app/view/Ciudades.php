<!DOCTYPE html>
<html>
  <head>
    <title>Canchas</title>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
     <div class="row">                   
        <div class="col-md-3">
            <h1>Ingrese datos</h1>
              <form action="../controller/agregarCiudad.php"  method="POST">
                    <input type="text" class="form-control mb-3" name="cod_ciudad" placeholder="codigo de ciudad">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de ciudad">
                    <input type="submit" class="btn btn-primary">
              </form>
        </div>

        <div class="col-md-8">
          <table class="table" >
            <thead class="table-success table-striped" >
              <tr>
                <tr>
                  <th>Codigo de Ciudad</th>
                  <th>Nombre</th>
                  <th>Acción</th>
                </tr>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once('../controller/listar_ciudades.php');
              foreach($recordss as $registro){  
              ?> 
              <tr class="">
                <td scope="row"><?php echo $registro[0];?></td>
                <td><?php echo $registro[1];?></td>
                <td><a href="../controller/eliminarCiudad.php?txtcodigo=<?php echo $registro[0];?>"><button>Eliminar</button></a>
                <td><button>
                <form action="../controller/actualizarCiudad.php"  method="POST"> 
                <details>
                  <summary>Editar</summary>
                  <div class="col-md-8">
                      <input type="text" class="form-control mb-3" name="cod_ciudad" placeholder="codigo de cancha" value="<?php echo $registro[0]?>">
                      <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de cancha" value="<?php echo $registro[1]?>">
                      <a href="../controller/actualizarCiudad.php?txtcodigo=<?php echo $registro[0];?>"><input type="submit" class="btn btn-primary" value="Actualizar"></a>
                   
                    
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