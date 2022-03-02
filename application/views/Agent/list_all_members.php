<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>KMCC</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="assets/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    
	<!-- HK Wrapper -->
    <div class="col-md-6"></div>
	<div class="hk-wrapper hk-vertical-nav">

      
     
        
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper px-0">
			<!-- Container -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 pa-0">
                       
                        
						<div class="tab-content mt-sm-60 mt-30">
							<div class="tab-pane fade show active" role="tabpanel">
								<div class="container">
									<div class="hk-row">
										
										<div class="col-lg-12">
											
											<div class="card card-profile-feed">
                                                <div class="card-header card-header-action">
													<h2 style="color:#388e3c; text-align: center;";>KMCC Member List</h2>
													
												</div>
												<ul class="list-group list-group-flush">

                                                    <?php foreach($membership as $member) {
$member_id = $member['member_id'];
                                                     ?>
                                                    <li class="list-group-item border-0">
														<div class="media align-items-center">
															<div class="d-flex media-img-wrap mr-15">
																<div class="avatar avatar-sm">
																	<img src="assets/dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
																</div>
															</div>
															<div class="media-body">
																<span class="d-block text-dark text-capitalize"><?php echo $member['full_name'] ?></span>
																<span class="d-block font-13"><?php echo $member['emirates_id'] ?></span>
															</div>
															<a href="<?php echo base_url('edit-membership-step1/'.$member_id) ?>" class="text-light-40 ml-auto"><i class="ion ion-md-create font-24"></i></a>
														</div>
													</li> 

                                                <?php } ?>
													
                                                </ul>
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
        <!-- /Main Content -->

    </div>
   <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="assets/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="assets/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="assets/dist/js/feather.min.js"></script>
	
	<!-- twitter JavaScript -->
    <script src="assets/dist/js/twitterFetcher.js"></script>
    <script src="assets/dist/js/widgets-data.js"></script>
	
	<!-- Owl JavaScript -->
    <script src="assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Owl Init JavaScript -->
    <script src="assets/dist/js/owl-data.js"></script>
	
    <!-- Toggles JavaScript -->
    <script src="assets/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="assets/dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="assets/dist/js/init.js"></script>

</body>

</html>