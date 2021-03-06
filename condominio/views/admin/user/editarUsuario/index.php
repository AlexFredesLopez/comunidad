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
$id_usuario = $_GET['id'];
print_r($id_usuario);
?>
<?php //$usuariosList = Loader::listarUsuarios(); ?>


<?php $userEdit = Loader::getUserById($id_usuario);

print_r($userEdit);?>
<section id="banner">
    <h2>Editar usuario</h2>

<div class="container-login100">
    <div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-33" style="margin-top: 60px;width: 480px;">
        <form class="login100-form validate-form flex-sb flex-w" action="../../../../controllers/admin/user/edit-user/editarUsuarioController.php" method="POST">
            <div class="p-t-31 p-b-9">
                <span class="txt1">
                    Nombre
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Nombre is required">
                <input class="input100" type="text" name="nombre"  value="<?php echo $userEdit[0]['nombre'];?>" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Apellido
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Apellido is required">
                <input class="input100" type="text" name="apellido" value="<?php echo $userEdit[0]['apellido'];?>" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Email
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Email is required">
                <input class="input100" type="email" name="email" value="<?php echo $userEdit[0]['email'];?>" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Username
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Username is required">
                <input class="input100" type="text" name="username" value="<?php echo $userEdit[0]['username'];?>" style="color:black;">
                <span class="focus-input100"></span>
            </div>
            <input type="hidden" class="hidden" name="id_usuario" value="<?php echo $userEdit[0]['id_usuario']; ?>">
        
          

            <!-- <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Password
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100" type="password" name="password" style="color:black;">
                <span class="focus-input100"></span>
            </div> -->

            <div class="container-login100-form-btn m-t-17">
                <button class="login100-form-btn">
                    Editar Usuario
                </button>
            </div>

            <!-- <div class="w-full text-center p-t-55">
                <span class="txt2">
                    Not a member?
                </span>

                <a href="#" class="txt2 bo1">
                    Sign up now
                </a>
            </div> -->
        </form>
    </div>
</div>
</div>


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
