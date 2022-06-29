<?php 

// Home
$router->get('/', 'PagesController@index');
$router->post('/', 'PagesController@index');

//View
$router->get('/view/', 'PagesController@view');
$router->post('/view/', 'PagesController@view');