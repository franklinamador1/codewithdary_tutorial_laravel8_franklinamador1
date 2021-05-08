<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//Laravel 8 (New)
//Route::get('/products', [ProductsController::class, 'index']);
//Route::get('/products/about', [ProductsController::class, 'about']);

//Laravel 8 (New also)
//Route::get('/products','App\Http\Controllers\ProductsController@index');

//Before Laravel 8
//Route::get('/products', 'ProductsController@index');


/*
//Route to home - returns a view
Route::get('/', function () {
    return view('home');
});

//Route to users - returns a string
Route::get('/users', function(){
    return 'Welcome to the users page';
    //return env('CREATOR_NAME');
});

//Route to users - Array (JSON)
Route::get('/users', function(){
    return ['PHP','HTML','LARAVEL'];
});

//Route to users - Json Object
Route::get('/users', function(){
    return response()->json([
        'name' => 'Franklin',
        'course' => 'Laravel begginers to advanced'
    ]);
});

//Route to users - function
Route::get('/users', function(){
    return redirect('/');
});
*/

// Trabajando con parametros, video 10.
// products = all products
// Ejemplo: /products/productName or /products/ProductId
// Patter is integer - sirve para validar el tipo de dato esperado
//Route::get('/products/{id}', [ProductsController::class, 'showById'])->where('id', '[0-9]+');

//Show by name
// Patter is integer - sirve para validar el tipo de dato esperado
//Route::get('/products/{name}', [ProductsController::class, 'showByName'])->where('name', '[a-zA-Z]+');

// Show by name with 2 parameters
// Patter is integer - sirve para validar el tipo de dato esperado
/* Route::get('/products/{name}/{id}', [ProductsController::class, 'showByName'])->where([
    'name' => '[a-zA-Z]+',
    'id' => '[0-9]+'
]); */


//Named routes
//Route::get('/products', [ProductsController::class, 'index'])->name('products');

//Pages controller - video: Views in Laravel 8
Route::get('/',[PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

