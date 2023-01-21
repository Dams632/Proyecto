<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        $dbconn = pg_connect("postgresql://postgres:sWnGGNFqUD5XWcLNqPV9@containers-us-west-162.railway.app:5484/railway")
        or die("Could not connect");
        echo "Connected successfully";
        ?>
        <?php 
            $resultado= pg_query($dbconn,"SELECT nombre,cod_cancha FROM canchas");
            if(!$resultado){
                echo "Error";
                exit;
            }
            while( $obj = pg_fetch_object($resultado) )
                         echo $obj->cod_cancha." - ".$obj->nombre."<br />";
            ?>
        ?>
        <h1><?php echo "this mensage nuver";?></h1>
    </body>
</html>
