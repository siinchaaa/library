<?php

namespace App\Models;
use CodeIgniter\Model;

class BooksModel extends Model{
    protected $table      = 'books';
    protected $primaryKey = 'book_id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['bookname', 'author', 'description', 'image', 'category'];

}

