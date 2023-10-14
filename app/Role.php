<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // @var for tablename to map
    protected $table = "tblroles";
    
    // @var for primary key
    protected $primaryKey = "RoleId";

    // Has Many Relationship
    public function users() {

        return $this->hasMany('App\User','UserId');
        //return $this->hasMany('App\User');
    }


}
