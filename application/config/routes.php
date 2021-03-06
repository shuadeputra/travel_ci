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
$route['Products/(:num)']= 'Products';

$route['posts_blog/(:num)']= 'posts_blog';
$route['details_blog/(:num)']= 'posts_blog/details_blog/$1';
$route['posts_seo/(:num)']= 'posts_seo';


$route['contact_form/(:num)']= 'contact_form';
$route['details_contact/(:num)']= 'contact_form/details_contact/$1';


$route['about_us/(:num)']= 'about_us';
$route['details_aboutus/(:num)']= 'about_us/details_aboutus/$1';


$route['produk_detail/(:num)']= 'products/produk_detail/$1';
$route['produk_detail/(:num)/(:num)']= 'products/produk_detail/$1/$1';
$route['service/(:num)']= 'service';


$route['posts/(:num)']= 'posts';

$route['home/(:num)']= 'home';

$route['blog/(:num)']= 'blog';

$route['seo/(:num)']= 'seo';

$route['blog_detail/(:num)']= 'blog/blog_detail/$1';

$route['blog_detail/(:num)/(:num)']= 'blog/blog_detail/$1/$1';

$route['details/(:num)']= 'posts/details/$1'; //Jika (:num)= hanya angka kalau (:any)= angka dan huruf
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
