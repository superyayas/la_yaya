<?php
//Método para recoger los datos del usuario
function parametros(){
    if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['usuario']) && isset($_POST['email'])&& isset($_POST['contrasena']) ){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
    $contenido = true;
return [$nombre,$apellidos,$usuario,$email,$contrasena,$contenido];
    }else{
        $contenido = false;
        return $contenido;
    }
}
function productos(){
    if (isset($_POST['nombre_producto']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['cantidad']) ){
        $nombre = $_POST['nombre_producto'];
        $apellidos = $_POST['descripcion'];
        $telefono = $_POST['precio'];
        $email = $_POST['cantidad'];
    $contenido = true;
return [$nombre_producto,$descripcion,$precio,$cantidad,$contenido];
    }else{
        $contenido = false;
        return $contenido;
    }
}