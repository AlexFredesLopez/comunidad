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


<section id="banner">
    <h2>Eliminar Condominio</h2>
</section>

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
