<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ChurchMedia extends Model
{
    
    
    // Table Name Mapping
    protected $table = 'tblchurchmedia';

    // Primary Key mapping
    protected $primaryKey = 'ChurchMediaId';

    // CreatedAt filed mapping
    const CREATED_AT = 'CreatedAt';

    // UpdatedAt Field Mapping
    const UPDATED_AT = 'UpdatedAt';

    protected $guarded = [];

    public function church() {

        return $this->belongsTo(Church::class, 'ChurchId');
    }

    /**
     * get Church ImageUrl
     * 
     * @attribute string
     * 
     */
    public function getPictureTabImage($value){

        return asset('storage/' . $value);
    }
    
    /**
     *  Add Picture Tab of a Church
     * 
     * @return true for success
     * 
     */
    public static function addMediaPicture($SlideShowFormData) {

        if($SlideShowFormData->hasFile('tab_picture_image')) {
           $tabPicture = $SlideShowFormData->file('tab_picture_image')->store("churches_picture_tab_images");
        }else{
            $tabPicture = "";
        }

        $churchMedia = new ChurchMedia;
        $churchMedia->TabName = $SlideShowFormData->tabname;
        $churchMedia->MediaType = "picture";
        $churchMedia->MediaURL = $tabPicture;
        $churchMedia->CreatedBy = $SlideShowFormData->CreatedBy;
        $churchMedia->ChurchId = $SlideShowFormData->ChurchId;

        $saveChurchMedia = $churchMedia->save();

        if($saveChurchMedia){

            return true;

        }else{

            return false;
        }

      

    }
    /**
     * Get all Images of The church "Tab Picture"
     * 
     * @return all data
     */
    public static function getMediaPictures($churchId){

        $allTabPicturesImages = ChurchMedia::where([

            ['ChurchId', '=', $churchId],
            ['MediaType', '=','picture'],
            ['mDelete', '=', 0]

        ])->get();

        if(!empty($allTabPicturesImages) && $allTabPicturesImages->count() > 0){

            return $allTabPicturesImages;

        }else{

            return false;
        }

     
    }
    /**
     * Update image of the Church Picture tab
     * 
     * @return Success Message
     */
    public static function updateMediaPicture($pictureUpdateFormData) {
        
       // $pictureUpdateFormData->file('updatetab_picture_image')->getClientOriginalName(); // File Original name
        
        $updateImage = ChurchMedia::find($pictureUpdateFormData->ChurchMediaId);

        if($updateImage) {

            $updateImage->Tabname = $pictureUpdateFormData->updatetabname;
            if($pictureUpdateFormData->hasFile('updatetab_picture_image')) {
                // Delete the old image if it is exist
                if(isset($pictureUpdateFormData->OldPictureTabImageUrl)) { 
                    Storage::disk('public')->delete($pictureUpdateFormData->OldPictureTabImageUrl);
                }
                $updateImage->MediaURL = $pictureUpdateFormData->file('updatetab_picture_image')->store("churches_picture_tab_images");
            }

            $savedUpdatedPictureMedia = $updateImage->save();

            if($savedUpdatedPictureMedia){

                   return true;

            }else{

                return false;
            }
        }else{

            return false;
        }

    }

    /******  Slide Show Section ****/

    /**
     *  Add SlideSHow Tab of a Church
     * 
     * @return true for success
     * 
     */
    public static function addMediaSlideShow($SlideShowFormData) {

        if($SlideShowFormData->hasFile('tab_slideshow_image')) {
           $tabSlideshowImage = $SlideShowFormData->file('tab_slideshow_image')->store("churches_slideshow_tab_images");
        }else{
            $tabSlideshowImage = "";
        }

        $churchMedia = new ChurchMedia;
        $churchMedia->TabName = $SlideShowFormData->slideshowtabname;
        $churchMedia->MediaType = "slideshow";
        $churchMedia->MediaURL = $tabSlideshowImage;
        $churchMedia->CreatedBy = $SlideShowFormData->CreatedBy;
        $churchMedia->ChurchId = $SlideShowFormData->ChurchId;

        $saveChurchMedia = $churchMedia->save();

        if($saveChurchMedia){

            return true;

        }else{

            return false;
        }

      

    }
    /**
     * Get all Images of The church "Tab Picture"
     * 
     * @return all data
     */
    public static function getMediaSlideShow($churchId){

        $allTabSLideShowImages = ChurchMedia::where([

            ['ChurchId', '=', $churchId],
            ['MediaType', '=','slideshow'],
            ['mDelete', '=', 0]

        ])->get();

        if(!empty($allTabSLideShowImages) && $allTabSLideShowImages->count() > 0){

            return $allTabSLideShowImages;

        }else{

            return false;
        }

     
    }

    /**
     * Update image of the Church SLideShow tab
     * 
     * @return Success Message
     */
    public static function updateMediaSlideShow($slideShowUpdateFormData) {
        
        // $slideShowUpdateFormData->file('updatetab_picture_image')->getClientOriginalName(); // File Original name
         
        $updateImage = ChurchMedia::find($slideShowUpdateFormData->ChurchMediaId);
 
        if($updateImage) {
 
            $updateImage->Tabname = $slideShowUpdateFormData->updateSlideShowTabName;
            if($slideShowUpdateFormData->hasFile('updateSlideShowImage')) {
                 // Delete the old image if it is exist
                if(isset($slideShowUpdateFormData->oldSlideShowTabImageUrl)) { 
                    Storage::disk('public')->delete($slideShowUpdateFormData->oldSlideShowTabImageUrl);
                }
                $updateImage->MediaURL = $slideShowUpdateFormData->file('updateSlideShowImage')->store("churches_slideshow_tab_images");
            }
 
            $savedUpdatedSlideShoweMedia = $updateImage->save();
 
            if($savedUpdatedSlideShoweMedia){
 
                return true;
 
            }else{
 
                 return false;
            }
        }else{
 
             return false;
        }
 
    }
    
    /**   Slide Show Section End */

    /**   Video Section Start */

    /**
     *  Add Video Tab of a Church
     * 
     * @return true for success
     * 
     */
    public static function addMediaVideo($videoFormData) {

        if($videoFormData->hasFile('tab_video_file')) {
           $tabVideoFile = $videoFormData->file('tab_video_file')->store("churches_videos_tab_files");
        }else{
            $tabVideoFile = "";
        }

        $churchMedia = new ChurchMedia;
        $churchMedia->TabName = $videoFormData->videotabname;
        $churchMedia->MediaType = "video";
        $churchMedia->MediaURL = $tabVideoFile;
        $churchMedia->CreatedBy = $videoFormData->CreatedBy;
        $churchMedia->ChurchId = $videoFormData->ChurchId;

        $saveChurchMedia = $churchMedia->save();

        if($saveChurchMedia){

            return true;

        }else{

            return false;
        }

      

    }
    /**
     * Get all Images of The church "Tab Video"
     * 
     * @return all data
     */
    public static function getMediaVideo($churchId){

        $allTabVideoFiles = ChurchMedia::where([

            ['ChurchId', '=', $churchId],
            ['MediaType', '=','video'],
            ['mDelete', '=', 0]

        ])->get();

        if(!empty($allTabVideoFiles) && $allTabVideoFiles->count() > 0){

            return $allTabVideoFiles;

        }else{

            return false;
        }

     
    }

    /**
     * Update Filee of the Church Video tab
     * 
     * @return Success Message
     */
    public static function updateMediaVideo($videoUpdateFormData) {
        
         
        $updateFile = ChurchMedia::find($videoUpdateFormData->ChurchMediaId);
 
        if($updateFile) {
 
            $updateFile->Tabname = $videoUpdateFormData->updateVideoTabName;
            if($videoUpdateFormData->hasFile('updateVideoFile')) {
                 // Delete the old file if it is exist
                if(isset($videoUpdateFormData->oldVideoTabFile)) { 
                    Storage::disk('public')->delete($videoUpdateFormData->oldVideoTabFile);
                }
                $updateFile->MediaURL = $videoUpdateFormData->file('updateVideoFile')->store("churches_videos_tab_files");
            }
 
            $savedUpdatedVideoeMedia = $updateFile->save();
 
            if($savedUpdatedVideoeMedia){
 
                return true;
 
            }else{
 
                 return false;
            }
        }else{
 
             return false;
        }
 
    }
/**   Video Section End */

    // Delet opration of ChurchMedia
    /**
     * Delete the churchMedias Of a church
    * 
    * @return Success Message
    */
 
    public static function destroyChurchMedia($churchMediaId){

        $destroyChurchMedia = ChurchMedia::findorfail($churchMediaId);
        $destroyChurchMedia->mDelete = 1;
        $deleted = $destroyChurchMedia->save();

        if($deleted){

            return true;

        }else{

            return false;
        }
    }
}
