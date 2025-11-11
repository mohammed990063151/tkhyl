<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1) التحقق من صحة البيانات
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // 2) حفظ الرسالة في قاعدة البيانات
        ContactMessage::create($data);

        // 3) رجوع مع رسالة نجاح
        return back()->with('success', 'تم إرسال رسالتك بنجاح، سنقوم بالرد عليك قريبًا.');
    }
}
