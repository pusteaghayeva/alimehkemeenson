<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index($locale)
    {
        $langs = ['az', 'en', 'ru'];

        if(in_array($locale, $langs))
        {
            Session::put('locale', $locale);
        }
        else
        {
            Session::put('locale', 'az');
        }

        return redirect()->back();
    }
}
