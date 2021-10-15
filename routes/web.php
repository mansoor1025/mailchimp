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

Route::get('/', function () {
    return view('logins');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact-list','ContactController@contact_list')->name('contact-list');
Route::post('/add-contact','ContactController@add_contact')->name('add-contact');
Route::get('/get-contact-list','ContactController@get_contact_list')->name('get-contact-list');
Route::get('/edit-contact-list','ContactController@edit_contact_list')->name('edit-contact-list');
Route::post('/update-contact-form','ContactController@update_contact_form')->name('update-contact-form');
Route::get('/delete-contact-list','ContactController@delete_contact_list')->name('delete-contact-list');
Route::get('/export-to-mail-chimp','ContactController@export_to_mail_chimp')->name('export-to-mail-chimp');
Route::get('/logout','ContactController@logout')->name('logout');