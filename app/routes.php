<?php

$router->get('', 'UsersController@index');
$router->post('users', 'UsersController@store');
