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
        <form action="" method="POST">
            <label for="">Usuario</label>
            <input type="text" name="user" value="<?php echo $var['user'];?>">
            <label for="">Tipo</label>
            <input type="text" name="tipo" value="<?php echo $var['tipo'];?>">
            <label for="">Contraseña</label>
            <input type="password" name="contrasenia" value="<?php echo $var['password'];?>">
            <label for="">Nombre</label>
            <input type="text" name="user" value="<?php echo $var['nombre'];?>">
            <a href="editarUsuario.php?userid=<?php echo $registro['user'];?>"><button>Editar</button></a>
        </form>

    </main>
    <footer></footer>
</body>
</html>