<!-- http://localhost/aprendiendophp/13array_multidimencionales/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(13)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                
                <?php

                $persona = array(
                    'datos' => array( 
                    'persona' => 'Juan',
                    'pais' => 'colombia',
                    'profesion' => 'Desarrollador PHP'    
                    ),
                    'lenguajes'=> array(
                    'Frontend' => array('css','html','Javascript', 'jQuery'),
                    'backend'=> array( 'php', 'mysql', 'phyton')
                    )
                );    
                ?>

                <pre>
                    
                    <?php // var_dump($persona); ?>
                    <?php print_r($persona ['lenguajes']['Frontend'][2]); ?>
                </pre>

            
            </div>
        </div>
    </body>
</html>

