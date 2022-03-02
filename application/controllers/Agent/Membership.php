<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/autoload.php';
use Google\Cloud\Vision\VisionClient;
use Google\Cloud\Samples\Vision;
use Google\Cloud\Vision\Image;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
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
		$this->load->model('Model_master');
        ;
		
	}
	public function index()
	{

		$data['membership'] = $this->Model_membership->get_all_member_data();
		
		$this->load->view('Agent/list_all_members' , $data);
	}

	public function add_membership_step_1()
	{
		$states = $this->Model_state->getall_states();
        $this->data['states'] = $states;
 
		$this->load->view('Agent/member_reg_step1');
	}

	public function AddStep1(){
		$isvalidemaratesid=false;
		$isvalidemaratesname=false;
		
		if(!empty($_FILES['picture']['name'])){
		$config['upload_path'] = 'uploads/images/';
        $config['allowed_types']='gif|jpg|png|jpeg';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("picture")){
        $data = array('upload_data' => $this->upload->data());
       
		$row = new stdClass();
	  
	   $vision = new VisionClient([
		   'projectId' => 'quiet-vector-340708',
		   'keyFilePath' => __DIR__ . '/../quiet-vector-340708-ba8a552a2cf5.json'
	   ]);
	  
	   $image ="http://localhost/kmcc/uploads/images/".$data['upload_data']['file_name'];
	   
	   $image = $vision->image(
	    fopen($image,'r'),
		   ['text']
		   
	   );
	  $emirates_id=$_POST['emirates_id'];
	  $emirates_name=$_POST['emirates_name'];
	  $tadaa = $vision->annotate($image);
	   $abcd=(Array)$tadaa->text();
	   $mngo =$abcd[0];
	   $abc=(Array)$mngo;
	 
	  
   foreach ($abc as $key => $value) {
	
	  if(strpos($value['description'], $emirates_name) !== false)
	   {
		$isvalidemaratesname=true;
	   }
	   else 
		{
			$isvalidemaratesname=false;
		}

		if(strpos($value['description'], $emirates_id) !== false)
		{
		 $isvalidemaratesid=true;
		}
	    else 
		 {
			 $isvalidemaratesid=false;
		 }
		 $data = [
            'isvalidemaratesidnumber' => $isvalidemaratesid,
            'isvalidemaratesname' => $isvalidemaratesname,
			'error'=>false,
			'errortext'=>''
			
        ];


if($isvalidemaratesid && $isvalidemaratesname){

	$emirates_id = $this->input->post('emirates_id');
		$q =  $this->db->select('emirates_id')
      ->from('membership')
      ->where(array('emirates_id' => $emirates_id))->get();
if($q->num_rows() == 0){
	 

	 $memberdata = array(
                    	'full_name' => $this->input->post('emirates_name'),
                        'emirates_id' => $this->input->post('emirates_id'),
                        'date_of_expiry' => $this->input->post('date_of_expiry'),
                        'mobile_number' => $this->input->post('mobile_number')
                        //'picture' => $image
                      );
                                   

     }
     else {
     	echo "Emirates ID already exists";
     }               
            
$insertUserData['id'] = $this->Model_membership->insert($memberdata);

 $id =$insertUserData['id'];

$data = [
            'isvalidemaratesidnumber' => $isvalidemaratesid,
            'isvalidemaratesname' => $isvalidemaratesname,
			'error'=>false,
			'errortext'=>'',
			'id' => $id
        ];

  //redirect(base_url('membership-step2')."/".$id);
}


		echo json_encode( $data );
	}
        }
		else{
			$data = [
				'isvalidemaratesidnumber' => $isvalidemaratesid,
				'isvalidemaratesname' => $isvalidemaratesname,
				'error'=>true,
				'errortext'=>$this->upload->display_errors()
			];
			echo json_encode( $data );
			
		}
	 }
	 else{
		$data = [
			'isvalidemaratesidnumber' => $isvalidemaratesid,
			'isvalidemaratesname' => $isvalidemaratesname,
			'error'=>true,
			'errortext'=>'dummy'
		];
		echo json_encode( $data);
	 }

     }


