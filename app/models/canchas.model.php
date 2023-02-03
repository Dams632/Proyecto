<?php
require_once "../config/conexion.php";

class Canchas extends Conectar{
    public static function mostrarCanchas(){
        try {
            $sql= "select * from  canchas";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            echo "vas mejor";
            
            echo '<table>';
            echo '<tr><th>Codigo Cancha</th><th>Nombre</th><th>Capacidad</th></tr>';
            foreach ($resultado as $row) {
                echo '<tr>';
                echo '<td>' . $row['cod_cancha'] . '</td>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['capacidad'] . '</td>';
                echo '</tr>';
                }
            echo '</table>';
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarCancha($data){
        try {
            $sql = "INSERT INTO canchas (:nombre,:capacidad) VALUES (:nombre,:capacidad)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':capacidad', $data['capacidad']);
            $stmt->execute();
            echo 'Se insertaron los datos';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarCancha($data){
        try{
            $sql = "UPDATE canchas SET nombre=:nombre, capacidad=:capacidad WHERE cod_cancha=:cod_cancha";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_cancha', $data['cod_cancha']);
            $stmt->bindParam(':nombre',$data['nombre']);
            $stmt->bindParam(':capacidad',$data['capacidad']);
            echo 'Se actializaron los datos';
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
            $stmt->bindParam(':cod_cancha', $data['cod_cancha']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }

}
Canchas::mostrarCanchas();
?>