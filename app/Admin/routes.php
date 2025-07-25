<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('menus', MenuController::class);
    $router->resource('pages', PageController::class);
    $router->resource('reviews', ReviewConroller::class);
    $router->resource('projects', ProjectController::class);
    $router->resource('forms', FormController::class);
    $router->resource('form_results', FormResultController::class);

});
