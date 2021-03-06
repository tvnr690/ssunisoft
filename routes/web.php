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

/* +++++++++++++++++++++ Admin Blog Tag Routes +++++++++++++++++++++++++ */
Route::get('admin/tag', 'TagController@index')->name('admin.tag');
Route::get('admin/tag/create', 'TagController@create')->name('admin.tag.create');
Route::post('admin/tag/store', 'TagController@store')->name('admin.tag.store');
Route::delete('admin/tag/{tag}', 'TagController@destroy')->name('admin.tag.delete');
Route::get('admin/tag/{tag}/edit', 'TagController@edit')->name('admin.tag.edit');
Route::patch('admin/tag/{tag}', 'TagController@update')->name('admin.tag.update');

/* +++++++++++++++++++++ All Blog Posts Routes +++++++++++++++++++++++++ */
Route::get('admin/post', 'PostController@index')->name('admin.post');
Route::get('admin/post/bloglist', 'PostController@bloglist')->name('admin.post.bloglist');
Route::get('admin/post/create', 'PostController@create')->name('admin.post.create');
Route::post('admin/post/store', 'PostController@store')->name('admin.post.store');
Route::delete('admin/post/{post}', 'PostController@destroy')->name('admin.post.delete');
Route::get('admin/post/{post}/show', 'PostController@show')->name('admin.post.show');
Route::get('admin/post/{post}/edit', 'PostController@edit')->name('admin.post.edit');
Route::patch('admin/post/{post}', 'PostController@update')->name('admin.post.update');
Route::get('admin/post/fetch', 'PostController@fetch')->name('admin.post.fetch');






