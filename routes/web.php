<?php

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

// interface BarInterface{}
// class Bar implements BarInterface{}
// class SecondBar implements BarInterface{}

// app()->bind('BarInterface', 'Bar');

// Route::get('bar', function(){
//     $bar = app('BarInterface' );
//     dd($bar);
// });

// Route::get('/', function(){
//     return 'Home Page';
// });

Route::get('foo', 'FooController@foo');

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}',function (App\Tag $tags)
{
return App::make('App\Http\Controllers\TagsController')->show($tags);
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function(){
//     return view('pages.contact');
// });
Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::get('foo', ['middleware' => 'manager', function(){
//     return 'this page can only be seen by managers';
// }]);

// Route::get('foo', ['middleware' => 'manager', function(){
//     return 'this page can only be seen by managers';
// }]);
