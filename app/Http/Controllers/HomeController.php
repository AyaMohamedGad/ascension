<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        return view('site.home');
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

    public function setLanguage($lang){
        if($lang == 'ar'){
            app()->setLocale('ar');
        } else {
            app()->setLocale('en');
        }
        return redirect()->back();
    }

}
