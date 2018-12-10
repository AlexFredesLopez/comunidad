<?php 
ini_set('display_errors', 1);
 require ('../../../../../app/logger.php');
if(empty($_GET)) {
    require ('../../../../../app/loader.php');
    $urlPath = Loader::getUrlBase();
    header("location: ".$urlPath."../views/admin/condominio/verCondominios/");
}else {
    require ('../../../../../app/loader.php');
    require ('../../../../../app/connection/connectionMySql.php');
    $config = Loader::getConfig();
    $connection = ConnectionMysql::getInstance()->getConnection();
   
    $id_condominio = $_GET['u'];

    $updatePerfil = "UPDATE condominio SET activo = 1 WHERE id_condominio = ".$id_condominio;

    if(!mysqli_query($connection, $updatePerfil)) {
        Logger::setLog(mysqli_error($connection), "Usuarios-Formulario de Registro");
        mysqli_rollback($connection);
        header("Location: ../../../../views/admin/condominio/verCondominios/?err=2");
    }else{
        header("Location: ../../../../views/admin/condominio/verCondominios/?succ=1");
    }
}
