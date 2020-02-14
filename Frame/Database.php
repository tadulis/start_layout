<?php

namespace db;

include_once '../config.php';

use PDO;
use PDOException;

class Database
{
    public function __construct()
    {
        if(CONFIG['use_database']) {
            try {
                $this->connection = new PDO("mysql:host=" . CONFIG['db_hostname']
                 . ";dbname=" . CONFIG['db_name'] . ";charset=" . CONFIG['db_charset']
                 , CONFIG['db_username'], CONFIG['db_password']);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                print "DB Connection Failed: " . $e->getMessage();
            }
        }
    }

    public function select($sql)
    {
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }



    public function deleteInsert($sql)
    {
        return $this->connection->query($sql);
    }

    function __destruct()
    {
        $this->connection = null;
    }
}

$db = New Database;
$sql = "SELECT * FROM `users`";
$data = $db->select($sql);
var_dump($data);