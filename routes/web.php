<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ValidationController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\RedirectMiddleware;
use App\Http\Middleware\ValidationMiddleware;
use Illuminate\Support\Facades\Route;

// Question 1
Route::get('/validation', [ValidationController::class, 'RequestValidation'])
    ->middleware([ValidationMiddleware::class]);

// Question 2
Route::get('/home/{key}', [RedirectController::class, 'RedirectAction1'])
    ->middleware([RedirectMiddleware::class]);
Route::get('/dashboard', [RedirectController::class, 'RedirectAction2']);

// Task 3: Global Middleware
Route::middleware(['log.request'])->group(function () {
    Route::get('/global-middleware', function () {
        return 'Global Middleware';
    });

    Route::get('/global-middleware2', function () {
        return 'Global Middleware 2';
    });
});



// Question 4
Route::middleware(['auth1'])->group(function(){
    Route::get('/auth1/{key}', [AuthController::class, 'AuthAction1']);
    Route::get('/auth2/{key}', [AuthController::class, 'AuthAction2']);
    Route::get('/auth3/{key}', [AuthController::class, 'AuthAction3']);
    Route::get('/auth4/{key}', [AuthController::class, 'AuthAction4']);
});

// Question 5
Route::resource('products', ProductController::class);
/*
GET      /products              ->  index()
GET      /products/create       ->  create()
POST     /products              ->  store()
GET      /products/{product}    ->  show($id)
GET      /products/{product}/edit  ->  edit($id)
PUT      /products/{product}    ->  update($id)
PATCH    /products/{product}    ->  update($id)
DELETE   /products/{product}    ->  destroy($id)0
 */


// Question 6
// Route::post('/contact', ContactController::class);


// Task 7: Resource Controller
Route::resource('posts', PostController::class);


// Task 8: Blade Template Engine

Route::get('/', function () {
    return view('welcome');
});
