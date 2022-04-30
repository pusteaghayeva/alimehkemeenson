<?php

use App\Http\Controllers\ApparatusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourtsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomePageController::class, 'home'])->name('home');


Route::get('/home',[HomePageController::class, 'home'])->name('home');


Route::get('/about' ,[PageController::class, 'about'])->name('about');

Route::get('/college', [PageController::class, 'college'])->name('college');
Route::get('/structure', [PageController::class, 'structure'])->name('structure');

Route::get('/apparatus', [PageController::class, 'apparatus'])->name('apparatus');

Route::get('/courts',[CourtsController::class, 'courts'])->name('courts');


Route::get('/contact',[ContactController::class, 'contact'])->name('contact');

//Route::get('/structure', function () {
//    return view('pages.structure');
//});




Route::get('/court90', function () {
    return view('pages.court90');
});

Route::get('/azlegalacts', function () {
    return view('pages.azlegalacts');
});

Route::get('/decision', function () {
    return view('pages.decision');
});
Route::get('/news', function () {
    return view('pages.news');
});


Route::get('/speech', function () {
    return view('pages.speech');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/videogallery', function () {
    return view('pages.videogallery');
});

Route::get('/question', function () {
    return view('pages.question');
});

Route::get('/measures', function () {
    return view('pages.measures');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/example_documents', function () {
    return view('pages.example_documents');
});

Route::get('/publications', function () {
    return view('pages.publications');
});

Route::get('/electron_library', function () {
    return view('pages.electron_library');
});

Route::get('/nmrelectronlibrary', function () {
    return view('pages.nmrelectronlibrary');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
