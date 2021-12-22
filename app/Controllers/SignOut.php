<?php

namespace App\Controllers;
use App\Models\UsersModel;

class SignOut extends BaseController
{
    public function index()
    {
        $session= session();
        $session->destroy();
       
        return redirect()->to('/home');
    }
}