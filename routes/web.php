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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('admin/books', [App\Http\Controllers\AdminController::class, 'books'])->name('admin.books')->middleware('is_admin');
Route::post('admin/books', [App\Http\Controllers\AdminController::class, 'submit_book'])->name('admin.book.submit')->middleware('is_admin');
Route::patch('admin/books/update', [App\Http\Controllers\AdminController::class, 'update_book'])->name('admin.book.update')->middleware('is_admin');
Route::get('admin/ajaxadmin/dataBuku/{id}', [App\Http\Controllers\AdminController::class, 'getDataBuku']);
Route::post('admin/books/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_book'])->name('admin.book.delete')->middleware('is_admin');
Route::get('admin/print_books', [App\Http\Controllers\AdminController::class, 'print_books'])->name('admin.print.books')->middleware('is_admin');
Route::get('admin/books/export', [App\Http\Controllers\AdminController::class, 'export'])->name('admin.book.export')->middleware('is_admin');
Route::Post('admin/books/import', [App\Http\Controllers\AdminController::class, 'import'])->name('admin.book.import')->middleware('is_admin');
Route::get('admin/anggota',[App\Http\Controllers\AdminController::class, 'anggota'])->name('admin.anggota')->middleware('is_admin');
Route::post('admin/anggota', [App\Http\Controllers\AdminController::class, 'submit_anggota'])->name('admin.anggota.submit')->middleware('is_admin');
Route::patch('admin/anggota/update', [App\Http\Controllers\AdminController::class, 'update_anggota'])->name('admin.anggota.update')->middleware('is_admin');
Route::get('admin/ajaxadmin/dataAnggota/{id}', [App\Http\Controllers\AdminController::class, 'getDataAnggota']);
Route::post('admin/anggota/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_anggota'])->name('admin.anggota.delete')->middleware('is_admin');
Route::get('admin/transaksi',[App\Http\Controllers\AdminController::class, 'transaksi'])->name('admin.transaksi')->middleware('is_admin');
Route::get('admin/laporan',[App\Http\Controllers\AdminController::class, 'laporan'])->name('admin.laporan')->middleware('is_admin');

Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
