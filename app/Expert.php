<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $table = 'experts';
    public $timestamps = false;

    public function translations(){
        return $this->hasMany('App\ExpertTranslation', 'expert_id');
    }
}
