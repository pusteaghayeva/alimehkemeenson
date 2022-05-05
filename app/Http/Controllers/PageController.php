<?php

namespace App\Http\Controllers;

use App\Models\Azlegalact;
use App\Models\Court90;
use App\Models\Courts;
use App\Models\Decision;
use App\Models\Decisionpresidium;
use App\Models\Educationmaterial;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Internationaldocument;
use App\Models\Legalact;
use App\Models\Measures;
use App\Models\News;
use App\Models\Page;
use App\Models\Photogallery;
use App\Models\rhdecision;
use App\Models\Supremecourt;
use App\Models\Videogallery;
use Illuminate\Http\Request;
use \App\Models\About;
use \App\Models\College;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function pageView($slug){
        $page = Page::findBySlug($slug);
//        $data = $this->getPreparedData($slug);
        $data = [];

        // if blade view already created for the page
        if (View::exists("pages." . $slug)) { // pages.about
            return view('pages.' . $slug, compact('data', 'page'));
        } elseif ($page == null) { // if page was not created from admin panel
            return "Səhifə tapılmadı! Admin panelden yaradilmalidir!";
//            return view('pages.notFound');
        }
//        elseif ($data != null) { // there are data for the page, but blade view is not existing
//            return view('pages.posts', compact('data', 'page'));
//        }
        return view('pages.dinamic', compact('page', 'data'));

    }

    public function college(){
        $colleges = \App\models\College::get();
        return view('pages.college', compact('colleges'));
    }

    public function structure(){
        $structures = \App\Models\Structure::get();
        return view('pages.structure', compact('structures'));
    }

    public function apparatus(){
        $apparatus = \App\Models\Apparatus::get();
        return view('pages.apparatus', compact('apparatus'));
    }
//    Tam hazir deyil

    public function supremecourt(){
        $supremecourts = Supremecourt::get();
        return view('pages.supremecourt', compact('supremecourts'));
    }

    public function singleCourt() {
        $singlecourts = Supremecourt::where("slug", \request("slug"))->get();
        return view('pages.singleCourt', compact('singlecourts'));
    }

    public function news(){
        $news = News:: orderBy('id', 'desc')->get();
        return view('pages.news', compact('news'));
    }

    public function singleNews() {
        $singlenews = News::where("slug", \request("slug"))->get();
        return view('pages.singleNews', compact('singlenews'));
    }


  public function legalact(){
        $legalacts = Legalact::get();
        return view('pages.legalact', compact('legalacts'));
  }

  public function decisionpresidia(){
        $decisionpresidias = Decisionpresidium::orderBy('id', 'desc')->get();
        return view('pages.decisionpresidia', compact('decisionpresidias'));
  }

  public function galleryClass(){
        $galleries = Gallery::get();
        return view('pages.gallery', compact('galleries'));
  }

  public function  videogallery(){
        $videogalleries = Videogallery::get();
        return view ('pages.videogallery', compact('videogalleries'));
  }

  public function faq(){
        $faqs = Faq::get();
        return view('pages.faq', compact('faqs'));
  }

    public function educationmaterial(){
        $educationmaterials = Educationmaterial::orderBy('id', 'desc')->get();
        return view('pages.educationmaterial', compact('educationmaterials'));
    }

    public function internationaldocument(){
        $internationaldocuments = Internationaldocument::orderBy('id', 'desc')->get();
        return view('pages.internationaldocument', compact('internationaldocuments'));
    }


    public function measures(){
        $measures = Measures:: orderBy('id', 'desc')->get();
        return view('pages.measures', compact('measures'));
    }



//  public function photogallery(){
//        $photogalleries = Photogallery::get();
//        return view('pages.gallery', compact('photogalleries'));
//  }

//    public function decision(){
//        $decisions = Decision::get();
//        return view('pages.decision', compact('decisions'));
//    }

//    public function rhdecision(){
//        $rhdecisions = rhdecision::get();
//        return view('pages.decision', compact('rhdecisions'));
//    }


}
