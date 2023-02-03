<?php
require_once "../config/conexion.php";
class Admin extends Conectar
{
    public static function mostrarAdmin()
    {
        try {
            $sql = "SELECT * FROM administradores";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            echo '<table>';
            echo '<tr><th>Codigo Cancha</th><th>Nombre</th><th>Capacidad</th></tr>';
            foreach ($result as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['contrasenia'] . '</td>';
                echo '</tr>';
                }
            echo '</table>';
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarAdmin($data){
        try {
            $sql = "INSERT INTO administradores (:nombre,:contrasenia) VALUES (:nombre,:contrasenia)";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':contrasenia', $data['constrasenia']);
            $stmt->execute();
            echo 'Se insertaron los datos del admin';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarAdmin($data){
        try{
            $sql = "UPDATE administradores SET nombre=:nombre, contrasenia=:contrasenia WHERE id=:id";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $data['id']);
            $stmt->bindParam(':nombre',$data['nombre']);
            $stmt->bindParam(':contrasenia',$data['contrasenia']);
            echo 'Se actializaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarAdmin($data){
        try {
            $sql = "DELETE FROM administradores WHERE id=:id";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    

}
Admin::mostrarAdmin();
?>
