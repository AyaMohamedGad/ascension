<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewTranslation extends Model
{
    protected $table = 'news_translations';
    public $timestamps = false;

    public function theNew(){
        return $this->belongsTo('App\News', 'new_id');
    }

}
