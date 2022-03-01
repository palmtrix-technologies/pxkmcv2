

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
        <input type="hidden" name="id" value="<?php echo $branch_committe_details['id']?>">
        <input type="hidden" name="member_id" value="<?php echo $branch_committe_details['member_id']?>">
                        
                        <div class="field" style="margin-bottom: 90px;margin-top: 0px;color:#81c784">
                            <p>Details of Branch Committee membership sought (To be filled based on Branch Committee structure in the UAE,N/A to be used if not applicable)</p>   
                        </div>
                        <?php $emirate_data = json_decode($branch_committe_details['emirates']); ?>
                        <div class="field">
                            <div class="label  required">Emirates</div>
                            <select name="emirates">
                               <option value="0">Select an Emirate</option>
                               <?php foreach($emirates as $emirate){ ?>
<option value="<?php echo $emirate['id'] ?>" <?php if($emirate['id']== $emirate_data) { echo 'selected="selected"'; } ?>><?php echo $emirate['emirates_name'] ?></option>
                               <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <?php $area_data  = json_decode($branch_committe_details['area']);  ?>
                            <div class="label  required">Area</div>
                            <select name="area">
                                <option value="0">Select an area</option>
                               <?php foreach($areas as $area) { ?>
<option value="<?php echo $area['id'] ?>" <?php if($area['id']== $area_data) { echo 'selected="selected"'; } ?> ><?php echo $area['area_name'] ?></option>
                               <?php } ?>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Zone</div>
                            <select name="zone">
                                <option value="0">Select Zone</option>
                                <option value="1">Zone 1</option>
                                <option value="2">Zone 2</option>
                                <option value="3">Zone 3</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">District</div>
                            <select name="district">
                                <option value="0">Select District</option>
                                <option value="1">District 1</option>
                                <option value="2">District 2</option>
                                <option value="3">District 3</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Mandalam</div>
                            <select name="mandalam">
                                <option value="0">Select Mandalam</option>
                                <option value="1">abcd</option>
                                <option value="2">abcd</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Corparation</div>
                            <select name="corporation"> 
                                <option value="0">Select Corporation</option>
                                <option value="1">abcd</option>
                                <option value="2">abcd</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="field" style="margin-top: 58px;" >
                            <div class="label">Aed 10</div>
                            <input type="text" name="donation" value="<?php echo $branch_committe_details['donation']?>">
                        </div>
                        <div class="field">
                            <div class="label">Logged person name</div>
                            <input type="text" name="logged_person" value="<?php echo $branch_committe_details['logged_person'] ?>">
                        </div><br>
                        <div class="declaration">
                        <p class="main-head" style="float: left;margin-top: -35px;color: #81c784;">Declaration,</p><br>
                        <p class="paragrph" style="text-align: left;width: 320px;color: #81c784;margin-top: -15px;">I hereby declare that at the information given by me on this application is true and correct to the best of my knowledge and belief,I agree to comply with the idealogy,Rules,Policies, and procedure of UAE KMCC and request a membership</p>
                        <input type="checkbox" style="height: 18;width: 18px;margin-top: 4px;">
                        <label style="color: #81c784;margin-top: 14px;margin-left:-380px;">I Agree</label>    
                    </div>
                         
                    

             <div class="field">
                <button class="submit" name="userSubmit" value="Submit">Submit</button>
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
             url:'<?php echo base_url() ?>membership-step5-edit',
             type:"post",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
              success: function(response){
                  alert('Membership details edited successfully');
              return false;
           }
         });
    }); 
});
</script>
 