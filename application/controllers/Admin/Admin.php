<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			
		$this->data['page_title'] = 'Admin';
        
	}
	public function index()
	{
    

        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/dashbord');
        $this->load->view('includes/footer');
	}


}
?>