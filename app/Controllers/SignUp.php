<?php 

namespace App\Controllers;
use App\Models\UsersModel;

class Signup extends BaseController
{
    public function index()
    {
        return view('signup_view');
    }

    public function register(){
        $res = $_POST;
        
        $userModel = new UsersModel();
        helper('form');
        $data=[];
        $rules=[
            'name'=>'required|min_length[2]|max_length[50]',
            'surname'=>'required|min_length[2]|max_length[50]',
            'email'=>'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[2]|max_length[50]',
            'password_confirm'=>'matches[password]'
        ];
        if($this->validate($rules)){
            $data = [
                'name'=> $this->request->getVar('name'),
                'surname'=> $this->request->getVar('surname'),
                'email'=> $this->request->getVar('email'),
                'password'=> password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'password_confirm'=>password_hash($this->request->getVar('password_confirm'), PASSWORD_DEFAULT)
            ];
            
            $data["saved"] = $userModel->save($data);
        } else{
            $data['validation'] = $this->validator;
            
            return redirect()->to('/signup');
           
        }
       return view('signin_view', $data); 
    }
}