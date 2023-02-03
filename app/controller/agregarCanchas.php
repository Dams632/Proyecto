<?php
    error_reporting(E_ERROR);
    $dbconn = pg_connect("postgresql://postgres:YgonU3pdXNxE32wD5Zcy@containers-us-west-63.railway.app:7471/railway")
    or die("Could not connect");
    echo "Connected successfully";


if (isset($_GET['agregarC'])) {
    $nombreCancha = $_GET['agregarCancha'];
    $capacidadCancha = $_GET['agregarCapacidad'];
    $query = ("select nombre,capacidad from canchas where capacidad = '".$capacidadCancha."';");
  $buscando=pg_query($dbconn,$query);
  if(pg_num_rows($buscando)==1){
    header("location: ../view/html/canchas.html");
 }
    //$queryAgregar = ("insert into canchas (nombre,capacidad) values('".$nombreCancha."',".(int) $capacidadCancha.");");
   // $agregar=pg_query($dbconn, $queryAgregar);
    echo 'Se realizó correctamente el registro';
}
    else if(isset($_POST['buscarC'])){
        $codigoCancha = $_POST['codCancha'];
        $nombreCancha=$_POST['modificarCancha'];
        $capacidadCancha = $_POST['capacidadCancha'];
        $consultar=pg_query($dbconn,$buscar);
        echo 'Se realizó la consulta';
        if(isset($codigoCancha)){
            $buscar = ('select cod_cancha, nombre, capacidad from canchas where cod_chancha='.  $codigoCancha . ';');
            }
            
        }
?>