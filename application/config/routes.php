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
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// main Dashboard Pengurus routes
$route['dashboard/pengurus'] = 'Dashboard';
$route['events'] = 'Dashboard/events';
$route['materi'] = 'Dashboard/material';

// routes for events
$route['events/action/(:any)/(:any)'] = 'Dashboard/turn_action/$1/$2';
$route['events/edit'] = 'Dashboard/events_edit';

// routes for member
$route['member'] = 'Dashboard/member';
$route['member/add'] = 'Dashboard/add_member';

// routes for material
$route['materi/add'] = 'Dashboard/add_material';
$route['materi/delete/(:any)'] = 'Dashboard/delete_material/$1';
$route['materi/edit'] = 'Dashboard/edit_material';

// routes for pengurus
$route['pengurus'] = 'Dashboard/pengurus';
$route['pengurus/add'] = 'Dashboard/add_pengurus';
$route['pengurus/delete/(:any)'] = 'Dashboard/delete_pengurus/$1';
$route['pengurus/profiling'] = 'Dashboard/profiling';
$route['pengurus/assesment/(:any)'] = 'Dashboard/get_assesment/$1';
$route['pengurus/portofolio/(:any)'] = 'Dashboard/get_portofolio/$1';

// routes for user action
$route['user/edit/(:any)'] = 'Dashboard/edit_user/$1';
$route['user/promote/(:any)'] = 'Dashboard/promote_admin/$1';
$route['user/demote/(:any)'] = 'Dashboard/demote_member/$1';


// routes for chart
$route['dashboard/chart/(:num)'] = 'Dashboard/chart_details/$1';
$route['dashboard/chart/(:num)'] = 'Dashboard/chart_details/$1';

// Dashboard member
$route['dashboard/member'] = 'Member';
$route['presensi'] = 'Member/presensi';
$route['profile'] = 'Member/profile';
