<?php
require_once "/home/dams/Documentos/GitHub/Proyecto/app/config/conexion.php";

class Canchas extends Conectar{
    public static function mostrarCanchas(){
        try {
            $sql= "select * from  canchas";
            $stml= Conectar::getConnection()->prepare($sql);
            $stml->execute();
            $resultado=$stml->fetchAll();
            echo "vas mejor";
            
            echo '<table>';
            echo '<tr><th>Column 1</th><th>Column 2</th><th>Column 3</th></tr>';
          foreach ($resultado as $row) {
              echo '<tr>';
              echo '<td>' . $row['cod_cancha'] . '</td>';
              echo '<td>' . $row['nombre'] . '</td>';
              echo '<td>' . $row['capacidad'] . '</td>';
              echo '</tr>';
            }
            echo '</table>';
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

}
Canchas::mostrarCanchas();
?>