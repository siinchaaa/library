<?php 

namespace App\Controllers;
use App\Models\BooksModel;

class categories extends BaseController{
    public function show($category){

        $db=\Config\Database::connect(); 
        $builder = $db->table('books');
        $query = $builder->getWhere(['category'=>$category]);
        return view('categories', array('categories' => $query));
    }


}