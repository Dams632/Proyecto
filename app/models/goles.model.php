<?php
require_once "../config/conexion.php";
class Goles extends Conectar
{
    public static function mostrarGoles()
    {
        try {
            $sql = "SELECT * FROM goles";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
            /*
            echo '<table>';
            echo '<tr><th>User</th><th>Tipo</th><th>Nombre</th></tr>';
            foreach ($result as $row) {
                echo '<tr>';
                echo '<td>' . $row['user'] . '</td>';
                echo '<td>' . $row['tipo'] . '</td>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '</tr>';
                }
            echo '</table>';
            */
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarGoles($data){
        try {
            $id_jugador=$data['id_jugador'];
            $id_encuentro=$data['id_encuentro'];           
            $goles=$data['goles'];
            $minuto = $data['minuto'];
            $descripcion = $data['descripcion'];
            $periodo= $data['periodo'];
            $sql = "INSERT INTO goles(id_jugador,id_encuentro,goles,minuto,descripcion,periodo) VALUES (:id_jugaor,:id_encuentro,:goles,:minuto,:descripcion,:periodo);";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_jugador',$id_jugador);
            $stmt->bindParam(':id_encuentro', $id_encuentro);
            $stmt->bindParam(':goles', $goles);
            $stmt->bindParam(':minuto',$minuto);
            $stmt->bindParam(':descripcion',$descripcion);
            $stmt->bindParam(':periodo',$periodo);
            $stmt->execute();
            echo 'Se insertaron los datos del usuario';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarGoles($data){
        try{
            $sql = "UPDATE goles SET id_jugador=:id_jugador,id_encuentro=:id_encuentro,goles=:goles,minuto=:minuto,descripcion=:descripcion,periodo=:periodo WHERE id_jugador=:id_jugador and id_encuentro=:id_jugador and minuto=:minuto";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_jugador', $data['id_jugador']);
            $stmt->bindParam(':Id_encuentro',$data['id_encuentro']);
            $stmt->bindParam(':goles',$data['goles']);  
            $stmt->bindParam(':minuto',$data['minuto']);  
            $stmt->bindParam(':descripcion',$data['descripcion']);  
            $stmt->bindParam(':periodo',$data['periodo']);  
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarGoles($data){
        try {
            $sql = "DELETE FROM goles WHERE id_jugador=:id_jugador and id_encuentro=:id_jugador and minuto=:minuto";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id_jugador', $data['id_jugador']);
            $stmt->bindParam(':id_encuentro', $data['id_encuentro']);
            $stmt->bindParam(':minuto', $data['minuto']);
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
