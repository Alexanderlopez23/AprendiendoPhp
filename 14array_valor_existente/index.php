<!-- http://localhost/aprendiendophp/14array_valor_existente/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(14)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                
                <?php 


                 $tecnologias = array('CSS','HTML','JAVASCRIPT', 'jQuery' );
                 $existe = in_array('CSS', $tecnologias);

                 echo "<pre>";
                 var_dump($existe);
                 echo "</pre>";



                 // cambio 


                 echo "<hr>";

                $persona = array(
                    'persona' => 'Juan',
                    'pais' => 'colombia',
                    'profesion' => 'Desarrollador PHP'    
                );

                $existe2= in_array('colombia', array_values($persona));

                echo "<pre>";
                var_dump($existe2);
                echo "</pre>";



                ?>
                


            </div>
        </div>
    </body>
</html>

