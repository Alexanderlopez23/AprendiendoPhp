<!-- http://localhost/aprendiendophp/11array_agregar/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(11)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                <?php
                


                $lenguajes = ['PHP','HTML','CSS','JS','MYSQL', 'jQuery'];

                $lenguajes[]='phyton';
                $lenguajes[6]='Java';


                print_r($lenguajes);

                //borrar el ultimo elemento y traerlo en variable 
                $variablejava = array_pop($lenguajes);
                echo "<h1> $variablejava </h1>";

                echo "<pre>";
                print_r($lenguajes);
                echo "</pre>";

                //remover primer elemento del arreglo 

                unset($lenguajes[0]);

                echo "<pre>";
                print_r($lenguajes);
                echo "</pre>";

                //remover ciertos elementos  y agregar otros

                $arreglo = array_splice($lenguajes,1,2, array('NodeJs','Laravel'));
                echo "<pre>";
                print_r($lenguajes);
                echo "</pre>";



                ?>

            </div>
        </div>
    </body>
</html>

