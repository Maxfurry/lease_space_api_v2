<?php

$router->get('/', function () use ($router)
{
    return 'auth';
});

$router->post('signin', 'AuthController@login');