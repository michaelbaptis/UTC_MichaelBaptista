<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Models\User;

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
    return view('home');
});

// Route::get('/{id}',[BookController::class,'index']);
// Route::get('/{id}/category/{idCategory}', [CategoryController::class, 'show']);
// Route::get('/{id}/contact', function($id){
//     $user = User::find($id);
//     return view("contact" ,compact("user"));
// });
// Route::get('/{id}/detail/{idBook}', [BookController::class, 'show']);
// Route::post('/buyBooks',[TransactionController::class, 'store']);
// Route::get("/{id}/transaction", [TransactionController::class, 'index']);
// Route::get("/", [DetailController::class, 'index']);

