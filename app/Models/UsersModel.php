<?php

namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $createdField = 'created_at';
    protected $allowedFields = ['name','surname', 'email', 'password', 'password_confirm', 'created_at'];

}

?>