

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
        <title>KMCC</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
        <link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
      
         
</head>
<body>
<div data-role="page">   
        
        <div class="container">
           
            
             <div class="form-outer">
            <form id="registration"  enctype="multipart/form-data" acton="#" class="form">
                 <?php $id = $this->uri->segment('2');?>
    <div class="page slidepage" style="align-items: center;">
                        
            <div class="hk-pg-wrapper px-0">
            <!-- Container -->
            <div class="container-fluid">

                 <div class="head" style="color:#388e3c; "><h4>KMCC</h4></div>
            <span class="fa fa-group" style="color: #388e3c;"> </span>
                    <a class="fa fa-bell" style="color: #388e3c;">
                       
                      </a> 
                      <div class="title" style="transform: translateX(-100px);">Member Profile</div>
                <!-- Row -->
                <div class="hk-row">
                    <div class="col-xl-12 pa-0">
                        <div class="profile-cover-wrap overlay-wrap">
                            <div class="profile-cover-img" style="background-image:base_url('assets/dist/img/bg1.jpg')"></div>
                            <div class="bg-overlay bg-trans-dark-60"></div>
                            
                        </div>
                        
                        <div class="tab-content mt-sm-60 mt-30">
                            <div class="tab-pane fade show active" role="tabpanel">
                                <div class="container">
                                    <div class="hk-row">
                                        
                                        <div class="col-lg-12">
                                            <div class="card card-profile-feed">
                                                <div class="card-header card-header-action">
                                                    <div class="media align-items-center">
                                                        <div class="media-img-wrap d-flex mr-10">
                                                            <div class="avatar avatar-sm">
                                                                <img src="<?php echo base_url() ?>assets/dist/img/avatar7.jpg" alt="user" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-capitalize font-weight-500 text-dark"><?php echo $member_profile['full_name'] ?></div>
                                                            <div class="font-13"><?php echo $member_profile['profession_name'] ?></div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <ul class="list-group" style="display: flex;">

                                                    <li class="list-group-item"><span><i class="ion ion-md-pin font-18 text-light-20 mr-10"></i><span>From:</span></span><span class="ml-5 text-dark"><?php echo $member_profile['district_name'] ?>, <?php echo $member_profile['state_name'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-call font-18 text-light-20 mr-10"></i><span>Contact Number:</span></span><span class="ml-5 text-dark"><?php echo $member_profile['mobile_number'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-mail font-18 text-light-20 mr-10"></i><span>Email:</span></span><span class="ml-5 text-dark"><?php echo $member_profile['email_id'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-calendar font-18 text-light-20 mr-10"></i><span>State</span></span><span class="ml-5 text-dark"><?php echo $member_profile['state_name'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-calendar font-18 text-light-20 mr-10"></i><span>District</span></span><span class="ml-5 text-dark"><?php echo $member_profile['district_name'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-calendar font-18 text-light-20 mr-10"></i><span>Mandalam</span></span><span class="ml-5 text-dark"><?php echo $member_profile['mandalam_name'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-calendar font-18 text-light-20 mr-10"></i><span>Muncipality</span></span><span class="ml-5 text-dark"><?php echo $member_profile['muncipality_name'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-briefcase font-18 text-light-20 mr-10"></i><span>Indian Contact Number</span></span><span class="ml-5 text-dark"><?php echo $member_profile['emergency_contact'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-briefcase font-18 text-light-20 mr-10"></i><span>Contact Person</span></span><span class="ml-5 text-dark"><?php echo $member_profile['contact_person'] ?></span></li>
                                                   
                                                    <li class="list-group-item"><span><i class="ion ion-md-home font-18 text-light-20 mr-10"></i><span>Emirates Details:</span></span><span class="ml-5 text-dark"><?php echo $member_profile['emirates_name'] ?>,  <?php echo $member_profile['area'] ?></span></li>
                                                    <li class="list-group-item"><span><i class="ion ion-md-briefcase font-18 text-light-20 mr-10"></i><span>Indian Address</span></span><span class="ml-5 text-dark"><?php echo $member_profile['indian_address'] ?></span></li>
                                                </ul>

                                                <a href="<?php echo base_url('edit-membership-step1/'.$id) ?>" class="btn btn-default"><i class="fa fa-edit">Edit your details here</i></a>
                                             </div>
                                            
                                            
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->


        </div>
              

                      
                    </div>
 


                       
  <div>
</form>
 </div>
        </div>
        </div>
     
</body>
</html>
<script  src="<?php echo base_url()?>assets/script.js"></script>


 