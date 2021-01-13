<!-- http://localhost/aprendiendophp/17for/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(17)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>
        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>
            <div class="contenido">

                <?php //for loops ?>
                <?php for ($i=0; $i <=10 ; $i++) { 
                    echo $i."<br>";
                } ?>

                <hr>
                <!-- Otro ejemplo -->
                <?php for ($i=0; $i <=10 ; $i++) { 
                if ($i == 5 ) {
                    echo "pasaste por el numero  5";
                    echo "<hr>";
                    #break;
                    continue;
                }
                echo $i."<br>";
                } ?>

                <hr>
                <!-- Otro ejemplo -->

                <?php for ($i=0; $i <=500 ; $i++) { 
                    if (($i % 2)==0) {
                        echo $i."<br>";
                    }
                } ?>


                <hr>
                <!-- Otro ejemplo -->


                <?php 
                $tecnologias = array('CSS','HTML','JAVASCRIPT', 'jQuery' );
                
                for ($i=0; $i < count($tecnologias)  ; $i++) {

                echo $tecnologias[$i]."<br>";
                }

                ?>
                
            </div>
        </div>
    </body>
</html>

