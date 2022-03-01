<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>KMCC Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="./assets/vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="./assets/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="./assets/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="./assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="./assets/dist/css/style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
    </style>
</head>

<body>
    
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block mr-5" src="./assets/dist/img/kmcc-logo.png" alt="brand" />KMCC
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-search"></i></a>
                </li>
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-settings"></i></a>
                </li>
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ion ion-ios-notifications"></i><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="./assets/dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <!--div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div-->
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="./assets/dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Deepor head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="./assets/dist/img/avatar10.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Admin<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('logout') ?>"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->

<nav class="hk-nav hk-nav-light">
     <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
  <ul class="nav">
    <li><a href="#">About</a></li>
    <li><a href="#">Portfolio</a>
      <ul>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
      </ul>
    </li>
    <li><a href="#">Resume</a>
      <ul>
        <li><a href="#">item a lonng submenu</a></li>
        <li><a href="#">item</a>
          <ul>
            <li><a href="#">Ray</a></li>
            <li><a href="#">Veronica</a></li>
            <li><a href="#">Bushy</a></li>
            <li><a href="#">Havoc</a></li>
          </ul>
        </li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
      </ul>
    </li>
    <li><a href="#">Download</a></li>
    <li><a href="#">Rants</a>
      <ul>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
        <li><a href="#">item</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
  </ul>
