<?php 

class Model_campaign extends CI_Model
{
	function __construct() {
    }
    public function getall_states(){

    $sql = "SELECT * FROM state ORDER BY id ASC  ";
                    $query = $this->db->query($sql);
                    return $query->result();
    }

    public function getall_districts($stateid){

        if($stateid==0)
        {
            $sql = "SELECT * FROM district  ORDER BY id ASC  ";
        }
        else{
        $sql = "SELECT * FROM district where state_id='".$stateid."' ORDER BY id ASC  ";
    }

                        $query = $this->db->query($sql);
                        return $query->result();
    }
    
    public function getall_mandalam($district_id){

        $sql = "SELECT * FROM mandalam where district_id='".$district_id."' ORDER BY id ASC  ";
                        $query = $this->db->query($sql);
                        return $query->result();
     }

     public function add_campaign($data)
     {
           
         $this->db->insert('c_campaign_master',$data);
         $insert_id = $this->db->insert_id();
         return  $insert_id;
     
     }

     public function add_campaign_quota($data)
     {
           
        $this->db->insert_batch('c_campaign_quota',$data);
		
     return  "success";
     }

     
     


     public function getall_panjayath($district_id){

        $sql = "SELECT * FROM muncipalities where district_id='".$district_id."' ORDER BY id ASC  ";
                        $query = $this->db->query($sql);
                        return $query->result();
     }
	



	
}