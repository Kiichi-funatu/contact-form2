<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthorController;


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
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/store', [ContactController::class, 'store']);
Route::get('/thanks', function() {
    return view('thanks');});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/admin', [ContactController::class, 'admin']);

Route::get('/admin/export', [ContactController::class, 'export'])->name('admin.export');


Route::delete('/delete', [ContactController::class, 'destroy'])->name('delete');





















Route::get('/h', [AuthorController::class, 'index']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete/{id}', [AuthorController::class, 'remove']);
