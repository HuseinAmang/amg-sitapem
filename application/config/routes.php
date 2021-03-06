<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth Route
$route['signin']['get'] = 'auth/login';
$route['signin']['post'] = 'auth/login';
$route['signout']['get'] = 'auth/logout';
$route['forgot_password']['get'] = 'auth/forgot_password';
$route['forgot_password']['post'] = 'auth/forgot_password';
$route['reset_password/(:any)']['get'] = 'auth/reset_password/$1';
$route['reset_password/(:any)']['post'] = 'auth/reset_password/$1';
$route['activate/(:num)/(:any)']['get'] = 'auth/activate/$1/$2';
// User Route
$route['users']['get'] = 'auth';
$route['users/add']['get'] = 'auth/create_user';
$route['users/add']['post'] = 'auth/create_user';
$route['users/(:num)']['get'] = 'auth/edit_user/$1';
$route['users/(:num)']['post'] = 'auth/edit_user/$1';
$route['users/change_password']['get'] = 'auth/change_password';
$route['users/change_password']['post'] = 'auth/change_password';
$route['users/group']['get'] = 'auth/create_group';
$route['users/group']['post'] = 'auth/create_group';
$route['users/group/(:num)']['get'] = 'auth/edit_group/$1';
$route['users/group/(:num)']['post'] = 'auth/edit_group/$1';
$route['users/deactivate/(:num)']['get'] = 'auth/deactivate/$1';
$route['users/deactivate/(:num)']['post'] = 'auth/deactivate/$1';
$route['users/activate/(:num)']['get'] = 'auth/activate/$1';
