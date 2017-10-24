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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['login'] = 'web/login';
$route['logout'] = 'web/logout';
$route['loginPage'] = 'web/loginPage';

$route['admin/homepage'] = 'admin/homepage';
$route['admin/Add-Mahasiswa'] = 'admin/Add_Mahasiswa';
$route['admin/Add-Matkul'] = 'admin/Add_Matkul';
$route['admin/Add-Dosen'] = 'admin/Add_Dosen';
$route['admin/Lihat-Dosen'] = 'admin/Lihat_Dosen';
$route['admin/Lihat-Mahasiswa'] = 'admin/Lihat_Mahasiswa';
$route['admin/Lihat-Matkul'] = 'admin/Lihat_Matkul';
$route['admin/Delete-Mahasiswa/(:any)'] = 'admin/Delete_Mahasiswa/$1';
$route['admin/Verifikasi-Mahasiswa/(:any)'] = 'admin/Verifikasi_Mahasiswa/$1';
$route['admin/mahasiswa/(:any)/KKS'] = 'admin/KKS/$1';
$route['admin/mahasiswa/(:any)/KRS/(:any)'] = 'admin/KRS/$1/$2';
$route['admin/mahasiswa/(:any)/Edit'] = 'admin/Edit_Mahasiswa/$1';
$route['admin/mahasiswa/(:any)'] = 'admin/Detail_Mahasiswa/$1';

$route['admin/dosen/(:any)/Edit'] = 'admin/Edit_Dosen/$1';
$route['admin/dosen/(:any)'] = 'admin/Detail_Dosen/$1';
$route['admin/Delete-Dosen/(:any)'] = 'admin/Delete_Dosen/$1';



$route['dosen/homepage'] = 'dosen/homepage';
$route['dosen/Verifikasi-Mahasiswa/(:any)'] = 'dosen/Verifikasi_Mahasiswa/$1';



$route['mahasiswa/(:any)/Change-Password'] = 'mahasiswa/Change_Password/$1';
$route['mahasiswa/(:any)/KKS'] = 'mahasiswa/KKS/$1';
$route['mahasiswa/(:any)/KRS/(:any)'] = 'mahasiswa/KRS/$1/$2';
$route['mahasiswa/(:any)/Isi-Dan-Edit-KRS/(:any)'] = 'mahasiswa/Isi_Dan_Edit_KRS/$1/$2';
$route['mahasiswa/(:any)/Add-Into-KRS/(:any)'] = 'mahasiswa/Add_Into_KRS/$1/$2';
$route['mahasiswa/(:any)/Delete-From-KRS/(:any)'] = 'mahasiswa/Delete_From_KRS/$1/$2';
$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
