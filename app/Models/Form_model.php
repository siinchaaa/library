<?php
namespace App\Models;
use CodeIgniter\Model;

class Form_model extends Model{

	function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("select * from users where id='$session_id'");
	$res=$fetch_pass->result();
	}

	
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query("UPDATE users set pass='$new_pass'  where id='$session_id'");
	}
}