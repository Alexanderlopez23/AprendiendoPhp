<!-- http://localhost/aprendiendophp/12array_asociativos/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(12)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                
                <?php

                $persona = array(
                    'persona' => 'Juan',
                    'pais' => 'colombia',
                    'profesion' => 'Desarrollador PHP'    
                );

                ?>

                <pre>
                    <?php print_r($persona); ?>
                </pre>
                
                <?php  echo $persona['profesion']; ?>   

                <pre>
                <?php print_r(array_values($persona)); ?>        
                </pre>  

                <pre>
                <<?php print_r(array_keys($persona)); ?>          
                </pre>
           
            </div>
        </div>
    </body>
</html>

