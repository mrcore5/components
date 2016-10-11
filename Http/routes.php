<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// App global view composer
View::composer('components::layout', 'Mrcore\Components\Http\Composers\ViewComposer');


Route::get('/', 'ExamplesController@showDashboard');

Route::group(['prefix' => 'examples'], function() {

    Route::get('datagrid/basic', 'Vue\DatagridController@basicExample');

    Route::get('datatable/basic', 'Jquery\DatatablesController@basicExample');

});
