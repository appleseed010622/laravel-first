<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UserEpikasController;
use App\Http\Controllers\SearchEpikasController;
use App\Http\Controllers\EditEpikasController;
use App\Models\SignUser;
use App\Models\EpikaUser;


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
    return view('top_page');
});
Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::get('/list', [SearchController::class, 'index'])->name('users.search');

Route::get('/detail', function () {
    return view('detail');
});
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users',  [UsersController::class, 'index'])->name('users.index');

Route::get('/users/search', [SearchController::class, 'search'])->name('users.search');

Route::get('/users/{id}', function ($id) {
    $post = SignUser::findOrFail($id);
    return view('detail', ['user' => $post]);
  })->name('users.show');

Route::get('/edit/{id}', [EditController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [EditController::class, 'update'])->name('update');

Route::get('/new_success', function () {
    return view('new_success');
});






// ////////////////////////////epika///////////////////////////
Route::post('/epikas', [UserEpikasController::class, 'store'])->name('epikas.store');
Route::get('/epikas',  [UserEpikasController::class, 'index'])->name('epikas.index');

Route::get('/epikas/search', [SearchEpikasController::class, 'search'])->name('epikas.search');


Route::get('/epika_edit/{id}', [EditEpikasController::class, 'edit'])->name('epika_edit');

Route::get('/epikas/{id}', function ($id) {
    $post = EpikaUser::findOrFail($id);
    return view('/epika/detail', ['epika' => $post]);
  })->name('epikas.show');


  Route::post('/epika_update/{id}', [EditEpikasController::class, 'update'])->name('update');

Route::get('/epika/sign_up', function () {
    return view('epika.sign_up');
});
Route::get('/epika/list', [SearchEpikasController::class, 'index'])->name('epikas.search');

Route::get('/epika/detail', function () {
    return view('epika.detail');
});