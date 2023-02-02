<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
  </head>
  <body>
    <h1>Inicio de sesión</h1>
    <form action="/login" method="post">
      <label for="username">Nombre de usuario:</label>
      <input type="text" id="username" name="username" required>
      <br><br>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <br><br>
      <input type="submit" value="Iniciar sesión">
    </form>
  </body>
</html>