<!-- http://localhost/aprendiendophp/07if_elseif_else/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(07)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                <?php
                
                if (1 < 0) {

                    echo "1 es menor que 0";
                }
                elseif ( 1 == 1  ) {
                    echo "Los numeros son iguales";
                } 
                else  {
                    
                    echo " no hay numeros que cumplan las condiciones";
                    
                    }

                    //outpuy: los numeros son iguales

                ?>


            </div>
        </div>
    </body>
</html>
