<?php 

namespace App\Controllers;
use App\Models\SelectedBooksModel;
use App\Models\HistoryModel;


class selected_books extends BaseController{
    public function index(){
        return view('reading');
    }

    public function selected_books(){

        $db=\Config\Database::connect(); 
        $builder = $db->table('selected_books');
        $query = $builder->getWhere(["user_id"=>session()->get('ID')]);

        return view('reading', array('data' => $query));
    }


    public function reading($id){
         helper(['form']); 
         $data = array(
             'book_id' => $id,
             'user_id'=>session()->get('ID')
         );

         $db=\Config\Database::connect();
         $builder = $db->table('selected_books')->select('book_id','user_id'); 
         $bookCheck = $builder->getWhere(["user_id"=>session()->get('ID'),"book_id"=>$id])->getResult(); 

         if($bookCheck != null) {
         } 
         else {
            $book = new SelectedBooksModel;
            $book->save($data);
         }

         $builder = $db->table('selected_books')->join('books', 'selected_books.book_id = books.book_id');
         $query = $builder->getWhere(["user_id"=>session()->get('ID')]);
 
         return view('reading', array('data' => $query));
    }

   public function delete($id)
   {
        $db=\Config\Database::connect();
        $builder=$db->table('selected_books')->where(['id'=>$id]);
        $query = $builder->get()->getResult();
        $builder->delete(['id'=>$id]);
        $builder = $db->table('history');
        $data = array(
            'book_id' => $query[0]->book_id,
            'user_id'=>session()->get('ID')
        );
        $builder->insert($data);

        $builder = $db->table('selected_books')->join('books', 'selected_books.book_id = books.book_id');
        $query = $builder->getWhere(["user_id"=>session()->get('ID')]);
       
        return view('reading', array('data' => $query));
    }

} 
