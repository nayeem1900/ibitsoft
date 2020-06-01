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

/*Route::get('/', function () {
    return view('welcome');
});*/



/*Route::get('/', function () {
    return view('index');
});*/



   //Route::get('/', 'AdminPageController@index')->name('admin_page.index');
Route::get('/', 'Website\PageController@index')->name('index');


Route::group(['prefix'=>'admin_page'], function(){


    Route::get('/', 'AdminPageController@index')->name('admin_page.index');


});


Route::group(['prefix'=>'student'], function(){

    Route::get('/', 'StudentinfoController@index')->name('student.index');
Route::get('/create', 'StudentinfoController@admission_crate')->name('student.create');
Route::post('/create', 'StudentinfoController@admission_save')->name('student.save');
    Route::get('/edit/{id}', 'StudentinfoController@admission_edit')->name('student.edit');
    Route::post('/edit/{id}', 'StudentinfoController@admission_update')->name('student.update');
    Route::post('/delete/{id}', 'StudentinfoController@admission_delete')->name('student.delete');
   // Route::get('/', 'StudentController@addmission_form')->name('student.addmission_form');
   // Route::get('/', 'StudentController@addmissionform')->name('student.index');
    //Route::get('/create', 'StudentController@addmissionform')->name('student.create');
    //Route::post('/create', 'StudentController@saveadmission')->name('student.save');
   // Route::get('/admission', 'StudentController@admissionsave')->name('student.admissionsave');
});




Route::group(['prefix'=>'ibit'], function(){

    Route::get('/', 'IbitController@index')->name('ibit.index');
    Route::get('/create', 'IbitController@create')->name('ibit.create');
    Route::post('/create', 'IbitController@save')->name('ibit.save');
    Route::get('/edit/{id}', 'IbitController@edit')->name('ibit.edit');
    Route::post('/edit/{id}', 'IbitController@update')->name('ibit.update');
    Route::post('/delete/{id}', 'IbitController@delete')->name('ibit.delete');

});

Route::group(['prefix'=>'department'], function(){

    Route::get('/', 'DepartmentController@index')->name('department.index');
    Route::get('/create', 'DepartmentController@create')->name('department.create');
    Route::post('/create', 'DepartmentController@save')->name('department.save');
    Route::get('/edit/{id}', 'DepartmentController@edit')->name('department.edit');
    Route::post('/edit/{id}', 'DepartmentController@update')->name('department.update');
    Route::post('/delete/{id}', 'DepartmentController@delete')->name('department.delete');

});


Route::group(['prefix'=>'website'], function(){


    Route::get('pages.admission-info', 'Website\PageController@admissioninfo')->name('website.addmission-info');
    Route::get('pages.aboutus', 'Website\PageController@aboutus')->name('website.aboutus');
    Route::get('pages.comon', 'Website\PageController@messageprincipal')->name('website.comon');
    Route::get('pages.gallery', 'Website\PageController@gallery')->name('website.gallery');
    Route::get('pages.contact', 'Website\PageController@contact')->name('website.contact');

});






//admin password reset





Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//Admin User Login


Route::get('/admin/login', 'Admin\AdminController@adminlogin')->name('admin.login');
Route::post('/admin/login/submit', 'Admin\AdminController@login')->name('admin.login.submit');
//Route::get('/admin/login', 'Admin\AloginController@showLoginForm')->name('admin.login');
//Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
//Route::post('/login/submit', 'Admin\LoginController@login')->name('admin.login.submit');
//Route::post('/logout/submit', 'Admin\LoginController@logout')->name('admin.logout');





/*Route::get('/admin/login', function () {
    // Only authenticated users may enter...
})->middleware('auth');*/