<?php 

namespace App\Controllers;
use App\Models\UsersModel;

class SignIn extends BaseController{
    public function index(){
        helper(['form']);
        return view ("signin_view");
    }

    public function login(){
        $session = session();
        $UserModel= new UsersModel;

        $email = $this->request->getVar("email");
        $password = $this->request->getVar("password");

        $data = $UserModel->where('email', $email)->first();

        if($data){
            $pass = $data["password"];
            $authenticatePassword = password_verify($password, $pass);

            if($authenticatePassword){
                $ses_data = [
                    'ID'=>$data['id'],
                    'name'=>$data['name'],
                    'surname'=>$data['surname'],
                    'email'=>$data['email'],
                    'isLoggedIn'=> TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Home'); 
            }else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
}
