<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserChurch extends Model
{
    // Table Mapping
    protected $table = "tbluser_churches";
    
    // Primarykey Mapping
    protected $primaryKey = "UserChurchId";

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'AssignedDated';
    
    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'UpdatedAt'; 
    
    protected $guarded = [];

    public function churche(){

        return $this->belongsToMany(Church::class, 'ChurchId');
    }

    public function users(){
        
        return $this->belongsToMany(User::class, 'UserId');
    }

    public static function addUserChurch($requestFormdata,$churchId) {

        $userChurch = new UserChurch;
        $userChurch->UserId = $requestFormdata->UserId;
        $userChurch->ChurchId = $churchId;
        $userChurch->AssignedBy = $requestFormdata->UpdatedBy;
        $userChurchSaved = $userChurch->save();
        if($userChurchSaved){

            return true;
            
        }else{

            return false;
        }

    }
}
