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
Route::get('/kaip_istoti', function () {
    return redirect('https://bakalauras.lamabpo.lt/pagalba-d-u-k/prasymu-pildymas-ir-dokumentu-pateikimas/');
});
Route::get('/statistika', function () {
    return view('statistika');
});

Route::get('/istaigos', function () {
    return view('istaigos');
});
Route::get('/quiz/klausimas', function () {
    return view('/quiz/klausimas');
});
Route::get('/pradinis', function () {
    return view('/pradinis');
});
Route::get('/quiz/testas', function () {
    return view('/quiz/testas');
});
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

