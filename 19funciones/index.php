<!-- http://localhost/aprendiendophp/19funciones/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(19)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>
        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>
            <div class="contenido">

                <?php 
                
                function saludar() {
                    echo "Hola Amigos";
                }
                
                saludar();

                echo "<hr>";
                function sumar() {
                    echo 20+20;
                }    
                sumar ();
                //otro ejemplo : 
                echo "<hr>";

                ?> 

                <?php 

                function usuario() {
                
                echo "Alexander Lopez". "<br>";
                echo "7642434". "<br>";

                }


                ?>

                <h2>AMIGOS</h2>

                <?php 

                usuario();

                ?>

            </div>
        </div>
    </body>
</html>

