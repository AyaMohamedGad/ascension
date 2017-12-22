<?php

namespace App\Http\Controllers;

use App\PhotoGallery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Flashy;

class GalleryController extends Controller
{
    public function index(){
        $photos = PhotoGallery::orderBy('order')->get();
        return view('admin.gallery.index', compact('photos'));
    }

    public function update(Request $request){
        PhotoGallery::whereNotIn('id', $request->old_photos)->delete();
        if($request->photos && count($request->photos) > 0){
            foreach ($request->photos as $photo){
                $filename = Carbon::now()->timestamp . '.' . $photo->getClientOriginalExtension();
                $path = public_path('images/photo_gallery/');
                $photo->move($path, $filename);

                $newPhoto = new PhotoGallery();
                $newPhoto->image = $filename;
                $newPhoto->order = PhotoGallery::max('order') + 1;
                $newPhoto->save();
            }
        }
        Flashy::success('Photo Gallery updated successfully');
        return redirect()->back();
    }

}
