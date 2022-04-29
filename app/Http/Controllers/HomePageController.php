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
        $contacts = \App\Models\Contact::get();
        $forpersons = \App\Models\Forpersons::get();
        $services = \App\Models\Service::get();
        $nmrcourts = \App\Models\Nmrcourt::where('status', 1)->get();
        $usefullinks = \App\Models\Usefullink::where('status', 1)->get();
        return view('pages.home', compact('news','contacts', 'forpersons', 'services', 'nmrcourts', 'usefullinks'));
    }

}
