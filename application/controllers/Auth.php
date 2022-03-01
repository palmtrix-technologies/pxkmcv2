<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	}

	public function login()
	{
		
		if($this->input->post('login'))
		{
			$e=$this->input->post('email');
			$p=$this->input->post('pass');
	
			$que=$this->db->query("select * from kmcc_users where email='".$e."' and pass='$p'");

			$row = $que->num_rows();
			if($row)
			{
			redirect('dashboard');
			}
			else
			{
	echo "Invalid login details";
			}	
		}
		$this->load->view('auth/login');		
	}

	public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'), 'refresh');
		}
	
	
}
?>