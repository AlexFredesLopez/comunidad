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

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<?php
$perfil = $config['id_administrador'];
$condominio = Loader::getCondominioById($_GET['id']);
?>
<section id="banner">
    <h2>editar Condominio</h2>

    <div class="container-login100">
    <div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-33" style="margin-top: 60px;width: 480px;">
        <form class="login100-form validate-form flex-sb flex-w" action="../../../../controllers/admin/condominio/editar-condominio/editarCondominioController.php" method="POST">
            <div class="p-t-31 p-b-9">
                <span class="txt1">
                    Nombre Condominio
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Nombre Condominio is required">
                <input class="input100" type="text" name="nombre_condominio" value="<?php echo $condominio[0]['nombre_condominio'];?>" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Alias
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Alias is required">
                <input class="input100" type="text"  value="<?php echo $condominio[0]['alias'];?>" name="alias" style="color:black;">
                <span class="focus-input100"></span>
            </div>

            <div class="p-t-25 p-b-9">
                <span class="txt1">
                    Activo
                </span>
                
            </div>

             <div class="p-t-25 p-b-9" style="margin: 0 auto;">
             <label class="switch">
                <input type="checkbox" class="form-control" name="activo" <?php echo  $condominio[0]['activo'] == 1 ? 'checked="checked"' : ''; ?>>
                <span class="slider round"></span>
            </label>
            </div>

            <input type="hidden" value="<?php echo $condominio[0]['id_condominio'];?>" name="id_condominio">

             <div class="container-login100-form-btn m-t-17">
                <button class="login100-form-btn">
                    Registrar Condominio
                </button>
            </div>
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
