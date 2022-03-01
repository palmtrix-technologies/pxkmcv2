<?php 

class Model_state extends CI_Model
{
	function __construct() {
        $this->tableName = 'state';
        $this->primaryKey = 'id';
    }
public function getall_states(){

$sql = "SELECT * FROM state ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();
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


	
}