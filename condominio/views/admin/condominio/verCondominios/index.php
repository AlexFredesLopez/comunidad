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
<?php $condominiosList = Loader::listarCondominios(); ?>

<section id="banner">
    <h2>Ver Condominios</h2>

    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-33" style="width: 1200px; color:black;">
            <table width="100%" border="0" id="table2" class="grid listado_entabla paginated TF">
                <thead>
                <tr>
                    <th class="text-center" style="font-size: 20px;">Nombre Condominio</th>
                    <th class="text-center" style="font-size: 20px;">Alias</th>
                    <th class="text-center" style="font-size: 20px;">Activo</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($condominiosList) > 0): ?>
                    <?php foreach ($condominiosList as $value): ?>
                        <tr>
                            <td style="font-size: 18px;"><?php echo $value['nombre_condominio'] ?></td>
                            <td style="font-size: 18px;"><?php echo $value['alias'] ?></td>     
                            <td style="font-size: 18px; color:<?php echo isset($value['activo']) && $value['activo'] == 1  ?'green' : 'red';?>"><?php echo $value['activoName'] ?></td>                                  
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

<script language="javascript" type="text/javascript">
var table3Filters = {
  

}
var tf03 = new TF("table2", table3Filters);
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
