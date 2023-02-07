<?php
require_once "../config/conexion.php";
class Usuario extends Conectar
{
    public static function mostrarUsuarios()
    {
        try {
            
            $sql = "SELECT * FROM usuarios";
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
    public static function guardarUsuarios($data){
        try {
            print_r($data);
            $user=$data['user'];
            $tipo=$data['tipo'];
            $nombre=$data['nombre'];
            $pass = $data['contrasenia'];
            $sql = "INSERT INTO usuarios(\"user\",\"password\",\"tipo\",\"nombre\") VALUES (:user,:contrasenia,:tipo,:nombre);";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user',$user);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':contrasenia',$pass);
            $stmt->execute();
            echo 'Se insertaron los datos del usuario';
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function actualizarUsuarios($data){
        try{
            $sql = "UPDATE usuarios SET tipo=:tipo, nombre=:nombre WHERE 
            \"user\"=:user";
            $stmt=Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data['user']);
            $stmt->bindParam(':tipo',$data['tipo']);
            $stmt->bindParam(':nombre',$data['nombre']);  
            echo 'Se actualizaron los datos';
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
    public static function eliminarUsuarios($data){
        try {
            $sql = "DELETE FROM usuarios WHERE \"user\"=:user";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    public static function buscarDato($data){
        try{
            $sql="SELECT * FROM usuarios WHERE \"user\"=:user";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $th){
            $th->getMessage();
        }
    }
    

}
Usuario::mostrarUsuarios();
?>
