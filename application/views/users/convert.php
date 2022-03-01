<?php
            // $id=$_GET['id'];
            // echo($id);
            echo $this->uri->segment('3');
            print(json_encode($info));
            ?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Results</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<body>
   <?php
   // $emirates_id = $this->input->post('emirates_id');
   // $name = $this->input->post('name');
   // echo "567";
   // echo "jas";
   // die();
    ?>
        <form role="form" method="post" action="<?php echo site_url('convert-image');?>" enctype="multipart/form-data">
        <div>
        <h3>Congratulations, the image has successfully been uploaded</h3>
       
        <table border="1">  
      <tbody>  
         <tr>  
            <td> Id</td>  
            <td>image</td>  
         </tr>  
         <?php if(is_array($info)): ?> 
            <?php foreach ($info as $row)  
         {  
            ?>

            <tr>  
            <input type="hidden" name="convert_img" value="<?php echo $row->id; ?>"/>
            <input type="hidden" name="emiratesid" value="<?php echo $row->emirates_id; ?>"/>
            <input type="hidden" name="emiratesname" value="<?php echo $row->name; ?>"/>
            <td><?php echo $row->id;?></td>  
            <td><img src="<?php echo base_url();?>uploads/images/<?php echo $row->picture;?>"> </td>  
            </tr>  
         <?php }  
         ?>  
         
      </tbody>  
   </table>  
  
<?php endif; ?> 
        <!-- <img src="< echo base_url();?>uploads/images/<echo $row['picture'];?>">  -->
        
        <!-- <p>
        <img src="< echo base_url($row);?>"> 
       </p> -->
        
            <!--  anchor('uploads/images/'.$id['file_name'], 'View My Image!')?> -->
          
           <!--  echo (array('src'=> 'uploads/images/'.$id['file_name']));  ?> -->
           <!-- <img src=" echo base_url('uploads/images/aadhar.jpg') ?>"> -->
           
           <input type="submit" style="color:blue;" name="imageSubmit" value="convert">
            
        </p>
        </div>
    </form>
        <!-- <p>
            echo anchor('upload-image', 'Go back to Image Upload'); ?>
        </p>
        <p>
             echo anchor('convert-image', 'Text Detection'); ?>
        </p> -->
       
        <!-- <p>
        src="<echo site_url("Users/display_image/$image_id"); ?>" 
        </p> -->
       
    
</body>
</html>
