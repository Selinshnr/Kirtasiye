<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'ad' => 'required|string|max:255',
            'email' => 'required|email',
            'mesaj' => 'required|string',
        ]);

        // Burada e-posta gönderme kodu olabilir (isteğe bağlı)

        return back()->with('success', 'Mesajınız başarıyla gönderildi.');
    }
}
