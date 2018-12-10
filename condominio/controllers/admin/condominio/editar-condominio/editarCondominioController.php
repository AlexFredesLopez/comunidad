<?php 



ini_set('display_errors', 1);
 require ('../../../../../app/logger.php');
if(empty($_POST)) {
    require ('../../../../../app/loader.php');
    $urlPath = Loader::getUrlBase();
    header("location: ".$urlPath."../views/admin/condominio/verCondominios/");
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
    $id_condominio = $_POST['id_condominio'];
     

    // $insertPerfil = "INSERT INTO condominio (id_condominio, nombre_condominio, alias, activo)
    //           VALUES ( NULL, '".$nombre_condominio."', '" .$alias."' , '" .$activo."')";

              $updateCondominio = " update condominio set 
                                    nombre_condominio = '".$nombre_condominio."',
                                    alias = '".$alias."',
                                    activo  = ".$activo."
                                    where id_condominio = ".$id_condominio."
                                    ";
 
    if(!mysqli_query($connection, $updateCondominio)) {
        Logger::setLog(mysqli_error($connection), "Usuarios-Formulario de Registro");
        mysqli_rollback($connection);
        header("Location: ../../../../views/admin/condominio/editarCondominio/?err=2");
    }else{
        header("Location: ../../../../views/admin/condominio/editarCondominio/success.php");
    }
}





?>