<?php
use \Illuminate\Http\Request;
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

// $router->group(['prefix' => '/'], function () use ($router) {
//     $router->get('/', 'ExampleController@print');
// });

// $router->group(['prefix' => 'api'], function () use ($router) {

    
//     $router->group(['prefix' => 'login'], function () use ($router) {
//         $router->post('/', 'AuthController@login');
//     });

//     $router->group(['prefix' => 'post'], function() use ($router) {
//         $router->get('/get', 'PostController@index');
//         $router->post('/store', 'PostController@store');
//         $router->put('/update/{id}' , 'PostController@update');
//         $router->delete('/delete/{id}', 'PostController@destroy');
//     });
// });

$router->get('/', 'Posts\PostController@index');