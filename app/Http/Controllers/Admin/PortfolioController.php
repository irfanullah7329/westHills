<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
class PortfolioController extends Controller
{
    //
    public function index()
    {
        $portfolios = Portfolio::all();
                        
        return view('admin.portfolio.index',[
           
            'portfolios' => $portfolios
            ]);
    }
   //
   //
   public  function createPortfolio()
   {
       return view('admin.portfolio.add');
   }
   //

   public function storePortfolio(Request $request)
   {     
      
        
       try { 

           $portfolio = $request->all();
            // dd($portfolio);
        if($request->has('portfolio_image'))
       {
           $image_Name = time().'.'.request()->portfolio_image->getClientOriginalExtension();
           request()->portfolio_image->move(public_path('images/portfolio_images'), $image_Name);
           $portfolio['image'] = $image_Name;
        }
        //   dd($portfolio);
           Portfolio::create($portfolio);
         
       }catch(\Exception $exception){
            return $exception;          
       }
       return back()
              ->with('message',"New Portfolio is saved");	   
   }

   
    // edit portfolio
    public function editPortfolio($id)
    {
        
        // dd("here");
        try {

            $portfolios = Portfolio::where('id', $id)->first();
            if($portfolios == NULL) {
                return back()
                       ->with('message',"Unable to find Portfolio with id:$id");
            }
            
            return view('admin.portfolio.edit',[
                'portfolio' => $portfolios,
               
                ]);
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message',"some exception occurs");
        }
        
    }
    
     // update Portfolio
     public function updatePortfolio($id, Request $request)
     {
           
        try {
 
             if(!$portfolio = Portfolio::findOrFail($id)) {
                 return back()
                        ->with('message',"Unable to find Portfolio with This Id:",$id);
             }
             if($request->has('portfolio_image'))
             {
                 $image_Name = time().'.'.request()->portfolio_image->getClientOriginalExtension();
                 request()->portfolio_image->move(public_path('images/portfolio_images'), $image_Name);
                 $portfolio['image'] = $image_Name;
              }
              
             $portfolio->update($request->all());

            //  dd($portfolio);
         }catch(\Exception $exception){
             return $exception;
             return back()
                    ->with('message','some exception occurs');
         }
         return back()
         ->with('message', "Portfolio with the id: {$portfolio->id} successfully updated.");
     }

     //
     
     // team delete function
     public function deletePortfolio($id)
     {
         $portfolio = Portfolio::findorfail($id);
       //   $staff->mDelete = 1;
         $portfolio->delete();
         return redirect()->route('admin.portfolio.list')->with('message',  'Portfolio deleted successfully');
     }
}
