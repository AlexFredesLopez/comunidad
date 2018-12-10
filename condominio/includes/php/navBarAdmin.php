<header id="header" class="alt">
<h1><a href="../../landing/">Condominio</a> </h1>
<br>
 <?php
    if(Loader::isLoggedIn($config['id_administrador'])) {
        $usuario = $_SESSION['usuario'];
        ?>
       
        <nav id="nav">
            <ul>
                <li><a href="../landing/">Home</a></li>
                <li>
                    <a href="#" class="icon fa-angle-down">Mantenedores</a>
                    <ul>
                        <li>
                            <a href="#">Usuario</a>
                            <ul>
                                <li><a href="<?php echo Loader::getUrlBase();?>views/admin/user/register-user/">Agregar Usuario</a></li>
                                <!-- <li><a href="<?php //echo Loader::getUrlBase();?>views/admin/user/editarUsuario/">Editar Usuario</a></li>
                                <li><a href="<?php //echo Loader::getUrlBase();?>views/admin/user/eliminarUsuario/">Eliminar Usuario</a></li> -->
                                <li><a href="<?php echo Loader::getUrlBase();?>views/admin/user/verUsuarios/">Ver Usuarios</a></li>
                            </ul>
                        </li>
                        <li>
                        
                            <a href="#">Condominio</a>
                            <ul>
                                <li><a href="<?php echo Loader::getUrlBase();?>views/admin/condominio/agregarCondominio/">Agregar Condominio</a></li>
                                <!-- <li><a href="<?php //echo Loader::getUrlBase();?>views/admin/condominio/editarCondominio/">Editar Condominio</a></li>
                                <li><a href="<?php //echo Loader::getUrlBase();?>views/admin/condominio/eliminarCondominio/">Eliminar Condominio</a></li> -->
                                <li><a href="<?php echo Loader::getUrlBase();?>views/admin/condominio/verCondominios/">Ver Condominio</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Tipo Vivienda</a>
                            <ul>
                                <li><a href="<?php echo Loader::getUrlBase();?>views/admin/tipoVivienda/agregartipoVivienda/">Agregar Tipo Vivienda</a></li>
                                <li><a href="<?php echo Loader::getUrlBase();?>views/admin/tipoVivienda/vertipoVivienda/">Ver Tipo Vivienda</a></li>
                            </ul>
                        </li>

                         <li>
                            <a href="#">Vivienda</a>
                            <ul>
                                <li><a href="#">Agregar Vivienda</a></li>
                                <li><a href="#">Editar Vivienda</a></li>
                                <li><a href="#">Eliminar Vivienda</a></li>
                                <li><a href="#">Ver Vivienda</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="button">  <?php echo "Bienvenido(a) ".$usuario->getUsername();?></a></li>
                <li><a href="../../logout/" class="button">Cerrar Sesión</a></li>
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