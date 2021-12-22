<?php 

namespace App\Controllers;
use App\Models\Form_model;

class Forms extends BaseController 
{
	public function __construct()
	{
		$db=\Config\Database::connect();
		$session = session();
		helper('form');
		$userModel = new Form_model;
		
		
	}       
	

	public function change_password(){
		if($this->request->getVar('change_pass'))
		{
			$old_pass=$this->request->getVar('old_pass');
			$new_pass=$this->request->getVar('new_pass');
			$confirm_pass=$this->request->getVar('confirm_pass');
			$session_id=session()->get('id');
			$builder = $this->db->table('users')->getWhere(['id' => session()->get('ID')]);
			$que =$builder->get();
			$row=$que->row();
			if((!strcmp($old_pass, $pass))&& (!strcmp($new_pass, $confirm_pass))){
				$this->Form_model->change_pass($session_id,$new_pass);
				echo "Password changed successfully !";
				}
			    else{
					echo "Invalid";
				}
		}
		return view('changepass_view');	
	}
}