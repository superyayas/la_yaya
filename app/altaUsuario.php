<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Registro</title>
    <link rel="stylesheet" href="Assets/css/styles.css">
</head>
<body>
    <?php

    include_once "includes/funciones.php";
    include_once "Models/bddModel.php";
    
    // Llamamos al método que contiene los datos del usuario
    list($nombre,$apellidos,$telefono,$email,$contrasena,$contenido) = parametros();
    if($contenido) :
    $hash = hash('sha256',$contrasena);
    // Variable que permita registrar al usuario en la BDD
    $consulta = "INSERT INTO `usuarios`(`nombre`, `apellidos`,`telefono`,`email`,`contrasena`) VALUES ('$nombre','$apellidos','$telefono','$email','$hash')";
    $prueba = yayaBD::consultaInsercionBD($consulta);
    if ($prueba):

    ?>
<section class="completo">
    <article class="centrado">
        <h1>Usuario creado satisfactoriamente</h1>
        <p>El usuario <?php echo $nombre . " " . $apellidos; ?> ha sido creado.</p>
        <p><?php echo $nombre; ?></p>
        <p> <?php echo $apellidos; ?></p>
        <a href="index.php"> Volver a inicio</a>
    </article>
</section>
<?php
else : 
    echo "<h1>Error en la creación de usuario</h1>";
endif;
else : 
    echo "<h1>Error en la recepción de los datos</h1>";
endif;
yayaBD::cerrarConexion();

?>
<?php
    include "includes/pie.html";
    ?>
</body>
</html>