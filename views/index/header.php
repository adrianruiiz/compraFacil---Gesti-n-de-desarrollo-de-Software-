<!-- Verificar si la sesión está iniciada -->
<?php 
//session_start(); // Iniciar la sesión si no se ha iniciado aún

// Inicializar la variable $username
$username = '';

// Verificar si  el usuario está autenticado
if(isset($_SESSION['esUsuario']) && $_SESSION['esUsuario']) {
    // obtener el nombre de usuario
    $username = $_SESSION['username'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?">COMPRAFACIL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <!-- si la variable username esta vacia, mostrar solamente iniciar sesion y registro -->
          <?php if (empty($username)) 
            {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?metodo=login">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?metodo=registro">Registro</a> 
          </li>
          <?php 
            }
          ?>
          <!-- si no, mostrar los demas menos iniciar sesion y registro -->
          <?php if(!empty($username)){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cosas
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $username ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?metodo=cerrarSesion">Cerrar Sesion</a></li>
          </ul>
        </li>
        <?php } ?>
        </ul>
        </div>
    </div>
    </nav>
</header>