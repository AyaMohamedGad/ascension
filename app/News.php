<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $timestamps = false;

    public function translations(){
        return $this->hasMany('App\NewTranslation', 'new_id');
    }

}
