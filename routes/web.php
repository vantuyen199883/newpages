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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard','backend\AdminController@index')->name('admin.index');
Route::get('/login','login\LoginController@login')->name('admin.login');
Route::get('/register','login\LoginController@register')->name('admin.register');
Route::post('/getlogin','login\LoginController@getlogin')->name('admin.getlogin');
Route::post('/getregister','login\LoginController@getregister')->name('admin.getregister');
// Route::get('/model', function () {
//     $data = App\Models\User::all()->toArray();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });
// Route::get('/model_id', function () {
//     $data = App\Models\User::find(2)->toArray();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });
// Route::get('/model_where', function () {
//     $data = App\Models\User::where('name','Đào Văn Tuyền')->get()->toArray();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });
// Route::get('/model-take', function () {
//     $data = App\Models\User::where('password','123456')->take(1)->get()->toArray();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });
// Route::get('/model_count', function () {
//     $data = App\Models\User::All()->count();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });