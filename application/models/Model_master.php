<?php 

class Model_master extends CI_Model
{
	function __construct() {
        $this->tableName = 'emirates';
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

public function getall_emirates(){

$sql = "SELECT * FROM emirates ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();
}
public function getall_areas(){

$sql = "SELECT * FROM area ORDER BY id ASC  ";
                $query = $this->db->query($sql);
                return $query->result_array();
}	
}