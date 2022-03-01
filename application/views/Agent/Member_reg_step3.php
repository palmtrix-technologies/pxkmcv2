

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
                    
                    <div class="bullet active">
                        <span>2</span>
                    </div>
                    <div class="check fa fa-check active"></div>
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
                        <div class="title">Indian Details</div>
                        <input type="hidden" name="member_id" value="<?php echo $id ?>">
                        <div class="field">
                            <div class="label  required">State</div>
                            <select name="state">
                               <option value="0">Select State</option>
                           <?php foreach($states as $state){ ?>
<option value="<?php echo $state['id'];?>">
                                            <?php echo $state['state_name'];?></option>
                           <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">District</div>
                            <select name="district">
                                <option value="0">Select District</option>
                                <?php foreach($districts as $district){ ?>
<option value="<?php echo $district['id'];?>">
                                            <?php echo $district['district_name'];?></option>
                           <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Mandalam</div>
                            <select name="mandalam">
                               <option value="0">Select Mandalam</option>
                                                        <?php foreach($mandalams as $mandalam){ ?>
<option value="<?php echo $mandalam['id'];?>">
                                            <?php echo $mandalam['mandalam_name'];?></option>
                           <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Municipality</div>
                            <select name="muncipality">
                                <option value="0">Select Muncipality</option>
                                                        <?php foreach($muncipalities as $muncipality){ ?>
<option value="<?php echo $muncipality['id'];?>">
                                            <?php echo $muncipality['name'];?></option>
                           <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Address in india</Address></div>
                            <textarea class="txtarea" rows="3" cols="40"  name="indian_address" placeholder="Address in India"></textarea></br>
                        </div>
                        <div class="field">
                            <div class="label">Emergency Contact (from india)</div>
                            <input type="text" name="emergency_contact">
                        </div>
                        <div class="field">
                            <div class="label">Contact Person</div>
                            <input type="text" name="contact_person">
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
             url:'<?php echo base_url() ?>membership-step3-add',
             type:"post",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
             success: function(data){
                var obj = jQuery.parseJSON (data);
    
                    
        window.location.href = "<?php echo base_url('membership-step4') ?>/" + obj.member_id; 
             
             console.log(obj);        
             
           }
         });
    }); 
});
</script>
 