<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ChurchRequest;

use App\Church;
use App\ClientType;
use App\ChurchMedia;
use App\ChurchSetup;
use App\ChurchNotice;
use App\ChurchAnnouncement;
use App\Server;
use App\Camera;
use App\User;


class ChurchController extends Controller
{

    protected $allClientTypes;

    protected $mainChurchesView = "admin.churches.";

    /**
     * __construct
     *
     * mixed $allRoles
     *
     * @return void
     */
    public function __construct(){

        $this->allClientTypes = ClientType::all();
    }
    
    /**
     * 
     * index 
     * 
     * @return Void
     */
    public function index()
    {
        $churches = Church::all();
        return view($this->mainChurchesView.'index',[
            'churches' => $churches
        ]);
    }

    /**
     * addChurch
     * 
     * @return void
     */ 
    public function addChurch()
    {

        return view($this->mainChurchesView.'add',[

            'clientTypes' => $this->allClientTypes
        ]);

    }

    /**
     * storeChurch
     * 
     * @return Success Message
     */
    public function storeChurch(ChurchRequest $request)
    {
       
        try { 

            $churches = new Church();
            $now = strtotime('now');
            $church = $request->all();
            $church['Password'] = Hash::make($request->Password);
            $church['UniqueIdentifier'] = sha1(strtotime('now'));
            $church['UniqueChurchId'] = sha1($now);
            $church['Slug'] = $churches->slugOfChurch($request->ChurchName);
            if($request->hasFile('ImageUrl')) {
                $church['ImageUrl'] = $request->file('ImageUrl')->store("churches_images");
            }

            $church['Blurb'] = "blurb from input not defined yet";
            $church['Notice'] = "notice from input not defined yet";
            $church['Switch'] = 1;
            $church_saved = Church::create($church);
            return redirect()
                   ->route($this->mainChurchesView.'edit',['church'=>$church_saved->ChurchId])
                   ->with('message','New church is saved');

        }catch(\Exception $exception){
            return back()
                  ->with('message',$exception->getMessage());
                 
        }
        return back()
               ->with('message',"New church is saved");
        
    }

    /**
     * editChurch
     * 
     * @return Success Message
     */
    public function editChurch(Church $church)
    {
        return view($this->mainChurchesView.'edit',[
            'church' => $church,
            'clientTypes' => $this->allClientTypes
            ]
        );

    }
    /**
     * updateChurch
     * 
     * @return Success Message
     */
    public function updateChurch($id, Request $request)
    {
        $church = Church::findorfail($id);
        $church->ChurchName = $request->ChurchName;
        $church->Address = $request->Address;
        $church->Town = $request->Town;
        $church->Website = $request->Website;
        $church->EmailAddress = $request->EmailAddress;
        $church->Phone = $request->Phone;
        $church->ClientTypeId = $request->ClientTypeId;
        $church->CountyId = $request->CountyId;
        $church->UpdatedBy = $request->UpdatedBy;
        if($request->hasFile('ImageUrl')) {

            if(isset($request->OldImageUrl)) { 
                Storage::disk('public')->delete($request->OldImageUrl);
            }
            $church->ImageUrl = $request->file('ImageUrl')->store("churches_images");
        }
        if(!empty($request->Password)) {
            $church->Password = bcrypt($request->Password);
        }
        $church->save();
        return redirect()
               ->route($this->mainChurchesView.'edit',['church'=>$id])
               ->with('message', 'church information updated successfully');

    }

    /**
     * Soft Delete
     * 
     * @return Success Message
     */ 
    public function deleteChurch($id)
    {
        
        $church = Church::findorfail($id);
        $church->mDelete = 1;
        $church->save();

        return redirect()
               ->route($this->mainChurchesView.'list')
               ->with('message', 'Church deleted successfully');

    }

