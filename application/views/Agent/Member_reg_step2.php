

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
        <title>KMCC</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
      
         
</head>
<body>
<div data-role="page">   
        
        <div class="container">
            <div style="font-size: 25px;float: left;color: #388e3c;" class="head"><h4>KMCC</h4></div>
            <span class="fa fa-group" style="position: absolute;margin-left:60px;margin-top: 5px;font-size: 18px;color: #388e3c;"> </span>
                    <a class="fa fa-bell" style="position: absolute;margin-left: 20px;margin-top: 5px;font-size: 18px;color: #388e3c;">
                       
                      </a>
            <div class="progress-bar">
                <div class="step">
                    
                    <div class="bullet active">
                        <span>1</span>
                    </div>
                    <div class="check fa fa-check active"></div>
                </div>
                <div class="step">
                    
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fa fa-checked"></div>
                </div>
                <div class="step">
                    
                    <div class="bullet">
                        <span>3</span>
                    </div>
                        <div class="check fa fa-check"></div>
                    
                </div>
                <div class="step">
                   
                    <div class="bullet">
                        <span>4</span>
                    </div>
                        <div class="check fa fa-check"></div>
                </div>
                <div class="step">
                   
                    <div class="bullet">
                        <span>5</span>
                    </div>
                        <div class="check fa fa-check"></div>
                </div>
            </div>
             <div class="form-outer">
                <?php $id = $this->uri->segment('2');
               ?>
            <form id="registration"  enctype="multipart/form-data" acton="#" class="form">
<div class="page">
                        <div class="title">Basic Details</div>
                        <input type="hidden" name="member_id" value="<?php echo $id ?>">
                        <div class="field">
                            <div class="label">Passport Number</div>
                            <input type="text" name="passport_number">
                        </div>
                        <div class="field">
                            <div class="label">Date of Expiry</div>
                            <input type="date" name="passport_expiry_date">
                        </div>
                        <div class="field">
                            <div class="label">Email Id</div>
                            <input type="text" name="email_id">
                        </div>
                        <div class="field">
                            <div class="label">Profession</div>
                            <select class="form-control" name="profession">
                                <option value="0">Select your profession</option>
                                <?php foreach($profession as $prof) { ?>
<option value="<?php echo $prof['id'] ?>"><?php echo $prof['profession_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Qualification</div>
                            <select class="form-control" name="qualification">
                               <option value="0">Select your qualification</option>
                                <?php foreach($qualification as $qual) { ?>
<option value="<?php echo $qual['id'] ?>"><?php echo $qual['qualification_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Blood Group</div>
                            <select class="form-control" name="blood_group">
                                <option value="0">Select blood group</option>
                                
                                <?php foreach($blood_group as $blood) { ?>
<option value="<?php echo $blood['id'] ?>"><?php echo $blood['blood_group'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="field next-1">
                            <button>Next</button>
                        </div>
                      </div>

    <!--div class="page slidepage" style="align-items:">
                        <div class="title">Membership Registration</div>
            <div class="field">
              <div class="label required">Full name (same in uae id)</div>
                <input type="text" class="form-control" id="emirates_name" name="emirates_name" placeholder="Full name (same in uae id)">
        </div>
            <div class="field">
              <div class="label required">UAE ID Number</div>
                <input type="text" class="form-control" id="emirates_id" name="emirates_id" placeholder="UAE ID Number">
            </div>
            <div class="field">
               <div class="label required">Date of Expiry</div>
                <input type="text" class="form-control" required name="date_of_expiry" placeholder="Date of Expiry">
            </div>
              <div class="field">
                            <div class="label required">Mobile Number</div>
                            <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number">
                        </div>
<input type="checkbox" style="margin:-38px 0 0 0 ;height: 18;width: 18px;">
                        <label style="color: #81c784;margin-top: -34px;font-size: 13px;margin-left: -100px;"> WhatsApp Number is same as above</label><br>
                        <div class="preview-box">
                        <img id="blah" src="#" alt="your image" />
                        </div>
                        <div><br>
                            <label for="flip-mini">View back side</label>
                                <select name="flip-mini" id="flip-mini" data-role="slider" data-mini="true">
                                    <option value="off"></option>
                                    <option value="on"></option>
                                </select>
                        </div> <br>                                               
                        <div class="" style="display:inline-flex;margin-bottom: -30px;margin-top: 40px;left:50%;transform: translateX(-30%);">
                            <button class="upload-button1" style="height: 43px;width: 150px;font-size: 6px;line-height: 30px;border-color: #388e3c;background-color: #e8f5e9;border-radius: 10px;">            
                            
                             <label for="myfile" style="color: #388e3c;">Front Side</label>
                             <input type="file" id="myfile" name="picture">
        </button> </br>&nbsp;&nbsp;&nbsp;
                            <button class="upload-button1" style="height: 43px;width: 150px;font-size: 6px;line-height: 30px;border-color: #388e3c;background-color: #e8f5e9;border-radius: 10px;">
                            
                             <label for="myfile" style="color: #388e3c;">Back Side</label>
                             <input type="file" id="myfile1" name="picture-back">
        </button> 
                        </div>
                        <div class="field nextBtn">
                           <div class="field nextBtn">
                            <button type="submit"  class="submit" name="Convert" value="Next" >Next</button>
                        </div>
                        </div>
                    </div>
 


                       
  <div-->
</form>
 </div>
        </div>
        </div>
     
</body>
</html>
<script  src="<?php echo base_url() ?>assets/script.js"></script>

<script>
$(function(){

    $('#registration').submit(function(e){
    e.preventDefault(); 
         $.ajax({
             url:'<?php echo base_url() ?>membership-step2-add',
             type:"post",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
              success: function(data){
                var obj = jQuery.parseJSON (data);
    
                    
      window.location.href = "<?php echo base_url('membership-step3') ?>/" + obj.member_id; 
             
             console.log(obj);        
                    
                }
                
                
         });
    }); 
 });
</script>
 