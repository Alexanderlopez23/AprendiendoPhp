<!-- http://localhost/aprendiendophp/16recorrer_array_asociativo/index.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP EJE(16)</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    </head>
    <body>
        <div class="contenedor">
            <h1>SENA - Aprendiendo PHP</h1>
            <div class="contenido">

                <?php
                $personas = array(
                    'datos' => array(
                        'persona' => 'Alexander',
                        'pais' => 'colombia',
                        'profesion' => 'Desarrollador PHP'
                    ),
                    'lenguajes' => array(
                        'Frontend' => array('css', 'html', 'Javascript', 'jQuery'),
                        'backend' => array('php', 'mysql', 'phyton')
                    )
                );
                ?>

                <pre>
                    <?php // print_r($personas);  ?>    
                </pre>

                <h2>Foreach Arreglos Multidimensionales</h2>
                <ul>
                    <?php foreach ($personas['datos'] as $persona): ?>
                        <li> <?php echo $persona; ?> </li>   
                    <?php endforeach; ?> 
                    <?php foreach ($personas as $leng): ?>  
                        <?php if (array_key_exists('Frontend', $leng)): ?>
                            <h2> Lenguajes de Fronted</h2>
                            <?php foreach ($leng['Frontend'] as $front): ?>
                                <li> <?php echo $front; ?> </li>
                            <?php endforeach; ?> 
                        <?php endif; ?>

                        <?php if (array_key_exists('backend', $leng)): ?>
                            <h2> Lenguajes de Backend</h2>
                            <?php foreach ($leng['backend'] as $back): ?>
                                <li> <?php echo $back; ?> </li>
                            <?php endforeach; ?> 
                        <?php endif; ?>
                    <?php endforeach; ?> 
                </ul>   
            </div>
        </div>
    </body>
</html>

