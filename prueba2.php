<html>
    <title>Pruebas</title>
    <head>  HolaBUnas</head>
    <body>
        <?php 
       echo "Hola buenas nochges xd";
      /* $dbconn = pg_connect("postgresql://postgres:lGMzkadcIcd4VwrSzn88@containers-us-west-126.railway.app:6625/railway");  
        if (!$dbconn){  
        echo "<center><h1>Doesn't work =(</h1></center>";  
        }else{  
         echo "<center><h1>Good connection</h1></center>";  
        }
        pg_close($dbconn);*/
       
        $dbconn = pg_connect("postgresql://postgres:lGMzkadcIcd4VwrSzn88@containers-us-west-126.railway.app:6625/railway")
        or die("Could not connect");
        echo "Connected successfully";
        echo "Que sueñero";
       /* function listarPersonas( $dbconn )
    {
        $sql = "SELECT * FROM canchas ORDER BY cod_cancha";
        $ok = true;
        // Ejecutar la consulta:
         $rs = pg_query( $dbconn, $sql );
        if( $rs )
        {
            // Obtener el número de filas:
             if( pg_num_rows($rs) > 0 )
            {
                echo "<p/>LISTADO DE PERSONAS<br/>";
                echo "===================<p />";
                // Recorrer el resource y mostrar los datos:
                 while( $obj = pg_fetch_object($rs) )
                     echo $obj->cod_cancha." - ".$obj->nombre."<br />";
            }
            else
                echo "<p>No se encontraron canchas</p>";
        }
        else
            $ok = false;
        return $ok;
    }*/
        $resultado= pg_query($dbconn,"SELECT nombre,capacidad FROM canchas");
        if(!$resultado){
            echo "Error";
            exit;
        }
        while( $obj = pg_fetch_object($resultado) )
                     echo $obj->cod_cancha." - ".$obj->nombre."<br />";
        ?>
    </body>
</html>
