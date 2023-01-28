<?php
  echo "Hola mundo";
  error_reporting(E_ERROR);
  $dbconn = pg_connect("postgresql://postgres:YgonU3pdXNxE32wD5Zcy@containers-us-west-63.railway.app:7471/railway")
  or die("Could not connect");
  echo "Connected successfully";

  if($dbconn){
    echo 'No se ha podido conectar con el servidor';
  }
  echo 'Primer corte';
  $query = "select nombre from administradores where nombre ='admin@gmail.com'";
  echo 'Segundo corte';
  $username=$_POST['username'];
  $password=$_POST['password'];
  $buscando=pg_query($dbconn,$query);

 if(pg_num_rows($buscando)>0){
    echo 'Se encontro el registro';
 }


  //   $nombre=123;
  //   function insertarCancha($nombre):int{
  //       return $nombre;
  //   }

   
    
?>
