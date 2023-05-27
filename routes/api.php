<?php

use App\Http\Controllers\PostController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ValidationController;
use App\Http\Middleware\ValidationMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Task 1: Request Validation

Route::post('/validation', [ValidationController::class, 'RequestValidation'])
    ->middleware([ValidationMiddleware::class]);

// Task 2: Request Redirect

Route::get('/redirect1/{key}', [RedirectController::class, 'RedirectAction1'])
    ->middleware([RedirectMiddleware::class]);
Route::get('/redirect2', [RedirectController::class, 'RedirectAction2']);

// Task 3: Global Middleware

// Task 4: Route Middleware


Route::middleware(['auth1'])->group(function(){
    Route::get('/auth1/{key}', [AuthController::class, 'AuthAction1']);
    Route::get('/auth2/{key}', [AuthController::class, 'AuthAction2']);
    Route::get('/auth3/{key}', [AuthController::class, 'AuthAction3']);
    Route::get('/auth4/{key}', [AuthController::class, 'AuthAction4']);
});

// Task 5: Controller

Route::resource('products', ProductController::class);

// GET      /products              ->  index()
// GET      /products/create       ->  create()
// POST     /products              ->  store()
// GET      /products/{product}    ->  show($id)
// GET      /products/{product}/edit  ->  edit($id)
// PUT      /products/{product}    ->  update($id)
// PATCH    /products/{product}    ->  update($id)
// DELETE   /products/{product}    ->  destroy($id)

// Task 6: Single Action Controller
// Route::post('/contact', ContactController::class);

// Task 7: Resource Controller
Route::resource('posts', PostController::class);



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
