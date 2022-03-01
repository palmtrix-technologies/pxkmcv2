<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

	public function login($data){

		$this->db->from('kmcc_users');
		
		$this->db->where('kmcc_users.email', $data['username']);

		$query = $this->db->get();
		if ($query->num_rows() == 0){
			return false;
		}
		else{
			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
		    $validPassword = password_verify($data['password'], $result['password']);
		    if($validPassword){
		        return $result = $query->row_array();
		    }
		}
	}



}

?>