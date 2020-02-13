<?php

namespace user;

use db\Database;
use table\Table;

include_once './Form.php';
include_once '../../Frame/Database.php';
include_once './Tables.php';

class Users extends Database
{
    public $username;
    public $email;
    private $password;

    public function GetUsers()
    {
        $sql = "SELECT * FROM `users`";
        return $this->select($sql);
    }

    public function SetNewUser()
    {
        if (isset($_POST['sent'])) {
            $this->username = $_POST['username'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES (\"$this->username\", \"$this->email\", \"$this->password\")";
            $this->deleteInsert($sql);
        }
//        if (isset($_POST['edit'])) {
//            $this->username = $_POST['username'];
//            $this->email = $_POST['email'];
//            $this->password = $_POST['password'];
//            $sql = "SELECT `username`, `email`, `password`, `edited` FROM `users` WHERE `email` = \"$this->email\"";
//
//        }
    }
}

$form->RegForm();
$user = New Users();
$user->SetNewUser();
$table->GetAllUsersAllDate($user->GetUsers());
$user->select();

print $password;
?>