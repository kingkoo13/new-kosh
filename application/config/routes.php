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

$route['default_controller'] = 'site';



$route['a/login'] = "a/login";
$route['a/doctor_specialization'] = "a/doctor_specialization";
$route['a/disease'] = "a/disease";
$route['a/doctor'] = "a/doctor";
$route['a/patient'] = "a/patient";
$route['a/schedule'] = "a/schedule";
$route['a/appointment'] = "a/appointment";
$route['a/prescription'] = "a/prescription";
$route['a/admin'] = "a/admin";
$route['a'] = "a/admin";
$route['home'] = "f/home";
$route['all-programs'] = "f/page/all_programs" ;
$route['free-courses'] = "f/page/free_courses" ;
$route['membership'] = "f/page/membership" ;
$route['partnerships'] = "f/page/partnerships" ;
$route['book'] = "f/page/book" ;
$route['about-us'] = "f/page/about_us" ;
$route['who-we-are'] = "f/page/who_we_are" ;
$route['faqs'] = "f/page/faqs" ;
$route['press'] = "f/page/press" ;
$route['careers'] = "f/page/careers" ;
$route['blogs'] = "f/page/blogs" ;
$route['blog'] = "f/page/blog" ;
$route['contact-us'] = "f/page/contact_us" ;
$route['support'] = "f/page/support" ;
$route['vision-mission'] = "f/page/vision_mission" ;
$route['founders'] = "f/page/founders" ;
$route['journey'] = "f/page/journey" ;
$route['mentors'] = "f/page/mentors" ;
$route['coaches'] = "f/coaches" ;
$route['user-login'] = "f/user/user_login" ;
$route['user-signup'] = "f/user/user_signup" ;
$route['appointment'] = "f/appointment" ;





// $route['login'] = 'admin/login';
// $route['appointment'] = 'admin/appointment';

// $route['admin'] = 'admin/login';
// $route['login'] = 'login';

// $route['admin'] = "admin";

// $route['admin/([a-z]+)/(:any)'] = "admin/login/$1/$2";

$route['404_override'] = '';

$route['translate_uri_dashes'] = TRUE;