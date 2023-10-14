<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staff;
class StaffController extends Controller
{
    //
     protected $mainStaffView = "admin.staff";

 /**
     * 
     * index 
     * 
     * @return Void
     */
    public function index()
    {
        $staff = Staff::where('status','1')
                       //->('isActive',NULL)
                       //-> orwhere('isActive',1)
                       //-> orwhere('isActive',0)
                       //-> orwhere('mDelete',0)
                       -> get();

                // dd($recordings);     
        return view('admin.staff.index',[
           
            'staffs' => $staff
            ]);
    }


    public  function createStaff()
    {
        return view('admin.staff.add');
    }

    /**
     * storeStaff
     * 
     * @return Success Message
     */
  
    public function storeStaff(Request $request)
    {     
       
         
        try { 

            $staff = $request->all();
         if($request->has('staff_image'))
        {
            $image_Name = time().'.'.request()->staff_image->getClientOriginalExtension();
            request()->staff_image->move(public_path('images/staff_image'), $image_Name);
            $staff['imageUrl'] = $image_Name;
         }
           dd($staff);
            Staff::create($staff);
          
        }catch(\Exception $exception){
             return $exception;          
        }
        return back()
               ->with('message',"New staff is saved");	   
    }
      //
    /**
     * editStaff
     * 
     * @return param $id
     */
    public function editStaff($id)
    {
        
        // dd("here");
        try {

            $staffs = Staff::where('id', $id)->first();
            if($staffs == NULL) {
                return back()
                       ->with('message',"Unable to find staff with id:$id");
            }
            
            return view('admin.staff.edit',[
                'staff' => $staffs,
               
                ]);
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message',"some exception occurs");
        }
        
    }

       /**
     * updateStaff
     * 
     * @return param $id
     */
    public function updateStaff($id, Request $request)
    {
          
       try {

            if(!$staff = Staff::findOrFail($id)) {
                return back()
                       ->with('message',"Unable to find Staff with This Id:",$id);
            }
           
            $staff->update($request->all());
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message','some exception occurs');
        }
        return back()
        ->with('message', "Staff with the id: {$staff->id} successfully updated.");
    }

      // staff delete function
      public function deleteStaff($id)
      {
          $staff = Staff::findorfail($id);
        //   $staff->mDelete = 1;
          $staff->delete();
          return redirect()->route('admin.staff.list')->with('message',  'staff deleted successfully');
      }
  

}
