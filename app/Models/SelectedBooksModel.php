<?php

namespace App\Models;
use CodeIgniter\Model;

class SelectedBooksModel extends Model{
    protected $table      = 'selected_books';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['book_id','user_id'];
}
?>