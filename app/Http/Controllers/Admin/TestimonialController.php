<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
class TestimonialController extends Controller
{
    //
    //
    public function index()
    {
        $testimonials = Testimonial::all();
                        
        return view('admin.testimonial.index',[
           
            'testimonials' => $testimonials
            ]);
    }
    //
    public  function createTestimonial()
    {
        return view('admin.testimonial.add');
    }
    //
    public function storeTestimonial(Request $request)
    {     
         
        
         
        try { 

            $testimonial = $request->all();
            // dd($testimonial);
         if($request->has('ImageUrl'))
        {
            $image_Name = time().'.'.request()->ImageUrl->getClientOriginalExtension();
            request()->ImageUrl->move(public_path('images/testimonial_image'), $image_Name);
            $testimonial['image'] = $image_Name;
         }
           
        Testimonial::create($testimonial);
          
        }catch(\Exception $exception){
             return $exception;          
        }
        return back()
               ->with('message',"New testinomail is saved");	   
    }

    // edit team
    public function editTestimonial($id)
    {
        
        // dd("here");
        try {

            $testimonial = Testimonial::where('id', $id)->first();
            if($testimonial == NULL) {
                return back()
                       ->with('message',"Unable to find staff with id:$id");
            }
            
            return view('admin.testimonial.edit',[
                'testimonial' => $testimonial,
               
                ]);
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message',"some exception occurs");
        }
        
    }
    // update team
    public function updateTestimonial($id, Request $request)
    {
          
       try {

            if(!$testimonial =Testimonial::findOrFail($id)) {
                return back()
                       ->with('message',"Unable to find Team with This Id:",$id);
            }
            if($request->has('ImageUrl'))
            {
                if(file_exists(public_path('images/testimonial_image/'.$testimonial->image))){
                    unlink(public_path('images/testimonial_image/'.$testimonial->image));
      }
                $image_Name = time().'.'.request()->ImageUrl->getClientOriginalExtension();
                request()->ImageUrl->move(public_path('images/testimonial_image'), $image_Name);
                $testimonial['image'] = $image_Name;
             }
            $testimonial->update($request->all());
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message','some exception occurs');
        }
        return back()
        ->with('message', "Testimonial with the id: {$testimonial->id} successfully updated.");
    }

     // team delete function
     public function deleteTestimonial($id)
     {
        $testimonial = Testimonial::findorfail($id);
       //   $staff->mDelete = 1;
       $testimonial->delete();
         return redirect()->route('admin.testimonial.list')->with('message',  'Testomonial deleted successfully');
     }

}
