<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $fillable = [
        'title','description','imageUrl'
    ];

    public function getImagePath($value){

        return asset('storage/' . $value);
    }
}
