<?php  

require '../php/conexion.php';

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
$email = mysqli_real_escape_string($conexion,$_POST['email']);
$password = mysqli_real_escape_string($conexion,$_POST['password']);
$dni = mysqli_real_escape_string($conexion,$_POST['dni']);
$fecha_nacimiento = mysqli_real_escape_string($conexion,$_POST['fecha_nacimiento']);
$id_rol = 2;

if (empty($nombre) || empty($apellido) || empty($email) || empty($password) || empty($dni) || empty($fecha_nacimiento)) {
    header("Location: registro.php");
    exit;
}

$query = "INSERT INTO usuarios (nombre, apellido, email, password, dni, fecha_nacimiento, id_rol) VALUES ('$nombre', '$apellido', '$email', '$password', '$dni', '$fecha_nacimiento', ' $id_rol')";

$resultado = mysqli_query($conexion, $query);

mysqli_close($conexion);

header("Location: perfil.php");
session_start();
session_destroy();
exit;


?>