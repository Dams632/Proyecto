<?php
require_once "../config/conexion.php";
require_once "../models/equipos.modelo.php";

class Jugadores extends Conectar{
    public static function mostrarJugadores(){
        try {
            $sql= "select * from  jugadores j INNER JOIN equipos e on j.cod_equipo=e.cod_equipo";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
           // $stml->bindParam(':cod_equipo', $cod_equipo);
            $resultado=$stml->fetchAll();
            return $resultado;
            //echo "vas mejor";
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    /*public static function mostrarNombre($data){
        try{
            $sql="SELECT nombres from director_tecnico where id_tecnico=:id_tecnico";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->bindParam(':id_tecnico',$data);
            $stml->execute();
            $resultado = $stml->fetch();
            return $resultado;
        }catch(PDOException $th){}
    }*/
    public static function guardarJugadores($id_jugador, $nombres, $apellidos, $dorsal, $edad, $posicion, $cod_equipo){
        try {
            $sql = "INSERT INTO jugadores (id_jugador, nombres, apellidos, dorsal, edad, posicion, cod_equipo) VALUES (:id_jugador, :nombres, :apellidos, :dorsal, :edad, :posicion, :cod_equipo)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_jugador', $id_jugador);
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':dorsal', $dorsal);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':posicion', $posicion);
            $stmt->bindParam(':cod_equipo', $cod_equipo);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarJugador($id_jugador,$nombres,$apellidos,$dorsal,$edad, $posicion, $cod_equipo){
        try{
            $sql = "UPDATE jugadores SET nombres=:nombres, apellidos=:apellidos, dorsal=:dorsal,edad=:edad,posicion=:posicion, cod_equipo=:cod_equipo WHERE id_jugador=:id_jugador";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_jugador', $id_jugador);
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':dorsal', $dorsal);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':posicion', $posicion);
            $stmt->bindParam(':cod_equipo',$cod_equipo);
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarJugador($data){
        try {
            $sql = "DELETE FROM jugadores where id_jugador=:id_jugador";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_jugador', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
?>