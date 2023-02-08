<?php
require_once "../config/conexion.php";
class Goles extends Conectar
{
    public static function mostrarGoles()
    {
        try {
            $sql = "SELECT * FROM goles g INNER JOIN jugadores j on g.id_jugador=j.id_jugador";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarGoles($data){
        try {
            $id_gol=$data['id_gol'];
            $id_jugador=$data['id_jugador'];
            $id_encuentro=$data['id_encuentro']; 
            $periodo= $data['periodo'];          
            $minuto = $data['minuto'];
            $descripcion = $data['descripcion'];
            $sql = "INSERT INTO goles(id_gol,id_jugador,id_encuentro,periodo,minuto,descripcion) VALUES (:id_gol,:id_jugador,:id_encuentro,:periodo,:minuto,:descripcion);";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_gol',$id_gol);
            $stmt->bindParam(':id_jugador',$id_jugador);
            $stmt->bindParam(':id_encuentro', $id_encuentro);
            $stmt->bindParam(':periodo',$periodo);
            $stmt->bindParam(':minuto',$minuto);
            $stmt->bindParam(':descripcion',$descripcion);
            $stmt->execute();
            echo 'Se insertaron los datos del usuario';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarGoles($data){
        try{
            $id_gol=$data['id_gol'];
            $id_jugador=$data['id_jugador'];
            $id_encuentro=$data['id_encuentro']; 
            $periodo= $data['periodo'];          
            $minuto = $data['minuto'];
            $descripcion = $data['descripcion'];

            $sql = "UPDATE goles SET id_jugador=:id_jugador,id_encuentro=:id_encuentro,periodo=:periodo,minuto=:minuto,descripcion=:descripcion WHERE id_gol=:id_gol";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_gol',$id_gol);
            $stmt->bindParam(':id_jugador',$id_jugador);
            $stmt->bindParam(':id_encuentro', $id_encuentro);
            $stmt->bindParam(':periodo',$periodo);
            $stmt->bindParam(':minuto',$minuto);
            $stmt->bindParam(':descripcion',$descripcion);
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarGoles($data){
        try {
            $sql = "DELETE FROM goles WHERE id_gol=:id_gol";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_gol', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    public static function buscarDato($data){
        try{
            $sql="SELECT * FROM goles WHERE id_jugador=:id_jugador and id_encuentro=:id_jugador and minuto=:minuto";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_jugador', $data['id_jugador']);
            $stmt->bindParam(':id_encuentro', $data['id_encuentro']);
            $stmt->bindParam(':minuto', $data['minuto']);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    

}
Goles::mostrarGoles();
?>
