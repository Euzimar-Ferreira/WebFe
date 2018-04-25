<?php

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('registrar-usuario', 'Auth\RegisterUserController@showRegistrationForm')->name('registrar-usuario');
$this->get('registrar-gerente', 'Auth\RegisterManagerController@showRegistrationForm')->name('registrar-gerente');
$this->get('registrar-administrador', 'Auth\RegisterAdministrationController@showRegistrationForm')->name('registrar-administrador');

$this->post('registrarUser', 'Auth\RegisterUserController@registerUser')->name('registrarUser');
$this->post('registrarManager', 'Auth\RegisterManagerController@registerManager')->name('registrarManager');
$this->post('registrarAdministration', 'Auth\RegisterAdministrationController@registerAdministration')->name('registrarAdministration');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'IndexController@index')->name('home');