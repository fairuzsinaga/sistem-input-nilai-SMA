<?php

namespace App\Models\Users;

use CodeIgniter\Model;

class loginModel extends Model
{

    protected $table = "user";
    protected $primaryKey = "ID_user";

    public function validation($username, $password)
    {

        $db = \Config\Database::connect();
        $table = $this->table;

        $levelUsers = $db->query("SELECT level FROM $table WHERE username=$username AND password=$password");

        return $levelUsers;
    }

    public function getUsers()
    {
        return $this->findAll();
    }
}
