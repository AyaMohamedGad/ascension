<?php

namespace App\Http\Controllers;

use App\Course;
use App\News;
use App\PhotoGallery;

class HomeController extends Controller
{
    public function __construct(){
        $lang = \Session::get('locale');
        if ($lang != null)
            \App::setLocale($lang);
    }

    public function index(){
        $news = News::with(['translations' => function ($q) {
            $q->where('language', 'en');
        }])->get();
        $images = PhotoGallery::orderBy('order')->get();
        $images_array = array();
        foreach ($images as $image) {
            array_push($images_array, (asset('images').'/'.$image['image']));
        }
        return view('site.home', compact('news', 'images_array'));
    }

    public function cma(){
        $cma = Course::where('name', 'cma')->first();
        return view('site.cma', compact('cma'));
    }

    public function cpa(){
        $cpa = Course::where('name', 'cpa')->first();
        return view('site.cpa', compact('cpa'));
    }

    public function cia(){
        $cia = Course::where('name', 'cia')->first();
        return view('site.cia', compact('cia'));
    }

    public function cfa(){
        $cfa = Course::where('name', 'cfa')->first();
        return view('site.cfa', compact('cfa'));
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
            \Session::put('locale', $lang);
        } else {
            \Session::put('locale', 'en');
        }
        return redirect()->back();
    }

}
