<?php
namespace Model;
use \Core\Database;
class UserModel{
    private $id, $email, $password;

    public function __construct(){
        var_dump(Database :: dbc());
    }
}

// new UserModel();