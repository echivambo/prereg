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
Route::resource('/pre-reg', 'CandidatoController');
Route::resource('/dados-pessoais', 'DadosPessoaisController.create');

Route::get('/candidatura', function () {
    return view('loginCandidato');
})->name('loginCandidato');

Route::get('/', function () {
    //return redirect('loginCandidato');
    return view('admin.login');
});

Route::get('/admin', function (){
    return view('admin.layout');
})->name('painel');

Route::get('/admin/cursos', function (){
    return view('admin.curso');
})->name('cursos');

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function (){
    return view('admin.layout');
});


*/

/*
Route::get('/', 'AdminAuth\AuthController@showLoginForm');
Route::post('login', 'AdminAuth\AuthController@login');
Route::group(['middleware'=>['admin']], function (){
   Route::get('/admin','Admin\AdminController@dashboad');
   Route::get('/logout','AdminAuth\AdminController@logout');
});
*/