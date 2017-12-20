<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

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
        $theNew = News::find($id);
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
//        $theNew->image
    }

    public function update($id, Request $request){

    }

}
