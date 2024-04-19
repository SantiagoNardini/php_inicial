<?php
require '../php/conexion.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
$email = $_SESSION['email'];
$query = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE `email`='$_SESSION[email]'") or die;
$fetch = mysqli_fetch_array($query);
$nombre = $fetch['nombre'];
$apellido = $fetch['apellido'];
$fecha_nacimiento = $fetch['fecha_nacimiento'];
$dni = $fetch['dni'];
$rol = $fetch['id_rol'];

if ($rol == 1) {
    $rol = "Administrador";
} else {
    $rol = "Usuario";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Perfil</title>
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                    <a class="home" href="../index.php">HOME</a>
                    <a class="home" href="encuesta.php">ENCUESTA</a>
                    <a class="home" href="registro.php">REGISTRO</a>
                    <a class="home" href="login.php">LOGIN</a>
                    <a class="home" href="perfil.php">PERFIL</a>
                </li>
            </ul>
        </nav>
    </header>
    <h2 class="text-center mt-3">Bienvenido a tu perfil <?php echo $nombre?>! </h2>
    <div class="card mx-auto mt-3" style="width: 28rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nombre: <?php echo $nombre; ?></li>
    <li class="list-group-item">Apellido: <?php echo $apellido; ?></li>
    <li class="list-group-item">DNI: <?php echo $dni; ?></li>
    <li class="list-group-item">Fecha de nacimiento: <?php echo $fecha_nacimiento; ?></li>
    <li class="list-group-item">Email: <?php echo $email; ?></li>
    <li class="list-group-item">Rol: <?php echo $rol; ?></li>
  </ul>
  <a href="logout.php" class="btn btn-danger">Logout</a>
</body>
</html>

