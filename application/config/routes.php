<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Form_controller';
$route['form-action'] = 'Form_controller/form_action';
$route['view-data'] = 'Form_controller/view_data';
$route['update-view-data/(:num)'] = 'Form_controller/update_view_data/$1';
$route['update-form-action'] = 'Form_controller/update_form_action';
$route['delete-data/(:num)'] = 'Form_controller/delete_data/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
