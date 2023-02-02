<?php
require_once "./config/conexion.php";

class Canchas extends Conectar{
    public static function mostrarCanchas(){
        try {
            $sql= "select from * canchas";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

}

?>