</div>
</div>
</nav>


        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text"  style="font-size: 16px!important;" >Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-copy"></i>
								<span class="nav-link-text" style="font-size: 16px!important;">Master Module</span>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-apps"></i>
								<span class="nav-link-text" style="font-size: 16px!important;">Agent Management</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-notifications"></i>
                                <span class="nav-link-text" style="font-size: 16px!important;">Election Officer Management</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text" style="font-size: 16px!important;">Member Management</span>
                            </a>
                        </li>

                    </ul>
   

                    </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head mb-15">
                       <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    
                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="javascript:void(0);" class="col-6 mb-30 active">
                                <img class="rounded opacity-70" src="./assets/dist/img/layout1.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="#" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="./assets/dist/img/layout2.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="#" class="col-6">
                                <img class="rounded opacity-70" src="./assets/dist/img/layout3.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="./assets/dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="./assets/dist/img/logo-dark.png" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <!DOCTYPE html>
              <html>
               <head>
                 <meta charset="utf-8">
                   <title>TDLCC</title>
                     <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link href="./assets/static/Donut/_styles/simple-donut.css" rel="stylesheet" />

                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link href="bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" />
                        <link href="./assets/static/css/app.07973316d928d6fbd7bc0ef856c5136b.css" rel="stylesheet" />
                        <style type="text/css">
                            /* Chart.js */
                                @-webkit-keyframes chartjs-render-animation
                                {
                                    from
                                    {
                                        opacity: 0.99;
                                    }

                                    to
                                    {
                                        opacity: 1;
                                    }
                                }

                                @keyframes chartjs-render-animation
                                {
                                    from
                                    {
                                        opacity: 0.99;
                                    }

                                    to
                                    {
                                        opacity: 1;
                                    }
                                }

                                .chartjs-render-monitor
                                {
                                    -webkit-animation: chartjs-render-animation 0.001s;
                                    animation: chartjs-render-animation 0.001s;
                                }
                                .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

                                    small {
                                    display: block;
                                    line-height: 1.428571429;
                                    color: #999;
                                    }
                                        </style>
              </head>
              <body cz-shortcut-listen="true">
                  <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-8">
								<div class="card card-refresh">
									<div class="refresh-container">
										<div class="loader-pendulums"></div>
									</div>
									<div class="card-header card-header-action">
										<div>
											<p><span></span>SITE SHEDULE & ACTUAL GROWTH</p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-radio-button-off"></i>
											</a>
											<a href="#" class="inline-block full-screen">
												<i class="ion ion-md-expand"></i>
											</a>
										</div>
									</div>
									<div class="card-body">
                                        <div class="content cf-svmc-chart">
                                            <div class="cf-svmc-metrics">
                                                <div class="metric">35%</div>
                                                <div class="change m-red">
                                                    <div class="arrow-down"></div>
                                                    <div class="metric-small">-40%</div>
                                                </div>
                                            </div>
                                            <div class="cf-svmc-trend" id="totalworkreport" style="height: 100px;"></div>
                                        </div>
                                    </div>
								</div>
							</div>
							<div class="col-lg-4">
									<div class="card">
									<div class="card-header card-header-action">
										<p><span></span>EXPENCE KPI STATUS</p></div>
									<div class="card-body">
                                        <div class="content ">
                                            <div class="cf-pie" id="ExpenceKPI" style="height: 150px;">    
                                            </div>
                                        </div>
                                    
                                    </div>
								</div>
							</div>
						</div>
						<div class="hk-row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header card-header-action">
										<div>
											<p><span></span>Today Scheduled Jobs</p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="d-flex align-items-center card-action-wrap">
												<a href="#" class="inline-block refresh mr-15">
													<i class="ion ion-md-arrow-down"></i>
												</a>
												<a class="inline-block card-close" href="#" data-effect="fadeOut">
													<i class="ion ion-md-close"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="card-body">
                                        <div class="content" style="height: 200px;">
                                            <div class="cf-line" id="Jobpie">
                                                
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
							<div class="col-lg-4">
									<div class="card">
									<div class="card-header card-header-action">
										<div>
											<p><span></span>Today  Attandance  &amp; Mobalization &amp; Bars</p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary risk-switch"></div>
										</div>
									</div>
									<div class="card-body">
                                        <div class="content cf-svmc-chart"style="height:200px">
                                            <div class="cf-svmc-metrics">
                                                <div class="metric">
                                                125
                                                </div>
                                                <div class="change m-green">
                                                    <div class="arrow-up"></div>
                                                    <div class="metric-small">12%</div>
                                                </div>
                                            </div>
                                            <div class="cf-svmc-bars" id="Attandancetoday">
                                                
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
							<div class="col-lg-4">
									<div class="card">
									<div class="card-header card-header-action">
										<div>
											<p><span></span> PROJECT COMPLETION STATUS</p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary risk-switch"></div>
										</div>
									</div>
									<div class="card-body">
                                        <div class="content" style="height: 200px;">
                                            <div class="cf-rag">
                                                <div class="cf-bars">
                                                    <ul>
                                                        <li style="height: 15%;">
                                                            <div class="cf-bars-bar m-red mb m-red"></div>
                                                        </li>
                                                        <li style="height: 57%;">
                                                            <div class="cf-bars-bar m-red mb m-amber"></div>
                                                        </li>
                                                        <li style="height: 57%;">
                                                            <div class="cf-bars-bar m-red mb m-green"></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cf-figs">
                                                    <ul>
                                                        <li>
                                                            <div class="cf-figs-fig m-red">
                                                                <p>15%</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="cf-figs-fig m-amber">
                                                                <p>57%</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="cf-figs-fig m-green">
                                                                <p>38%</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cf-txts">
                                                    <ul>
                                                        <li>
                                                            <div class="cf-txts-txt m-red">
                                                                <p>Pending</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="cf-txts-txt m-amber">
                                                                <p>Processing/p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="cf-txts-txt m-green">
                                                                <p>Completed</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                        <div class="hk-row">
							<div class="col-lg-4">
								<div class="card">
                                    <div class="cf-item">

                                            <div class="card-header card-header-action">
                                                <div>
                                                    <p><span></span>Funnel Chart</p>
                                                </div>
                                                <div class="d-flex align-items-center card-action-wrap">
                                                    <div class="d-flex align-items-center card-action-wrap">
                                                        <a href="#" class="inline-block refresh mr-15">
                                                            <i class="ion ion-md-arrow-down"></i>
                                                        </a>
                                                        <a class="inline-block card-close" href="#" data-effect="fadeOut">
                                                            <i class="ion ion-md-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body" style="height: 267px;">
                                                <div class="content">
                                                    <div class="cf-funnel">
                                                        <div class="cf-funnels cf-funnels-left">
                                                            <ul>
                                                                <li class="m-green mb" style="height: 20%; opacity: 1; width: 100%;"></li>
                                                                <li class="m-green mb" style="height: 20%; opacity: 0.9; width: 50%;"></li>
                                                                <li class="m-green mb" style="height: 20%; opacity: 0.8; width: 17%;"></li>
                                                                <li class="m-green mb" style="height: 20%; opacity: 0.7; width: 9%;"></li>
                                                                <li class="m-green mb" style="height: 20%; opacity: 0.6; width: 1%;"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="cf-figstxts">
                                                            <ul>
                                                                <li>
                                                                    <div>
                                                                        <p class="metric m-green mc">
                                                                            320
                                                                        </p>
                                                                        <p>Jobs Sheduled</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <p class="metric m-green mc">
                                                                        215
                                                                        </p>
                                                                        <p>Jobs Started</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <p class="metric m-green mc">
                                                                            120
                                                                        </p>
                                                                        <p>Job Processing</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <p class="metric m-green mc">
                                                                            70
                                                                        </p>
                                                                        <p>Reviewd</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <p class="metric m-green mc">
                                                                            45
                                                                        </p>
                                                                        <p>Completed </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                            </div>
                                            </div>
                                    </div>
								</div>
							</div>
							<div class="col-lg-4">
									<div class="card">
									<div class="card-header card-header-action">
										<div>
											<p><span></span>Metirail Purchase & Usage</p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary risk-switch"></div>
										</div>
									</div>
									<div class="card-body">
                                        <div class="content cf-gauge" id="Purchaseandusagebar"  style="height: 230px;">
                                        </div>
                                    </div>
								</div>
							</div>
							<div class="col-lg-4">
									<div class="card">
									<div class="card-header card-header-action">
										<div>
											<p><span></span>Next seven days Schedule</p>
										</div>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary risk-switch"></div>
										</div>
									</div>
									<div class="card-body">
                                        <div class="content cf-svmc-chart" id="next7daysshedule" style="height: 230px;" >
                        
                                        </div>
								</div>
							</div>
						</div>
								
					</div>
                </div>
                <!-- /Row -->
    
                               
                                
                                    
                                  
                                      <script src="./assets/static/js/manifest.2eed629df6a266936b10.js"></script>
                                            <script src="./assets/static/js/app.add042859363bbba06fc.js"></script>
                                            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                                            <script src="./assets/static/js/highcharts.js"></script>
                                            <script src="./assets/static/js/highcharts-more.js"></script>
                                            <script src="./assets/static/js/exporting.js"></script>
                                            <script src="./assets/static/js/solid-gauge.js"></script>

                                            <script src="./assets/static/Donut/_scripts/simple-donut-jquery.js"></script>


                                            <script src="https://www.gstatic.com/firebasejs/4.10.0/firebase.js"></script>
                                            <script src="./assets/static/js/remotefb.js"></script>
                                            <!--Overall growth Area Chart-->
                                            <script>

                                                Highcharts.chart('totalworkreport', {
                                                    chart: {
                                                        type: 'area', backgroundColor: null
                                                    },
                                                    title: null,
                                                    legend: { enabled: false },
                                                    exporting: { enabled: false },
                                                    xAxis: {
                                                        allowDecimals: false,
                                                        labels: {
                                                            formatter: function () {
                                                                return this.value; // clean, unformatted number for year
                                                            }
                                                        },
                                                        visible: false
                                                    },
                                                    yAxis: {
                                                        gridLineWidth: 0,
                                                        minorGridLineWidth: 0,
                                                        title: {
                                                            text: 'Values'
                                                        },
                                                        visible: false,

                                                        lineColor: '#707073',
                                                        minorGridLineColor: '#505053',
                                                        tickColor: '#707073',
                                                        title: {
                                                            style: {
                                                                color: '#A0A0A3'

                                                            }
                                                        }
                                                    },
                                                    tooltip: {
                                                        pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/> in {point.x}'
                                                    },
                                                    plotOptions: {
                                                        area: {
                                                            pointStart: 2017,
                                                            series: {
                                                                dataLabels: {
                                                                    color: '#B0B0B3'
                                                                },
                                                                marker: {
                                                                    lineColor: '#333'
                                                                }
                                                            },
                                                            marker: {
                                                                enabled: false,
                                                                symbol: 'circle',
                                                                radius: 2,
                                                                states: {
                                                                    hover: {
                                                                        enabled: true
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    },
                                                    series: [{
                                                        name: 'Sheduled Growth',
                                                        color: '#795548',
                                                        data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640,
                                                            1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
                                                            27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342, 26662,
                                                            26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826, 24605,
                                                            24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344, 23586,
                                                            22380, 29004, 37287, 34747, 33076, 32555, 32144, 31009, 30950,
                                                            30871, 30824, 30577, 30527, 30475, 30421, 30358, 30295, 30104]
                                                    }, {
                                                        name: 'Orginal Growth',
                                                        color: '#d7ccc8',
                                                        data: [null, null, null, null, null, null, null, null, null, null,
                                                            5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
                                                            4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                                                            15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                                                            33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
                                                            35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                                                            21000, 20000, 19000, 18000, 18000, 17000, 16000]
                                                    }]
                                                });
                                            </script>

                                            <!-- Expense KPI-->
                                            <script>





                                                var gaugeOptions = {

                                                    chart: {
                                                        type: 'solidgauge',
                                                        backgroundColor: null
                                                    },

                                                    title: null,

                                                    pane: {
                                                        center: ['50%', '85%'],
                                                        size: '140%',
                                                        startAngle: -90,
                                                        endAngle: 90,
                                                        background: {
                                                            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                                                            innerRadius: '60%',
                                                            outerRadius: '100%',
                                                            shape: 'arc'
                                                        }
                                                    },

                                                    tooltip: {
                                                        enabled: false
                                                    },

                                                    // the value axis
                                                    yAxis: {
                                                        stops: [
                                                            [0.1, '#55BF3B'], // green
                                                            [0.5, '#DDDF0D'], // yellow
                                                            [0.9, '#DF5353'] // red
                                                        ],
                                                        lineWidth: 0,
                                                        minorTickInterval: null,
                                                        tickAmount: 2,
                                                        title: {
                                                            y: -70
                                                        },
                                                        labels: {
                                                            y: 16
                                                        }
                                                    },

                                                    plotOptions: {
                                                        solidgauge: {
                                                            dataLabels: {
                                                                y: 5,
                                                                borderWidth: 0,
                                                                useHTML: true
                                                            }
                                                        }
                                                    }
                                                };

                                                // The speed gauge
                                                var chartSpeed = Highcharts.chart('ExpenceKPI', Highcharts.merge(gaugeOptions, {
                                                    yAxis: {
                                                        min: 0,
                                                        max: 200,
                                                        title: {
                                                            text: ''

                                                        }
                                                    },
                                                    exporting: { enabled: false },
                                                    credits: {
                                                        enabled: false
                                                    },

                                                    series: [{
                                                        name: 'Expense',
                                                        color: '#fff',
                                                        data: [80],
                                                        dataLabels: {
                                                            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'silver') + '">{y}</span>' +
                                                                '<span style="font-size:12px;color:silver">%</span></div>'
                                                        },
                                                        tooltip: {
                                                            valueSuffix: ' km/h'
                                                        }
                                                    }]

                                                }));


                                                // Bring life to the dials
                                                setInterval(function () {
                                                    // Speed
                                                    var point,
                                                        newVal,
                                                        inc;

                                                    if (chartSpeed) {
                                                        point = chartSpeed.series[0].points[0];
                                                        inc = Math.round((Math.random() - 0.5) * 100);
                                                        newVal = point.y + inc;

                                                        if (newVal < 0 || newVal > 200) {
                                                            newVal = point.y - inc;
                                                        }

                                                        point.update(newVal);
                                                    }


                                                }, 2000);



                                            </script>

                                            <!--Attandance Today-->
                                            <script>


                                                Highcharts.chart('Attandancetoday', {
                                                    chart: {
                                                        backgroundColor: null
                                                    },
                                                    exporting: { enabled: false },
                                                    title: null,
                                                    subtitle: null,
                                                    xAxis: {
                                                        categories: [
                                                            'Site 1',
                                                            'Site 2',
                                                            'Site 3',
                                                            'Site 4',
                                                            'Site 5',
                                                            'Site 6',
                                                            'Site 7',
                                                            'Site 8',
                                                            'Site 9',
                                                            'Site 10',
                                                            'Site 11',
                                                            'Site 12'
                                                        ],
                                                        crosshair: true,
                                                        visible: false
                                                    },
                                                    yAxis: {
                                                        min: 0,
                                                        title: {
                                                            text: 'Rainfall (mm)'
                                                        },
                                                        visible: false
                                                    },
                                                    legend: { enabled: false },
                                                    plotOptions: {
                                                        column: {
                                                            pointPadding: 0.2,
                                                            borderWidth: 0
                                                        }
                                                    },
                                                    series: [{
                                                        type: 'column',
                                                        name: 'Attandance',
                                                        data: [49, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54],
                                                        color: '#4db6ac'
                                                    }, {
                                                        type: 'spline',
                                                        name: 'Requested',
                                                        color: '#c3c3c3',
                                                        data: [50, 80, 110, 128, 140, 176, 136, 148, 217, 200, 96, 55],
                                                        marker: {
                                                            lineWidth: 2,
                                                            lineColor: Highcharts.getOptions().colors[3],
                                                            fillColor: 'white'
                                                        }
                                                    }]
                                                });
                                            </script>

                                            <!--Donut Piecharts-->
                                            <script>

                                                $(function () {
                                                    updateDonutChart('#specificChart', 57, true);
                                                });

                                                $(function () {
                                                    updateDonutChart('#specificChart1', 78, true);
                                                });
                                            </script>

                                        <!--Overall job type pie Chart-->
                                            <script>
                                                Highcharts.setOptions({
                                                    colors: ['#4db6ac', '#91bbb7', '#b4cfcd', '#c0cbca', '#BDBDBD', '#9E9E9E', '#757575', '#616161']
                                                });
                                                Highcharts.chart('Jobpie', {
                                                    chart: {
                                                        plotBackgroundColor: null,
                                                        plotBorderWidth: null,
                                                        plotShadow: false,
                                                        type: 'pie',
                                                        backgroundColor: null

                                                    },
                                                    exporting: { enabled: false },
                                                    title: null,
                                                    tooltip: {
                                                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                                    },
                                                    plotOptions: {
                                                        pie: {
                                                            allowPointSelect: true,
                                                            cursor: 'pointer',
                                                            dataLabels: {
                                                                enabled: true,
                                                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                                                style: {
                                                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'White'
                                                                }
                                                            }
                                                        }
                                                    },
                                                    series: [{
                                                        name: 'Job',
                                                        colorByPoint: true,
                                                        data: [{
                                                            name: 'Concreting',
                                                            y: 56.33, sliced: true,
                                                            selected: true
                                                        }, {
                                                            name: 'Platering',
                                                            y: 24.03

                                                        }, {
                                                            name: 'Flooring',
                                                            y: 10.38
                                                        }, {
                                                            name: 'Furnishing',
                                                            y: 4.77
                                                        }, {
                                                            name: 'intirior',
                                                            y: 0.91
                                                        }, {
                                                            name: 'Other',
                                                            y: 0.2
                                                        }]
                                                    }]
                                                });
                                            </script>

                                            <!-- Overall Matirial Purachase and Usage-->
                                            <script>
                                                Highcharts.setOptions({
                                                    colors: ['#CFD8DC', '#B0BEC5', '#EEEEEE', '#E0E0E0', '#BDBDBD', '#9E9E9E', '#757575', '#616161']
                                                });
                                                Highcharts.chart('Purchaseandusagebar', {
                                                    chart: {
                                                        type: 'bar',
                                                        backgroundColor: null
                                                    },
                                                    title: null,
                                                    exporting: { enabled: false },

                                                    xAxis: {
                                                        categories: ['Construction ', 'Furniture', 'Electrical', 'Platering', 'Other'],
                                                        title: {
                                                            text: null
                                                        }
                                                    },
                                                    yAxis: {
                                                        min: 0,
                                                        title: {
                                                            text: 'Usage (millions)',
                                                            align: 'high'
                                                        },
                                                        labels: {
                                                            overflow: 'justify'
                                                        }
                                                    },
                                                    tooltip: {
                                                        valueSuffix: ' millions'
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            dataLabels: {
                                                                enabled: false
                                                            }
                                                        }
                                                    },
                                                    legend: {
                                                        layout: 'vertical',
                                                        align: 'right',
                                                        verticalAlign: 'top',
                                                        x: -40,
                                                        y: 40,
                                                        floating: true,
                                                        borderWidth: 1,
                                                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                        shadow: true
                                                    },
                                                    credits: {
                                                        enabled: false
                                                    },
                                                    series: [{
                                                        name: 'Purchase',
                                                        data: [133, 156, 947, 408, 6]
                                                    }, {
                                                        name: 'Usage',
                                                        data: [107, 31, 635, 203, 2]
                                                    }]
                                                });
                                            </script>



                                        <!-- Next 7 days Shedule-->

                                            <script>

                                                Highcharts.chart('next7daysshedule', {
                                                    chart: {
                                                        type: 'area',
                                                        backgroundColor: null
                                                    },
                                                    legend: { enabled: false },
                                                    exporting: { enabled: false },

                                                    title: null,
                                                    xAxis: {
                                                        categories: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'],
                                                        tickmarkPlacement: 'on',
                                                        title: {
                                                            enabled: false
                                                        }
                                                    },
                                                    yAxis: {
                                                        title: {
                                                            text: 'Percent'
                                                        }
                                                    },
                                                    tooltip: {
                                                        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.percentage:.1f}%</b> ({point.y:,.0f} millions)<br/>',
                                                        split: true
                                                    },
                                                    plotOptions: {
                                                        area: {
                                                            stacking: 'percent',
                                                            lineColor: '#ffffff',
                                                            lineWidth: 1,
                                                            marker: {
                                                                lineWidth: 1,
                                                                lineColor: '#ffffff'
                                                            }
                                                        }
                                                    },
                                                    series: [{
                                                        name: 'Construction',
                                                        data: [502, 635, 809, 947, 1402, 3634, 5268]
                                                        , color: '#fff'
                                                    }, {
                                                        name: 'Furnishing',
                                                        data: [106, 107, 111, 133, 221, 767, 1766]
                                                    }, {
                                                        name: 'a',
                                                        data: [163, 203, 276, 408, 547, 729, 628]
                                                    }, {
                                                        name: 'b',
                                                        data: [18, 31, 54, 156, 339, 818, 1201]
                                                    }, {
                                                        name: 'c',
                                                        data: [2, 2, 2, 6, 13, 30, 46]
                                                    }]
                                                });
                                            </script>
                                


       
              </body>
              </html>

         
                <!-- /Row -->
                 <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="#" class="text-dark" >Palmtrix</a> © 2022</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                
                </footer>
            </div>
            <!-- /Footer -->

            </div>
            <!-- /Container -->
			
            <!-- Footer -->
            <!-- <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="#" class="text-dark" >Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div> -->
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->


    <!-- jQuery -->
    <script src="./assets/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="./assets/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="./assets/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="./assets/dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="./assets/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="./assets/dist/js/toggle-data.js"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="./assets/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="./assets/vendors/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Sparkline JavaScript -->
    <script src="./assets/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="./assets/vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="./assets/vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="./assets/dist/js/vectormap-data.js"></script>

	<!-- Owl JavaScript -->
    <script src="./assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Toastr JS -->
    <script src="./assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    
	<!-- Apex JavaScript -->
    <script src="./assets/vendors/apexcharts/dist/apexcharts.min.js"></script>
	<script src="./assets/dist/js/irregular-data-series.js"></script>
	 
    <!-- Init JavaScript -->
    <script src="./assets/dist/js/init.js"></script>
	<script src="./assets/dist/js/dashboard-data.js"></script>
	
</body>

</html>