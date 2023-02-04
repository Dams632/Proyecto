<?php
require_once "../config/conexion.php";

class Ciudades extends Conectar{
    public static function mostrarCiudades(){
        try {
            $sql= "select * from  ciudades";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            return $resultado;
            //echo "vas mejor";
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarCiudad($data){
        try {
            $sql = "INSERT INTO ciudades (nombre) VALUES (:nombre)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarCiudades($data){
        try{
            $sql = "UPDATE canchas SET nombre=:nombre WHERE cod_ciudad=:cod_ciudad";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_ciudad', $data['cod_ciudad']);
            $stmt->bindParam(':nombre',$data['nombre']);
            echo 'Se actializaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarCiudades($data){
        try {
            $sql = "DELETE FROM ciudades where cod_ciudad=:cod_ciudad";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_ciudad', $data['cod_ciudad']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
//Canchas::mostrarCanchas();
?>