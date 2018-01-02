<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['kirjaudu'] = 'users/login';
$route['media'] = 'media';
$route['category'] = 'media/category';
$route['lisaakuva'] = 'media/lisaakuva';
$route['poistajamuokkaa'] = 'media/poistajamuokkaa';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
