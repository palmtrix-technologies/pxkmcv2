<?php 

class Model_membership extends CI_Model
{
	function __construct() {
        $this->tableName = 'membership';
        $this->primaryKey = 'member_id';
    }

	
 public function insert($data = array()){
        if(!array_key_exists("created",$data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified",$data)){
            
            $data['modified'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            $id= $this->db->insert_id();
            return $id;

        }else{
            return false;    
        }
    }
public function get_member_id(){


    $sql = "SELECT MAX(member_id) AS member_id FROM membership";

    $query = $this->db->query($sql);

    return $query->row_array();
}

public function insert_basic($data = array()){

	$insert=$this->db->insert('member_basic_details', $data);
    
    return ($insert == true) ? true : false;
    }
	
	
public function insert_indian_details($data){

	$insert=$this->db->insert('member_indian_details', $data);
	
	return ($insert == true) ? true : false;
	}
public function insert_other_details($data){

    $insert=$this->db->insert('member_other_details', $data);
    
    return ($insert == true) ? true : false;
    }
public function insert_branch_committee_details($data){

    $insert=$this->db->insert('branch_committee_membership', $data);
    
    return ($insert == true) ? true : false;
    }

public function get_member_details($id){

$this->db->where('member_id', $id);
        $query = $this->db->get('membership');
        
        // $result = $query->result();
        return $query->row();

}

public function update_membership($data,$id)
    {
        
        $this->db->where('member_id', $id);
        $this->db->update('membership', $data);
      
        return  $id;
    
    }
    public function get_member_basic_details($id){

        $sql = "SELECT basic.* FROM member_basic_details basic LEFT JOIN membership ON basic.member_id = membership.member_id WHERE membership.member_id = '$id' ";
    //     print_r($sql);
    // exit;
         $query = $this->db->query($sql);

    return $query->row_array();
    }

   public function update_member_basic_details($data,$id)
    {
        
        $this->db->where('id', $id);
        $this->db->update('member_basic_details', $data);
      
        return  $id;
    
    } 

 public function get_member_indian_details($id){

        $sql = "SELECT indian.* FROM member_indian_details indian LEFT JOIN membership ON indian.member_id = membership.member_id WHERE membership.member_id = '$id' ";
    //     print_r($sql);
    // exit;
         $query = $this->db->query($sql);

    return $query->row_array();
    }

   public function update_member_indian_details($data,$id)
    {
        
        $this->db->where('id', $id);
        $this->db->update('member_indian_details', $data);
      
        return  $id;
    
    } 
public function get_member_other_details($id){

        $sql = "SELECT other.* FROM member_other_details other LEFT JOIN membership ON other.member_id = membership.member_id WHERE membership.member_id = '$id' ";
    //     print_r($sql);
    // exit;
         $query = $this->db->query($sql);

    return $query->row_array();
    }

   public function update_member_other_details($data,$id)
    {
        
        $this->db->where('id', $id);
        $this->db->update('member_other_details', $data);
      
        return  $id;
    
    } 
    public function get_member_branchcommittee_details($id){

        $sql = "SELECT branch.* FROM branch_committee_membership branch LEFT JOIN membership ON branch.member_id = membership.member_id WHERE membership.member_id = '$id' ";
    //     print_r($sql);
    // exit;
         $query = $this->db->query($sql);

    return $query->row_array();
    }

   public function update_member_committee_details($data,$id)
    {
        
        $this->db->where('id', $id);
        $this->db->update('branch_committee_membership', $data);
      
        return  $id;
    
    } 
    public function validate_eid($emirates_id){

$sql = "SELECT * FROM membership WHERE emirates_id = '$emirates_id'";
// print_r($sql);
// exit;

$query = $this->db->query($sql);

return $query->row_array();
}

public function get_profession_details(){

$sql = "SELECT * FROM profession ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();

}

public function get_qualification_details(){

$sql = "SELECT * FROM educational_qualification ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();

}

public function get_bloodgroup_details(){

$sql = "SELECT * FROM blood_group ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();

}

public function get_indian_registered_organizations(){

$sql = "SELECT * FROM indian_registered_organizations ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();

}

public function get_welfare_scheme(){

$sql = "SELECT * FROM welfare_schemes ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();

}

public function get_member_profile($id){

    $sql = "SELECT member . *, basic.*, indian.*, other.*, committee.*, profession.profession_name, edu.qualification_name, state.state_name, district.district_name, groups.blood_group, emirates.emirates_name, area.area_name, org.organization_name, scheme.scheme_name,mandalam.mandalam_name, muncipalities.name AS muncipality_name FROM membership member LEFT JOIN member_basic_details basic ON basic.member_id = member.member_id LEFT JOIN member_indian_details indian ON indian.member_id = member.member_id LEFT JOIN member_other_details other ON other.member_id = member.member_id LEFT JOIN branch_committee_membership committee ON committee.member_id = member.member_id LEFT JOIN profession ON profession.id = basic.profession LEFT JOIN educational_qualification edu ON edu.id = basic.qualification LEFT JOIN blood_group groups on groups.id = basic.blood_group LEFT JOIN state ON state.id = indian.state_id LEFT JOIN district ON district.id = indian.district_id LEFT JOIN mandalam ON mandalam.id = indian.mandalam_id LEFT JOIN muncipalities ON muncipalities.id = indian.muncipality_id LEFT JOIN indian_registered_organizations org ON org.id = other.registered_organization LEFT JOIN welfare_schemes scheme ON scheme.id = other.welfare_scheme_name LEFT JOIN emirates ON emirates.id = committee.emirates LEFT JOIN area ON area.id = committee.area WHERE member.member_id = '$id'";

    $query = $this->db->query($sql);

    return $query->row_array();

}
}