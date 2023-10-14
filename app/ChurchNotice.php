<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChurchNotice extends Model
{
    // Table mapping
    protected $table = 'tblchurch_notices';

    // Priamrykey mapping
    protected $primaryKey = 'ChurchNoticeId';

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

    public function church(){

        return $this->belongsTo(Church::class,'ChurchId');
    }

    /**
     *  Add setup Tab of a Notice
     * 
     * @return true for success
     * 
     */
    public static function addChurchNotice($noticeFormData) {

        $addNotice = new ChurchNotice;
        $addNotice->NoticeTitle = $noticeFormData->NoticeTitle;
        $addNotice->Notice = $noticeFormData->Notice;
        
        $addNotice->CreatedBy = $noticeFormData->CreatedBy;
        $addNotice->ChurchId = $noticeFormData->ChurchId;

        $saveChurchNotice = $addNotice->save();

        if($saveChurchNotice){

            return true;

        }else{

            return false;
        }

      

    }
    /**
     * Get all Notices  of The church "Tab Notice"
     * 
     * @return all data
     */
    public static function getAllNotices($churchId){

        $allNoticeTab = ChurchNotice::where([

            ['ChurchId', '=', $churchId],
            ['mDelete', '=', 0]

        ])->get();

        if(!empty($allNoticeTab) && $allNoticeTab->count() > 0){

            return $allNoticeTab;

        }else{

            return false;
        }

     
    }
    /**
     * Update Notice information of the Church Notice tab
     * 
     * @return Success Message
     */
    public static function updateChurchNotice($noticeUpdateFormData) {
        
        
        $updateNotice = ChurchNotice::find($noticeUpdateFormData->ChurchNoticeId);

        if($updateNotice) {

            $updateNotice->NoticeTitle = $noticeUpdateFormData->UpdateNoticeTitle;
            $updateNotice->Notice = $noticeUpdateFormData->UpdateNotice;
            
            $updateNotice->UpdatedBy = $noticeUpdateFormData->UpdatedBy;            

            $savedUpdatedNotice = $updateNotice->save();

            if($savedUpdatedNotice){

                   return true;

            }else{

                return false;
            }
        }else{

            return false;
        }

    }

    /**
     * Delete the churchNotices Of a church
    * 
    * @return Success Message
    */
 
    public static function destroyChurchNotice($updateNoticeId){

        $destroyChurchNotice = ChurchNotice::findorfail($updateNoticeId);
        $destroyChurchNotice->mDelete = 1;
        $deleted = $destroyChurchNotice->save();

        if($deleted){

            return true;

        }else{

            return false;
        }
    }
}
