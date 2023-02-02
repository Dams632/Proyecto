<?php
  error_reporting(E_ERROR);
  $dbconn = pg_connect("postgresql://postgres:YgonU3pdXNxE32wD5Zcy@containers-us-west-63.railway.app:7471/railway")
  or die("Could not connect");
  echo "Connected successfully";

  $username=$_POST['username'];
  $password=$_POST['password'];
  $query = ("select nombre from administradores where nombre = '".$username."'");
  $buscando=pg_query($dbconn,$query);

 if(pg_num_rows($buscando)==1){
    echo 'Se encontro el registro';
 }
 else{
  echo 'No hay registros con esa informacion'; 
 }


  //   $nombre=123;
  //   function insertarCancha($nombre):int{
  //       return $nombre;
  //   }

   
    
?>
