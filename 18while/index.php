<!-- http://localhost/aprendiendophp/18while/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(18)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>
        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>
            <div class="contenido">

                <?php 
                $banda = array(/*'guitarrista','bajista','vocalista', 'managers', 'director', 'pianista' */ );
                
                ?>

                <?php  
                $i=0;  
                while ( $i <= count ($banda)) {
                    if (count($banda)>0) {
                    echo $banda[$i].'<br>';
                        if ($i+1 === count($banda)) {
                        echo "fin";
                        }        
                    }else {
                        echo "No hay registro";
                    }
                $i++;
                }?>
                
            </div>
        </div>
    </body>
</html>

