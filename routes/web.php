<?php
use App\Http\Controller\Homecontroller;
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
    return view('home0090');
});
Route::get('/artikel0083', function () {
    return view('artikel0090');
});
Route::get('/contactus0083', function () {
    return view('contactus0090');
});
Route::get('/home', 'App\Http\Controller\Homecontroller@index' ) ;
