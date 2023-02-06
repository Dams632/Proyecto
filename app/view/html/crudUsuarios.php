<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/general.css">
    <link rel="stylesheet" href="../view/css/crudUsuarios.css">
    <title>Document</title>
</head>
<body>
    <header>
    <nav>
            <ul class="bar-nav">
                <li class="menu-nav">
                    <a  href="/app/view/canchas.php ">Canchas</a>
                    </li>
                <li class="menu-nav">
                    <a href="../">Encuentros</a>
                </li>
                <li class="menu-nav">
                    <a href="#portfolio">Goles</a>
                </li>
                <li class="menu-nav">
                    <a href="#services">Ciudades</a>
                </li>
                <li class="menu-nav">
                    <a href="#gallery">Jugadores</a>
                </li>
                <li class="menu-nav">
                    <a href="#contact">Tecmnicos</a>
                </li>
                <li class="menu-nav">
                    <a href="#contact">Equipos</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <form action="insertarUsuarios.php" method="POST">
                    <label for="">Usuario: </label>
                    <input type="email" name="user">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre">     
                    <label for="">Tipo: </label>
                    <input type="text" name="tipo">
                    <label for="">Contraseña: </label>
                    <input type="password" name="contrasenia">
                    <input type="submit" value="Agregar" > 
            </form>
            <!-- <a href="../view/html/insertarUsuario.php"><button>Agregar</button></a> -->
            <table>
                <thead></thead>
                <tr>
                    <th>USER</th>
                    <th>TIPO</th>
                    <th>NOMBRE</th>
                </tr>
                <tbody>
                <?php
                //include_once("./app/controller/crudUsuarios.php");
                foreach($record as $registro){?>
                <tr>
                    <td><?php echo$registro['user'];?></td>
                    <td><?php echo$registro['tipo'];?></td>
                    <td><?php echo$registro['nombre'];?></td>
                    <td><a href="eliminarUsuario.php?userid=<?php echo $registro['user'];?>"><button>Eliminar</button></a>
                <a  href="editarUsuario.php?userid=<?php echo $registro['user'];?>"><button>Editar</button></a> 
            </td>
            <?php } ?>
                </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>