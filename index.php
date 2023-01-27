<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        $dbconn = pg_connect("postgresql://postgres:YgonU3pdXNxE32wD5Zcy@containers-us-west-63.railway.app:7471/railway")
        or die("Could not connect");
        echo "Connected successfully";?>
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
        <button type="button" onclick="<?php
            $prueba= pg_query($dbconn,"insert into ciudades(cod_ciudad,nombre) values(256,'Villavicencio')");
            //$query = "INSERT INTO ciudades (cod_ciudad, nombre) VALUES (256, 'Villavicencio')";
            /*if ($dbconn->query($sql) === TRUE) {
                echo "New record created successfully";}*/
        ?>">Click Me!</button>
    </body>
</html>
