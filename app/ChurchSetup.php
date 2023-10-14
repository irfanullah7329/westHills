<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChurchSetup extends Model
{
    // Table name maping
    protected $table = 'tblchurch_setup';

    // Primarykey field mapping
    protected $primaryKey = 'ChurchSetUpId';

    // CreatedAt field mapping
    const CREATED_AT = 'CreatedAt';

    // CreatedBy filed mapping
    const UPDATED_AT = 'UpdatedAt';

    public function church() {

        return $this->belongsTo(Church::class, 'ChurchId');
    }

    /**
     *  Add setup Tab of a Church
     * 
     * @return true for success
     * 
     */
    public static function addChurchSetup($setupFormData) {

        $updateSetup = new ChurchSetup;
        $updateSetup->InternetProvider = $setupFormData->InternetProvider;
        $updateSetup->RouterModel = $setupFormData->RouterModel;
        $updateSetup->RouterUserName = $setupFormData->RouterUserName;
        $updateSetup->RouterPassword = $setupFormData->RouterPassword;
        if($setupFormData->Aerials == 'on') {
            $updateSetup->Aerials = 1;
        }
        if($setupFormData->Switch == 'on') {
            $updateSetup->Switch = 1;
        }
        if($setupFormData->HomePlugs == 'on') {
            $updateSetup->HomePlugs = 1;
        }
        if($setupFormData->DirectWire == 'on') {
            $updateSetup->DirectWire = 1;
        }
       
        $updateSetup->CreatedBy = $setupFormData->CreatedBy;
        $updateSetup->ChurchId = $setupFormData->ChurchId;

        $saveChurchSetup = $updateSetup->save();

        if($saveChurchSetup){

            return true;

        }else{

            return false;
        }

      

    }
    /**
     * Get all Setups  of The church "Tab Setup"
     * 
     * @return all data
     */
    public static function getAllSetups($churchId){

        $allSetupTab = ChurchSetup::where([

            ['ChurchId', '=', $churchId],
            ['mDelete', '=', 0]

        ])->get();

        if(!empty($allSetupTab) && $allSetupTab->count() > 0){

            return $allSetupTab;

        }else{

            return false;
        }

     
    }
    /**
     * Update Setup information of the Church Setup tab
     * 
     * @return Success Message
     */
    public static function updateChurchSetup($setupUpdateFormData) {
        
        
        $updateSetup = ChurchSetup::find($setupUpdateFormData->ChurchSetupId);

        if($updateSetup) {

            $updateSetup->InternetProvider = $setupUpdateFormData->UpdateInternetProvider;
            $updateSetup->RouterModel = $setupUpdateFormData->UpdateRouterModel;
            $updateSetup->RouterUserName = $setupUpdateFormData->UpdateRouterUserName;
            $updateSetup->RouterPassword = $setupUpdateFormData->UpdateRouterPassword;

            if($setupUpdateFormData->UpdateAerials == 'on') {
                $updateSetup->Aerials = 1;
            }elseif($setupUpdateFormData->UpdateAerials == null){
                $updateSetup->Aerials = 0;
            }
            if($setupUpdateFormData->UpdateSwitch == 'on') {
                $updateSetup->Switch = 1;
            }elseif($setupUpdateFormData->UpdateSwitch == null){
                $updateSetup->Switch = 0;
            }
            if($setupUpdateFormData->UpdateHomePlugs == 'on') {
                $updateSetup->HomePlugs = 1;
            }elseif($setupUpdateFormData->UpdateHomePlugs == null){
                $updateSetup->HomePlugs = 0;
            }
            if($setupUpdateFormData->UpdateDirectWire == 'on') {
                $updateSetup->DirectWire = 1;
            }elseif($setupUpdateFormData->UpdateDirectWire == null){
                $updateSetup->DirectWire = 0;
            }
            
            $updateSetup->UpdatedBy = $setupUpdateFormData->UpdatedBy;            

            $savedUpdatedSetup = $updateSetup->save();

            if($savedUpdatedSetup){

                   return true;

            }else{

                return false;
            }
        }else{

            return false;
        }

    }

    /**
     * Delete the churchSetups Of a church
    * 
    * @return Success Message
    */
 
    public static function destroyChurchSetup($updateSetupId){

        $destroyChurchSetup = ChurchSetup::findorfail($updateSetupId);
        $destroyChurchSetup->mDelete = 1;
        $deleted = $destroyChurchSetup->save();

        if($deleted){

            return true;

        }else{

            return false;
        }
    }

}
