<?php
require_once "../config/conexion.php";
    class login extends Conectar{
    public static function login($data)
    {
        try {
            $sql = "SELECT tipo FROM usuarios WHERE \"user\"=:user AND password=  :password";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data['user']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->execute();
            $resultado = $stmt->fetch();
           // print_r($resultado);
            if ($resultado!=NULL) {
                if ($resultado[0] == 2) {
                    header("Location: ../view/logTecnico.php");
                } else if ($resultado[0] == 1) {
                    header("Location: ../view/admin.php");
                }
                return true;
            } else {
                //print_r("El usuario no exite");
            }
        }
        catch(PDOException $th){
            $th->getMessage();
    }

    }
        
    }

    
?>
