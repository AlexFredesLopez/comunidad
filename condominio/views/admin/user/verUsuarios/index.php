<!DOCTYPE html>
<html lang="es">

<?php ini_set('display_errors', 1);?>
<?php include __DIR__."/../../../../includes/php/headerAdmin.php";?>
<body class="landing is-preload">
<!-- Navigation -->
<link rel="stylesheet" href="../../../../includes/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../../../includes/css/util.css">
<link rel="stylesheet" type="text/css" href="../../../../includes/css/main.css">

<link id="table1_style" type="text/css" rel="stylesheet" href="../../../../includes/css/filtergrid.css">
<link rel="stylesheet" href="../../../../includes/css/TF_Default.css">
<script type="text/javascript" language="javascript" src="../../../../includes/js/tablefilter.js"></script>

<?php include __DIR__."/../../../../includes/php/navBarAdmin.php";?>
<?php
if(! Loader::isLoggedIn($config['id_administrador'])) {
    echo Loader::toUrl('../../landing/');
}
?>

<?php
$perfil = $config['id_administrador'];
?>
<?php $usuariosList = Loader::listarUsuarios(); ?>
<style>
.status_ball {
    display: inline-block;
    border-radius: 50%;
    width: 10px;
    height: 10px;
    background: #999;
}

.status_dng {
    background: #B00;
}

.status_ok {
    background: #292;
}
</style>
<section id="banner">
    <h2>Usuarios</h2>

    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-33" style="width: 1200px; color:black;">
            <table width="100%" border="0" id="table1" class="grid listado_entabla paginated TF">
                <thead>
                <tr>
                    <th class="text-center" style="font-size: 20px;">Nombre</th>
                    <th class="text-center" style="font-size: 20px;">Apellido</th>
                    <th class="text-center" style="font-size: 20px;">Email</th>
                    <th class="text-center" style="font-size: 20px;">username</th>
                    <th class="text-center" style="font-size: 20px;">Perffil</th>
                    <th class="text-center" style="font-size: 20px;">Editar Usuario</th>
                    <th class="text-center" style="font-size: 20px;">Desactivar</th>
                    <th class="text-center" style="font-size: 20px;">Estado</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($usuariosList) > 0): ?>
                    <?php foreach ($usuariosList as $value): ?>
                        <tr>
                            <td style="font-size: 18px;"><?php echo $value['nombre'] ?></td>
                            <td style="font-size: 18px;"><?php echo $value['apellido'] ?></td>
                            <td style="font-size: 18px;"><?php echo $value['email'] ?></td>     
                            <td style="font-size: 18px;"><?php echo $value['username'] ?></td>                    
                            <td style="font-size: 18px;"><?php echo $value['perfil'] ?></td>      
                            <td style="font-size: 18px;"><a href="../editarUsuario/?id=<?php echo $value['id_usuario'] ?>">Editar</a></td>  
                            <?php if($value['activo'] == 1){?>
                                <td style="font-size: 18px;"><a style="cursor: pointer" onclick="desactivarUsuario('<?php echo $value['id_usuario']?>')"><span class="glyphicon glyphicon-remove"></span>Desactivar Usuario</a></td> 
                            <?php }else{?>
                                <td style="font-size: 18px;"><a style="cursor: pointer" onclick="activarUsuario('<?php echo $value['id_usuario']?>')"><span class="glyphicon glyphicon-remove"></span>Activar Usuario</a></td> 
                            <?php }?>
                            <td class="text-center"><?php echo Loader::getIconStatus('usuarios', $value['activo'])?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">Sin registros</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script type="text/javascript">
    function desactivarUsuario(id) {
        if(confirm('¿Está seguro de desactivar este usuario?')) {
            document.location='../../../../controllers/admin/user/desactivar-usuario/desactivar-usuario.php?u='+id;
        }
    }
    function activarUsuario(id) {
        if(confirm('¿Está seguro de activar este usuario?')) {
            document.location='../../../../controllers/admin/user/activar-usuario/activar-usuario.php?u='+id;
        }
    }
</script>      


 

<script language="javascript" type="text/javascript">
var table3Filters = {
  

}
var tf03 = new TF("table1", table3Filters);
tf03.AddGrid();
</script>


<?php include __DIR__."/../../../../includes/php/footerAdmin.php";?>


<script src="../../../../includes/assets/js/jquery.min.js"></script>
<script src="../../../../includes/assets/js/jquery.dropotron.min.js"></script>
<script src="../../../../includes/assets/js/jquery.scrollex.min.js"></script>
<script src="../../../../includes/assets/js/browser.min.js"></script>
<script src="../../../../includes/assets/js/breakpoints.min.js"></script>
<script src="../../../../includes/assets/js/util.js"></script>
<script src="../../../../includes/assets/js/main.js"></script>
<!-- /.container -->

</body>

</html>
