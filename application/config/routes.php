<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'home';

// List
// $route['list/service'] = 'listing/allService';
// $route['list/service/(:any)'] = 'listing/serviceByType/$1';
// $route['list/offer'] = 'listing/allOffer';

// register
$route['registerUser'] = 'register/save';

// user login
$route['login'] = 'login';
$route['login/user/check'] = 'login/checkUserLogin';
$route['logout'] = 'login/logoutUser';

// forgot password
$route['forgot'] = 'forgot';
$route['forgot/email'] = 'forgot/email';
$route['forgot/validate/(:num)/(:any)'] = 'forgot/validate/$1/$2';
$route['forgot/reset'] = 'forgot/reset';

// user home
$route['userhome'] = 'userHome';
$route['updateAddress'] = 'userHome/updateAddress';

// service
$route['service'] = 'service';
$route['service/new'] = 'service/new';
$route['service/add'] = 'service/addService';
$route['service/edit/(:num)'] = 'service/editService/$1';
$route['service/update/(:num)'] = 'service/updateService/$1';
$route['service/delete/(:num)'] = 'service/deleteService/$1';

// Offer
// $route['offer'] = 'userHome';
// $route['offer/new'] = 'offer';
// $route['offer/add'] = 'offer/addOffer';
// $route['offer/edit/(:num)'] = 'offer/editOffer/$1';
// $route['offer/update/(:num)'] = 'offer/updateOffer/$1';
// $route['offer/delete/(:num)'] = 'offer/deleteOffer/$1';

// ajax calls
$route['ajaxEmail'] = 'ajax/email';

// // admin
// $route['admin'] = 'admin/dashboard';
// $route['admin/login'] = 'admin/login';
// $route['login/check'] = 'admin/login/checkLogin';
// $route['admin/logout'] = 'admin/user/logout';

// admin users
// $route['admin/user'] = 'admin/user';
// $route['admin/user/adduser'] = 'admin/user/addUser';
// $route['admin/user/update'] = 'admin/user/update';
// $route['admin/user/delete/(:num)'] = 'admin/user/delete/$1';
// $route['admin/user/loadupdate/(:num)'] = 'admin/user/loadUpdate/$1';