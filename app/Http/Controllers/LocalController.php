<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalController extends Controller
{
    public function switchLanguage($lang)
    {
        // Periksa apakah bahasa yang dipilih tersedia
        if (in_array($lang, ['en', 'id'])) {
            // Simpan bahasa ke dalam sesi
            Session::put('locale', $lang);

            // Atur bahasa aplikasi
            App::setLocale($lang);
        }

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back();
    }
}
