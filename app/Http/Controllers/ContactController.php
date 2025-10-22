<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        try {
            Mail::raw("📩 رسالة جديدة من موقع تخيّل:\n\n" .
                      "👤 الاسم: {$validated['name']}\n" .
                      "📧 البريد: {$validated['email']}\n" .
                      "💬 الرسالة:\n{$validated['message']}", function($mail) use ($validated) {
                $mail->to('mohammed.du.0063151@gmail.com') 
                     ->subject('رسالة جديدة من نموذج تواصل تخيّل')
                     ->from($validated['email'], $validated['name']);
            });

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
