<?php  

session_start();
require '../php/conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
$result = mysqli_query($conexion, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email;
    header("Location: perfil.php");
    exit();
} else {
    echo "Email y contraseña no coinciden. <a href='login.php'>Volver</a>";
}
?>