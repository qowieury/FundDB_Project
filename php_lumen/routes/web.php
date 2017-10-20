<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'IndexController@index');
$router->get('/menu', 'CustomerController@guest_view_menu');
$router->get('/promotions', 'CustomerController@guest_view_promotion');
$router->get('/register', 'CustomerController@register');
$router->post('/register', 'CustomerController@store_register_data');
$router->get('/login', 'CustomerController@login');
$router->post('/login', 'CustomerController@login_authen');
$router->get('/logout','CustomerController@logout');

$router->get('/customer/menu', 'CustomerController@view_menu');


//crud in class
$router->get('/crud/register/view', 'CustomerController@view_register_data');
$router->post('/crud/register/view/delete', 'CustomerController@delete_register_data');
