<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['api'] = 'api/tentor';
$route['api/tentor'] = 'api/tentor/tentor';
$route['api/tentor/id/(:num)'] = 'api/tentor/detail_tentor/$1';
$route['api/tentor/(:num)/(:num)'] = 'api/tentor/custom_tentor/$1/$2';
$route['api/tentor/(:num)']        = 'api/tentor/custom_tentor/$1/$2';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;