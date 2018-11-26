<?php
require_once __DIR__ . '/../loader.php';

class ConnectionMysql {
    private $_connection;
    private static $_instance; //The single instance
    private $_host;
    private $_username;
    private $_password;
    private $_database;
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct() {
        $config = Loader::getGlobalConfig();
        $this->_dbHost = $config["host_mysql"];
        $this->_dbUser = $config["user_mysql"];
        $this->_dbPassword = $config["password_mysql"];
        $this->_dbName = $config["db_name"];
        $this->_connection = new mysqli($this->_dbHost, $this->_dbUser, $this->_dbPassword, $this->_dbName);
        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() {

    }
    // Get mysqli connection
    public function getConnection() {
        mysqli_set_charset($this->_connection,"utf8");
        return $this->_connection;
    }

}
