<!-- http://localhost/aprendiendophp/02variable/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP (02EJE)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                <?php
                $nombre = "Alexander";

                $apellido = "Lopez";

                $numero = 23;
                
                $_variablenumero2000 = "variable larga" ;

                echo $nombre;
                echo "<hr>";
                echo $numero;
                echo "<hr>";
                echo  $_variablenumero2000;
                ?>
            </div>
        </div>
    </body>
</html>
