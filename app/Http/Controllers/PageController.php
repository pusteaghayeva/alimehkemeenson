<?php

namespace App\Http\Controllers;

use App\Models\Apparats;
use App\Models\Apparatus;
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
use App\Models\SingleApparatus;
use App\Models\Speech;
use App\Models\Supremecourt;
use App\Models\Title;
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
        if (View::exists("pages." . $slug)) { // pages.xeberler
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

    public function titleView($slug){
        $title = Title::findBySlug($slug);
        $locale = Session::get('locale');
//        $data = $this->getPreparedData($slug);
        $data = [];

//        // if blade view already created for the page
//        if (View::exists("pages." . $slug)) { // pages.about
//            return view('pages.' . $slug, compact('data', 'page','locale'));
//        } elseif ($page == null) { // if page was not created from admin panel
//            return "Səhifə tapılmadı! Admin panelden yaradılmalıdır!";
////            return view('pages.notFound');
//        }
////        elseif ($data != null) { // there are data for the page, but blade view is not existing
////            return view('pages.posts', compact('data', 'page'));
////        }
        return view('pages.title', compact('title', 'data','locale'));

    }

    public function adres(){
        $locale = Session::get('locale');
        $adress = \App\Models\Adres::orderBy('id', 'desc')->get();
        return view('pages.titles', compact('adress'));
    }

    public function apparats(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['MəhkəməninStrukturu'] = "Structure of the Court";
                $titlesTranslation['NaxcivanMRAMStrukturu'] = "The structure of the Supreme Court of the Nakhchivan Autonomous Republic";
                $titlesTranslation['AliMəhkəməninAparatı'] = "Apparatus of the Supreme Court";
                break;
            case "ru":
                $titlesTranslation['MəhkəməninStrukturu'] = "Структура суда";
                $titlesTranslation['NaxcivanMRAMStrukturu'] = "Структура Верховного суда Нахчыванской Автономной Республики";
                $titlesTranslation['AliMəhkəməninAparatı'] = "Аппарат Верховного суда";
                break;
            default :
                $titlesTranslation['MəhkəməninStrukturu'] = "Məhkəmənin strukturu";
                $titlesTranslation['NaxcivanMRAMStrukturu'] = "Naxçıvan Muxtar Respublikası Ali Məhkəmənin strukturu";
                $titlesTranslation['AliMəhkəməninAparatı'] = "Ali Məhkəmənin aparatı";
        }
         $apparats = \App\Models\Apparats::orderBy('id', 'desc')->get();
        return view('pages.apparats', compact('apparats', 'locale', 'titlesTranslation'));
    }

    public function singleapparats(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['MəhkəməninStrukturu'] = "Structure of the Court";
                break;
            case "ru":
                $titlesTranslation['MəhkəməninStrukturu'] = "Структура суда";
                break;
            default :
                $titlesTranslation['MəhkəməninStrukturu'] = "Məhkəmənin strukturu";
        }
        $singleapparatss=Apparats::where('id', $request->singleapparats)->get();
        return view('pages.singleApparats', compact('singleapparatss', 'locale', 'titlesTranslation'));
    }


    public function supremecourt(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['AliMəhkəmə90'] = "Supreme Court-90";
                break;
            case "ru":
                $titlesTranslation['AliMəhkəmə90'] = "Верховный суд-90";
                break;
            default :
                $titlesTranslation['AliMəhkəmə90'] = "Ali Məhkəmə-90";
        }
        $supremecourts = Supremecourt::orderBy('id', 'desc')->get();
        return view('pages.supremecourt', compact('supremecourts', 'locale','titlesTranslation'));
    }


    public function singlesupremecourt(Request $request){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['AliMəhkəmə90'] = "Supreme Court-90";
                break;
            case "ru":
                $titlesTranslation['AliMəhkəmə90'] = "Верховный суд-90";
                break;
            default :
                $titlesTranslation['AliMəhkəmə90'] = "Ali Məhkəmə-90";
        }
        $singlesupremecourts = Supremecourt::where('id', $request->singlesupremecourt)->get();
        return view('pages.singleSupremecourt', compact('singlesupremecourts', 'locale','titlesTranslation'));
    }

    public function singleCourt() {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['AliMəhkəmə90'] = "Supreme Court-90";
                break;
            case "ru":
                $titlesTranslation['AliMəhkəmə90'] = "Верховный суд-90";
                break;
            default :
                $titlesTranslation['AliMəhkəmə90'] = "Ali Məhkəmə-90";
        }
        $singlecourts = Supremecourt::where("slug", \request("slug"))->get();
        return view('pages.singleCourt', compact('singlecourts', 'locale', 'titlesTranslation'));
    }

    public function applyonline(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['OnlaynMüraciət'] = "Apply Online";
                break;
            case "ru":
                $titlesTranslation['OnlaynMüraciət'] = "Подать заявку онлайн";
                break;
            default :
                $titlesTranslation['OnlaynMüraciət'] = "Onlayn Müraciət";
        }
        $applyonlines = \App\Models\Applyonline::get();
        return view('pages.applyonline', compact('applyonlines', 'locale', 'titlesTranslation'));
    }

    public function mail()
    {
        $mails= Applyonline::get();
        return view('pages.mail', compact('mails'));
    }

    public function news(){
        $search = request('search');
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Xəbərlər'] = "News";
                break;
            case "ru":
                $titlesTranslation['Xəbərlər'] = "Новости";
                break;
            default :
                $titlesTranslation['Xəbərlər'] = "Xəbərlər";
        }
        $news = News::where('title', 'like', "%$search%")->orderBy('id', 'desc')->paginate(9);
        return view('pages.news', compact('news', 'locale', 'titlesTranslation'));
    }

    public function singlenews(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Xəbərlər'] = "News";
                break;
            case "ru":
                $titlesTranslation['Xəbərlər'] = "Новости";
                break;
            default :
                $titlesTranslation['Xəbərlər'] = "Xəbərlər";
        }
        $singlenewss=News::where('id', $request->singlenews)->get();
        return view('pages.singleNews', compact('singlenewss', 'locale', 'titlesTranslation'));
    }

  public function legalact(){
      $locale = Session::get('locale');
      switch ($locale){
          case "en":
              $titlesTranslation['AzərbaycanRespublikasınınHüquqiAktları'] = "Legal acts of the Republic of Azerbaijan";
              break;
          case "ru":
              $titlesTranslation['AzərbaycanRespublikasınınHüquqiAktları'] = "Правовые акты Азербайджанской Республики";
              break;
          default :
              $titlesTranslation['AzərbaycanRespublikasınınHüquqiAktları'] = "Azərbaycan Respublikasının Hüquqi aktları ";
      }
      $legalacts = Legalact::orderBy('id', 'desc')->get();
        return view('pages.legalact', compact('legalacts', 'locale', 'titlesTranslation'));
  }

    public function constitution(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Konstitusiya'] = "Constitution";
                break;
            case "ru":
                $titlesTranslation['Konstitusiya'] = "Конституция";
                break;
            default :
                $titlesTranslation['Konstitusiya'] = "Konstitusiya";
        }
        $constitutions= Constitution ::orderBy('id', 'desc')->paginate(10);
        return view('pages.constitution', compact('constitutions', 'locale', 'titlesTranslation'));
    }

  public function decisionpresidia(){
      $locale = Session::get('locale');
      switch ($locale){
          case "en":
              $titlesTranslation['RəyasətHeyətininQərarları'] = "Decisions of the presidium";
              break;
          case "ru":
              $titlesTranslation['RəyasətHeyətininQərarları'] = "Решения президиума";
              break;
          default :
              $titlesTranslation['RəyasətHeyətininQərarları'] = "Rəyasət heyətinin qərarları";
      }
      $decisionpresidias = Decisionpresidium::orderBy('id', 'desc')->paginate(10);
        return view('pages.decisionpresidia', compact('decisionpresidias', 'locale', 'titlesTranslation'));
  }
    public function singledecisionpresidia(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Decisions of the presidium";
                break;
            case "ru":
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Решения президиума";
                break;
            default :
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Rəyasət heyətinin qərarları";
        }
        $singledecisionpresidias=Decisionpresidium::where('id', $request->singledecisionpresidia)->get();
        return view('pages.singleDecisionpresidia', compact('singledecisionpresidias', 'locale', 'titlesTranslation'));
    }

    public function appeal(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Decisions of the Presidium";
                break;
            case "ru":
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Решения Президиума";
                break;
            default :
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Rəyasət Heyətinin Qərarları";
        }
        $appeals = Appeal::orderBy('id', 'desc')->get();
        return view('pages.appeal', compact('appeals', 'locale', 'titlesTranslation'));
    }
    public function singleappeal(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Decisions of the Presidium";
                break;
            case "ru":
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Решения Президиума";
                break;
            default :
                $titlesTranslation['RəyasətHeyətininQərarları'] = "Rəyasət Heyətinin Qərarları";
        }
        $singleappeals=Appeal::where('id', $request->singleappeal)->get();
        return view('pages.singleAppeal', compact('singleappeals', 'locale', 'titlesTranslation'));
    }

    public function electronlibrary(){
        $locale = Session::get('locale');
         switch ($locale){
             case "en":
                 $titlesTranslation['ElektronKitabxana'] = "Electronic Library";
                 break;
             case "ru":
                 $titlesTranslation['ElektronKitabxana'] = "Электронная библиотека";
                 break;
             default :
                 $titlesTranslation['ElektronKitabxana'] = "Elektron Kitabxana";
         }
        $electronlibrarys = Electronlibrary::orderBy('id', 'desc')->get();
        return view('pages.electronlibrary', compact('electronlibrarys', 'locale', 'titlesTranslation'));
    }

    public function nmrelectronlibrary(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['NaxçıvanMRAliMəhkəməsininElektronBazası'] = "Electronic database of the Supreme Court of Nakhchivan AR";
                break;
            case "ru":
                $titlesTranslation['NaxçıvanMRAliMəhkəməsininElektronBazası'] = "Электронная база данных Верховного суда Нахчыванской АР";
                break;
            default :
                $titlesTranslation['NaxçıvanMRAliMəhkəməsininElektronBazası'] = "Naxçıvan MR Ali Məhkəməsinin elektron bazası";
        }
        $nmrelectronlibraries = Nmrelectronlibrary::orderBy('id', 'desc')->get();
        return view('pages.nmrelectronlibraries', compact('nmrelectronlibraries', 'locale', 'titlesTranslation'));
    }

    public function exampledocument(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['SənədlərinNümunələri'] = "Sample of documents";
                break;
            case "ru":
                $titlesTranslation['SənədlərinNümunələri'] = "Образец документов";
                break;
            default :
                $titlesTranslation['SənədlərinNümunələri'] = "Sənədlərin nümunələri";
        }
        $exampledocuments = Exampledocument::orderBy('id', 'desc')->paginate(10);
        return view('pages.exampledocuments', compact('exampledocuments', 'locale', 'titlesTranslation'));
    }

    public function publication(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['NəşrlərinNümunələri'] = "Examples of publications";
                break;
            case "ru":
                $titlesTranslation['NəşrlərinNümunələri'] = "Примеры публикаций";
                break;
            default :
                $titlesTranslation['NəşrlərinNümunələri'] = "Nəşrlərin nümunələri";
        }
        $publications = Publication::orderBy('id', 'desc')->get();
        return view('pages.publications', compact('publications', 'titlesTranslation'));
    }

    public function speech(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Çıxışlar'] = "Speeches";
                break;
            case "ru":
                $titlesTranslation['Çıxışlar'] = "Выступления";
                break;
            default :
                $titlesTranslation['Çıxışlar'] = "Çıxışlar";
        }
        $speechs = Speech:: orderBy('id', 'desc')->paginate(10);
        return view('pages.speech', compact('speechs', 'locale', 'titlesTranslation'));
    }
    public function singlespeech(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Çıxışlar'] = "Speeches";
                break;
            case "ru":
                $titlesTranslation['Çıxışlar'] = "Выступления";
                break;
            default :
                $titlesTranslation['Çıxışlar'] = "Çıxışlar";
        }
        $singlespeechs=Speech::where('id', $request->singlespeech)->get();
        return view('pages.singleSpeech', compact('singlespeechs', 'locale', 'titlesTranslation'));
    }

  public function galleryClass(){
      $locale = Session::get('locale');
      $galleries = Gallery::get();
      switch ($locale){
          case "en":
              $titlesTranslation['FotoMateriallar'] = "Photo Materials";
              break;
          case "ru":
              $titlesTranslation['FotoMateriallar'] = "Фотоматериалы";
              break;
          default :
              $titlesTranslation['FotoMateriallar'] = "Foto Materiallar";
      }
        return view('pages.gallery', compact('galleries', 'titlesTranslation'));
  }

  public function  video(){
      $locale = Session::get('locale');
      $videos = Video::get();
      switch ($locale){
          case "en":
              $titlesTranslation['VideoMateriallar'] = "Video Materials";
              break;
          case "ru":
              $titlesTranslation['VideoMateriallar'] = "ВидеоМатериалы";
              break;
          default :
              $titlesTranslation['VideoMateriallar'] = "Video Materiallar";
      }
        return view ('pages.video', compact('videos', 'titlesTranslation'));
  }


    public function faq(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Faq'] = "Frequently Asked Questions";
                break;
            case "ru":
                $titlesTranslation['Faq'] = "Часто задаваемые вопросы";
                break;
            default :
                $titlesTranslation['Faq'] = "Tez-tez verilən suallar";
        }
        $faqs = Faq::paginate(10);
        return view('pages.faq', compact('faqs', 'locale', 'titlesTranslation'));
    }

    public function educationmaterial(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['MaarifəndiriciMateriallar'] = "Educational Materials";
                break;
            case "ru":
                $titlesTranslation['MaarifəndiriciMateriallar'] = "Образовательные материалы";
                break;
            default :
                $titlesTranslation['MaarifəndiriciMateriallar'] = "Maarifəndirici Materiallar";
        }
        $educationmaterials = Educationmaterial::orderBy('id', 'desc')->paginate(10);
        return view('pages.educationmaterial', compact('educationmaterials', 'locale', 'titlesTranslation'));
    }
    public function singleeducation(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['MaarifəndiriciMateriallar'] = "Educational Materials";
                break;
            case "ru":
                $titlesTranslation['MaarifəndiriciMateriallar'] = "Образовательные материалы";
                break;
            default :
                $titlesTranslation['MaarifəndiriciMateriallar'] = "Maarifəndirici Materiallar";
        }
        $singleeducations=Educationmaterial::where('id', $request->singleeducation)->get();
        return view('pages.singleEducation', compact('singleeducations', 'locale', 'titlesTranslation'));
    }

    public function internationaldocument(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['BeynəlxalqHüquqiSənədlər'] = "International legal documents";
                break;
            case "ru":
                $titlesTranslation['BeynəlxalqHüquqiSənədlər'] = "Международно-правовые документы";
                break;
            default :
                $titlesTranslation['BeynəlxalqHüquqiSənədlər'] = "Beynəlxalq hüquqi sənədlər";
        }
        $internationaldocuments = Internationaldocument::orderBy('id', 'desc')->get();
        return view('pages.internationaldocument', compact('internationaldocuments', 'locale', 'titlesTranslation'));
    }


    public function article(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Məqalələr'] = "Articles";
                break;
            case "ru":
                $titlesTranslation['Məqalələr'] = "Статьи";
                break;
            default :
                $titlesTranslation['Məqalələr'] = "Məqalələr";
        }
        $articles = Article:: orderBy('id', 'desc')->paginate(10);
        return view('pages.article', compact('articles', 'locale', 'titlesTranslation'));
    }
    public function singlearticle(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Məqalələr'] = "Articles";
                break;
            case "ru":
                $titlesTranslation['Məqalələr'] = "Статьи";
                break;
            default :
                $titlesTranslation['Məqalələr'] = "Məqalələr";
        }
        $singlearticles=Article::where('id', $request->singlearticle)->get();
        return view('pages.singleArticle', compact('singlearticles', 'locale', 'titlesTranslation'));
    }



    public function report(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Hesabatlar'] = "Reports";
                break;
            case "ru":
                $titlesTranslation['Hesabatlar'] = "Отчеты";
                break;
            default :
                $titlesTranslation['Hesabatlar'] = "Hesabatlar";
        }
        $reports = Report:: orderBy('id', 'desc')->paginate(1);
        return view('pages.report', compact('reports', 'locale', 'titlesTranslation'));
    }
    public function singlereport(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Hesabatlar'] = "Reports";
                break;
            case "ru":
                $titlesTranslation['Hesabatlar'] = "Отчеты";
                break;
            default :
                $titlesTranslation['Hesabatlar'] = "Hesabatlar";
        }
        $singlereports= Report::where('id', $request->singlereport)->get();
        return view('pages.singleReport', compact('singlereports', 'locale', 'titlesTranslation'));
    }

    public function measures(){
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Tədbirlər'] = "Events";
                break;
            case "ru":
                $titlesTranslation['Tədbirlər'] = "События";
                break;
            default :
                $titlesTranslation['Tədbirlər'] = "Tədbirlər";
        }
        $measures = Measure:: orderBy('id', 'desc')->paginate(10);
        return view('pages.measures', compact('measures', 'locale', 'titlesTranslation'));
    }
    public function singlemeasures(Request $request) {
        $locale = Session::get('locale');
        switch ($locale){
            case "en":
                $titlesTranslation['Tədbirlər'] = "Events";
                break;
            case "ru":
                $titlesTranslation['Tədbirlər'] = "События";
                break;
            default :
                $titlesTranslation['Tədbirlər'] = "Tədbirlər";
        }
        $singlemeasures=Measure::where('id', $request->singlemeasures)->get();
        return view('pages.singleMeasure', compact('singlemeasures', 'locale', 'titlesTranslation'));
    }
}
