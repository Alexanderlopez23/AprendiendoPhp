<!-- http://localhost/aprendiendophp/08switch/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(08)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                
                <?php
                    
                $jornada="";

                switch ($jornada) {
                    case 'mañana':
                        echo "Aprendo PHP ";

                        break;
                    case 'tarde':
                        echo "Aprendo JS ";

                        break;
                        
                    case 'noche':
                        
                        echo "Aprendo PHP ";

                        break;

                    default :
                    
                        echo "No estas aprendiendo programacion";
                    break;     
                }


                ?>


            </div>
        </div>
    </body>
</html>
