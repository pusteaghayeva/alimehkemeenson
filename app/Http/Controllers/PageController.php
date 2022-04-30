<?php

namespace App\Http\Controllers;

use App\Models\Courts;
use Illuminate\Http\Request;
use \App\Models\About;
use \App\Models\College;

class PageController extends Controller
{
    public function about(){
        $abouts = \App\Models\About::get();
        return view('pages.about', compact('abouts'));
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

    public function courts(){
        $courts = \App\Models\Courts::get();
        return view('pages.courts', compact('courts'));
    }


}
