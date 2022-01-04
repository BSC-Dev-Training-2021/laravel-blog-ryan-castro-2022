<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogPostController;

use App\Http\Controllers\CategoryTypesController;

use App\Http\Controllers\BlogPostCategoriesController;

use App\Http\Controllers\BlogPostCommentsController;

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



Route::get('/create', [CategoryTypesController::class, 'shows']);

Route::post('/post', 'BlogPostController@store');


Route::get('/post/{page}', [BlogPostController::class, 'shows']);


Route::post('/article', 'BlogPostCommentsController@storecomment');

Route::get('/article/{page}', [BlogPostCategoriesController::class, 'show_categories']);







// Route::get('/posts/{post}',[PostController::class, 'get']);
