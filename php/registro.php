<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Registro</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="home" href="index.php">HOME</a>
                    <a class="home" href="contacto.php">CONTACTO</a>
                    <a class="home" href="registro.php">REGISTRO</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
    <h1>Register</h1>
	<form action="registrarUsuarios.php" method="post">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="name" required><br>

		<label for="Apellido">Apellido</label>
		<input type="text" name="apellido" id="apellido" required><br>

		<label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="password" required><br>

		<label for="dni">DNI</label>
        <input type="number" name="dni" id="password" required><br>

		<label for="email">Email</label>
        <input type="text" name="email" id="password" required><br>

		<label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Register">
    </form>
    </main>
</html>



