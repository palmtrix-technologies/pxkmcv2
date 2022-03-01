<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/autoload.php';
use Google\Cloud\Vision\VisionClient;
use Google\Cloud\Samples\Vision;
use Google\Cloud\Vision\Image;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
class Users extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('session');
    }

    public function index()
    {
       //Form for adding user data
       $this->load->view('users/add'); 
    } 
    public function viewpage($id)
    {
         $row = new stdClass();
         $query = $this->db->query("SELECT picture FROM users WHERE  id ='$id' ");
         if($query->num_rows()==0){
         die("Picture not foun!");
         }
         else{
         $row = $query->row();

         if (isset($row))
        {
         echo $row->picture;
        }
    }

        $data['info']=$this->user->information($id);
      
       $this->load->view('users/convert', $data); 
   
}

    function add(){
        if($this->input->post('Convert')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                  
                   // $data = array('image_metadata' => $this->upload->data());

                    $userData = array(
                        'emirates_id' => $this->input->post('emirates_id'),
                        'name' => $this->input->post('name'),
                        'picture' => $picture
                        // 'emirates_id' => $this->input->post('emirates_id'),
                        // 'name' => $this->input->post('name')
                       

                    );
                    
                    //Pass user data to model
                    $insertUserData['id'] = $this->user->insert($userData);
                    $id =$insertUserData['id'];
                    // $insertUserData = $this->user->insert($userData);
                     return redirect(base_url().'users/viewpage/'.$id);
                    // return redirect()->route('convert-page');
                    //$this->load->view('users/convert', $id);

                    
            }
            
        
        }
        
    }
}
    public function convert() {
        
die(9);
 if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                  
                   // $data = array('image_metadata' => $this->upload->data());

                    $userData = array(
                        'emirates_id' => $this->input->post('emirates_id'),
                        'name' => $this->input->post('name'),
                        'picture' => $picture    

                    );
                    
                    //Pass user data to model
                    $insertUserData['id'] = $this->user->insert($userData);
                    $id =$insertUserData['id'];
                   

                    
            }
            
        }
        

       $id=$_POST['picture'];
       //print_r($id);die();
        $row = new stdClass();
         $data = $this->user->getImageById($id);
       
        $vision = new VisionClient([
            'projectId' => 'quiet-vector-340708',
            'keyFilePath' => __DIR__ . '/quiet-vector-340708-ba8a552a2cf5.json'
        ]);
        $pic_convert=$data[0]['picture'];
        $val="http://localhost/picupload/uploads/images/<?php echo $pic_convert;?>";
        //print_r($pic_convert);die();
        // Annotate an image, detecting faces.
        $image = $vision->image(
            // fopen("https://static.toiimg.com/thumb/msid-78031670,width-1200,height-900,resizemode-4/.jpg",'r'),
            // ['text']
            // fopen("uploads/images/v_duke3.png",'r'),
            // ['text']
            
            fopen("http://localhost/picupload/uploads/images/$pic_convert",'r'),
            ['text']
            
        );
        $emirates_id=$_POST['emirates_id'];
        $emirates_name=$_POST['emirates_name'];
        // print_r($emirates_name);die();
        $row = new stdClass();
         $data = $this->user->getImageById($id);
         //$val=$data[0]['emirates_id'];
        //  print_r($val);die();
       
        $tadaa = $vision->annotate($image);
        $abcd=(Array)$tadaa->text();
        $mngo =$abcd[0];
        $abc=(Array)$mngo;
        $isvalid=false;
        // $os = array("$emirates_id", "$emirates_name");
        // print_r($os); die();
    foreach ($abc as $key => $value) {
       if(strpos($value['description'], $emirates_name) !== false)
        {
        echo "Data Matched";
        }
    else 
       {
       echo "Mismatch in data";
       }
          
      }
   
    
    
    }



   
   public function convertttt(){
    if(!empty($_FILES['picture']['name'])){
        $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['picture']['name'];
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        // if($this->upload->do_upload('picture')){
        //     $uploadData = $this->upload->data();
        //     $picture = $uploadData['file_name'];
            $vision = new VisionClient([
                'keyFilePath' => __DIR__ . '/quiet-vector-340708-ba8a552a2cf5.json',
            ]);
          $imageRes = fopen("https://static.toiimg.com/thumb/msid-78031670,width-1200,height-900,resizemode-4/.jpg", 'r');
          //   $imageRes = fopen('uploads/images/aadhar.jpg', 'r');
          
            $image = $vision->image($imageRes,['Text_Detection']);
            $result = $vision->annotate($image);
    
            print_r($result);
        //     $tadaa = $vision->annotate($image);
        //     $abc=(Array)$tadaa->text();
        //     $mngo =$abc[0];
        //     $abc=(Array)$mngo;
        //     $isvalid=false;
         
        //   foreach ($abc as $key => $value) {
             
        //       if ((strpos($value['description'], '784-1979-1234567-1') !== false)&&(strpos($value['description'], 'Ahmad Rashid Mohammed') !== false)) {
        //         echo 'true';
        //     }
        //     else{
        //         echo 'Not Successful';
        //     }
              
        //   }
       
        
        }}
   

  public function dashboard()
    {
    $this->load->view('qcreate_qualification'); 
    }
   }

