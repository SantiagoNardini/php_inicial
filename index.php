<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="home" href="index.php">HOME</a>
                    <a class="home" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
        </nav>
    </header>

    <main> 
        <h1>Bienvenido</h1>

        <?php 
        $curso = "PHP MYSQL Inicial";
        $duracion = 4;
        $precio = 120000.80;
        $fecha_inicio = "20/03/2024";

        $curso_2 = "PHP MYSQL Intermedio";
        $duracion_2 = 5;
        $precio_2 = 145000.55;
        $fecha_inicio_2 = "11/07/2024";

        $curso_3 = "PHP MYSQL Avanzado";
        $duracion_3 = 6;
        $precio_3 = 162000.90;
        $fecha_inicio_3 = "09/12/2024";

        const IVA = 1.21;
        const DOLAR = 1000;
        
        $precio_total = $precio * IVA + $precio_2 * IVA + $precio_3 * IVA;
        
        const profesor1 = "Javier García";
        const profesor2 = "Pablo Molina";
        const profesor3 = "Marta Rodríguez";
        
        ?>

        <section class="cursos">
            <h2>Cursos</h2>
            
            <div class="cursoCard">
            <h3><?php echo $curso ?></h3>
            <ul>
                <li> Duracion: <?php echo $duracion ?> meses</li>
                <li> Precio: $<?php echo round($precio * IVA) ?> ARS </li>
                <li> Fecha de inicio: <?php echo $fecha_inicio ?> </li>
                <li> Profesor: <?php echo profesor1 ?> </li>
                <br>
                <li> Precio en Dólares: $<?php echo round($precio * IVA / DOLAR) ?> USD </li>
            </ul>
            </div>

            <div class="cursoCard">    
            <h3><?php echo $curso_2 ?></h3>
            <ul>
                <li> Duracion: <?php echo $duracion_2 ?> meses</li>
                <li> Precio: $<?php echo round($precio_2 * IVA) ?> </li>
                <li> Fecha de inicio: <?php echo $fecha_inicio_2 ?> </li>
                <li> Profesor: <?php echo profesor2 ?> </li>
                <br>
                <li> Precio en Dólares: $<?php echo round($precio_2 * IVA / DOLAR) ?> USD </li>
            </ul>
            </div>

            <div class="cursoCard">    
            <h3><?php echo $curso_3 ?></h3>
            <ul>
                <li> Duracion: <?php echo $duracion_3 ?> meses</li>
                <li> Precio: $<?php echo round($precio_3 * IVA) ?> </li>
                <li> Fecha de inicio: <?php echo $fecha_inicio_3 ?> </li>
                <li> Profesor: <?php echo profesor3 ?> </li>
                <br>
                <li> Precio en Dólares: $<?php echo round($precio_3 * IVA / DOLAR) ?> USD </li>
            </ul> 
            </div>
            
            <div class="experto">
                <h2>Experto Universitario</h2>
                <ul>
                    <li>Duracion total de todos los cursos: <?php echo $duracion + $duracion_2 + $duracion_3 ?> meses</li>
                    <li>Precio total de todos los cursos: $<?php echo round( $precio_total ) ?> ARS </li>
                    <li>Fecha de inicio total de todos los cursos: <?php echo $fecha_inicio . " - " . $fecha_inicio_2 . " - " . $fecha_inicio_3 ?></li>
                    <br>
                    <li>Precio total de todos los cursos en Dólares: $<?php echo round( $precio_total / DOLAR ) ?> USD </li>
                </ul>
            </div>
        </section>
    </main>
    
</body>
</html>