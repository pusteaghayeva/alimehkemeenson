<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function home(){
        $news = \App\Models\News::get();
        return view('pages.home', compact('news'));
    }
}
