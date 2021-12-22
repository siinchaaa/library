<?php

namespace App\Models;
use CodeIgniter\Model;

class HistoryModel extends Model{
    protected $table      = 'history';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['user_id','book_id', 'removed_at'];
}
?>