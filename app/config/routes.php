<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "index";
$route['404_override'] = '';
$route['(:num)'] = "topic/content/$1";
$route['recent/(:num)'] = "recent/index/$1";
$route['news/(:num)'] = "news/content/$1";
$route['info/(:num)'] = "info/content/$1";
$route['submit/(:any)'] = "submit/index/$1";
//$route['(:any)'] = "/$1";
/*
$route['lost/(:num)'] = "lost/content/$1";
$route['found/page/(:num)'] = "found/index/$1";
$route['lost/page/(:num)'] = "lost/index/$1";
$route['user/lost/(:num)'] = "user/lists/$1";
$route['user/found/(:num)'] = "user/lists/$1";
//$route['(:any)'] = "user/index";
$route['search/(:any)'] = "search/index/$1";
*/
/* End of file routes.php */
/* Location: ./application/config/routes.php */