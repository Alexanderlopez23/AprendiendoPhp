<!-- http://localhost/aprendiendophp/20funciones_argumentos/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(20)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>
        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>
            <div class="contenido">


                <h2> Contacto </h2>
                
                <?php 
                
                function usuario($nombre,$telefono) {
                    
                echo $nombre."<br>";
                echo $telefono."<br>";
                echo "<hr>";   
                }
                

                usuario('Alexander Lopez' , 3144352302);
              
                usuario('Jeisson Leal' , 'No registra telefono');
                ?>

            </div>
        </div>
    </body>
</html>

