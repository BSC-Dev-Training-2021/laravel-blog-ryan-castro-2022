<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogPostController;

use App\Http\Controllers\CategoryTypesController;

use App\Http\Controllers\BlogPostCategoriesController;

use App\Http\Controllers\BlogPostCommentsController;

use App\Http\Controllers\UsersController;

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
//     return view('blog/login');
// });

route::resource('/categorydelete','CategoryTypesController');

Route::get('/create', [CategoryTypesController::class, 'shows']);

Route::post('/post', 'BlogPostController@store');


Route::get('/post/{page}', [BlogPostController::class, 'shows']);


Route::post('/article', 'BlogPostCommentsController@storecomment');

Route::get('/article/{page}', [BlogPostCategoriesController::class, 'show_categories']);


Route::get('/category', [CategoryTypesController::class, 'category']);


Route::post('/categorycreate', 'CategoryTypesController@storecategory');

Route::get('/', [UsersController::class, 'login']);

// Route::get('/signup', [UsersController::class, 'registration']);

// Route::delete('/categories', 'CategoryTypesController@destroy');


// Route::get('/posts/{post}',[PostController::class, 'get']);

// Route::get('auth/logout', 'Auth\AuthController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


