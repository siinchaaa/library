<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db=\Config\Database::connect(); 
        $builder = $db->table('books');
        
        $query = $builder->get();
        $session = session();
        return view('homeview', array('data' => $query));

    }
}
