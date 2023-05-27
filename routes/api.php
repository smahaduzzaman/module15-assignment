<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ValidationController;
use App\Http\Middleware\ValidationMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Question 1
Route::post('/validation', [ValidationController::class, 'RequestValidation'])
    ->middleware([ValidationMiddleware::class]);

// Question 2
Route::get('/redirect1/{key}', [RedirectController::class, 'RedirectAction1'])
    ->middleware([RedirectMiddleware::class]);
Route::get('/redirect2', [RedirectController::class, 'RedirectAction2']);

// Question 3

// Question 4
Route::middleware(['auth1'])->group(function(){
    Route::get('/auth1/{key}', [AuthController::class, 'AuthAction1']);
    Route::get('/auth2/{key}', [AuthController::class, 'AuthAction2']);
    Route::get('/auth3/{key}', [AuthController::class, 'AuthAction3']);
    Route::get('/auth4/{key}', [AuthController::class, 'AuthAction4']);
});

// Question 5
Route::resource('products', ProductController::class);

// GET      /products              ->  index()
// GET      /products/create       ->  create()
// POST     /products              ->  store()
// GET      /products/{product}    ->  show($id)
// GET      /products/{product}/edit  ->  edit($id)
// PUT      /products/{product}    ->  update($id)
// PATCH    /products/{product}    ->  update($id)
// DELETE   /products/{product}    ->  destroy($id)



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
