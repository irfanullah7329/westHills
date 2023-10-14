<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    // Maping data table name
    protected $table = "tblservers";

    // Mapping primary key filed
    protected $primaryKey = "ServerId";

    // Created At filed mapping
    const CREATED_AT = "CreatedAt";

    // Updated At field Mappping
    const UPDATED_AT = "UpdatedAt";

    /**
     * All Relationships of Server with cameras
     */
    public function camera() {

        return $this->hasMany(Camera::class,'CameraId'); 
    }

    /**
     *  Get server with Least Cameras
     */ 
    public static function getServerWithLeastCameras() {

        foreach(self::getAllServers() as $server) {

          $serverCount[$server->ServerId] = count($server->camera()->get());

        }

     return array_keys($serverCount, min($serverCount))[0];
    }

    /**
     * Get all Servers
     * 
     */
    public static function getAllServers(){

        return Server::all();
    }


}
