<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function shortenText($text, $target){
        $count = str_word_count($text, 0); // return count of text
        if($count > $target){
            $words = str_word_count($text, 2); // return array with positions of each word
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$target]) . '...';
        }
        return $text;
    }

}
