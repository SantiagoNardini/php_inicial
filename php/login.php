<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Login</title>
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
    <main>
        
    <form action="iniciarSesion.php" method="POST" class="container-md mt-4">

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>

  <button type="submit" value="Register" class="btn btn-success mt-1">Iniciar sesion</button>
</form>

    </main>
</html>