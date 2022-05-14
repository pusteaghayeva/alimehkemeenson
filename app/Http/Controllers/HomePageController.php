<?php

namespace App\Http\Controllers;


use App\Models\Footer;
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
        $adres = \App\Models\Adres::get();
        $contacts = \App\Models\Contact::get();
        $forpersons = Forpersons::get();
        $services = Service::get();
//        $footers = Footer::get();
        $nmrcourts = Nmrcourt::where('status', 1)->get();

        $locale = Session::get('locale'); // ="en"

        switch ($locale){
            case "en":
                $titlesTranslation['faydalıLinklər'] = "Useful Links";
                $titlesTranslation['Xidmətlər'] = "Servİces";
                $titlesTranslation['NaxçıvanBuGün'] = "NAKHCHIVAN TODAY";
                $titlesTranslation['NaxçıvanMrMəhkəmələri'] = "Courts of the Nakhchivan Autonomous Republic";
                $titlesTranslation['AliMəhkəmə90'] = "Supreme Court-90";
                $titlesTranslation['vətəndaşlarÜçün'] = "For citizens";
                $titlesTranslation['NaxçıvanMuxtarRespublikasıAliMəhkəməsi'] = "Supreme Court of the Nakhchivan Autonomous Republic";


                break;
            case "ru":
                $titlesTranslation['faydalıLinklər'] = "Полезные ссылки";
                $titlesTranslation['Xidmətlər'] = "Услуги";
                $titlesTranslation['NaxçıvanBuGün'] = "НАХЧИВАН СЕГОДНЯ";
                $titlesTranslation['NaxçıvanMrMəhkəmələri'] = "Суды Нахчыванской Автономной Республики";
                $titlesTranslation['AliMəhkəmə90'] = "Верховный суд-90";
                $titlesTranslation['vətəndaşlarÜçün'] = "Для граждан";
                $titlesTranslation['NaxçıvanMuxtarRespublikasıAliMəhkəməsi'] = "Верховный Суд Нахчыванской Автономной Республики";
                break;
            default :
                $titlesTranslation['faydalıLinklər'] = "Faydalı Lİnklər";
                $titlesTranslation['Xidmətlər'] = "Xİdmətlər";
                $titlesTranslation['NaxçıvanBuGün'] = "NAXÇIVAN BU GÜN";
                $titlesTranslation['NaxçıvanMrMəhkəmələri'] = "Naxçıvan Muxtar Respublikası Məhkəmələri";
                $titlesTranslation['AliMəhkəmə90'] = "Ali Məhkəmə-90";
                $titlesTranslation['vətəndaşlarÜçün'] = "Vətəndaşlar Üçün";
                $titlesTranslation['NaxçıvanMuxtarRespublikasıAliMəhkəməsi'] = "Naxçıvan Muxtar Respublikası Ali Məhkəməsi";


        }


        $usefullinks = \App\Models\Usefullink::where('status', 1)->get();
        return view('pages.home', compact('news','contacts', 'forpersons', 'services', 'nmrcourts', 'usefullinks', 'adres', 'locale','titlesTranslation'));
    }

}
