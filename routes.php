<?php

// Project routes 

$router->get('register', 'AdminController@create');
$router->post('register/store', 'AdminController@store');
$router->get('login', 'AdminController@login');
$router->post('login/session', 'AdminController@session');
$router->post('logout', 'AdminController@destroy');

$router->get('', 'DashboardController@index');

$router->get('users', 'UserController@index');
$router->get('users/edit', 'UserController@edit');
$router->post('users/update', 'UserController@update');
$router->post('users/delete', 'UserController@destroy');

$router->get('posts', 'PostController@index');
$router->get('posts/create', 'PostController@create');
$router->get('posts/view', 'PostController@show');
$router->post('posts/store', 'PostController@store');
$router->get('posts/edit', 'PostController@edit');
$router->post('posts/update', 'PostController@update');
$router->post('posts/delete', 'PostController@destroy');

$router->get('categories', 'CategoryController@index');
$router->get('categories/create', 'CategoryController@create');
$router->post('categories/store', 'CategoryController@store');
$router->get('categories/edit', 'CategoryController@edit');
$router->post('categories/update', 'CategoryController@update');
$router->post('categories/delete', 'CategoryController@destroy');
