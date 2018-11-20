<?php
require_once __DIR__."/../../../../app/logger.php";
if(empty($_POST)) {
    require_once __DIR__ . "/../../../../app/loader.php";
    $urlPath = Loader::getUrlBase();
    header("location: ".$urlPath."../views/admin/register-user/");
}else {
    require_once __DIR__."/../../../../app/connection/connectionMySqL.php";
    $config = Loader::getConfig();
    $connection = ConnectionMysql::getInstance()->getConnection();
   
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insertPerfil = "INSERT INTO usuario (id_usuario, nombre, apellido, email, username, password, perfil)
              VALUES ( NULL, '".$nombre."', '" .$apellido."' , '" .$email."', '" .$username."', '" .$password."' , " .$config['id_usuarios']." )";

    if(!mysqli_query($connection, $insertPerfil)) {
        Logger::setLog(mysqli_error($connection), "Usuarios-Formulario de Registro");
        mysqli_rollback($connection);
        header("Location: ../../../views/admin/register-user/?err=2");
    }else{
        header("Location: ../../../views/admin/register-user/success.php");
    }
}


?>