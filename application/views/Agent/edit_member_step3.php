

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
                    
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fa fa-check"></div>
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
            <form id="registration"  enctype="multipart/form-data" acton="#" class="form">


    <div class="page">
                        <div class="title">Indian Details</div>
                        <input type="hidden" name="id" value="<?php  echo $member_indian_details['id']?>">
                        <input type="hidden" name="member_id" value="<?php  echo $member_indian_details['member_id']?>">
                        <div class="field">
                            <div class="label  required">State</div>
                            <select name="state">
                               <option value="0">Select State</option>
                           <?php foreach ($states as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if(in_array($v['id'], $member_indian_details)) { echo 'selected="selected"'; } ?>><?php echo $v['state_name'] ?></option>
                    <?php endforeach ?>
                            </select>
                        </div>
                        <?php $district_data = json_decode($member_indian_details['district_id']); 

                        ?>
                        <div class="field">
                            <div class="label  required">District</div>
                            <select name="district">
                                <option value="0">Select District</option>
                                <?php foreach ($districts as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if($v['id'] == $district_data) { echo 'selected="selected"'; } ?>><?php echo $v['district_name'] ?></option>
                    <?php endforeach ?>     
                            </select>
                        </div>
                        <?php $mandalam_data = json_decode($member_indian_details['mandalam_id']); 

                        ?>
                        <div class="field">
                            <div class="label  required">Mandalam</div>
                            <select name="mandalam">
                               <option value="0">Select Mandalam</option>
                                                        <?php foreach($mandalams as $k=> $v){ ?>
<option value="<?php echo $v['id'];?>" <?php if($v['id']== $mandalam_data) { echo 'selected="selected"'; } ?>> 
                                            <?php echo $v['mandalam_name'];?></option>
                           <?php } ?>
                            </select>
                        </div>
                        <?php $muncipality_data = json_decode($member_indian_details['muncipality_id']); 

                        ?>
                        <div class="field">
                            <div class="label">Municipality</div>
                            <select name="muncipality">
                                <option value="0">Select Muncipality</option>
                                                        <<?php foreach($muncipalities as $k=> $v){ ?>
<option value="<?php echo $v['id'];?>" <?php if($v['id']== $muncipality_data) { echo 'selected="selected"'; } ?>> 
                                            <?php echo $v['name'];?></option>
                           <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Address in india</Address></div>
                            <textarea class="txtarea" rows="3" cols="40"  name="indian_address" placeholder="Address in India"><?php echo $member_indian_details['indian_address'] ?></textarea>
                            </br>
                        </div>
                        <div class="field">
                            <div class="label">Emergency Contact (from india)</div>
                            <input type="text" name="emergency_contact" value="<?php echo $member_indian_details['emergency_contact'] ?>">
                        </div>
                        <div class="field">
                            <div class="label">Contact Person</div>
                            <input type="text" name="contact_person" value="<?php echo $member_indian_details['contact_person'] ?>">
                        </div>
                              <div class="field next-2">
                            <button class>Next</button>
                        </div>
                    </div>
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
             url:'<?php echo base_url() ?>membership-step3-edit',
             type:"post",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
              success: function(data){
                  console.log(data);
              return false;
           }
         });
    }); 
});
</script>
 