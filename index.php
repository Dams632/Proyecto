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
        <?php 
            $dbconn = "INSERT INTO ciudades (cod_ciudad, nombre)
            VALUES (256, 'Villavicencio')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";}
        ?>

        <h1><?php echo "this mensage nuver";?></h1>
        <button type="button">Click Me!</button>
    </body>
</html>
