<?php 



ini_set('display_errors', 1);
 require ('../../../../../app/logger.php');
if(empty($_POST)) {
    require ('../../../../../app/loader.php');
    $urlPath = Loader::getUrlBase();
    header("location: ".$urlPath."../views/admin/condominio/register-condominio/");
}else {
    require ('../../../../../app/loader.php');
    require ('../../../../../app/connection/connectionMySql.php');
    $config = Loader::getConfig();
    $connection = ConnectionMysql::getInstance()->getConnection();
   
    if(isset($_POST['activo'])){
        $activo = 1;
     
     }else{
         $activo = 0;
     }

     
    $nombre_condominio = $_POST['nombre_condominio'];
    $alias = $_POST['alias'];
   

    $insertPerfil = "INSERT INTO condominio (id_condominio, nombre_condominio, alias, activo)
              VALUES ( NULL, '".$nombre_condominio."', '" .$alias."' , '" .$activo."')";

    if(!mysqli_query($connection, $insertPerfil)) {
        Logger::setLog(mysqli_error($connection), "Usuarios-Formulario de Registro");
        mysqli_rollback($connection);
        header("Location: ../../../../views/admin/condominio/agregarCondominio/?err=2");
    }else{
        header("Location: ../../../../views/admin/condominio/agregarCondominio/success.php");
    }
}




?>