<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Article;
//use App\Models\Azlegalact;
use App\Models\Constitution;
use App\Models\Court90;
use App\Models\Courts;
use App\Models\Decision;
use App\Models\Decisionpresidium;
use App\Models\Educationmaterial;
use App\Models\Electronlibrary;
use App\Models\Exampledocument;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Internationaldocument;
use App\Models\Legalact;
use App\Models\Measure;
use App\Models\Measures;
use App\Models\News;
use App\Models\Page;
use App\Models\Photogallery;
use App\Models\Publication;
use App\Models\Report;
use App\Models\rhdecision;
use App\Models\Speech;
use App\Models\Supremecourt;
use App\Models\Video;
use Illuminate\Http\Request;
use \App\Models\About;
use \App\Models\College;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function pageView($slug){
        $page = Page::findBySlug($slug);
        $locale = Session::get('locale');
//        $data = $this->getPreparedData($slug);
        $data = [];

        // if blade view already created for the page
        if (View::exists("pages." . $slug)) { // pages.about
            return view('pages.' . $slug, compact('data', 'page','locale'));
        } elseif ($page == null) { // if page was not created from admin panel
            return "Səhifə tapılmadı! Admin panelden yaradılmalıdır!";
//            return view('pages.notFound');
        }
//        elseif ($data != null) { // there are data for the page, but blade view is not existing
//            return view('pages.posts', compact('data', 'page'));
//        }
        return view('pages.dinamic', compact('page', 'data','locale'));

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
        $supremecourts = Supremecourt::orderBy('id', 'desc')->get();
        return view('pages.supremecourt', compact('supremecourts'));
    }
    public function singlesupremecourt(Request $request){
        $singlesupremecourts = Supremecourt::where('id', $request->singlesupremecourt)->get();
        return view('pages.singleSupremecourt', compact('singlesupremecourts'));
    }

    public function singleCourt() {
        $singlecourts = Supremecourt::where("slug", \request("slug"))->get();
        return view('pages.singleCourt', compact('singlecourts'));
    }

    public function news(){
        $news = News:: orderBy('id', 'desc')->get();
        return view('pages.news', compact('news'));
    }

    public function singlenews(Request $request) {
        $singlenewss=News::where('id', $request->singlenews)->get();
        return view('pages.singleNews', compact('singlenewss'));
    }

  public function legalact(){
        $legalacts = Legalact::orderBy('id', 'desc')->get();
        return view('pages.legalact', compact('legalacts'));
  }

    public function constitution(Request $request) {
        $constitutions= Constitution ::orderBy('id', 'desc')->get();
        return view('pages.constitution', compact('constitutions'));
    }

  public function decisionpresidia(){
        $decisionpresidias = Decisionpresidium::orderBy('id', 'desc')->get();
        return view('pages.decisionpresidia', compact('decisionpresidias'));
  }
    public function singledecisionpresidia(Request $request) {
        $singledecisionpresidias=Decisionpresidium::where('id', $request->singledecisionpresidia)->get();
        return view('pages.singleDecisionpresidia', compact('singledecisionpresidias'));
    }

    public function appeal(){
        $appeals = Appeal::orderBy('id', 'desc')->get();
        return view('pages.appeal', compact('appeals'));
    }
    public function singleappeal(Request $request) {
        $singleappeals=Appeal::where('id', $request->singleappeal)->get();
        return view('pages.singleAppeal', compact('singleappeals'));
    }

    public function electronlibrary(){
        $electronlibrarys = Electronlibrary::orderBy('id', 'desc')->get();
        return view('pages.electronlibrary', compact('electronlibrarys'));
    }
//    public function nmrelectronlibrary(Request $request) {
//        $nmrelectronlibraries=Electronlibrary::where('id', $request->nmrelectronlibrary)->get();
//        return view('pages.nmrelectronlibraries', compact('nmrelectronlibraries'));
//    }

    public function nmrelectronlibrary(){
        $nmrelectronlibraries = Electronlibrary::orderBy('id', 'desc')->get();
        return view('pages.nmrelectronlibraries', compact('nmrelectronlibraries'));
    }
//    public function nmrelectronlibrary(Request $request) {
//        $nmrelectronlibraries= Electronlibrary ::orderBy('id', 'desc')->get();
//        return view('pages.nmrelectronlibraries', compact('nmrelectronlibraries'));
//    }

    public function exampledocument(){
        $exampledocuments = Exampledocument::orderBy('id', 'desc')->get();
        return view('pages.exampledocuments', compact('exampledocuments'));
    }

    public function publication(){
        $publications = Publication::orderBy('id', 'desc')->get();
        return view('pages.publications', compact('publications'));
    }

    public function speech(){
        $speechs = Speech:: orderBy('id', 'desc')->get();
        return view('pages.speech', compact('speechs'));
    }
    public function singlespeech(Request $request) {
        $singlespeechs=Speech::where('id', $request->singlespeech)->get();
        return view('pages.singleSpeech', compact('singlespeechs'));
    }

  public function galleryClass(){
        $galleries = Gallery::get();
        return view('pages.gallery', compact('galleries'));
  }

  public function  video(){
        $videos = Video::get();
        return view ('pages.video', compact('videos'));
  }

  public function faq(){
        $faqs = Faq::get();
        return view('pages.faq', compact('faqs'));
  }

    public function educationmaterial(){
        $educationmaterials = Educationmaterial::orderBy('id', 'desc')->get();
        return view('pages.educationmaterial', compact('educationmaterials'));
    }
    public function singleeducation(Request $request) {
        $singleeducations=Educationmaterial::where('id', $request->singleeducation)->get();
        return view('pages.singleEducation', compact('singleeducations'));
    }

    public function internationaldocument(){
        $internationaldocuments = Internationaldocument::orderBy('id', 'desc')->get();
        return view('pages.internationaldocument', compact('internationaldocuments'));
    }




    public function article(){
        $articles = Article:: orderBy('id', 'desc')->get();
        return view('pages.article', compact('articles'));
    }
    public function singlearticle(Request $request) {
        $singlearticles=Article::where('id', $request->singlearticle)->get();
        return view('pages.singleArticle', compact('singlearticles'));
    }



    public function report(){
        $reports = Report:: orderBy('id', 'desc')->get();
        return view('pages.report', compact('reports'));
    }
    public function singlereport(Request $request) {
        $singlereports= Report::where('id', $request->singlereport)->get();
        return view('pages.singleReport', compact('singlereports'));
    }

    public function measures(){
        $measures = Measure:: orderBy('id', 'desc')->get();
        return view('pages.measures', compact('measures'));
    }
    public function singlemeasures(Request $request) {
        $singlemeasures=Measure::where('id', $request->singlemeasures)->get();
        return view('pages.singleMeasure', compact('singlemeasures'));
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
