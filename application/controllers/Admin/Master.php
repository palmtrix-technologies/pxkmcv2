<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			
		$this->data['page_title'] = 'Campaign';
        $this->load->model('Admin/Model_master');
        
	}
	public function index()
	{
    
        $data['state'] = $this->Model_master->getall_states();
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/State',$data);
        $this->load->view('includes/footer');
	}

    public function newstate()
	{
    
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newstate');
        $this->load->view('includes/footer');
	}

    public function addstate()
    {
       
        $data=array(
            'state_name'=>$this->input->post('state'),
        );
		$this->Model_master->add_state($data);
        $data['state'] = $this->Model_master->getall_states();
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/State',$data);
        $this->load->view('includes/footer');

    }

   
    public function district()
	{
    
        $data['district'] = $this->Model_master->getall_district(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/District',$data);
        $this->load->view('includes/footer');
	}
   
    public function newdistrict()
	{
        $data['state'] = $this->Model_master->getall_states();
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newdistrict',$data);
        $this->load->view('includes/footer');
	}

    public function addistrict()
    {
       
        $data=array(
            'state_id'=>$this->input->post('state'),
            'district_name'=>$this->input->post('district'),
        );
		$this->Model_master->add_district($data);
        $data['state'] = $this->Model_master->getall_states();

        $data['district'] = $this->Model_master->getall_district(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/District',$data);
        $this->load->view('includes/footer');

    }

    public function mandalam()
	{
    
        $data['district'] = $this->Model_master->getall_mandalam(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Mandalam',$data);
        $this->load->view('includes/footer');
	}


    public function newmandalam()
	{
        $data['district'] = $this->Model_master->get_district();
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newmandalam',$data);
        $this->load->view('includes/footer');
	}


    public function addmandalam()
    {
       
        $data=array(
            'mandalam_name'=>$this->input->post('mandalam'),
            'district_id'=>$this->input->post('district'),
        );
		$this->Model_master->add_mandalam($data);

        $data['district'] = $this->Model_master->getall_mandalam(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Mandalam',$data);
        $this->load->view('includes/footer');

    }


    public function panjayathu()
	{
    
        $data['panjayathu'] = $this->Model_master->getall_panjayathu(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Panjayathu',$data);
        $this->load->view('includes/footer');
	}

    public function newpanjayath()
	{
        $data['mandalam'] = $this->Model_master->get_mandalam();
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newpanjayath',$data);
        $this->load->view('includes/footer');
	}

    public function addpanjayath()
    {
       
        $data=array(
            'name'=>$this->input->post('panjayath'),
            'types'=>$this->input->post('type'),
            'district_id'=>$this->input->post('mandalam'),

        );
		$this->Model_master->add_panjayath($data);

        $data['panjayathu'] = $this->Model_master->getall_panjayathu(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Panjayathu',$data);
        $this->load->view('includes/footer');

    }

    public function emarates()
	{
    
        $data['emarates'] = $this->Model_master->getall_emarates(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Emarates',$data);
        $this->load->view('includes/footer');
	}

    public function newemirates()
	{
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newemirates');
        $this->load->view('includes/footer');
	}

    public function addemirates()
    {
       
        $data=array(
            'emirates_name'=>$this->input->post('emirates'),

        );
		$this->Model_master->add_emirates($data);
        $data['emarates'] = $this->Model_master->getall_emarates(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Emarates',$data);
        $this->load->view('includes/footer');

    }

    public function area()
	{
    
        $data['area'] = $this->Model_master->getall_area(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Area',$data);
        $this->load->view('includes/footer');
	}

    public function newarea()
	{
        $data['emirates'] = $this->Model_master->getall_emarates();
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newarea',$data);
        $this->load->view('includes/footer');
	}
   
    public function addarea()
    {
       
        $data=array(
            'area_name'=>$this->input->post('area'),
            'emirates_id'=>$this->input->post('emirates'),

        );
		$this->Model_master->add_area($data);
        $data['area'] = $this->Model_master->getall_area(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Area',$data);
        $this->load->view('includes/footer');

    }


    public function zone()
	{
    
        $data['zone'] = $this->Model_master->getall_zone(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Zone',$data);
        $this->load->view('includes/footer');
	}

    public function newzone()
	{
        $data['area'] = $this->Model_master->get_area();
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newzone',$data);
        $this->load->view('includes/footer');
	}

    public function addzone()
    {
       
        $data=array(
            'zone_name'=>$this->input->post('zone'),
            'area_id'=>$this->input->post('area'),

        );
		$this->Model_master->add_zone($data);
        $data['zone'] = $this->Model_master->getall_zone(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Zone',$data);
        $this->load->view('includes/footer');

    }

    public function profession()
	{
    
        $data['profession'] = $this->Model_master->getall_profession(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Profession',$data);
        $this->load->view('includes/footer');
	}

    public function newprofession()
	{
       
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newprofession');
        $this->load->view('includes/footer');
	}

    public function addprofession()
    {
       
        $data=array(
            'profession_name'=>$this->input->post('profession'),
        );
		$this->Model_master->add_profession($data);
        $data['profession'] = $this->Model_master->getall_profession(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Profession',$data);
        $this->load->view('includes/footer');
    }


    public function qualifications()
	{
    
        $data['qualifications'] = $this->Model_master->getall_qualifications(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Qualifications',$data);
        $this->load->view('includes/footer');
	}

    public function newqualification()
	{
       
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newqualification');
        $this->load->view('includes/footer');
	}

    public function addqualification()
    {
       
        $data=array(
            'qualification_name'=>$this->input->post('qualification'),
        );
		$this->Model_master->add_qualification($data);
        $data['qualifications'] = $this->Model_master->getall_qualifications(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Qualifications',$data);
        $this->load->view('includes/footer');
    }

    
    public function welfare()
	{
    
        $data['welfare'] = $this->Model_master->getall_welfare(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Welfare',$data);
        $this->load->view('includes/footer');
	}

    public function newwelfare()
	{
       
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/newwelfare');
        $this->load->view('includes/footer');
	}

    public function addwelfare()
    {
       
        $data=array(
            'scheme_name'=>$this->input->post('welfare'),
        );
		$this->Model_master->add_welfare($data);
        $data['welfare'] = $this->Model_master->getall_welfare(); 
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
		$this->load->view('Admin/master/Welfare',$data);
        $this->load->view('includes/footer');
	}
    

}
?>