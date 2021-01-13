<!-- http://localhost/aprendiendophp/01holamundo/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP (01EJE) </title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">

                <p> HOLA MUNDO EN HTML</p>
                <hr>
                <?php
                $holamundovariable = "hola mundo - variable ";

                echo $holamundovariable;

                echo "<hr>";

                echo "Hola mundo";
                ?>


            </div>
        </div>




    </body>
</html>
