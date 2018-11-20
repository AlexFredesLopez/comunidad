<?php
require_once __DIR__."/../../../app/logger.php";



if(empty($_POST)) {
    require_once __DIR__ . "/../../../app/loader.php";
    $urlPath = Loader::getUrlBase();
    header("location: ".$urlPath."condominio/views/landing/");
}else {
    require_once __DIR__."/../../../app/connection/connectionMySqL.php";
    $connection = ConnectionMysql::getInstance()->getConnection();
    $config = Loader::getConfig();
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $query = "SELECT  * FROM USUARIO WHERE username = '" . $user ."' AND password = '". $pass . "';";

    $login = mysqli_query($connection, $query);
    if(mysqli_num_rows($login) > 0) {
        $row = $login->fetch_array();
        require_once __DIR__."/../../models/usuario/Usuario.php";

        $usuario = new Usuario;
        $usuario->setId($row['id_usuario']);
        $usuario->setNombre($row['nombre']);
        $usuario->setApellido($row['apellido']);
        $usuario->setEmail($row['email']);
        $usuario->setPassword($row['password']);
        $usuario->setUsername($row['username']);
        $usuario->setPerfil($row['perfil']);

        if($row['perfil'] == 1){
            session_start();
            $_SESSION['perfil'] = $config['id_administrador'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['logged'] = true;
            Logger::setLog("Bienvenido Administrador",  "Admin-Login");
            header("Location: ../../views/admin/landing/");
        }else if($row['perfil'] == 2){
            session_start();
            $_SESSION['perfil'] = $config['id_usuarios'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['logged'] = true;
            Logger::setLog("Bienvenido Usuario",  "User-Login");
            header("Location: ../../views/landing/");
        }
    }else{
        Logger::setLog("Usuario y/o clave incorrecto", "Consultores-Login");
        header("Location: ../../views/login/?err=1");
    }
}

?>
