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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search/results', function () {
    return view('search-result');
});

Route::get('/do-test', function () {
    return view('do-test');
});

Route::get('/blog-suggestion/{demoType}', function ($demoType) {
    return view('blog-suggestion');
});

Route::get('/find-interests', function () {
    return view('interests');
});

Route::get('/health', function () {
    return view('health');
});

Route::get('/finances', function () {
    return view('finances');
});

Route::get('/event', function () {
    return view('event');
});
