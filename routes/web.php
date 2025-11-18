<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
Route::get('/custom-login', function() {
    return view('auth.custom-login');
})->name('custom-login');



Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');

// 🔹 الصفحة الرئيسية للموقع (الفرونت إند)
Route::get('/', function () {
    return view('frontend.home1'); // تشير إلى resources/views/frontend/home.blade.php
})->name('frontend.home');

// 🔹 مثال لمسار لوحة التحكم (backend)
Route::get('/dashboard', function () {
    return view('dashboard.welcome');
})->name('dashboard.welcome');

Auth::routes(['register' => false]);

Route::get('/contact', function () {
    return view('frontend.Contact');
})->name('contact');

// صفحة "خدمتنا"
Route::get('/our-services', function () {
    return view('frontend.our_services');
})->name('frontend.our-services');

// صفحة من نحن
Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('frontend.about-us');

// صفحة الغرف
Route::get('/view', function () {
    return view('frontend.allrooms');
})->name('frontend.rooms');
Route::get('/guests-reviews', function () {
    return view('frontend.guests-reviews');
})->name('guests.reviews');
Route::get('/book-now', function () {
    return view('frontend.book-now');
})->name('book.now');
// صفحة المدونة - قائمة المقالات


Route::post('/contact-send', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::raw("اسم المرسل: {$data['name']}\nالبريد: {$data['email']}\n\nالرسالة:\n{$data['message']}", function ($msg) use ($data) {
        $msg->to('mohammed.du.0063151@gmail.com')
            ->subject('رسالة جديدة من نموذج التواصل بموقع تخيّل');
    });

    return response()->json(['success' => true]);
});



Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// صفحة المقال المفرد (اختياري)
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


// Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms', function () {
    return view('frontend.rooms.index');
})->name('rooms.show');





// Route::get('/home', 'HomeController@index')->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
