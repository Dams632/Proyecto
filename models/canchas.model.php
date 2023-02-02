<?php
require_once "/home/dams/Documentos/GitHub/Proyecto/config/conexion.php";

class Canchas extends Conectar{
    public static function mostrarCanchas(){
        try {
            $sql= "select * from  canchas";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            echo "vas mejor";
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

}
//Canchas::mostrarCanchas();
?>