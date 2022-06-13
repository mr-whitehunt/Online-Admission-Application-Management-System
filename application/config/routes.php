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
$route['default_controller'] = 'home_controller';
$route['grivance'] = 'home_controller/grivance';
$route['grivance_start'] = 'home_controller/grivance_start';
$route['grivance_start_public'] = 'home_controller/grivance_start_public';
$route['grivance_otp'] = 'home_controller/grivance_otp';
$route['grivance_student_otp'] = 'home_controller/grivance_student_otp';
$route['grivance_public_details'] = 'home_controller/grivance_public_details';
$route['grivance_stu_details'] = 'home_controller/grivance_student_details';
$route['grivance_public'] = 'home_controller/grivance_public';
$route['online_application'] = 'home_controller/application';
$route['login'] = 'auth_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['welcome'] = 'welcome';

$route['admin/dashboard'] = 'admin_controller';
$route['admin/session_settings'] = 'settings_controller/session';
$route['admin/session/delete_session/(:num)'] = 'settings_controller/delete_session/$1';
$route['admin/general_settings'] = 'settings_controller/general_settings';
$route['admin/frontcms_settings'] = 'settings_controller/frontcms_settings';
$route['admin/student_details'] = 'students_controller/student_details';
$route['admin/student_admission'] = 'students_controller/student_admission';
$route['admin/online_admission'] = 'students_controller/online_admission';
$route['admin/rejected_application'] = 'students_controller/rejected_application';
$route['admin/online_admission/details/(:num)'] = 'students_controller/online_admission_details/$1';
$route['admin/student_category'] = 'students_controller/student_category';
$route['admin/student_category/(:num)'] = 'students_controller/edit_student_category/$1';
$route['admin/student_category/delete_student_category/(:num)'] = 'students_controller/delete_student_category/$1';
$route['admin/enquiry'] = 'frontoffice_controller/enquiry';
$route['admin/complaint'] = 'frontoffice_controller/complaint';
$route['admin/fees_details'] = 'fees_controller/fees_details';
$route['admin/collect_fees'] = 'fees_controller/collect_fees';
$route['admin/department_details'] = 'academic_controller/department';
$route['admin/edit_department/(:num)'] = 'academic_controller/edit_department/$1';
$route['admin/department_details/delete_department/(:num)'] = 'academic_controller/delete_department/$1';
$route['admin/semester_details'] = 'academic_controller/semester';
$route['admin/edit_semester/(:num)'] = 'academic_controller/edit_semester/$1';
$route['admin/semester_details/delete_semester/(:num)'] = 'academic_controller/delete_semester/$1';
$route['admin/setup_front_office'] = 'frontoffice_controller/setup_front_office';
$route['admin/edit_enquiry_type/(:num)'] = 'frontoffice_controller/edit_enquiry_type/$1';
$route['admin/enquiry_type/delete_enquiry_type/(:num)'] = 'frontoffice_controller/delete_enquiry_type/$1';
$route['admin/edit_complaint_type/(:num)'] = 'frontoffice_controller/edit_complaint_type/$1';
$route['admin/complaint_type/delete_complaint_type/(:num)'] = 'frontoffice_controller/delete_complaint_type/$1';
$route['admin/profile_settings'] = 'settings_controller/profile_settings';
$route['admin/edit_slider/(:num)'] = 'settings_controller/edit_slider/$1';
$route['admin/slider_details/delete_slider/(:num)'] = 'settings_controller/delete_slider/$1';
$route['admin/online_admission_details/approve/(:num)'] = 'students_controller/approve_online_admission/$1';
$route['admin/online_admission_details/confirm/(:num)'] = 'students_controller/confirm_online_admission/$1';