<?php

use App\Http\Controllers\ApparatusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SupremecourtController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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
//Route::get('/title', [PageController::class, 'title'])->name('title');

Route::get('/apparatus', [PageController::class, 'apparatus'])->name('apparatus');
Route::get('/supremecourt',[PageController::class, 'supremecourt'])->name('supremecourt');
Route::get('/singlesupremecourt', [PageController::class, 'singlesupremecourt'])->name('singlesupremecourt');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/singlenews', [PageController::class, 'singleNews'])->name('singlenews');
Route::get('/exampledocuments',[PageController::class, 'exampledocument'])->name('exampledocuments');

Route::get('/adres', [PageController::class, 'adres'])->name('adres');
Route::get('/slidertoday', [PageController::class, 'slidertoday'])->name('slidertoday');

Route::get('/appeal',[PageController::class, 'appeal'])->name('appeal');
Route::get('/singleappeal', [PageController::class, 'singleappeal'])->name('singleappeal');

Route::get('/report', [PageController::class, 'report'])->name('report');
Route::get('/singlereport', [PageController::class, 'singlereport'])->name('singlereport');

Route::get('/applyonline',[PageController::class, 'applyonline'])->name('applyonline');
Route::get('/mail',[PageController::class, 'mail'])->name('mail');

Route::get('/legalact', [PageController::class, 'legalact'])->name('legalact');
Route::get('/constitution', [PageController::class, 'constitution'])->name('constitution');

//Nmr huquqi aktlar
Route::get('/decisionpresidia', [PageController::class, 'decisionpresidia'])->name('decisionpresidia');
Route::get('/singledecisionpresidia', [PageController::class, 'singledecisionpresidia'])->name('singledecisionpresidia');

Route::get('/gallery', [PageController::class, 'galleryClass'])->name('gallery');
Route::get('/video', [PageController::class, 'video'])->name('video');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/educationmaterial', [PageController::class, 'educationmaterial'])->name('educationmaterial');
Route::get('/singleeducation', [PageController::class, 'singleeducation'])->name('singleeducation');

Route::get('/internationaldocument', [PageController::class, 'internationaldocument'])->name('internationaldocument');
Route::get('/measures', [PageController::class, 'measures'])->name('measures');
Route::get('/singlemeasures', [PageController::class, 'singlemeasures'])->name('singlemeasures');

Route::get('/speech', [PageController::class, 'speech'])->name('speech');
Route::get('/singlespeech', [PageController::class, 'singlespeech'])->name('singlespeech');

Route::get('/article', [PageController::class, 'article'])->name('article');
Route::get('/singlearticle', [PageController::class, 'singlearticle'])->name('singlearticle');

Route::get('/electronlibrary', [PageController::class, 'electronlibrary'])->name('electronlibrary');
Route::get('/nmrelectronlibraries', [PageController::class, 'nmrelectronlibrary'])->name('nmrelectronlibrary');

Route::get('/publications', [PageController::class, 'publication'])->name('publications');


// bütün static səhifələr admin paneldən page hissəsindən yaradılmalıdır
Route::get('/{slug}', [PageController::class, 'pageView']);


//Language
Route::get('locale/{locale}', [LanguageController::class, 'index'])->name('locale');


