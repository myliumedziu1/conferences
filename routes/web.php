<?php

use Illuminate\Support\Facades\Route;
use App\Models\conferences;
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
    return view('welcome');
});

Route::get('/submit', function () {
    return view('form');
});

Route::get('/testas', function () {
    return view('testas');
});

Route::post('/submit',function (){
   $article = new Conferences();
   $article->name1 = request('name1');
    $article->surname = request('surname');
   $article->email = request('email');
   $article->phone = request('phone');
   $article->save();
});


Route::get('/panele', function () {
    return view('adminpanel');
})->middleware(['auth'])->name('adminpanel');

Route::get('/create', function () {
    return view('create');
})->middleware(['auth'])->name('create');

Route::get('/edit', function () {
    return view('edit');
})->middleware(['auth'])->name('edit');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