public function add_membership_step_2($id)
	{
$data['profession'] = $this->Model_membership->get_profession_details();

$data['qualification'] = $this->Model_membership->get_qualification_details();

$data['blood_group'] = $this->Model_membership->get_bloodgroup_details();

		$states = $this->Model_state->getall_states();
        $data['states'] = $states;
		$this->load->view('Agent/member_reg_step2' , $data);
	}
 
public function AddStep2(){

	$basic_details = array(
					'member_id' =>$this->input->post('member_id'),
					'passport_number' => $this->input->post('passport_number'),
					'passport_expiry_date' => $this->input->post('passport_expiry_date'),
					'email_id' => $this->input->post('email_id'),
					'profession' => $this->input->post('profession'),
					'qualification' => $this->input->post('qualification'),
					'blood_group' => $this->input->post('blood_group')
				);
	
			$insertBasicDetails = $this->Model_membership->insert_basic($basic_details);

	echo json_encode( $basic_details);		

}

 public function add_membership_step_3($id)
	{
		$states = $this->Model_state->getall_states();
        $data['states'] = $states;

        $districts = $this->Model_district->getall_districts();
        $data['districts'] = $districts;

        $mandalams = $this->Model_mandalam->getall_mandalam();
        $data['mandalams'] = $mandalams;

        $muncipalities = $this->Model_muncipality->getall_muncipalities();
        $data['muncipalities'] = $muncipalities;
		$this->load->view('Agent/member_reg_step3' , $data);
	}
 
public function AddStep3(){	
	

$member_indian_details = array(
					'member_id' =>$this->input->post('member_id'),
					'state_id' => $this->input->post('state'),
					'district_id' => $this->input->post('district'),
					'mandalam_id' => $this->input->post('mandalam'),
					'muncipality_id' => $this->input->post('muncipality'),
					'indian_address' => $this->input->post('indian_address'),
					'emergency_contact' => $this->input->post('emergency_contact'),
					'contact_person' => $this->input->post('contact_person')
				);
			$insertIndianDetails = $this->Model_membership->insert_indian_details($member_indian_details);

			echo json_encode( $member_indian_details);	

}  
 
public function add_membership_step_4($id)
	{
		$data['indian_registered_organizations'] = $this->Model_membership->get_indian_registered_organizations();

$data['welfare_scheme'] = $this->Model_membership->get_welfare_scheme();

		$this->load->view('Agent/member_reg_step4' , $data);
	}
 
public function AddStep4(){	
	

$other_details = array(
					'member_id' =>$this->input->post('member_id'),
					'is_indian_registered_member' => $this->input->post('is_indian_registered_member'),
					'registered_organization' => $this->input->post('registered_organization'),
					'is_KMCC_welfare_scheme' => $this->input->post('is_KMCC_welfare_scheme'),
					'welfare_scheme_name' => $this->input->post('welfare_scheme_name')
					
				);
			$insertOtherDetails = $this->Model_membership->insert_other_details($other_details);

			echo json_encode( $other_details);

}

public function add_membership_step_5($id)
	{
		$emirates = $this->Model_master->getall_emirates();
        $data['emirates'] = $emirates;

       $areas = $this->Model_master->getall_areas();
        $data['areas'] = $areas;

     /*    $zones = $this->Model_master->getall_zone();
        $data['zones'] = $zones;

        $districts = $this->Model_muncipality->getall_districts();
        $data['districts'] = $districts;

        $mandalams = $this->Model_mandalam->getall_mandalam();
        $data['mandalams'] = $mandalams;

        $corporation = $this->Model_muncipality->getall_corporation();
        $data['corporation'] = $corporation; */



		$this->load->view('Agent/member_reg_step5' , $data);
	}
 
