<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <table>
            <a href="../../controller/insertarUsuarios.php"><button>Agregar</button></a>
            <thead></thead>
            <tr>
                <th>USER</th>
                <th>TIPO</th>
                <th>NOMBRE</th>
            </tr>
            <tbody>
               <?php 
               foreach($record as $registro){?>
               <tr>
                <td><?php echo$registro['user'];?></td>
                <td><?php echo$registro['tipo'];?></td>
                <td><?php echo$registro['nombre'];?></td>
                <td><a href="eliminar.php?txtcodigo=<?php echo $registro['user'];?>" role="button">Eliminar</a>
            |<a  href="../update/meseros.php?txtcodigo= <?php echo $registro['user'];?>" role="button">Editar</a></td>
          <?php } ?>
               </tr>
                
            </tbody>
        </table>
        <script src="../../assets/newcod.js"></script>
    </main>
    <footer></footer>
</body>
</html>