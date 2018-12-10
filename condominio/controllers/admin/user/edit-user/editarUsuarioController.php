<?php 
ini_set('display_errors', 1);


require ('../../../../../app/logger.php');
if(empty($_POST)) {
    require ('../../../../../app/loader.php');
    $urlPath = Loader::getUrlBase();
    header("location: ".$urlPath."../views/admin/user/editarUsuario/");
}else {
    require ('../../../../../app/loader.php');
    require ('../../../../../app/connection/connectionMySql.php');
    $config = Loader::getConfig();
    $connection = ConnectionMysql::getInstance()->getConnection();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $id = $_POST['id_usuario'];

    $updateUsuario = " update usuario set
                        nombre = '".$nombre."',
                        apellido = '".$apellido."',
                        email = '".$email."',
                        username = '".$username."'
                        where id_usuario = ".$id." 
                   ";

    if(!mysqli_query($connection, $updateUsuario)) {
        Logger::setLog(mysqli_error($connection), "Usuarios-Formulario de Edition");
        mysqli_rollback($connection);
        header("Location: ../../../../views/admin/user/editarUsuario/?err=2");
    }else{
        header("Location: ../../../../views/admin/user/editarUsuario/success.php");
    }
    // print_r($updateUsuario);

}

   
   
    

?>