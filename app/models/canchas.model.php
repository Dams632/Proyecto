<?php
require_once "../config/conexion.php";

class Canchas extends Conectar{
    private $recordss;
    public static function mostrarCanchas(){
        try {
            $sql= "SELECT * FROM  canchas";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            return $resultado;            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarCancha($cod_cancha,$nombre,$capacidad){
        try {
            $sql = "INSERT INTO canchas (cod_cancha,nombre,capacidad) VALUES (:cod_cancha,:nombre,:capacidad)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_cancha', $cod_cancha);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':capacidad', $capacidad);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarCancha($cod_cancha,$nombre,$capacidad){
        try{
            $sql = "UPDATE canchas SET nombre=:nombre, capacidad=:capacidad WHERE cod_cancha=:cod_cancha";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_cancha', $cod_cancha);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':capacidad', $capacidad);
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarCancha($data){
        try {
            $sql = "DELETE FROM canchas where cod_cancha=:cod_cancha";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_cancha', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
//Canchas::mostrarCanchas();
?>