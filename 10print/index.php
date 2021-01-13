<!-- http://localhost/aprendiendophp/10print/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE10</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>
        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                <?php
               
                $comidas = ['pizza', 'hamburguesa', 'perro caliente',  'ensalada' , 'pollo']
                ?>

                <pre>
                    <?php  print_r($comidas); ?>
                </pre>
                <hr>
                
                <?php 
                $automoviles = ['mustang' , 'ferrari', 'chevrolet' , 'ford', 3 ];
                var_dump($automoviles);

                ?>
            </div>
        </div>
    </body>
</html>
