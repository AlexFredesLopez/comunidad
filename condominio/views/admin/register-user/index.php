<!DOCTYPE html>
<html lang="es">
<?php include __DIR__."/../../../includes/php/headerAdmin.php";?>
<body class="landing is-preload">
<!-- Navigation -->
<link rel="stylesheet" href="../../../includes/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../../includes/css/util.css">
<link rel="stylesheet" type="text/css" href="../../../includes/css/main.css">
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
<?php include __DIR__."/../../../includes/php/navBarAdmin.php";?>
<?php
if(! Loader::isLoggedIn($config['id_administrador'])) {
    echo Loader::toUrl('../../landing/');
}
?>

<section id="banner">
    <h2>Agregar Usuario</h2>

    <div class="">

<div class="container-login100">
    <div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-33" style="margin-top: 60px;width: 480px;">
        <form class="login100-form validate-form flex-sb flex-w" action="../../../controllers/admin/register-user/registerUser.php" method="POST">
            <span class="login100-form-title p-b-53">
                Inicia Sesion
            </span>
            <div class="p-t-31 p-b-9">
                <span class="txt1">
                    Nombre
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Nombre is required">
                <input class="input100" type="text" name="nombre" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Apellido
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Apellido is required">
                <input class="input100" type="text" name="apellido" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Email
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Email is required">
                <input class="input100" type="email" name="email" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Username
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Username is required">
                <input class="input100" type="text" name="username" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Password
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100" type="password" name="password" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn m-t-17">
                <button class="login100-form-btn">
                    Registrar Usuario
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




<?php include __DIR__."/../../../includes/php/footerAdmin.php";?>


<script src="../../../includes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../../includes/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../../includes/vendor/bootstrap/js/popper.js"></script>
<script src="../../../includes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../../includes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../../includes/vendor/daterangepicker/moment.min.js"></script>
<script src="../../../includes/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../../includes/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

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
