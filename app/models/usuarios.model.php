<?php
require_once "../config/conexion.php";
class Usuario extends Conectar
{
    public static function mostrarUser()
    {
        try {
            $sql = "SELECT * FROM usuarios";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
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
    public static function guardarAdmin($data){
        try {
            $sql = "INSERT INTO usuarios (user,tipo,nombre) VALUES (:user,:tipo,:nombre)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data['user']);
            $stmt->bindParam(':tipo', $data['tipo']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->execute();
            echo 'Se insertaron los datos del admin';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarUser($data){
        try{
            $sql = "UPDATE usuarios SET tipo=:tipo, nombre=:nombre WHERE user=:user";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data['user']);
            $stmt->bindParam(':tipo',$data['tipo']);
            $stmt->bindParam(':nombre',$data['nombre']);  
            echo 'Se actializaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarAdmin($data){
        try {
            $sql = "DELETE FROM usuarios WHERE user=:user";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data['user']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    

}
Usuario::mostrarUser();
?>