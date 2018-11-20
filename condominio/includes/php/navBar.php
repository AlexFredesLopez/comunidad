<header id="header" class="alt">
<h1><a href="../landing/">Condominio</a> </h1>
<br>
 <?php
    if( Loader::isLoggedIn($config['id_usuarios'])) {
        $usuario = $_SESSION['usuario'];
        ?>
       
        <nav id="nav">
            <ul>
                <li><a href="../../landing/">Home</a></li>
                <li>
                    <a href="#" class="icon fa-angle-down">Layouts</a>
                    <ul>
                        <li><a href="../registro/">Regístrate</a></li>
                        <li><a href="../nosotros/">¿Quienes Somos?</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li>
                            <a href="#">Submenu</a>
                            <ul>
                                <li><a href="#">Option One</a></li>
                                <li><a href="#">Option Two</a></li>
                                <li><a href="#">Option Three</a></li>
                                <li><a href="#">Option Four</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="button">  <?php echo "Bienvenido(a) ".$usuario->getUsername();?></a></li>
                <li><a href="../logout/" class="button">Cerrar Sesión</a></li>
            </ul>
        </nav>
    <?php }else{?>
        <nav id="nav">
            <ul>
                <li><a href="../landing/">Home</a></li>
                <li>
                    <a href="#" class="icon fa-angle-down">Layouts</a>
                    <ul>
                        <li><a href="../registro/">Regístrate</a></li>
                        <li><a href="../nosotros/">¿Quienes Somos?</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li>
                            <a href="#">Submenu</a>
                            <ul>
                                <li><a href="#">Option One</a></li>
                                <li><a href="#">Option Two</a></li>
                                <li><a href="#">Option Three</a></li>
                                <li><a href="#">Option Four</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="../login/" class="button">Inicia Sesión</a></li>
            </ul>
        </nav>




    <?php }?>
</header>