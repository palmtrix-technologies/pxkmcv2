

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
        <title>KMCC</title>
        <link rel="stylesheet" href="./assets/style.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <!--script>
            $(document).ready(function(){
const submitBtn = document.querySelector(".userSubmit");
submitBtn.addEventListener("click",function(){
    bullet[current - 1].classList.add("active");
    bullet[current - 1].classList.add("active");
    progessCheck[current - 1].classList.add("active");
    
    current += 1;
    setTimeout(function(){
        alert("You're Succesfuly Signed Up")
        location.reload();
    }, 800);
});

            });
        </script-->
         
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
                    <div class="check fa fa-check"></div>
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
            <div id="registration" class="form">
    <div class="page slidepage" style="align-items:">
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
                <input type="text" class="form-control" name="date_of_expiry" placeholder="Date of Expiry">
            </div>
              <div class="field">
                            <div class="label required">Mobile Number</div>
                            <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number">
                        </div>
<input type="checkbox" style="margin:-38px 0 0 0 ;height: 18;width: 18px;">
                        <label style="color: #81c784;margin-top: -34px;font-size: 13px;margin-left: -100px;"> WhatsApp Number is same as above</label><br>
                        <div class="preview-box"></div>
                        <div><br>
                            <label for="flip-mini">View back side</label>
                                <select name="flip-mini" id="flip-mini" data-role="slider" data-mini="true">
                                    <option value="off"></option>
                                    <option value="on"></option>
                                </select>
                        </div> <br>                                               
                        <div class="" style="display:inline-flex;margin-bottom: -30px;margin-top: 40px;left:50%;transform: translateX(-12%);">
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
                            <button type="submit" class="btn btn-warning" name="Convert" value="Next" onclick="myFunction()">Next</button>
                        </div>
                        </div>
                    </div>
 
<div class="page">
                        <div class="title">Basic Details</div>
                        <div class="field">
                            <div class="label">Passport Number</div>
                            <input type="text" name="passport_number">
                        </div>
                        <div class="field">
                            <div class="label">Date of Expiry</div>
                            <input type="text" name="passport_expiry_date">
                        </div>
                        <div class="field">
                            <div class="label">Email Id</div>
                            <input type="text" name="email_id">
                        </div>
                        <div class="field">
                            <div class="label">Proffesion</div>
                            <input type="text" name="profession">
                        </div>
                        <div class="field">
                            <div class="label">Qualification</div>
                            <select class="form-control" name="qualification">
                                <option value="mbbs">MBBS</option>
                                <option value="btech">BTech</option>
                                <option value="bcom"> B.Com</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Blood Group</div>
                            <select class="form-control" name="blood_group">
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                            </select>
                        </div>
                        <div class="field next-1">
                            <button>Next</button>
                        </div>
                      </div>
                     <div class="page">
                        <div class="title">Indian Details</div>
                        <div class="field">
                            <div class="label  required">State</div>
                            <select name="state">
                               <option value="0">Select State</option>
                            <option value="1">Kerala</option>
                            <option value="2">Tamil Nadu</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">District</div>
                            <select name="district">
                                <option value="14">Kasargode</option>
                                <option value="13">Kannur</option>
                                <option value="12">Wayanad</option>
                                <option value="11">Kozhikode</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Mandalam</div>
                            <select name="mandalam">
                                <option value="1">Manjeshwaram</option>
                                <option value="2">Kasaragod</option>
                                <option value="3">Udma</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Municipality</div>
                            <select name="muncipality">
                                <option value="1">Varkala</option>
                                <option value="2">Attingal</option>
                                <option value="3">Nedumangad</option>
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
                        <div class="page">
                        <div class="title">Other Details</div>
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

                    <div class="page">
                        
                        <div class="field" style="margin-bottom: 90px;margin-top: 0px;color:#81c784">
                            <p>Details of Branch Committee membership sought (To be filled based on Branch Committee structure in the UAE,N/A to be used if not applicable)</p>   
                        </div>
                        <div class="field">
                            <div class="label  required">Emirates</div>
                            <select name="emirates">
                                <option value="1">Abu Dhabi</option>
                                <option value="2">Dubai</option>
                                <option value="3">Sharjah</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Area</div>
                            <select name="area">
                                <option value="1">abcd</option>
                                <option value="2">abcd</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Zone</div>
                            <select name="zone">
                                <option value="1">abcd</option>
                                <option value="2">abcd</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">District</div>
                            <select name="district">
                                <option value="1">abcd</option>
                                <option value="2">abcd</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Mandalam</div>
                            <select name="mandalam">
                                <option value="1">abcd</option>
                                <option value="2">abcd</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label  required">Corparation</div>
                            <select name="corporation"> 
                                <option value="1">abcd</option>
                                <option value="2">abcd</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="field" style="margin-top: 58px;" >
                            <div class="label">Aed 10</div>
                            <input type="text" name="donation">
                        </div>
                        <div class="field">
                            <div class="label">Logged person name</div>
                            <input type="text" name="logged_person">
                        </div><br>
                        <div class="declaration">
                        <p class="main-head" style="float: left;margin-top: -35px;color: #81c784;">Declaration,</p><br>
                        <p class="paragrph" style="text-align: left;width: 320px;color: #81c784;margin-top: -15px;">I hereby declare that at the information given by me on this application is true and correct to the best of my knowledge and belief,I agree to comply with the idealogy,Rules,Policies, and procedure of UAE KMCC and request a membership</p>
                        <input type="checkbox" style="height: 18;width: 18px;margin-top: 4px;">
                        <label style="color: #81c784;margin-top: 14px;margin-left:-380px;">I Agree</label>    
                    </div>
                         
                    

             <div class="field">
                <input type="submit" class="submit" name="userSubmit" value="Submit">
            </div>
        </div>
   
 
  <div>
</form>
 </div>
        </div>
        </div>
     
</body>
</html>
<script  src="assets/script.js"></script>

<script>
$(function(){
    // $("#registration").submit(function(){
    //     dataString = $("#registration").serialize();

    //     $.ajax({
    //         type: "POST",
    //         url: "membership-add",
    //         data: dataString,
    //         success: function(data){
    //             // alert('Successful!');
    //             $("#result").html('Successfully updated record!'); 
    //             $("#result").addClass("alert alert-success");
    //         }

    //     });

    //     return false; 

    // });
});
</script>
 <script>
                function myFunction(){
                    var myPicture = $('#myfile').val();
                    var emiratesid = $('#emirates_id').val();
                    var emiratesname = $('#emirates_name').val();
                   $.ajax({
                    url : '<?php echo base_url('convert-image')?>',

                    type : 'POST',
                    dataType: 'json',
                    data: {
                    emirates_id: emiratesid,
                    emirates_name: emiratesname,
                    picture: myPicture
                    
                }, // data to submit
                    success: function(response){
                        alert("Data Matched");
                    },
                    error: function(response){
                        alert("Mismatch in data");
                    }
                   });
                }
        </script>