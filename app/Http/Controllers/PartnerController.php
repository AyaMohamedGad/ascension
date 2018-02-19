<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Flashy;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function update(Request $request){
        $partners = explode(",", $request->old_partners[0]);
        if($partners){
            Partner::whereNotIn('id', $partners)->delete();
        }
        if($request->partners && count($request->partners) > 0){
            foreach ($request->partners as $partner){
                $filename = str_random(5) . Carbon::now()->timestamp . '.' . $partner->getClientOriginalExtension();
                $path = 'images/partners/';
                $partner->move($path, $filename);

                $newPartner = new Partner();
                $newPartner->image = $filename;
                $newPartner->save();
            }
        }
        Flashy::success('Partner Image updated successfully');
        return redirect()->back();
    }
}
