<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Applyonline;
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
use App\Models\Nmrelectronlibrary;
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

    public function supremecourt(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $supremecourts = Supremecourt::orderBy('id', 'desc')->get();
        return view('pages.supremecourt', compact('supremecourts', 'locale'));
    }


    public function singlesupremecourt(Request $request){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlesupremecourts = Supremecourt::where('id', $request->singlesupremecourt)->get();
        return view('pages.singleSupremecourt', compact('singlesupremecourts', 'locale'));
    }

    public function singleCourt() {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlecourts = Supremecourt::where("slug", \request("slug"))->get();
        return view('pages.singleCourt', compact('singlecourts', 'locale'));
    }

    public function applyonline(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $applyonlines = \App\models\Applyonline::get();
        return view('pages.applyonline', compact('applyonlines', 'locale'));
    }

    public function mail()
    {
        $mails= Applyonline::get();
        return view('pages.mail', compact('mails'));
    }

    public function news(){
        $search = request('search');
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $news = News::where('title', 'like', "%$search%")->orderBy('id', 'desc')->paginate(5);
        return view('pages.news', compact('news', 'locale'));
    }

    public function singlenews(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlenewss=News::where('id', $request->singlenews)->get();
        return view('pages.singleNews', compact('singlenewss', 'locale'));
    }

  public function legalact(){
      $locale = \Illuminate\Support\Facades\Session::get('locale');
      $legalacts = Legalact::orderBy('id', 'desc')->get();
        return view('pages.legalact', compact('legalacts', 'locale'));
  }

    public function constitution(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $constitutions= Constitution ::orderBy('id', 'desc')->get();
        return view('pages.constitution', compact('constitutions', 'locale'));
    }

  public function decisionpresidia(){
      $locale = \Illuminate\Support\Facades\Session::get('locale');
      $decisionpresidias = Decisionpresidium::orderBy('id', 'desc')->paginate(10);
        return view('pages.decisionpresidia', compact('decisionpresidias', 'locale'));
  }
    public function singledecisionpresidia(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singledecisionpresidias=Decisionpresidium::where('id', $request->singledecisionpresidia)->get();
        return view('pages.singleDecisionpresidia', compact('singledecisionpresidias', 'locale'));
    }

    public function appeal(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $appeals = Appeal::orderBy('id', 'desc')->get();
        return view('pages.appeal', compact('appeals', 'locale'));
    }
    public function singleappeal(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singleappeals=Appeal::where('id', $request->singleappeal)->get();
        return view('pages.singleAppeal', compact('singleappeals', 'locale'));
    }

    public function electronlibrary(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $electronlibrarys = Electronlibrary::orderBy('id', 'desc')->get();
        return view('pages.electronlibrary', compact('electronlibrarys', 'locale'));
    }

    public function nmrelectronlibrary(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $nmrelectronlibraries = Nmrelectronlibrary::orderBy('id', 'desc')->get();
        return view('pages.nmrelectronlibraries', compact('nmrelectronlibraries', 'locale'));
    }

    public function exampledocument(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $exampledocuments = Exampledocument::orderBy('id', 'desc')->get();
        return view('pages.exampledocuments', compact('exampledocuments', 'locale'));
    }

    public function publication(){
        $publications = Publication::orderBy('id', 'desc')->get();
        return view('pages.publications', compact('publications'));
    }

    public function speech(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $speechs = Speech:: orderBy('id', 'desc')->paginate(10);
        return view('pages.speech', compact('speechs', 'locale'));
    }
    public function singlespeech(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlespeechs=Speech::where('id', $request->singlespeech)->get();
        return view('pages.singleSpeech', compact('singlespeechs', 'locale'));
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
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $faqs = Faq::get();
        return view('pages.faq', compact('faqs', 'locale'));
    }

    public function educationmaterial(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $educationmaterials = Educationmaterial::orderBy('id', 'desc')->paginate(10);
        return view('pages.educationmaterial', compact('educationmaterials', 'locale'));
    }
    public function singleeducation(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singleeducations=Educationmaterial::where('id', $request->singleeducation)->get();
        return view('pages.singleEducation', compact('singleeducations', 'locale'));
    }

    public function internationaldocument(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $internationaldocuments = Internationaldocument::orderBy('id', 'desc')->get();
        return view('pages.internationaldocument', compact('internationaldocuments', 'locale'));
    }


    public function article(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $articles = Article:: orderBy('id', 'desc')->paginate(10);
        return view('pages.article', compact('articles', 'locale'));
    }
    public function singlearticle(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlearticles=Article::where('id', $request->singlearticle)->get();
        return view('pages.singleArticle', compact('singlearticles', 'locale'));
    }



    public function report(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $reports = Report:: orderBy('id', 'desc')->paginate(10);
        return view('pages.report', compact('reports', 'locale'));
    }
    public function singlereport(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlereports= Report::where('id', $request->singlereport)->get();
        return view('pages.singleReport', compact('singlereports', 'locale'));
    }

    public function measures(){
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $measures = Measure:: orderBy('id', 'desc')->paginate(10);
        return view('pages.measures', compact('measures', 'locale'));
    }
    public function singlemeasures(Request $request) {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlemeasures=Measure::where('id', $request->singlemeasures)->get();
        return view('pages.singleMeasure', compact('singlemeasures', 'locale'));
    }
}
