<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpertTranslation extends Model
{
    protected $table = 'expert_translations';
    public $timestamps = false;

    public function theNew(){
        return $this->belongsTo('App\Expert', 'expert_id');
    }
}
