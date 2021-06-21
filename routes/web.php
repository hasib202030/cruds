<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\CrudController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', [CrudController::class, 'showData']);


Route::get('/add_data', [CrudController::class, 'addData'] );

// post for method is data store
Route::post('/store_data', [CrudController::class, 'storeData'] );
// edit
Route::get('/edit_data/{id}', [CrudController::class, 'editData'] );

// Update
Route::post('/update_data/{id}', [CrudController::class, 'updateData'] );

// Delete data
Route::get('/delete_data/{id}', [CrudController::class, 'deleteData'] );