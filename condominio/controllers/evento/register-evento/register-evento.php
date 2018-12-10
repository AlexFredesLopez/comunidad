<?php 
ini_set('display_errors', 1);
require_once $_SERVER['DOCUMENT_ROOT'].'/comunidad/app/logger.php';
// require ('../../../../../app/logger.php');
if(empty($_POST)) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/comunidad/app/loader.php';
   $urlPath = Loader::getUrlBase();
   header("location: ".$urlPath."../views/evento/register-evento/");
}else {
    require_once $_SERVER['DOCUMENT_ROOT'].'/comunidad/app/loader.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/comunidad/app/connection/connectionMySql.php';
  
   $config = Loader::getConfig();
   $connection = ConnectionMysql::getInstance()->getConnection();
       $nombre_evento = $_POST['nombre_evento'];
   $fecha_evento = $_POST['fecha_evento'];
   $cantInvitados = $_POST['cantInvitados'];
   $lugar = $_POST['lugar'];
   $id_usuario = $_POST['id_usuario'];
  
    $queryConsulta = " select * from eventos where fecha_evento_vr like '%".$fecha_evento."%'";

    if(!mysqli_query($connection, $queryConsulta)) {
        $insertPerfil = "INSERT INTO eventos (id_evento, nombre_evento, fecha_evento, fecha_evento_vr, cant_invitados, lugar, id_user)
        VALUES ( NULL, '".$nombre_evento."', '" .$fecha_evento."' , '" .$fecha_evento."', " .$cantInvitados.", " .$lugar." , " .$id_usuario." )";
        
   if(!mysqli_query($connection, $insertPerfil)) {
       Logger::setLog(mysqli_error($connection), "Usuarios-Formulario de Registro");
       mysqli_rollback($connection);
       header("Location: ../../../views/evento/register-evento/?err=2");
   }else{
       header("Location: ../../../views/evento/register-evento/success.php");
   }

      
    }else{
        Logger::setLog(mysqli_error($connection), "Usuarios-Formulario de Registro");
        mysqli_rollback($connection);
        header("Location: ../../../views/evento/register-evento/?err=3");
    }
   


// print_r($insertPerfil);
// exit;
   
}


?>