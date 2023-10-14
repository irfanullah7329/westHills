<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    //
     //
     public function index()
     {
         $categories = Category::all();
                         
         return view('admin.category.index',[
            
             'categories' => $categories
             ]);
     }
     //
     public  function createCategory()
     {
         return view('admin.category.add');
     }
     //
     public function storeCategory(Request $request)
     {     
        
          
         try { 
 
             $category = $request->all();
             
         
             Category::create($category);
           
         }catch(\Exception $exception){
              return $exception;          
         }
         return back()
                ->with('message',"New Category is saved");	   
     }
 
     // edit team
     public function editCategory($id)
     {
         
         // dd("here");
         try {
 
             $categories = Category::where('id', $id)->first();
             if($categories == NULL) {
                 return back()
                        ->with('message',"Unable to find Category with id:$id");
             }
             
             return view('admin.category.edit',[
                 'category' => $categories,
                
                 ]);
         }catch(\Exception $exception){
             return $exception;
             return back()
                    ->with('message',"some exception occurs");
         }
         
     }
     // update team
     public function updateCategory($id, Request $request)
     {
           
        try {
 
             if(!$category = Category::findOrFail($id)) {
                 return back()
                        ->with('message',"Unable to find Category with This Id:",$id);
             }
 
             $category->update($request->all());
         }catch(\Exception $exception){
             return $exception;
             return back()
                    ->with('message','some exception occurs');
         }
         return back()
         ->with('message', "Category with the id: {$category->id} successfully updated.");
     }
 
      // team delete function
      public function deleteCategory($id)
      {
          $category = Category::findorfail($id);
        //   $staff->mDelete = 1;
          $category->delete();
          return redirect()->route('admin.category.list')->with('message',  'category deleted successfully');
      }
}
