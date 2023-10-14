<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Category;
class ServiceController extends Controller
{
    //

    public function index()
    {
        $services = Service::with('category')
                       -> get();

        //   dd($services);     
        return view('admin.service.index',[
           
            'services' => $services
            ]);
    }


    public  function createService()
    {
        $categorys = Category::all();
        return view('admin.service.add',[
            'categorys'=>$categorys
        ]);

    }

    //
     // store Service function
     public function storeService(Request $request)
     {     
            
          
         try { 
 
             
          
             $service = $request->all();
             if($request->has('ImageUrl'))
        {
            $image_Name = time().'.'.request()->ImageUrl->getClientOriginalExtension();
            request()->ImageUrl->move(public_path('images/service_image'), $image_Name);
            $service['image'] = $image_Name;
         }
            //  dd($service);
             $service['category_id'] = $request->category_id;
              Service::create($service);
           
         }catch(\Exception $exception){
              return $exception;          
         }
         return back()
                ->with('message',"New Service is saved");	   
     }
    // about edit function
     public function editService($id)
     {
         
         // dd("here");
         try {
             
             $service = Service::where('id', $id)->first();

             $categorys = Category::all();
             if($service == NULL) {
                 return back()
                        ->with('message',"Unable to find service with id:$id");
             }
             
             return view('admin.service.edit',[
                 'service' => $service,
                 'categorys'=>$categorys
                
                 ]);
         }catch(\Exception $exception){
             return $exception;
             return back()
                    ->with('message',"some exception occurs");
         }
         
     }
     //   update about
 
     public function updateService($id, Request $request)
     {
           
        try {
 
             if(!$service=Service::findOrFail($id)) {
                 return back()
                        ->with('message',"Unable to find Service with This Id:",$id);
             }

             if($request->has('ImageUrl'))
             {
                 if(file_exists(public_path('images/service_image/'.$service->image))){
                     unlink(public_path('images/service_image/'.$service->image));
       }
                 $image_Name = time().'.'.request()->ImageUrl->getClientOriginalExtension();
                 request()->ImageUrl->move(public_path('images/service_image'), $image_Name);
                 $testimonial['image'] = $image_Name;
              }

            
             $service->update($request->all());
         }catch(\Exception $exception){
             return $exception;
             return back()
                    ->with('message','some exception occurs');
         }
         return back()
         ->with('message', "service with the id: {$service->id} successfully updated.");
     }
     //
     // about delete function
     public function deleteService($id)
     {
         $service = Service::findorfail($id);
       //   $staff->mDelete = 1;
         $service->delete();
         return redirect()->route('admin.service.list')->with('message',  'service deleted successfully');
     }
     
     public function getService()
    {
        $services = Service::with('category')
                       -> get();

        //   dd($services);     
        return view('service',[
           
            'services' => $services
            ]);
    }
}
