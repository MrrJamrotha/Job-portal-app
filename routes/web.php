<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/find-job', function () {
    return view('find_job');
})->name('find-job');

Route::get('/employers', function () {
    return view('employers');
})->name('employers');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/candidate', function () {
    return view('condidate');
})->name('candidate');

Route::get('/customer-support', function () {
    return view('customer_support');
})->name('customer-support');