public function AddStep5(){	
	

$branch_committe = array(
					'member_id' =>$this->input->post('member_id'),
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

			echo json_encode( $branch_committe);

}

public function member_profile($id){

$data['member_profile'] = $this->Model_membership->get_member_profile($id);


$this->load->view('Agent/member_profile' , $data);

}


public function edit_membership_step_1($id)
	{
		$data['membership']  = $this->Model_membership->get_member_details($id);
 
		
		$this->load->view('Agent/edit_member_step1', $data);
	}

public function EditStep1(){


                   $memberdata = array(
                    	'full_name' => $this->input->post('emirates_name'),
                        'emirates_id' => $this->input->post('emirates_id'),
                        'date_of_expiry' => $this->input->post('date_of_expiry'),
                        'mobile_number' => $this->input->post('mobile_number')
                        //'picture' => $image
                      );
					$id = $this->input->post('member_id');
					$result= $this->Model_membership->update_membership($memberdata,$id);     
					echo $id;            
}
public function edit_membership_step_2($id)
	{
		$data['member_basic_details'] = $this->Model_membership->get_member_basic_details($id);

		$this->load->view('Agent/edit_member_step2' , $data);
	}
 
public function EditStep2(){
	

$id = $this->input->post('id');


	$basic_details = array(
					'member_id' =>$this->input->post('member_id'),
					'passport_number' => $this->input->post('passport_number'),
					'passport_expiry_date' => $this->input->post('passport_expiry_date'),
					'email_id' => $this->input->post('email_id'),
					'profession' => $this->input->post('profession'),
					'qualification' => $this->input->post('qualification'),
					'blood_group' => $this->input->post('blood_group')
				);
 $result= $this->Model_membership->update_member_basic_details($basic_details,$id);     
 echo $id; 
}

public function edit_membership_step_3($id)
	{
		$states = $this->Model_state->getall_states();
        $data['states'] = $states;

        $districts = $this->Model_district->getall_districts();
        $data['districts'] = $districts;

        $mandalams = $this->Model_mandalam->getall_mandalam();
        $data['mandalams'] = $mandalams;

        $muncipalities = $this->Model_muncipality->getall_muncipalities();
        $data['muncipalities'] = $muncipalities;

		$data['member_indian_details'] = $this->Model_membership->get_member_indian_details($id);

		$this->load->view('Agent/edit_member_step3' , $data);
	}
 
public function EditStep3(){
	

$id = $this->input->post('id');


	$member_indian_details = array(
					'member_id' =>$this->input->post('member_id'),
					'state_id' => $this->input->post('state'),
					'district_id' => $this->input->post('district'),
					'mandalam_id' => $this->input->post('mandalam'),
					'muncipality_id' => $this->input->post('muncipality'),
					'indian_address' => $this->input->post('indian_address'),
					'emergency_contact' => $this->input->post('emergency_contact'),
					'contact_person' => $this->input->post('contact_person')
				);
 $result= $this->Model_membership->update_member_indian_details($member_indian_details,$id);     
 
 echo $id; 

// redirect('edit/membership-step4/(:num)', 'refresh'); 
}

public function edit_membership_step_4($id)
	{
		$data['member_other_details'] = $this->Model_membership->get_member_other_details($id);

		$this->load->view('Agent/edit_member_step4' , $data);
	}
 
public function EditStep4(){
	

$id = $this->input->post('id');


	$other_details = array(
					'member_id' =>$this->input->post('member_id'),
					'is_indian_registered_member' => $this->input->post('is_indian_registered_member'),
					'registered_organization' => $this->input->post('registered_organization'),
					'is_KMCC_welfare_scheme' => $this->input->post('is_KMCC_welfare_scheme'),
					'welfare_scheme_name' => $this->input->post('welfare_scheme_name')
				);
 $result= $this->Model_membership->update_member_other_details($other_details,$id);     
 echo $id; 
// redirect('edit/membership-step5/(:num)', 'refresh'); 
}

public function edit_membership_step_5($id)
{
		$emirates = $this->Model_master->getall_emirates();
        $data['emirates'] = $emirates;

       	$areas = $this->Model_master->getall_areas();
        $data['areas'] = $areas;
	
		$data['branch_committe_details'] = $this->Model_membership->get_member_branchcommittee_details($id);

		$this->load->view('Agent/edit_member_step5' , $data);
	}
 
public function EditStep5(){
	

$id = $this->input->post('id');


	$branch_committe_details = array(
					'member_id' =>$this->input->post('member_id'),
					'emirates' => $this->input->post('emirates'),
					'area' => $this->input->post('area'),
					'zone' => $this->input->post('zone'),
					'district' => $this->input->post('district'),
					'mandalam' => $this->input->post('mandalam'),
					'corporation' => $this->input->post('corporation'),
					'donation' => $this->input->post('donation'),
					'logged_person' => $this->input->post('logged_person')
				);
 $result= $this->Model_membership->update_member_committee_details($branch_committe_details,$id);     
 echo $id; 
// redirect('edit/membership-step1/(:num)', 'refresh'); 
}




}
            
        
        
  