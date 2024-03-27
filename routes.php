<?php

include 'cors.php';

$routes = [
    '/' => 'HomeController@index',
    '/sobre' => 'SobreController@index',
    '/userTeste' => 'UserController@teste',
    '/user' => 'UserController@index',
    '/userDestroy' => 'UserController@destroy',
    '/userInsert' => 'UserController@store',
    '/userShow' => 'UserController@show',
    '/userUpdate' => 'UserController@update',
    '/userLogin' => 'UserController@checkCredentials',
    '/logInsert' => 'LogradouroController@store',
    // Adicione outras rotas conforme necessário
];

return $routes;