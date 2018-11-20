<!DOCTYPE html>
<html lang="es">
<?php include __DIR__."/../../../includes/php/headerAdmin.php";?>
<body class="landing is-preload">
<!-- Navigation -->
<link rel="stylesheet" href="../../../includes/assets/css/main.css" />
<?php include __DIR__."/../../../includes/php/navBarAdmin.php";?>

<link id="table1_style" type="text/css" rel="stylesheet" href="../../../includes/css/filtergrid.css">
<link rel="stylesheet" href="../../../includes/css/TF_Default.css">
<script type="text/javascript" language="javascript" src="../../../includes/js/tablefilter.js"></script>

<?php
if(! Loader::isLoggedIn($config['id_administrador'])) {
    echo Loader::toUrl('../../landing/');
}
?>

<?php
$perfil = $config['id_administrador'];
?>
<?php $usuariosList = Loader::listarUsuarios(); ?>

<section id="banner">
    <h2>Usuarios</h2>
    
</section>


<table width="100%" border="0" id="table1" class="grid listado_entabla paginated TF">
    <thead>
    <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Email</th>
        <th class="text-center">username</th>
        <th class="text-center">Perffil</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($usuariosList) > 0): ?>
        <?php foreach ($usuariosList as $value): ?>
            <tr>
                <td><?php echo $value['nombre'] ?></td>
                <td><?php echo $value['apellido'] ?></td>
                <td><?php echo $value['email'] ?></td>     
                <td><?php echo $value['username'] ?></td>                    
                <td><?php echo $value['perfil'] ?></td>                
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7" class="text-center">Sin registros</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

 

<script language="javascript" type="text/javascript">
var table3Filters = {
  

}
var tf03 = new TF("table1", table3Filters);
tf03.AddGrid();
</script>


<?php include __DIR__."/../../../includes/php/footerAdmin.php";?>


<script src="../../../includes/assets/js/jquery.min.js"></script>
<script src="../../../includes/assets/js/jquery.dropotron.min.js"></script>
<script src="../../../includes/assets/js/jquery.scrollex.min.js"></script>
<script src="../../../includes/assets/js/browser.min.js"></script>
<script src="../../../includes/assets/js/breakpoints.min.js"></script>
<script src="../../../includes/assets/js/util.js"></script>
<script src="../../../includes/assets/js/main.js"></script>
<!-- /.container -->

</body>

</html>
