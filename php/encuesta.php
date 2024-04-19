<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Encuesta</title>
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
    <div>
<form action="" method="get" class="container-md mt-4">
  <fieldset>
    <legend>Consulta Datos</legend>
    <div class="mb-3">
      <label for="Conocimiento" class="form-label">Tiene usted conocimiento en PHP?</label>
      <select id="Conocimiento" class="form-select" name="Conocimiento">
        <option value="Poco">Poco</option>
        <option value="Moderado">Moderado</option>
        <option value="Mucho">Mucho</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="Nivel" class="form-label">Que nivel le gustaria tener de PHP?</label>
      <select id="Nivel" class="form-select" name="Nivel">
        <option value="Bajo">Bajo</option>
        <option value="Intermedio">Intermedio</option>
        <option value="Experto">Experto</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="Hora" class="form-label">En que momento le gustaria estudiar PHP?</label>
      <select id="Hora" class="form-select" name="Hora">
        <option value="Mediodia">Mediodia</option>
        <option value="Tarde">Tarde</option>
        <option value="Noche">Noche</option>
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
<?php

if (isset($_GET["Conocimiento"]) && isset($_GET["Nivel"]) && isset($_GET["Hora"])) {

switch ($_GET["Conocimiento"]) {
  case "Mucho":
    echo "Usted tiene mucho conocimiento en PHP" . "<br>";
    break;
  case "Moderado":
    echo "Usted tiene conocimiento en PHP" . "<br>";
    break;
  case "Poco":
    echo "Usted tiene poco conocimiento en PHP" . "<br>";
    break;
  default:
    echo "No se ha seleccionado una opción válida" . "<br>";
}

switch ($_GET["Nivel"]) {
  case "Bajo":
    echo "Usted le gustaria tener un nivel bajo" . "<br>";
    break;
  case "Intermedio":
    echo "Usted le gustaria tener un nivel intermedio" . "<br>";
    break;
  case "Experto":
    echo "Usted le gustaria tener un nivel experto" . "<br>";
    break;
  default:
    echo "No se ha seleccionado una opción válida" . "<br>";
}

switch ($_GET["Hora"]) {
  case "Mediodia":
    echo "Usted le gustaria estudiar a el/la mediodia" . "<br>";
    break;
  case "Tarde":
    echo "Usted le gustaria estudiar a el/la tarde" . "<br>";
    break;
  case "Noche":
    echo "Usted le gustaria estudiar a el/la noche" . "<br>";
    break;
  default:
    echo "No se ha seleccionado una opción válida" . "<br>";
}
}

?>

    </main>
</body>
</html>