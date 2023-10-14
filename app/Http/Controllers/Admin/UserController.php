<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

use App\User;
use App\Role;
use App\Church;
use App\UserChurch;

class UserController extends Controller
{
    
    protected $allRoles;

    protected $mainUsersView = "admin.users.";

    /**
     * __construct
     *
     * mixed $allRoles
     *
     * @return void
     */
    public function __construct(){

        $this->allRoles = Role::all();
    }

    /**
     * 
     * index 
     * 
     * @return Void
     */
    public function index()
    {
        $users = User::where('mDelete',NULL)
                       //->('isActive',NULL)
                       //-> orwhere('isActive',1)
                       //-> orwhere('isActive',0)
                       //-> orwhere('mDelete',0)
                       -> get();
        return view($this->mainUsersView.'index',[
            'users' => $users,
            'roles' => $this->allRoles
            ]);
    }
    
    /**
     * createUser
     * 
     * @return void
     */
    public  function createUser()
    {
        return view($this->mainUsersView.'add',[
            'roles' => $this->allRoles
        ]);
    }
    
    /**
     * storeUser
     * 
     * @return Success Message
     */
  
    public function storeUser(UserRequest $request)
    {
        
        try { 
           
            $user = $request->all();
            $user['password'] = Hash::make($request->password);
            User::create($user);
        }catch(\Exception $exception){
            return back()
                  ->with('message','some exception occurs');
                 
        }
        return back()
               ->with('message',"New User is saved");	   
    }

    /**
     * editUser
     * 
     * @return param $id
     */
    public function editUser(User $user)
    {
        //dd($user->UserId);
       
        $allChurches = Church::where([
            
            ['mDelete', '=', 0]

        ])->latest()->get(['ChurchId','ChurchName'])->toArray();
      
        $userChurches = UserChurch::where([
            
            ['UserId', '=', $user->UserId],
            ['mDelete', '=', 0],
            ['isActive', '=', 1]

        ])->get(['UserId','ChurchId'])->toArray();
       
        $getAllChurches = array_column($allChurches,'ChurchName','ChurchId');
        $userAssignedChurches = array_column($userChurches,'UserId','ChurchId');
        //$result = array_diff_key($all_churches,$userAssignedChurches);
        //print_r($result);
        return view($this->mainUsersView.'edit',[
            'user' => $user,
            'allChurches' => $getAllChurches,
            'userAssignedChurches' => $userAssignedChurches,
            'roles' => $this->allRoles
            ]
        );
        
    }
    
    /**
     * updateUser
     * 
     * @return param $id
     */
    public function updateUser($id, UserRequest $request)
    {
          
       try {

            if(!$user = User::findOrFail($id)) {
                return back()
                       ->with('message',"Unable to find User Id:",$id);
            }
            
            if(!empty($request->password)) {
                $request['password'] = bcrypt($request->password);
                //echo "if " .$request['password']; echo "<br>";
            }else{
                $request['password'] = $user->password;
            }
            
            $user->update($request->all());
        }catch(\Exception $exception){
            return back()
                   ->with('message','some exception occurs');
        }
        return back()
        ->with('message', "User with the id: {$user->UserId} successfully updated.");
    }
      // user delete function
    public function deleteUser($id)
    {
        $user = User::findorfail($id);
        $user->mDelete = 1;
        $user->save();
        return redirect()->route('admin.users.list')->with('message',  'User deleted successfully');
    }

    /**
     * Assign Churches to user
     * 
     * @submit form 
     */
    public function assginChurchesToUser(Request $request) {

        //dd($request);
        
        if(isset($request->userSelectedChurches)){

            // Cheked When there is no Addition or subtraction of the church
            if(isset($request->oldAssignedChurches) && count($request->oldAssignedChurches) > 0){
              
                $addAssignedChurchesOperation = array_diff($request->userSelectedChurches,$request->oldAssignedChurches);
                
                if( empty($addAssignedChurchesOperation) && ( count($request->userSelectedChurches) == count($request->oldAssignedChurches) )) {
                    
                    return back()->with('UserChurchAssignmessage',  'Please first add a church');

                }elseif(count($addAssignedChurchesOperation) > 0){

                    foreach( $addAssignedChurchesOperation as $userAddChurchId) {
                   
                        UserChurch::addUserChurch($request,$userAddChurchId);
        
                    }
                    return back()->with('UserChurchmessage',  'Church Assigning done succesfully');

                }
            }
          
            
            if(!isset($request->oldAssignedChurches)) {

                foreach($request->userSelectedChurches as $userAddChurchId) {
                   
                    UserChurch::addUserChurch($request,$userAddChurchId);
    
                }
                return back()->with('UserChurchmessage',  'Church Assigning done succesfully');
            }

            $removeAssignChurchesUpdateOperation = array_diff($request->oldAssignedChurches, $request->userSelectedChurches);

            if(isset($removeAssignChurchesUpdateOperation) && count($removeAssignChurchesUpdateOperation) > 0) {

                foreach($removeAssignChurchesUpdateOperation as $userAssignChurcId) {
                   
                    $updateUserChurchesStatus = UserChurch::where('UserId', $request->UserId)
                        ->where('ChurchId', $userAssignChurcId)
                        ->update(['mDelete' => 1, 'UpdatedBy'=> $request->UpdatedBy ]);
    
                }
            }

            return back()->with('UserChurchmessage',  'Church Assigning done succesfully');
           
            
        }elseif(!isset($request->userSelectedChurches)) {

            if(!isset($request->oldAssignedChurches)) {
                
                return back()->with('UserChurchAssignmessage',  'Please first assign a church');

            }

            $updateChurchesOfTheUser = UserChurch::where([

                ['UserId', '=', $request->UserId]
    
            ])->update(['mDelete'=>1]);

            return back()->with('UserChurchmessage',  'Church Assigning done succesfully');
            
        }
        
    }

}
