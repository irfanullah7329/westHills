<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    //
    public function index()
    {
        $team = Team::all();
                        
        return view('admin.team.index',[
           
            'teams' => $team
            ]);
    }
    //
    public  function createTeam()
    {
        return view('admin.team.add');
    }
    //
    public function storeTeam(Request $request)
    {     
       
         
        try { 

            $team = $request->all();
            
         if($request->has('ImageUrl'))
        {   
            
            $image_Name = time().'.'.request()->ImageUrl->getClientOriginalExtension();
            request()->ImageUrl->move(public_path('images/team_image'), $image_Name);
            $team['image'] = $image_Name;
         }
           
            Team::create($team);
          
        }catch(\Exception $exception){
             return $exception;          
        }
        return back()
               ->with('message',"New team is saved");	   
    }

    // edit team
    public function editTeam($id)
    {
        
        // dd("here");
        try {

            $teams = Team::where('id', $id)->first();
            if($teams == NULL) {
                return back()
                       ->with('message',"Unable to find team with id:$id");
            }
            
            return view('admin.team.edit',[
                'team' => $teams,
               
                ]);
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message',"some exception occurs");
        }
        
    }
    // update team
    public function updateTeam($id, Request $request)
    {
          
       try {

            if(!$team = Team::findOrFail($id)) {
                return back()
                       ->with('message',"Unable to find Team with This Id:",$id);
            }
              
            if($request->has('ImageUrl'))
            {

                if(file_exists(public_path('images/team_image/'.$team->image))){
                            unlink(public_path('images/team_image/'.$team->image));
              }
               $image_Name = time().'.'.request()->ImageUrl->getClientOriginalExtension();
                request()->ImageUrl->move(public_path('images/team_image'), $image_Name);
               $team['image'] = $image_Name;
           }   
            $team->update($request->all());
        }catch(\Exception $exception){
            return $exception;
            return back()
                   ->with('message','some exception occurs');
        }
        return back()
        ->with('message', "team with the id: {$team->id} successfully updated.");
    }

     // team delete function
     public function deleteTeam($id)
     {
         $team = Team::findorfail($id);
       //   $staff->mDelete = 1;
         $team->delete();
         return redirect()->route('admin.team.list')->with('message',  'team deleted successfully');
     }

}