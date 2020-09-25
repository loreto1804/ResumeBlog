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

use Illuminate\Support\Facades\Route;

Route::get('/Login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/Login', 'Auth\LoginController@login');
Route::post('/Logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/Resume', 'ResumeController@index')->name('resume.index');
Route::get('/Contact', 'ContactsController@index')->name('contacts.index');
Route::get('/Feedback', 'FeedbackController@index')->name('feedback.index');
Route::get('/Blog', 'BlogController@index')->name('blog.index');
Route::get('/Blog/View/{id}', 'BlogController@viewBlogPost')->where('id', '[0-9]+')->name('blog.view');
Route::get('/Portfolio', 'PortfolioController@index')->name('portfolio.index');

Route::post('/Feedback/Send', 'FeedbackController@send')->name('feedback.send'); 
Route::post('/Newsletter', 'HomeController@subscribeToNewsletter')->name('newsletter.subscribe');

Route::middleware(['auth'])->group(function () {
    Route::get('/Blog/List', 'BlogController@list')->name('blog.list');
    Route::get('/Blog/New', 'BlogController@newBlogPost')->name('blog.new');
    Route::get('/Blog/Edit/{id}', 'BlogController@editBlogPost')->where('id', '[0-9]+')->name('blog.edit');

    Route::post('/Blog/Post', 'BlogController@createBlogPost')->name('blog.post');
    Route::post('/Blog/Update', 'BlogController@updateBlogPost')->name('blog.update');
});

