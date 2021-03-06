<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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
    return view('index');
})->name('home');

Route::post('/messages', function () {
    $data = request()->all();
    Mail::send("emails.message", $data, function($message) use ($data) {
        $message->from($data['email'], $data['name'])
        ->to('rafagf89@gmail.com', 'Rafael')
        ->subject($data['subject']);
    });

    return back()->with('flash', 'Tu mensaje ha sido recibido');
})->name('messages');
