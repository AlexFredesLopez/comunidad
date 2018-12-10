<?php 

class Loader{


    public static function getGlobalConfig()
    {
        return parse_ini_file(__DIR__ . "/config/global.ini");
    }

    public static function getConfig()
    {
        return parse_ini_file(__DIR__ . "/config/config.ini");
    }


    public static function isLoggedIn($modulo)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
       
        if (!isset($_SESSION['logged'])) {
            return false;
        } else {
            if ($_SESSION['perfil'] == $modulo) {
                return true;
            } else {
                return false;
            }
        }        
    }


    public static function destroySession()
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
            
        }
    }


    public static function getUrlBase()
    {
        $config = self::getGlobalConfig();
        return $config['base_url'];
    }

    public static function toUrl($url)
    {
        $toUrl = '<script>document.location="' . $url . '";</script>';
        return $toUrl;
    }


    public static function listarUsuarios()
    {
        $config = self::getConfig();
        $users = array();

        if (self::isLoggedIn($config['id_administrador'])) {
            $i = 0;
            require ('connection/connectionMySql.php');
            $connection = ConnectionMysql::getInstance()->getConnection();
            $query = "SELECT * FROM usuario";
            $usersQuery = mysqli_query($connection, $query);
            while ($row = $usersQuery->fetch_array()) {
                $users[$i]['id_usuario'] = $row['id_usuario'];
                $users[$i]['nombre'] = $row['nombre'];
                $users[$i]['apellido'] = $row['apellido'];
                $users[$i]['email'] = $row['email'];
                $users[$i]['username'] = $row['username'];
                $users[$i]['password'] = $row['password'];
                $users[$i]['perfil'] = $row['perfil'];
                $users[$i]['activo'] = $row['activo'];
                $i++;
            }
        }
        return $users;
    }

    public static function listarCondominios(){
        $config = self::getConfig();
        $condominio = array();

        if (self::isLoggedIn($config['id_administrador'])) {
            $i = 0;
            require ('connection/connectionMySql.php');
            $connection = ConnectionMysql::getInstance()->getConnection();
            $query = "SELECT * FROM condominio";
            $condominioQuery = mysqli_query($connection, $query);
            while ($row = $condominioQuery->fetch_array()) {
                $condominio[$i]['id_condominio'] = $row['id_condominio'];
                $condominio[$i]['nombre_condominio'] = $row['nombre_condominio'];
                $condominio[$i]['alias'] = $row['alias'];
                $condominio[$i]['activo'] = $row['activo'];
                $condominio[$i]['activoName'] = isset($row['activo']) && $row['activo'] == 1 ? 'Activo' : 'Inactivo';
                $i++;
            }
        }
        return $condominio;
    }

    public static function getIconStatus($modulo, $estado)
    {
        $icon = '<div class="status_ball"></div>';
        if ($modulo == 'usuarios') {
            switch ($estado) {
                case 1:
                    $icon = '<div class="status_ball status_ok" title="Publicado"></div>';
                    break;
                case 0:
                    $icon = '<div class="status_ball status_dng" title="Eliminado"></div>';
                    break;
            }
        } else if ($modulo == 'condominio') {
            switch ($estado) {
                case 0:
                    $icon = '<div class="status_ball status_dng" title="Condominio Incactivo"></div>';
                    break;
                case 1:
                    $icon = '<div class="status_ball status_ok" title="Condominio Activo"></div>';
                    break;
            }
        } else if ($modulo == 'administracion-fondosybecas') {
            switch ($estado) {
                case 0:
                    $icon = '<div class="status_ball status_dng" title="Publicación desactivada"></div>';
                    break;
                case 1:
                    $icon = '<div class="status_ball status_ok" title="Publicación activada"></div>';
                    break;
            }
        } else if ($modulo == 'administracion-fichas') {
            switch ($estado) {
                case 0:
                    $icon = '<div class="status_ball" title="Ficha pendiente de aprobación"></div>';
                    break;
                case 1:
                    $icon = '<div class="status_ball status_wrn" title="Ficha Aprobada"></div>';
                    break;
                case 2:
                    $icon = '<div class="status_ball status_ok" title="Ficha con mentor asociado"></div>';
                    break;
                case 3:
                    $icon = '<div class="status_ball status_dng" title="Ficha Rechazada"></div>';
                    break;
                case 4:
                    $icon = '<div class="status_ball status_ok" title="Ficha cerrada"></div>';
                    break;
            }
        }
        return $icon;
    }

    public static function getUserById($id){
        $config = self::getConfig();
        $usuarioEdit = array();
        require ('connection/connectionMySql.php');
        if (self::isLoggedIn($config['id_administrador'])) {
            $i = 0;
         
            $connection = ConnectionMysql::getInstance()->getConnection();
            $query = "SELECT * FROM usuario where id_usuario = " .$id;
            $condominioQuery = mysqli_query($connection, $query);
            while ($row = $condominioQuery->fetch_array()) {
                $usuarioEdit[$i]['id_usuario'] = $row['id_usuario'];
                $usuarioEdit[$i]['nombre'] = $row['nombre'];
                $usuarioEdit[$i]['apellido'] = $row['apellido'];
                $usuarioEdit[$i]['email'] = $row['email'];
                $usuarioEdit[$i]['username'] = $row['username'];
                $i++;
            }
        }
        return $usuarioEdit;
       
    }

    public static function getCondominioById($id){
        $config = self::getConfig();
        $usuarioEdit = array();
        require ('connection/connectionMySql.php');
        if (self::isLoggedIn($config['id_administrador'])) {
            $i = 0;
         
            $connection = ConnectionMysql::getInstance()->getConnection();
            $query = "SELECT * FROM condominio where id_condominio = " .$id;
            $condominioQuery = mysqli_query($connection, $query);
            while ($row = $condominioQuery->fetch_array()) {
                $usuarioEdit[$i]['id_condominio'] = $row['id_condominio'];
                $usuarioEdit[$i]['nombre_condominio'] = $row['nombre_condominio'];
                $usuarioEdit[$i]['alias'] = $row['alias'];
                $usuarioEdit[$i]['activo'] = $row['activo'];
                $i++;
            }
        }
        return $usuarioEdit;
       
    }


    public static function getLugar(){
        $config = self::getConfig();
        $usuarioEdit = array();
        require ('connection/connectionMySql.php');
            $i = 0;
         
            $connection = ConnectionMysql::getInstance()->getConnection();
            $query = "SELECT * FROM lugar_evento where activo = 1";
            $condominioQuery = mysqli_query($connection, $query);
            while ($row = $condominioQuery->fetch_array()) {
                $usuarioEdit[$i]['id_lugar'] = $row['id_lugar'];
                $usuarioEdit[$i]['nombre_lugar'] = $row['nombre_lugar'];
                $usuarioEdit[$i]['activo'] = $row['activo'];
                $i++;
            }
        return $usuarioEdit;
    }

}



?>