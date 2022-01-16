<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@get');
Route::post('/posts', 'PostsController@create');
Route::put('/posts/{post}', 'PostsController@update');
Route::patch('/posts/{post}', 'PostsController@upvote');
Route::delete('/posts/{post}', 'PostsController@delete');

Route::group(['prefix'=>'posts/{post}'], function () {
    Route::get('/comments', 'PostCommentsController@index');
    Route::get('/comments/{comment}', 'PostCommentsController@get');
    Route::post('/comments', 'PostCommentsController@create');
    Route::put('/comments/{comment}', 'PostCommentsController@update');
    Route::patch('/comments/{comment}', 'PostCommentsController@upvote');
    Route::delete('/comments/{comment}', 'PostCommentsController@delete');
});
