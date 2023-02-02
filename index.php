<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        error_reporting(E_ERROR);
         $dbconn = pg_connect("postgresql://postgres:YgonU3pdXNxE32wD5Zcy@containers-us-west-63.railway.app:7471/railway")
        or die("Could not connect");
        echo "Connected successfully";
         if($_POST){   
             $result = pg_query($dbconn, "INSERT INTO ciudades (cod_ciudad,nombre) VALUES (". ((int)$_POST['cod_ciudad']) .",'" . ($_POST['nombre']) . "')");
            if (!$result) {
              echo "Query: Un error ha occurido.\n";
              exit;
            }
    }      
        ?>
        
<form action="" method="post">
<label>Codigo de Ciudad</label>
<input type="text" name="cod_ciudad" value="" class="txtbox long"/>
<label>Nombre de ciudad</label>
<input type="text" name="nombre" value="" class="txtbox long"/>

<br />
<br />
<input type="submit" value="Guardar" class="btn"/>
</form>

<a href="conexion.php">cliuckme</a>

    </body>
</html>
