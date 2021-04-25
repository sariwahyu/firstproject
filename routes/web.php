<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// //Route that sends back a view
// Route::get('/', function () {
//     return view('welcome');
// });

// //Route to users - string
// Route::get('/users', function () {
//     return 'Welcome to The Users Page';
// });

// //Route to users - array(JSON)
// Route::get('/users', function () {
//     return['PHP', 'HTML', 'Laravel'];
// });

// //Route to users - JSON object
// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'Sari',
//         'course' => 'Laravel Beginner To Advanced'
//     ]);
// });

// //Route to users - function
// Route::get('/users', function () {
//     return redirect('/');
// });
// //firstproject.com == /
// //fisrtproject.com/users == /users

Route::get('/', function () {
    return view('home');
});

//Laravel 8 (New)
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/about', [ProductController::class, 'about']);

//Laravel 8 (Also New)
Route::get('/products', 'App\Http\Controllers\ProductController@index');

// /products = all products
// /products/productName
// /products/productId

//Pattern is integer
//Route::get('/products/{id}', [ProductController::class, 'show']) -> where ('id', '[0-9]+');

//Pattern is integer
Route::get('/products/{name}', [ProductController::class, 'show']) -> where ('name', '[a-zA-Z]+');
