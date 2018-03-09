<?php
namespace libs;

use \PDO;

class Db
{
    private $conn;

    public function __construct()
    {
        $config = parse_ini_file('config/config.ini', true);
        
        $host = $config['db']['host'];
        $db   = $config['db']['name'];
        $user = $config['db']['user'];
        $pass = $config['db']['password'];;
        $charset = $config['db']['charset'];;

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->conn = new PDO($dsn, $user, $pass, $opt);
    }
    
    public function getConn()
    {
        return $this->conn;
    }
}