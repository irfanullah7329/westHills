<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
    //
    
    public function index()
    {
         $videos = Video::all();
                        
                
                // return view('admin.about.index');
        return view('admin.video.index',[
            'videos' => $videos
            ]);
    }
     // create about form
     public  function createVideo()
     {
         return view('admin.video.add');
     }
     // store about function
    public function storeVideo(Request $request)
    {     
        
        // dd($request);
         
        try { 
            $this->validate($request,[
                'title'=>'required',
                'video_link'=> 'required'  
             ]);

            $video = $request->all();
       
         Video::create($video);
          
        }catch(\Exception $exception){
             return $exception;          
        }
        return back()
               ->with('message',"New video is saved");	   
    }
    
    // edit form function

    public function editVideo($id)
    {
        
        // dd("here");
        try {
            
            $video = Video::where('id', $id)->first();
            if($video == NULL) {
                return back()
                       ->with('message',"Unable to find video with id:$id");
            }
            
            return view('admin.video.edit',[
                'video' => $video,
               
                ]);
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message',"some exception occurs");
        }
        
    }


    //update video
    
    public function updateVideo($id, Request $request)
    {
          
       try {

            if(!$video = Video::findOrFail($id)) {
                return back()
                       ->with('message',"Unable to find Video Id:",$id);
            }
            
            
            
            $video->update($request->all());
        }catch(\Exception $exception){
            return back()
                   ->with('message','some exception occurs');
        }
        return back()
        ->with('message', "Video with the id: {$video->id} successfully updated.");
    }
      // user delete function
    public function deleteVideo($id)
    {
        $video = Video::findorfail($id);
        
        $video->delete();
        return redirect()->route('admin.video.list')->with('message',  'Video deleted successfully');
    }
}
