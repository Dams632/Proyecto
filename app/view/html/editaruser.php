<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <form action="editarUsuario.php" method="POST">
            <label for="">Usuario</label>
            <input type="text" name="code" value="<?php echo $var['user'];?>">
            <label for="">Tipo</label>
            <input type="text" name="tipo" value="<?php echo $var['tipo'];?>">
            <label for="">Contraseña</label>
            <input type="password" name="contrasenia" value="<?php echo $var['password'];?>">
            <label for="">Nombre</label>
            <input type="text" name="user" value="<?php echo $var['nombre'];?>">
            <a><button>Editar</button></a>
        </form>

    </main>
    <footer></footer>
</body>
</html>