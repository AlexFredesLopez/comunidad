<!DOCTYPE html>
<?php ini_set('display_errors', 1);?>
<html lang="es">
<?php include __DIR__."../../../../includes/php/header.php";
?>
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
<?php include __DIR__."../../../../includes/php/navBar.php";?>


<section id="banner">
    <h2>Agregar Evento</h2>


<?php
if(isset($_GET['err'])) {
    switch ($_GET['err']) {
        case "3":
            $msg = 'El email y/o contraseña ingresado no existe';
            break;
        default:
            $msg = '';
            break;
    }
    ?>
    <div class="alert alert-danger">
        <?php echo $msg;?>
    </div>
<?php
}
?>
 <div class="container-login100">
    <div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-33" style="margin-top: 60px;width: 480px;">
        <form class="login100-form validate-form flex-sb flex-w" action="../../../controllers/evento/register-evento/register-evento.php" method="POST">
            <div class="p-t-31 p-b-9">
                <span class="txt1">
                    Nombre Evento
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Nombre Condominio is required">
                <input class="input100" type="text" name="nombre_evento" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Fecha Reserva
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Alias is required">
                <input class="input100" type="date" name="fecha_evento" style="color:black;">
                <span class="focus-input100"></span>
            </div>
            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Cantidad Invitados
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Alias is required">
                <input class="input100" type="number" name="cantInvitados" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Lugar
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Alias is required">
            <select name="lugar" id="lugar"  style="color:black;" class="form-control">
                <?php $lugares = Loader::getLugar();
                    foreach($lugares as $id => $lugar){?>
                    <option value="<?php echo $lugar['id_lugar']?>"><?php echo $lugar['nombre_lugar']?></option>

                <?php } ?>
            </select> 
                <span class="focus-input100"></span>
            </div>
            <input type="hidden" value="<?php echo $_SESSION['usuario']->getId();?>" name="id_usuario">

             <div class="container-login100-form-btn m-t-17">
                <button class="login100-form-btn">
                    Registrar Evento
                </button>
            </div>
        </form>
    </div>
</div>
</div>
</section>




<?php include __DIR__."../../../../includes/php/footer.php";?>


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
