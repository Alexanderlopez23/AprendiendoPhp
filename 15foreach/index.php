<!-- http://localhost/aprendiendophp/15foreach/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(15)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>

        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>

            <div class="contenido">
                
                <?php 


                 $tecnologias = array('CSS','HTML','JAVASCRIPT', 'jQuery' );
                ?>
                
            <h2>Lenguajes Frontend: </h2>
            
            <ul>
               <?php foreach ( $tecnologias as  $tecnologia ): ?>
                <li> <?php echo $tecnologia; ?> </li>
                <?php endforeach; ?>     
            </ul>      


            <?php 
                    $persona = array(
                    'persona' => 'Juan',
                    'pais' => 'colombia',
                    'profesion' => 'Desarrollador PHP'    
                    );
            ?>
            <h2>Datos personales </h2>
            <ul>
                <?php foreach ($persona as $key => $val): ?>
                    <li> <?php echo $key.": ". $val ?></li>
                <?php endforeach; ?>    
            </ul>


            </div>
        </div>
    </body>
</html>

