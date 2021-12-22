<?php
namespace App\Controllers;
use CodeIgniter\Controllers;

class ProfileController extends BaseController{
    public function index(){
        $session = session();
        return view('Profile');
    }
    public function info(){
        return view('info');
    }
    public function history(){
        $db=\Config\Database::connect(); 
        $builder = $db->table('history')->select('*')->join('books', 'history.book_id = books.book_id')->where('user_id', session()->get('ID'));
        $query = $builder->get();
      
        return view('history', array('data' => $query));
        
    }
    public function reading(){
        $db=\Config\Database::connect(); 
        $builder = $db->table('selected_books')->select('*')->join('books', 'selected_books.book_id = books.book_id')->where('user_id', session()->get('ID'));
        $query = $builder->get();
       
        return view('reading', array('data' => $query));
    }
	
}
?>