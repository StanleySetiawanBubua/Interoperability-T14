<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/employee/success', 'EmployeeController@editSuccess');
$router->get('/employee/create', 'EmployeeController@viewcreateEmployee');
$router->post('/employee/create', 'EmployeeController@createEmployee');
$router->get('/employee', 'EmployeeController@getEmployee');
$router->get('/employee/{id}', 'EmployeeController@getEmployeeById');
$router->get('/employee/edit/{id}', 'EmployeeController@editEmployee');
$router->post('/employee/update/{id}', 'EmployeeController@updateEmployee');
$router->delete('/employee/delete/{id}', 'EmployeeController@deleteEmployee');
