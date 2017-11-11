<?php

namespace App\Http\Controllers;

use App\News;

class HomeController extends Controller
{
    public function index(){
        $news = News::with(['translations' => function ($q) {
            $q->where('language', 'en');
        }])->get();
        return view('site.home', compact('news'));
    }

    public function cma(){
        return view('site.cma');
    }

    public function cpa(){
        return view('site.cpa');
    }

    public function cia(){
        return view('site.cia');
    }

    public function cfa(){
        return view('site.cfa');
    }

    public function ers(){
        return view('site.ers');
    }

    public function bookkeeping(){
        return view('site.bookkeeping');
    }

    public function about(){
        return view('site.about');
    }

    public function contact(){
        return view('site.contactus');
    }

    public function an_course(){
        return view('site.ascension_course');
    }

    public function informationSys(){
        return view('site.information');
    }

    public function feasibilityStudy(){
        return view('site.feasibility');
    }

    public function businessAdvisory(){
        return view('site.business_advisory');
    }

    public function nationalFunds(){
        return view('site.national_funds');
    }

    public function careers(){
        return view('site.careers');
    }

    public function viewNew($id){
        $thenew = News::with(['translations' => function ($q) {
            $q->where('language', 'en');
        }])->find($id);
        return view('site.indv_new', compact('thenew'));
    }

    public function setLanguage($lang){
        if($lang == 'ar'){
            app()->setLocale('ar');
        } else {
            app()->setLocale('en');
        }
        return redirect()->back();
    }

}
