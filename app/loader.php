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
            require_once __DIR__ . "/connection/connectionMySqL.php";
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
                $i++;
            }
        }
        return $users;
    }
}

?>