<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        $dbconn = pg_connect("postgresql://postgres:lGMzkadcIcd4VwrSzn88@containers-us-west-126.railway.app:6625/railway")
        or die("Could not connect");
        echo "Connected successfully";
        ?>
        <?php 
            $resultado= pg_query($dbconn,"SELECT nombre,capacidad FROM canchas");
            if(!$resultado){
                echo "Error";
                exit;
            }
            while( $obj = pg_fetch_object($resultado) )
                         echo $obj->capacidad." - ".$obj->nombre."<br />";
            ?>
        ?>
        <h1><?php echo "this mensage nuver";?></h1>
    </body>
</html>
