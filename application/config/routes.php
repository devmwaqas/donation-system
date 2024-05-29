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
$route['default_controller'] = 'home';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = FALSE;


$route['about'] = 'home/about';
$route['projects'] = 'home/projects';
$route['contact'] = 'home/contact';
$route['donation'] = 'home/donation';
$route['how_donate'] = 'home/how_donate';
$route['use_donation'] = 'home/use_donation';
$route['economic_development'] = 'home/economic_development';
$route['clean_water'] = 'home/clean_water';
$route['hunger'] = 'home/hunger';
$route['education'] = 'home/education';
$route['health_medical'] = 'home/health_medical';
$route['donation_form'] = 'home/donation_form';
$route['submit_donation'] = 'home/submit_donation';

$route['clothing_line'] = 'home/clothing_line';
$route['privacy'] = 'home/privacy';
$route['gift_voucher'] = 'home/gift_voucher';