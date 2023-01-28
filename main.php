<?php
   
    $username=$_GET['username'];
    $password=$_GET['password'];
    
    switch($username){
        case 'admin':
            if($password=='enter')
                echo 'Hola bienvenido administrador';
            else
                echo 'Contraseña incorrecta';
            break;
        case 'gerente':
            if($password=='enter')
                echo 'Hola bienvenido gerente';
            else
                echo 'conseña incorrecta';
            break;
        default:
            echo 'Los datos no corresponden';
        }

    $nombre=123;
    function insertarCancha($nombre):int{
        return $nombre;
    }
    
?>
