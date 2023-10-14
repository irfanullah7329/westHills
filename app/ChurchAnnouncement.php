<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChurchAnnouncement extends Model
{
    
    // Table mapping
    protected $table = "tblchurch_announcement";

    // Primary key Mapping
    protected $primaryKey = "ChurchAnnouncementId";

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
    
    protected $guarded = [];

    public function church(){

        return $this->belongsTO(Church::class, 'ChurchId');
    }

    /**
     *  Add setup Tab of a Announcement
     * 
     * @return true for success
     * 
     */
    public static function addChurchAnnouncement($announcementFormData) {

        $addAnnouncement = new ChurchAnnouncement;
        $addAnnouncement->AnnouncementTitle = $announcementFormData->AnnouncementTitle;
        $addAnnouncement->Announcement = $announcementFormData->Announcement;
        
        $addAnnouncement->CreatedBy = $announcementFormData->CreatedBy;
        $addAnnouncement->ChurchId = $announcementFormData->ChurchId;

        $saveChurchAnnouncement = $addAnnouncement->save();

        if($saveChurchAnnouncement){

            return true;

        }else{

            return false;
        }

      

    }
    /**
     * Get all Announcements  of The church "Tab Announcement"
     * 
     * @return all data
     */
    public static function getAllAnnouncements($churchId){

        $allAnnouncementTab = ChurchAnnouncement::where([

            ['ChurchId', '=', $churchId],
            ['mDelete', '=', 0]

        ])->get();

        if(!empty($allAnnouncementTab) && $allAnnouncementTab->count() > 0){

            return $allAnnouncementTab;

        }else{

            return false;
        }

     
    }
    /**
     * Update Announcement information of the Church Announcement tab
     * 
     * @return Success Message
     */
    public static function updateChurchAnnouncement($announcementUpdateFormdata) {
        
        
        $updateAnnouncement = ChurchAnnouncement::find($announcementUpdateFormdata->ChurchAnnouncementId);

        if($updateAnnouncement) {

            $updateAnnouncement->AnnouncementTitle = $announcementUpdateFormdata->UpdateAnnouncementTitle;
            $updateAnnouncement->Announcement = $announcementUpdateFormdata->UpdateAnnouncement;
            
            $updateAnnouncement->UpdatedBy = $announcementUpdateFormdata->UpdatedBy;            

            $savedUpdatedAnnouncement = $updateAnnouncement->save();

            if($savedUpdatedAnnouncement){

                   return true;

            }else{

                return false;
            }
        }else{

            return false;
        }

    }

    /**
     * Delete the churchAnnouncement Of a church
    * 
    * @return Success Message
    */
 
    public static function destroyChurchAnnouncement($updateAnnouncementId){

        $destroyChurchAnnouncement = ChurchAnnouncement::findorfail($updateAnnouncementId);
        $destroyChurchAnnouncement->mDelete = 1;
        $deleted = $destroyChurchAnnouncement->save();

        if($deleted){

            return true;

        }else{

            return false;
        }
    }
}
