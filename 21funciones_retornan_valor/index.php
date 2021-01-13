<!-- http://localhost/aprendiendophp/21funciones_retornan_valor/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(21)</title>
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
                    
                    return $Contacto = $nombre."".$telefono;            
                }
                
                $usuariov = usuario('Alexander Lopez ' , 3144352302);  

                echo $usuariov;            

                ?>

            </div>
        </div>
    </body>
</html>

