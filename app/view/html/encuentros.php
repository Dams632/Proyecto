<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/general.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/general.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul class="bar-nav">
                <li class="menu-nav">
                    <a href="../admin.php">Inicio</a>
                </li>
                <li class="menu-nav">
                    <a href="../canchas.php">Canchas</a>
                </li>
                <li class="menu-nav">
                    <a href="">Ciudades</a>
                </li>
                <li class="menu-nav">
                    <a href="#services">Equipos</a>
                </li>
                <li class="menu-nav">
                    <a href="#gallery">Gallery</a>
                </li>
                <li class="menu-nav">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <form action="insertarEncuentro.php" method="POST">
                    <label for="">Codigo del encuentro: </label>
                    <input type="text" name="cod_encuentro">
                    <label for="">Codigo 
                         del local: </label>
                    <select name="cod_local" id="">
                        <?php include_once "listarEquipos.php"?>
                        <?php foreach($recordss as $registro){?>
                            <option value="<?php echo $registro[0];?>"><?php echo $registro[1]; ?></option>
                        <?php }?>
                    </select>   
                    <label for="">Cantidad de goles del local: </label>
                    <input type="text" name="cant_goles_local">
                    <label for="">Codigo del visitante: </label>
                    <select name="cod_visitante" id="">
                        <?php include_once "listarEquipos.php"?>
                        <?php foreach($recordss as $registro){?>
                        <option value="<?php echo $registro[0];?>"><?php echo $registro[1]; ?></option>
                        <?php }?>
                    </select>
                    <label for="">Cantidad goles del visitante: </label>
                    <input type="text" name="cant_goles_visitante">
                    <label for="">Codigo cancha: </label>
                    <select name="cod_cancha" id="">
                        <?php include_once "listar_cancha.php"?>
                        <?php foreach($recordss as $registro){?>
                        <option value="<?php echo $registro[0];?>"><?php echo $registro[1]; ?></option>
                        <?php }?>
                    </select>
                    <label for="">Fecha: </label>
                    <input type="date" name="fecha">
                    <label for="">Hora: </label>
                    <input type="time" name="hora">
                    <input type="submit" value="Agregar" > 
            </form>
            
            <!-- <a href="../view/html/insertarUsuario.php"><button>Agregar</button></a> -->
            <table>
                <thead></thead>
                <tr>
                    <th>CODIDO DEL ENCUENTRO</th>
                    <th>CODIGO DEL LOCAL</th>
                    <th>CANTIDAD DE GOLES</th>
                    <th>CODIGO VISITANTE</th>
                    <th>CANTIDAD GOLES VISITANTE</th>
                    <th>CODIGO CANCHA</th>
                    <th>FEHCA</th>
                    <th>HORA</th>
                </tr>
                <tbody>
                <?php 
                include_once "../../controller/listarEncuentros.php";?>
                <?php foreach($record as $registro){?>
                <tr>
                    <td><?php echo$registro['cod_encuentro'];?></td>
                    <td><?php echo$registro['cod_local'];?></td>
                    <td><?php echo$registro['cant_goles_local'];?></td>
                    <td><?php echo$registro['cod_visitante'];?></td>
                    <td><?php echo$registro['cant_goles_visitante'];?></td>
                    <td><?php echo$registro['cod_cancha'];?></td>
                    <td><?php echo$registro['fecha'];?></td>
                    <td><?php echo$registro['hora'];?></td>
                    <td><a href="eliminarEncuentro.php?encuentroid=<?php echo $registro['cod_encuentro'];?>"><button>Eliminar</button></a>
                <a  href="editarEncuentro.php?encuentroid=<?php echo $registro['cod_encuentro'];?>"><button>Editar</button></a> 
            </td>
            <?php } ?>
                </tr>
                    
                </tbody>
            </table>
        </section>
    </main>
    <footer></footer>
</body>
</html>