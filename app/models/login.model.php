<?php
require_once "../config/conexion.php";
    class login extends Conectar{
        public static function login($data){
            print_r($data);
            $username = $data['username'];
            $password = $data['password'];
            $sql = "SELECT tipo FROM usuarios WHERE user" . $username . "AND password=" . $password . ";";
            print_r($sql);
            $stmt= Conectar::getConnection()->prepare($sql);
            $stmt->execute();
            //$resultado=$stmt->fetchAll();
            //print_r($resultado);
            

        }
    }

    
?>
