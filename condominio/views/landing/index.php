<!DOCTYPE html>
<html lang="es">
<?php include __DIR__."/../../includes/php/header.php";?>
<body class="landing is-preload">
<!-- Navigation -->
<link rel="stylesheet" href="../../includes/assets/css/main.css" />
<?php include __DIR__."/../../includes/php/navBar.php";?>

<!-- Page Content -->
        <section id="banner">
            <h2>Condominio</h2>
            <p>Todo al alcance de tu mano.</p>
            <?php if(!isset($usuario)){?>
            <ul class="actions special">
                <li><a href="../login/" class="button primary">Inicia Sesión</a></li>
            </ul>
            <?php } ?>
        </section>

        <!-- Main -->
        <section id="main" class="container">

          

            <section class="box special features">
                <div class="features-row">
                    <section>
                        <span class="icon major fa-bolt accent2"></span>
                        <h3>Magna etiam</h3>
                        <p>Aquí podrás reservar todos tus eventos</p>
                    </section>
                    <section>
                        <span class="icon major fa-area-chart accent3"></span>
                        <h3>Ipsum dolor</h3>
                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    </section>
                </div>
                <div class="features-row">
                    <section>
                        <span class="icon major fa-cloud accent4"></span>
                        <h3>Sed feugiat</h3>
                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    </section>
                    <section>
                        <span class="icon major fa-lock accent5"></span>
                        <h3>Enim phasellus</h3>
                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    </section>
                </div>
            </section>

            <div class="row">
                <div class="col-6 col-12-narrower">

                    <section class="box special">
                        <span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
                        <h3>Sed lorem adipiscing</h3>
                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                        <ul class="actions special">
                            <li><a href="#" class="button alt">Learn More</a></li>
                        </ul>
                    </section>

                </div>
                <div class="col-6 col-12-narrower">

                    <section class="box special">
                        <span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
                        <h3>Accumsan integer</h3>
                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                        <ul class="actions special">
                            <li><a href="#" class="button alt">Learn More</a></li>
                        </ul>
                    </section>

                </div>
            </div>

        </section>


<?php include __DIR__."/../../includes/php/footer.php";?>


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
