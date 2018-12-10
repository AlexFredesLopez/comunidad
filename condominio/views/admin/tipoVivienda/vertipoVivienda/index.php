<!DOCTYPE html>
<?php ini_set('display_errors', 1);?>
<html lang="es">
<?php include __DIR__."/../../../../includes/php/headerAdmin.php";
?>
<body class="landing is-preload">
<!-- Navigation -->
<link rel="stylesheet" href="../../../../includes/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../../../includes/css/util.css">
<link rel="stylesheet" type="text/css" href="../../../../includes/css/main.css">
<style>
.input100 {
    font-family: Poppins-Regular;
    color: #333333;
    line-height: 1.2;
    font-size: 18px;
    display: block;
    width: 100%;
    background: transparent;
    height: 60px;
    padding: 0 20px;
}
</style>
<?php include __DIR__."/../../../../includes/php/navBarAdmin.php";?>
<?php
if(! Loader::isLoggedIn($config['id_administrador'])) {
    echo Loader::toUrl('../../landing/');
}
?>

<section id="banner">
    <h2>Ver Tipo Vivienda</h2>

    <div class="">
</section>




<?php include __DIR__."/../../../../includes/php/footerAdmin.php";?>


<script src="../../../../includes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../../../includes/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../../../includes/vendor/bootstrap/js/popper.js"></script>
<script src="../../../../includes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../../../includes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../../../includes/vendor/daterangepicker/moment.min.js"></script>
<script src="../../../../includes/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../../../includes/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

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
