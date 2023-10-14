<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    //

    public function index()
    {
         $abouts = About::all();
                        
                
                // return view('admin.about.index');
        return view('admin.about.index',[
            'abouts' => $abouts
            ]);
    }


    // create about form
    public  function createAbout()
    {
        return view('admin.about.add');
    }

    // store about function
    public function storeAbout(Request $request)
    {     
       
         
        try { 

            $this->validate($request,[

                'title'=>'required',
                'description'=> 'required'
             ]);

            $about = $request->all();
       
         About::create($about);
          
        }catch(\Exception $exception){
             return $exception;          
        }
        return back()
               ->with('message',"New About is saved");	   
    }
   // about edit function
    public function editAbout($id)
    {
        
        // dd("here");
        try {
            
            $about = About::where('id', $id)->first();
            if($about == NULL) {
                return back()
                       ->with('message',"Unable to find About with id:$id");
            }
            
            return view('admin.about.edit',[
                'about' => $about,
               
                ]);
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message',"some exception occurs");
        }
        
    }
    //   update about

    public function updateAbout($id, Request $request)
    {
          
       try {

            if(!$about=About::findOrFail($id)) {
                return back()
                       ->with('message',"Unable to find About with This Id:",$id);
            }
           
            $about->update($request->all());
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message','some exception occurs');
        }
        return back()
        ->with('message', "About with the id: {$about->id} successfully updated.");
    }
    //
    // about delete function
    public function deleteAbout($id)
    {
        $about = About::findorfail($id);
      //   $staff->mDelete = 1;
        $about->delete();
        return redirect()->route('admin.about.list')->with('message',  'about deleted successfully');
    }


   
}