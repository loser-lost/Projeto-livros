<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\CrudController;
use App\Http\Controllers\ResurceController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//Route::get('/login', function () {
//   return view('login');
//});

//Route::get('/admin/inserir', [AdminController::class, 'InserirUser'])->name('admin.inserir.usuario');
Route::resource('livro', CrudController::class);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/login', [AdminController::class, 'Loginform'])->name('admin.login');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::post('/admin/login/do', [AdminController::class, 'autenticate'])->name('admin.login.do');



//route::get('/admin', [AdminController::class, 'dashboard']);