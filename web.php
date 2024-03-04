<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/home', [HomeController::class, "index"]);
Route::get('/', [HomeController::class, "index"]);
Route::get('/redirects', [HomeController::class, "redirects"]);


// user
Route::get('/user', [AdminController::class, "index"])->name('admin.page.user.index');
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);


// Menu 
Route::get('/menu', [MenuController::class, "index"])->name('admin.page.menu.index');


// reservation
Route::get('/reservation', [ReservationController::class, "index"])->name('admin.page.reservation.index');


// Chef
// Route::get('/chef', [ChefController::class, "index"])->name('admin.page.chef.index');
// Route::get('/chef/create', [ChefController::class, "create"])->name('admin.page.chef.create');
// Route::post('/chef', [ChefController::class, "store"]);

route::resource('chef',ChefController::class);