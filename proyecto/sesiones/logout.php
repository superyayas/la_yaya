<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesion</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<?php
session_unset();
session_destroy();
header("Location:login.php");
?>
    
</body>
</html>