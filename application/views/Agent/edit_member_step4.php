

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
                        <div class="title">Other Details</div>
                        <input type="hidden" name="id" value="<?php echo $member_other_details['id']?>">
                        <input type="hidden" name="member_id" value="<?php echo $member_other_details['member_id']?>">
                        <div class="field">
                            <p style="text-align: left;color:#81c784;">Are you member of any Indian Registered Organization in the UAE?</p>   
                        </div>
                        <div class="radio">
                                <input type="radio" name="is_indian_registered_member" value="yes">
                                <label style="width: 100px;margin-top: -32px;">Yes</label><br>
                                <input type="radio" name="is_indian_registered_member" value="no">
                                <label  style="width: 100px;margin-top: -32px;">No</label><br>                    
                            <div class="field"  style="margin-top: 10px;">
                                <div class="label "></div>
                                <select name="registered_organization">
                                    <option value="1">abcd</option>
                                    <option value="2">abcd</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="field">
                            <p style="text-align: left;color:#81c784;">Are you member of KMCC Welfare Scheme?</p>    
                        </div>
                        <div class="radio">
                            <input type="radio"  name="is_KMCC_welfare_scheme" value="yes">
                            <label  style="width: 100px;margin-top: -32px;">Yes</label><br>
                            <input type="radio" name="is_KMCC_welfare_scheme" value="no">
                            <label style="width: 100px;margin-top: -32px;">No</label><br>
                            
                            <div class="field" style="margin-top: 10px;">
                                <div class="label "></div>
                                <select name="welfare_scheme_name">
                                    <option value="1">abcd</option>
                                    <option value="2">abcd</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="field next-3">
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
             url:'<?php echo base_url() ?>membership-step4-edit',
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
 