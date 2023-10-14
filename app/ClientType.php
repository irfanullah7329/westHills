<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    //

    protected $guarded = [];

    // Tablename Mapping
    protected $table = "tblclient_types";

    // Primary key
    protected $primaryKey = "ClientTypeId";

}
