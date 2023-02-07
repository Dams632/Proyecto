<?php
require_once "../config/conexion.php";
require_once "../models/tecnicos.model.php";
class Equipos extends Conectar{
    public static function listarTecnicos(){
        try{
            $sql= "SELECT t.nombres,t.apellidos from director_tecnico t INNER JOIN equipos e on t.id_tecnico=e.id_tecnico";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado = $stml->fetchAll();
            return $resultado;

        }catch(PDOException $th){
            echo $th->getMessage();
        }

    }
    public static function mostrarEquipos(){
        try {
            $sql= "SELECT * from  equipos e INNER JOIN director_tecnico t on e.id_tecnico=t.id_tecnico";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            return $resultado;
            //echo "vas mejor";
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarEquipos($cod_equipo,$nombre,$cod_ciudad,$id_tecnico){
        try {
            $sql = "INSERT INTO equipos (cod_equipo,nombre,cod_ciudad,id_tecnico) VALUES (:cod_equipo,:nombre,:cod_ciudad,:id_tecnico)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_equipo', $cod_equipo);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':cod_ciudad', $cod_ciudad);
            $stmt->bindParam(':id_tecnico', $id_tecnico);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarEquipos($cod_equipo,$nombre,$cod_ciudad,$id_tecnico){
        try{
            $sql = "UPDATE equipos SET nombre=:nombre, cod_ciudad=:cod_ciudad, id_tecnico=:id_tecnico WHERE cod_equipo=:cod_equipo";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_equipo', $cod_equipo);
            $stmt->bindParam(':nombre',$nombre);
            $stmt->bindParam(':cod_ciudad',$cod_ciudad);
            $stmt->bindParam(':id_tecnico',$id_tecnico);
            echo 'Se actializaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarEquipos($data){
        try {
            $sql = "DELETE FROM equipos where cod_equipo=:cod_equipo";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_equipo', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
//Canchas::mostrarEquipos();
?>