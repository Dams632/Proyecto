<?php
require_once "../config/conexion.php";
    class login extends Conectar{
        public static function login($data){
            $sql = "SELECT tipo FROM usuarios WHERE \"user\"=:user AND password=:password";
            $stmt = Conectar::getConnection()->prepare($sql);
            $stmt->bindParam(':user', $data['user']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->execute();
            if($stmt->execute()==2)
                header("Location: ../view/admin.php");
            else
                header("Location: ../view/admin.php");
            
            

        }
    }

    
?>
