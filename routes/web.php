<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateTenant;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\SubdomainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('choose' , function(){
    return view('choose');
})->name('choose.web');

Route::get('create' , function(){
    return view('create.create1');
})->name('create.web');
// Route::get('/create-website/{template}', [WebsiteController::class, 'create'])->name('create.web');
// Route::post('/create-tenant', [WebsiteController::class, 'store'])->name('tenant.store');


Route::post('subdomain',[SubdomainController::class,'store'])->name('subdomain.store');