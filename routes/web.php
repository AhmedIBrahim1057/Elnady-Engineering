<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});


Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/who-we-are', function () {
    return view('WhoWeAre');
})->name('who-we-are');

Route::get('/history', function () {
    return view('History');
})->name('history');

Route::get('/comsol', function () {
    return view('COMSOL');
})->name('COMSOL');

Route::get('/sound-plan', function () {
    return view('SoundPlan');
})->name('SoundPlan');

Route::get('/acoustics', function () {
    return view('Acoustics');
})->name('Acoustics');

Route::get('/octopi', function () {
    return view('Octopi');
})->name('Octopi');

Route::get('/sidlab', function () {
    return view('SidLab');
})->name('SidLab');

Route::get('/sidlab', function () {
    return view('SidLab');
})->name('SidLab');

Route::get('/beatlab', function () {
    return view('BEATLAB');
})->name('BEATLAB');

Route::get('/contact', function () {
    return view('Contact');
})->name('Contact');