    /**
     * Note: All Axios Functions are registered and implemented here
     * 
     * axiosAddcamera
     * 
     * Recieved Form data
     * 
     * @return Suucess Message
     */
    public function axiosAddCamera(Request $request) {

        $addCamera = Camera::addCamera($request);
        if($addCamera) {
            return response()->json([
                'message' => 'Camera Added Succesfully'
            ]);
        }else{
            return response()->json([
                'message' => 'Camera not added. Plz try again'
            ]);
        }
         
    }
    /**
     * axios Get Servers
     * 
     * @return array All servers
     */
    public function axiosGetServers() {

        return response()->json([
            'servers'=>Server::getAllServers()
        ]);
    }
    /**
     * axios Get Cameras of the Church
     * 
     * @return array All related Cameras of the church
     */
    public function axiosGetCamerasOfTheChurch($churchId) {

        $churchCameras = Camera::getAllCameraByChurchId($churchId);

        return response()->json([

            'churchCameras'=> $churchCameras
        ]);

    }

    /**
     * axios update church camera
     * 
     * @return success Message
     */
     public function axiosUpdateCameraOfTheChurch(Request $request, $cameraId){
        
        
        $churchCameraUpdated = Camera::updateChurchCamera($request,$cameraId);
        
        if($churchCameraUpdated) {

            return response()->json([
                'message'=> 'Camera Updated Successfully'
            ]);
            
        }else{

            return response()->json([
                'message' => 'Camera not updated. Plz try again'
            ]);
       }

    }

    /**
     * axios Delte camera of the church
     * 
     * @return Success Message
     */
    public function axiosDeleteCameraOfTheChurch($cameraId){

        $churchCameraDestroy = Camera::destroyCameraOfTheChurch($cameraId);
        if($churchCameraDestroy) {

            return response()->json([
                'message'=>"camera delted succesfully"
            ]);
        }else{
            return response()->json([
                'message'=>"camera not delted something went wrong"
            ]);

        }
    }
    /**
     * Note: All Ajax Functions are registered and implemented here
     * Add picture to church addChurchPicture
     * Ajax Request
     * @return Success Message
     */

    public function addChurchTabPicture(Request $request){

        $savePictureTabImage = ChurchMedia::addMediaPicture($request);
        if($savePictureTabImage){

            return response()->json([

                "message"=> 'success'
            ]);

        }else{
           
            return response()->json([

                "message"=> 'failed'
            ]);
         
        }
    }
    /**
     * Get all Picture Tab of church By Id
     * 
     * @return all data
     */
    public function getAllTabPicturesImages($churchId){
        
        $allTabPicturesImages = ChurchMedia::getMediaPictures($churchId);
       
        if($allTabPicturesImages == false) {

            return response()->json([

                "allTabPictureImages" => 'no-data'
            ]);

        }else{

            return response()->json([

                "allTabPictureImages" => $allTabPicturesImages
            ]);
        }
    }

    /**
     * Update the Tab Picture image
     * 
     * @return Success Message
     */

    public function updateChurchTabPicture(Request $request){
       
        
        /*return response()->json([

            "message" => 'success',
            "chid" => $request->ChurchMediaId
        ]);*/
        $updatePictureTabImage = ChurchMedia::updateMediaPicture($request);

        if( $updatePictureTabImage) {

            return response()->json([

                "message" => 'success',
                "chid" => $request->tab_picture_image // for testing purpose
            ]);
        }else{

            return response()->json([

                "message" => 'failed'
                
            ]);
        }

    }
    /**
     * Delete Picture of the church
     * 
     * @return Success Message
     */
    public function deleteChurchTabPicture($churchMediaId){

        $churchPictureTabImageDestroy = ChurchMedia::destroyChurchMedia($churchMediaId);
        if($churchPictureTabImageDestroy) {

            return response()->json([
                'message'=>"success"
            ]);
        }else{
            return response()->json([

                'message'=>"failed"
            ]);

        }
    }

    
     /**
     * Add slideshow to church addChurchTabSlideShow
     * Ajax Request
     * @return Success Message
     */

    public function addChurchTabSlideShow(Request $request){

        $saveSlideShowTabImage = ChurchMedia::addMediaSlideShow($request);
        if($saveSlideShowTabImage){

            return response()->json([

                "message"=> 'success'
            ]);

        }else{
           
            return response()->json([

                "message"=> 'failed'
            ]);
         
        }
    }
    /**
     * Get all SLideshow Tab of church By Id
     * 
     * @return all data
     */
    public function getAllTabSlideShowImages($churchId){
        
        $allTabSlideShowImages = ChurchMedia::getMediaSlideShow($churchId);
       
        if($allTabSlideShowImages == false) {

            return response()->json([

                "allTabSlideShowImages" => 'no-data'
            ]);

        }else{

            return response()->json([

                "allTabSlideShowImages" => $allTabSlideShowImages
            ]);
        }
    }

