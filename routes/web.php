<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VideoController;


/*
|--------------------------------------------------------------------------
| Home and Authentication Routes
|--------------------------------------------------------------------------
*/

// Home page
Route::get('/', function () {
    return view('index');
})->name('home');

// Login page
Route::get('/login', function () {
    return view('login');
})->name('login.view');

// Authentication
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Protected card page
Route::get('/card', function () {
    return view('card');
})->middleware('auth')->name('card');

/*
|--------------------------------------------------------------------------
| Short Study (YouTube Shorts & Instagram Reels)
|--------------------------------------------------------------------------
*/
Route::get('/short-study', [VideoController::class, 'shortStudy'])->name('shorts_reels');

Route::get('/js_short-study', [VideoController::class, 'jsShortStudy'])->name('js_shorts_reels');

/*
|--------------------------------------------------------------------------
| C++ Content
|--------------------------------------------------------------------------
*/

Route::get('upload', function () {
    return view('upload'); // resources/views/upload.blade.php
})->name('upload');

// Handle form submission
Route::post('upload', [VideoController::class, 'upload'])
    ->name('videos.upload') // <-- THIS is the route your form should use
    ->middleware('auth');


// Handle the video upload (POST request)
// Route::post('upload', [VideoController::class, 'upload'])
//     ->name('videos.upload'); 

// Handle the video upload POST



Route::prefix('cpp_content')->name('cpp_content.')->group(function () {

    // Basics
    Route::view('/intro', 'cpp_content.intro')->name('intro');
   Route::view('/datatypevariable', 'cpp_content.datatypevariable')->name('datatypevariable');
    Route::view('/oper-cond', 'cpp_content.oper-cond')->name('oper-cond');
    Route::view('/loops', 'cpp_content.loops')->name('loops');
    Route::view('/array', 'cpp_content.array')->name('array');
    Route::view('/function', 'cpp_content.function')->name('function');

    // Intermediate
    Route::view('/pointer-refer', 'cpp_content.pointer-refer')->name('pointer-refer');
    Route::view('/static-dynamic', 'cpp_content.static-dynamic')->name('static-dynamic');

    // OOP
    Route::view('/class-obj', 'cpp_content.class-obj')->name('class-obj');

    Route::view('/encap-abstract', 'cpp_content.encap-abstract')->name('encap-abstract');
    Route::view('/inheritance', 'cpp_content.inheritance')->name('inheritance');
    Route::view('/poly', 'cpp_content.poly')->name('poly');
    Route::view('/friend', 'cpp_content.friend')->name('friend');
   
});

// File Handling & Error



/*
|--------------------------------------------------------------------------
| JavaScript Content
|--------------------------------------------------------------------------
*/
Route::prefix('js_content')->group(function () {
    Route::view('/introduction', 'js_content.introduction')->name('js_content.introduction');
    Route::view('/variable', 'js_content.variable')->name('js_content.variable');
    Route::view('/oper-condition', 'js_content.oper-condition')->name('js_content.oper-condition');
    Route::view('/loop-string', 'js_content.loop-string')->name('js_content.loop-string');
    Route::view('/array', 'js_content.array')->name('js_content.array');
    Route::view('/function', 'js_content.function')->name('js_content.function');
    Route::view('/dom', 'js_content.dom')->name('js_content.dom');
    Route::view('/event', 'js_content.event')->name('js_content.event');
    Route::view('/class', 'js_content.class')->name('js_content.class');
    Route::view('/callback', 'js_content.callback')->name('js_content.callback');
    Route::view('/last', 'js_content.last')->name('js_content.last');
});

/*
|--------------------------------------------------------------------------
| HTML Content
|--------------------------------------------------------------------------
*/
Route::prefix('htm_content')->group(function () {
    Route::view('/introduction', 'htm_content.introduction')->name('htm_content.introduction');
    Route::view('/basictags', 'htm_content.basictags')->name('htm_content.basictags');
    Route::view('/semantic', 'htm_content.semantic')->name('htm_content.semantic');
    Route::view('/dls', 'htm_content.dls')->name('htm_content.dls');
    Route::view('/table-form', 'htm_content.table-form')->name('htm_content.table-form');
});

/*
|--------------------------------------------------------------------------
| CSS Content
|--------------------------------------------------------------------------
*/
Route::prefix('css_content')->group(function () {
    Route::view('/intro', 'css_content.intro')->name('css_content.intro');
    Route::view('/selectors', 'css_content.selectors')->name('css_content.selectors');
    Route::view('/boxmodel', 'css_content.boxmodel')->name('css_content.boxmodel');
    Route::view('/col-back-typo', 'css_content.col-back-typo')->name('css_content.col-back-typo');
    Route::view('/layout', 'css_content.layout')->name('css_content.layout');
    Route::view('/spacing', 'css_content.spacing')->name('css_content.spacing');
    Route::view('/pseudo', 'css_content.pseudo')->name('css_content.pseudo');
    Route::view('/specificity', 'css_content.specificity')->name('css_content.specificity');
});
