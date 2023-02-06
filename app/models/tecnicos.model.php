<?php
require_once "../config/conexion.php";

class Tecnicos extends Conectar{
    public static function mostrarTecnicos(){
        try {
            $sql= "select * from  director_tecnico";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            return $resultado;
            //echo "vas mejor";
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function mostrarNombre($data){
        try{
            $sql="SELECT nombres from director_tecnico where id_tecnico=:id_tecnico";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->bindParam(':id_tecnico',$data);
            $stml->execute();
            $resultado = $stml->fetch();
            return $resultado;
        }catch(PDOException $th){}
    }
    public static function guardarTecnico($id_tecnico,$nombres, $apellidos,$edad){
        try {
            $sql = "INSERT INTO director_tecnico (id_tecnico, nombres, apellidos, edad) VALUES (:id_tecnico, :nombres, :apellidos, :edad)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_tecnico',$id_tecnico);
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':edad', $edad);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarTecnico($id_tecnico,$nombres,$apellidos,$edad){
        try{
            $sql = "UPDATE director_tecnico SET nombres=:nombres, apellidos=:apellidos, edad=:edad WHERE id_tecnico=:id_tecnico";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_tecnico', $id_tecnico);
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':edad', $edad);
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarTecnico($data){
        try {
            $sql = "DELETE FROM director_tecnico where id_tecnico=:id_tecnico";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_tecnico', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
?>