    /**
     * Update the Tab SLideShow image
     * 
     * @return Success Message
     */

    public function updateChurchTabSlideShow(Request $request){
       
        $updateSlideShowTabImage = ChurchMedia::updateMediaSlideShow($request);

        if($updateSlideShowTabImage) {

            return response()->json([

                "message" => 'success'
            ]);
        }else{

            return response()->json([

                "message" => 'failed'
                
            ]);
        }

    }
    /**
     * Delete SLideshow of the church
     * 
     * @return Success Message
     */
    public function deleteChurchTabSlideShow($churchMediaId){

        $churchSlideShowTabImageDestroy = ChurchMedia::destroyChurchMedia($churchMediaId);
        if($churchSlideShowTabImageDestroy) {

            return response()->json([

                'message'=>"success"
            ]);
        }else{
            return response()->json([

                'message'=>"failed"
            ]);

        }
    }
    // SlideShow End

    // Video Start

    /**
     * Add Video to church addChurchTabVideo
     * Ajax Request
     * @return Success Message
     */

    public function addChurchTabVideo(Request $request){

        $saveVideoTabImage = ChurchMedia::addMediaVideo($request);
        if($saveVideoTabImage){

            return response()->json([

                "message"=> 'success'
            ]);

        }else{
           
            return response()->json([

                "message"=> 'failed'
            ]);
         
        }
    }
    /**
     * Get all Video Tab of church By Id
     * 
     * @return all data
     */
    public function getAllTabVideoFiles($churchId){
        
        $allTabVideoFiles = ChurchMedia::getMediaVideo($churchId);
       
        if($allTabVideoFiles == false) {

            return response()->json([

                "allTabVideoFiles" => 'no-data'
            ]);

        }else{

            return response()->json([

                "allTabVideoFiles" => $allTabVideoFiles
            ]);
        }
    }

    /**
     * Update the Tab Video image
     * 
     * @return Success Message
     */

    public function updateChurchTabVideo(Request $request){
       
        $updateVideoTabFile = ChurchMedia::updateMediaVideo($request);

        if($updateVideoTabFile) {

            return response()->json([

                "message" => 'success'
            ]);
        }else{

            return response()->json([

                "message" => 'failed'
                
            ]);
        }

    }
    /**
     * Delete Video of the church
     * 
     * @return Success Message
     */
    public function deleteChurchTabVideo($churchMediaId){

        $churchVideoTabFileDestroy = ChurchMedia::destroyChurchMedia($churchMediaId);
        if($churchVideoTabFileDestroy) {

            return response()->json([

                'message'=>"success"
            ]);
        }else{
            return response()->json([

                'message'=>"failed"
            ]);

        }
    }

    // Video End

    // Setup Start
    /**
     * Add Setup inforamtion to church addChurchTabSetup
     * Ajax Request
     * @return Success Message
     */

    public function addChurchTabSetup(Request $request){
        
        $saveSetupTab = ChurchSetup::addChurchSetup($request);
        if($saveSetupTab){

            return response()->json([

                "message"=> 'success'
            ]);

        }else{
           
            return response()->json([

                "message"=> 'failed'
            ]);
         
        }
    }
    /**
     * Get all Setups Tab of church By Id
     * 
     * @return all data
     */
    public function getAllTabSetups($churchId){
        
        $allTabSetup = ChurchSetup::getAllSetups($churchId);
       
        if($allTabSetup == false) {

            return response()->json([

                "allTabSetup" => 'no-data'
            ]);

        }else{

            return response()->json([

                "allTabSetup" => $allTabSetup
            ]);
        }
    }

    /**
     * Update the Tab Setup information
     * 
     * @return Success Message
     */

