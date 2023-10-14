<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable =[
    'title','category_id','description','image'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
