<?php 

class Model_master extends CI_Model
{
	function __construct() {
    }
    
    public function getall_states(){

        $sql = "SELECT * FROM state ORDER BY id ASC  ";
                        $query = $this->db->query($sql);
                        return $query->result();
        }

        public function get_district()
        {
            $sql = "SELECT * FROM district ORDER BY id ASC  ";
                            $query = $this->db->query($sql);
                            return $query->result();
            }

            public function get_area()
            {
                $sql = "SELECT * FROM area ORDER BY id ASC  ";
                                $query = $this->db->query($sql);
                                return $query->result();
                }    

            public function get_mandalam(){

                $sql = "SELECT * FROM mandalam ORDER BY id ASC  ";
                                $query = $this->db->query($sql);
                                return $query->result();
                }

        public function add_state($data)
     {
           
        return $this->db->insert('state',$data);
     
     }

     public function getall_district()
     {
           
        $this->db->select('*');
        $this->db->from('district');
        $this->db->join('state', 'state.id = district.state_id');
        $query = $this->db->get();
        return $query->result();
     
     }

     public function add_district($data)
     {
           
        return $this->db->insert('district',$data);
     
     }

     public function getall_mandalam()
     {
           
        $this->db->select('*');
        $this->db->from('mandalam');
        $this->db->join('district', 'district.id = mandalam.district_id');
        $query = $this->db->get();
        return $query->result();
     
     }

     public function add_mandalam($data)
     {
           
        return $this->db->insert('mandalam',$data);
     
     }

     public function getall_panjayathu()
     {
          
        $this->db->select('*');
        $this->db->from('muncipalities');
        $this->db->join('mandalam', 'mandalam.id = muncipalities.district_id');
        $query = $this->db->get();
        return $query->result();
     
     }

     public function add_panjayath($data)
     {
           
        return $this->db->insert('muncipalities',$data);
     
     }

     public function getall_emarates()
     {
        $sql = "SELECT * FROM emirates ORDER BY id ASC  ";
                        $query = $this->db->query($sql);
                        return $query->result();
        }

 public function add_emirates($data)
     {
           
        return $this->db->insert('emirates',$data);
     
     }

     public function getall_area()
     {
          
        $this->db->select('*');
        $this->db->from('area');
        $this->db->join('emirates', 'emirates.id = area.emirates_id');
        $query = $this->db->get();
        return $query->result();
     
     }
     public function add_area($data)
     {
           
        return $this->db->insert('area',$data);
     
     }

     public function getall_zone()
     {
          
        $this->db->select('*');
        $this->db->from('zone');
        $this->db->join('area', 'area.id = zone.area_id');
        $query = $this->db->get();
        return $query->result();
     
     }

     public function add_zone($data)
     {
           
        return $this->db->insert('zone',$data);
     
     }

     public function getall_profession()
     {
         $sql = "SELECT * FROM profession ORDER BY id ASC  ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function add_profession($data)
     {
           
        return $this->db->insert('profession',$data);
     
     }

     public function getall_qualifications()
     {
         $sql = "SELECT * FROM educational_qualification ORDER BY id ASC  ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function add_qualification($data)
     {
           
        return $this->db->insert('educational_qualification',$data);
     
     }

     public function getall_welfare()
     {
         $sql = "SELECT * FROM welfare_schemes ORDER BY id ASC  ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function add_welfare($data)
     {
           
        return $this->db->insert('welfare_schemes',$data);
     
     }
	
}