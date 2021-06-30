<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

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

// Note: Order of ROutes is svery important.
// Like for example, if te line number 25 and 27 are interchanged, the create page will neevr be accessed as, in the line 25 its  // a slug(variable that can take any value) . Its alwasy advised to place the slugged routes at the bottom to avoid ambiguity.


Auth::routes();

Route::post('follow/{user}', [FollowsController::class, 'store'])->name('follows.store');

Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::get('/p/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/p', [PostsController::class, 'store'])->name('posts.store');
Route::get('/p/{post}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/delete/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');
Route::get('/edit/{id}', [PostsController::class, 'update'])->name('posts.update');
Route::get('/cancel', [PostsController::class, 'cancel']);

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/home', [HomeController::class, 'index'])->name('home');


// NOTE→ The route to chat is given in the chatify.php file