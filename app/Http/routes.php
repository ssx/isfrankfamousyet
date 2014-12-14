<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Below are the two routes used by the site
|
*/

Route::get('/', 		                'UserController@getIndex');
Route::get('/submit',               	'UserController@getSubmit');

Route::get('/auth/twitter/go',      	'TwitterController@redirectToTwitter');
Route::get('/auth/twitter/callback',   	'TwitterController@returnFromTwitter');

