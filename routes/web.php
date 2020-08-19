<?php

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

Route::get('/', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/messages', function () {
    $data = request()->all();
    Mail::send("emails.message", $data, function($message) use ($data) {
        $message->from($data['email'], $data['name'])
        ->to('rafatest89@gmail.com', 'RafaTest')
        ->subject($data['subject']);
    });

    return back()->with('flash', 'Tu mensaje ha sido recibido');
})->name('messages');
