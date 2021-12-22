<?php 

namespace App\Controllers;
use App\Models\BooksModel;

class book extends BaseController{
    public function show($bookid){

        $db=\Config\Database::connect(); 
        $builder = $db->table('books');
        $query = $builder->getWhere(['book_id'=>$bookid])->getFirstRow();
        return view('book', array('book' => $query));
    }
}

