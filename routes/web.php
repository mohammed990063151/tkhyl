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

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// 🔹 الصفحة الرئيسية — Elite Plus
Route::get('/', function () {
    return view('frontend.elite-home');
})->name('frontend.home');

// 🔹 أقسام Elite Plus (روابط الناف بار في الموقع الأصلي)
Route::get('/portfolio', fn () => redirect('/#sectors'))->name('elite.portfolio');
Route::get('/sectors', fn () => redirect('/#sectors'))->name('elite.sectors');
Route::get('/platform', fn () => redirect('/#platform'))->name('elite.platform');
Route::get('/partnership', fn () => redirect('/#partnership'))->name('elite.partnership');
Route::get('/request-access', fn () => redirect('/#contact'))->name('elite.request-access');

// 🔹 نسخ الصفحات الرئيسية السابقة
Route::get('/home1', fn () => view('frontend.home1'))->name('frontend.home1');
Route::get('/home2', fn () => view('frontend.home2'))->name('frontend.home2');
Route::get('/home3', fn () => view('frontend.home3'))->name('frontend.home3');
Route::get('/home4', fn () => view('frontend.home4'))->name('frontend.home4');

Route::get('/test-page', function() {
    return "<h1 style='color: green; text-align: center; margin-top: 50px;'>
            ✅ الصفحة تعمل بدون قاعدة بيانات!
            </h1>";
});

Route::get('/test-simple', function() {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard.welcome');
})->name('dashboard.welcome');

Auth::routes(['register' => false]);

Route::get('/contact', function () {
    return view('frontend.Contact');
})->name('contact');

Route::get('/our-services', function () {
    return view('frontend.our_services');
})->name('frontend.our-services');

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('frontend.about-us');

Route::get('/view', function () {
    return view('frontend.allrooms');
})->name('frontend.rooms');

Route::get('/guests-reviews', function () {
    return view('frontend.guests-reviews');
})->name('guests.reviews');

Route::get('/book-now', function () {
    return view('frontend.book-now');
})->name('book.now');

Route::post('/contact-send', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::raw("اسم المرسل: {$data['name']}\nالبريد: {$data['email']}\n\nالرسالة:\n{$data['message']}", function ($msg) use ($data) {
        $msg->to('tkhylmarketing@gmail.com')
            ->subject('رسالة جديدة من نموذج التواصل بموقع تخيّل');
    });

    return response()->json(['success' => true]);
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/rooms', function () {
    return view('frontend.rooms.index');
})->name('rooms.show');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// SPA fallback — أي مسار غير معرّف يفتح Elite Plus (مثل الموقع الأصلي)
Route::get('/{any}', function () {
    return view('frontend.elite-home');
})->where('any', '^(?!api|sanctum|storage|assets|public|vendor|build|css|js|img|fonts).*$')
  ->name('frontend.spa-fallback');
