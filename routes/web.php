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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'post'], function() use ($router) {
        $router->get('/get', 'PostController@index');
        $router->post('/store', 'PostController@store');
        $router->put('/update/{id}' , 'PostController@update');
        $router->delete('/delete/{id}', 'PostController@destroy');
    });

    $router->group(['prefix' => 'login'], function () use ($router) {
        $router->post('/', 'AuthController@login');
    });



// $router->post('/login', function (Request $request) {
//     $apps = $request->only('name', 'password');
//     // var_dump($apps); die;
//     $token = app('auth')->attempt($request->only('name', 'password'));
//     return response()->json(compact('token'));
// });
});
