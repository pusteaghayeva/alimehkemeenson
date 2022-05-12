<?php

namespace App\Http\Controllers;


use App\Models\Forpersons;
use App\Models\Nmrcourt;
use App\Models\Service;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller
{
    //
    public function home(){
        $news = \App\Models\News::get();
//        $title = \App\Models\Title::get();
        $adres = \App\Models\Adres::get();
        $contacts = \App\Models\Contact::get();
        $forpersons = Forpersons::get();
        $services = Service::get();
        $nmrcourts = Nmrcourt::where('status', 1)->get();

        $locale = Session::get('locale'); // ="en"

        switch ($locale){
            case "en":
                $titlesTranslation['faydalıLinklər'] = "Useful Links";
                break;
            case "ru":
                $titlesTranslation['faydalıLinklər'] = "Полезные ссылки";
                break;
            default :
                $titlesTranslation['faydalıLinklər'] = "Faydalı Linklər";
        }


        $usefullinks = \App\Models\Usefullink::where('status', 1)->get();
        return view('pages.home', compact('news','contacts', 'forpersons', 'services', 'nmrcourts', 'usefullinks', 'adres', 'locale','titlesTranslation'));
    }

}
