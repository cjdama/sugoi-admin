<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

Route::get('/{project}/{page?}', function ($project, $page = null) {
    $view = $project . '.index';

    if ($page) $view = "{$project}.pages.$page";

    return view()->exists($view) ? view($view) : abort(404);
});
