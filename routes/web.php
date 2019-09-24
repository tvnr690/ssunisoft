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

/* +++++++++++++++++++++ Client Routes +++++++++++++++++++++++++ */
Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/courses', 'HomeController@courses')->name('courses');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');

Auth::routes();


/* +++++++++++++++++++++ Admin Blog Category Routes +++++++++++++++++++++++++ */
Route::get('admin/category', 'CategoryController@index')->name('admin.category');
Route::get('admin/category/create', 'CategoryController@create')->name('admin.category.create');
Route::post('admin/category/store', 'CategoryController@store')->name('admin.category.store');
Route::delete('admin/category/{category}', 'CategoryController@destroy')->name('admin.category.delete');
Route::get('admin/category/{category}/edit', 'CategoryController@edit')->name('admin.category.edit');
Route::patch('admin/category/{category}', 'CategoryController@update')->name('admin.category.update');

/* +++++++++++++++++++++ Admin Blog Sub Category Routes +++++++++++++++++++++++++ */
Route::get('admin/sub_category', 'SubCategoryController@index')->name('admin.sub_category');
Route::get('admin/sub_category/create', 'SubCategoryController@create')->name('admin.sub_category.create');
Route::post('admin/sub_category/store', 'SubCategoryController@store')->name('admin.sub_category.store');
Route::delete('admin/sub_category/{sub_category}', 'SubCategoryController@destroy')->name('admin.sub_category.delete');
Route::get('admin/sub_category/{sub_category}/edit', 'SubCategoryController@edit')->name('admin.sub_category.edit');
Route::patch('admin/sub_category/{sub_category}', 'SubCategoryController@update')->name('admin.sub_category.update');




