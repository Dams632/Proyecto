<?php
require_once "../config/conexion.php";

class Puntuacion extends Conectar{
    public static function mostrarPuntuacion(){
        try {
            $sql= "select * from  puntuacion p INNER JOIN  equipos e on (p.cod_equipo=e.cod_equipo)   ORDER BY puntos desc";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            return $resultado;
            //echo "vas mejor";
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    /*public static function mostrarPuntuacion($data){
        try{
            $sql="SELECT nombres from director_tecnico where id_tecnico=:id_tecnico";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->bindParam(':id_tecnico',$data);
            $stml->execute();
            $resultado = $stml->fetch();
            return $resultado;
        }catch(PDOException $th){}
    }*/
    public static function guardarPuntuacion($cod_equipo, $par_jugados, $victorias, $derrotas, $empates, $puntos){
        try {
            $sql = "INSERT INTO puntuacion (cod_equipo, par_jugados, victorias, derrotas, empates, puntos) VALUES (:cod_equipo, :par_jugados, :victorias, :derrotas, :empates,:puntos)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_equipo',$cod_equipo);
            $stmt->bindParam(':par_jugados',$par_jugados);
            $stmt->bindParam(':victorias',$victorias);
            $stmt->bindParam(':derrotas', $derrotas);
            $stmt->bindParam(':empates', $empates);
            $stmt->bindParam(':puntos', $puntos);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarPuntuacion($cod_equipo, $par_jugados, $victorias, $derrotas, $empates, $puntos){
        try{
            $sql = "UPDATE puntuacion SET par_jugados=:par_jugados, victorias=:victorias, derrotas=:derrotas, empates=:empates, puntos=:puntos WHERE cod_equipo=:cod_equipo";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_equipo', $cod_equipo);
            $stmt->bindParam(':par_jugados', $par_jugados);
            $stmt->bindParam(':victorias', $victorias);
            $stmt->bindParam(':derrotas', $derrotas);
            $stmt->bindParam(':empates', $empates);
            $stmt->bindParam(':puntos', $puntos);
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarPuntuacion($data){
        try {
            $sql = "DELETE FROM puntuacion where cod_equipo=:cod_equipo";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_equipo', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
?>