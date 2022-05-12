<?php

namespace App\Http\Controllers;

use App\Models\Forcitizens;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Contact;

class HomePageController extends Controller
{
    //
    public function home(){
        $news = \App\Models\News::get();
//        $title = \App\Models\Title::get();
        $adres = \App\Models\Adres::get();

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $contacts = \App\Models\Contact::get();

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $forpersons = \App\Models\Forpersons::get();

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $services = \App\Models\Service::get();

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $nmrcourts = \App\Models\Nmrcourt::where('status', 1)->get();

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $usefullinks = \App\Models\Usefullink::where('status', 1)->get();
        return view('pages.home', compact('news','contacts', 'forpersons', 'services', 'nmrcourts', 'usefullinks', 'adres', 'locale'));
    }

}
