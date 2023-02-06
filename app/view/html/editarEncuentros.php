<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/general.css">
    <link rel="stylesheet" href="../view/css/editarUsuario.css">
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
        <form action="editarEncuentro.php" method="POST">
            <label for="">Codigo de encuentro: </label>
            <input type="text" name="cod_encuentro" value="<?php echo $var['cod_encuentro'];?>">
            <label for="">Codigo el local: </label>
            <input type="text" name="cod_local" value="<?php echo $var['cod_local'];?>">
            <label for="">Cantidad de goles local</label>
            <input type="text" name="cant_goles_local" value="<?php echo $var['cant_goles_local'];?>">
            <label for="">Codigo del visitante</label>
            <input type="text" name="cod_visitante" value="<?php echo $var['cod_visitante'];?>">
            <label for="">Cantidad de goles vistante</label>
            <input type="text" name="cant_goles_visitante" value="<?php echo $var['cant_goles_visitante'];?>">
            <label for="">Codigo de canchas</label>
            <input type="text" name="cod_cancha" value="<?php echo $var['cod_cancha'];?>">
            <label for="">Fecha</label>
            <input type="text" name="fecha" value="<?php echo $var['fecha'];?>">
            <label for="">Hora</label>
            <input type="text" name="hora" value="<?php echo $var['hora'];?>">
            <a><button>Editar</button></a>
        </form>

    </main>
    <footer></footer>
</body>
</html>