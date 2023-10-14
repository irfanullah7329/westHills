<?php

namespace App;

use App\ChurchMedia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Camera extends Model
{
   
    // Tablename Mapping
    protected $table = "tblcameras";

    // Primary key
    protected $primaryKey = "CameraId";

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'CreatedAt';
    
    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'UpdatedAt';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * All Relationship of Camera
     */
    
    public function church() {

        return $this->belongsTo(Church::class, 'ChurchId');
    }

    public function server() {

        return $this->hasOne(Server::class,'ServerId');
    }
    
    /**
     * Attaching Camera to the Server and also Database
     * 
     * @array Form data from Axios Requests
     */
    public static function addcamera($cameraFormData) {

        $camera = new Camera;
        
        $camera->CreatedBy   = Auth::user()->UserId;
        $camera->ChurchId    = $cameraFormData->churchId;
        $camera->CameraName  = $cameraFormData->cameraName;
        $camera->CameraUrl   = $cameraFormData->cameraUrl;
        $camera->HttpPort    = $cameraFormData->httpPort;
        $camera->RtspPort    = $cameraFormData->rtspPort;

        if(substr($cameraFormData->cameraUrl, 0, 7) !=='rtsp://')
            $camera->CameraType = "rtmp";

        if($cameraFormData->serverId === 'auto'){
            $camera->ServerId = Server::getServerWithLeastCameras();
        }else{
            $camera->ServerId = $cameraFormData->serverId;
        }
        $camera->StreamingProtocol = "streaming Protol";
        $camera->CameraSlug = $camera->church()->find($cameraFormData->churchId)->UniqueChurchId;
        
        $camera->App = "Live";

        // Here will be API call and the check conditions whter it is connected or not
        // Api call will connect to save cmaera by some condition to verfiy the connction

        $saveCamera = $camera->save();

        if($saveCamera){

            return true;
            
        }else{

            return false;
        }
    }
    /**
     * Get all cameras of the church by Id
     * 
     * @var array all cameras for Church 
     */
    public static function getAllCameraByChurchId($churchId) {

        return Camera::where([
            
            ['ChurchId', '=', $churchId],
            ['mDelete', '=', null]

        ])->get();

    }
    /**
     * Update the Camera Of the Church
     * 
     * @return success message
     */
              
    public static function updateChurchCamera($cameraUpdateFormData,$cameraId){

        $camera = Camera::where('CameraId',$cameraId)->first();
        $camera->UpdatedBy   = Auth::user()->UserId;
        $camera->CameraName  = $cameraUpdateFormData->updatedCameraName;
        $camera->CameraUrl   = $cameraUpdateFormData->updatedCameraUrl;
        $camera->HttpPort    = $cameraUpdateFormData->updatedCameraHttpPort;
        $camera->RtspPort    = $cameraUpdateFormData->updatedCameraRtspPort;

        //$updatedChurchId = $cameraUpdateFormData->updatedCameraChurchId;

        if(substr($cameraUpdateFormData->updatedCameraUrl, 0, 7) !=='rtsp://') {
            $camera->CameraType = "rtmp";
        }

        if($cameraUpdateFormData->updatedCameraServer === 'auto'){
            $camera->ServerId = Server::getServerWithLeastCameras();
        }else{
            $camera->ServerId = $cameraUpdateFormData->updatedCameraServer;
        }
       

        // Updation of Camera on server if required will goes here


        $updateCamera = $camera->save();
        
        if($updateCamera){

            return true;

        }else{

            return false;
        }
        
    }
    /**
     * Delete the camera of the church
     * 
     * @return Success Message
     */

    public static function destroyCameraOfTheChurch($cameraId){

        $deleteChurchCamera = Camera::findorfail($cameraId);
        $deleteChurchCamera->mDelete = 1;
        $deleted = $deleteChurchCamera->save();

        if($deleted){

            return true;

        }else{

            return false;
        }
    }
    
}
