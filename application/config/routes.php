<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE; */

$route['default_controller'] = 'Admin/Admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE; 
$route['membership'] = 'Membership';
$route['membership-add'] = 'Membership/add_membership';
$route['upload-image'] = 'Users';
$route['store-image']='Users/add';
// $route['convert-page']='Users/viewpage';
$route['convert-image'] = 'Users/convert';
$route['viewpage'] = 'Users/viewpage/$id';



$route['membership-step1'] = 'Agent/Membership/add_membership_step_1';
$route['membership-step1-add'] = 'Agent/Membership/AddStep1';
$route['membership-step2/(:num)'] = 'Agent/Membership/add_membership_step_2/$1';
$route['membership-step2-add'] = 'Agent/Membership/AddStep2';
$route['membership-step3/(:num)'] = 'Agent/Membership/add_membership_step_3/$1';
$route['membership-step3-add'] = 'Agent/Membership/AddStep3';
$route['membership-step4/(:num)'] = 'Agent/Membership/add_membership_step_4/$1';
$route['membership-step4-add'] = 'Agent/Membership/AddStep4';
$route['membership-step5/(:num)'] = 'Agent/Membership/add_membership_step_5/$1';

$route['membership-step5-add'] = 'Agent/Membership/AddStep5';

$route['membership-profile/(:num)'] = 'Agent/Membership/member_profile/$1';

$route['edit-membership-step1/(:num)'] = 'Agent/Membership/edit_membership_step_1/$1';
$route['membership-step1-edit'] = 'Agent/Membership/EditStep1';
$route['edit-membership-step2/(:num)'] = 'Agent/Membership/edit_membership_step_2/$1';
$route['membership-step2-edit'] = 'Agent/Membership/EditStep2';
$route['edit-membership-step3/(:num)'] = 'Agent/Membership/edit_membership_step_3/$1';
$route['membership-step3-edit'] = 'Agent/Membership/EditStep3';
$route['edit-membership-step4/(:num)'] = 'Agent/Membership/edit_membership_step_4/$1';
$route['membership-step4-edit'] = 'Agent/Membership/EditStep4';
$route['edit-membership-step5/(:num)'] = 'Agent/Membership/edit_membership_step_5/$1';
$route['membership-step5-edit'] = 'Agent/Membership/EditStep5';



// admin


$route['dashbord'] = 'Admin/Admin/index';
$route['campaign'] = 'Admin/Campaign/index';
$route['campaign-add'] = 'Admin/Campaign/add';
$route['campaign-store'] = 'Admin/Campaign/add_campaign';
$route['addcampaign-quota'] = 'Admin/Campaign/addcampaign_quota';

