<?php
ini_set('display_errors', 1);
 require ('../../../../../app/logger.php');
if(empty($_POST)) {
    require ('../../../../../app/loader.php');
    $urlPath = Loader::getUrlBase();
    header("location: ".$urlPath."../views/admin/user/register-user/");
}else {
    require ('../../../../../app/loader.php');
    require ('../../../../../app/connection/connectionMySql.php');
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
        header("Location: ../../../../views/admin/user/register-user/?err=2");
    }else{
        header("Location: ../../../../views/admin/user/register-user/success.php");
    }
}


?>