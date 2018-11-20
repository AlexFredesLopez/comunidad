<!DOCTYPE html>
<html lang="es">
<?php include __DIR__."/../../includes/php/header.php";?>
<body class="landing is-preload">
<!-- Navigation -->
<link rel="stylesheet" href="../../includes/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../includes/css/util.css">
<link rel="stylesheet" type="text/css" href="../../includes/css/main.css">
<?php include __DIR__."/../../includes/php/navBar.php";?>

<?php
if(Loader::isLoggedIn($config['id_usuarios'])) {
    echo Loader::toUrl('../landing/');
}
?>

<div class="">

        <div class="container-login100" style="background-image: url('../../includes/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33" style="margin-top: 60px;">
                <form class="login100-form validate-form flex-sb flex-w" action="../../controllers/login/loginController.php" method="POST">
                    <span class="login100-form-title p-b-53">
						Inicia Sesion
					</span>

                    <!-- <a href="#" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i> Facebook
                    </a> -->

                    <!-- <a href="#" class="btn-google m-b-20">
                        <img src="images/icons/icon-google.png" alt="GOOGLE"> Google
                    </a> -->

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
							Usuario
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
							Password
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
							Ingresar
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

<?php include __DIR__."/../../includes/php/footer.php";?>


<script src="../../includes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../includes/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../includes/vendor/bootstrap/js/popper.js"></script>
<script src="../../includes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../includes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../includes/vendor/daterangepicker/moment.min.js"></script>
<script src="../../includes/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../includes/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

<script src="../../includes/js/main.js"></script>
<script src="../../includes/assets/js/jquery.min.js"></script>
<script src="../../includes/assets/js/jquery.dropotron.min.js"></script>
<script src="../../includes/assets/js/jquery.scrollex.min.js"></script>
<script src="../../includes/assets/js/browser.min.js"></script>
<script src="../../includes/assets/js/breakpoints.min.js"></script>
<script src="../../includes/assets/js/util.js"></script>
<script src="../../includes/assets/js/main.js"></script>
<!-- /.container -->

</body>

</html>
