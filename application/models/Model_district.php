<?php 

class Model_district extends CI_Model
{
	function __construct() {
        $this->tableName = 'district';
        $this->primaryKey = 'id';
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

public function getall_districts(){

$sql = "SELECT * FROM district ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();
}
	
}