<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
   use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{


public function send(Request $request)
{
    Mail::raw("
    الاسم: {$request->name}
    البريد: {$request->email}
    الموضوع: {$request->subject}
    الرسالة:
    {$request->message}
    ", function ($message) {
        $message->to('contact@tkhyl-ai.com')
                ->subject('رسالة جديدة من الموقع');
    });

    return back()->with('success', 'تم إرسال الرسالة بنجاح');
}
}
