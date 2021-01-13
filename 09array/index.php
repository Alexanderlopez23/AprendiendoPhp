<!-- http://localhost/aprendiendophp/09array/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(09)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                <?php
                


                $lenguajes = ['PHP','HTML','CSS','JS','MYSQL'];

                //Versiones Anteriores 
                //Arrays indexados
                echo "<h4> Versiones Anteriores: <h4>";
                echo $lenguajes[0];
                echo "<hr>";
                echo $lenguajes[1];
                echo "<hr>";
                echo $lenguajes[2];
                echo "<hr>";
                echo $lenguajes[3];
                echo "<hr>";
                echo $lenguajes[4];
                echo "<hr>";

                echo "<h4> Versiones Recientes:  <h4>";
                //Versiones Recientes 

                $instrumentos = array ('Guitarra', 'Bateria', 'bajo', 'piano ');

                echo $instrumentos[3];
                
        
                //output: piano
    

                ?>


            </div>
        </div>
    </body>
</html>
