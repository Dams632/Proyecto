<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
         $dbconn = pg_connect("postgresql://postgres:YgonU3pdXNxE32wD5Zcy@containers-us-west-63.railway.app:7471/railway")
        or die("Could not connect");
        echo "Connected successfully";
        if($_POST){   
            $result = pg_query($dbconn, "INSERT INTO ciudades (cod_ciudad,nombre) VALUES (". ((int)$_POST['cod_ciudad']) .",'" . pg_escape_string($_POST['nombre']) . "')");
            if (!$result) {
              echo "Query: Un error ha occurido.\n";
              exit;
            }
    }
        if($prueba){
            echo "Ingresado";
        }
        
        ?>

        <?php 
            $resultado= pg_query($dbconn,"SELECT nombre,cod_cancha FROM canchas");
            if(!$resultado){
                echo "Error";
                exit;
            }
            while( $obj = pg_fetch_object($resultado) )
                         echo $obj->cod_cancha." - ".$obj->nombre."<br>";
        ?>
        

        <h1><?php echo "this mensage nuver";?></h1>
        <?php 
            
               
        ?>

<form action="" method="post">
<label>Nombre</label>
<input type="text" name="cod_ciudad" value="" class="txtbox long"/>
<label>apellido</label>
<input type="text" name="nombre" value="" class="txtbox long"/>

<br />
<br />
<input type="submit" value="Guardar" class="btn"/>
</form>



    </body>
</html>
