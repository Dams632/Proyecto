<?php
require_once "../../config/conexion.php";
class Encuentros extends Conectar
{
    public static function mostrarEncuentros()
    {
        try {
            $sql = "SELECT * FROM encuentros";
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
    public static function guardarEncuentros($data){
        try {
            $cod_encuentro=$data['cod_encuentro'];
            $cod_local=$data['cod_local'];           
            $cant_g_local=$data['cant_goles_local'];
            $cod_visitante = $data['cod_visitante'];
            $cant_g_visitante = $data['cant_goles_visitante'];
            $cod_cancha = $data['cod_cancha'];
            $fecha = $data['fecha'];
            $hora= $data['hora'];
            $sql = "INSERT INTO encuentros(cod_encuentro,cod_local,cant_goles_local,cod_visitante,cant_goles_visitante,cod_cancha,fecha,hora) VALUES (:cod_encuentro,:cod_local,:cant_goles_local,:cod_visitante,:cant_goles_visitante,:cod_cancha,:fecha,:hora);";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_encuentro',$cod_encuentro);
            $stmt->bindParam(':cod_local', $cod_local);
            $stmt->bindParam(':cant_goles_local', $cant_g_local);
            $stmt->bindParam(':cod_visitante',$cod_visitante);
            $stmt->bindParam(':cant_goles_visitante',$cant_g_visitante);
            $stmt->bindParam(':cod_cancha',$cod_cancha);
            $stmt->bindParam(':fecha',$fecha);
            $stmt->bindParam(':hora',$hora);
            $stmt->execute();
            echo 'Se insertaron los datos del usuario';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarEncuentros($data){
        try{
            $sql = "UPDATE encuentros SET cod_encuentro=:cod_encuentro,cod_local=:cod_local,cant_goles_local=:cant_goles_local,cod_visitante=:cod_visitante,cant_goles_visitante=:cant_goles_visitante,cod_cancha=:cod_cancha,fecha=:fecha, hora=:hora WHERE cod_encuentro=:cod_encuentro";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_encuentro', $data['cod_encuentro']);
            $stmt->bindParam(':cod_local',$data['cod_local']);
            $stmt->bindParam(':cant_goles_local',$data['cant_goles_local']);  
            $stmt->bindParam(':cod_visitante',$data['cod_visintante']);  
            $stmt->bindParam(':cant_goles_visitante',$data['cant_goles_visitante']);  
            $stmt->bindParam(':cod_cancha',$data['cod_cancha']);
            $stmt->bindParam(':fecha',$data['fecha']); 
            $stmt->bindParam(':hora',$data['hora']);   
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarEncuentros($data){
        try {
            $sql = "DELETE FROM encuentros WHERE cod_encuentro=:cod_encuentro";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_encuentro', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    public static function buscarDato($data){
        try{
            $sql="SELECT * FROM encuentros WHERE cod_encuentro=:cod_encuentro";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':cod_encuentro', $data);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    

}
Encuentros::mostrarEncuentros();
?>
