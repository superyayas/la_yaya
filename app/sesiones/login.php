<?php session_start(); ?>

<?php
require_once "../Models/bddModel.php";
if (isset($_POST['nombre']) && isset($_POST['contrasena'])){
	$user = $_POST['nombre'];
	$consulta = "SELECT * FROM `usuarios` WHERE `nombre` = '$user'";
	$resultado = yayaBD::consultaLectura($consulta);
	if($resultado != null){
		$contrasena = hash('sha256',$_POST['contrasena']);
		if(($resultado[0]['nombre']== $user)&&($resultado[0]['contrasena']== $contrasena)){
			$_SESSION['nombre']="$user";
			$_SESSION['tiempo']=time();
		
			header("Location: accesoUser.php");
			exit();
			
		} else if ($user=="admin" && $passw == hash ('sha256',"abcdef") ){ 
            $_SESSION['usuario']="$user";
			$_SESSION['tiempo']=time();
            header("Location: ../accesoAdmin.php");
			exit();
            
        } else {
            echo "<h1>La contraseña es incorrecta.</h1>";
        }
    } else {
        echo "<h1>El usuario no existe.</h1>";
    }
} else {
    echo "<h1>No se han recibido datos.</h1>";
}
yayaBD::cerrarConexion();
?>