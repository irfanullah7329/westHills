<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
     // Table Mapping
     protected $table = "videos";
 
     
     protected $fillable =[
        'title','video_link','status'
        ];
 
}
