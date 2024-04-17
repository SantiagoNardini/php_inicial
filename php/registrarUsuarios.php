<?php  

require '../php/conexion.php';

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
$email = mysqli_real_escape_string($conexion,$_POST['email']);
$password = mysqli_real_escape_string($conexion,$_POST['password']);
$dni = mysqli_real_escape_string($conexion,$_POST['dni']);
$fecha_nacimiento = mysqli_real_escape_string($conexion,$_POST['fecha_nacimiento']);

$query = "INSERT INTO usuarios (nombre, apellido, email, password, dni, fecha_nacimiento) VALUES ('$nombre', '$apellido', '$email', '$password', '$dni', '$fecha_nacimiento')";

$resultado = mysqli_query($conexion, $query);

mysqli_close($conexion);


?>