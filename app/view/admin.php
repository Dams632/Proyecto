

<!DOCTYPE html>
<html>
    <head>
        <title>ADMINISTRADOR</title>
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="../view/css/general.css">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    </head>
    <body>
    <header>

        <nav>
            <ul class="bar-nav">
                <li class="menu-nav">
                    <a href="">Bienvenido</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
                <li class="menu-nav">
                <a href="../view/login.php">Cerrar sesión</a>
                </li>
            </ul>
        </nav>
    </header>   
    
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Canchas</h5>
        <p class="card-text">Aqui podrá agregar/editar/eliminar las canchas donde se disputará el torneo</p>
        <a href="../view/canchas.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Jugadores</h5>
        <p class="card-text">Aqui podrá agregar/editar/eliminar los jugadores que juegan el torneo</p>
        <a href="../view/jugadores.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Equipos</h5>
        <p class="card-text">Aqui podrá agregar/editar/eliminar los equipos que participan en el torneo</p>
        <a href="../view/equipos.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Encuentros</h5>
        <p class="card-text">Aqui podrá agregar/editar/eliminar los encuentros disputados en el torneo</p>
        <a href="../view/encuentro.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ciudades</h5>
        <p class="card-text">Aqui podrá agregar las ciudades de donde vienen los equipos</p>
        <a href="../view/Ciudades.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tecnicos</h5>
        <p class="card-text">Aqui puede agregra/editar/eliminar informacionde los directores tecnicos</p>
        <a href="../view/tecnicos.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tabla de puntuacion</h5>
        <p class="card-text">Aqui podrá editar la Tabla de puntuacion</p>
        <a href="../view/verEquipos.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Goles</h5>
        <p class="card-text">Aqui puede agregar los goles marcados durante el torneo</p>
        <a href="../view/verEncuentro.php" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
</div>


    </body>
</html>