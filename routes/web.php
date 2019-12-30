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

$router->get('/', function () use ($router)
{
    return 'Welcome to Lease Space created by PeerlessTech';
});

$router->get('/api', function () use ($router)
{
    return 'Welcome to Lease Space API created by PeerlessTech';
});

$router->group(['prefix' => 'api/v2'], function () use ($router)
{
    require_once base_path('routes/v2/index.php');
});
