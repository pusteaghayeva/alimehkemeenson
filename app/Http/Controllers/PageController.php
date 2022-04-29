<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page(){
        $abouts = \App\Models\About::get();
        $colleges = \App\models\College::get();

        return view('pages.about', compact('abouts', 'colleges'));
    }
}
