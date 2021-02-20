<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadocontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\logincontroller;
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
    return view('welcome');
});

Route::resource('empleado','empleadocontroller')->names('empleados');
//Route::get('/empleado_index', [empleadocontroller::class, 'index']);

Route::post('empleado_register', [empleadocontroller::class, 'store'])->name('empleado_register');




Route::resource('usuarios','usercontroller')->names('usuario');

Route::post('usuario_register', [usercontroller::class, 'store'])->name('usuario_register');



//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Login



Route::post('login56', [logincontroller::class, 'login'])->name('login56');




Route::post('salir', [logincontroller::class, 'logout'])->name('salir');
//Route::post('login', 'logincontroller@store')->name('login');
//Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Logout Routes...
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
                