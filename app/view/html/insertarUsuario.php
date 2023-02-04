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
        <section>
            <form action="../../controller/insertarUsuarios.php" method="POST">
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