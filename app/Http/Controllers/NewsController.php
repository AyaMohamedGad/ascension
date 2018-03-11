<?php

namespace App\Http\Controllers;

use App\News;
use App\NewTranslation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Flashy;
use Validator;

class NewsController extends Controller
{
    protected $languages;

    public function __construct(){
        $this->languages = ['en' => "English", 'ar' => "العربية"];
    }

    public function index(){
        $header = (object)[
            'icon' => 'fa fa-paper',
            'name' => 'News',
            'actions' => [
                (object)[
                    'icon' => 'ace-icon fa fa-plus bigger-120 blue',
                    'name' => 'Add New',
                    'link' => route('AddNew')
                ],
            ]
        ];
        $news = News::all();
        $languages = $this->languages;
        $actions = [
            (object)[
                'name' => 'View',
                'tooltip' => 'View New',
                'color' => (object)[
                    'type' => 'class',
                    'value' => 'green'
                ],
                'link' => route('ViewNew', '%d'),
                'icon' => (object)[
                    'type' => 'class',
                    'value' => 'ace-icon fa fa-eye bigger-150'
                ]
            ]
        ];
        $actions[] = (object)[
            'name' => 'Edit',
            'tooltip' => 'Edit New',
            'color' => (object)[
                'type' => 'class',
                'value' => 'blue'
            ],
            'link' => route('EditNew', '%d'),
            'icon' => (object)[
                'type' => 'class',
                'value' => 'ace-icon fa fa-pencil bigger-150'
            ]
        ];

        $actions[] = (object)[
            'name' => 'Delete',
            'tooltip' => 'Delete New',
            'color' => (object)[
                'type' => 'class',
                'value' => 'red'
            ],
            'link' => route('DeleteNew', '%d'),
            'icon' => (object)[
                'type' => 'class',
                'value' => 'ace-icon fa fa-trash-o bigger-150'
            ]
        ];
        $columns[] = (object)[
            'name' => 'id',
            'lang' => 'all',
            'search' => false,
            'displayName' => 'ID',
            'display' => true
        ];
        foreach ($languages as $key => $language) {
            $columns[] = (object)[
                'name' => 'title',
                'lang' => $key,
                'search' => true,
                'displayName' => 'Title',
                'display' => true
            ];
            $columns[] = (object)[
                'name' => 'description',
                'lang' => $key,
                'search' => true,
                'displayName' => 'Description',
                'display' => true
            ];
        }
        $columns[] = (object)[
            'name' => 'date',
            'lang' => 'all',
            'search' => true,
            'displayName' => 'Created At',
            'display' => true
        ];
        $columns[] = (object)[
            'name' => 'actions',
            'lang' => 'all',
            'search' => false,
            'displayName' => 'Actions',
            'display' => true
        ];
        $table = (object)[
            'columns' => collect($columns),
            'data' => $news
        ];
        return view('admin.news.index', compact('header', 'table', 'languages', 'actions'));
    }

    public function view($id){
        $theNew = News::with('translations')->find($id);
        return view('admin.news.view', compact('theNew'));
    }

    public function edit($id){
        $theNew = News::find($id);
        return view('admin.news.edit', compact('theNew'));
    }

    public function add(){
        return view('admin.news.add');
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'etitle' => 'required|max:255',
            'atitle' => 'required|max:255',
            'edescription' => 'required',
            'adescription' => 'required',
            'image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return redirect()->route('AddNew')->withErrors($validator)->withInput();
        }

        $theNew = new News();
        $file = $request->image;
        $filename = Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();
        $path = 'images/news/';
        $file->move($path, $filename);
        $theNew->image = $filename;
        $theNew->date = $request->date ? $request->date : Carbon::now();
        $theNew->save();

        $translation = new NewTranslation();
        $translation->title = $request->etitle;
        $translation->description = $request->edescription;
        $translation->language = 'en';
        $translation->new_id = $theNew->id;
        $translation->save();

        $translation = new NewTranslation();
        $translation->title = $request->atitle;
        $translation->description = $request->adescription;
        $translation->language = 'ar';
        $translation->new_id = $theNew->id;
        $translation->save();

        Flashy::success('The new added successfully.');
        return redirect()->route('ViewNew', $theNew->id);
    }

    public function update($id, Request $request){
        $validator = Validator::make($request->all(), [
            'etitle' => 'required|max:255',
            'atitle' => 'required|max:255',
            'edescription' => 'required',
            'adescription' => 'required',
            'image' => 'image',
        ]);

        if ($validator->fails()) {
            return redirect()->route('EditNew', $id)->withErrors($validator)->withInput();
        }

        $theNew = News::find($id);
        if(isset($request->image)){
            $file = $request->image;
            $filename = Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();
            $path = 'images/news/';
            $file->move($path, $filename);
            $theNew->image = $filename;
        }
        $theNew->date = $request->date ? $request->date : Carbon::now();
        $theNew->update();

        $translation = NewTranslation::where('language', 'en')->where('new_id', $id)->first();
        $translation->title = $request->etitle;
        $translation->description = $request->edescription;
        $translation->update();

        $translation = NewTranslation::where('language', 'ar')->where('new_id', $id)->first();
        $translation->title = $request->atitle;
        $translation->description = $request->adescription;
        $translation->update();

        Flashy::success('The new updated successfully.');
        return redirect()->route('ViewNew', $theNew->id);
    }

    public function delete($id){
        $theNew = News::find($id);
        $theNew->translations()->delete();
        $theNew->delete();
        Flashy::success('The new deleted successfully');
        return redirect()->route('NewsIndex');
    }

}
