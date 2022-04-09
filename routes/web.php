<?php

use App\Http\Controllers\FormulirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/user/formulir', [FormulirController::class, "indexForUser"])->name("tampilformuliruser");
Route::get('/user/formulir/tambah', [FormulirController::class, "createForUser"])->name('tambahformuliruser');
Route::post('/user/formulir/tambah', [FormulirController::class, "storeForUser"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/formulir', [FormulirController::class, "index"])->name("tampilformuliradmin");
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/formulir/tambah', [FormulirController::class, "create"])->name("tambahformuliradmin");
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/formulir/tambah', [FormulirController::class, "store"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/formulir/edit/{id}', [FormulirController::class, "edit"])->name("editformuliradmin");
Route::middleware(['auth:sanctum', 'verified'])->put('/admin/formulir/edit/{id}', [FormulirController::class, "update"]);
Route::middleware(['auth:sanctum', 'verified'])->delete('/admin/formulir/delete/{id}', [FormulirController::class, "destroy"])->name("hapusformuliradmin");

Route::get('/dashboard', '\App\Http\Controllers\HomeController@index');

Route::get('/', [PageController::class, 'index']);
Route::get('/upload-tugas', [PageController::class, 'uploadpage']);
Route::post('/uploadproduct', [PageController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/edit/{id}', [PageController::class, "edit"])->name("edit");
Route::middleware(['auth:sanctum', 'verified'])->put('/edit/{id}', [PageController::class, "update"]);
Route::get('/show', [PageController::class, 'show']);
Route::get('/download/{file}', [PageController::class, 'download']);
Route::get('/view/{id}', [PageController::class, 'view']);




Route::get('/user/show', [PageController::class, 'show']);



Route::get('/admin/files', '\App\Http\Controllers\FileController@index')->name('taskadmin');
Route::get('admin/files/create', '\App\Http\Controllers\FileController@create')->name('create');
Route::post('files/store', '\App\Http\Controllers\FileController@store')->name('store');
Route::get('files/edit/{id}', '\App\Http\Controllers\FileController@edit')->name('edit');
Route::get('/view/{id}', '\App\Http\Controllers\FileController@view')->name('tampil');
Route::post('files/update/{id}', '\App\Http\Controllers\FileController@update')->name('update');
Route::delete('files/delete/{id}', '\App\Http\Controllers\FileController@delete')->name('delete');
Route::get('files/download/{file}', '\App\Http\Controllers\FileController@download')->name('download');


Route::middleware(['auth:sanctum', 'verified'])->get('/kelas', function () {
    return view('admin.class');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/kelas', function () {
    return view('user.class');
})->name('kelasuser');



Route::get('user/files', '\App\Http\Controllers\FileController@indexForUser')->name('taskuser');
