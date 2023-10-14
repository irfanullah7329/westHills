<?php

namespace App\Http\Controllers\admin;
use App\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    /**
     * 
     * index 
     * 
     * @return Void
     */
    public function index()
    {
        $sliders = Slider::all();
                       //->('isActive',NULL)
                       //-> orwhere('isActive',1)
                       //-> orwhere('isActive',0)
                       //-> orwhere('mDelete',0)
                    //    -> get();

                //  dd($sliders);     
        return view('admin.slider.index',[
           
            'sliders' => $sliders
            ]);
    }

    public  function createSlider()
    {
        return view('admin.slider.add');
    }

    /**
     * storeSlider
     * 
     * @return Success Message
     */
  
    public function storeSlider(Request $request)
    {     
       
         
        try { 

            $slider = $request->all();
                                // dd($slider);
            // if($request->hasFile('ImageUrl')) {
            //     $slider['imageUrl'] = $request->file('ImageUrl')->store("slider_image");
            // }
         if($request->has('ImageUrl'))
        {
            $image_Name = time().'.'.request()->ImageUrl->getClientOriginalExtension();
            request()->ImageUrl->move(public_path('images/slider_image'), $image_Name);
            $slider['imageUrl'] = $image_Name;
         }
           
        //  dd($slider['imageUrl']);
         Slider::create($slider);
          
        }catch(\Exception $exception){
             return $exception;          
        }
        return back()
               ->with('message',"New Slider is saved");	   
    }
        //
    /**
     * editSlider
     * 
     * @return param $id
     */
    public function editSlider($id)
    {
        
        // dd("here");
        try {

            $sliders = Slider::where('id', $id)->first();
            if($sliders == NULL) {
                return back()
                       ->with('message',"Unable to find Slider with id:$id");
            }
            
            return view('admin.slider.edit',[
                'slider' => $sliders,
               
                ]);
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message',"some exception occurs");
        }
        
    }

    
       /**
     * updateSlider
     * 
     * @return param $id
     */
    public function updateSlider($id, Request $request)
    {
          
       try {

            if(!$slider =Slider::findOrFail($id)) {
                return back()
                       ->with('message',"Unable to find Staff with This Id:",$id);
            }

            if($request->has('imageUrl'))
            {
                $image_Name = time().'.'.request()->imageUrl->getClientOriginalExtension();
                request()->imageUrl->move(public_path('images/slider_image'), $image_Name);
                $slider['imageUrl'] = $image_Name;
             }
           
            $slider->update($request->all());
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message','some exception occurs');
        }
        return back()
        ->with('message', "Slider with the id: {$slider->id} successfully updated.");
    }

      // staff delete function
      public function deleteSlider($id)
      {
          $slider = Slider::findorfail($id);
        //   $staff->mDelete = 1;
          $slider->delete();
          return redirect()->route('admin.slider.list')->with('message',  'slider deleted successfully');
      }

}