    public function updateChurchTabSetup(Request $request){

        $updateSetup = ChurchSetup::updateChurchSetup($request);

        if($updateSetup) {

            return response()->json([

                "message" => 'success'
            ]);
        }else{

            return response()->json([

                "message" => 'failed'
                
            ]);
        }

    }
    /**
     * Delete single Setup of the church
     * 
     * @return Success Message
     */
    public function deleteChurchTabSetup($churchSetupId){

        $churchSetupDestroy = ChurchSetup::destroyChurchSetup($churchSetupId);
        if($churchSetupDestroy) {

            return response()->json([

                'message'=>"success"
            ]);
        }else{
            return response()->json([

                'message'=>"failed"
            ]);

        }
    }

    // Setup End

    // Notice Start
    /**
     * Add Notice inforamtion to church addChurchTabNotice
     * Ajax Request
     * @return Success Message
     */

    public function addChurchTabNotice(Request $request){
        
        $saveNoticeTab = ChurchNotice::addChurchNotice($request);
        if($saveNoticeTab){

            return response()->json([

                "message"=> 'success'
            ]);

        }else{
           
            return response()->json([

                "message"=> 'failed'
            ]);
         
        }
    }
    /**
     * Get all Notices Tab of church By Id
     * 
     * @return all data
     */
    public function getAllTabNotices($churchId){
        
        $allTabNotice = ChurchNotice::getAllNotices($churchId);
       
        if($allTabNotice == false) {

            return response()->json([

                "allTabNotice" => 'no-data'
            ]);

        }else{

            return response()->json([

                "allTabNotice" => $allTabNotice
            ]);
        }
    }

    /**
     * Update the Tab Notice information
     * 
     * @return Success Message
     */

    public function updateChurchTabNotice(Request $request){

        $updateNotice = ChurchNotice::updateChurchNotice($request);

        if($updateNotice) {

            return response()->json([

                "message" => 'success'
            ]);
        }else{

            return response()->json([

                "message" => 'failed'
                
            ]);
        }

    }
    /**
     * Delete single Notice of the church
     * 
     * @return Success Message
     */
    public function deleteChurchTabNotice($churchNoticeId){

        $churchNoticeDestroy = ChurchNotice::destroyChurchNotice($churchNoticeId);
        if($churchNoticeDestroy) {

            return response()->json([

                'message'=>"success"
            ]);
        }else{
            return response()->json([

                'message'=>"failed"
            ]);

        }
    }

    // Notice End

    // Announcement Start
    /**
     * Add Announcement inforamtion to church addChurchTabAnnouncement
     * Ajax Request
     * @return Success Message
     */

    public function addChurchTabAnnouncement(Request $request){
        
        $saveAnnouncementTab = ChurchAnnouncement::addChurchAnnouncement($request);
        if($saveAnnouncementTab){

            return response()->json([

                "message"=> 'success'
            ]);

        }else{
           
            return response()->json([

                "message"=> 'failed'
            ]);
         
        }
    }
    /**
     * Get all Announcements Tab of church By Id
     * 
     * @return all data
     */
    public function getAllTabAnnouncements($churchId){
        
        $allTabAnnouncements = ChurchAnnouncement::getAllAnnouncements($churchId);
       
        if($allTabAnnouncements == false) {

            return response()->json([

                "allTabAnnouncements" => 'no-data'
            ]);

        }else{

            return response()->json([

                "allTabAnnouncements" => $allTabAnnouncements
            ]);
        }
    }

    /**
     * Update the Tab Announcements information
     * 
     * @return Success Message
     */

    public function updateChurchTabAnnouncement(Request $request){

        $updateAnnouncement = ChurchAnnouncement::updateChurchAnnouncement($request);

        if($updateAnnouncement) {

            return response()->json([

                "message" => 'success'
            ]);
        }else{

            return response()->json([

                "message" => 'failed'
                
            ]);
        }

    }
    /**
     * Delete single Announcement of the church
     * 
     * @return Success Message
     */
    public function deleteChurchTabAnnouncement($churchAnnouncementId){

        $churchAnnouncementDestroy = ChurchAnnouncement::destroyChurchAnnouncement($churchAnnouncementId);
        if($churchAnnouncementDestroy) {

            return response()->json([

                'message'=>"success"
            ]);
        }else{
            return response()->json([

                'message'=>"failed"
            ]);

        }
    }

    // Announcement End

    
    
   
}