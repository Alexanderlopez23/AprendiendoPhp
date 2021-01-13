<!-- http://localhost/aprendiendophp/06operadores/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(06)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">

                <?php
                $numero1 = 20;
                $numero2 = 50;
                $numero3 = 20;
                $numero4 = 40;

                //suma 
                echo "<hr>";
                echo "<h3 style=color:red />Esto es una suma : ";
                echo $numero1 + $numero2;

                //restar 
                echo "<hr>";
                echo "<h3 style=color:blue />Esto es una resta : ";
                echo $numero2 - $numero3;

                //multiplicar
                echo "<hr>";
                echo "<h3 style=color:aqua />Esto es una multiplicacion : ";
                echo $numero1 * $numero3;

                //dividir
                echo "<hr>";
                echo "<h3 style=color:green />Esto es una division : ";
                echo $numero4 / $numero3;

                //operacion en parentesis

                echo "<hr>";
                echo "<h3 style=color:purple />Primero se resuelve lo de los parentesis : ";
                echo ($numero4 / $numero3 ) + ($numero2 + $numero1);

                echo"<h4> A continuación incrementos y decremento: </h4>";
                //incremento
                echo "<hr>";
                $numero2++;
                echo $numero2;

                //decremento
                echo "<hr>";
                $numero3--;
                echo $numero3;

                //incremento en la misma variable 
                echo "<hr>";
                $total = 0;
                $total += 10;
                $total += 80;
                $total += 1;
                echo $total;

                //hallar mod
                echo "<hr>";
                echo 20 % 3;
                ?>

            </div>
        </div>
    </body>
</html>
