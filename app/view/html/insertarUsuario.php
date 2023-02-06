<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/general.css">
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
            <form action="insertarUsuarios.php" method="POST">
                <label for="">Usuario: </label>
                <input type="email" name="username">
                <label for="">Nombre: </label>
                <input type="text" name="nombre">
                <input type="text" name="tipo">
                <label for="">Tipo: </label>
                <input type="text">
                <input type="submit" value="Agregar" > 
            </form>
        </section>
    </main>
    <footer></footer>
</body>
</html>