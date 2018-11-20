<!DOCTYPE html>
<html lang="es">
<?php include __DIR__."/../../includes/php/header.php";?>
<body>
<!-- Navigation -->
<?php
include __DIR__."/../../includes/php/navBar.php";
if(!Loader::isLoggedIn($config['id_administrador']) || !Loader::isLoggedIn($config['id_usuarios'])){
    echo Loader::toUrl('../landing/');
}
?>
<!-- Page Content -->
<meta http-equiv="refresh" content="3; URL=../landing/">
<div class="container firstcontent">
    <div class="row text-center">
        <div class="col-md-6 col-sm-offset-3">
            <h2>Has cerrado la sesión...</h2>
            <p>Serás redirigido en unos segundos...</p>
            <img src="../../includes/img/loader.gif" width="200" height="200" />
        </div>
    </div>
</div>

<?php include __DIR__."/../../includes/php/footer.php";?>

<!-- /.container -->

</body>
</html>
<?php Loader::destroySession();
$_SESSION['logged'] = true;?>