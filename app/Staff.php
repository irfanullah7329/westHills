<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //

    // protected $table = "staff";

    // Primary key
    // protected $primaryKey = "RecordingId";

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    // const CREATED_AT = 'CreatedAt';
    
    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    // const UPDATED_AT = 'UpdatedAt';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $guarded = [];

    protected $fillable = [
        'title','description','type','status','display','category'
    ];
}
