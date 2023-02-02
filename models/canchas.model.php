<?php
require_once "/home/dams/Documentos/GitHub/Proyecto/config/conexion.php";

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
              echo '<td>' . $row['column_1'] . '</td>';
              echo '<td>' . $row['column_2'] . '</td>';
              echo '<td>' . $row['column_3'] . '</td>';
              echo '</tr>';
            }
            echo '</table>';
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

}
//Canchas::mostrarCanchas();
?>