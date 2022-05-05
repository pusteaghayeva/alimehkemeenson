<?php

use App\Http\Controllers\ApparatusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SupremecourtController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;


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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', [HomePageController::class, 'home'])->name('home');

Route::get('/home',[HomePageController::class, 'home'])->name('home');
//Route::get('/about' ,[PageController::class, 'about'])->name('about');
//Route::get('/college', [PageController::class, 'college'])->name('college');
//Route::get('/structure', [PageController::class, 'structure'])->name('structure');
Route::get('/apparatus', [PageController::class, 'apparatus'])->name('apparatus');
Route::get('/supremecourt',[PageController::class, 'supremecourt'])->name('supremecourt');
//Route::get('/supreme-court{slug}',[PageController::class, 'singleCourt'])->name('court');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/singlenews', [PageController::class, 'singleNews'])->name('singlenews');

Route::get('/report', [PageController::class, 'report'])->name('report');
Route::get('/singlereport', [PageController::class, 'singlereport'])->name('singlereport');
//Route::get('/azlegalact', [PageController::class, 'azlegalact'])->name('azlegalact');
Route::get('/legalact', [PageController::class, 'legalact'])->name('legalact');
//Nmr huquqi aktlar
Route::get('/decisionpresidia', [PageController::class, 'decisionpresidia'])->name('decisionpresidia');
Route::get('/gallery', [PageController::class, 'galleryClass'])->name('gallery');
Route::get('/video', [PageController::class, 'video'])->name('video');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/educationmaterial', [PageController::class, 'educationmaterial'])->name('educationmaterial');
//Internationaldocuments-Beynelxalq huquqi senedler
Route::get('/internationaldocument', [PageController::class, 'internationaldocument'])->name('internationaldocument');
Route::get('/measures', [PageController::class, 'measures'])->name('measures');
Route::get('/singlemeasures', [PageController::class, 'singlemeasures'])->name('singlemeasures');

//Route::get('/contact',[ContactController::class, 'contact'])->name('contact');

Route::get('/speech', [PageController::class, 'speech'])->name('speech');

Route::get('/article', [PageController::class, 'article'])->name('article');
// bütün static səhifələr admin paneldən page hissəsindən yaradılmalıdır
Route::get('/{slug}', [PageController::class, 'pageView']);




//Route::get('/azlegalacts',[PageController::class, 'azlegalact'])->name('azlegalacts');

//Route::get('/decisions',[PageController::class, 'decision'])->name('decisions');

//Route::get('/rhdecision',[PageController::class, 'rhdecision'])->name('rhdecision');



//Route::get('/structure', function () {
//    return view('pages.structure');
//});




//Route::get('mySingle', function () {
//    return view('pages.singleCourt');
//});
//
//Route::get('/azlegalacts', function () {
//    return view('pages.azlegalacts');
//});
//
//Route::get('/decision', function () {
//    return view('pages.decision');
//});
//Route::get('/news', function () {
//    return view('pages.news');
//});


//Route::get('/speech', function () {
//    return view('pages.speech');
//});
//
////Route::get('/gallery', function () {
////    return view('pages.gallery');
////});
//
//Route::get('/videogallery', function () {
//    return view('pages.videogallery');
//});
//
//Route::get('/question', function () {
//    return view('pages.question');
//});
//
//Route::get('/measures', function () {
//    return view('pages.measures');
//});
//
//Route::get('/contact', function () {
//    return view('pages.contact');
//});
//
//Route::get('/example_documents', function () {
//    return view('pages.example_documents');
//});
//
//Route::get('/publications', function () {
//    return view('pages.publications');
//});
//
//Route::get('/electron_library', function () {
//    return view('pages.electron_library');
//});
//
//Route::get('/nmrelectronlibrary', function () {
//    return view('pages.nmrelectronlibrary');
//});


