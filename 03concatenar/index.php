<!-- http://localhost/aprendiendophp/03concatenar/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP (03EJE)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                <?php
                $nombre = "Alexander";

                $pais = "Colombia";

                $edad = 20;

                echo "El es " . $nombre . " es del pais de " . $pais . " y tiene " . $edad .
                " años";
                ?>


            </div>
        </div>
    </body>
</html>
