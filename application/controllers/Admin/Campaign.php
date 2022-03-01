<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			
		$this->data['page_title'] = 'Campaign';
        $this->load->model('Admin/Model_campaign');
        
	}
	public function index()
	{
    

        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/campaign/List');
        $this->load->view('includes/footer');
	}

    public function add()
	{
    

		$districts = $this->Model_campaign->getall_districts(0);
       
 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
        $data['Districts'] = $districts;
		$this->load->view('Admin/campaign/add_campaign',$data);
        $this->load->view('includes/footer');
	}

    public function add_campaign()
    {
        $postdata=$this->input->post('postData');
		$data=$postdata["campaign"];
		$result= $this->Model_campaign->add_campaign($data);
		echo $result;



    }
    public function  addcampaign_quota()
    {
        $postdata=$this->input->post('postData');
		$data=$postdata["quota"];
		$result= $this->Model_campaign->add_campaign_quota($data);
		echo $result;



    }

   


}
?>