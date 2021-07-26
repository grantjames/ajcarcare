<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('comingsoon');
// });

Route::get('', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/services/new-car-detail', function () {
//     return view('services.newcar');
// });

Route::get('portfolio', function () {
    return view('portfolio');
});

// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $message = $request->input('message');
    $spam_check = $request->input('spam_check');

    if ($message == '' || $spam_check != "5") {
        return redirect('/contact')->with('message_sent', false);
    }

    Mail::to('grantjames@live.co.uk')->send(new \App\Mail\Enquiry($name, $email, $phone, $message));
    
    return redirect('/contact')->with('message_sent', true);
});