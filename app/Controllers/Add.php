<?php 

namespace App\Controllers;
use App\Models\BooksModel;

class Add extends BaseController{
    public function index(){
      
        return view ("add_book");
    }

  
        public function addBook(){
            $res = $_POST;
        
            $userModel = new BooksModel();
            helper('form');
            $data=[];
            $rules=[
                'bookname'=>'required|min_length[2]|max_length[255]',
                'author'=>'required|min_length[2]|max_length[255]',
                'description'=>'required|min_length[4]|max_length[255]', 
                'category'=>'required|min_length[2]|max_length[255]'
            ];
            
            $file = $this->request->getFile('image');
            //var_dump($file);
            $imageName = $file->getRandomName();

            if($this->validate($rules)){
                $data = [
                    'bookname'=> $this->request->getVar('bookname'),
                    'author'=> $this->request->getVar('author'),
                    'description'=> $this->request->getVar('description'),
                    'image'=> $imageName,
                    'category'=>$this->request->getVar('category')
                ];
                $file->move('images/', $imageName);
                $data["saved"] = $userModel->save($data);

            } else{
                $data['validation'] = $this->validator;
                
                return redirect()->to('/add');
               
            }
           return redirect()->to('home');
        }
}