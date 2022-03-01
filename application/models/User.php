<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    function __construct() {
        $this->tableName = 'users';
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
    public function information($id){
        $q=$this->db->select('*')->from ('users')->where('id',$id)->get();
        return $q->result();
    }

    // function getImage($Id){
    //     $data = '';
    //     $Q = $this->db->query("SELECT photo FROM users WHERE ID=1);
    //     if ($Q->num_rows())
    //     {
    //         $data = $Q->row_array();
    //         $data = $data['picture'];
    //         $Q->free_result();  
    //     }
    //     return $data;} 
    function getImageById($id){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
}