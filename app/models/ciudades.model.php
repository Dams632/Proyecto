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
    public static function guardarCiudad($cod_ciudad,$nombre){
        try {
            $sql = "INSERT INTO ciudades (cod_ciudad,nombre) VALUES (:cod_ciudad,:nombre)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_ciudad', $cod_ciudad);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarCiudad($cod_ciudad,$nombre){
        try{
            $sql = "UPDATE ciudades SET nombre=:nombre WHERE cod_ciudad=:cod_ciudad";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_ciudad', $cod_ciudad);
            $stmt->bindParam(':nombre', $nombre);
            echo 'Se actualizaron los datos';
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
            $stmt->bindParam(':cod_ciudad', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
?>