<?php 
    class Conectar {
        public $host = "containers-us-west-63.railway.app";
        public $dbname = 'railway';
        public $port = '7471';
        public $user = 'postgres';
        public $password = 'YgonU3pdXNxE32wD5Zcy';
        public $connect;

        public static function getConnection(){
            try {
                $conexion= new Conectar();
                $conexion->connect= new PDO("pgsql:host={$conexion->host}; port={$conexion->port}; 
                dbname={$conexion->dbname}", $conexion->user,$conexion->password);
                $conexion->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion->connect;
            //    echo "Buena conexion, crack";

            } catch (PDOException $e) {
                echo "Error: ". $e->getMessage();
            }
        }
    }
//Conectar::getConnection();
