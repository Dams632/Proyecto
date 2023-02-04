<?php
require_once "../config/conexion.php";

class Canchas extends Conectar{
    public static function mostrarEquipos(){
        try {
            $sql= "select * from  equipos";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            return $resultado;
            //echo "vas mejor";
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarEquipos($data){
        try {
            $sql = "INSERT INTO equipos (nombre,cod_ciudad,id_tecnico) VALUES (:nombre,:cod_ciudad,:id_tecnico)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':cod_ciudad', $data['cod_ciudad']);
            $stmt->bindParam(':id_tecnico', $data['id_tecnico']);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarEquipos($data){
        try{
            $sql = "UPDATE equipos SET nombre=:nombre, cod_ciudad=:cod_ciudad, id_tecnico=:id_tecnico WHERE cod_equipo=:cod_equipo";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_equipo', $data['cod_equipo']);
            $stmt->bindParam(':nombre',$data['nombre']);
            $stmt->bindParam(':cod_ciudad',$data['cod_ciudad']);
            $stmt->bindParam(':id_tecnico',$data['id_tecnico']);
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
            $stmt->bindParam(':cod_equipo', $data['cod_equipo']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
//Canchas::mostrarEquipos();
?>