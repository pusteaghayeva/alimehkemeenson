<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomePageController extends Controller
{
    //
    public function home(){
        $news = \App\Models\News::get();
        return view('pages.home', compact('news'));
    }

    public function contact(){
        $contacts = \App\Models\Contact::get();
        return view('pages.home', compact($contacts, 'contacts'));
    }
}
