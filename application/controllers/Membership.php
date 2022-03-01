<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			
		$this->data['page_title'] = 'Membership';
		$this->load->model('Model_membership');
		$this->load->model('Model_state');
		$this->load->model('Model_district');
		$this->load->model('Model_mandalam');
		$this->load->model('Model_muncipality');
        ;
		
	}
	public function index()
	{
		
		$states = $this->Model_state->getall_states();
        $this->data['states'] = $states;
 
		$this->load->view('membership/membership-add');
	}

	public function add_membership(){

		if($this->input->post('userSubmit')){
           
if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                echo 'rama kill ravana ';
                if($this->upload->do_upload('picture')){
					echo 'died ';
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                  
                   // $data = array('image_metadata' => $this->upload->data());

                   $memberdata = array(
                    	'full_name' => $this->input->post('emirates_name'),
                        'emirates_id' => $this->input->post('emirates_id'),
                        'date_of_expiry' => $this->input->post('date_of_expiry'),
                        'mobile_number' => $this->input->post('mobile_number'),
                        'picture' => $picture
                      );
                    
                    

                    
            }
            die();
        
        }

                    	


                    $insertUserData['id'] = $this->Model_membership->insert($memberdata);

                    $id =$insertUserData['id'];


                  if($id == true){
				
				$basic_details = array(
					'member_id' =>$id,
					'passport_number' => $this->input->post('passport_number'),
					'passport_expiry_date' => $this->input->post('passport_expiry_date'),
					'email_id' => $this->input->post('email_id'),
					'profession' => $this->input->post('profession'),
					'qualification' => $this->input->post('qualification'),
					'blood_group' => $this->input->post('blood_group')
				);
			$insertBasicDetails = $this->Model_membership->insert_basic($basic_details);

$member_indian_details = array(
					'member_id' =>$id,
					'state_id' => $this->input->post('state'),
					'district_id' => $this->input->post('district'),
					'mandalam_id' => $this->input->post('mandalam'),
					'muncipality_id' => $this->input->post('muncipality'),
					'indian_address' => $this->input->post('indian_address'),
					'emergency_contact' => $this->input->post('emergency_contact'),
					'contact_person' => $this->input->post('contact_person')
				);
			$insertIndianDetails = $this->Model_membership->insert_indian_details($member_indian_details);

$other_details = array(
					'member_id' =>$id,
					'is_indian_registered_member' => $this->input->post('is_indian_registered_member'),
					'registered_organization' => $this->input->post('registered_organization'),
					'is_KMCC_welfare_scheme' => $this->input->post('is_KMCC_welfare_scheme'),
					'welfare_scheme_name' => $this->input->post('welfare_scheme_name')
					
				);
			$insertOtherDetails = $this->Model_membership->insert_other_details($other_details);

$branch_committe = array(
					'member_id' =>$id,
					'emirates' => $this->input->post('emirates'),
					'area' => $this->input->post('area'),
					'zone' => $this->input->post('zone'),
					'district' => $this->input->post('district'),
					'mandalam' => $this->input->post('mandalam'),
					'corporation' => $this->input->post('corporation'),
					'donation' => $this->input->post('donation'),
					'logged_person' => $this->input->post('logged_person')
				);
			$insertBranchCommitte = $this->Model_membership->insert_branch_committee_details($branch_committe);			
                  }
                     return redirect(base_url('membership'));
                  }
                   
                  
            }
            
            }
            
        
        
  