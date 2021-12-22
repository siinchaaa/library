<?php 

namespace App\Controllers;
use App\Models\HistoryModel;

class HistoryController extends BaseController{
    public function index(){
        
        $db=\Config\Database::connect(); 
        $builder = $db->table('history');
        $query = $builder->getWhere(["user_id"=>session()->get('ID')]);
        return view('history', array('data' => $query));
    }


    public function deleted_books(){

        $db=\Config\Database::connect(); 
        $builder = $db->table('history')->select('*')->join('books', 'history.book_id = books.book_id')->where('user_id', session()->get('ID'));        $query = $builder->get();

        return view('history', array('data' => $query));
    }
}