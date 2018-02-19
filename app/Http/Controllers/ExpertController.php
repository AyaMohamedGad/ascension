<?php

namespace App\Http\Controllers;

use App\Expert;
use App\ExpertTranslation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Flashy;
use Validator;

class ExpertController extends Controller
{
    protected $languages;

    public function __construct(){
        $this->languages = ['en' => "English", 'ar' => "العربية"];
    }

    public function index(){
        $header = (object)[
            'icon' => 'fa fa-paper',
            'name' => 'Experts',
            'actions' => [
                (object)[
                    'icon' => 'ace-icon fa fa-plus bigger-120 blue',
                    'name' => 'Add Expert',
                    'link' => route('AddExpert')
                ],
            ]
        ];
        $experts = Expert::all();
        $languages = $this->languages;
        $actions = [
            (object)[
                'name' => 'View',
                'tooltip' => 'View Expert',
                'color' => (object)[
                    'type' => 'class',
                    'value' => 'green'
                ],
                'link' => route('ViewExpert', '%d'),
                'icon' => (object)[
                    'type' => 'class',
                    'value' => 'ace-icon fa fa-eye bigger-150'
                ]
            ]
        ];
        $actions[] = (object)[
            'name' => 'Edit',
            'tooltip' => 'Edit Expert',
            'color' => (object)[
                'type' => 'class',
                'value' => 'blue'
            ],
            'link' => route('EditExpert', '%d'),
            'icon' => (object)[
                'type' => 'class',
                'value' => 'ace-icon fa fa-pencil bigger-150'
            ]
        ];

        $actions[] = (object)[
            'name' => 'Delete',
            'tooltip' => 'Delete Expert',
            'color' => (object)[
                'type' => 'class',
                'value' => 'red'
            ],
            'link' => route('DeleteExpert', '%d'),
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
            'name' => 'actions',
            'lang' => 'all',
            'search' => false,
            'displayName' => 'Actions',
            'display' => true
        ];
        $table = (object)[
            'columns' => collect($columns),
            'data' => $experts
        ];
        return view('admin.experts.index', compact('header', 'table', 'languages', 'actions'));
    }

    public function view($id){
        $theExpert = Expert::with('translations')->find($id);
        return view('admin.experts.view', compact('theExpert'));
    }

    public function edit($id){
        $theExpert = Expert::find($id);
        return view('admin.experts.edit', compact('theExpert'));
    }

    public function add(){
        return view('admin.experts.add');
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
            return redirect()->route('AddExpert')->withErrors($validator)->withInput();
        }

        $theExpert = new Expert();
        $file = $request->image;
        $filename = Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();
        $path = public_path('images/experts/');
        $file->move($path, $filename);
        $theExpert->image = $filename;
        $theExpert->save();

        $translation = new ExpertTranslation();
        $translation->title = $request->etitle;
        $translation->description = $request->edescription;
        $translation->language = 'en';
        $translation->expert_id = $theExpert->id;
        $translation->save();

        $translation = new ExpertTranslation();
        $translation->title = $request->atitle;
        $translation->description = $request->adescription;
        $translation->language = 'ar';
        $translation->expert_id = $theExpert->id;
        $translation->save();

        Flashy::success('The expert added successfully.');
        return redirect()->route('ViewExpert', $theExpert->id);
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
            return redirect()->route('EditExpert', $id)->withErrors($validator)->withInput();
        }

        $theExpert = Expert::find($id);
        if(isset($request->image)){
            $file = $request->image;
            $filename = Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();
            $path = public_path('images/experts/');
            $file->move($path, $filename);
            $theExpert->image = $filename;
        }
        $theExpert->update();

        $translation = ExpertTranslation::where('language', 'en')->where('expert_id', $id)->first();
        $translation->title = $request->etitle;
        $translation->description = $request->edescription;
        $translation->update();

        $translation = ExpertTranslation::where('language', 'ar')->where('expert_id', $id)->first();
        $translation->title = $request->atitle;
        $translation->description = $request->adescription;
        $translation->update();

        Flashy::success('The expert updated successfully.');
        return redirect()->route('ViewExpert', $theExpert->id);
    }

    public function delete($id){
        $theExpert = Expert::find($id);
        $theExpert->translations()->delete();
        $theExpert->delete();
        Flashy::success('The Expert deleted successfully');
        return redirect()->route('ExpertsIndex');
    }
}
