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
    <header>
    <nav>
            <ul class="bar-nav">
                <li class="menu-nav">
                    <a href="#logo">Home</a>
                </li>
                <li class="menu-nav">
                    <a href="#about">About</a>
                </li>
                <li class="menu-nav">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li class="menu-nav">
                    <a href="#services">Services</a>
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
                    <label for="">Id Gol: </label>
                    <input type="text" name="id_gol">
                    <label for="">Codigo del jugador: </label>
                    <input type="text" name="id_jugador">
                    <label for="">Codigo del encuentro: </label> 
                    <select name="cod_encuentro" id="">>
                        <?php include_once "listarEncuentros.php"?>
                        <?php foreach($record as $registro){?>
                        <option value="<?php echo $registro[0];?>"><?php echo $registro[1]; ?></option>
                        <?php }?>
                    </select> 
                    <label for="">Goles: </label>                   
                    <input type="text" name="goles">                  
                    <label for="">Minuto: </label>
                    <input type="text" name="minuto"></input>             
                    <label for="">Descripcion: </label>
                    <textarea placeholder="Descripcion general" name="descripcion"></textarea>
                    <label for="">Periodo: </label>
                    <input type="text" name="periodo">
                   
                    <input type="submit" value="Agregar" > 
            </form>
            
            <!-- <a href="../view/html/insertarUsuario.php"><button>Agregar</button></a> -->
            <table>
                <thead></thead>
                <tr>
                    <th>ID DEL JUGADOR</th>
                    <th>ID DEL ENCUENTRO</th>
                    <th>GOLES</th>
                    <th>MINUTO</th>
                    <th>DESCRIPCION</th>
                    <th>PERIDO</th>
                </tr>
                <tbody>
                <?php 
                include_once "listarGoles.php";?>
                <?php foreach($record as $registro){?>
                <tr>
                    <td><?php echo$registro['id_gol'];?></td>
                    <td><?php echo$registro['id_jugador'];?></td>
                    <td><?php echo$registro['id_encuentro'];?></td>
                    <td><?php echo$registro['goles'];?></td>
                    <td><?php echo$registro['minutos'];?></td>
                    <td><?php echo$registro['descripcion'];?></td>
                    <td><?php echo$registro['periodo'];?></td>  
                    <td><a href="eliminarGoles.php?golesid=<?php echo $registro['id_gol'];?>"><button>Eliminar</button></a>
                <a  href="editarGoles.php?golesid=<?php echo $registro['id_gol'];?>"><button>Editar</button></a> 
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