<?php

$router->get('/', function () use ($router)
{
    return 'Welcome to Lease Space version 2 API created by PeerlessTech';
});

$router->group(['prefix' => 'auth'], function () use ($router)
{
    require_once base_path('routes/v2/authRoutes.php');
});

$router->group(['prefix' => 'users'], function () use ($router)
{
    require_once base_path('routes/v2/users.php');
});

$router->group(['prefix' => 'employee'], function () use ($router)
{
    require_once base_path('routes/v2/employee.php');
});

$router->group(['prefix' => 'permission'], function () use ($router)
{
    require_once base_path('routes/v2/permission.php');
});

$router->group(['prefix' => 'properties'], function () use ($router)
{
    require_once base_path('routes/v2/properties.php');
});

$router->group(['prefix' => 'resource'], function () use ($router)
{
    require_once base_path('routes/v2/resource.php');
});